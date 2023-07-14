window.onscroll = function() {
    var backToTopButton = document.querySelector('.back-to-top');
    if (window.pageYOffset > 0) {
        backToTopButton.classList.add('show');
    } else {
        backToTopButton.classList.remove('show');
    }
};

document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});