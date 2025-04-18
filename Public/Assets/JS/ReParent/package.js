document.addEventListener('DOMContentLoaded', function () {
    //to view packages
    const PackageModal = document.getElementById('PackageModal');
    const packagebtns = document.querySelectorAll('.view');
    const mainContent = document.getElementById('main-content');
    const packageback = document.getElementById('back-arrow');

    packageback.addEventListener('click', function () {
        toggleModal(PackageModal, 'none');
    })

    packagebtns.forEach(function (eventbtn) {
        console.log("Hi");
        eventbtn.addEventListener('click', function () {
            toggleModal(PackageModal, 'flex');
        })
    });

    window.addEventListener('click', function (e) {
        if (e.target === PackageModal) {
            toggleModal(PackageModal, 'none');
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