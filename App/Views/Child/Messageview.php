<html>

<head>
    <title>Chat Application</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="<?= CSS ?>/Child/Message.css?v=<?= time() ?>" /> -->
    <link rel="stylesheet" href="<?= CSS ?>/Child/Main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Child/Home.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Child/Message.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Child/Upload-file.js?v=<?= time() ?>"></script>
    <!-- <script src="<?= JS ?>/Child/message.js?v=<?= time() ?>"></script> -->
    <script src="<?= JS ?>/Child/Navbar.js?v=<?= time() ?>"> </script>
    <script src="<?= JS ?>/Child/MessageDropdown.js?v=<?= time() ?>"> </script>
    <script src="<?= JS ?>/Child/Profile.js?v=<?= time() ?>"></script>
</head>

<body>
    <div class="container">
        // minimized sidebar
        <div class="sidebar" id="sidebar1">
            <img src="<?= IMAGE ?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
                <h2 id="sidebar-kiddo">KIDDO VILLE </h2>
            </div>
            <ul>
                <li class="selected first">
                    <a href="<?= ROOT ?>/Child/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/report">
                        <i class="fa fa-user-shield"></i> <span>Report</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/event">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/funzonehome">
                        <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/payment">
                        <i class="fas fa-credit-card"></i> <span>Payments</span>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span
                        id="help">Help</span></a>
            </div>
        </div>
        <!-- navigation to choose child -->
        <div class="sidebar-2" id="sidebar2">
            <div>
                <h2 style="margin-top: -70px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px; margin-left: 20px;">
                    <ul>
                        <li class="hover-effect first"
                            onclick="removechildsession();">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
                                style="width: 60px; height:60px; border-radius: 30px;">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
                        Explore your children's activities and progress!
                    </p>
                    <ul class="children-list">
                        <?php foreach ($data['children'] as $child): ?>
                            <li class="first
                                <?php if ($child['name'] === $data['selectedchildren']['name']) {
                                    echo "select-child";
                                } ?>
                            "
                                onclick="setChildSession('<?= isset($child['Id']) ? $child['Id'] : '' ?>')">
                                <img src="<?php echo htmlspecialchars($child['image']); ?>"
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px; <?php if ($child['name'] !== $data['selectedchildren']['name']) {
                                                                                                echo "margin-left: -20px !important";
                                                                                            } ?>">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header -->
        <div class="header">
            <i class="fa fa-bars" id="minimize-btn"
                style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
            <div class="name">
                <h1 style="color: white;"><?= isset($data['parent']['fullname']) ? $data['parent']['fullname'] : 'No name set'; ?></h1>
                <p style="color: white">Let’s do some productive activities today</p>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
                <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
            </div>
            <!-- message icon -->
            <div class="bell-con" id="bell-container" style="cursor: pointer;">
                <i class="fas fa-bell bell-icon" style="margin-left: -350px;"></i>
                <div class="message-dropdown" id="messageDropdown" style="display: none;">
                    <ul>
                        <li>
                            <p>New Message 1 <i href="" class="fas fa-paper-plane"></i> </p>
                            <p class="content"> content like a message</p>
                        </li>
                        <li>
                            <p>New Message 2 <i href="" class="fas fa-paper-plane"></i></p>
                            <p class="content"> content like a message</p>
                        </li>
                        <li>
                            <p>New Message 3 <i href="" class="fas fa-paper-plane"></i></p>
                            <p class="content"> content like a message</p>
                        </li>
                        <li>
                            <p>New Message 4 <i href="" class="fas fa-paper-plane"></i></p>
                            <p class="content"> content like a message</p>
                        </li>
                        <li>
                            <p>New Message 5 <i href="" class="fas fa-paper-plane"></i></p>
                            <p class="content"> content like a message</p>
                        </li>
                        <li>
                            <p>New Message 6 <i href="" class="fas fa-paper-plane"></i></p>
                            <p class="content"> content like a message</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="message-numbers">
                <p> 2</p>
            </div>
            <!-- Prodile btn -->
            <div class="profile">
                <button class="profilebtn">
                    <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                </button>
            </div>
        </div>

        <div class="sidebar3">
            <div class="search-bar">
                <input placeholder="Search" type="text" id="persons"/>
            </div>
            <div class="chat-list" id="sidebar" style="height: 580px;">
                <div id="newtext" class="newtext">
                    <!-- <?php if (!empty($data['chat'])): ?>
                        <?php foreach ($data['chat'] as $partnerUserID => $conversation): ?>
                            <div class="chat-item sidebar-chat" data-partneruserid="<?= $conversation['partnerUserID'] ?>" data-role="<?= $conversation['Role'] ?>">
                                <img alt="Profile picture of <?= htmlspecialchars($conversation['partnerName']) ?>" height="40" src="<?= $conversation['PartnerImage'] ? $conversation['PartnerImage'] : IMAGE . '/face.jpeg' ?>" width="40" />
                                <div class="chat-info">
                                    <span class="name"><?= htmlspecialchars($conversation['partnerName']) ?></span>
                                    <span class="message">
                                        <?= htmlspecialchars($conversation['Role']) ?>
                                    </span>
                                    <span class="message" style="white-space: nowrap">
                                        Last seen <?= htmlspecialchars($conversation['LastSeen']) ?>
                                    </span>
                                    <?php if (!empty($conversation['badge'])): ?>
                                        <span class="badge"><?= htmlspecialchars($conversation['badge']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="no-more-chats">No contacts to show</p>
                    <?php endif; ?> -->
                </div>
            </div>
        </div>
        <div class="chat-window">
            <div class="header2" style="height: 40px;">
                <img alt="Profile picture of Deepti manohar" style="display: none;" height="40" src=" " width="40" />
                <div class="user-info" style="display: flex; flex-direction: column;">
                    <span class="name">
                    </span>
                    <span class="status">
                    </span>
                </div>
                <div class="icons">
                    <i class="fas fa-sync" style="font-size: 25px;" id="refresh"></i>
                </div>
            </div>
            <div class="messages" id="chat-window">
                <div id="scroll-anchor"></div>
            </div>
            <div class="input-bar" id="input-bar">
                <button id="paperclip-btn" style="margin-right: 10px;"><i class="fa fa-paperclip"></i></button>
                <input placeholder="Enter message" type="text" id="message-value" />
                <button>
                    <i class="fas fa-paper-plane" id="send-btn"></i>
                </button>
            </div>
            <div id="upload-container" class="upload-container">
                <div class="upload-header">
                    <i class="fas fa-upload"></i>
                    <h1>Upload Resources</h1>
                </div>
                <div class="upload-box" id="drop-area">
                    <div id="file-list"></div>
                    <div id="file-upload">
                        <div style="display: flex; justify-content: center; gap: 20px;">
                            <div class="icon-container">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="icon-container">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="icon-container">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                        </div>
                        <p>Drag and drop files to upload or</p>
                        <button id="upload-btn">Browse</button>
                        <small>Supported Files: JPEG, PNG, PDF, DOCX</small>
                    </div>
                    <input type="file" id="file-input" style="display: none;" multiple>
                </div>
                <div class="upload-buttons">
                    <button id="cancel-btn">Cancel</button>
                    <button class="done" id="files" style="margin-right: 100px !important;">Done</button>
                </div>
            </div>
        </div>

        <!-- profile card -->
        <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" id="back-arrow-profile"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?php echo htmlspecialchars($data['selectedchildren']['image']); ?>" width="100"
                class="profile" />
            <h2><?= $data['selectedchildren']['fullname'] ?></h2>
            <p>SRD<?= $data['selectedchildren']['id'] ?></p>
            <button class="profile-button"
                onclick="window.location.href ='<?= ROOT ?>/Child/ChildProfile'">Profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ParentProfile'">Parent profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/GuardianProfile'">Guardian profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildPackage'">Package</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildID'">Id Card</button>
            <button class="logout-button" onclick="logoutUser()">LogOut</button>
        </div>
    </div>
</body>
<script>
    const MyID = <?= json_encode($data['Child']); ?>

    function get_users(Name) {
        fetch("<?= ROOT ?>/Child/Message/get_users", {
                method: "POST",
                body: JSON.stringify({
                    Name: Name
                }),
                credentials: "same-origin"
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const chatListContainer = document.getElementById('newtext'); // The container to display the chats

                    // Clear any existing chat items before rendering new ones
                    chatListContainer.innerHTML = '';

                    // Loop through the conversations and render each one
                    data.message.forEach(conversation => {
                        // Create a new chat item element
                        const chatItem = document.createElement('div');
                        chatItem.classList.add('chat-item', 'sidebar-chat');
                        chatItem.setAttribute('data-partneruserid', conversation.partnerUserID);
                        chatItem.setAttribute('data-role', conversation.Role);

                        // Create the chat item content
                        const img = document.createElement('img');
                        img.alt = `Profile picture of ${conversation.partnerName}`;
                        img.height = 40;
                        img.width = 40;
                        img.src = conversation.PartnerImage ? conversation.PartnerImage : "<?= IMAGE ?>/face.jpeg";
                        img.classList.add('profileimg');

                        const chatInfo = document.createElement('div');
                        chatInfo.classList.add('chat-info');

                        const nameSpan = document.createElement('span');
                        nameSpan.classList.add('name');
                        nameSpan.textContent = conversation.partnerName;

                        const roleSpan = document.createElement('span');
                        roleSpan.classList.add('message');
                        roleSpan.textContent = conversation.Role;

                        // Create a container for last seen and status indicator
                        const lastSeenContainer = document.createElement('div');
                        lastSeenContainer.classList.add('last-seen-container');

                        const lastSeenSpan = document.createElement('span');
                        lastSeenSpan.classList.add('message', 'lastseen');
                        lastSeenSpan.style.whiteSpace = 'nowrap';
                        lastSeenSpan.textContent = `Last seen ${conversation.LastSeen}`;

                        const statusIndicator = document.createElement('span');
                        statusIndicator.classList.add('status-indicator');
                        if (conversation.canmessage) {
                            statusIndicator.classList.add('online'); // Green for available
                        } else {
                            statusIndicator.classList.add('offline'); // Red for unavailable
                        }

                        // Append status indicator and last seen in the same row
                        lastSeenContainer.appendChild(lastSeenSpan);
                        lastSeenContainer.appendChild(statusIndicator);

                        chatInfo.appendChild(nameSpan);
                        chatInfo.appendChild(roleSpan);
                        chatInfo.appendChild(lastSeenContainer); // Append last seen container

                        // Append the image and chatInfo to the chat item
                        chatItem.appendChild(img);
                        chatItem.appendChild(chatInfo);

                        // Append the chat item to the container
                        chatListContainer.appendChild(chatItem);
                    });

                } else {
                    alert("No contacts to show.");
                }
            })
            .catch(error => console.error("Error:", error));
    }

    function logoutUser() {
        fetch("<?= ROOT ?>/Child/Message/Logout", {
                method: "POST",
                credentials: "same-origin"
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // window.location.href = "<?= ROOT ?>/Main/Login"; // Redirect after logout
                } else {
                    alert("Logout failed. Try again.");
                }
            })
            .catch(error => console.error("Error:", error));
    }

    function removechildsession() {
        fetch('<?= ROOT ?>/Child/Message/removechildsession', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("Child id removed from session.");
                    window.location.href = '<?= ROOT ?>/Parent/Message';
                } else {
                    console.error("Failed to remove child id from session.", data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    }

    function setChildSession(ChildID) {
        fetch('<?= ROOT ?>/Child/Message/setchildsession', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    ChildID: ChildID
                })
            })

            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("Child id set in session.");
                    window.location.href = '<?= ROOT ?>/Child/Message';
                } else {
                    console.error("Failed to set child id from session.", data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    }

    const chatHeader = document.querySelector('.header2');
    const chatUserName = chatHeader.querySelector('.user-info .name');
    const chatUserStatus = chatHeader.querySelector('.user-info .status');
    const chatUserImage = chatHeader.querySelector('.header2 img');
    const sidebar = document.getElementById('sidebar');
    const inputbar = document.getElementById('input-bar');

    // Attach the event listener to the parent container (event delegation)
    sidebar.addEventListener('click', function(e) {
        // Check if the clicked element is a .sidebar-chat element
        if (e.target && e.target.closest('.sidebar-chat')) {
            const person = e.target.closest('.sidebar-chat'); // Get the closest .sidebar-chat element

            // Get all the .sidebar-chat elements
            const persons = document.querySelectorAll('.sidebar-chat');

            // Remove active class from all persons
            persons.forEach(p => p.classList.remove('active'));

            // Add active class to the clicked person
            person.classList.add('active');

            // Get the partnerUserID from the clicked element
            const partnerUserID = person.getAttribute('data-partneruserid');
            const userName = person.querySelector('.name')?.innerText || 'Unknown User';
            const userStatus = person.querySelector('.lastseen')?.innerText || 'Offline';
            const userProfilePic = person.querySelector('.profileimg')?.src || '';
            const status = person.querySelector('.status-indicator');

            const header = document.querySelector('.header2');
            if (header) {
                header.style.display = 'flex';
                header.querySelector('.name').innerText = userName;

                // Update status
                header.querySelector('.status').innerText = userStatus;

                // Update profile picture
                const imgElement = header.querySelector('img');
                if (imgElement) {
                    imgElement.src = userProfilePic;
                    imgElement.style.display = userProfilePic ? 'block' : 'none';
                }
            }

            if (status.classList.contains('online')) {
                inputbar.style.display = 'flex';
            } else {
                inputbar.style.display = 'none'; // Optional: Hide it when inactive
            }

            console.log(partnerUserID);
            senduser(partnerUserID);
        }
    });

    function senduser(partnerUserID) {
        fetch("<?= ROOT ?>/Child/Message/get_messages", {
                method: "POST",
                credentials: "same-origin",
                body: JSON.stringify({
                    UserID: partnerUserID
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log(data);
                    loadChat(data.message)
                } else {
                    alert("Error in loading Chat");
                }
            })
            .catch(error => console.error("Error:", error));
    }

    const chatwindow = document.getElementById('chat-window');

    function loadChat(conversation) {
        chatwindow.innerHTML = '';
        let lastDate = null;

        if (!Array.isArray(conversation)) {
            conversation = Object.values(conversation);
        }

        if (conversation.length === 0) {
            const emptyMessage = document.createElement("div");
            emptyMessage.classList.add("empty-chat-message");
            emptyMessage.textContent = "Start Messaging";
            chatwindow.appendChild(emptyMessage);
            return;
        }

        const today = new Date();
        const yesterday = new Date();
        yesterday.setDate(today.getDate() - 1);

        conversation.forEach(msg => {
            const dt = new Date(msg.DateTime);
            const messageDate = dt.toLocaleDateString();

            let displayDate;
            if (messageDate === today.toLocaleDateString()) {
                displayDate = "Today";
            } else if (messageDate === yesterday.toLocaleDateString()) {
                displayDate = "Yesterday";
            } else {
                displayDate = messageDate;
            }

            if (displayDate !== lastDate) {
                lastDate = displayDate;
                const dateHeading = document.createElement("div");
                dateHeading.classList.add("date-heading");
                dateHeading.textContent = displayDate;
                chatwindow.appendChild(dateHeading);
            }

            const isSent = parseInt(msg.SenderID) === parseInt(MyID);

            const messageDiv = document.createElement("div");
            messageDiv.classList.add("message", isSent ? "sent" : "received");

            const textDiv = document.createElement("div");
            textDiv.classList.add("text");
            textDiv.setAttribute("data-chatid", msg.ChatID);

            if (msg.Deleted) {
                const deletedMsg = document.createElement("p");
                deletedMsg.textContent = "This message was deleted";
                deletedMsg.classList.add("deleted-message");
                textDiv.appendChild(deletedMsg);
            } 
            else if (!msg.Message && msg.FileType) {
                textDiv.classList.add("file");
                // File handling
                let mediaElement;
                if (msg.FileType.startsWith("image") || msg.FileType.startsWith("audio") || msg.FileType.startsWith("video") || msg.FileType.startsWith("document")) {
                    // Create a wrapper for file and download button
                    mediaElement = document.createElement("div");
                    mediaElement.classList.add("file-container");  // Add a wrapper for media + download button

                    let fileMedia;

                    // Handling different file types
                    if (msg.FileType.startsWith("image")) {
                        fileMedia = document.createElement("img");
                        fileMedia.src = msg.URL;
                        fileMedia.alt = "Image file";
                        fileMedia.style.maxWidth = "250px";
                    } 
                    else if (msg.FileType.startsWith("audio")) {
                        fileMedia = document.createElement("audio");
                        fileMedia.controls = true;
                        fileMedia.src = msg.URL;
                    } 
                    else if (msg.FileType.startsWith("video")) {
                        fileMedia = document.createElement("video");
                        fileMedia.controls = true;
                        fileMedia.style.maxWidth = "300px";
                        fileMedia.src = msg.URL;
                        fileMedia.setAttribute("preload", "metadata");  // Load metadata only for video
                    } 
                    else if (msg.FileType.startsWith("document")) {
                        fileMedia = document.createElement("p");
                        // Display document filename
                        const fileNameText = document.createTextNode(msg.FileName);
                        fileMedia.appendChild(fileNameText);
                    }

                    // Create download button with Font Awesome icon
                    const downloadBtn = document.createElement("a");
                    downloadBtn.href = msg.URL;
                    downloadBtn.download = msg.URL.split('/').pop(); // Extract filename
                    const downloadIcon = document.createElement("i");
                    downloadIcon.classList.add("fas", "fa-download");  // Font Awesome icon class for download

                    // Position the download button based on message type (sent or received)
                    if (isSent) {
                        mediaElement.appendChild(downloadBtn);
                        downloadBtn.appendChild(downloadIcon);
                        mediaElement.appendChild(fileMedia);
                        mediaElement.classList.add("sent-file");  // For styling sent files
                        downloadBtn.classList.add("sent-download-btn");
                    } else {
                        mediaElement.appendChild(fileMedia);
                        downloadBtn.appendChild(downloadIcon);
                        mediaElement.appendChild(downloadBtn);
                        mediaElement.classList.add("received-file");  // For styling received files
                        downloadBtn.classList.add("received-download-btn");
                    }
                    downloadBtn.classList.add("download-btn");
                    textDiv.appendChild(mediaElement);
                }
            } 
            else {
                // Text message
                textDiv.classList.add("word");
                const messagePara = document.createElement("p");
                messagePara.textContent = msg.Message;
                textDiv.appendChild(messagePara);

                if (msg.Edited) {
                    const editedSpan = document.createElement("span");
                    editedSpan.classList.add("edited");
                    editedSpan.textContent = "Edited";
                    messagePara.appendChild(editedSpan);
                }
            }

            const timeStatusDiv = document.createElement("div");
            timeStatusDiv.classList.add("time-status-container");

            const timeDiv = document.createElement("div");
            timeDiv.classList.add("time2");
            timeDiv.textContent = dt.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });

            const statusDiv = document.createElement("div");
            statusDiv.classList.add("message-status");

            if (isSent) {
                if (msg.Seen) {
                    statusDiv.innerHTML = "✔✔"; // Seen (double blue ticks)
                    statusDiv.classList.add("status-seen");
                } else if (msg.Delivered) {
                    statusDiv.innerHTML = "✔✔"; // Delivered (double gray ticks)
                    statusDiv.classList.add("status-delivered");
                } else {
                    statusDiv.innerHTML = "✔"; // Sent (single tick)
                    statusDiv.classList.add("status-sent");
                }
            }

            // Append time and status inside the new container
            timeStatusDiv.appendChild(timeDiv);
            if (isSent) timeStatusDiv.appendChild(statusDiv);

            // Append the container to the message text
            textDiv.appendChild(timeStatusDiv);

            messageDiv.appendChild(textDiv);
            chatwindow.appendChild(messageDiv);
        });

        const newAnchor = document.createElement("div");
        newAnchor.id = "scroll-anchor";
        chatwindow.appendChild(newAnchor);
        newAnchor.scrollIntoView({
            behavior: "smooth"
        });
    }


    document.addEventListener('DOMContentLoaded', function() {

        let selectedFiles = [];
        const refresh = document.getElementById('refresh');
        const uploadContainer = document.getElementById('upload-container');
        const cancelBtn = document.getElementById('cancel-btn');
        const dropArea = document.getElementById('drop-area');
        const uploadBtn = document.getElementById('upload-btn');
        const fileInput = document.getElementById('file-input');
        const uploadContent = document.getElementById('file-upload');
        const fileList = document.getElementById('file-list');
        const paperclipBtn = document.getElementById('paperclip-btn'); // Make sure you have this button in your HTML
        const cancel = document.getElementById('cancel-btn');
        const person = document.getElementById('persons');
        const chat = document.getElementById('chat-window');
        const userlist = document.getElementById('sidebar');

        person.addEventListener('change' , () => {
            let Name = person.value;
            get_users(Name);
        }) 

        cancel.addEventListener('click', () => {
            const fileInput = document.querySelector('input[type="file"]'); // Make sure this targets the correct input
            if (fileInput) {
                fileInput.value = ''; 
            }
            uploadContainer.classList.toggle('active2');
            uploadContent.style.display = 'block';
            fileList.innerHTML = '';
        })

        refresh.addEventListener('click', () => {
            const partnerUser = document.querySelector('.active');
            const partnerUserID = partnerUser.getAttribute('data-partneruserid');
            console.log(partnerUserID);
            senduser(partnerUserID);
        })

        // Toggle upload container when clicking the paperclip icon
        paperclipBtn.addEventListener('click', () => {
            uploadContainer.classList.toggle('active2');
        });

        // Close upload container when clicking the cancel button
        cancelBtn.addEventListener('click', () => {
            uploadContainer.classList.remove('active2');
        });

        // Close upload container if clicking outside of it
        // document.addEventListener('click', (event) => {
        //     if (!uploadContainer.contains(event.target) && !paperclipBtn.contains(event.target)) {
        //         uploadContainer.classList.remove('active2');
        //     }
        // });

        // Handle Browse button click
        uploadBtn.addEventListener('click', function() {
            fileInput.click();
        });

        // Handle file selection from input
        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                handleFiles(fileInput.files);
            }
        });

        // Drag and drop event handlers
        const preventDefaults = (e) => {
            e.preventDefault();
            e.stopPropagation();
        };

        const highlight = () => dropArea.classList.add('dragging');
        const unhighlight = () => dropArea.classList.remove('dragging');

        const handleDrop = (e) => {
            let dt = e.dataTransfer;
            let files = dt.files;
            handleFiles(files);
        };

        // Process & display uploaded files
        const handleFiles = (files) => {
            fileList.innerHTML = ''; // Clear previous files
            uploadContent.style.display = 'none'; // Hide upload box

            selectedFiles = files;

            [...files].forEach(file => {
                const fileElement = document.createElement('div');
                fileElement.classList.add('file-item');
                fileElement.style.display = 'flex';
                fileElement.style.alignItems = 'center';
                fileElement.style.marginBottom = '10px';

                // File preview container
                const previewContainer = document.createElement('div');
                previewContainer.style.marginRight = '10px';

                // If file is an image, show preview
                if (file.type.startsWith('image/')) {
                    const imgPreview = document.createElement('img');
                    imgPreview.src = URL.createObjectURL(file);
                    imgPreview.style.width = '60px';
                    imgPreview.style.height = '60px';
                    imgPreview.style.objectFit = 'cover';
                    imgPreview.style.borderRadius = '5px';
                    previewContainer.appendChild(imgPreview);
                } else {
                    // Otherwise, show file type icon
                    const fileIcon = document.createElement('i');
                    if (file.type.includes('pdf')) {
                        fileIcon.classList.add('fas', 'fa-file-pdf');
                    } else if (file.type.includes('word')) {
                        fileIcon.classList.add('fas', 'fa-file-word');
                    }
                    else if (file.type.includes('audio')){
                        fileIcon.classList.add('fas', 'fa-file-audio');
                    }
                    else if (file.type.includes('video')){
                        fileIcon.classList.add('fas', 'fa-file-video');
                    } else {
                        fileIcon.classList.add('fas', 'fa-file');
                    }
                    fileIcon.style.fontSize = '24px';
                    previewContainer.appendChild(fileIcon);
                }

                // File details (name & size)
                const fileInfo = document.createElement('div');
                const fileName = document.createElement('p');
                fileName.textContent = file.name;
                fileName.style.margin = '0';
                fileName.style.fontSize = '14px';

                const fileSize = document.createElement('small');
                fileSize.textContent = `${(file.size / 1024).toFixed(2)} KB`;
                fileSize.style.color = '#666';

                fileInfo.appendChild(fileName);
                fileInfo.appendChild(fileSize);

                // Remove file button
                const removeBtn = document.createElement('button');
                removeBtn.innerHTML = '&times;';
                removeBtn.style.border = 'none';
                removeBtn.style.background = 'transparent';
                removeBtn.style.fontSize = '20px';
                removeBtn.style.cursor = 'pointer';
                removeBtn.style.color = 'red';
                removeBtn.style.marginLeft = 'auto';

                removeBtn.addEventListener('click', () => {
                    fileElement.remove();
                    // Ensure upload container stays visible
                    if (fileList.childElementCount === 0) {
                        uploadContent.style.display = 'block'; // Show upload box if no files
                    }
                    uploadContainer.classList.add('active2'); // Ensure it stays visible
                });

                // Append elements
                fileElement.appendChild(previewContainer);
                fileElement.appendChild(fileInfo);
                fileElement.appendChild(removeBtn);
                fileList.appendChild(fileElement);
            });
        };

        // Drag & drop events
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
        });
        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });
        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });
        dropArea.addEventListener('drop', handleDrop, false);

        let Name = person.value;
        get_users(Name);

        const persons = document.querySelectorAll('.sidebar-chat');
        const chatwindow = document.getElementById('chat-window');
        const inputbar = document.getElementById('input-bar');
        const sendbtn = document.getElementById('send-btn');
        const messagevalue = document.getElementById('message-value');
        const doneBtn = document.getElementById('files');

        doneBtn.addEventListener('click', function() {
            const activePartnerUserID = document.querySelector('.sidebar-chat.active')?.getAttribute('data-partneruserid');
            const formData = new FormData();

            // Append selected files to FormData
            console.log(selectedFiles);
            [...selectedFiles].forEach(file => {
                formData.append('files[]', file);
            });

            formData.append('ChildID', MyID);
            formData.append('ReceiverID', activePartnerUserID);
            console.log(formData);

            // Use fetch to send the files to the server
            fetch("<?= ROOT ?>/Child/Message/uploadFiles", {
                    method: 'POST',
                    body: formData,
                    credentials: 'same-origin' // Optional: Include credentials for same-origin requests
                })
                .then(response => response.json()) // Parse the JSON response
                .then(data => {
                    if (data.success) {
                        // Handle successful upload
                        let Name = person.value;
                        get_users(Name);
                        senduser(activePartnerUserID);
                        const fileInput = document.querySelector('input[type="file"]'); // Make sure this targets the correct input
                        if (fileInput) {
                            fileInput.value = ''; 
                        }
                        uploadContainer.classList.toggle('active2');
                        uploadContent.style.display = 'block';
                        fileList.innerHTML = '';
                        
                        console.log(data);
                        // You can do additional work here like clearing the file list or updating UI.
                    } else {
                        // Handle error
                        alert('There was an error uploading the files');
                    }
                })
                .catch(error => {
                    console.error('Error uploading files:', error);
                    alert('There was an error uploading the files');
                });
        });

        function sendMessage() {
            const messageText = messagevalue.value.trim();
            messagevalue.value = '';
            const activePartnerUserID = document.querySelector('.sidebar-chat.active')?.getAttribute('data-partneruserid');

            console.log(MyID, messageText, activePartnerUserID);

            fetch('<?= ROOT ?>/Child/Message/insert_message', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        ChildID: MyID,
                        Message: messageText,
                        ReceiverID: activePartnerUserID,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    let Name = person.value;
                    get_users(Name);
                    senduser(activePartnerUserID);
                    console.log('Message sent successfully:', data);
                })
                .catch(error => {
                    console.error('Error sending message:', error);
                });
        }

        sendbtn.addEventListener('click', sendMessage);
        messagevalue.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                sendMessage();
            }
        });

        const popup = document.createElement("div");
        popup.classList.add("popup");
        popup.innerHTML = `
            <button id="editBtn"><i class="fas fa-edit"></i> Edit</button>
            <button id="deleteBtn"><i class="fas fa-trash"></i> Delete</button>
        `;
        document.body.appendChild(popup);

        let selectedMessage = null;

        document.addEventListener("click", (e) => {
            const messageElement = e.target.closest(".word");  // Find the closest message div
            const fileElement = e.target.closest(".file");

            if (fileElement) {
                selectedMessage = fileElement;
                showPopup(e.pageX, e.pageY, true);
            } else if (messageElement) {
                selectedMessage = messageElement;
                showPopup(e.pageX, e.pageY);
            }else {
                popup.style.display = "none";
            }
        });

        chat.addEventListener("scroll", () => {
            popup.style.display = "none";
        });

        userlist.addEventListener("scroll", () => {
            popup.style.display = "none";
        });

        function showPopup(x, y, isFile = false) {
            popup.style.display = "flex";
            popup.style.top = `${y}px`;
            popup.style.left = `${x}px`;
            document.getElementById("editBtn").style.display = isFile ? "none" : "flex";
        }

        document.getElementById("editBtn").addEventListener("click", () => {
            if (selectedMessage) {
                let newText = prompt("Edit Message:", selectedMessage.innerText);
                if (newText !== null) selectedMessage.innerText = newText;
            }
            popup.style.display = "none";
        });

        document.getElementById("deleteBtn").addEventListener("click", () => {
            if (selectedMessage) {
                const chatID = selectedMessage.getAttribute("data-chatid");
                console.log(chatID);

                if (chatID) {
                    fetch("<?=ROOT?>/Child/Message/deletechat", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({ ChatID: chatID })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const activePartnerUserID = document.querySelector('.sidebar-chat.active')?.getAttribute('data-partneruserid');
                            senduser(activePartnerUserID);
                        } else {
                            alert("Failed to delete message.");
                        }
                    })
                    .catch(error => console.error("Error:", error));
                }
            }
            popup.style.display = "none";
        });
    });
</script>

</html>