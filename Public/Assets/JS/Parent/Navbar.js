document.addEventListener('DOMContentLoaded', function() {
    const minimizeBtn = document.getElementById('minimize-btn');
    const sidebar = document.getElementById('sidebar1');
    const starImage = document.getElementById('starImage');
    const logo = document.getElementById('sidebar-logo');
    const kiddo = document.getElementById('sidebar-kiddo');
    const spans = sidebar.querySelectorAll('ul li span');

    minimizeBtn.addEventListener('click', function() {
        sidebar.classList.toggle('minimized');
            spans.forEach(span => {
                span.style.display = 'none';
            });
            starImage.classList.add('show');
            logo.classList.add('hidden');
            kiddo.classList.add('hidden');
        if (sidebar.classList.contains('minimized')) { // Delay hiding the spans by 1000ms
        } else {
            setTimeout (() => {
                logo.classList.remove('hidden');
            }, 100);
            setTimeout(() => {
                spans.forEach(span => {
                    span.style.display = 'inline';
                });
                kiddo.classList.remove('hidden');
            }, 400);
            setTimeout (() => {
                kiddo.classList.remove('hidden');
            }, 400);
            starImage.classList.remove('show');
        }
    });
});