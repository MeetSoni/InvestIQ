document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.sidebar a');
    const pages = document.querySelectorAll('.main-content');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetPageId = link.getAttribute('href').substring(1);
            pages.forEach(page => {
                page.style.display = 'none';
            });
            document.getElementById(targetPageId).style.display = 'block';
        });
    });
});
