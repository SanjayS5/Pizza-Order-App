<?php
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

$sql = 'SELECT * from ingredients';

$result = mysqli_query($conn, $sql);

$ingredients = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($ingredients);

// echo "#####################################";

foreach ($result as $row) {
    // echo " ";
    // echo $row['name'];
    // echo " ";
    // echo $row['amount'];
    // if ($row['amount'] > 500) {
    //     echo " Yeahhh";
    // }
}
