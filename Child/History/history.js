document.addEventListener('DOMContentLoaded', function() {
    const editModalBtn = document.getElementById('editModalBtn');
    const closeEditModalBtn = document.getElementById('closeEditModalBtn');
    const editPickupModal = document.getElementById('editPickupModal');
    const refreshIcon = document.getElementById('pickuprefresh');
    const editrefreshIcon = document.getElementById('pickupeditrefresh');
    const pickupForm = document.getElementById('pickupForm');
    const editpickupForm = document.getElementById('editpickupForm');
    const profilebtn = document.querySelector('.profilebtn');
    const profilecard = document.getElementById('profileCard');
    const backprofile = document.getElementById('back-arrow-profile')

    profilebtn.addEventListener('click',function(){
        console.log('lol');
        profilecard.style.display = 'flex';
        profilecard.style.zIndex = 10000;
        profilecard.style.flexDirection = 'start';
    });

    backprofile.addEventListener('click',function(){
        profilecard.style.display = 'none';
    });

    backforpickup.addEventListener('click', function() {
        toggleModal(pickupModal, 'none');
    });

    backforpickupedit.addEventListener('click', function() {
        toggleModal(editPickupModal, 'none');
    });

    window.addEventListener('click', function (e) {
        if (e.target === pickupModal) {
            toggleModal(pickupModal, 'none');
        }
    });

    editModalBtn.addEventListener('click', function () {
        toggleModal(editPickupModal, 'flex');
    });

    closeEditModalBtn.addEventListener('click', function () {
        toggleModal(editPickupModal, 'none');
    });

    window.addEventListener('click', function (e) {
        if (e.target === editPickupModal) {
            toggleModal(editPickupModal, 'none');
        }
    });

    function toggleModal(modal, display) {
        modal.style.display = display;
        if (display === 'flex') {
            document.body.classList.add('no-scroll');
        } else {
            document.body.classList.remove('no-scroll');
        }
        mainContent.classList.toggle('blurred', display === 'flex');
    }

    const dateElements = document.querySelectorAll('.date');
    const timeElements = document.querySelectorAll('.time');
    const visitrefreshIcon = document.getElementById('visitrefresh');
    const visitForm = document.getElementById('visitForm');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const pickupModal = document.getElementById('pickupModal');

    openModalBtn.addEventListener('click', function () {
        toggleModal(pickupModal, 'flex');
    });

    closeModalBtn.addEventListener('click', function () {
        toggleModal(pickupModal, 'none');
    });

    window.addEventListener('click', function (e) {
        if (e.target === pickupModal) {
            toggleModal(pickupModal, 'none');
        }
        if (e.target === visitModal) {
            toggleModal(visitModal, 'none');
        }
    });

    function toggleModal(modal, display) {
        modal.style.display = display;
        mainContent.classList.toggle('blurred', display === 'flex');
    }

    backforpickup.addEventListener('click', function() {
        toggleModal(pickupModal, 'none');
    });

    window.addEventListener('click', function (e) {
        if (e.target === pickupModal) {
            toggleModal(pickupModal, 'none');
        }
    });

    const redstar = document.getElementById('red-star');
    const redstar2 = document.getElementById('red-star2');
    const redstar3 = document.getElementById('red-star3');
    const redstar4 = document.getElementById('red-star4');

    const pickuptime = document.getElementById('pickuptime');
    const pickupotp = document.getElementById('pickupotp');
    const edittime = document.getElementById('edit-time');
    const editotp = document.getElementById('edit-otp');

    refreshIcon.addEventListener('click', function () {
        pickupForm.reset();
        redstar.classList.remove('hidden');
        redstar2.classList.remove('hidden');
    });

    editrefreshIcon.addEventListener('click', function () {
        editpickupForm.reset();
        redstar3.classList.remove('hidden');
        redstar4.classList.remove('hidden');
    });

    pickuptime.addEventListener("input", function () {
        if (!pickuptime.value) {
            redstar.classList.remove('hidden');
        } else {
            redstar.classList.add('hidden');
        }
    });

    pickupotp.addEventListener("input", function () {
        if (pickupotp.value.length === 0) {
            redstar2.classList.remove('hidden');
        } else {
            redstar2.classList.add('hidden');
        }
    });

    edittime.addEventListener("input", function () {
        if (!edittime.value) {
            redstar3.classList.remove('hidden');
        } else {
            redstar3.classList.add('hidden');
        }
    });

    editotp.addEventListener("input", function () {
        if (editotp.value.length === 0) {
            redstar4.classList.remove('hidden');
        } else {
            redstar4.classList.add('hidden');
        }
    });

});