<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "xpwear");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values 
$name = $_POST['name'];
$price = $_POST['price'];
$game = $_POST['game'];
$image = $_POST['image'];
$description = $_POST['description'];
$size = $_POST['size'];

// Insert into the table
$sql = "INSERT INTO items (name, game, price, image, description, size)
        VALUES ('$name', '$game', '$price', '$image', '$description', '$size')";

if ($conn->query($sql) === TRUE) {
    echo "Item added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>