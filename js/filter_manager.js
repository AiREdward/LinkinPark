function searchItems() {
    const query = document.getElementById('search-bar').value.toLowerCase();
    let hasResults = false;

    document.querySelectorAll('.card').forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const description = card.querySelector('.card-back p').textContent.toLowerCase();
        if (title.includes(query) || description.includes(query)) {
            card.style.display = 'block';
            hasResults = true;
        } else {
            card.style.display = 'none';
        }
    });

    // Mostra o nasconde il messaggio "Nessun risultato trovato"
    document.getElementById('no-results').style.display = hasResults ? 'none' : 'block';
}

function filterItems(type, value) {
    // Rimuovi lo stato 'active-filter' dai bottoni
    document.querySelectorAll('.filters-buttons button').forEach(button => {
        button.classList.remove('active-filter');
    });

    // Aggiungi lo stato 'active-filter' al bottone cliccato
    const button = event.target;
    button.classList.add('active-filter');

    // Filtra le card
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (type === 'all' || (card.dataset[type] && card.dataset[type] === value)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });

    // Controlla se ci sono risultati visibili
    const visibleCards = Array.from(cards).filter(card => card.style.display === 'block');
    document.getElementById('no-results').style.display = visibleCards.length ? 'none' : 'block';
}
