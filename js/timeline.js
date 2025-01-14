document.addEventListener('DOMContentLoaded', () => {
    const tourItems = document.querySelectorAll('#tour-dates dd');

    tourItems.forEach(item => {
        item.addEventListener('keydown', (event) => {
            if (event.key === 'Enter') {
                event.preventDefault(); // Evita l'eventuale comportamento predefinito
                openDetails(item);
            }
        });
    });
});

function openDetails(element) {
    const details = element.querySelector('.extra-details');
    if (details) {
        details.removeAttribute('hidden');
        details.setAttribute('aria-hidden', 'false');
        element.setAttribute('aria-expanded', 'true');
    }
}

function closeDetails(event, button) {
    event.stopPropagation(); // Evita che il clic chiuda i dettagli subito dopo
    const details = button.closest('.extra-details');
    if (details) {
        details.setAttribute('hidden', '');
        details.setAttribute('aria-hidden', 'true');
        const parent = details.parentElement;
        if (parent) parent.setAttribute('aria-expanded', 'false');
    }
}

async function handleTicketPurchase(event, city) {
    event.stopPropagation();
    const isLoggedIn = await checkLoginStatus();

    if (isLoggedIn) {
        // Utente loggato: vai direttamente alla pagina di acquisto
        window.location.href = `pagamento.html`;
    } else {
        // Utente non loggato: reindirizza alla pagina di login con redirect alla pagina di acquisto
        const redirectUrl = encodeURIComponent(`pagamento.html`);
        window.location.href = `accedi.php?redirect=${redirectUrl}`;
    }
}

async function checkLoginStatus() {
    // Verifica lo stato di login tramite una chiamata al server
    const response = await fetch("php/check_login.php", { method: "GET" });
    if (response.ok) {
        const data = await response.json();
        return data.logged_in; // Ritorna true o false in base alla risposta del server
    } else {
        console.error("Errore durante il controllo dello stato di login.");
        return false;
    }
}
