<html>

<head>
    <title>Package</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/package.css">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/Main.css">
    <script src="<?=JS?>/ReChild/Profile.js"></script>
    <script src="<?=JS?>/ReChild/MessageDropdown.js"></script>
    <script src="<?=JS?>/ReChild/Navbar.js"></script>
    <script src="<?=JS?>/ReChild/Price.js"></script>
    <script src="<?=JS?>/ReChild/Taskbar.js"></script>
    <script src="<?=JS?>/ReChild/package.js"></script>
</head>

<body style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <!-- minimized sidebar -->
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="hover-effect">
                    <a href="<?=ROOT?>/ReChild/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
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
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/ReChild/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
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
        <!-- navigation for home -->
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first" onclick="window.location.href = '../../Registered-Parent/Package/Package.html'">
                            <img src="<?=IMAGE?>/family.jpg" style="width: 60px; height:60px; border-radius: 30px;">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
                        Explore your children's activities and progress!
                    </p>
                    <ul>
                        <li class="hover-effect first select-child">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" id="main-content">
            <div class="header">
                <i class="fa fa-bars" id="minimize-btn"
                    style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
                <div class="name">
                    <h1>Hey Thilina</h1>
                    <p>Let’s do some productive activities today</p>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                    <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
                </div>
                <!-- notifications -->
                <div class="bell-con" style="cursor: pointer;" id="bell-container">
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
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>
            <!-- to view package -->
            <div class="modal" id="PackageModal">
                <div class="View-Package">
                    <div class="top-con">
                        <div class="back-con" id="back-arrow">
                            <i class="fas fa-chevron-left" id="backformeeting"></i>
                        </div>
                    </div>
                    <h1>View Package</h1>
                    <label for="package-name">Package name</label>
                    <input id="package-name" readonly="" type="text" value="Basic care plan" />
                    <label for="included-services">Included services</label>
                    <div class="services" id="included-services">
                        Standard hours of care.
                        <br />
                        Access to all basic activities and educational programs.
                        <br />
                        Healthy snacks and meals provided during the day.
                    </div>
                    <label for="price">Price</label>
                    <div class="price-container">
                        <input id="price" readonly="" type="text" value="80,000" />
                        <span>RS</span>
                    </div>
                    <img src="<?=IMAGE?>/package-back.jpg" alt="packages" class="package-img">
                </div>
            </div>
            <div class="chatbox">
                <a href="<?=ROOT?>/ReChild/Message">
                    <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                        style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                </a>
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </div>
            <div class="fill" style="background-color: white;">
                <h1 style="color: black"> Packages</h1>
                <div class="filters" style="text-align: left;">
                    <label for="minPrice">Min Price:</label>
                    <input type="text" id="minPrice" class="price" maxlength="7" placeholder="Min Price"
                        style="width: 100px;">
                    <label for="maxPrice">Max Price:</label>
                    <input type="text" id="maxPrice" class="price" maxlength="7" placeholder="Max Price"
                        style="width: 100px;">
                </div>
                <div class="packages">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                </div>
                <div class="packages" style="margin-top: -10px;">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#">
                        &lt;
                    </a>
                    <a class="active" href="#">
                        1
                    </a>
                    <a href="#">
                        2
                    </a>
                    <a href="#">
                        3
                    </a>
                    <a href="#">
                        ...
                    </a>
                    <a href="#">
                        &gt;
                    </a>
                </div>
            </div>
            <!-- messager navigation -->
            <a href="<?=ROOT?>/ReChild/Message" class="chatbox">
                <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
            <!-- tasks button -->
            <div class="tasks" id="taskbtn">
                <i class="fas fa-chevron-left" id="taskicon"></i>
            </div>
        </div>
        <!-- profile card -->
        <div class="profile-card" id="profileCard">
            <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100"
                class="profile" />
            <h2>
                Thilina Perera
            </h2>
            <p>
                Student    RS0110657
            </p>
            <button class="profile-button" onclick="window.location.href ='<?=ROOT?>/ReChild/ChildProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReChild/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReChild/GuardianProfile'">
                Guardian profile
            </button>
            <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/Main/Home'">
                LogOut
            </button>
        </div>
        <!-- task right sidebar -->
        <div class="task-container" id="tasknavbar">
            <h1 style="margin-top: 20px;"> Quick Tasks Hub </h1>
            <div class="card">
                <h2>Calendar</h2>
                <div class="calendar-header">
                    <a href="#">&lt; October</a>
                    <h3>November 2024</h3>
                    <a href="#">December &gt;</a>
                </div>
                <table class="calendar-table">
                    <thead>
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><span class="today">2</span></td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <h2>Upcoming Tasks</h2>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">Math Homework</p>
                        <span class="task-deadline">Due: Nov 5, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">History Essay</p>
                        <span class="task-deadline">Due: Nov 10, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">Science Project</p>
                        <span class="task-deadline">Due: Nov 15, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
            <div class="card">
                <h2>Main menu</h2>
                <a href="#" class="main-menu-item">
                    <i class="fas fa-bullhorn icon-announcements"></i>
                    <span>Site announcements</span>
                </a>
                <a href="#" class="main-menu-item">
                    <i class="fas fa-globe icon-library"></i>
                    <span>KIDDOVILLE Funzone</span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>