// Cambia il titolo della pagina in base al contenuto attivo
function updatePageTitle(title) {
    document.getElementById('pageTitle').textContent = title;
}

// Gestisci il click sui bottoni del menu
document.getElementById('userManagementBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'block';
    document.getElementById('vendite').style.display = 'none';
    updatePageTitle('Gestione Utenti');
});

document.getElementById('venditeBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'none';
    document.getElementById('vendite').style.display = 'block';
    updatePageTitle('Statistiche');

    // Carica le statistiche
    fetch('../php/admin.php', {
        method: 'POST',
        body: new URLSearchParams({ action: 'get_stats' })
    })
        .then(response => response.json())
        .then(data => {
            // Aggiorna i dati delle card
            const totalRevenue = typeof data.total_revenue === 'number' ? data.total_revenue : 0;
            document.getElementById('totalRevenue').textContent = `€${totalRevenue.toFixed(2)}`;
            document.getElementById('totalTransactions').textContent = data.total_transactions || 0;
            document.getElementById('mostBoughtProduct').textContent = 
                `${data.most_bought_product || '-'} (${data.most_bought_count || 0} volte)`;
        })
        .catch(error => {
            console.error('Errore:', error);
            document.getElementById('stats').innerHTML = '<p>Errore nel caricamento delle statistiche.</p>';
        });
});

// Gestisci la ricerca dell'utente
const searchForm = document.getElementById('searchForm');
searchForm.addEventListener('submit', function (e) {
    e.preventDefault();
    searchUser();
});

document.getElementById('email').addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        searchUser();
    }
});

function searchUser() {
    const email = document.getElementById('email').value;
    fetch('../php/admin.php', {
        method: 'POST',
        body: new URLSearchParams({ action: 'find_user', email: email })
    })
        .then(response => response.json())
        .then(data => {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = '';

            if (data.message) {
                resultDiv.innerHTML = `<div class="message">${data.message}</div>`;
            }

            if (data.user) {
                const user = data.user;
                resultDiv.innerHTML += `
                    <div>
                        <h3>Informazioni Utente</h3>
                        <p><strong>Nome:</strong> ${user.nome}</p>
                        <p><strong>Cognome:</strong> ${user.cognome}</p>
                        <p><strong>Email:</strong> ${user.email}</p>
                        <p><strong>Ruolo:</strong> ${user.ruolo === 'utente' ? 'Utente' : 'Admin'}</p>
                        <p><strong>Stato:</strong> ${user.stato === 'attivo' ? 'Attivo' : 'Bloccato'}</p>
                    </div>
                    <hr>
                    <div>
                        <h3>Aggiorna Utente</h3>
                        <form id="updateForm">
                            <input type="hidden" name="user_id" value="${user.id}">
                            <label for="role">Ruolo:</label>
                            <select name="role" id="role">
                                <option value="utente" ${user.ruolo === 'utente' ? 'selected' : ''}>Utente</option>
                                <option value="admin" ${user.ruolo === 'admin' ? 'selected' : ''}>Admin</option>
                            </select>
                            <label for="status">Stato:</label>
                            <select name="status" id="status">
                                <option value="attivo" ${user.stato === 'attivo' ? 'selected' : ''}>Attivo</option>
                                <option value="bloccato" ${user.stato === 'bloccato' ? 'selected' : ''}>Bloccato</option>
                            </select>
                            <button type="submit">Aggiorna</button>
                        </form>
                    </div>
                `;

                document.getElementById('updateForm').addEventListener('submit', function (e) {
                    e.preventDefault();

                    const formData = new FormData(this);
                    formData.append('action', 'update_user');

                    fetch('php/admin.php', {
                        method: 'POST',
                        body: formData
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.message) {
                                resultDiv.innerHTML = `<div class="message">${data.message}</div>`;
                            }
                        });
                });
            }
        })
        .catch(error => console.error('Errore:', error));
}

// Gestisci il logout
document.getElementById('logoutBtn').addEventListener('click', function () {
    fetch('php/logout.php', { method: 'POST' })
        .then(() => {
            // Reindirizza alla pagina index
            window.location.href = '../index.php';
        })
        .catch(error => console.error('Errore durante il logout:', error));
});
