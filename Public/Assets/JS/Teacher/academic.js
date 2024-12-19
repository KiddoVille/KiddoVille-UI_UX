const saveBtn = document.getElementById('submit-report');
const resetBtn = document.getElementById('reset-report');
const popup = document.getElementById('success');
const closePopup = document.getElementById('close-success-popup');
const textAreas = document.querySelectorAll('textarea');

// Show popup on "Save" button click
saveBtn.addEventListener('click', function() {
    popup.style.display = 'flex'; // Show the popup
});

// Close popup on clicking the close button
closePopup.addEventListener('click', function() {
    popup.style.display = 'none';
});

// Reset text areas on "Reset" button click
resetBtn.addEventListener('click', function() {
    textAreas.forEach(textarea => {
        textarea.value = ''; // Clear each text area
    });
});