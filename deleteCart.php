<?php
session_start();

$id = $_POST['name0'];
$name = $_POST['name1'];
$price = $_POST['name2'];
$event = $_POST['event'];

if ($event == 'Delete') {
    foreach ($_SESSION['cart'] as $key => $product) {
        if ($product[0] == $id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

header('location:shoppingCart.php');
?>