<!DOCTYPE html>
<html>

<head>
    <title>
        Kiddo Ville
    </title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/ReChild/funzonewhishlist.css">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/funzone.css">
    <script src="<?=JS?>/ReChild/Setting.js"></script>
    <script src="<?=JS?>/ReChild/Parental-lock.js"></script>
    <script src="<?=JS?>/ReChild/Select-child.js"></script>
    <script src="<?=JS?>/ReChild/Select-type.js"></script>
</head>

<body>
    <!-- minimized sidebar -->
    <div class="sidebarhome minimized" id="sidebar1">
        <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
        <h2 style="margin-top: -15px;">Dashboard</h2>
        <ul>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/Home">
                    <i class="fas fa-home" style="font-size: 20px; color: black; margin-left: -2px;"></i> <span>Home</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/Attendance">
                    <i class="fas fa-user-check"></i> <span>Attendance</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/history">
                    <i class="fas fa-history"></i> <span>History</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/report">
                    <i class="fa fa-user-shield" aria-hidden="true"></i> <span>Report</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/reservation">
                    <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/meal">
                    <i class="fas fa-utensils"></i> <span>Meal plan</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/event">
                    <i class="fas fa-calendar-alt"></i> <span>Event</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/package">
                    <i class="fas fa-box"></i> <span>Package</span>
                </a>
            </li>
            <li class="selected" style="margin-top: 40px;">
                <a href="<?=ROOT?>/ReChild/funzonehome">
                    <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                </a>
            </li>
            <li class="hover-effect unselected">
                <a href="<?=ROOT?>/ReChild/payment">
                    <i class="fas fa-credit-card"></i> <span>Payments</span>
                </a>
            </li>
        </ul>
        <hr style="margin-top: 40px;">
        <div class="help">
            <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
        </div>
    </div>
    <!-- sidebar funzone navigation -->
    <div class="sidebar" style="background: url('<?=IMAGE?>/funzone-side.png') no-repeat center center">
        <a href="<?=ROOT?>/ReChild/Home">
            <img alt="Kiddo Ville Logo" height="50" src="<?=IMAGE?>/logo_light-remove.png" width="50" />
        </a>
        <h1>Kiddo Ville</h1>
        <input placeholder="Search" type="text" /><i class="fas fa-search"></i>
        <button onclick="location.href='<?=ROOT?>/ReChild/Funzonehome';">Home</button>
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
        <button onclick="location.href='<?=ROOT?>/ReChild/Funzonewhishlist';">Wishlist</button>
        <button onclick="location.href='<?=ROOT?>/ReChild/FunzoneTasks';">Tasks</button>
        <button onclick="location.href='<?=ROOT?>/ReChild/FunzoneHistory';">History</button>
        <div class="bottom-text">
            <a href="<?=ROOT?>/ReChild/Home" class="nav-link">
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
            <h2>WhishList</h2>
            <!-- settings -->
            <i class="fas fa-cog settings"></i>
            <div class="profile-card" id="profileCard">
                <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                    style="width: 24px; height: 24px; fill:#233E8D !important;" class="back" id="closeProfileCard">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png"
                    width="100" class="profile" />
                <h2 class="child-name">Thilina Perera</h2>
                <p>Student    RS0110657</p>
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
        <div class="grid">
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-play"
                            style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
                </div>
                <div class="reminder-toggle">
                    <span class="reminder-text">Set Reminder</span>
                    <label class="switch-reminder">
                        <input type="checkbox" id="reminder">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="item">
                <div class="icon-container">
                    <button class="icon-btn watch-btn"><i class="fas fa-clock"></i></button>
                    <button class="icon-btn remove-btn"><i class="fas fa-trash"></i></button>
                </div>
                <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                <h3>Over It</h3>
                <p> Small description</p>
                <p class="format"> Format: mp4</p>
                <div class="date-time">
                    <div class="reminder-date">
                        <i class="fas fa-calendar-alt"></i> <!-- Calendar Icon -->
                        <span class="date-text">Sep 18, 2024</span>
                    </div>
                    <div class="reminder-time">
                        <i class="fas fa-clock"></i> <!-- Clock Icon -->
                        <span class="time-text">3:30 PM</span>
                    </div>
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
        <!-- navigation for home page -->
        <a href="<?=ROOT?>/ReChild/Home" class="chatbox">
            <i class="fa fa-home" style="margin-top: 1px; text-decoration: none;"></i>
        </a>
    </div>
</body>

</html>