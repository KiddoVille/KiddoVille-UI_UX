document.addEventListener('DOMContentLoaded', function() {
    //to collect snacks
    const snackModal = document.getElementById('snackModal');
    const SnackModalButton = document.getElementById('openSnackModal');
    const closeSnackModalButton = document.getElementById('closeSnackModal');

    SnackModalButton.addEventListener('click', function() {
        if (snackModal.classList.contains('show')){
            snackModal.classList.remove('show');
        }
        else{
            snackModal.classList.add('show');
        }
    });

    closeSnackModalButton.addEventListener('click', function() {
        snackModal.classList.remove('show');
    });

    document.addEventListener('click', function(event) {
        if (!snackModal.contains(event.target) && !openSnackModalButton.contains(event.target)) {
            snackModal.classList.remove('show');
        }
    });

    //for rightside task navbar
    document.addEventListener('DOMContentLoaded', function () {
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
                tasknavbar.style.transform = "translateX(-775px)";
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
});