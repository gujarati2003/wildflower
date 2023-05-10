<?php
session_start();

// Validate and sanitize user input
if (!isset($_SESSION['user_id'])) {
    echo "User ID is missing";
    exit();
}
$user_id = intval($_SESSION['user_id']);

// Set database credentials
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $dbname);

// Handle MySQLi connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$order_id = $_GET['order_id'];
echo "<p>ORDER DETAILS</p>";
// echo "<p>".$order_id."</p>";

// Define the SQL query
// $sql = "SELECT * FROM order_item WHERE orders_id = $order_id";
$sql = "SELECT *
FROM order_item
INNER JOIN products
ON order_item.product_id = products.product_id
WHERE order_item.orders_id = $order_id";

$result = $mysqli->query($sql);

$total = 0;
if ($result->num_rows > 0) {
    // Output a table
    echo "<table style='margin: 0 auto; width: 50%;text-align: center;'>";
    echo "<thead style='text-align: center;'>
    <tr><th style='font-size:15px; color:#9169c1; font-weight: bold;'>PRODUCT ID</th>
    <th style='font-size:15px; color:#9169c1; font-weight: bold;'>PRODUCT NAME</th>
    <th style='font-size:15px; color:#9169c1; font-weight: bold;'>IMG</th>
    <th style='font-size:15px; color:#9169c1; font-weight: bold;'>PRICE</th></tr></thead>";

    echo "<tbody>";

    // Loop through the results and output each order as a table row
    while ($row = $result->fetch_assoc()) {
        $total += $row["product_price"];
        echo "<tr>";
        echo "<td>" . $row["product_id"] . "</td>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td><p><img src='" . $row["product_img"] . "' width='112.5' height='152.5'></p></td>";
        echo "<td> $" . $row["product_price"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No orders found";
}
echo "<center><p>TOTAL:</p>";
echo "<p> $" . $total . "</p></center>";