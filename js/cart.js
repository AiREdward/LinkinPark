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
            const cartItemsElement = document.getElementById('cart-items');
            if (cartItemsElement) {
                cartItemsElement.innerHTML = data;
            }
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
            const cartItemsElement = document.getElementById('cart-items');
            if (cartItemsElement) {
                cartItemsElement.innerHTML = data;
            }            
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
            console.log('Response from loadCart:', data);
            const cartItemsElement = document.getElementById('cart-items');
            if (cartItemsElement) {
                cartItemsElement.innerHTML = data;
            }            
            updateSubtotal();
        });
}

function updateSubtotal() {
    var cartItemContainer = document.getElementById('cart-items');
    if (!cartItemContainer) return;
    var cartRows = cartItemContainer.getElementsByClassName('cart-item');
    var total = 0;

    function calculateSubtotal() {
        total = 0;
        for (var i = 0; i < cartRows.length; i++) {
            var cartRow = cartRows[i];
            var priceElement = cartRow.getElementsByClassName('price')[0];
            var quantityElement = cartRow.getElementsByClassName('quantity-input')[0];
            if (!quantityElement) return; // Wait if quantityElement is not found
            var price = priceElement && priceElement.textContent ? parseFloat(priceElement.textContent.replace('€', '').replace(',', '.')) : 0;
            var quantity = quantityElement.value;
            total = total + (price * quantity);
        }
        total = Math.round(total * 100) / 100;
        const subtotalElement = document.getElementById('subtotal');
        if (subtotalElement) {
            subtotalElement.innerText = 'Subtotale: €' + total;
        }

        // Show/Hide buttons if cart items > 0
        var clearCartBtn = document.getElementById('clear-cart-btn');
        if (cartRows.length === 0) {
            if (clearCartBtn) {
                clearCartBtn.classList.add('hidden');
            }
        } else {
            if (clearCartBtn) {
                clearCartBtn.classList.remove('hidden');
            }
        }
    }

    // Create an observer instance linked to the callback function
    var observer = new MutationObserver(function(mutationsList, observer) {
        for (var mutation of mutationsList) {
            if (mutation.type === 'childList') {
                calculateSubtotal();
                observer.disconnect(); // Stop observing once the elements are found
                break;
            }
        }
    });

    // Start observing the target node for configured mutations
    observer.observe(cartItemContainer, { childList: true, subtree: true });

    // Initial calculation in case elements are already present
    calculateSubtotal();
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
            const cartItemsElement = document.getElementById('cart-items');
            if (cartItemsElement) {
                cartItemsElement.innerHTML = data;
            }
            updateSubtotal();
        });
}

document.addEventListener('DOMContentLoaded', () => {
    loadCart();

    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', event => {
            const card = event.target.closest('.card');
            const itemName = card.querySelector('h2').textContent;
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

    // Hamburger menu toggle
    const cartHamburgerMenu = document.getElementById('cart-hamburger-menu');
    const cart = document.getElementById('cart');
    cartHamburgerMenu.addEventListener('click', () => {
        const expanded = cartHamburgerMenu.getAttribute('aria-expanded') === 'true' || false;
        cartHamburgerMenu.setAttribute('aria-expanded', !expanded);
        cart.classList.toggle('show');
        document.body.classList.toggle('no-scroll', !expanded);
    });

    // Close cart button
    const closeCartBtn = document.getElementById('close-cart-btn');
    closeCartBtn.addEventListener('click', () => {
        cartHamburgerMenu.setAttribute('aria-expanded', 'false');
        cart.classList.remove('show');
        document.body.classList.remove('no-scroll');
    });
});