<?php
// Establish a database connection
// Create connection
$mysqli = require __DIR__ . "/database.php";

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the SQL query
$sql = "SELECT * FROM products WHERE category_id = 3";

// Execute the query
$result = mysqli_query($mysqli, $sql);

// Check if any products were found
if (mysqli_num_rows($result) > 0) {
    // Output the products as JSON
    $products = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $product = array(
            "product_id" => $row["product_id"],
            "product_name" => $row["product_name"],
            "product_price" => $row["product_price"],
            "product_img" => $row["product_img"]
        );
        array_push($products, $product);
    }
    echo json_encode($products);
} else {
    echo "No products found";
}

// Close the database connection
mysqli_close($mysqli);
?>