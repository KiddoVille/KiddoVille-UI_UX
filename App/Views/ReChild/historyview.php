<html>

<head>
    <title>History</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/history.css">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/Main.css">
    <script src="<?=JS?>/ReChild/history.js"></script>
    <script src="<?=JS?>/ReChild/Navbar.js"></script>
    <script src="<?=JS?>/ReChild/Pickup.js"></script>
    <script src="<?=JS?>/ReChild/OTP.js"></script>
    <script src="<?=JS?>/ReChild/Taskbar.js"></script>
</head>

<body style="overflow: hidden; background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <!-- mimnized sidebar -->
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/ReChild/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/ReChild/Attendance">
                        <i class="fas fa-user-check"></i> <span>Attendance</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
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
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/ReChild/funzonehome">
                        <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/ReChild/package">
                        <i class="fas fa-credit-card"></i> <span>Payments</span>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <!-- navigation to choose child -->
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first" onclick="window.location.href = '../../Registered-Parent/history/history.html'">
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
        <div class="main-content">
            <!-- Header -->
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
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>
            <div class="stats">
                <div class="stat">
                    <h3><img src="<?=IMAGE?>/attendance.svg" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Days not attended</h3>
                    <p style="margin-bottom: 3px; color: #D3D3D3;">03/04 Days</p>
                    <span style="color: #00FFFF;font-weight: 50;">Unattended days</span>
                </div>
                <div class="stat">
                    <h3><img src="<?=IMAGE?>/sick.svg" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Sick days</h3>
                    <p style="margin-bottom: 3px;color: #D3D3D3;">1 Day</p>
                    <span style="color: #00FFFF;font-weight: 50;">light fever</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?=IMAGE?>/mountain.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Late departure</h3>
                    <p style="margin-bottom: 3px;color: #D3D3D3;">Departure time 8:00 am</p>
                    <span style="color: #00FFFF;font-weight: 50;">Date: 20/09/2024</span>
                </div>
            </div>
            <div class="saperate">
                <!-- Child history table -->
                <div class="child-history">
                    <h1>Child History</h1>
                    <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                    <table>
                        <thead>
                            <tr>
                                <th style="padding: 10px -5px;">Date</th>
                                <th>Arrival time</th>
                                <th>Departure time</th>
                                <th>Pickup person</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>25/03/2025</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Parent</td>
                        </tr>
                        <tr>
                            <td>02/01/2025</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Parent</td>
                        </tr>
                        <tr>
                            <td>20/12/2024</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Guardian</td>
                        </tr>
                        <tr>
                            <td>10/11/2024</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Parent</td>
                        </tr>
                        <tr>
                            <td>13/08/2024</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Parent</td>
                        </tr>
                        <tr>
                            <td>13/08/2024</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Parent</td>
                        </tr>
                        <tr>
                            <td>13/08/2024</td>
                            <td>7:30 A.M</td>
                            <td>4:30 P.M</td>
                            <td>Parent</td>
                        </tr>
                    </table>
                </div>
                <div class="pickup-container">
                    <h1>Schedule pickups</h1>
                    <p>Review and finalize children pickup from the daycare</p>
                    <button class="button" id="openModalBtn">Schedule pickups</button>
                    <div class="details">
                        <p>Date: 12-16, 2025</p>
                        <p>Pickup person: Guardian</p>
                        <p>Departure time: 8:00pm</p>
                    </div>
                    <button class="button" style="width: 189px" id="editModalBtn">Edit</button>
                </div>
            </div>
            <!-- Modal to shedule pickup -->
            <div class="modal" id="pickupModal">
                <div class="pickup-popup">
                    <div class="top-con">
                        <div class="back-con">
                            <i class="fas fa-chevron-left" id="backforpickup"></i>
                        </div>
                        <div class="refresh-con">
                            <i class="fas fa-refresh" id="pickuprefresh"
                                style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                        </div>
                    </div>
                    <h1>Schedule pickup</h1>
                    <form id="pickupForm">
                        <div class="pickup-section">
                            <label for="time">Select Time <span id="red-star" class="red-star"> *</span> </label>
                            <input id="pickuptime" type="time"/>
                        </div>
                        <div class="pickup-section">
                            <label>Select person for pickup</label>
                            <div class="person-section">
                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                <div class="person-info">
                                    <span>Abdulla</span>
                                </div>
                                <div class="add-person"
                                    style="margin-left: 30px; margin-right: 2px; width: 55px; height: 50px">+</div>
                                <div class="person-info">
                                    <span>Add new person</span>
                                </div>
                            </div>
                        </div>
                        <div class="pickup-section">
                            <label for="otp">Confirmation OTP <span id="red-star2" class="red-star"> *</span> </label>
                            <input class="otp" id="pickupotp" type="text" maxlength="6"
                                placeholder="000000" />
                            <small>Enter a number and inform the pickup person</small>
                        </div>
                        <div class="pickup-section checkbox-section">
                            <label>
                                <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> For all
                                children
                            </label>
                            <label>
                                <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> Inform on
                                pickup
                            </label>
                        </div>
                        <div class="terms">
                            <input required type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" />
                            <label>
                                I agree to the
                                <a href="#">Terms of Service</a>
                            </label>
                        </div>
                        <div class="button-popup">
                            <button style="margin-right: 230px;" id="closeModalBtn">Cancel</button>
                            <button>Done</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Edit scheduled pickup modal -->
            <div class="modal" id="editPickupModal">
                <div class="pickup-popup">
                    <div class="top-con">
                        <div class="back-con">
                            <i class="fas fa-chevron-left" id="backforpickupedit"></i>
                        </div>
                        <div class="refresh-con">
                            <i class="fas fa-refresh" id="pickupeditrefresh"
                                style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                        </div>
                    </div>
                    <h1>Edit Scheduled Pickup</h1>
                    <form id="editpickupForm">
                        <div class="pickup-section">
                            <label for="edit-time">Select Time <span id="red-star3" class="red-star hidden"> *</span> </label>
                            <input id="edit-time" type="time" value="20:00" />
                        </div>
                        <div class="pickup-section">
                            <label>Select person for pickup</label>
                            <div class="person-section">
                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                <div class="person-info">
                                    <span>Guardian</span>
                                    <p style="margin-top: 60px; margin-left: -70px; color: #233E8D;">Selected</p>
                                </div>
                                <div class="add-person"
                                    style="margin-left: 30px; margin-right: 2px; width: 55px; height: 50px">+</div>
                                <div class="person-info">
                                    <span>Add new person</span>
                                </div>
                            </div>
                        </div>
                        <div class="pickup-section">
                            <label for="edit-otp">Confirmation OTP <span id="red-star4" class="red-star hidden"> *</span> </label>
                            <input class="otp" id="edit-otp" type="text" maxlength="6"
                                value="000000" />
                            <small>Enter a number and inform the pickup person</small>
                        </div>
                        <div class="pickup-section checkbox-section">
                            <label>
                                <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" checked /> For
                                all children
                            </label>
                            <label>
                                <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> Inform on
                                pickup
                            </label>
                        </div>
                        <div class="terms">
                            <input required type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" checked />
                            <label>
                                I agree to the
                                <a href="../../Home/Terms of Service/Terms.html">Terms of Service</a>
                            </label>
                        </div>
                        <div class="button-popup">
                            <button style="margin-right: 220px;" id="closeEditModalBtn">Cancel</button>
                            <button style="margin-left: -60px;">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- navigation to message page -->
            <a href="../Messager/Message.html" class="chatbox">
                <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
            <!-- tasks right navbar -->
            <div class="tasks" id="taskbtn">
                <i class="fas fa-chevron-left" id="taskicon"></i>
            </div>
        </div>
        <!-- Profile card -->
        <div class="profile-card" id="profileCard" tyle="margin-top: -710px;">
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
        <!-- Task Modal -->
        <div class="task-container" id="tasknavbar">
            <h1 style="margin-top: 20px;"> Quick Tasks Hub </h1>
            <div class="card">
                <h2>Calendar</h2>
                <div class="calendar-header">
                    <a href="#">&lt; October</a>
                    <h3>November 2024</h3>
                    <a href="#">December &gt;</a>
                </div>
                <!-- calender -->
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