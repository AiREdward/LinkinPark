document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('#integranti dd, #ex-integranti dd');
    
    cards.forEach(card => {
        /*mouse click*/
        card.addEventListener('click', () => {
            card.classList.toggle('flipped');
        });
        
        /*enter della tastiera*/
        card.addEventListener('keydown', (e) => {

            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault(); 
                card.classList.toggle('flipped');
            }
        });
    });
});