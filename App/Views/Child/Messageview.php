<html>

<head>
    <title>Chat Application</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/Child/Message.css?v=<?= time() ?>" />
    <script src="<?=JS?>/Child/Upload-file.js"></script>
    <script src="<?=JS?>/Child/message.js"></script>
</head>
<style>
</style>

<body id="body-blur" style="overflow: hiden;">
    <section class="hidden" id="refresh-section">
        <div class="loader">
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
            <span style="--i:4"></span>
            <span style="--i:5"></span>
            <span style="--i:6"></span>
            <span style="--i:7"></span>
            <span style="--i:8"></span>
            <span style="--i:9"></span>
            <span style="--i:10"></span>
            <span style="--i:11"></span>
            <span style="--i:12"></span>
            <span style="--i:13"></span>
            <span style="--i:14"></span>
            <span style="--i:15"></span>
            <span style="--i:16"></span>
            <span style="--i:17"></span>
            <span style="--i:18"></span>
            <span style="--i:19"></span>
            <span style="--i:20"></span>
        </div>
    </section>
    <div class="sidebar">
        <div class="search-bar">
            <a href="<?=ROOT?>/Child/Home">
                <img src="<?=IMAGE?>/back-arrow.svg" class="backbtn" alt="back-arrow"
                    style="width: 24px; height: 24px;">
            </a>
            <input placeholder="Search" type="text" />
            <i class="fas fa-search"></i>
            <div id="newtextbtn">
                <img src="<?=IMAGE?>/person-plus-fill.svg" class="newtextimg" id="newtextimg"
                    style="width: 24px; height: 24px; margin-top: 1px; text-decoration: none !important; margin-left: 20px; margin-right: -40px; cursor: pointer;padding: 7px 7px;"></img>
            </div>
        </div>
        <div class="chat-list" id="sidebar">
            <div id="newtext" class="newtext">
                <div class="chat-item2">
                    <img alt="Profile picture of Shinhan Mohamad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Shinhan Mohamad
                        </span>
                        <span class="message">
                            Maid
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                    </div>
                </div>
                <div class="chat-item2" id="chat">
                    <img alt="Profile picture of Shinhan Mohamad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Shinhan Mohamad
                        </span>
                        <span class="message">
                            Maid
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                    </div>
                </div>
                <div class="chat-item2" id="chat">
                    <img alt="Profile picture of Shinhan Mohamad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Shinhan Mohamad
                        </span>
                        <span class="message">
                            Maid
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                    </div>
                </div>
                <p class="no-more-chats">No more contacts to show</p>
            </div>
            <div id="oldtext">
                <div class="chat-item" id="chat">
                    <img alt="Profile picture of Shinhan Mohamad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Shinhan Mohamad
                        </span>
                        <span class="message">
                            Maid
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Abdulla Aurad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Abdulla Aurad
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Nimhath Jabir" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Nimhath Jabir
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Murshid Akram" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Murshid Akram
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Shinhan Mohamad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Shinhan Mohamad
                        </span>
                        <span class="message">
                            Maid
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Abdulla Aurad" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Abdulla Aurad
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Nimhath Jabir" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Nimhath Jabir
                        </span>
                        <span class="message">
                            Maid
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Murshid Akram" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Murshid Akram
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Murshid Akram" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Murshid Akram
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Murshid Akram" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Murshid Akram
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <div class="chat-item">
                    <img alt="Profile picture of Murshid Akram" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
                    <div class="chat-info">
                        <span class="name">
                            Murshid Akram
                        </span>
                        <span class="message">
                            Teacher
                            <span class="message" style="position: absolute; left: 70; white-space: nowrap;">
                                Last seen 3:00 pm
                            </span>
                        </span>
                        <span class="badge">3</span>
                    </div>
                </div>
                <p class="no-more-chats">No more chats to show</p>
            </div>
        </div>
    </div>
    <div class="chat-window" style="margin-bottom: 30px;">
        <div class="header">
            <img alt="Profile picture of Deepti manohar" height="40" src="<?=IMAGE?>/face.jpeg" width="40" />
            <div class="user-info">
                <span class="name">
                    Deepti manohar
                </span>
                <span class="status">
                    Online . Last seen 3:00 pm
                </span>
            </div>
            <div class="icons">
                <i class="fas fa-sync" style="font-size: 25px;" id="refresh"></i>
                <i class="fas fa-search" style="font-size: 25px;"></i>
                <i class="fas fa-cog settings" style="font-size: 25px;"></i>
            </div>
        </div>
        <div class="profile-card" id="profileCard">
            <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back" id="closeProfileCard">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100"
                class="profile" />
            <h2 class="child-name">Thilina Perera</h2>
            <p>Student    RS0110657</p>
            <button class="logout-button" type="button" onclick="window.location.href ='<?=ROOT?>/Main/Home'" >Logout</button>
        </div>
        <div class="messages" id="chat-window">
            <div class="container" id="start">
                <h1>Welcome to Messager</h1>
                <p class="welcome-text">Connect with your friends and start chatting.</p>
                <div class="illustration">
                    <div class="fill">
                        <div class="speech-bubble" style="top: 20px; left: 20px;">
                            "Hello! Ready to chat?"
                        </div>
                        <div class="speech-bubble" style="top: 70px; right: 20px;">
                            "Let's connect!"
                        </div>
                    </div>
                </div>
                <img src="<?=IMAGE?>/message-gif.gif" alt="message-gif" class="chat-gif">
            </div>
            <div class="message received">
                <div class="text">
                    Hey There?
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message received">
                <div class="text">
                    How are you
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message sent">
                <div class="text">
                    How are you
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message sent">
                <div class="text">
                    How are you
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message sent">
                <div class="text">
                    How are you
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message sent">
                <div class="text">
                    <img src="<?=IMAGE?>/dashboard-background.jpeg" alt="image"
                        style="border: 2px solid white; border-radius: 10px; width: 400px; height: auto">
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message received">
                <div class="text">
                    Hey There?
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div class="message received">
                <div class="text">
                    How are you
                    <div class="time">
                        10:00 am
                    </div>
                </div>
            </div>
            <div id="scroll-anchor"></div>
        </div>
        <div class="input-bar" id="input-bar">
            <button id="paperclip-btn" style="margin-right: 10px;"><i class="fa fa-paperclip"></i></button>
            <input placeholder="Enter message" type="text" id="message-value"/>
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
</body>

</html>