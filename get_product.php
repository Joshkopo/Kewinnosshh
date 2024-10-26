<?php
include 'product.php';

if (isset($_GET['product_ID'])) {
    $product_ID = $_GET['product_ID'];

    $sql = "SELECT * FROM products WHERE product_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_ID);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    echo json_encode($product);

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["error" => "No product ID provided."]);
}
?>
