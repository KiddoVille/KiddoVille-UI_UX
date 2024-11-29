<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Manager</title>
    <link rel="icon" href="<?= IMAGE ?>/KIDDOVILLE_LOGO.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="<?=CSS?>/Manager/Dashboard.css?v=<?= time()?>">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2 style="margin-top: 10px;font-size:25px;" >Dashboard</h2>
            <ul>
                <li class="selected">
                    <a href="<?=ROOT?>/Manager/Home" >
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <ul>
                    <li class="hover-effect unselected">
                      <a href="#">
                        <i class="fas fa-user-check"></i>Accounts
                      </a>
                      <ul class="dropdown">
                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                        <li><a href="<?=ROOT?>/Manager/Viewprofile"><i class="fas fa-child"></i> Child</a></li>
                        <li><a href="../suspand/suspend.html"><i class="fas fa-ban"></i> Suspend</a></li>
                      </ul>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-calendar"></i>Scheduling
                        </a>
                        <ul class="dropdown">
                            <li><a href="<?=ROOT?>/Manager/Foodplane"><i class="fas fa-utensils"></i> Meal Plane</a></li>
                            <li><a href="<?=ROOT?>/Manager/Staffallocation"><i class="fas fa-users"></i> Staff Allocation</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <<i class="fas fa-cogs"></i>Operations
                        </a>
                        <ul class="dropdown">
                            <li><a href="../Manage-problems/Manage-problem.html"><i class="fas fa-exclamation-triangle"></i> Problems</a></li>
                            <!-- <li><a href="#"><i class="fas fa-sun"></i>Leaves</a></li> -->
                            <li><a href="../Vacancies/View-vacancy.html"><i class="fas fa-user-plus"></i>Hiring</a></li>
                            <!-- <li><a href="#"><i class="fas fa-smile"></i>FunZone</a></li> -->
                            <li><a href="<?=ROOT?>/Manager/Packages"><i class="fas fa-box"></i> Packages</a></li>
                            <li><a href="../Events/View-events.html"><i class="fas fa-calendar-alt"></i> Events</a></li>
                        </ul>
                    </li>
                </ul>
                
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-envelope"></i>Communication
                        
                        <ul class="dropdown">
                            <li><a href="../Events/ChooseEvent.html"><i class="fas fa-calendar"></i>Create Events</a></li>
                            <li><a href="<?= ROOT ?>/Manager/Publishholiday"><i class="fas fa-sun"></i> Publish Holiday</a></li>
                            </ul>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-info-circle"></i>Info & profile
                        </a>
                        <ul class="dropdown">
                            <li><a href="<?=ROOT?>/Manager/Blog"><i class="fas fa-blog"></i>Blog</a></li>
                            <li><a href="<?=ROOT?>/Manager/Aboutus"><i class="fas fa-info-circle"></i>About Us</a></li>
                            <li><a href="<?=ROOT?>/Manager/Contactus"><i class="fas fa-envelope"></i>Contact Us</a></li>
                            <li><a href="<?=ROOT?>/Manager/Profile"><i class="fas fa-user-circle"></i>Profile</a></li>

                        </ul>
                    </li>
                </ul>
                
            </ul>
            
        </div>
        
        <div class="main-content">
            <div class="header">
                <div class="name">
                    <h1>Hey Namal</h1>
                    <p>Let’s do some productive activities today</p>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                    <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
                </div>
                <div class="bell-icon" style="cursor: pointer;">
                    <button class="bellbtn" onclick="handlenotify()">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="message-dropdown" id="notification">
                        <ul>
                            <li><p>New Message 1 <i class="fas fa-paper-plane"></i></p><p class="content">Content like a message</p></li>
                            <li><p>New Message 2 <i class="fas fa-paper-plane"></i></p><p class="content">Content like a message</p></li>
                            <li><p>New Message 3 <i class="fas fa-paper-plane"></i></p><p class="content">Content like a message</p></li>
                            <li><p>New Message 4 <i class="fas fa-paper-plane"></i></p><p class="content">Content like a message</p></li>
                            <li><p>New Message 5 <i class="fas fa-paper-plane"></i></p><p class="content">Content like a message</p></li>
                            <li><p>New Message 6 <i class="fas fa-paper-plane"></i></p><p class="content">Content like a message</p></li>
                        </ul>
                    </div>
                </div>
                
                <div class="message-numbers"><p> 2</p></div>
                <div class="profile">
                    <button class="profilebtn" onclick="handleClick()">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>                    
                </div>
            </div>
            <div class="backgroundwhite">
                <div class="stats">
                    <div class="stat">
                        <h3 style="color: #233E8D;">Total Attendance</h3>
                        <h2 style="margin-bottom: 3px;color: #233E8D;">89/120</h2>
                        <p  style="color: #233E8D;">Out of 120 Children today attended to Daycare</p>
                    </div>
                    <div class="stat">
                        <h3 style="color: #233E8D;">Total Employees Attendance</h3>
                        <h2 style="margin-bottom: 3px;color: #233E8D;" >20 Employees</h2>
                        <p style="color: #233E8D;">Out of 24 employees today attended to Daycare</p>
                    </div>
                    
                </div>
                <div class="activity-schedule">
                    <h2 style="color: #233E8D;">Upcoming Days Activity Schedule</h2>
    
                    <div class="filters">
                        <input type="date" value="2025-01-10">
                        <select  style="margin-right: 325px;">
                            <option value="" disabled selected>Select age group</option>
                            <option value="2 - 5">2 - 5</option>
                            <option value="5 - 7">5 - 7</option>
                            <option value="7 - 9">7 - 9</option>
                            <option value="9 - 11">9 - 11</option>
                        </select>
                    </div>
                    
                    <table>
                        <thead>
                            <tr class="table_headings">
                                <th style="color: #233E8D;background-color:transparent">Activity</th>
                                <th style="color: #233E8D;background-color:transparent">Staff</th>
                                <th style="color: #233E8D;background-color:transparent">Start Time</th>
                                <th style="color: #233E8D;background-color:transparent">End Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td><select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select></td>
                                <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                                <td>
                                    <select name="End Time"  class="styled-select" id="">
                                        <option value="Select End Time" disabled selected>Select End Time</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                        <option value="">17.30</option>
                                    </select>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Staff name" class="styled-select" id="">
                                        <option value="Select Staff" disabled selected>Select Staff</option>
                                        <option value="">Ms.Rahul</option>
                                        <option value="">Ms.Thilina</option>
                                        <option value="">Ms.Hanshika</option>
                                        <option value="">Ms.Kivitha</option>
                                    </select>
                                </td>
                                <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                                <td><select name="End Time"  class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td><select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select></td>
                                <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                                <td>
                                    <select name="End Time"  class="styled-select" id="">
                                        <option value="Select End Time" disabled selected>Select End Time</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                        <option value="">17.30</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Staff name" class="styled-select" id="">
                                        <option value="Select Staff" disabled selected>Select Staff</option>
                                        <option value="">Ms.Rahul</option>
                                        <option value="">Ms.Thilina</option>
                                        <option value="">Ms.Hanshika</option>
                                        <option value="">Ms.Kivitha</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Start time" class="styled-select" id="">
                                        <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                        <option value="">08.00</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="End Time"  class="styled-select" id="">
                                        <option value="Select End Time" disabled selected>Select End Time</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                        <option value="">17.30</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Staff name" class="styled-select" id="">
                                        <option value="Select Staff" disabled selected>Select Staff</option>
                                        <option value="">Ms.Rahul</option>
                                        <option value="">Ms.Thilina</option>
                                        <option value="">Ms.Hanshika</option>
                                        <option value="">Ms.Kivitha</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Start time" class="styled-select" id="">
                                        <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                        <option value="">08.00</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="End Time"  class="styled-select" id="">
                                        <option value="Select End Time" disabled selected>Select End Time</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                        <option value="">17.30</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Staff name" class="styled-select" id="">
                                        <option value="Select Staff" disabled selected>Select Staff</option>
                                        <option value="">Ms.Rahul</option>
                                        <option value="">Ms.Thilina</option>
                                        <option value="">Ms.Hanshika</option>
                                        <option value="">Ms.Kivitha</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Start time" class="styled-select" id="">
                                        <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                        <option value="">08.00</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="End Time"  class="styled-select" id="">
                                        <option value="Select End Time" disabled selected>Select End Time</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                        <option value="">17.30</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" class="styled-select" id="">
                                        <option value="Select Activity" disabled selected>Select Activity</option>
                                        <option value="">Breakfast</option>
                                        <option value="">Tea time</option>
                                        <option value="">Lunch</option>
                                        <option value="">Creative Acitivity</option>
                                        <option value="">Story Time</option>
                                        <option value="">Out door Time</option>
                                        <option value="">Basic Learning Time</option>
                                        <option value="">Tea time Evening</option>
                                        <option value="">End Time</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Staff name" class="styled-select" id="">
                                        <option value="Select Staff" disabled selected>Select Staff</option>
                                        <option value="">Ms.Rahul</option>
                                        <option value="">Ms.Thilina</option>
                                        <option value="">Ms.Hanshika</option>
                                        <option value="">Ms.Kivitha</option>
                                    </select>
                                </td>
                                <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time  <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                                <td>
                                    <select name="End Time"  class="styled-select" id="">
                                        <option value="Select End Time" disabled selected>Select End Time</option>
                                        <option value="">09.00</option>
                                        <option value="">10.00</option>
                                        <option value="">11.00</option>
                                        <option value="">12.00</option>
                                        <option value="">13.00</option>
                                        <option value="">14.00</option>
                                        <option value="">15.00</option>
                                        <option value="">15.30</option>
                                        <option value="">16.00</option>
                                        <option value="">17.00</option>
                                        <option value="">17.30</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
           
        <!-- <div class="right-sidebar">
            <div class="box">
                <h3>Scheduling Meetings</h3>
                <p style="color: #2353A7;">Schedule meeting for the process in daycare for parent and employess</p>
                <p style="font-weight: bold;">Date: 2024/10/12</p>
                <p style="font-weight: bold;">Time: 2:00 p.m - 4:00 p.m</p>
                <a href="#" class="button">View Schedule</a>
            </div>
            <div class="box">
                <h3>Publish Leaves</h3>
                <p style="font-weight: bold;"></p>
                <p style="font-weight: bold;">Date: 2024/10/12</p>
                <a href="#" class="button">Schedule</a>
            </div>

        </div> -->
         <!-- onclick function -->
         <div class="profile-card" id="profileCard">
            <button class="back" onclick="handleHide()"><i class="fas fa-arrow-left"></i></button>
            <img alt="Profile picture of Thilina Perera" height="100" src="../Assets/shimhan.jpg" width="100" class="profile"/>
            <h2>
             Thilina Perera
            </h2>
            <p>
             ID    RS0110657
            </p>
            <button class="profile-button">
             Personal info
            </button>
            <button class="secondary-button">
             Change Password
            </button>
            <button class="logout-button">
                LogOut
            </button>
           </div>

           <!-- notifucation dropdown -->
           
        </div>
        
    </div>

    <script>
        function handleClick() {
            var profileCard = document.getElementById('profileCard');
            profileCard.classList.toggle('show');
        }
        function handleHide() {
            var profileCard = document.getElementById('profileCard');
            profileCard.classList.remove('show');
        }

        function handlenotify() {
            var messageDropdown = document.getElementById('notification');
            messageDropdown.classList.toggle('show');
        }
        const today = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' }; // Customize date format

        // Format and display the date
        document.getElementById("current-date").textContent = today.toLocaleDateString(undefined, options);
    </script>
</body>
</html>



