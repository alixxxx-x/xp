<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "xpwear");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch product details
// 2. Fetch item with id = 1
$sql = "SELECT * FROM items WHERE id = 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Store data in variables
    $name = $row['name'];
    $price = $row['price'];
    $image = $row['image'];
    $description = $row['description'];
    
} else {
    echo "Item not found.";
    exit;
}
?>