document.addEventListener('DOMContentLoaded', function() {

    document.querySelectorAll('.readMore').forEach(link => {
        
        link.addEventListener('click', function(e) {
            e.preventDefault();
            openArticle(this);
        });
        
        link.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openArticle(this);
            }
        });
    });

    //apre l'articolo, salva il focusc corrente
    function openArticle(link) {
        const articleId = link.getAttribute('href').substring(1);
        const article = document.getElementById(articleId);
        const overlay = document.querySelector('.overlay');
        
        article.previousFocus = document.activeElement;

        article.classList.add('active');
        overlay.classList.add('active');

        article.focus();
        trapFocus(article);
    }

    function trapFocus(article) {
        //prende tutti gli elementi focalizzabili dentro l'articolo
        const focusableElements = article.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstFocusableElement = focusableElements[0];
        const lastFocusableElement = focusableElements[focusableElements.length - 1];

        firstFocusableElement.focus();

        article.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                if (e.shiftKey) { // Shift + Tab
                    if (document.activeElement === firstFocusableElement) {
                        e.preventDefault();
                        lastFocusableElement.focus();
                    }
                } else { // Tab
                    if (document.activeElement === lastFocusableElement) {
                        e.preventDefault();
                        firstFocusableElement.focus();
                    }
                }
            } 

            if (e.key === 'Escape') {
                closeActiveArticle();
            }
        });
    }

    
    document.querySelectorAll('.closePopUp').forEach(button => {
        
        button.addEventListener('click', function() {
            closeActiveArticle();
        });
        

        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                closeActiveArticle();
            }
        });
    });

    //chiude l'articolo
    function closeActiveArticle() {
        const activeArticle = document.querySelector('article.active');
        if (activeArticle) {
            
            if (activeArticle.previousFocus) {
                activeArticle.previousFocus.focus();
            }
            activeArticle.classList.remove('active');
        }
        
        document.querySelector('.overlay').classList.remove('active');
    }

    //chiude il pop-up
    document.querySelector('.overlay').addEventListener('click', function() {
        closeActiveArticle();
    });
});