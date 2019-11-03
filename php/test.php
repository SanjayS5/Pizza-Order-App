<?php

if (isset($_POST['submit'])) {
    $pizza = $_POST['pizza'];
    print_r($_POST);
    echo "You selected the $pizza";

    if (!empty($_POST['topping'])) {
        foreach ($_POST['topping'] as $topping) {
            echo "$topping ";
        }
    }

}


