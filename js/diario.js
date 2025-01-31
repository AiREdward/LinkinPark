/*document.addEventListener('DOMContentLoaded', function() {
// Add click handlers for read more links
document.querySelectorAll('.readMore').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const articleId = this.getAttribute('href').substring(1);
        const article = document.getElementById(articleId);
        const overlay = document.querySelector('.overlay');
        
        article.classList.add('active');
        overlay.classList.add('active');
    });
});

// Add click handlers for close buttons
document.querySelectorAll('.closePopUp').forEach(button => {
    button.addEventListener('click', function() {
        const article = this.closest('article');
        const overlay = document.querySelector('.overlay');
        
        article.classList.remove('active');
        overlay.classList.remove('active');
    });
});

// Close popup when clicking overlay
document.querySelector('.overlay').addEventListener('click', function() {
    document.querySelectorAll('article[id^="article"].active').forEach(article => {
        article.classList.remove('active');
    });
    this.classList.remove('active');
    });
});*/

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

    //apre l'articolo
    function openArticle(link) {
        const articleId = link.getAttribute('href').substring(1);
        const article = document.getElementById(articleId);
        const overlay = document.querySelector('.overlay');
        
        article.classList.add('active');
        overlay.classList.add('active');
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
        document.querySelectorAll('article[id^="article"].active').forEach(article => {
            article.classList.remove('active');
        });
        document.querySelector('.overlay').classList.remove('active');
    }

    //chiude il pop-up
    document.querySelector('.overlay').addEventListener('click', function() {
        closeActiveArticle();
    });
});