document.addEventListener('DOMContentLoaded', function () {
    const EventModal = document.getElementById('EventModal');
    const eventbtns = document.querySelectorAll('.eventbtn');
    const mainContent = document.getElementById('main-content');
    const eventback = document.getElementById('back-arrow');

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
});