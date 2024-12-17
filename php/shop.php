<?php
session_start();

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add item to cart
function addToCart($itemName, $itemPrice, $quantity, $itemImage, $itemSize) {
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['name'] === $itemName && $item['size'] === $itemSize) {
            $item['quantity'] += $quantity;
            if ($item['quantity'] > 5) {
                $item['quantity'] = 5;
            }
            return;
        }
    }
    if ($quantity > 5) {
        $quantity = 5;
    }
    $_SESSION['cart'][] = [
        'name' => $itemName,
        'price' => $itemPrice,
        'quantity' => $quantity,
        'image' => $itemImage,
        'size' => $itemSize
    ];
}

// Function to remove item from cart
function removeFromCart($itemName) {
    $_SESSION['cart'] = array_filter($_SESSION['cart'], function($item) use ($itemName) {
        return $item['name'] !== $itemName;
    });
}

function clearCart() {
    $_SESSION['cart'] = [];
}

// Function to update cart display
function updateCartDisplay() {
    $cartItems = $_SESSION['cart'];
    $subtotal = 0;
    $cartHtml = '';

    if (empty($cartItems)) {
        $cartHtml = '<p>Carrello Vuoto</p>';
    } else {
        foreach ($cartItems as $item) {
            $sizeHtml = '';
            if ($item['size'] !== '') {
                $sizeHtml = 'Taglia: ' . $item['size'];
            }
            $cartHtml .= '
                <div class="cart-item">
                    <img src="' . $item['image'] . '" alt="' . $item['name'] . '" class="cart-item-image">
                    <p>' . $item['name'] . '</p>
                    <p>' . $sizeHtml . '</p>
                    <p>Quantità: ' . $item['quantity'] . '</p>
                    <p>Prezzo: €' . number_format($item['price'], 2) . '</p>
                    <button class="remove-btn" onclick="removeFromCart(\'' . $item['name'] . '\', \'' . $item['size'] . '\')">Rimuovi</button>
                </div>';
            $subtotal += $item['price'] * $item['quantity'];
        }
        $cartHtml .= '<p id="subtotal">Subtotale: €' . number_format($subtotal, 2) . '</p>';
        $cartHtml .= '<button id="checkout-btn" onclick="handleCheckout()">Procedi all\'acquisto</button>';
        $cartHtml .= '<button id="clear-cart-btn" onclick="clearCart()">Svuota Carrello</button>';
    }

    return $cartHtml;
}

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $itemName = $_POST['itemName'] ?? '';
    $itemPrice = $_POST['itemPrice'] ?? 0;
    $quantity = $_POST['quantity'] ?? 0;
    $itemImage = $_POST['itemImage'] ?? '';
    $itemSize = $_POST['itemSize'] ?? '';

    if ($action === 'add') {
        addToCart($itemName, $itemPrice, $quantity, $itemImage, $itemSize);
    } elseif ($action === 'remove') {
        removeFromCart($itemName, $itemSize);
    } elseif ($action === 'clear') {
        clearCart();
    } elseif ($action === 'load') {
        echo updateCartDisplay();
        exit;
    } elseif ($action === 'getCart') {
        echo json_encode($_SESSION['cart']);
        exit;
    }
    echo updateCartDisplay();
    exit;
}
?>