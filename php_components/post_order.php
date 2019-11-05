<?php

//create customer first
//create order
//pass customer id to order

if (isset($_POST['orders'])) {
    print_r($_POST);
    echo "complete";

    $order = json_decode($_POST['orders'], true);
    if (json_last_error() == JSON_ERROR_NONE) {
        $newOrder = "";
        $base = "";
        $status = "Waiting";
        $name = "";
        $email = "";
        $address = "";
        $memberId = 0;
        foreach ($order as $item => $value) {
            $name = $value['name'];
            $email = $value['email'];
            $address = $value['address'];
            $memberId = $value['memberId'];
            $pizza = $value['pizza'];
            $baseVal = $value['base'];
            $base .= "$baseVal,";
            $toppings = "";
            $toppingsArray = $value['topping'];
            foreach ($toppingsArray as $array) {
                foreach ($array as $topping => $amount) {
                    $toppings .= "+$topping,";
                }
            }
            $newOrder .= "$pizza, $toppings";
            updateIngredients($toppingsArray);
        }
        insertOrder($newOrder, $base, $status, getCustomerId());
        insertCustomer($name, $address, $memberId);
    } else {
        echo json_last_error_msg();
    }

} else {
    echo "None";
}

function insertOrder($newOrder, $base, $status, $customerId)
{
    $servername = "localhost";
    $username = "myuser";
    $password = "mypass";
    $database = "pizzadb";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
    if (!$conn) {
        echo ("Connection failed: " . mysqli_connect_error());
    }
    if ($newOrder && $base && $status && $customerId) {
        if ($query = $conn->prepare("INSERT INTO orders(base, toppings, `status`, customerId) VALUES(?, ?, ?, ?);")) {
            $query->bind_param("sssi", $base, $newOrder, $status, $customerId);
            $query->execute();
            $insertresult = $query->get_result();
        } else {
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    } else {
        echo "FAIL insert";
    }
}

function updateIngredients($toppingsArray)
{

    $servername = "localhost";
    $username = "myuser";
    $password = "mypass";
    $database = "pizzadb";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
    if (!$conn) {
        echo ("Connection failed: " . mysqli_connect_error());
    }
    if ($toppingsArray) {
        foreach ($toppingsArray as $array) {
            foreach ($array as $topping => $value) {
                if ($query = $conn->prepare("UPDATE ingredients set amount = amount - ? where `name` = '$topping';")) {
                    $query->bind_param("i", $value);
                    $query->execute();
                    $insertresult = $query->get_result();
                } else {
                    $error = $conn->errno . ' ' . $conn->error;
                    echo $error;
                }
            }
        }
    } else {
        echo "FAIL update";
    }
}

function insertCustomer($name, $address, $memberId)
{
    $servername = "localhost";
    $username = "myuser";
    $password = "mypass";
    $database = "pizzadb";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
    if (!$conn) {
        echo ("Connection failed: " . mysqli_connect_error());
    }
    if (!$memberId) {
        echo "From insertCustomer: Member Id fail";
    }

    if ($name && $address) {
        if ($query = $conn->prepare("INSERT INTO customers(`name`, `address`, memberId) VALUES(?, ?, ?);")) {
            $query->bind_param("ssi", $name, $address, $memberId);
            $query->execute();
            $insertresult = $query->get_result();
        } else {
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    } else {
        echo "FAIL insert";
    }
}



function getCustomerId() {
    $servername = "localhost";
    $username = "myuser";
    $password = "mypass";
    $database = "pizzadb";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    $query= $conn->prepare("Select id from customers;");
    $query->execute();
    $cresult = $query->get_result();
    $customerId=mysqli_num_rows($cresult);
    echo "Customer id is $customerId";
    $customerId++;
    echo "New customer id is $customerId";
    return $customerId;
}
     