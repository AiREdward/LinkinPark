// @ts-nocheck

let currentEventData = null;

// Cambia il titolo della pagina in base al contenuto attivo
function updatePageTitle(title) {
    document.getElementById('pageTitle').textContent = title;
}

// Gestisci il click sui bottoni del menu
document.getElementById('userManagementBtn').addEventListener('click', function () {
    document.getElementById('vendite').style.display = 'none';
    document.getElementById('tour').style.display = 'none';
    document.getElementById('userManagement').style.display = 'block';
    updatePageTitle('Gestione Utenti');
});

document.getElementById('dateTourBtn').addEventListener('click', function () {
    console.log("cliccato il pulsante Tour"); /*da cancellare*/
    document.getElementById('userManagement').style.display = 'none';
    document.getElementById('vendite').style.display = 'none';
    document.getElementById('tour').style.display = 'block';
    updatePageTitle('Gestione Tour');
});

document.getElementById('venditeBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'none';
    document.getElementById('tour').style.display = 'none';
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

/*nuovo*/
const searchForm2 = document.getElementById('searchForm2');
searchForm2.addEventListener('submit', function (e) {
    e.preventDefault();
    searchEvent();
    console.log("searching event");
});

document.getElementById('search2').addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        searchEvent();
    }
});


function searchEvent() {
    const date = document.getElementById('search2').value;
    console.log(date);



    fetch('../php/admin.php', {
        method: 'POST',
        body: new URLSearchParams({ action: 'find_event', date: date })
    })
        .then(response => response.json())
        .then(data => {
            const resultDiv = document.getElementById('result2');
            resultDiv.innerHTML = '';

            console.log(data);

            if (data.message) {
                console.log(data.message);
                resultDiv.innerHTML = `
                <div class="message not-found">
                    <p class="fas fa-exclamation-circle">${data.message}</p>
                </div>`;

            }
            if (data.event) {
                currentEventData = data.event;
                selectButton('eventInfoBtn');
                displayEventInfo();
            }
        })
        .catch(error => console.error('Errore:', error));
}

function selectButton(buttonId) {
    // Remove selected class from all buttons
    ['eventInfoBtn', 'eventUpdateBtn', 'deleteEventBtn'].forEach(id => {
        document.getElementById(id).classList.remove('selected');
    });
    // Add selected class to clicked button
    document.getElementById(buttonId).classList.add('selected');
}

function displayEventInfo() {
    if (!currentEventData) return;

    const resultDiv = document.getElementById('result2');
    resultDiv.innerHTML = `
        <div>
            <h3>Informazioni Evento</h3>
            <p><strong>Evento:</strong> ${currentEventData.evento}</p>
            <p><strong>Data:</strong> ${currentEventData.data}</p>
            <p><strong>Orario:</strong> ${currentEventData.orario}</p>
            <p><strong>Luogo:</strong> ${currentEventData.luogo}</p>
            <p><strong>Città:</strong> ${currentEventData.citta}</p>
            <p><strong>Paese:</strong> ${currentEventData.paese}</p>
            <p><strong>Descrizione:</strong> ${currentEventData.descrizione}</p>
            <p><strong>Prezzo:</strong> ${currentEventData.prezzo}</p>
        </div>
    `;
}

/*nuova funzione inizio*/
function displayEventUpdate() {
    if (!currentEventData) return;

    const resultDiv = document.getElementById('result2');
    resultDiv.innerHTML = `
        <div>
            <h3>Aggiorna Evento</h3>
            <form id="updateEventForm">
                <input type="hidden" id="id" name="id" value="${currentEventData.id}"> <!-- Add event ID -->
                <div class="input-container">
                    <label for="evento">Evento:</label>
                    <input type="text" id="evento" name="evento" value="${currentEventData.evento}" required>
                </div>
                <div class="input-container">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" value="${currentEventData.data}" required>
                </div>
                <div class="input-container">
                    <label for="orario">Orario:</label>
                    <input type="time" id="orario" name="orario" value="${currentEventData.orario}" required>
                </div>
                <div class="input-container">
                    <label for="luogo">Luogo:</label>
                    <input type="text" id="luogo" name="luogo" value="${currentEventData.luogo}" required>
                </div>
                <div class="input-container">
                    <label for="citta">Città:</label>
                    <input type="text" id="citta" name="citta" value="${currentEventData.citta}" required>
                </div>
                <div class="input-container">
                    <label for="paese">Paese:</label>
                    <input type="text" id="paese" name="paese" value="${currentEventData.paese}" required>
                </div>
                <div class="input-container">
                    <label for="descrizione">Descrizione:</label>
                    <textarea id="descrizione" name="descrizione" required>${currentEventData.descrizione}</textarea>
                </div>
                <div class="input-container">
                    <label for="prezzo">Prezzo:</label>
                    <input type="number" id="prezzo" name="prezzo" step="0.01" value="${currentEventData.prezzo}" required>
                </div>
                <button type="submit" id="submitUpdateBtn">Salva Modifiche</button>
            </form>
        </div>
    `;

    document.getElementById('updateEventForm').addEventListener('submit', function(e) {
        e.preventDefault();     //che cosa e'?

        // Collect form data
        const formData = new FormData(this);
        const updatedEventData = Object.fromEntries(formData.entries());
        
        //Send the data to the server
        fetch('php/update_event.php', {
            method: 'POST',
            body: new FormData(this)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Evento aggiornato con successo!');
            } else {
                alert('Errore nell\'aggiornamento dell\'evento');
            }
        })
        .catch(error => {
            console.error('Errore:', error);
            alert('Errore: Impossibile aggiornare l\'evento. Verifica la tua connessione o riprova più tardi.');
        });
    });
}/*nuova funzione fine*/


document.getElementById('eventInfoBtn').addEventListener('click', function () {
    if (currentEventData) {
        selectButton('eventInfoBtn');
        displayEventInfo();
    }
});

document.getElementById('eventUpdateBtn').addEventListener('click', function () {
    if (currentEventData) {
        selectButton('eventUpdateBtn');
        displayEventUpdate();
    }
});

document.getElementById('deleteEventBtn').addEventListener('click', function () {
    if (currentEventData) {
        selectButton('deleteEventBtn');
        // Add your delete event logic here
    }
});  //fine

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
                resultDiv.innerHTML = `
                    <div class="message not-found">
                        <i class="fas fa-exclamation-circle"></i> ${data.message}
                    </div>`;
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

                    fetch('../php/admin.php', {
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
    fetch('../php/logout.php', { method: 'POST' })
        .then(() => {
            // Reindirizza alla pagina index
            window.location.href = '../index.php';
        })
        .catch(error => console.error('Errore durante il logout:', error));
});