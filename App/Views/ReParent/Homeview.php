<!DOCTYPE html>

<head>
    <title>Dashboard</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/ReParent/Home.css">
    <link rel="stylesheet" href="<?=CSS?>/ReParent/Main.css">
    <script src="<?=JS?>/ReParent/Profile.js"></script>
    <script src="<?=JS?>/ReParent/MessageDropdown.js"></script>
    <script src="<?=JS?>/ReParent/OTP.js"></script>
    <script src="<?=JS?>/ReParent/Number.js"></script>
    <script src="<?=JS?>/ReParent/Navbar.js"></script>
    <script src="<?=JS?>/ReParent/Home.js"></script>
    <script src="<?=JS?>/ReParent/Taskbar.js"></script>
</head>

<body style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <!-- minimized sidebar -->
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="selected first">
                    <a href="<?=ROOT?>/ReParent/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
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
                <li class="hover-effect unselected">
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
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span
                        id="help">Help</span></a>
            </div>
        </div>
        <!-- navigation to choose child -->
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first select-child"
                            onclick="window.location.href = '<?=ROOT?>/ReParent/Home'">
                            <img src="<?=IMAGE?>/family.jpg"
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
                    <ul>
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
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" style="height: 200vh;">
            <!-- Header -->
            <div class="header">
                <i class="fa fa-bars" id="minimize-btn"
                    style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
                <div class="name">
                    <h1>Hey Thilina</h1>
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
            <div class="report-page">
                <h1 style="color: #233E8D; margin-left: 15px;">Abdulla Our Star Of The Day</h1>
                <p style="margin-left: 15px; margin-bottom: 0px;"> Today, we shine a spotlight on Abdulla, a bright and
                    joyful part of our
                    family! </p>
                <div class="report-header">
                    <div class="profile">
                        <div class="first-row">
                            <img src="<?=IMAGE?>/face.jpeg" alt="profile pic" style="border: 4px solid #233E8D;">
                            <h3 style="margin-top: 10px !important;">Abdulla Aurad </h3>
                        </div>
                        <div class="sub-details"
                            style="display: flex;flex-direction: column; justify-content: space-between;">
                            <p style="white-space: nowrap;">UserName :<span> AbdullaAurad</span></p>
                            <p style="margin-top: -10px;">Child: <span>5</span></p>
                            <p style="margin-top: -10px;">Last seen: <span>Today 2:00 p.m</span></p>
                            <p style="margin-top: -10px;">Last seen: <span>Today 2:00 p.m</span></p>
                        </div>
                    </div>
                    <div class="attendence-bar">
                        <div class="child present">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Child Photo" class="child-photo">
                            <div class="child-info">
                                <p class="child-name">John Doe</p>
                                <p class="attendancestatus">Present</p>
                            </div>
                        </div>
                        <div class="child absent">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Child Photo" class="child-photo">
                            <div class="child-info">
                                <p class="child-name">John Doe</p>
                                <p class="attendancestatus">Absent</p>
                            </div>
                        </div>
                        <div class="child present">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Child Photo" class="child-photo">
                            <div class="child-info">
                                <p class="child-name">John Doe</p>
                                <p class="attendancestatus">Present</p>
                            </div>
                        </div>
                        <div class="child present">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Child Photo" class="child-photo">
                            <div class="child-info">
                                <p class="child-name">John Doe</p>
                                <p class="attendancestatus">Present</p>
                            </div>
                        </div>
                        <div class="child absent">
                            <img src="<?=IMAGE?>/face.jpeg" alt="Child Photo" class="child-photo">
                            <div class="child-info">
                                <p class="child-name">John Doe</p>
                                <p class="attendancestatus">Absent</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="overdue-payment card" style="justify-content: center; display: flex;">
                            <div>
                                <img src="<?=IMAGE?>/face.jpeg" alt="profile pic"
                                    style="width: 130px; height: 130px; margin-top: 10px;">
                            </div>
                            <div style="margin-left: 20px; margin-right: 20px;">
                                <h2>Overdue Payment</h2>
                                <p>Due Date: <strong>2023-11-01</strong></p>
                                <p>Amount: <strong>$120</strong></p>
                                <p>Status: <span class="overdue">Overdue</span></p>
                                <p>Days Overdue: <strong>10 days</strong></p>
                                <button class="pay-now" style="white-space: nowrap">Pay Now</button>
                            </div>
                        </div>
                        <div class="upcoming-payment card" style="justify-content: center; display: flex;">
                            <div>
                                <img src="<?=IMAGE?>/face.jpeg" alt="profile pic"
                                    style="width: 130px; height: 130px">
                            </div>
                            <div style="margin-left: 20px; margin-right: 20px;">
                                <h2>Upcoming Payment</h2>
                                <p>Due Date: <strong>2023-12-15</strong></p>
                                <p>Amount: <strong>$150</strong></p>
                                <p>Status: <span class="upcoming">Upcoming</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <a href="#" class="main-menu-item">
                            <i class="fas fa-bullhorn icon-announcements"></i>
                            <span style="font-size: 15px;">Announcements</span>
                        </a>
                        <div class="announcement-list">
                            <!-- Example Announcements -->
                            <div class="announcement">
                                <p class="event-name" style="margin-top: 5px;">Winter Vacation</p>
                                <p class="event-date" style="margin-top: 5px;">11/02/2025</p>
                            </div>
                            
                            <div class="announcement">
                                <p class="event-name" style="margin-top: 5px;">Spring Field Trip</p>
                                <p class="event-date" style="margin-top: 5px;">11/02/2025</p>
                            </div>
                    
                            <div class="announcement">
                                <p class="event-name" style="margin-top: 5px;">Parent-Teacher Meeting</p>
                                <p class="event-date" style="margin-top: 5px;">11/02/2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report-header"
                    style="justify-content: space-between; text-align: center; margin-top: -5px;">
                    <div class="profile"
                        style="width: 300px;display: flex; justify-content: center; align-items: center;">
                        Schedule pickups
                        <button id="openModalBtn" class="button" style="width: 240px;">Schedule</button>
                        <div class="pickupresults" id="pickupresults">
                            <div class="pickup-section"
                                style="display: flex; flex-direction: row; width: 200px; justify-content: center; align-items: center;box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); margin-top: 10px;">
                                <i class="fas fa-check-circle" style="color:green"></i>
                                <h4> Success</h4>
                            </div>
                        </div>
                    </div>
                    <div class="profile"
                        style="width: 300px;display: flex; justify-content: center; align-items: center;">
                        Schedule Meeting
                        <button id="meetingbtn" class="button" style="width: 240px;">Schedule</button>
                        <div class="pickup-section" id="meetingresults"
                            style="display: none; width: 220px;margin-bottom: 0px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                            <p id="meetingresultsdate" style="margin-top: 10px;"></p>
                            <p id="meetingresultstime"></p>
                        </div>
                        <button id="editmeetingbtn" class="button" style="width: 240px; display: none;">Edit</button>
                    </div>
                    <div class="profile"
                        style="width: 300px;display: flex; justify-content: center; align-items: center;">
                        Schedule Visit
                        <button id="openvisitModal" class="button" style="width: 240px;">Schedule</button>
                        <div class="pickup-section" id="visitresults"
                            style="display: none; width: 220px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                            <p id="visitresultsdate" style="margin-top: 10px;">Nice</p>
                            <p id="visitresultstime">Nice</p>
                        </div>
                        <button id="editvisitbtn" class="button" style="width: 240px; display: none;">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- schedule meetings -->
        <div class="modal" id="MeetingModal">
            <div class="pickup-popup">
                <div class="top-con">
                    <div class="back-con">
                        <i class="fas fa-chevron-left" id="backformeeting"></i>
                    </div>
                    <div class="refresh-con">
                        <i class="fas fa-refresh" id="meetingrefresh"
                            style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                    </div>
                </div>
                <h1>daycare meeting slots</h1>
                <form id="meeting-form">
                    <div class="pickup-section">
                        <label for="time">Choose prfered time slot</label>
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Choose</th>
                            </tr>
                            <tr>
                                <td>2024 - 08 - 18</td>
                                <td>10:30 - 11:30 A.M</td>
                                <td class="checkbox"><input name="option" type="checkbox" class="checkboxes"
                                        value="2024 - 08 - 18+10:30 - 11:30 A.M"></td>
                            </tr>
                            <tr>
                                <td>2024 - 08 - 18</td>
                                <td>10:30 - 11:30 A.M</td>
                                <td class="checkbox"><input name="option" type="checkbox" class="checkboxes"
                                        value="2024 - 08 - 18+11:30 - 11:30 A.M"></td>
                            </tr>
                            <tr>
                                <td>2024 - 08 - 18</td>
                                <td>10:30 - 11:30 A.M</td>
                                <td class="checkbox"><input name="option" type="checkbox" class="checkboxes"
                                        value="2024 - 08 - 18+12:30 - 11:30 A.M"></td>
                            </tr>
                            <tr>
                                <td>2024 - 08 - 18</td>
                                <td>10:30 - 11:30 A.M</td>
                                <td class="checkbox"><input name="option" type="checkbox" class="checkboxes"
                                        value="2024 - 08 - 18+13:30 - 11:30 A.M"></td>
                            </tr>
                            <tr>
                                <td>2024 - 08 - 18</td>
                                <td>10:30 - 11:30 A.M</td>
                                <td class="checkbox"><input name="option" type="checkbox" class="checkboxes"
                                        value="2024 - 08 - 18+14:30 - 11:30 A.M"></td>
                            </tr>
                            <tr>
                                <td>2024 - 08 - 18</td>
                                <td>10:30 - 11:30 A.M</td>
                                <td class="checkbox"><input name="option" type="checkbox" class="checkboxes"
                                        value="2024 - 08 - 18+15:30 - 11:30 A.M"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="pickup-section">
                        <label for="time">Custom Schedule</label>
                        <button style="margin-left: 10px;" id="customeschedule"> Create </button>
                    </div>
                    <div class="button-popup">
                        <button style="margin-right: 230px;" id="closemeetingBtn">Cancel</button>
                        <button type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- to create custom meetings -->
        <div class="modal" id="customMeetingModal">
            <div class="pickup-popup">
                <div class="top-con">
                    <div class="back-con">
                        <i class="fas fa-chevron-left" id="backforcustommeeting"></i>
                    </div>
                    <div class="refresh-con" id="meetingrefreshcon">
                        <i class="fas fa-refresh" id="custommeetingrefresh"
                            style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                    </div>
                </div>
                <h1>daycare meeting slots</h1>
                <form id="custommeeting-form">
                    <div class="pickup-section">
                        <label for="date">Date</label>
                        <input required id="customdate" type="date">
                    </div>
                    <div class="pickup-section">
                        <label>Time</label>
                        <input required min="08:00" max="17:00" step="900" id="customtime" type="time">
                    </div>
                    <div class="button-popup">
                        <button style="margin-right: 230px;" id="closecustommeetingBtn">Cancel</button>
                        <button type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- to scheule pickups -->
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
                        <label for="time">Select Time <span id="red-star" class="red-star"> *</span></label>
                        <input id="pickuptime" required class="time" type="time" />
                    </div>
                    <div class="pickup-section">
                        <label>Select person for pickup</label>
                        <div class="person-section">
                            <img alt="Person's photo" height="50" src="../../../Assets/face.jpeg" width="50" />
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
                        <input required class="otp" id="otp" type="text" maxlength="6" pattern="\d*" inputmode="numeric"
                            placeholder="000000" />
                        <small>Enter a number and inform the pickup person</small>
                    </div>
                    <div class="pickup-section checkbox-section">
                        <label>
                            <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> For all children
                        </label>
                        <label>
                            <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> Inform on pickup
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
    </div>
    <!-- to schedule visits -->
    <div class="modal" id="visitModal">
        <div class="pickup-popup">
            <div class="top-con">
                <div class="back-con">
                    <i class="fas fa-chevron-left" id="backforvisit"></i>
                </div>
                <div class="refresh-con">
                    <i class="fas fa-refresh" id="visitrefresh"
                        style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                </div>
            </div>
            <h1>Schedule Visits</h1>
            <form id="visitForm">
                <div class="pickup-section">
                    <label for="time">Select Date <span id="red-star3" class="red-star"> *</span> </label>
                    <p style="color: lightgray; margin-top: -28px; margin-left: 100px;"> May 2024 </p>
                    <div class="dates">
                        <div class="date">
                            <p class="whichday">Mon</p>
                            <h1 class="day">14</h1>
                        </div>
                        <div class="date">
                            <p class="whichday">Tue</p>
                            <h1 class="day">15</h1>
                        </div>
                        <div class="date">
                            <p class="whichday">Wed</p>
                            <h1 class="day">16</h1>
                        </div>
                        <div class="date">
                            <p class="whichday">Thu</p>
                            <h1 class="day">17</h1>
                        </div>
                        <div class="date">
                            <p class="whichday">Fri</p>
                            <h1 class="day">18</h1>
                        </div>
                        <div class="date">
                            <p class="whichday">Sat</p>
                            <h1 class="day">19</h1>
                        </div>
                        <div class="date">
                            <p class="whichday">Sun</p>
                            <h1 class="day">20</h1>
                        </div>
                    </div>
                    <i class="fa fa-chevron-right"
                        style="font-size: 30px; margin-top: -65px; margin-left: 350px; color: #233E8D;"></i>
                </div>
                <div class="pickup-section" style="display: flex; flex-direction: column;">
                    <label>Select Date <span id="red-star4" class="red-star"> *</span></label>
                    <div class="time-list">
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                    </div>
                    <div class="time-list">
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                        <div class="time">
                            <p> 9:00 - 9:15 AM</p>
                        </div>
                    </div>
                </div>
                <div class="pickup-section">
                    <label for="otp">Contact details <span id="red-star5" class="red-star"> *</span></label>
                    <input class="number" id="number" placeholder="071-481-0928" type="text" maxlength="12" />
                    <small>Enter your contact number</small>
                </div>
                <div class="terms" id="agree">
                    <input required type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" />
                    <label for="number">
                        I agree to the
                        <a href="#">Terms of Service</a>
                    </label>
                </div>
                <div class="button-popup">
                    <button style="margin-right: 230px;" id="closeVisitModalBtn">Cancel</button>
                    <button type="submit">Done</button>
                </div>
            </form>
        </div>
    </div>
    <!-- navigation to message page -->
    <a href="<?=ROOT?>/ReParent/Message" class="chatbox">
        <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
            style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
        <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
            <p> 2</p>
        </div>
    </a>
    <!-- profile card -->
    <div class="profile-card" id="profileCard" style="margin-top:-1500px !important;right: 0; margin-right: 0px; position:fixed !important;">
        <img src="<?=IMAGE?>/back-arrow-2.svg" id="back-arrow-profile"
            style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
        <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100"
            class="profile" />
        <h2>Thilina Perera</h2>
        <p>Student    RS0110657</p>
        <button class="profile-button"
            onclick="window.location.href ='../Profile/ChildViewProfile.html'">Profile</button>
        <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReParent/ParentProfile'">Parent
            profile</button>
        <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReParent/GuardianProfile'">Guardian
            profile</button>
        <button class="secondary-button">Medications</button>
        <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/Main/Home'">LogOut</button>
    </div>
    <div class="tasks" id="taskbtn" style="position: fixed;">
        <i class="fas fa-chevron-left" id="taskicon"></i>
    </div>
</body>

</html>