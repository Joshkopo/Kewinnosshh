<?php
include 'product.php';

if (isset($_POST['product_ID'])) {
    $product_ID = $_POST['product_ID'];
    $product_name = $_POST['product_name'];
    $product_stocks = $_POST['product_stocks'];
    $product_status = $_POST['product_status'];

    $sql = "UPDATE products SET product_name = ?, product_stocks = ?, product_status = ? WHERE product_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $product_name, $product_stocks, $product_status, $product_ID);

    if ($stmt->execute()) {
        echo "<script>alert('Product updated successfully'); window.location.href='dashboard.php#inventory';</script>";
    } else {
        echo "Error updating product: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No product ID provided.";
}
?>
