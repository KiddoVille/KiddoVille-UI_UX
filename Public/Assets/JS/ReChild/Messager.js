document.addEventListener('DOMContentLoaded', function () {
    // choose person and send data 
    const persons = document.querySelectorAll('.chat-item');
    const refresh = document.getElementById('refresh');
    const section = document.getElementById('refresh-section');
    const sidebar = document.getElementById('sidebar');
    const chatwindow = document.getElementById('chat-window');
    const chat = document.querySelectorAll('.chat-window .messages .message');
    const newtextbtn = document.getElementById('newtextbtn');
    const oldtext = document.getElementById('oldtext');
    const newtext = document.getElementById('newtext');
    const start = document.getElementById('start');
    const inputbar = document.getElementById('input-bar');
    const sendbtn = document.getElementById('send-btn');
    const messagevalue = document.getElementById('message-value');
    const anchor = document.getElementById('scroll-anchor');
    let lol = 0;

    function sendMessage(){
        const messageText = messagevalue.value;
        if (messageText.trim() === "") return;

        const messageDiv = document.createElement("div");
        messageDiv.classList.add("message", "sent");
        messageDiv.style.display = 'flex';
        const textDiv = document.createElement("div");
        textDiv.classList.add("text");
        textDiv.textContent = messageText;
        const timeDiv = document.createElement("div");
        timeDiv.classList.add("time");
        const currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        timeDiv.textContent = currentTime;

        textDiv.appendChild(timeDiv);
        messageDiv.appendChild(textDiv);
        if (anchor) {
            anchor.remove();
        }
        chatwindow.appendChild(messageDiv);
        messagevalue.value = "";

        const newAnchor = document.createElement("div");
        newAnchor.id = "scroll-anchor";
        chatwindow.appendChild(newAnchor);
        newAnchor.scrollIntoView({ behavior: "smooth" });
    }

    sendbtn.addEventListener('click',sendMessage);

    messagevalue.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            sendMessage();
        }
    });

    refresh.addEventListener('click', function () {
        section.classList.toggle('hidden');
        sidebar.classList.toggle('blur');
        chatwindow.classList.toggle('blur');

        setTimeout(function () {
            section.classList.toggle('hidden');
            sidebar.classList.toggle('blur');
            chatwindow.classList.toggle('blur');
        }, 5000);
    })

    persons.forEach(person => {
        person.addEventListener('click', function () {
            chat.forEach(message => {
                console.log("Hi");
                if (message.style.display == "none") {
                    start.style.display = 'none';
                    message.style.display = "flex";
                    inputbar.style.display = 'flex';
                }
                else {
                    message.style.display = "none"
                }
            });
        })
    });
    newtextbtn.addEventListener('click', function () {
        var img = document.getElementById('newtextimg');
        if (lol === 0) {
            img.src = '../../Assets/recent.svg';
            lol = 1;
            oldtext.style.display = 'none';
            newtext.style.display = 'flex';
        }
        else {
            img.src = '../../Assets/person-plus-fill.svg'
            lol = 0;
            oldtext.style.display = '';
            newtext.style.display = 'none'
        }
    });

    chatwindow.addEventListener('click', function (event) {
        if (start && !start.contains(event.target)) {
            start.style.display = 'none';
        }
    });

    //profile card
    const settingsIcon = document.querySelector('.settings');
    const profileCard = document.getElementById('profileCard');
    const closeProfileCard = document.getElementById('closeProfileCard');

    let profileCardTimeout;

    settingsIcon.addEventListener('click', () => {
        profileCard.classList.toggle('show');
    });

    closeProfileCard.addEventListener('click', () => {
        profileCard.classList.remove('show');
    });

    profileCard.addEventListener('mouseenter', () => {
        clearTimeout(profileCardTimeout);
    });

    profileCard.addEventListener('mouseleave', () => {
        profileCardTimeout = setTimeout(() => {
            profileCard.classList.remove('show');
        }, 300);
    });

    const customChildSelectTrigger = document.querySelector('.custom-child-select-trigger');
    const customChildSelectContainer = document.querySelector('.custom-child-select-container');

    customChildSelectTrigger.addEventListener('click', (event) => {
        event.stopPropagation();
        customChildSelectContainer.classList.toggle('active');
    });

    customChildSelectContainer.addEventListener('mouseenter', () => {
        clearTimeout(dropdownTimeout);
    });

    customChildSelectContainer.addEventListener('mouseleave', () => {
        dropdownTimeout = setTimeout(() => {
            customChildSelectContainer.classList.remove('active');
        }, 300);
    });

});