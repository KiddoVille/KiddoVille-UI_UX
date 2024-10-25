document.addEventListener('DOMContentLoaded', () => {
    const lock=document.getElementById('toggle');

    lock.addEventListener('change', function() {
        const icon = document.querySelector('.toggle-icon i');
        if (this.checked) {
            icon.classList.remove('fa-unlock');
            icon.classList.add('fa-lock');
        } else {
            icon.classList.remove('fa-lock');
            icon.classList.add('fa-unlock');
        }
    });
});