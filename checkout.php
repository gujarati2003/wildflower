<?php
session_start();

$user_id = $_SESSION['user_id'];

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}


$order_date = date("Y-m-d H:i:s");
$stmt = $mysqli->prepare("INSERT INTO orders (user_id, order_date) VALUES (?, ?)");
$stmt->bind_param("is", $user_id, $order_date);
$stmt->execute();
$order_id = $mysqli->insert_id;


if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $product_id = $product[0];
        $stmt = $mysqli->prepare("INSERT INTO order_item (product_id, orders_id) VALUES (?, ?)");
        $stmt->bind_param('ii', $product_id, $order_id);
        $stmt->execute();
    }
}

header("Location: checkOutSuccess.php");
unset($_SESSION['cart']);