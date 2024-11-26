document.addEventListener("DOMContentLoaded", function () {
    const enrichPhoto = document.querySelector('.Enrich-photo');
    const clock = document.querySelector('.clock');
    const circle = document.querySelector('.task');
    const mission = document.querySelector('.mission');
    // to animate on page navigation and image animation

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                enrichPhoto.classList.add('animate');

                enrichPhoto.addEventListener('animationend', () => {
                    enrichPhoto.classList.remove('animate');
                }, { once: true });

                if (entry.target === clock) {
                    clock.classList.add('animate-from-left');
                    clock.addEventListener('animationend', () => {
                        clock.classList.remove('animate-from-left');
                    }, { once: true });
                }

                if (entry.target === circle) {
                    circle.classList.add('animate-from-right');
                    circle.addEventListener('animationend', () => {
                        circle.classList.remove('animate-from-right');
                    }, { once: true });
                }

                if (entry.target === mission) {
                    mission.classList.add('animate-from-left');
                    mission.addEventListener('animationend', () => {
                        mission.classList.remove('animate-from-left');
                    }, { once: true });
                }
            }
        });
    });

    observer.observe(enrichPhoto);
    observer.observe(clock);
    observer.observe(circle);
    observer.observe(mission);

    const fadeInElements = document.querySelectorAll('.fade-in');

    // Create an Intersection Observer
    const observer1 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Add 'visible' class to fade in
            } else {
                entry.target.classList.remove('visible'); // Remove 'visible' class to fade out
            }
        });
    });

    // Observe each fade-in element
    fadeInElements.forEach(element => {
        observer1.observe(element);
    });
});