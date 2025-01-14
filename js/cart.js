function addToCart(itemName, itemPrice, quantity, itemImage, itemSize) {
    console.log('Adding to cart:', itemName, itemPrice, quantity, itemImage, itemSize);
    const formData = new FormData();
    formData.append('action', 'add');
    formData.append('itemName', itemName);
    formData.append('itemPrice', itemPrice);
    formData.append('quantity', quantity);
    formData.append('itemImage', itemImage);
    formData.append('itemSize', itemSize);

    fetch('./php/shop.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            console.log('Response from addToCart:', data);
            document.getElementById('cart-items').innerHTML = data;
            updateSubtotal();
        });
}

function removeFromCart(itemName) {
    console.log('Removing from cart:', itemName);
    const formData = new FormData();
    formData.append('action', 'remove');
    formData.append('itemName', itemName);

    fetch('./php/shop.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            console.log('Response from removeFromCart:', data);
            document.getElementById('cart-items').innerHTML = data;
            updateSubtotal();
        });
}

function loadCart() {
    console.log('Loading cart');
    fetch('./php/shop.php', {
        method: 'POST',
        body: new URLSearchParams({ action: 'load' })
    })
        .then(response => response.text())
        .then(data => {
            //console.log('Response from loadCart:', data);
            document.getElementById('cart-items').innerHTML = data;
            updateSubtotal();
        });
}

function updateSubtotal() {
    var cartItemContainer = document.getElementById('cart-items');
    var cartRows = cartItemContainer.getElementsByClassName('cart-item');
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('price')[0];
        var quantityElement = cartRow.getElementsByClassName('quantity-input')[0];
        var price = parseFloat(priceElement.innerText.replace('€', '').replace(',', '.'));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
    }
    total = Math.round(total * 100) / 100;
    document.getElementById('subtotal').innerText = 'Subtotale: €' + total;
    
    // Show/Hide buttons if cart items > 0
    var clearCartBtn = document.getElementById('clear-cart-btn');
    if (cartRows.length === 0) {
        clearCartBtn.classList.add('hidden');
    } else {
        clearCartBtn.classList.remove('hidden');
    }
}

function clearCart() {
    console.log('Clearing cart');
    fetch('./php/shop.php', {
        method: 'POST',
        body: new URLSearchParams('action=clear')
    })
        .then(response => response.text())
        .then(data => {
            console.log('Response from clearCart:', data);
            document.getElementById('cart-items').innerHTML = data;
            updateSubtotal();
            toggleCartButtons();
        });
}

document.addEventListener('DOMContentLoaded', () => {
    loadCart();

    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', event => {
            const card = event.target.closest('.card');
            const itemName = card.querySelector('h3').textContent;
            const itemPrice = parseFloat(card.querySelector('.price').textContent.replace('€', '').replace(',', '.'));
            const quantity = parseInt(card.querySelector('.quantity-input').value, 10);
            const itemImage = card.querySelector('img').src;
            const itemSize = card.querySelector('.size-select') ? card.querySelector('.size-select').value : '';

            console.log('Adding item:', itemName, itemPrice, quantity, itemImage, itemSize);
            if (quantity > 0 && quantity <= 5) {
                addToCart(itemName, itemPrice, quantity, itemImage, itemSize);
            } else {
                alert("Seleziona una quantità valida.");
            }
        });
    });

    document.getElementById('cart-items').addEventListener('input', event => {
        if (event.target.classList.contains('quantity-input-cart')) {
            const itemName = event.target.getAttribute('data-item');
            const newQuantity = parseInt(event.target.value, 10);
            console.log('Updating quantity for item:', itemName, newQuantity);
            const item = cartItems.find(i => i.name === itemName);

            if (item && newQuantity > 0) {
                item.quantity = newQuantity;
                updateSubtotal();
            }
        }
    });

    // Initial check to hide buttons if cart is empty
    updateSubtotal();
});