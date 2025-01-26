function validatePhone() {
    const telefono = document.getElementById('telefono').value;
    const telefonoError = document.getElementById('telefono-error');

    // Controlla se il valore contiene solo numeri
    if (/^\d*$/.test(telefono)) {
        telefonoError.style.display = 'none'; // Nascondi il messaggio di errore
    } else {
        telefonoError.style.display = 'block'; // Mostra il messaggio di errore
    }
}

// Apertura del modale
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "block";
    setTimeout(() => {
        modal.classList.add("show");
    }, 10);
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove("show");
    setTimeout(() => {
        modal.style.display = "none";
    }, 300);
}

// Chiudere il modale cliccando fuori
function closeModalOutside(event, modalId) {
    const modal = document.getElementById(modalId);
    if (event.target === modal) {
        closeModal(modalId);
    }
}

// Controllare la forza della password
function checkPasswordStrength() {
    const password = document.getElementById('password').value;
    const strengthBar = document.getElementById('strength-bar');
    let strength = 0;

    // Incrementa la forza in base ai requisiti
    if (password.length >= 8) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[a-z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;

    // Imposta la larghezza della barra in base alla forza
    strengthBar.style.width = (strength * 25) + '%';

    if (strength === 1) strengthBar.style.backgroundColor = 'red';
    if (strength === 2) strengthBar.style.backgroundColor = 'orange';
    if (strength === 3) strengthBar.style.backgroundColor = 'yellowgreen';
    if (strength >= 4) strengthBar.style.backgroundColor = 'green';
}

// Convalida i campi del form
function validateForm() {
    const nome = document.getElementById('nome').value.trim();
    const cognome = document.getElementById('cognome').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confermaPassword = document.getElementById('conferma-password').value;
    const indirizzo = document.getElementById('indirizzo').value.trim();
    const telefono = document.getElementById('telefono').value.trim();

    if (!nome || !cognome || !indirizzo) {
        alert("Compila tutti i campi obbligatori.");
        return false;
    }

    // Controlla che il telefono sia un numero
    if (!/^\d*$/.test(telefono)) {
        alert("Il campo telefono deve contenere solo caratteri numerici.");
        return false;
    }

    if (password !== confermaPassword) {
        alert("Le password non coincidono.");
        return false;
    }

    // Controlla che la password rispetti i requisiti
    const isValidPassword = (
        password.length >= 8 &&
        /[A-Z]/.test(password) &&
        /[a-z]/.test(password) &&
        /[0-9]/.test(password) &&
        /[^A-Za-z0-9]/.test(password)
    );

    if (!isValidPassword) {
        alert("La password non rispetta i requisiti di complessità.");
        return false;
    }

    // Controlla che checkbox privacy sia selezionata
    const privacyCheckbox = document.getElementById('privacy');
    if (!privacyCheckbox.checked) {
        alert("Devi accettare la Privacy Policy.");
        return false;
    }

    // Controlla che checkbox dei Termini di Servizio sia selezionata
    const termsCheckbox = document.getElementById('terms');
    if (!termsCheckbox.checked) {
        alert("Devi accettare i Termini di Servizio.");
        return false;
    }

    return true;
}

const passwordField = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', () => {
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;

    // Cambia l'icona della visibilità della password
    togglePassword.classList.toggle('fa-eye');
    togglePassword.classList.toggle('fa-eye-slash');
});


const confermaPassword = document.getElementById('confermaPassword');
const togglePassworConfirm = document.getElementById('togglePassworConfirm');

togglePassworConfirm.addEventListener('click', () => {
    const type = confermaPassword.type === 'password' ? 'text' : 'password';
    confermaPassword.type = type;

    // Cambia l'icona della visibilità della conferma password
    togglePassworConfirm.classList.toggle('fa-eye');
    togglePassworConfirm.classList.toggle('fa-eye-slash');
});