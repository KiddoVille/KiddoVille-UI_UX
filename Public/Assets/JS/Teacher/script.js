


const showFunzone = ()=>{
    const openBtn = document.getElementById("open-funzone");
    const popupContainer = document.getElementById("funzone-popup-container");

    if(openBtn && popupContainer){
        popupContainer.classList.add("show-funzone");
    }
};

// CLOSE FUNZONE POPUP

const closeFunZone =()=>{
    const closeBtn = document.getElementById("close-funzone");
    const popupContainer = document.getElementById("funzone-popup-container");
    popupContainer.classList.remove("show-funzone");
}

//OPNE REQUEST LEAVES

const openRequest = ()=>{
    const openBtn = document.getElementById("open-request");
    const requestContainer = document.getElementById("request-leave-container");

    if(openBtn && requestContainer){
        requestContainer.classList.add("show-request");
    }
};

// CLOSE LEAVE REQUEST  POPUP

const closeRequest = ()=>{
    const closeBtn = document.getElementById("close-request");
    const requestContainer = document.getElementById("request-leave-container");
    requestContainer.classList.remove("show-request");
}

//OPEN KIDDO SCHEDULE

const showKiddo = ()=>{
    const openBtn = document.getElementById("open-kiddo");
    const kiddoContainer = document.getElementById("kiddo-schedule-container");

    if(openBtn && kiddoContainer){
        kiddoContainer.classList.add("show-kiddo")
    }
}

//CLOSE KIDDO SCHDEULE

const closekiddo = ()=>{
    event.preventDefault();
    const closeBtn = document.getElementById("close-kiddo");
    const kiddoContainer = document.getElementById("kiddo-schedule-container");
    kiddoContainer.classList.remove("show-kiddo");
}

// document.getElementById('kiddo-schedule-container').addEventListener('click', function(event) {
//     var kiddoContainer = document.getElementById('kiddo-schedule-container');
//     // Check if the click happened outside the popup content
//     if (!kiddoContainer.contains(event.target)) {
//         closekiddo();
//     }
// });

//MYTASK ACCORDION

// const acc = document.getElementsByClassName("accordion");


//   acc.addEventListener("click", function() {
//     //this.classList.toggle("active");
//var panel = this.nextElementSibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     } else {
//       panel.style.display = "block";
//     }
//   });

const accd = ()=>{
    const acc = document.getElementById("accordion");
   
    const panel = acc.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
} 

function deleteTask(taskId) {

    //console.log("Task ID: " + taskId);
    // Make sure the ID is valid
    if (!taskId) {
        console.log("Task ID not found");
        alert("Invalid Task ID");
        return;
    }

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    var root = '<?= ROOT ?>';
    xhr.open("POST", root+ "/kiddoSchedule/delete", true); // Set the URL to call the delete method
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    console.log(root);
    // Set up the data to be sent
    var data = "id=" + taskId;
  
    // Define what to do when the request completes
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // If task is deleted, remove it from the page
            var response = xhr.responseText;
            if (response === "Task deleted successfully") {
                alert(response);
                // Optionally, remove the task element from the DOM
                var taskElement = document.getElementById('task-' + taskId);
                if (taskElement) {
                    taskElement.remove(); // Remove the task element from the page
                }
            } else {
                alert(response);
            }
        }
    };

    // Send the request with the data
    xhr.send(data);
}
// OPEN PENDING REPORT SECTION

const openPending =()=>{
    const act = document.getElementById("act-list");
    const manage = document.getElementById("manage");
    const pending = document.getElementById("pending");

    pending.classList.add("show-pending");
    act.classList.add("remove-act");
}

// CLOSE PENDING REPORT SECTION

const closePending =()=>{
   
    const act = document.getElementById("act-list");
    const pending = document.getElementById("pending");

        pending.classList.remove("show-pending");
        act.classList.remove("remove-act");
 }
 
const closepend = document.getElementById("pending-close");
if (closepend){
    closepend.addEventListener('click',closePending)
}

//OPEN PROFILE SUBMENU
const toggleMenu = ()=>{
    const subMenu = document.getElementById("subMenu")
        subMenu.classList.toggle("open-menu");

}
document.addEventListener("click", (event) => {
    const subMenu = document.getElementById("subMenu");
    const profileIcon = document.getElementById("profileIcon");
   


    // Check if the click is outside the menu and the notification icon
    if (!subMenu.contains(event.target) && !profileIcon.contains(event.target)) {
        subMenu.classList.remove("open-menu");
    }
    
});


//OPEN NOTIFICAITON SUBMENU
const toggleNotify = ()=>{
    const notifyMenu = document.getElementById("notify");
    notifyMenu.classList.toggle("open-notify");
}

document.addEventListener("click", (event) => {
    const notifyMenu = document.getElementById("notify");
    const notificationIcon = document.getElementById("notificationIcon");
   


    // Check if the click is outside the menu and the notification icon
    if (!notifyMenu.contains(event.target) && !notificationIcon.contains(event.target)) {
        notifyMenu.classList.remove("open-notify");
    }
    
});



//open edit daily task popup

//OPEN KIDDO SCHEDULE

const showTaskEdit = (task)=>{
    const openBtn = document.getElementById("open-kiddo");
    const kiddoContainer = document.getElementById("task-edit-container");

    if(openBtn && kiddoContainer){
        kiddoContainer.classList.add("show-task-edit")
    }

    document.getElementById('task-id').value = task.id;
    document.getElementById('task-title').value = task.Title;
    document.getElementById('task-description').value = task.Description;
    console.log(task.id,task.Title);
}

//CLOSE KIDDO SCHDEULE

const closeTaskEdit = ()=>{
    event.preventDefault();
    const closeBtn = document.getElementById("close-kiddo");
    const kiddoContainer = document.getElementById("task-edit-container");
    kiddoContainer.classList.remove("show-task-edit");
}





// function fetchTask(taskId) {
//     // Make an AJAX request to fetch task data
//     console.log(taskID);
//     fetch(`/KiddoSchedule/getTask`, {
//         method: 'POST',
//         headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
//         body: `id=${taskId}`
//     })
//     .then(response => response.json())
//     .then(task => {
//         // Populate the popup with task data
//         document.getElementById("task-title").value = task.Title;
//         document.getElementById("task-desc").value = task.Description;

//         // Show the popup
//         const kiddoContainer = document.getElementById("task-edit-container");
//         kiddoContainer.classList.add("show-task-edit");
//     })
//     .catch(error => console.error("Error fetching task:", error));
// }