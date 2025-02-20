<!DOCTYPE html>
<html>

<head>
    <title>
        Funzone
    </title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/ReParent/funzonetasks.css">
    <link rel="stylesheet" href="<?=CSS?>/ReParent/funzone1.css">
    <script src="<?=JS?>/ReParent/Setting.js"></script>
    <script src="<?=JS?>/ReParent/Parental-lock.js"></script>
    <script src="<?=JS?>/ReParent/Select-child.js"></script>
    <script src="<?=JS?>/ReParent/Select-type.js"></script>
</head>

<body>
    <!-- minimzed sidebar -->
    <div class="sidebarhome minimized" id="sidebar1">
        <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
        <h2 style="margin-top: -15px;">Dashboard</h2>
        <ul>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/Home">
                    <i class="fas fa-home" style="font-size: 20px; color: black; margin-left: -2px;"></i> <span>Home</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/Attendance">
                    <i class="fas fa-user-check"></i> <span>Attendance</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/history">
                    <i class="fas fa-history"></i> <span>History</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/report">
                    <i class="fa fa-user-shield" aria-hidden="true"></i> <span>Report</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/reservation">
                    <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/meal">
                    <i class="fas fa-utensils"></i> <span>Meal plan</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/event">
                    <i class="fas fa-calendar-alt"></i> <span>Event</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/package">
                    <i class="fas fa-box"></i> <span>Package</span>
                </a>
            </li>
            <li class="selected" style="margin-top: 40px;">
                <a href="<?=ROOT?>/ReParent/funzonehome">
                    <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReParent/payment">
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
        <a href="<?=ROOT?>/ReParent/Home"></a>
            <img alt="Kiddo Ville Logo" height="50" src="<?=IMAGE?>/logo_light-remove.png" width="50" />
        </a>
        <h1>Kiddo Ville</h1>
        <input placeholder="Search" type="text" /><i class="fas fa-search"></i>
        <button onclick="location.href='<?=ROOT?>/ReParent/funzonehome';">Home</button>
        <div class="custom-select-container" tabindex="0">
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
            <a href="<?=ROOT?>/ReParent/funzoneHome" class="nav-link">
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
                <div class="circle">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <h2>
                Tasks
            </h2>
            <!-- settings -->
            <i class="fas fa-cog settings"></i>
            <div class="profile-card" id="profileCard">
                <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                    style="width: 24px; height: 24px; fill:#233E8D !important;" class="back" id="closeProfileCard">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png"
                    width="100" class="profile" />
                <h2 class="child-name">Thilina Perera</h2>
                <p>Student    RS0110657</p>
                <button class="logout-button"  onclick="window.location.href = '<?=ROOT?>/Main/Home' ">Logout</button>
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
        <div class="grid">
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-play"
                            style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                </div>
                <img src="<?=IMAGE?>/funzone-1.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-2.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-3.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-4.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-1.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-2.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-3.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-4.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-1.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-2.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-3.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?=IMAGE?>/funzone-4.png" alt="Item Image">
                <div class="content">
                    <h3>Item Title</h3>
                    <p>Item description goes here. It can be a bit longer and will be aligned to the left of the image.
                    </p>
                    <div class="date-time">
                        <span class="reminder-date">Deadline<i class="fa fa-calendar"
                                style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                        <span class="reminder-date" style="margin-top: 3px;">Assigned By<i class="fa fa-user"
                                style="margin-left: 20px !important;;"></i>Abdulla Aurad</span>
                        <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                style="margin-left: 68px !important;;"></i>Abdulla Aurad</span>
                    </div>
                    <div class="reminder-toggle">
                        <p> Hi </p>
                        <span class="reminder-text">Set Reminder</span>
                        <label class="switch-reminder">
                            <input type="checkbox" id="reminder">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navigation to home page -->
    <a href="<?=ROOT?>/ReParent/Home" class="chatbox">
        <i class="fa fa-home" style="margin-top: 1px; text-decoration: none;"></i>
    </a>
    </div>
</body>

</html>