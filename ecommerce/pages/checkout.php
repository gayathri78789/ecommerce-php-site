<?php
// If your project uses sessions (e.g., for user login or cart)
session_start();

// Include database connection if needed
// include 'includes/db.php';  // adjust path as necessary

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            padding: 50px;
        }
        .checkout-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .placeholder {
            text-align: center;
            color: #555;
        }
        .back {
            display: block;
            margin-top: 30px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <h2>Checkout Page</h2>
    <p class="placeholder">This is a placeholder for your checkout process.</p>
    <p class="placeholder">You can show billing info, cart total, and a payment button here.</p>

    <a class="back" href="cart.php">← Back to Cart</a>
</div>

</body>
</html>
