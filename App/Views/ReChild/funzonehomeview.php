<!DOCTYPE html>
<html>

<head>
    <title>
        Funzone
    </title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/ReChild/funzonehome.css">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/funzone.css">
    <script src="<?=JS?>/ReChild/Setting.js"></script>
    <script src="<?=JS?>/ReChild/Parental-lock.js"></script>
    <script src="<?=JS?>/ReChild/Select-child.js"></script>
    <script src="<?=JS?>/ReChild/Select-type.js"></script>
    <script src="<?=JS?>/ReChild/Load.js"></script>
</head>

<body>
    <!-- minimized sidebar navigate pages -->
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
                <a href="<?=ROOT?>/ReChildpayment">
                    <i class="fas fa-credit-card"></i> <span>Payments</span>
                </a>
            </li>
        </ul>
        <hr style="margin-top: 40px;">
        <div class="help">
            <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
        </div>
    </div>
    <!-- to navigate funzone -->
    <div class="sidebar" style="background: url('<?=IMAGE?>/funzone-side.png') no-repeat center center">
        <a href="<?=ROOT?>/ReChild/Home">
            <img alt="Kiddo Ville Logo" height="50" src="<?=IMAGE?>/logo_light-remove.png" width="50" />
        </a>
        <h1>Kiddo Ville</h1>
        <input placeholder="Search" type="text" /><i class="fas fa-search"></i>
        <button onclick="location.href='<?=ROOT?>/ReChild/funzonehome';">Home</button>
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
        <button onclick="location.href='<?=ROOT?>/ReChild/funzonewhishlist';">Wishlist</button>
        <button onclick="location.href='<?=ROOT?>/ReChild/funzoneTasks';">Tasks</button>
        <button onclick="location.href='<?=ROOT?>/ReChild/funzoneHistory';">History</button>
        <div class="bottom-text">
            <a href="<?=ROOT?>/ReChild/Home" class="nav-link">
                <i class="fas fa-home"></i>
                <p class="Welcome">Welcome to Funzone</p>
            </a>
        </div>
    </div>
    <div class="main-content" id="main-content" style="background: url('<?=IMAGE?>/funzone-backgound.png');">
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
            <h2>Home</h2>
            <!-- settings -->
            <i class="fas fa-cog settings"></i>
            <div class="profile-card" id="profileCard" style="margin-top: 200px;">
                <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                    style="width: 24px; height: 24px; fill:#233E8D !important;" class="back" id="closeProfileCard">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png"
                    width="100" class="profile" />
                <h2 class="child-name">Thilina Perera</h2>
                <p>Student    RS0110657</p>
                <button class="logout-button"
                    onclick="window.location.href = '<?=ROOT?>/Main/Home' ">Logout</button>
                <div class="lock" id="lockcon">
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
        <div class="contents" id="contents">
            <div class="grid" id="grid">
                <div class="item" onclick="window.location.href='<?=ROOT?>/ReChild/video'">
                    <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Over It</h3>
                    <p> Small description</p>
                </div>
                <div class="item" onclick="window.location.href='<?=ROOT?>/ReChild/youtube'">
                    <img alt="Leo Season" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Leo Season </h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Amalia(Deluxe Version)" src="<?=IMAGE?>/funzone-3.png" />
                    <h3>Amalia(Deluxe Version)</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Fever" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Fever</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Certified Lover Boy" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Certified Lover Boy</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Dawn FM" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Dawn FM</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Meet The Woo" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Meet The Woo</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Queen" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Queen</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Issa</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Issa</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Issa</h3>
                    <p> Small description</p>
                </div>
                <div class="item">
                    <img alt="Plain Jane REMIX (feat. Nicki Minaj) - Single" height="150"
                        src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Plain Jane</h3>
                    <p> Small description</p>
                </div>
            </div>
            <!-- loading animation -->
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
        <!-- Home navigation -->
        <a href="<?=ROOT?>/ReChild/Home" class="chatbox">
            <i class="fas fa-home" style="margin-top: 1px; text-decoration: none;"></i>
        </a>
    </div>
</body>

</html>