document.addEventListener('DOMContentLoaded', function() {
    // noticiation icon and dropdown
    const messageDropdown = document.getElementById('messageDropdown');
    const bellIcon = document.getElementById('bell-container');

    let messageDropdownTimeout;

    function toggleBellDropdown() {
        if (messageDropdown.style.display === "none" || !messageDropdown.style.display) {
            messageDropdown.style.display = "block";
        } else {
            messageDropdown.style.display = "none";
        }
    }

    bellIcon.addEventListener('click', function(event) {
        event.stopPropagation();
        toggleBellDropdown();
    });

    messageDropdown.addEventListener('mouseenter', function() {
        clearTimeout(messageDropdownTimeout);
    });

    document.addEventListener('click', function(event) {
        if (!messageDropdown.contains(event.target) && !bellIcon.contains(event.target)) {
            messageDropdown.style.display = "none";
        }
    });

});