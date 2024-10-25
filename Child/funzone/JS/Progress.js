document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('video');
    const playPauseButton = document.getElementById('playPause');
    const pauseButton = document.getElementById('pause');
    const currentTimeElement = document.getElementById('currentTime');
    const progressBar = document.getElementById('progressBar');
    const muteButton = document.getElementById('mute');
    const unmuteButton = document.getElementById('unmute');
    
    function updateMuteButtons() {
        if (video.muted) {
            muteButton.style.display = 'none';
            unmuteButton.style.display = 'block';
        } else {
            muteButton.style.display = 'block';
            unmuteButton.style.display = 'none';
        }
    }

    muteButton.addEventListener('click', () => {
        video.muted = true;
        updateMuteButtons();
    });

    unmuteButton.addEventListener('click', () => {
        video.muted = false;
        updateMuteButtons();
    });

    video.addEventListener('volumechange', updateMuteButtons);
    
    updatePlayPauseButtons();
    updateProgressBar();
    updateMuteButtons();

    const customOptions = document.querySelectorAll('.custom-option');
    customOptions.forEach(option => {
        option.addEventListener('click', function() {
            customSelectTrigger.innerHTML = `${this.innerText} <i class="fa fa-chevron-down"></i>`;
            customSelectContainer.classList.remove('active');
        });
    });

    document.addEventListener('click', (event) => {
        if (!customSelectContainer.contains(event.target) && !customSelectTrigger.contains(event.target)) {
            customSelectContainer.classList.remove('active');
        }

        if (!customChildSelectContainer.contains(event.target) && !customChildSelectTrigger.contains(event.target)) {
            customChildSelectContainer.classList.remove('active');
        }

        if (!profileCard.contains(event.target) && !settingsIcon.contains(event.target)) {
            profileCard.classList.remove('show');
        }

        if (!commentSection.contains(event.target) && !commentButton.contains(event.target)) {
            commentSection.style.display = 'none';
        }
    });

    function updatePlayPauseButtons() {
        if (video.paused) {
            playPauseButton.style.display = 'block';
            pauseButton.style.display = 'none';
        } else {
            playPauseButton.style.display = 'none';
            pauseButton.style.display = 'block';
        }
    }

    function updateProgressBar() {
        const progress = (video.currentTime / video.duration) * 100;
        progressBar.value = progress;
        const minutes = Math.floor(video.currentTime / 60);
        const seconds = Math.floor(video.currentTime % 60).toString().padStart(2, '0');
        currentTimeElement.textContent = `${minutes}:${seconds}`;
    }

    function setVideoTime() {
        video.currentTime = (progressBar.value / 100) * video.duration;
    }

    updatePlayPauseButtons();
    updateProgressBar();

    playPauseButton.addEventListener('click', () => {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
        updatePlayPauseButtons();
    });

    pauseButton.addEventListener('click', () => {
        video.pause();
        updatePlayPauseButtons();
    });

    video.addEventListener('click', () => {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
        updatePlayPauseButtons();
    });

    video.addEventListener('timeupdate', updateProgressBar);
    progressBar.addEventListener('input', setVideoTime);

    video.addEventListener('play', updatePlayPauseButtons);
    video.addEventListener('pause', updatePlayPauseButtons);
});