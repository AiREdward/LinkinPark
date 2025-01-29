const nCartaInput = document.getElementById('n_carta');
const ccvInput = document.getElementById('ccv');
const nomeInput = document.getElementById('nome');

nCartaInput.addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, '').slice(0, 16);
});

ccvInput.addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, '').slice(0, 4);
});

nomeInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^A-Za-z\s]/g, '');
});

document.getElementById('data_scadenza').addEventListener('change', function () {
    const oggi = new Date();
    const dataInput = new Date(this.value);
    if (dataInput <= oggi) {
        alert('La data di scadenza deve essere successiva alla data attuale.');
        this.value = '';
    }
});

// Recupera i dati del carrello e visualizzali
fetch('php/shop.php', {
    method: 'POST',
    body: new URLSearchParams('action=getCart')
})
    .then(response => response.json())
    .then(cartItems => {
        let subtotal = 0;
        const boughtItemsContainer = document.getElementById('bought-items');
        boughtItemsContainer.innerHTML = '';

        cartItems.forEach(item => {
            const itemPrice = parseFloat(item.price);
            const itemTotal = itemPrice * item.quantity;
            subtotal += itemTotal;

            const itemElement = document.createElement('div');
            itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="product-image">
                    <div class="bought-item-details">
                        <h4 class="bought-items">${item.name}</h4>
                        <p class="bought-items description">Quantità: ${item.quantity}</p>
                        ${item.size ? `<p class="bought-items description">Taglia: ${item.size}</p>` : ''}
                        <p class="bought-items price">Prezzo: €${itemPrice.toFixed(2)} <abbr title="ciascuno">cad.</abbr></p>
                    </div>
                `;
            boughtItemsContainer.appendChild(itemElement);
        });

        document.getElementById('subtotal').textContent = `€${subtotal.toFixed(2)}`;
    })
    .catch(error => console.error('Errore nel recupero dei dati del carrello:', error));

// Recupera il nome e il cognome dell'utente e visualizzali
fetch('php/pagamento.php?action=getUser')
    .then(response => response.json())
    .then(user => {
        const capitalize = str => str.replace(/\b\w/g, char => char.toUpperCase());
        const nome = capitalize(user.nome);
        const cognome = capitalize(user.cognome);
        document.getElementById('user-name').textContent = `${nome} ${cognome}`;
    })
    .catch(error => console.error('Errore nel recupero dei dati dell\'utente:', error));

// Stampa la pagina
document.getElementById('cardForm').addEventListener('submit', function (event) {
    if (nomeInput.value.trim() === '') {
        alert('Il campo del nome non può essere vuoto o contenere solo spazi.');
        event.preventDefault();
    } else {
        window.print();
        this.submit();
    }
});

document.querySelector('#cancel').addEventListener('click', function () {
    document.getElementById('custom-popup').classList.remove('hidden');
});

document.getElementById('close-popup').addEventListener('click', function () {
    document.getElementById('custom-popup').classList.add('hidden');
});

document.getElementById('confirm-cancel').addEventListener('click', function () {
    window.location.href = 'shop.php';
});
