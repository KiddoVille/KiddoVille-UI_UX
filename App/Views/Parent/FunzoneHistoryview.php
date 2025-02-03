<!DOCTYPE html>
<html>

<head>
    <title>
        Kiddo Ville
    </title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Parent/funzonehistory.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/funzone1.css?v=<?= time() ?>">
    <script src="<?=JS?>/parent/Setting.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/parent/Parental-lock.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/parent/Select-child.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/parent/Select-type.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/parent/Load.js?v=<?= time() ?>"></script>
</head>

<body>
    <!-- minimized sidebar -->
    <div class="sidebarhome" id="sidebar1">
        <div class="logo-div" style="display: flex; flex-direction: row; align-items: center; margin-left: 20px;">
            <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo" style="width: 60px; height: 60px; margin-left: 0px; margin-bottom: 0px;"> </img>
            <h2 id="sidebar-kiddo" style="font-size: 1.5em; margin-left: 10px;">KIDDO VILLE </h2>
        </div>
        <ul style="margin-top: -20px;">
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/Home">
                        <i class="fas fa-house"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected" style="margin-top: 40px;">
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
                    <a href="<?=ROOT?>/Parent/package">
                        <i class="fas fa-credit-card"></i> <span>Payments</span>
                    </a>
                </li>
            </ul>
        <hr style="margin-top: 40px;">
        <div class="help">
            <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
        </div>
    </div>
    <!-- mavigation for funzone -->
    <!-- <div class="sidebar" style="background:white">
        <a href="../../Home/Home.html">
            <img alt="Kiddo Ville Logo" height="50" src="<?=IMAGE?>/logo_light-remove.png" width="50" />
        </a>
        <h1>Kiddo Ville</h1>
        <input placeholder="Search" type="text" /><i class="fas fa-search"></i>
        <button onclick="location.href='<?=ROOT?>/Parent/funzonehome';">Home</button>
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
        <button onclick="location.href='<?=ROOT?>/Parent/funzonewhishlist';">Wishlist</button>
        <button onclick="location.href='<?=ROOT?>/Parent/funzonetasks';">Tasks</button>
        <button onclick="location.href='<?=ROOT?>/Parent/funzoneHistory';">History</button>
        <div class="bottom-text">
            <a href="<?=ROOT?>/ReParent/Home" class="nav-link">
                <i class="fas fa-home"></i>
                <p class="Welcome">Welcome to Funzone</p>
            </a>
        </div>
    </div> -->
    <div class="main-content" style="background:linear-gradient(to bottom right, #f7f7f7,#eaeaea)">
        <!-- Header -->
        <div class="header" style="z-index: 100 !important;">
            <div class="nav-buttons">
                <div class="circle">
                    <i class="fas fa-chevron-left" onclick="window.location.href='<?=ROOT?>/Child/funzonetasks'"></i>
                </div>
                <div class="circle">
                    <i class="fas fa-chevron-right" onclick="window.location.href='<?=ROOT?>/Child/funzoneHome'"></i>
                </div>
            </div>
            <h2>
                History
            </h2>
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
        <div class="header2">
            <img src="<?=IMAGE?>/funzone-logo.png" style="width: 40px; height: 40px; margin-left: 20px;">
            <p style="color: white; font-size: 17px;">Funzone </p>
            <a href="<?=ROOT?>/Child/funzonehome" class="hover-effect" style="margin-left: 170px;">Home</a>
            <a href="<?=ROOT?>/Child/funzonewhishlist" class="hover-effect">Whishlist</a>
            <a href="<?=ROOT?>/Child/funzonetasks" class="hover-effect">Task</a>
            <a href="<?=ROOT?>/Child/funzonehistory" class="hover-effect select">History</a>
            <select style="margin-left: 330px; width: 200px; padding: 5px; border-radius: 10px;">
                <option> Videos </option>
                <option> Books </option>
                <option> Images </option>
                <option> Songs </option>
            </select>
        </div>
        <div class="contents" id="contents" style="margin-top: -880px !important; z-index:1 !important ;">
            <div class="grid" id="grid">
                <div class="filter-section" style="margin-top: 770px; z-index:1 !important ;">
                    <label for="filter-date">Filter by date: </label>
                    <input type="date" id="filter-date">
                    <button id="filter-button">Filter</button>
                </div>
                <!-- <p style="margin-top: 700px;"> Hi </p> -->
                <div class="day" style="margin-top: -15px;">
                    <h3> Today </h3>
                </div>
                <div class="items-day">
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-1.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-2.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day">
                    <h3> Yesterday </h3>
                </div>
                <div class="items-day">
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-3.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-4.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day">
                    <h3> 16/09/2024 </h3>
                </div>
                <div class="items-day">
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-1.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-2.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-3.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-container">
                            <button class="icon-btn watch-btn"><i class="fas fa-play"
                                    style="margin-top: 1px; font-size: 17px; margin-left: 3px;"></i></button>
                        </div>
                        <img src="<?=IMAGE?>/funzone-4.png" alt="Item Image">
                        <div class="content">
                            <h3>Item Title</h3>
                            <p>Item description goes here. It can be a bit longer and will be aligned to the left of the
                                image.</p>
                            <div class="date-time">
                                <span class="reminder-date">Date<i class="fa fa-calendar"
                                        style="margin-left: 43px !important;"></i>Sep 18, 2024</span>
                                <span class="reminder-date" style="margin-top: 3px;">Time<i class="fa fa-user"
                                        style="margin-left: 42px !important;"></i>6:00 pm</span>
                                <span class="reminder-date" style="margin-top: 3px;">Type<i class="fa fa-video"
                                        style="margin-left: 43px !important;"></i>Video</span>
                                <span class="reminder-date" style="margin-top: 3px;">Progress<i class="fa fa-hourglass"
                                        style="margin-left: 18px !important;"></i>43%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loading-area" id="loader">
                <div class="loader">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>