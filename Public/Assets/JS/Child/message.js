document.addEventListener('DOMContentLoaded', function () {
    const persons = document.querySelectorAll('.chat-item');
    const refresh = document.getElementById('refresh');
    const section = document.getElementById('refresh-section');
    const sidebar = document.getElementById('sidebar');
    const chatwindow = document.getElementById('chat-window');
    const chat = document.querySelectorAll('.chat-window .messages .message');
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

    chatwindow.addEventListener('click', function (event) {
        if (start && !start.contains(event.target)) {
            start.style.display = 'none';
        }
    });

    const profileCard = document.getElementById('profileCard');

    let profileCardTimeout;

    profileCard.addEventListener('mouseenter', () => {
        clearTimeout(profileCardTimeout);
    });

    profileCard.addEventListener('mouseleave', () => {
        profileCardTimeout = setTimeout(() => {
            profileCard.classList.remove('show');
        }, 300);
    });

});