async function handleCheckout() {
    event.stopPropagation(); // Evita che il clic chiami `toggleDetails`
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