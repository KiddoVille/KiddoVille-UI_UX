document.addEventListener('DOMContentLoaded', function () {
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

    behavior.addEventListener('click', function (){
        if(Behaviorcon.style.display === 'none'){
            Behaviorcon.style.display = 'block';
            Medicalcon.style.display = 'none';
            line.style.transform = "translateX(160px)";
        }
    })

    medical.addEventListener('click', function (){
        if(Medicalcon.style.display === 'none'){
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