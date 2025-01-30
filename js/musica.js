
document.addEventListener('DOMContentLoaded', function() {
    const albums = document.querySelectorAll('.album');

    albums.forEach(album => {
        const frontSideElements = album.querySelectorAll('img, p, h2'); 
        const backSide = album.querySelector('dl');

        // Initially hide the back side
        backSide.style.display = 'none';

        album.addEventListener('click', () => {
            if (backSide.style.display === 'none') {
                // Hide front side elements
                frontSideElements.forEach(el => el.style.display = 'none');
                // Show back side
                backSide.style.display = 'block';
            } else {
                // Show front side elements
                frontSideElements.forEach(el => el.style.display = '');
                // Hide back side
                backSide.style.display = 'none';
            }
        });
    });
});