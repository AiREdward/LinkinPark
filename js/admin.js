// Gestisci il click sui bottoni del menu
document.getElementById('userManagementBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'block';
    document.getElementById('otherFunction').style.display = 'none';
});

document.getElementById('otherFunctionBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'none';
    document.getElementById('otherFunction').style.display = 'block';

    // Carica le statistiche
    fetch('php/admin.php', {
        method: 'POST',
        body: new URLSearchParams({ action: 'get_stats' })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);  // Verifica la risposta nel browser

            const statsDiv = document.getElementById('stats');
            if (data.message) {
                statsDiv.innerHTML = `<p>${data.message}</p>`;
            } else {
                // Verifica che total_revenue sia un numero
                const totalRevenue = typeof data.total_revenue === 'number' ? data.total_revenue : 0;

                statsDiv.innerHTML = `
    <p><strong>Totale Guadagno:</strong> €${totalRevenue.toFixed(2)}</p>
    <p><strong>Numero di Transazioni:</strong> ${data.total_transactions}</p>
    <p><strong>Articolo più Acquistato:</strong> ${data.most_bought_product} (${data.most_bought_count} volte)</p>
`;
            }
        })
        .catch(error => {
            console.error('Errore:', error);
            document.getElementById('stats').innerHTML = '<p>Errore nel caricamento delle statistiche.</p>';
        });

});

// Gestisci la ricerca dell'utente
document.getElementById('searchForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    fetch('php/admin.php', {
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
                    <form id="updateForm">
                        <input type="hidden" name="user_id" value="${user.id}">
                        <p>Nome: ${user.nome}</p>
                        <p>Cognome: ${user.cognome}</p>
                        <p>Email: ${user.email}</p>
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
                `;

                document.getElementById('updateForm').addEventListener('submit', function (e) {
                    e.preventDefault();

                    const formData = new FormData(this);
                    formData.append('action', 'update_user'); // Aggiungi questa linea

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
});