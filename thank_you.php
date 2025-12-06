<?php

session_start();

// optional: clear Buy Now session data so it doesn't persist
if (isset($_SESSION['buy_now'])) {
    unset($_SESSION['buy_now']);
}
// thankyou.php
session_start();

// Optional: clear the cart after successful purchase
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Thank You for Your Purchase</title>

    <title>Thank You - Wild Skincare</title>

    <link rel="stylesheet" href="./CSS/Products.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            background: #fdecec;
            font-family: 'Open Sans', sans-serif;
        }
        .thankyou-wrapper {

            max-width: 650px;
            margin: 60px auto;
            background: #fff;
            padding: 40px 35px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        .thankyou-wrapper h1 {
            color: #b22222;
            font-size: 28px;
            margin-bottom: 16px;
        }
        .thankyou-wrapper p {
            font-size: 16px;
            margin-bottom: 22px;
            color: #444;
        }
        .btn-home {
            display: inline-block;
            background: #b22222;
            color: white;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }
        .btn-home:hover {
            background: #8b0000;

            max-width: 700px;
            margin: 60px auto;
            background: #fff;
            border-radius: 12px;
            padding: 32px 36px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            text-align: center;
        }
        .thankyou-title {
            font-size: 24px;
            font-weight: 700;
            color: #b22222;
            margin-bottom: 12px;
        }
        .thankyou-text {
            font-size: 16px;
            margin-bottom: 24px;
        }
        .btn-pill {
            border: none;
            border-radius: 999px;
            padding: 10px 24px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-continue {
            background: #ffd814;
            color: #000;

        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="thankyou-wrapper">

    <h1>Thank You!</h1>
    <p>Your order has been successfully placed. A confirmation email will be sent shortly.</p>
    <a href="Products.php" class="btn-home">Continue Shopping</a>

    <div class="thankyou-title">Thank You for Your Purchase!</div>
    <p class="thankyou-text">
        Your order has been placed successfully. You will receive an email confirmation shortly.
    </p>

    <!-- Continue Shopping just goes back to the products page -->
    <a href="Products.php" class="btn-pill btn-continue">
        Continue Shopping
    </a>

</div>

</body>
</html>
