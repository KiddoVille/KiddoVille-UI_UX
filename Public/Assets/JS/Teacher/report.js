document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("marks-form").addEventListener('submit', function (e) {
        const taskBox = document.getElementById("marks-input");
        const taskBoxName = taskBox.value.trim();
        const taskError = document.getElementById("mark-error");
        
    
        if(taskBoxName === '' || isNaN(taskBoxName)){
           
            taskError.textContent = "Invalid Number";
            e.preventDefault();
        }
    })

})