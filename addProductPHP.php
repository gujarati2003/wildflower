<?php

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO `products`(`product_name`, `product_img`, `category_id`, `product_price`) 
VALUES(?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param(
    "ssid",
    $_POST["product_name"],
    $_POST["product_img"],
    $_POST["category_id"],
    $_POST["product_price"]
);

if ($stmt->execute()) {

    header("Location: addProduct.php");
    exit;

} else {
    die($mysqli->error . " " . $mysqli->errno);

}