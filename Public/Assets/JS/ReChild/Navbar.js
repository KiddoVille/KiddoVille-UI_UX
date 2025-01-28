document.addEventListener('DOMContentLoaded', function() {
    // minimze and maximize the widht of navbar
    const minimizeBtn = document.getElementById('minimize-btn');
    const sidebar = document.getElementById('sidebar1');
    const starImage = document.getElementById('starImage');

    minimizeBtn.addEventListener('click', function() {
        sidebar.classList.toggle('minimized');
        
        if (starImage.classList.contains('show')) {
            starImage.classList.remove('show');  
        } else {
            starImage.classList.add('show');
        }
    });

});