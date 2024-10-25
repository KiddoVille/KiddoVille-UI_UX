document.addEventListener('DOMContentLoaded', function() {
    const sidebar1 = document.getElementById('sidebar1');
    const navbar = document.getElementById('navbar');
    const vote = document.getElementById('Vote')
    const images = document.querySelectorAll('.carousel img');
    const pollForm = document.getElementById('poll-form');
    const pollResults = document.getElementById('poll-results');
    const resultText = document.getElementById('result-text');
    const minimizeBtn = document.getElementById('minimize-btn');
    const sidebar = document.getElementById('sidebar1');
    const starImage = document.getElementById('starImage');
    let currentIndex = 0;

    minimizeBtn.addEventListener('click', function() {
        sidebar.classList.toggle('minimized');
        
        if (starImage.classList.contains('show')) {
            starImage.classList.remove('show');  
        } else {
            starImage.classList.add('show');
        }
    });

    function showImage(index) {
        images.forEach((img, i) => {
            img.classList.remove('active');
            if (i === index) {
                img.classList.add('active');
            }
        });
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    setInterval(nextImage, 3000);

    pollForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const selectedOption = document.querySelector('input[name="poll"]:checked');
        if (selectedOption) {
            pollForm.style.display = 'none';
            const optionValue = selectedOption.value;
            resultText.textContent = `${optionValue}`;
            pollResults.style.display = 'block';
            vote.remove();
        }
    });
});