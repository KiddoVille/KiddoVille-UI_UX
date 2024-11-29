


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

const deleteAccd = ()=>{
    const dlt = document.getElementById("accd-delete");
    if(dlt){
        dlt.classList.add("delete-panel");

    }
    
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

