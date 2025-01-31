let currentEventData = null;

document.getElementById('vendite').style.display = 'none';
document.getElementById('tour').style.display = 'none';
document.getElementById('userManagement').style.display = 'block';
document.getElementById('eventOptions').style.display = 'none';

document.getElementById('addEventBtn').addEventListener('click', function () {
    document.getElementById('searchForm2').style.display = 'none';
});

document.getElementById('cancelBtn').addEventListener('click', function () {
    document.getElementById('result2').style.display = 'none';
    document.getElementById('result3').style.display = 'none';
    document.getElementById('eventOptions').style.display = 'none';
});

document.getElementById('userManagementBtn').addEventListener('click', function () {
    document.getElementById('vendite').style.display = 'none';
    document.getElementById('tour').style.display = 'none';
    document.getElementById('userManagement').style.display = 'block';
});

document.getElementById('dateTourBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'none';
    document.getElementById('vendite').style.display = 'none';
    document.getElementById('tour').style.display = 'block';
});

document.getElementById('venditeBtn').addEventListener('click', function () {
    document.getElementById('userManagement').style.display = 'none';
    document.getElementById('tour').style.display = 'none';
    document.getElementById('vendite').style.display = 'block';

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

// Ricerca dell'utente
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

// Ricerca dell'evento
const searchForm2 = document.getElementById('searchForm2');
searchForm2.addEventListener('submit', function (e) {
    e.preventDefault();
    searchEvent();
});

document.getElementById('search2').addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        searchEvent();
    }
});



function searchEvent() {
    const date = document.getElementById('search2').value;


    fetch('../php/admin.php', {
        method: 'POST',
        body: new URLSearchParams({ action: 'find_event', date: date })
    })
        .then(response => response.json())
        .then(data => {
            const resultDiv = document.getElementById('result3');
            resultDiv.innerHTML = '';


            if (data.message) {
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
    ['eventInfoBtn', 'deleteEventBtn', 'addEventBtn'].forEach(id => {
        document.getElementById(id).classList.remove('selected');
    });

    document.getElementById(buttonId).classList.add('selected');
}

function displayEventInfo() {
    if (!currentEventData) return;

    document.getElementById('eventOptions').style.display = 'block';

    const resultDiv = document.getElementById('result3');
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
    document.getElementById('result3').style.display = 'block';
}

function displayAddEvent() {
    const resultDiv = document.getElementById('result2');
    resultDiv.innerHTML = `
        <form id="addEventForm">        
            <label for="evento">Evento:</label>
            <input type="text" id="evento" name="evento" required>
        
            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>
        
            <label for="orario">Orario:</label>
            <input type="time" id="orario" name="orario" required>
        
            <label for="luogo">Luogo:</label>
            <input type="text" id="luogo" name="luogo" required>
        
            <label for="citta">Citta':</label>
            <input type="text" id="citta" name="citta" required>
        
            <label for="paese">Paese:</label>
            <input type="text" id="paese" name="paese" required>
        
            <label for="descrizione">Descrizione:</label>
            <textarea id="descrizione" name="descrizione" required></textarea>
        
            <label for="prezzo">Prezzo:</label>
            <input type="number" id="prezzo" name="prezzo" required>
        
            <button type="submit">Salva Evento</button>
            <button type="button" id="cancelButton">Annulla</button>
        </form>
    `;

    document.getElementById('result2').style.display = 'block';

    document.getElementById('cancelButton').addEventListener('click', function(event) {
        document.getElementById('result2').innerHTML = '';
        document.getElementById('searchForm2').style.display = 'block';
    });

    document.getElementById('addEventForm').addEventListener('submit', function(event) {
        event.preventDefault();

        document.getElementById('eventOptions').style.display = 'block';
    
        const formData = new FormData(this);
        formData.append('action', 'add_event');
    
        fetch('../php/admin.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.message === "Evento aggiunto con successo!") {
                document.getElementById('addEventForm').reset();
            }
        })
        .catch(error => console.error('Errore:', error));
    });    
}

//Gestisce il click sui pulsanti della sezione Tour
document.getElementById('addEventBtn').addEventListener('click', function () {
    selectButton('addEventBtn');
    document.getElementById('result3').innerHTML = '';
    displayAddEvent();
});

document.getElementById('eventInfoBtn').addEventListener('click', function () {
    if (currentEventData) {
        document.getElementById('result2').innerHTML = '';
        selectButton('eventInfoBtn');
        displayEventInfo();
    }
});

document.getElementById('deleteEventBtn').addEventListener('click', function () {
    if (currentEventData) {
        document.getElementById('result2').innerHTML = '';
        selectButton('deleteEventBtn');

        const resultDiv = document.getElementById('result3');
        resultDiv.innerHTML = `
            <p>Sei sicuro di voler cancellare l'evento a ${currentEventData.citta} nella data di ${currentEventData.data}? Questa azione è irreversibile.</p>
            <button id="confirmationBtn">Confermo</button>
            <button id="cancelDeleteBtn">Annulla</button>
        `;

        document.getElementById('confirmationBtn').addEventListener('click', function() {
            const formData = new FormData();
            formData.append('action', 'remove_event');
            formData.append('evento', currentEventData.evento);
            formData.append('data', currentEventData.data);
            formData.append('orario', currentEventData.orario);
            formData.append('luogo', currentEventData.luogo);
            formData.append('citta', currentEventData.citta);
            formData.append('paese', currentEventData.paese);

            fetch('../php/admin.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json()) 
            .then(data => {
                alert(data.message);
                resultDiv.innerHTML = ''; 
            })
            .catch(error => console.error('Error:', error));
        });

        document.getElementById('cancelDeleteBtn').addEventListener('click', function() {
            resultDiv.innerHTML = ''; 
        });
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
                        <p><strong><span lang="en">Email</span>:</strong> ${user.email}</p>
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