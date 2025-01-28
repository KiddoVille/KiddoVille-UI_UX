<html>

<head>
    <title>Dashboard</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/Main.css">
    <link rel="stylesheet" href="<?=CSS?>/ReChild/Home.css">
    <script src="<?=JS?>/ReChild/Profile.js"></script>
    <script src="<?=JS?>/ReChild/MessageDropdown.js"></script>
    <script src="<?=JS?>/ReChild/OTP.js"></script>
    <script src="<?=JS?>/ReChild/Number.js"></script>
    <script src="<?=JS?>/ReChild/Navbar.js"></script>
    <script src="<?=JS?>/ReChild/Home.js"></script>
    <script src="<?=JS?>/ReChild/Taskbar.js"></script>
    <style>
        .children-list li {
            position: relative;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            justify-content: left !important;
            text-align: left;
            align-items: center;
            margin-left: 30px;
        }
        .sidebar-2 ul li::before {
            content: '';
            position: absolute;
            left: -20px;
            bottom: -2px;
            height: 2px;
            width: 100%;
            background-color: white;
            transform: scaleX(0);
            transition: transform 0.3s;
        }
        .child-info .child-name{
            margin-right: -10px !important;
        }
        .select-child{
            margin-left: 0px !important;
            padding-right: 50px !important;
        }

        .select-child img{

            margin-left: -7px !important;
        }

        .select-child h2{
            margin-left: 15px !important;
        }

    </style>
</head>

