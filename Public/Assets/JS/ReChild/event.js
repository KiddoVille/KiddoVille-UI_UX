document.addEventListener('DOMContentLoaded', function () {

    // Event Modal
    const EventModal = document.getElementById('EventModal');
    const eventbtns = document.querySelectorAll('.eventbtn');
    const mainContent = document.getElementById('main-content');
    const eventback = document.getElementById('back-arrow');
    const feedbackbtn = document.getElementById('feedbackbtn');

    // Rating Modal
    const RatingModal = document.getElementById('RatingModal');
    const backformeeting = document.getElementById('backforrating');
    const meetingrefresh = document.getElementById('ratingrefresh');
    const meetingform = document.getElementById('ratingform');
    const closemeetingBtn = document.getElementById('closeratingBtn');
    const stars = document.querySelectorAll('.star-rate');

    backformeeting.addEventListener('click', function () {
        toggleModal(RatingModal, 'none');
    })

    meetingrefresh.addEventListener('click', function () {
        meetingform.reset();
        stars.forEach((star) => {
            star.classList.remove('selectestar')
        });
    })

    closemeetingBtn.addEventListener('click', function () {
        toggleModal(meetingModal, 'none');
    })

    feedbackbtn.addEventListener('click', function () {
        toggleModal(RatingModal, 'flex');
    });

    eventback.addEventListener('click', function () {
        toggleModal(EventModal, 'none');
    })

    eventbtns.forEach(function (eventbtn) {
        eventbtn.addEventListener('click', function () {
            toggleModal(EventModal, 'flex');
        })
    });

    window.addEventListener('click', function (e) {
        if (e.target === EventModal) {
            toggleModal(EventModal, 'none');
        }
        if (e.target === RatingModal) {
            toggleModal(RatingModal, 'none');
        }
    });

    function toggleModal(modal, display) {
        modal.style.display = display;
        if (display === 'flex') {
            document.body.classList.add('no-scroll');
            mainContent.classList.add('blurred');
        } else {
            document.body.classList.remove('no-scroll');
            mainContent.classList.remove('blurred');
        }
    }

    let rating = 0;
    let i = 0;

    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            if (star.classList.contains('selectestar') && index === rating - 1) {
                for (let j = index; j < stars.length; j++) {
                    stars[j].classList.remove('selectestar');
                }
                rating -= 1;
                i -= 1;
            }
            else if (index === rating) {
                stars[index].classList.add('selectestar');
                rating += 1;
                i += 1;
            }
        });
    });
});