<?php
// Start session if needed
session_start();

// Include database connection
require_once '../includes/db.php'; // Adjust path if needed

// Check if product ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET['id'];

    // Optional: Fetch the product first (e.g., to delete the image too)
    $stmt = $conn->prepare("SELECT image FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // Delete product image from the server (if stored locally)
        $image_path = '../images/' . $product['image'];
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        // Delete the product from the database
        $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$product_id]);

        // Redirect back to the manage products page
        header("Location: manage_products.php?status=deleted");
        exit;
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid product ID.";
}
?>
