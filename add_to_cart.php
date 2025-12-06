<?php
session_start();

$name   = $_POST['name']   ?? '';
$price  = $_POST['price']  ?? '';
$image  = $_POST['image']  ?? '';
$qty    = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;


if ($name === '' || $price === '') {
    header("Location: Products.php");

// which button was clicked: 'add' or 'buy_now'
$action = $_POST['action'] ?? 'add';

if ($name === '' || $price === '') {
    header("Location: products.php");

    exit;
}

if ($qty < 1) {
    $qty = 1;
}

$price = (float) $price;

// init cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// if same product already in cart, just increase qty
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['name'] === $name && (float)$item['price'] === $price) {
        $item['qty'] = isset($item['qty']) ? $item['qty'] + $qty : 1 + $qty;
        $found = true;
        break;
    }
}
unset($item);

if (!$found) {
    $_SESSION['cart'][] = [
        "name"  => $name,
        "price" => $price,
        "image" => $image,
        "qty"   => $qty,
    ];
}


// ✅ After adding, go back to product listing (not cart)
header("Location: Products.php");

// redirect based on action
if ($action === 'buy_now') {
    // Buy Now -> directly to buy.php
    header("Location: buy.php");
    exit;
}

// ---------- ADD THIS PART FOR POPUP ----------
$_SESSION['cart_message'] = 'Item added to cart';   // flash message flag
// ---------------------------------------------

header("Location: products.php");

exit;
}