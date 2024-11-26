document.addEventListener('DOMContentLoaded', function () {
    const dateElements = document.querySelectorAll('.date');
    const timeElements = document.querySelectorAll('.time');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const pickupModal = document.getElementById('pickupModal');
    const pickupModal2 = document.getElementById('pickupModal2');
    const mainContent = document.querySelector('.main-content');
    const checkboxes = document.querySelectorAll('.checkboxes');

    //package
    // const packageback = document.getElementById('back-arrow');
    // const packagebtn = document.getElementById('packagebutton');
    // const viewpackage = document.getElementById('PackageModal');

    // packageback.addEventListener('click', function () {
    //     toggleModal(viewpackage, 'none');
    // })

    // packagebtn.addEventListener('click', function () {
    //     toggleModal(viewpackage, 'flex');
    // })


    //pickup
    // const pickupForm = document.getElementById('pickupForm');
    // const refreshIcon = document.getElementById('pickuprefresh');
    // const pickupresults = document.getElementById('pickupresults');

    // backforpickup.addEventListener('click', function () {
    //     toggleModal(pickupModal, 'none');
    // });

    // pickupForm.addEventListener('submit', function (event) {
    //     event.preventDefault();
    //     openModalBtn.style.display = 'none';
    //     pickupresults.style.display = 'flex';
    //     toggleModal(pickupModal, 'none');
    // });

    // openModalBtn.addEventListener('click', function () {
    //     toggleModal(pickupModal, 'flex');
    // });

    // closeModalBtn.addEventListener('click', function () {
    //     toggleModal(pickupModal, 'none');
    // });

    //visit
    // const closeVisitModalBtn = document.getElementById('closeVisitModalBtn');
    // const openvisitModal = document.getElementById('openvisitModal');
    // const visitModal = document.getElementById('visitModal');
    // const visitrefreshIcon = document.getElementById('visitrefresh');
    // const visitForm = document.getElementById('visitForm');
    // // Open visit modal
    // openvisitModal.addEventListener('click', function () {
    //     toggleModal(visitModal, 'flex');
    // });

    // // Close visit modal
    // closeVisitModalBtn.addEventListener('click', function () {
    //     toggleModal(visitModal, 'none');
    // });

    // backforvisit.addEventListener('click', function () {
    //     toggleModal(visitModal, 'none');
    // });

    //meeting
    // const meetingbtn = document.getElementById('meetingbtn');
    // const meetingrefresh = document.getElementById('meetingrefresh');
    // const meetingform = document.getElementById('meeting-form');
    // const meetingresultsdate = document.getElementById('meetingresultsdate');
    // const meetingresultstime = document.getElementById('meetingresultstime');
    // const meetingresults = document.getElementById('meetingresults');
    // const backformeeting = document.getElementById('backformeeting');
    // const closemeetingBtn = document.getElementById('closemeetingBtn');
    // const meetingModal = document.getElementById('MeetingModal');

    // meetingrefresh.addEventListener('click', function () {
    //     meetingform.reset();
    // })

    // meetingbtn.addEventListener('click', function () {
    //     toggleModal(meetingModal, 'flex');
    // })

    // meetingform.addEventListener('submit', function (event) {
    //     event.preventDefault();
    //     const selectedOptions = Array.from(document.querySelectorAll('input[name="option"]:checked'));
    //     const selectedValues = selectedOptions.map(checkbox => checkbox.value);
    //     meetingresultsdate.textContent = "Date " + (selectedValues[0].split("+"))[0];
    //     meetingresultstime.textContent = "Time :" + (selectedValues[0].split("+"))[1];
    //     meetingresults.style.display = 'block';
    //     editmeetingbtn.style.display = 'block';
    //     toggleModal(meetingModal, 'none');
    //     meetingbtn.style.display = 'none';
    // });

    // backformeeting.addEventListener('click', function () {
    //     toggleModal(meetingModal, 'none');
    // })

    // closemeetingBtn.addEventListener('click', function () {
    //     toggleModal(meetingModal, 'none');
    // })

    // Profile card
    const profilebtn = document.querySelector('.profilebtn');
    const profilecard = document.getElementById('profileCard');
    const backprofile = document.getElementById('back-arrow-profile');

    profilebtn.addEventListener('click',function(){
        console.log('lol');
        profilecard.style.display = 'flex';
        profilecard.style.zIndex = 10000;
        profilecard.style.flexDirection = 'start';
    });

    backprofile.addEventListener('click',function(){
        profilecard.style.display = 'none';
    });

    // edit meeting
    // const editmeetingbtn = document.getElementById('editmeetingbtn');
    // const editvisitbtn = document.getElementById('editvisitbtn');
    // const agree = document.getElementById('agree');
    // const visitheading = document.getElementById('visitheading');
    // const refreshvist = document.getElementById('refreshvist');
    // const meetingrefreshcon = document.getElementById('meetingrefreshcon');

    // editvisitbtn.addEventListener('click',function(){
    //     toggleModal(visitModal,'flex');
    //     toggleModal(agree, 'none');
    //     visitheading.textContent = 'Edit Sheduled visit';
    //     toggleModal(refreshvist, 'none');
    // });

    // editmeetingbtn.addEventListener('click', function(){
    //     toggleModal(meetingModal,'flex');
    //     toggleModal(meetingrefreshcon,'none');
    // })

    //custom meeting
    // const custommeetingform = document.getElementById('custommeeting-form');
    // const custommeetingrefresh = document.getElementById('custommeetingrefresh');
    // const customeschedule = document.getElementById('customeschedule');
    // const customMeetingModal = document.getElementById('customMeetingModal');
    // const backforcustommeeting = document.getElementById('backforcustommeeting');
    // const closecustommeetingBtn = document.getElementById('closecustommeetingBtn');

    // custommeetingrefresh.addEventListener('click', function(){
    //     custommeetingform.reset();
    // })

    // custommeetingform.addEventListener('submit', function(event){
    //     event.preventDefault();
    //     meetingresultsdate.textContent = "Date " + document.getElementById("customdate").value;
    //     meetingresultstime.textContent = "Time " + document.getElementById("customtime").value;
    //     meetingresults.style.display = 'block';
    //     editmeetingbtn.style.display = 'block';
    //     toggleModal(customMeetingModal, 'none');
    //     meetingbtn.style.display = 'none';
    // });

    // backforcustommeeting.addEventListener('click', function(){
    //     toggleModal(meetingModal, 'flex');
    //     toggleModal(customMeetingModal, 'none');
    // });

    // closecustommeetingBtn.addEventListener('click', function(){
    //     toggleModal(meetingModal, 'flex');
    //     toggleModal(customMeetingModal, 'none');
    // });

    // customeschedule.addEventListener('click', function(){
    //     toggleModal(meetingModal, 'none');
    //     toggleModal(customMeetingModal, 'flex');
    // })


    // not broken down

    document.getElementById("customdate").addEventListener('change' , function(event){
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        const futureDate = new Date(today);
        futureDate.setDate(today.getDate() + 2);

        const customdateStr = document.getElementById("customdate").value;
        const customDate = new Date(customdateStr);
        customDate.setHours(0, 0, 0, 0);
        if(customDate < futureDate){
            document.getElementById("customdate").value = futureDate.toISOString().split('T')[0];
        }
    });

    document.getElementById("customtime").addEventListener('change' , function(event){
        const timeInput = event.target;
        const [hours, minutes] = timeInput.value.split(":").map(Number);

        const roundedMinutes = Math.round(minutes / 15) * 15;
        let adjustedHours = hours;
        let adjustedMinutes = roundedMinutes;
        if (roundedMinutes === 60) {
            adjustedHours += 1;
            adjustedMinutes = 0;
        }
        if (adjustedHours < 8) {
            adjustedHours = 8;
            adjustedMinutes = 0;
        }
        else if (adjustedHours >= 17 && adjustedMinutes > 0) {
            adjustedHours = 17;
            adjustedMinutes = 0;
        }
        const formattedHours = String(adjustedHours).padStart(2, '0');
        const formattedMinutes = String(adjustedMinutes).padStart(2, '0');
        timeInput.value = `${formattedHours}:${formattedMinutes}`;
    })


    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });

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

    //required representation
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

    pickupotp.addEventListener("input", function () {
        if (pickupotp.value.length === 0) {
            redstar2.classList.remove('hidden');
        } else {
            redstar2.classList.add('hidden');
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
    });

    //Tasks navbar
    const taskbtn = document.getElementById('taskbtn');
    const taskicon = document.getElementById('taskicon');
    const tasknavbar = document.getElementById('tasknavbar');

    window.addEventListener('click', function (event) {
        if (!tasknavbar.contains(event.target) && !taskbtn.contains(event.target)) {
            tasknavbar.style.transform = "translateX(0px)";
            taskbtn.style.transform = "translateX(0px)";
            taskicon.classList.remove('fa-chevron-right');
            taskicon.classList.add('fa-chevron-left');
        }
    });

    taskbtn.addEventListener('click', function () {
        if (tasknavbar.style.transform === "translateX(0px)") {
            tasknavbar.style.transform = "translateX(-755px)";
            taskbtn.style.transform = "translateX(-410px)";
            taskicon.classList.remove('fa-chevron-left');
            taskicon.classList.add('fa-chevron-right');
        }
        else {
            tasknavbar.style.transform = "translateX(0px)";
            taskbtn.style.transform = "translateX(0px)";
            taskicon.classList.remove('fa-chevron-right');
            taskicon.classList.add('fa-chevron-left');
        }
    });

});
