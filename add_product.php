<?php 
include 'product.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $product_name = $conn->real_escape_string($_POST['product_name']);
    $product_stocks = $conn->real_escape_string($_POST['product_stocks']);
    $product_description = $conn->real_escape_string($_POST['product_description']);
    $product_price = $conn->real_escape_string($_POST['product_price']);  
    $date_product_purchase = $conn->real_escape_string($_POST['date_product_purchase']);
    $date_product_add = date('Y-m-d');  
    $product_status = 'Available';

    $sql = "INSERT INTO products (product_name, product_stocks, product_description, product_price, product_status, date_product_purchase, date_product_add) 
            VALUES ('$product_name', '$product_stocks', '$product_description', '$product_price', '$product_status', '$date_product_purchase', '$date_product_add')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New product added successfully'); window.location.href='dashboard.php#inventory';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href='index.php';</script>";
    }

    $conn->close();
}
?>
