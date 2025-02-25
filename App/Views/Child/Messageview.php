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
                <input placeholder="Search" type="text" />
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
                    <div class="fun-zone">
                        <span>F</span><span>U</span><span>N</span> <span>Z</span><span>O</span><span>N</span><span>E</span>
                    </div>
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
                    <div class="url-input" style="display: flex; flex-direction: column;">
                        <p>You will be notified once the import is successful</p>
                        <input type="text" placeholder="Add file URL">
                    </div>
                    <input type="file" id="file-input" style="display: none;">
                </div>
                <div class="upload-buttons">
                    <button id="cancel-btn">Cancel</button>
                    <button class="done" style="margin-right: 100px !important;">Done</button>
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

    function get_users() {
        fetch("<?= ROOT ?>/Child/Message/get_users", {
                method: "POST",
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

                        const chatInfo = document.createElement('div');
                        chatInfo.classList.add('chat-info');

                        const nameSpan = document.createElement('span');
                        nameSpan.classList.add('name');
                        nameSpan.textContent = conversation.partnerName;

                        const roleSpan = document.createElement('span');
                        roleSpan.classList.add('message');
                        roleSpan.textContent = conversation.Role;

                        const lastSeenSpan = document.createElement('span');
                        lastSeenSpan.classList.add('message');
                        lastSeenSpan.style.whiteSpace = 'nowrap';
                        lastSeenSpan.textContent = `Last seen ${conversation.LastSeen}`;

                        chatInfo.appendChild(nameSpan);
                        chatInfo.appendChild(roleSpan);
                        chatInfo.appendChild(lastSeenSpan);

                        // If there's a badge, create it
                        if (conversation.badge) {
                            const badgeSpan = document.createElement('span');
                            badgeSpan.classList.add('badge');
                            badgeSpan.textContent = conversation.badge;
                            chatInfo.appendChild(badgeSpan);
                        }

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
            console.log(partnerUserID);

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
                        // window.location.href = "<?= ROOT ?>/Main/Login"; // Redirect after logout
                    } else {
                        alert("Error in loading Chat");
                    }
                })
                .catch(error => console.error("Error:", error));

        }
    });

    const chatwindow = document.getElementById('chat-window');

    function loadChat(conversation) {
        chatwindow.innerHTML = '';
        let lastDate = null;

        if (!Array.isArray(conversation)) {
            conversation = Object.values(conversation);
        }

        if (conversation.length === 0) {
            // Show "Start Messaging" heading when no messages exist
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

            // If this message's date is different from the last date, add a heading
            if (displayDate !== lastDate) {
                lastDate = displayDate;
                const dateHeading = document.createElement("div");
                dateHeading.classList.add("date-heading");
                dateHeading.textContent = displayDate;
                chatwindow.appendChild(dateHeading);
            }

            // Determine if message is sent (by MyID) or received.
            const isSent = parseInt(msg.SenderID) === parseInt(MyID);

            const messageDiv = document.createElement("div");
            messageDiv.classList.add("message", isSent ? "sent" : "received");

            const textDiv = document.createElement("div");
            textDiv.classList.add("text");

            // Check if there is an image in the message.
            if (msg.Image === null || msg.Image === "") {
                // No image, display the text message.
                textDiv.textContent = msg.Message;
            } else {
                // Image exists, create an <img> element.
                const img = document.createElement("img");
                img.src = 'data:' + msg.ImageType + ';base64,' + msg.Image;
                img.alt = "Sent image";
                img.style.border = "2px solid white";
                img.style.borderRadius = "10px";
                textDiv.appendChild(img);
            }

            // Create a time element showing hour and minute (without seconds)
            const timeDiv = document.createElement("div");
            timeDiv.classList.add("time2");
            timeDiv.textContent = dt.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });

            textDiv.appendChild(timeDiv);
            messageDiv.appendChild(textDiv);
            chatwindow.appendChild(messageDiv);
        });

        // Add a scroll anchor to keep the latest message in view.
        const newAnchor = document.createElement("div");
        newAnchor.id = "scroll-anchor";
        chatwindow.appendChild(newAnchor);
        newAnchor.scrollIntoView({
            behavior: "smooth"
        });
    }


    document.addEventListener('DOMContentLoaded', function() {

        get_users();

        const persons = document.querySelectorAll('.sidebar-chat');
        const chatwindow = document.getElementById('chat-window');
        const inputbar = document.getElementById('input-bar');
        const sendbtn = document.getElementById('send-btn');
        const messagevalue = document.getElementById('message-value');

        function sendMessage() {
            const messageText = messagevalue.value.trim();
            if (!messageText) return;
            let now = new Date();
            let formattedDate = now.getFullYear() + "-" +
                String(now.getMonth() + 1).padStart(2, '0') + "-" +
                String(now.getDate()).padStart(2, '0');

            console.log(formattedDate);
            const timeString = now.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            });

            const activePartnerUserID = document.querySelector('.sidebar-chat.active')?.getAttribute('data-partneruserid');
            if (!activePartnerUserID) return;

            const conversation = conversationsData[activePartnerUserID];
            let lastMessage = conversation.messages.length ? conversation.messages[conversation.messages.length - 1] : null;
            let lastMessageDate = lastMessage ? lastMessage.DateTime.split(" ")[0] : null;
            console.log(lastMessage);

            console.log(lastMessageDate);
            console.log(formattedDate);
            if (lastMessageDate !== formattedDate) {
                const dateHeading = document.createElement("div");
                dateHeading.classList.add("date-heading");
                dateHeading.textContent = "Today";
                chatwindow.appendChild(dateHeading);
            }

            // Create new message element.
            const messageDiv = document.createElement("div");
            messageDiv.classList.add("message", "sent");

            const textDiv = document.createElement("div");
            textDiv.classList.add("text");
            textDiv.textContent = messageText;

            const timeDiv = document.createElement("div");
            timeDiv.classList.add("time2");
            const time = now.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });
            timeDiv.textContent = time;

            textDiv.appendChild(timeDiv);
            messageDiv.appendChild(textDiv);
            chatwindow.appendChild(messageDiv);

            // Update the preloaded conversation data with the new message.
            conversation.messages.push({
                SenderID: MyID, // Ensure MyID is properly defined
                ReceiverID: activePartnerUserID,
                Message: messageText,
                Image: null,
                DateTime: formattedDate + ' ' + timeString, // Store in ISO format for consistency
            });

            messagevalue.value = "";

            // Scroll to bottom.
            const newAnchor = document.createElement("div");
            newAnchor.id = "scroll-anchor";
            chatwindow.appendChild(newAnchor);
            newAnchor.scrollIntoView({
                behavior: "smooth"
            });

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

    });
</script>

</html>