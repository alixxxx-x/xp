<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "xpwear");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all product details
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

// Initialize an array to store all the items
$products = [];

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    // Loop through all the items in the database
    while ($row = $result->fetch_assoc()) {
        // Store each item in the products array
        $products[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'game' => $row['game'],
            'price' => $row['price'],
            'size' => $row['size'],
            'image' => $row['image'],
            'description' => $row['description'],
            
        ];
    }
} else {
    // No items found
    $products = [];
}

// Close the database connection
$conn->close();
?>