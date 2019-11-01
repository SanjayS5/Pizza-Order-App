<?php

if (isset($_POST['submit'])) {
    $pizza = $_POST['pizza'];
    print_r($_POST);
    echo "You selected the $pizza";

    $base = $_POST['base'];
    $toppings = implode(", ", $_POST['topping']);

    $order = "$toppings, " . "$pizza";
    echo $order;
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

if ($pizza && $base && $toppings) {
    // $query = $conn->prepare("INSERT INTO workout_data(sets, reps, exercises_id) VALUES(?, ?, ?);");
    // $query->bind_param("iii", $newsets, $newreps, $id);
    // $query->execute();
    // $insertresult = $query->get_result();
}
