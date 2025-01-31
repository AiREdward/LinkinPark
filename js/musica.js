
document.addEventListener('DOMContentLoaded', function() {
    const albums = document.querySelectorAll('.album');

    albums.forEach(album => {
        const frontSideElements = album.querySelectorAll('img, p, h2'); 
        const backSide = album.querySelector('dl');

        backSide.style.display = 'none';

        function toggleCard() {
            if (backSide.style.display === 'none') {
                frontSideElements.forEach(el => el.style.display = 'none');
                backSide.style.display = 'block';
            } else {
                frontSideElements.forEach(el => el.style.display = '');
                backSide.style.display = 'none';
            }
        }

        album.addEventListener('click', toggleCard);

        album.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') { 
                event.preventDefault(); 
                toggleCard();
            }
        });

    });
});