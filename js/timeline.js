document.addEventListener('DOMContentLoaded', () => {
    const tourItems = document.querySelectorAll('#tour-dates dd');

    tourItems.forEach(item => {
        item.addEventListener('keydown', (event) => {
            if (event.key === 'Enter') {
                event.preventDefault(); // Evita l'eventuale comportamento predefinito
                openDetails(item);
            }
        });
    });
});

function openDetails(element) {
    const details = element.querySelector('.extra-details');
    if (details) {
        details.removeAttribute('hidden');
        details.setAttribute('aria-hidden', 'false');
        element.setAttribute('aria-expanded', 'true');
    }
}

function closeDetails(event, button) {
    event.stopPropagation(); // Evita che il clic chiuda i dettagli subito dopo
    const details = button.closest('.extra-details');
    if (details) {
        details.setAttribute('hidden', '');
        details.setAttribute('aria-hidden', 'true');
        const parent = details.parentElement;
        if (parent) parent.setAttribute('aria-expanded', 'false');
    }
}