document.addEventListener('DOMContentLoaded', function () {
    // taskbar of the web page for children
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
        if (!tasknavbar.classList.contains("lol")) {
            tasknavbar.style.transform = "translateX(-465px)";
            taskbtn.style.transform = "translateX(-400px)";
            taskicon.classList.remove('fa-chevron-left');
            taskicon.classList.add('fa-chevron-right');
            tasknavbar.classList.add("lol");
        }
        else {
            tasknavbar.classList.remove("lol");
            tasknavbar.style.transform = "translateX(0px)";
            taskbtn.style.transform = "translateX(0px)";
            taskicon.classList.remove('fa-chevron-right');
            taskicon.classList.add('fa-chevron-left');
        }
    });
});