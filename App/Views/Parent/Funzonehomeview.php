<!DOCTYPE html>
<html>

<head>
    <title>
        Funzone
    </title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?=CSS?>/Parent/funzone1.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/funzonehome.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Header.css?v=<?= time() ?>">
    <script src="<?=JS?>/Parent/Setting.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/Parental-lock.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/Select-child.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/Select-type.js?v=<?= time() ?>"></script>
    <!-- <script src="../JS/Load.js"></script> -->
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
    <!-- navigation for funzone -->
    <!-- <div class="sidebar" style="background:white;">
        <a href="<?ROOT?>/ReParent/Home">
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
        <button onclick="location.href='<?=ROOT?>/Parent/funzoneTasks';">Tasks</button>
        <button onclick="location.href='<?=ROOT?>/Parent/funzoneHistory';">History</button>
        <div class="bottom-text">
            <a href="<?=ROOT?>/ReParent/Home" class="nav-link">
                <i class="fas fa-home"></i>
                <p class="Welcome">Welcome to Funzone</p>
            </a>
        </div>
    </div> -->
    <div class="main-content" id="main-content" style=" background:linear-gradient(to bottom right, #f7f7f7, #eaeaea)">
        <!-- Header -->
        <div class="header">
            <div class="nav-buttons">
                <div class="circle" onclick="window.location.href='<?=ROOT?>/Parent/funzoneHistory'">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="circle" onclick="window.location.href='<?=ROOT?>/Parent/funzoneWhishlist'">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <h2>Home</h2>
            <div class="search-bar" style="margin-left: -600px; margin-right: 200px; margin-top:0px;">
                <input type="text" placeholder="Search">
            </div>
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
        <div class="header2">
            <img src="<?=IMAGE?>/funzone-logo.png" style="width: 40px; height: 40px; margin-left: 20px;">
            <p style="color: white; font-size: 17px;">Funzone </p>
            <a href="<?=ROOT?>/Parent/funzonehome" class="hover-effect select" style="margin-left: 170px;">Home</a>
            <a href="<?=ROOT?>/Parent/funzonewhishlist" class="hover-effect">Whishlist</a>
            <a href="<?=ROOT?>/Parent/funzonetasks" class="hover-effect">Task</a>
            <a href="<?=ROOT?>/Parent/funzonehistory" class="hover-effect">History</a>
            <select style="margin-left: 330px; width: 200px; padding: 5px; border-radius: 10px;">
                <option> Videos </option>
                <option> Books </option>
                <option> Images </option>
                <option> Songs </option>
            </select>
        </div>
        <div class="contents" id="contents" style="margin-top: -100px !important;">
            <div class="day">
                <h3> Trending Now </h3>
            </div>
            <div class="grid" id="grid">
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/video'">
                    <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Over It</h3>
                </div>
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/youtube'">
                    <img alt="Leo Season" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Leo Season </h3>
                </div>
                <div class="item">
                    <img alt="Amalia(Deluxe Version)" src="<?=IMAGE?>/funzone-3.png" />
                    <h3>Amalia(Deluxe Version)</h3>
                </div>
                <div class="item">
                    <img alt="Fever" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Fever</h3>
                </div>
                <div class="item">
                    <img alt="Certified Lover Boy" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Certified Lover Boy</h3>
                </div>
                <div class="item">
                    <img alt="Dawn FM" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Dawn FM</h3>
                </div>
                <div class="item">
                    <img alt="Meet The Woo" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Meet The Woo</h3>
                </div>
                <div class="item">
                    <img alt="Queen" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Queen</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Plain Jane REMIX (feat. Nicki Minaj) - Single" height="150"
                        src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Plain Jane</h3>
                </div>
            </div>
            <div class="day" style="margin-top: 20px;">
                <h3> Watch It Again </h3>
            </div>
            <div class="grid" id="grid">
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/video'">
                    <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Over It</h3>
                </div>
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/youtube'">
                    <img alt="Leo Season" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Leo Season </h3>
                </div>
                <div class="item">
                    <img alt="Amalia(Deluxe Version)" src="<?=IMAGE?>/funzone-3.png" />
                    <h3>Amalia(Deluxe Version)</h3>
                </div>
                <div class="item">
                    <img alt="Fever" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Fever</h3>
                </div>
                <div class="item">
                    <img alt="Certified Lover Boy" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Certified Lover Boy</h3>
                </div>
                <div class="item">
                    <img alt="Dawn FM" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Dawn FM</h3>
                </div>
                <div class="item">
                    <img alt="Meet The Woo" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Meet The Woo</h3>
                </div>
                <div class="item">
                    <img alt="Queen" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Queen</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Plain Jane REMIX (feat. Nicki Minaj) - Single" height="150"
                        src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Plain Jane</h3>
                </div>
            </div>
            <div class="day" style="margin-top: 20px;">
                <h3> Popular </h3>
            </div>
            <div class="grid" id="grid">
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/video'">
                    <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Over It</h3>
                </div>
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/youtube'">
                    <img alt="Leo Season" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Leo Season </h3>
                </div>
                <div class="item">
                    <img alt="Amalia(Deluxe Version)" src="<?=IMAGE?>/funzone-3.png" />
                    <h3>Amalia(Deluxe Version)</h3>
                </div>
                <div class="item">
                    <img alt="Fever" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Fever</h3>
                </div>
                <div class="item">
                    <img alt="Certified Lover Boy" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Certified Lover Boy</h3>
                </div>
                <div class="item">
                    <img alt="Dawn FM" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Dawn FM</h3>
                </div>
                <div class="item">
                    <img alt="Meet The Woo" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Meet The Woo</h3>
                </div>
                <div class="item">
                    <img alt="Queen" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Queen</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Plain Jane REMIX (feat. Nicki Minaj) - Single" height="150"
                        src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Plain Jane</h3>
                </div>
            </div>
            <div class="day" style="margin-top: 20px;">
                <h3> Recomended </h3>
            </div>
            <div class="grid" id="grid" style="margin-bottom: 20px;">
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/video'">
                    <img alt="Over It" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Over It</h3>
                </div>
                <div class="item" onclick="window.location.href='<?=ROOT?>/Parent/youtube'">
                    <img alt="Leo Season" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Leo Season </h3>
                </div>
                <div class="item">
                    <img alt="Amalia(Deluxe Version)" src="<?=IMAGE?>/funzone-3.png" />
                    <h3>Amalia(Deluxe Version)</h3>
                </div>
                <div class="item">
                    <img alt="Fever" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Fever</h3>
                </div>
                <div class="item">
                    <img alt="Certified Lover Boy" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Certified Lover Boy</h3>
                </div>
                <div class="item">
                    <img alt="Dawn FM" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Dawn FM</h3>
                </div>
                <div class="item">
                    <img alt="Meet The Woo" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Meet The Woo</h3>
                </div>
                <div class="item">
                    <img alt="Queen" height="150" src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Queen</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-1.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-2.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Issa" height="150" src="<?=IMAGE?>/funzone-3.png" width="150" />
                    <h3>Issa</h3>
                </div>
                <div class="item">
                    <img alt="Plain Jane REMIX (feat. Nicki Minaj) - Single" height="150"
                        src="<?=IMAGE?>/funzone-4.png" width="150" />
                    <h3>Plain Jane</h3>
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
    </div>
</body>

</html>