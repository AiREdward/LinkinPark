document.addEventListener("DOMContentLoaded", () => {
    const scrollToTopButton = document.getElementById("scrollToTop");

    // Mostra/nasconde il bottone in base alla posizione dello scroll
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) { // Mostra quando scorre più di 300px
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });

    // Aggiunge l'evento al bottone per tornare in alto
    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});
