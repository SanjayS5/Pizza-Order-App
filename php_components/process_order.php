<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $pizza = $_POST['pizza'];
    print_r($_POST);
    echo "You selected the $pizza";

    $toppingsArray = $_POST['topping'];
    echo "TOPPINGS ARRAY : ";
    foreach ($toppingsArray as $item) {
        echo " $item";
    }

    $base = $_POST['base'];
    $toppings = implode(", ", $_POST['topping']);

    $order = "$toppings, " . "$pizza";
    echo " Your order: $order";
    echo " Your base: $base";
    $customerId = 33; // UPDATE LATER
    $status = "waiting";

    $amount = 200;
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
    foreach ($toppingsArray as $item) {
        if ($query = $conn->prepare("UPDATE ingredients set amount = amount - ? where `name` = '$item';")) {
            $query->bind_param("i", $amount);
            $query->execute();
            $insertresult = $query->get_result();
        } else {
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    }

}
