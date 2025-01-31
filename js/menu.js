document.addEventListener('DOMContentLoaded', function () {
    const logoutLink = document.getElementById('logout-link');
    const modal = document.getElementById('logout-modal');
    const closeBtn = document.querySelector('.close-btn');
    const confirmBtn = document.getElementById('confirm-logout');
    const cancelBtn = document.getElementById('cancel-logout');
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const menu = document.getElementById('menu');

    if (logoutLink) {
        logoutLink.addEventListener('click', function (event) {
            event.preventDefault();
            modal.style.display = 'block'; // Mostra il popup
        });
    }

    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none'; // Nascondi il popup
    });

    cancelBtn.addEventListener('click', function () {
        modal.style.display = 'none'; // Nascondi il popup
    });

    confirmBtn.addEventListener('click', function () {
        fetch('php/logout.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Logout effettuato con successo!');
                    location.reload(); // Ricarica la pagina per aggiornare il menu
                } else {
                    alert('Errore durante il logout.');
                }
            });
    });

    // Chiude il popup cliccando fuori dalla finestra del popup
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Gestione del menu a hamburger
    if (hamburgerMenu) {
        hamburgerMenu.addEventListener('click', function () {
            const isExpanded = hamburgerMenu.getAttribute('aria-expanded') === 'true';
            hamburgerMenu.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('show');
            document.body.classList.toggle('menu-open');
        });
    }
});