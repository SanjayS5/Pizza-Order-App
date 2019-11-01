<?php

if (isset($_POST['submit'])) {
    $pizza = $_POST['pizza'];
    print_r($_POST);
    echo "You selected the $pizza";
} else {
    echo "You did not select a pizza";
}