<?php

// if (isset($_POST['submit'])) {
//     $pizza = $_POST['pizza'];
//     print_r($_POST);
//     echo "You selected the $pizza";

//     if (!empty($_POST['topping'])) {
//         foreach ($_POST['topping'] as $topping) {
//             echo "$topping ";
//         }
//     }

// }

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

if (isset($_POST['orders'])) {
    print_r($_POST);
    echo "complete";

    $order = json_decode($_POST['orders'], true);
    if (json_last_error() == JSON_ERROR_NONE) {
        echo "order var";
        foreach ($order as $item => $value) {
            $status = "waiting";
            $customerId = 33;
            $pizza = $value['pizza'];
            echo "PIZZA: $pizza";
            $base = $value['base'];
            echo "BASE: $base";
            $toppings = "";
            $toppingsArray = $value['topping'];
            foreach ($toppingsArray as $array) {
                foreach ($array as $topping => $amount) {
                    $toppings .= "+$topping,";
                }
            }
            $newOrder = "$pizza, $toppings";
            echo "NEW ORDER: $newOrder";
            // echo "TOPPINGS: $toppings";
            insertOrder($newOrder, $base, $status, $customerId);
            updateIngredients($toppingsArray);
            print_r($value);

        }
    } else {
        echo json_last_error_msg();
    }

    // $pizza = $_POST['orders'];
    // print_r($_POST);

    // $toppingsArray = $_POST['topping'];
    // $toppings = "";
    // foreach ($toppingsArray as $item => $value) {
    //     $toppings .= "+$item,";
    // }

    // $base = $_POST['base'];
    // $order = "$pizza," . "$toppings";

    // $customerId = 33; // UPDATE LATER - include file to create
    // // record, then add that id to the order
    // $status = "waiting";
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
        // echo "HELLO $pizza $base $status $toppings $customerId";
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

foreach ($toppingsArray as $array) {
    foreach ($array as $topping => $amount) {
        $toppings .= "+$topping,";
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

// function updateIngredients($toppingsArray) {
//     if ($toppingsArray) {
//         foreach ($toppingsArray as $item => $value) {
//             if ($query = $conn->prepare("UPDATE ingredients set amount = amount - ? where `name` = '$item';")) {
//                 $query->bind_param("i", $value);
//                 $query->execute();
//                 $insertresult = $query->get_result();
//             } else {
//                 $error = $conn->errno . ' ' . $conn->error;
//                 echo $error;
//             }
//         }

//     }
// }
