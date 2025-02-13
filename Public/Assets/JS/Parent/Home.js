document.addEventListener('DOMContentLoaded', function () {
    const openvisitModal = document.getElementById('openvisitModal');
    const visitModal = document.getElementById('visitModal');
    const closeVisitModalBtn = document.getElementById('closeVisitModalBtn');
    const visitrefreshIcon = document.getElementById('visitrefresh');
    const visitForm = document.getElementById('visitForm');
    const dateElements = document.querySelectorAll('.date');
    const timeElements = document.querySelectorAll('.time');
    const pickupForm = document.getElementById('pickupForm');
    const refreshIcon = document.getElementById('pickuprefresh');
    const openModalBtn = document.getElementById('openPickupModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const pickupModal = document.getElementById('pickupModal');
    const pickupModal2 = document.getElementById('pickupModal2');
    const meetingbtn = document.getElementById('openMeetingModal');
    const meetingModal = document.getElementById('MeetingModal');
    const mainContent = document.querySelector('.main-content');
    const viewpackage = document.getElementById('PackageModal');
    const backformeeting = document.getElementById('backformeeting');
    const meetingrefresh = document.getElementById('meetingrefresh');
    const meetingform = document.getElementById('meeting-form');
    const closemeetingBtn = document.getElementById('closemeetingBtn');
    const meetingresultsdate = document.getElementById('meetingresultsdate');
    const meetingresultstime = document.getElementById('meetingresultstime');
    const checkboxes = document.querySelectorAll('.checkboxes');
    const meetingresults = document.getElementById('meetingresults');
    const pickupresults = document.getElementById('pickupresults');
    const profilebtn = document.querySelector('.profilebtn');
    const profilecard = document.getElementById('profileCard');
    const editmeetingbtn = document.getElementById('editmeetingbtn');
    const editvisitbtn = document.getElementById('editvisitbtn');
    const agree = document.getElementById('agree');
    const visitheading = document.getElementById('visitheading');
    const refreshvist = document.getElementById('refreshvist');
    const meetingrefreshcon = document.getElementById('meetingrefreshcon');
    const customeschedule = document.getElementById('customeschedule');
    const customMeetingModal = document.getElementById('customMeetingModal');

    function previewNewPersonImage(event) {
        const file = event.target.files[0];
    
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const newPersonContainer = document.getElementById("newPersonContainer");
                const newPersonImage = document.getElementById("newPersonImage");
    
                newPersonImage.src = e.target.result;
                newPersonContainer.style.display = "flex"; // Show the new person section
    
                // Automatically select the new person
                selectPerson("new");
            };
            reader.readAsDataURL(file);
        }
    }
    
    function selectPerson(personType) {
        if (personType === "parent") {
            document.getElementById("parentRadio").checked = true;
            document.getElementById("newPersonRadio").checked = false;
            document.getElementById("selectedPersonType").value = "parent";
        } else {
            document.getElementById("parentRadio").checked = false;
            document.getElementById("newPersonRadio").checked = true;
            document.getElementById("selectedPersonType").value = "new";
        }
    }

    editvisitbtn.addEventListener('click',function(){
        toggleModal(visitModal,'flex');
        toggleModal(agree, 'none');
        visitheading.textContent = 'Edit Sheduled visit';
        toggleModal(refreshvist, 'none');
    });

    profilebtn.addEventListener('click',function(){
        console.log('lol');
        profilecard.style.display = 'flex';
        profilecard.style.zIndex = 10000;
        profilecard.style.flexDirection = 'start';
    });

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });

    backformeeting.addEventListener('click', function () {
        toggleModal(meetingModal, 'none');
    });

    closemeetingBtn.addEventListener('click', function () {
        toggleModal(meetingModal, 'none');
    });

    meetingbtn.addEventListener('click', function () {
        toggleModal(meetingModal, 'flex');
    });

    if(openModalBtn){
        openModalBtn.addEventListener('click', function (){
            toggleModal(pickupModal, 'flex');
        })
    }

    closeModalBtn.addEventListener('click', function () {
        toggleModal(pickupModal, 'none');
    });

    // Open visit modal
    openvisitModal.addEventListener('click', function () {
        toggleModal(visitModal, 'flex');
    });

    closeVisitModalBtn.addEventListener('click', function () {
        toggleModal(visitModal, 'none');
    });

    openvisitModal.addEventListener('click', function () {
        toggleModal(visitModal, 'flex');
    });

    closeVisitModalBtn.addEventListener('click', function () {
        toggleModal(visitModal, 'none');
    });

    meetingrefresh.addEventListener('click', function () {
        meetingform.reset();
    })

    window.addEventListener('click', function (e) {
        if (e.target === pickupModal) {
            toggleModal(pickupModal, 'none');
        }
        if (e.target === pickupModal2) {
            toggleModal(pickupModal2, 'none');
        }
        if (e.target === visitModal) {
            toggleModal(visitModal, 'none');
        }
        if (e.target === viewpackage) {
            toggleModal(viewpackage, 'none');
        }
        if (e.target === meetingModal) {
            toggleModal(meetingModal, 'none');
        }
        if (e.target === editvisitModal) {
            toggleModal(editvisitModal, 'none');
        }
        if (e.target === customMeetingModal) {
            toggleModal(customMeetingModal, 'none');
        }
    });

    backforpickup.addEventListener('click', function () {
        toggleModal(pickupModal, 'none');
    });

    backforvisit.addEventListener('click', function () {
        toggleModal(visitModal, 'none');
    });

    function toggleModal(modal, display) {
        modal.style.display = display;
        if (display === 'flex' || display == 'block') {
            document.body.classList.add('no-scroll');
            mainContent.classList.add('blurred');
            console.log('blur');
        } else {
            document.body.classList.remove('no-scroll');
            mainContent.classList.remove('blurred');
        }
    }

    messageDropdown.addEventListener('mouseleave', function () {
        messageDropdownTimeout = setTimeout(function () {
            messageDropdown.style.display = 'none';
        }, 300);
    });

    // Function to clear selected dates
    function clearSelectedDates() {
        dateElements.forEach(function (date) {
            date.classList.remove('select');
        });
    }

    function clearSelectedTimes() {
        timeElements.forEach(function (time) {
            time.classList.remove('select');
        });
    }

    const redstar = document.getElementById('red-star');
    const redstar2 = document.getElementById('red-star2');
    const redstar3 = document.getElementById('red-star3');
    const redstar4 = document.getElementById('red-star4');
    const redstar5 = document.getElementById('red-star5');

    const pickuptime = document.getElementById('pickuptime');
    const pickupotp = document.getElementById('otp');

    refreshIcon.addEventListener('click', function () {
        pickupForm.reset();
        redstar.classList.remove('hidden');
        redstar2.classList.remove('hidden');
    });

        visitrefreshIcon.addEventListener('click', function () {
            clearSelectedDates();
            clearSelectedTimes();
            visitForm.reset();
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

    number.addEventListener("input", function () {
        if (number.value.length === 0) {
            redstar5.classList.remove('hidden');
        } else {
            redstar5.classList.add('hidden');
        }
    });

    let selectedDate = null;
    let selectedTime = null;

    dateElements.forEach(function (date) {
        date.addEventListener('click', function () {
            if(date.classList.contains('select')){
                date.classList.remove('select');
                redstar3.classList.remove('hidden');
                selectedDate = null;
            }
            else{    
                selectedDate = date.textContent;
                redstar3.classList.add('hidden');     
                clearSelectedDates();
                date.classList.add('select');
            }
        });
    });

    timeElements.forEach(function (time) {
        time.addEventListener('click', function () {
            if(time.classList.contains('select')){
                time.classList.remove('select');
                redstar4.classList.remove('hidden');
                selectedTime = null;
            }
            else{
                selectedTime = time.textContent;
                redstar4.classList.add('hidden');  
                clearSelectedTimes();
                time.classList.add('select');
            }
        });
    });

    const visitresults = document.getElementById('visitresults');
    const visitresultsdate = document.getElementById('visitresultsdate');
    const visitresultstime = document.getElementById('visitresultstime');

    visitForm.addEventListener('submit', function(event){
        event.preventDefault();
        console.log(selectedDate);
        console.log(selectedTime);
        openvisitModal.style.display = 'none';
        visitModal.style.display = 'none';
        visitresults.style.display = 'block';
        visitresultsdate.textContent = "Date :" + selectedDate;
        visitresultstime.textContent = "Time :" + selectedTime;
        editvisitbtn.style.display = 'block';
    });

});
