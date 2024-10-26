<?php
include 'product.php';

if (isset($_POST['product_ID'])) {
    $product_ID = $_POST['product_ID'];

    $sql = "DELETE FROM products WHERE product_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_ID);

    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No product ID provided.";
}
?>
