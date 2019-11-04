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
        foreach($order as $item => $value) {
            $pizza = $value['pizza'];
            echo "PIZZA: $pizza";
            $base = $value['base'];
            echo "BASE: $base";
            $toppings = "";
            $toppingsArray = $value['topping'];
            foreach($toppingsArray as $array) {
                foreach($array as $topping => $amount) {
                    echo "TOPPING $topping, AMOUNT $amount  ";
                    $toppings .= "+$topping,";
                }
            }
            echo "TOPPINGS: $toppings";
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
