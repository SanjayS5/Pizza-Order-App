<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $pizza = $_POST['pizza'];
    print_r($_POST);

    $toppingsArray = $_POST['topping'];
    $toppings = "";
    foreach ($toppingsArray as $item => $value) {
        $toppings .= "+$item,";
    }

    $base = $_POST['base'];
    $order = "$pizza," . "$toppings";
    
    $customerId = 33; // UPDATE LATER - include file to create 
    // record, then add that id to the order
    $status = "waiting";

    // $amount = 20;
}

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

if ($pizza && $base && $status && $toppings) {
    if ($query = $conn->prepare("INSERT INTO orders(base, toppings, `status`, customerId) VALUES(?, ?, ?, ?);")) {
        $query->bind_param("sssi", $base, $order, $status, $customerId);
        $query->execute();
        $insertresult = $query->get_result();
    } else {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error;
    }
}

if ($pizza && $base && $status && $toppings) {
    foreach ($toppingsArray as $item => $value) {
        if ($query = $conn->prepare("UPDATE ingredients set amount = amount - ? where `name` = '$item';")) {
            $query->bind_param("i", $value);
            $query->execute();
            $insertresult = $query->get_result();
        } else {
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    }

}
