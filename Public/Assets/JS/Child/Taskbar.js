document.addEventListener('DOMContentLoaded', function () {
    const taskbtn = document.getElementById('taskbtn');
    const taskicon = document.getElementById('taskicon');
    const tasknavbar = document.getElementById('tasknavbar');
    const reportPage = document.querySelector('.report-page');
    const profile = document.getElementById('profile');
    const attendance = document.getElementById('attendance');

    let isNavbarVisible = false;  // Track visibility state

    // Show/Hide Task Navbar with Smooth Animation
    taskbtn.addEventListener('click', function () {
        if (!isNavbarVisible) {
            // Show the tasknavbar
            tasknavbar.style.display = "block"; // Make sure the navbar is set to block initially
            setTimeout(() => {
                tasknavbar.style.opacity = "1";  // Fade in
            }, 10);  // Add slight delay to trigger transition

            // Adjust the report page size
            reportPage.style.width = "calc(100% - 400px)";
            reportPage.style.marginLeft = "-40px";
            profile.style.marginRight = "1%";
            attendance.style.marginRight = "1%";

            isNavbarVisible = true;  // Update visibility state
        } else {
            // Hide the tasknavbar
            tasknavbar.style.opacity = "0"; // Fade out
            setTimeout(() => {
                tasknavbar.style.display = "none";  // Hide after fade-out
            }, 300);  // Match the transition duration

            // Reset the report page size
            reportPage.style.width = "100%";
            reportPage.style.marginLeft = "0px";
            profile.style.marginRight = "2%";
            attendance.style.marginRight = "2%";

            isNavbarVisible = false;  // Update visibility state
        }

        // Toggle Button Icon
        taskicon.classList.toggle('fa-chevron-left');
        taskicon.classList.toggle('fa-chevron-right');
    });

    // Close tasknavbar if clicked outside
    window.addEventListener('click', function (event) {
        if (
            !tasknavbar.contains(event.target) &&
            !taskbtn.contains(event.target) &&
            tasknavbar.style.opacity === "1"
        ) {
            tasknavbar.style.opacity = "0";
            setTimeout(() => {
                tasknavbar.style.display = "none";
            }, 300);  // Match the transition duration

            // Reset the report page size
            reportPage.style.width = "100%";

            // Reset Button Icon
            taskicon.classList.remove('fa-chevron-right');
            taskicon.classList.add('fa-chevron-left');

            isNavbarVisible = false;  // Update visibility state
        }
    });
});
