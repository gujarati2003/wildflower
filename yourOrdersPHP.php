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

// Define the SQL query
$sql = "SELECT * FROM orders WHERE user_id = $user_id";

// Execute the SQL query
$result = $mysqli->query($sql);
echo "<p style='font-size:30px; color:#66327F; font-weight: bold;'>YOUR ORDERS</p>";
// Check if any orders were found
if ($result->num_rows > 0) {
    // Output a table
    echo "<table style='margin: 0 auto; width: 50%;text-align: center;'>";
    echo "<thead style='text-align: center;'>
    <tr><th style='font-size:15px; color:#9169c1; font-weight: bold;'>ORDER ID</th>
    <th style='font-size:15px; color:#9169c1; font-weight: bold;'>ORDER DATE</th>
    <th style='font-size:15px; color:#9169c1; font-weight: bold;'>VIEW ORDER</th></tr></thead>";

    echo "<tbody>";

    // Loop through the results and output each order as a table row
    while ($row = $result->fetch_assoc()) {
        $orderNum = $row["order_number"];
        echo "<tr>";
        echo "<td><p>" . $row["order_number"] . "</p></td>";
        echo "<td><p>" . $row["order_date"] . "</p></td>";
        echo "<td><p> <a href='orderDetails.php?order_id=$orderNum'>VIEW ORDER</a> </p></td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No orders found";
}

// Close the MySQLi connection
$mysqli->close();
?>