document.addEventListener('DOMContentLoaded', function () {
    // report Modal and it's two different parts
    const EventModal = document.getElementById('ReportModal');
    const reportbtns = document.querySelectorAll('.reportbtn');
    const backforreport = document.getElementById('backforreport');
    const reportcancel = document.getElementById('reportcancel');
    const behavior = document.getElementById('behavior');
    const medical = document.getElementById('medical');
    const Medicalcon = document.getElementById('Medical-con');
    const Behaviorcon = document.getElementById('Behavior-con');
    const mainContent = document.getElementById('main-content');
    const line = document.getElementById("line");
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
            tasknavbar.style.transform = "translateX(-480px)";
            taskbtn.style.transform = "translateX(-425px)";
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

    behavior.addEventListener('click', function () {
        if (Behaviorcon.style.display === 'none') {
            Behaviorcon.style.display = 'block';
            Medicalcon.style.display = 'none';
            line.style.transform = "translateX(160px)";
        }
    })

    medical.addEventListener('click', function () {
        if (Medicalcon.style.display === 'none') {
            Medicalcon.style.display = 'block';
            Behaviorcon.style.display = 'none';
            line.style.transform = "translateX(0px)";
        }
    })

    reportcancel.addEventListener('click', function () {
        toggleModal(ReportModal, 'none');
    })

    backforreport.addEventListener('click', function () {
        toggleModal(ReportModal, 'none');
    })

    reportbtns.forEach(function (reportbtn) {
        reportbtn.addEventListener('click', function () {
            toggleModal(ReportModal, 'flex');
        })
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