// Controlla se l'utente è loggato e visualizza il popup
document.addEventListener('DOMContentLoaded', () => {
    const accountPopup = document.getElementById('accountPopup');
    const accountEmail = document.getElementById('accountEmail');
    const logoutButton = document.getElementById('logoutButton');
    const loginLink = document.querySelector("#menu li a[href='accedi.php']");

    fetch('php/check_login.php')
        .then(response => response.json())
        .then(data => {
            if (data.logged_in) {
                accountEmail.textContent = data.email;
                const loginLink = document.querySelector("#menu li a[href='login.php']");
                loginLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    accountPopup.classList.remove('hidden');
                });
            }
        });

    logoutButton.addEventListener('click', () => {
        fetch('php/logout.php')
            .then(() => {
                window.location.reload();
            });
    });

    document.addEventListener('click', (e) => {
        if (!accountPopup.classList.contains('hidden') && !accountPopup.contains(e.target) && !loginLink.contains(e.target)) {
            accountPopup.classList.add('hidden');
        }
    });
});