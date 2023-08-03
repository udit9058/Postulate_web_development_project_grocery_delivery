<?php 
session_start();
// Create connection
$conn = new mysqli('localhost', 'root', '', 'grocery_data');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $_SESSION['username'];
$product = $_POST["product"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
 // Prepare the SQL statement to insert data
 $sql = "INSERT INTO cart (username, product_name, product_quantity	, total_amount)
 VALUES ('$result', '$product', '$price', '$quantity')";

 // Check if the query is successful
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
    // header("Location: http://localhost:8080/Grocery_app/log.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>