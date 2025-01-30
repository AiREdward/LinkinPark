
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('#integranti dd, #ex-integranti dd');
    
    cards.forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('flipped');
        });
    });
});
