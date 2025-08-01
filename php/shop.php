<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

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

function removeFromCart($itemName) {
    $_SESSION['cart'] = array_filter($_SESSION['cart'], function($item) use ($itemName) {
        return $item['name'] !== $itemName;
    });
}

function clearCart() {
    $_SESSION['cart'] = [];
}

function updateCartDisplay() {
    $cartItems = $_SESSION['cart'];
    $subtotal = 0;
    $cartHtml = '';

    if (empty($cartItems)) {
        $cartHtml = '<p>Carrello Vuoto</p>';
    } else {
        // Calcola il subtotale prima di generare l'HTML
        foreach ($cartItems as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        // Genera l'HTML con il subtotale aggiornato
        $cartHtml .= '<p id="subtotal">Subtotale: €' . number_format($subtotal, 2) . '</p>';
        $cartHtml .= '<button id="checkout-btn" onclick="handleCheckout()">Procedi all\'acquisto</button>';
        $cartHtml .= '<button id="clear-cart-btn" onclick="clearCart()">Svuota Carrello</button>';

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
                    <p class="price">Prezzo: €' . number_format($item['price'], 2) . '</p>
                    <button class="remove-btn" alt="Rimuovi prodotto dal carrello" onclick="removeFromCart(\'' . $item['name'] . '\', \'' . $item['size'] . '\')"><i class="fa-solid fa-trash-can"></i></button>
                </div>';
        }
    }

    return $cartHtml;
}

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