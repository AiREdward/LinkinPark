const passwordField = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

// Evento per alternare la visibilità della password e cambiare icona
togglePassword.addEventListener('click', () => {
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;

    // Cambia l'icona in base alla visibilità della password
    togglePassword.classList.toggle('fa-eye');
    togglePassword.classList.toggle('fa-eye-slash');
});

// Recupera il parametro "redirect" dall'URL e lo inserisce nel campo nascosto
const params = new URLSearchParams(window.location.search);
const redirect = params.get('redirect');
if (redirect) {
    document.getElementById('redirect').value = redirect;
}

// Visualizza il messaggio di errore
const errorMessage = document.getElementById('error-message');
const error = params.get('error');
if (error) {
    switch (error) {
        case 'bloccato':
            errorMessage.textContent = 'Il tuo account è bloccato. Contatta l\'amministratore.';
            break;
        case 'password':
            errorMessage.textContent = 'Password errata. Riprova.';
            break;
        case 'utente':
            errorMessage.textContent = 'Utente non trovato. Registrati.';
            break;
        default:
            errorMessage.textContent = 'Si è verificato un errore. Riprova.';
    }
}