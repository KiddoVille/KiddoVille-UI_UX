document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('loader').style.display = 'grid';
    setTimeout(() => {
        document.getElementById('loader').style.display = 'none';
        location.reload()
    }, 4000);
});