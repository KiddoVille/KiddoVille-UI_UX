<!DOCTYPE html>
<html>

<head>
    <title>
        Kiddo Ville
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/Parent/video.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Funzone1.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/videomain.css?v=<?= time() ?>">
    <script src="<?=JS?>/Parent/Setting.js"></script>
    <script src="<?=JS?>/Parent/Parental-lock.js"></script>
    <script src="<?=JS?>/Parent/Select-child.js"></script>
    <script src="<?=JS?>/Parent/Select-type.js"></script>
    <script src="<?=JS?>/Parent/Comment.js"></script>
</head>

<body>
    <!-- minimized sidebar -->
    <div class="sidebarhome minimized" id="sidebar1">
        <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
        <h2 style="margin-top: -15px;">Dashboard</h2>
        <ul>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/Home">
                    <i class="fas fa-home" style="font-size: 20px; color: black; margin-left: -2px;"></i> <span>Home</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/Attendance">
                    <i class="fas fa-user-check"></i> <span>Attendance</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/history">
                    <i class="fas fa-history"></i> <span>History</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/report">
                    <i class="fa fa-user-shield" aria-hidden="true"></i> <span>Report</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/reservation">
                    <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/meal">
                    <i class="fas fa-utensils"></i> <span>Meal plan</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/event">
                    <i class="fas fa-calendar-alt"></i> <span>Event</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/package">
                    <i class="fas fa-box"></i> <span>Package</span>
                </a>
            </li>
            <li class="selected" style="margin-top: 40px;">
                <a href="<?=ROOT?>/Parent/funzonehome">
                    <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/Parent/payment">
                    <i class="fas fa-credit-card"></i> <span>Payments</span>
                </a>
            </li>
        </ul>
        <hr style="margin-top: 40px;">
        <div class="help">
            <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
        </div>
    </div>
    <!-- navigation -->
    <div class="sidebar" style="background: url('<?=IMAGE?>/funzone-side.png') no-repeat center center">
        <a href="<?=ROOT?>/ReParent/Home"> <!-- Add href here -->
            <img alt="Kiddo Ville Logo" height="50" src="<?=IMAGE?>/logo_light-remove.png" width="50" />
        </a>
        <h1>Kiddo Ville</h1>
        <input placeholder="Search" type="text" /><i class="fas fa-search" style="margin-right: 50px;"></i>
        <button onclick="location.href='<?=ROOT?>/ReParent/funzonehome';">Home</button>
        <div class="custom-select-container" tabindex="0" style="width: 160px;">
            <div class="custom-select-trigger">
                Type <i class="fa fa-chevron-down"></i>
            </div>
            <div class="custom-options-container">
                <div class="custom-option"> Recent </div>
                <div class="custom-option"> Rhymes </div>
                <div class="custom-option"> book </div>
                <div class="custom-option"> Games </div>
                <div class="custom-option"> Cartoon </div>
                <div class="custom-option"> Crafts </div>
                <div class="custom-option"> Lessons </div>
            </div>
        </div>
        <button onclick="location.href='<?=ROOT?>/ReParent/funzonewhishlist';">Wishlist</button>
        <button onclick="location.href='<?=ROOT?>/ReParent/funzoneTasks';">Tasks</button>
        <button onclick="location.href='<?=ROOT?>/ReParent/funzoneHistory';">History</button>
        <div class="bottom-text">
            <a href="<?=ROOT?>/ReParent/Home" class="nav-link">
                <i class="fas fa-home"></i>
                <p class="Welcome">Welcome to Funzone</p>
            </a>
        </div>
    </div>
    <div class="main-content" style="background: url('<?=IMAGE?>/funzone-backgound.png');">
        <!-- Header -->
        <div class="header">
            <div class="nav-buttons">
                <div class="circle">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <h2>video Title</h2>
            <i class="fas fa-cog settings"></i>
            <div class="profile-card" id="profileCard">
                <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                    style="width: 24px; height: 24px; fill:#233E8D !important;" class="back" id="closeProfileCard">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png"
                    width="100" class="profile" />
                <h2 class="child-name">Thilina Perera</h2>
                <p>Student    RS0110657</p>
                <div class="custom-child-select-container">
                    <div class="custom-child-select-trigger">
                        Select child <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="custom-child-options-container" style="background-color: #1d61c4">
                        <div class="custom-option" data-value="1">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Abdulla">
                            <span>Abdulla</span>
                        </div>
                        <div class="custom-option" data-value="2">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Abdulla">
                            <span>Abdulla</span>
                        </div>
                        <div class="custom-option" data-value="3">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Abdulla">
                            <span>Abdulla</span>
                        </div>
                        <div class="custom-option" data-value="4">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Abdulla">
                            <span>Abdulla</span>
                        </div>
                        <div class="custom-option" data-value="5">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Abdulla">
                            <span>Abdulla</span>
                        </div>
                    </div>
                </div>
                <button class="logout-button">Logout</button>
                <div class="lock">
                    <p class="lock-p"> Parental lock</p>
                    <div class="switch">
                        <input type="checkbox" id="toggle">
                        <label for="toggle">
                            <div class="toggle-icon">
                                <i class="fa fa-unlock"></i>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <!-- video and controls -->
        <div class="grid">
            <div class="video-container">
                <div class="video-content">
                    <div class="video-player">
                        <iframe id="video" width="100%" height="100%"
                            src="https://www.youtube.com/embed/sHO6KMtBJkg?si=0T1Sr1Lay5aDVRNf" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="video-actions">
                        <div class="action-text">
                            <i class="fas fa-thumbs-up" id="thumbsUpButton"></i><span>1.4k likes</span>
                        </div>
                        <div class="action-text">
                            <i class="fas fa-heart" id="heartButton"></i><span>Add to Wishlist</span>
                        </div>
                        <div class="action-text">
                            <i class="fas fa-comment-dots" id="commentButton"></i><span>Add Comment</span>
                        </div>
                    </div>

                    <div id="commentSection" style="display: none;">
                        <textarea id="commentInput" rows="3" placeholder="Add a comment..."></textarea>
                        <button id="submitCommentButton">Submit</button>
                        <button id="cancelCommentButton">Cancel</button>
                    </div>

                    <div class="video-details">
                        <div class="title">Video Title</div>
                        <div class="description">Video description goes here...</div>
                    </div>

                    <div class="comments">
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                            <p class="Date-comment"> Date:18/09/2024</p>
                            <p class="Date-comment"> Time:10:00 pm</p>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                        <div class="comment">
                            <img src="<?=IMAGE?>/face.jpeg" alt="face icon"
                                style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                            <div class="text">Comment text goes here...</div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar for Related Videos -->
                <div class="related-sidebar">
                    <div class="related-video">
                        <div class="thumbnail">
                            <i class="fas fa-play play-button"></i>
                        </div>
                        <div class="details">
                            <div class="title">Related Video Title</div>
                            <div class="description">Description...</div>
                        </div>
                    </div>

                    <div class="related-video">
                        <div class="thumbnail">
                            <i class="fas fa-play play-button"></i>
                        </div>
                        <div class="details">
                            <div class="title">Related Video Title</div>
                            <div class="description">Description...</div>
                        </div>
                    </div>

                    <div class="related-video">
                        <div class="thumbnail">
                            <i class="fas fa-play play-button"></i>
                        </div>
                        <div class="details">
                            <div class="title">Related Video Title</div>
                            <div class="description">Description...</div>
                        </div>
                    </div>

                    <div class="related-video">
                        <div class="thumbnail">
                            <i class="fas fa-play play-button"></i>
                        </div>
                        <div class="details">
                            <div class="title">Related Video Title</div>
                            <div class="description">Description...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- navigation to home -->
        <a href="<?=IMAGE?>/Home" class="chatbox">
            <i class="fa fa-home" style="margin-top: 1px; text-decoration: none;"></i>
        </a>
    </div>
</body>

</html>