<body  style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <!-- minimized sidebar -->
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="selected first">
                    <a href="<?=ROOT?>/Child/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/event">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/payment">
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
                        <li class="hover-effect first"
                            onclick="removechildsession();">
                            <img src="<?= isset($data['parent']['image']) ? $data['parent']['image']: ''?>"
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
                    <ul class="children-list">
                        <?php foreach ($data['children'] as $child): ?>
                            <li class="hover-effect first
                                <?php if($child['name'] === $data['selectedchildren']['name']){ echo"select-child"; } ?>
                            " 
                                onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>','<?= isset($child['Child_Id']) ? $child['Child_Id'] : '' ?>')">
                                <img src="<?= isset($child['image']) ? $child['image'] : ROOT . '/Uploads/default_images/default_profile.jpg' ?>" 
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px; <?php if($child['name'] !== $data['selectedchildren']['name']){ echo"margin-left: -20px !important"; } ?>">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" style="height: 125vh;">
            <!-- Header -->
            <div class="header">
                <i class="fa fa-bars" id="minimize-btn"
                    style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
                <div class="name">
                    <h1><?= isset($data['parent']['fullname']) ? $data['parent']['fullname'] : 'No name set'; ?></h1>
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
                <h1 style="color: #233E8D; margin-left: 15px;">
                <?= isset($data['selectedchildren']['name']) ? $data['selectedchildren']['name'] : 'No name set'; ?> Our Star Of The Day</h1>
                <p style="margin-left: 15px; margin-bottom: 0px;"> Today, we shine a spotlight on Abdulla, a bright and joyful part of our
                    family! </p>
                <div class="report-header">
                    <div class="profile" style="height: 340px;">
                        <div class="first-row">
                            <img src="<?= isset($data['selectedchildren']['image']) ? $data['selectedchildren']['image'] : 'No name set'; ?>" alt="profile pic" style="border: 4px solid #233E8D;">
                            <h3 style="margin-top: -5px;"> <?= isset($data['selectedchildren']['fullname']) ? $data['selectedchildren']['fullname'] : 'No name set'; ?></h3>
                        </div>
                        <div class="sub-details" style="display: flex;flex-direction: column; justify-content: space-between;">
                            <p style="margin-top: -30px;">Reg Number : <span>SRD110021</span></p>
                            <p style="margin-top: -10px;">Age: 
                                <span>
                                <?= isset($data['selectedchildren']['age']) ? $data['selectedchildren']['age'] : 'No name set'; ?>
                                </span>
                            </p>
                            <p style="margin-top: -10px;">Language: 
                                <span>
                                <?= isset($data['selectedchildren']['language']) ? $data['selectedchildren']['language'] : 'No name set'; ?>
                                </span>
                            </p>
                            <p style="margin-top: -10px;">Religion: 
                                <span>
                                <?= isset($data['selectedchildren']['religion']) ? $data['selectedchildren']['religion'] : 'No name set'; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="attendence-bar">
                        <h3 style="margin-top: 0px;">Child Attendence </h3>
                        <hr>
                        <div class="progress" style="margin-left: 30px;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <p style="margin-top: 20px;"> Completed Tasks</p>
                        <input style="margin-top: 0px; width: 300px" type="range" min="0" max="100" value="50" step="20" id="fixedSlider">
                    </div>
                    <div class="timetable">
                        <h3 style="margin-top: 0px; margin-bottom: 5px;">Activity Schedule</h3>
                        <hr>
                        <div class="filters">
                            <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                        </div>
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="color: #233E8D; background-color:transparent;text-align: right !important;">Activity</th>
                                    <th style="color: #233E8D; background-color:transparent;text-align: right !important;"> Start Time</th>
                                    <th style="color: #233E8D; background-color:transparent;text-align: right !important;">End Time</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- childs activity for the day -->
                        <div class="table-body-container" style="max-height: 150px; overflow-y: auto; padding: 10px;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td>Breakfast</td>
                                        <td>8.00 AM</td>
                                        <td>9.00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>Creative Play</td>
                                        <td>9.00 AM</td>
                                        <td>10.00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>Creative Play</td>
                                        <td>10.00 AM</td>
                                        <td>11.00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>Story Time</td>
                                        <td>11.00 AM</td>
                                        <td>12.00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>Lunch</td>
                                        <td>12.00 PM</td>
                                        <td>1.00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>Bed Time</td>
                                        <td>1.00 PM</td>
                                        <td>2.00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>Basic Learning Activities</td>
                                        <td>2.00 PM</td>
                                        <td>3.00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>Tea Time</td>
                                        <td>3.00 PM</td>
                                        <td>4.00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>Outdoor Play</td>
                                        <td>4.00 PM</td>
                                        <td>5.00 PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="report-header" style="justify-content: space-between; text-align: center; margin-top: -5px;">
                    <div class="profile" style="width: 300px;display: flex; justify-content: center; align-items: center;">
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
                    <div class="profile" style="width: 300px;display: flex; justify-content: center; align-items: center;">
                        Schedule Meeting
                        <button id="meetingbtn" class="button" style="width: 240px;">Schedule</button>
                <div class="pickup-section" id="meetingresults"
                    style="display: none; width: 220px;margin-bottom: 0px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                    <p id="meetingresultsdate" style="margin-top: 10px;"></p>
                    <p id="meetingresultstime"></p>
                </div>
                <button id="editmeetingbtn" class="button" style="width: 240px; display: none;">Edit</button>
                    </div>
                    <div class="profile" style="width: 300px;display: flex; justify-content: center; align-items: center;">
                        Schedule Visit
                        <button id="openvisitModal" class="button" style="width: 240px;">Schedule</button>
                        <div class="pickup-section" id="visitresults" style="display: none; width: 220px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                            <p id="visitresultsdate" style="margin-top: 10px;">Nice</p>
                            <p id="visitresultstime">Nice</p>
                        </div>
                        <button id="editvisitbtn" class="button" style="width: 240px; display: none;">Edit</button>
                    </div>
                </div>
                <div class="general-notes" style="margin-top: -20px; margin-left: 0px;">
                    <div class="note-head">
                        <h3>General Notes and Suggestions</h3>
                    </div>
                    <div class="text-area" style="margin-top: -10px;">
                        <textarea rows="2" placeholder="Give suggestions and feedbacks" id="note"></textarea>
                    </div>
                    <div style=" display: flex; justify-content: right;">
                        <button class="button" style="width: 130px; align-items: center;text-align:center;"> Submit </button>
                    </div>
                </div>
            </div>
            <!-- tasks right navbar -->
            <div class="task-container" id="tasknavbar" style="position: fixed; margin-top: -882px; margin-left: 1310px;">
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
    <a href="<?=ROOT?>/ReChild/Message" class="chatbox">
        <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
            style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
        <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
            <p> 2</p>
        </div>
    </a>
    <!-- profile card -->
    <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
        <img src="<?=IMAGE?>/back-arrow-2.svg" id="back-arrow-profile"
            style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
        <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100"
            class="profile" />
        <h2>Thilina Perera</h2>
        <p>Student    RS0110657</p>
        <button class="profile-button"
            onclick="window.location.href ='<?=ROOT?>/ReChild/ChildProfile'">Profile</button>
        <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReChild/ParentProfile'">Parent
            profile</button>
        <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReChild/GuardianProfile'">Guardian
            profile</button>
        <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/ReChild/Home'">LogOut</button>
    </div>
    <div class="tasks" id="taskbtn" style="position: fixed;">
        <i class="fas fa-chevron-left" id="taskicon"></i>
    </div>
</body>
<script>
    const fixedSlider = document.getElementById('fixedSlider');
    const initialValue = fixedSlider.value;

    // Add an event listener to reset the slider if it changes
    fixedSlider.addEventListener('input', () => {
        fixedSlider.value = initialValue;
    });

    function setChildSession(childName) {
        fetch('<?=ROOT?>/Child/Home/setchildsession', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ childName: childName })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Child name set in session.");
                window.location.href = '<?= ROOT ?>/Child/Home';
            } else {
                console.error("Failed to set child name in session.", data.message);
            }
        })
        .catch(error => console.error("Error:",error));
    }

    function removechildsession(){
        fetch('<?=ROOT?>/Child/Home/removechildsession', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Child name removed from session.");
                window.location.href = '<?= ROOT ?>/Parent/Home';
            } else {
                console.error("Failed to remove child name from session.", data.message);
            }
        })
        .catch(error => console.error("Error:",error));
    }
</script>

</html>