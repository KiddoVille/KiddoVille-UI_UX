<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaves</title>
    <link rel="stylesheet" href="<?=CSS?>/Doctor/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Doctor/variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Doctor/timeslot.css?v=<?= time() ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!--Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar">
                <div class="sidebar-header">
                    <img src="<?=IMAGE?>/profilePic-2.png" alt="profile-pic">
                    <div class="sidebar-header-content">
                        <h3>Wane Carter</h3>
                        <h4>Doctor</h4>
                    </div>
                </div>
                <div class="sidebar-list">
                    <a href="<?=ROOT?>/Doctor/Dashboard" class="sidebar-list-item" id="dashboard-link"> 
                        <i class='<?=ROOT?>/Doctor/Dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                    <a href="#" class="sidebar-list-item" id="home-link">
                        <i class='bx bxs-home'></i>
                        <span class="text">Home</span>
                    </a>
                    <a href="<?=ROOT?>/Doctor/Prescriptions" class="sidebar-list-item" id="report-link">
                        <i class='bx bxs-report' ></i>
                        <span class="text"> Prescriptions </span>
                    </a>
                    <a href="<?=ROOT?>/Doctor/History" class="sidebar-list-item" id="students-link">
                        <i class='bx bxs-group' ></i>
                        <span class="text">History</span>
                    </a>
                
                    <a href="#" class="sidebar-bottom" id="help-link">
                            <i class='bx bxs-help-circle' ></i>
                            <span class="text">Help</span>
                    </a>
                    
        
                </div>
            </div>
        </div>



        
        <div class="wrapper-1">

            <div class="navabr">
                <div class="navbar-left">
                    <a href="#"><h2>Dashboard</h2></a>
                    <h4>12/08/2025</h3>
                </div>
                <div class="navbar-right">
                <div class="alter-icon"></div>
                <a href="#" class="notification" onclick="toggleNotify()" id = "notificationIcon">
                   
                    <i class='bx bxs-bell' ></i>
                </a>
                <a href="#" class="profile">
                    <img src="<?=IMAGE?>/profilePic-2.png"  onclick="toggleMenu()" id="profileIcon">
                </a>
                </div>
    
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="<?=IMAGE?>/profilePic-2.png" alt="">
                            <h3>Wane Carter</h3>
                        </div>
                        <hr>
    
                        <a href="teacherViewprofile.html" class="sub-menu-link">
                            <i class='bx bx-edit'></i>
                            <p>View Profile</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class='bx bx-help-circle' ></i>
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class='bx bx-log-out'></i>
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
                <div class="notify-menu" id="notify">
                    <div class="notify">
                        <a href="#" class="notify-info">
                            <i class='bx bx-message-square-detail'></i>
                            <div class="msg-info">
                                <h4>New Notification</h4>
                                <h5>Leave request approved</h5>
                                <p >05.33 22 Jul</p>
                            </div>
                           
                        </a>
                        <hr>
                        <a href="#" class="notify-info">
                            <i class='bx bx-message-square-detail'></i>
                            <div class="msg-info">
                                <h4>New Notification</h4>
                                <h5>Parents meeting</h5>
                                <p >05.33 22 Jul</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="notify-info">
                            <i class='bx bx-message-square-detail'></i>
                            <div class="msg-info">
                                <h4>New Notification</h4>
                                <h5>Reports have been updated</h5>
                                <p>05.33 22 Jul</p>
                            </div>
                        </a>
                        
                    </div>
                </div> 
    
            </div>
        <div class="content">
            <div class="backgorund-overlay"></div>
            <div class="time-slot-page">
               
                <form class="time-slot-form" action="<?=ROOT?>/Doctor/Dashboard" >
                    <div class="time-slot">
                      <!-- Calendar Section -->
                      <div class="calendar">
                        <h3>Date</h3>
                        <div class="month-switch">
                          <button type="button" class="prev">&lt;</button>
                          <span>May</span>
                          <button type="button" class="next">&gt;</button>
                        </div>
                        <div class="days">
                          <input type="radio" id="day-1" name="day-1" value="1" />
                          <label class="day" for="day-1">1</label>

                          <input type="radio" id="day-2" name="day-2" value="2" />
                          <label class="day" for="day-2">2</label>

                          <input type="radio" id="day-3" name="day-3" value="3" />
                          <label class="day" for="day-3">3</label>

                          <input type="radio" id="day-4" name="day-4" value="4" />
                          <label class="day" for="day-4">4</label>

                          <input type="radio" id="day-5" name="day-5" value="5" />
                          <label class="day" for="day-5">5</label>

                          <input type="radio" id="day-6" name="day-6" value="6" />
                          <label class="day" for="day-6">6</label>

                          <input type="radio" id="day-7" name="day-7" value="7" />
                          <label class="day" for="day-7">7</label>

                          <input type="radio" id="day-8" name="day-8" value="8" />
                          <label class="day" for="day-8">8</label>

                          <input type="radio" id="day-9" name="day-9" value="9" />
                          <label class="day" for="day-9">9</label>

                          <input type="radio" id="day-10" name="day-10" value="10" />
                          <label class="day" for="day-10">10</label>

                          <input type="radio" id="day-11" name="day-11" value="11" />
                          <label class="day" for="day-11">11</label>

                          <input type="radio" id="day-12" name="day-12" value="12" />
                          <label class="day" for="day-12">12</label>

                          <input type="radio" id="day-13" name="day-13" value="13" />
                          <label class="day" for="day-13">13</label>

                          <input type="radio" id="day-14" name="day-14" value="14" />
                          <label class="day" for="day-14">14</label>

                          <input type="radio" id="day-15" name="day-15" value="15" />
                          <label class="day" for="day-15">15</label>

                          <input type="radio" id="day-16" name="day-16" value="16" />
                          <label class="day" for="day-16">16</label>

                          <input type="radio" id="day-17" name="day-17" value="17" />
                          <label class="day" for="day-17">17</label>

                          <input type="radio" id="day-18" name="day-18" value="18" />
                          <label class="day" for="day-18">18</label>

                          <input type="radio" id="day-19" name="day-19" value="19" />
                          <label class="day" for="day-19">19</label>

                          <input type="radio" id="day-20" name="day-20" value="20" />
                          <label class="day" for="day-20">20</label>

                          <input type="radio" id="day-21" name="day-21" value="21" />
                          <label class="day" for="day-21">21</label>

                          <input type="radio" id="day-22" name="day-22" value="22" />
                          <label class="day" for="day-22">22</label>

                          <input type="radio" id="day-23" name="day-23" value="23" />
                          <label class="day" for="day-23">23</label>

                          <input type="radio" id="day-24" name="day-24" value="24" />
                          <label class="day" for="day-24">24</label>

                          <input type="radio" id="day-25" name="day-25" value="25" />
                          <label class="day" for="day-25">25</label>

                          <input type="radio" id="day-26" name="day-26" value="26" />
                          <label class="day" for="day-26">26</label>

                          <input type="radio" id="day-27" name="day-27" value="27" />
                          <label class="day" for="day-27">27</label>

                          <input type="radio" id="day-28" name="day-28" value="28" />
                          <label class="day" for="day-28">28</label>

                          <input type="radio" id="day-29" name="day-29" value="29" />
                          <label class="day" for="day-29">29</label>

                          <input type="radio" id="day-30" name="day-30" value="30" />
                          <label class="day" for="day-30">30</label>
                          <!-- Repeat for all days -->
                        </div>
                      </div>
                  
                      <!-- Time Selection Section -->
                      <div class="time-selection">
                        <h3>Time</h3>
                        <div class="slots">
                          <input type="radio" id="time-1" name="time-1" value="8:00 - 8:30" />
                          <label class="slot" for="time-1">8:00 - 8:30</label>
                  
                          <input type="radio" id="time-2" name="time-2" value="9:00 - 9:30" />
                          <label class="slot" for="time-2">13:00 - 13:30</label>
                  
                          <input type="radio" id="time-3" name="time-3" value="9:30 - 10:00" />
                          <label class="slot" for="time-3">9:00 - 9:30</label>

                          <input type="radio" id="time-4" name="time-4" value="9:30 - 10:00" />
                          <label class="slot" for="time-4">13:30 - 14:00</label>

                          <input type="radio" id="time-5" name="time-5" value="9:30 - 10:00" />
                          <label class="slot" for="time-5">9:30 - 10:00</label>

                          <input type="radio" id="time-6" name="time-6" value="9:30 - 10:00" />
                          <label class="slot" for="time-6">14:00 - 14:30</label>

                          <input type="radio" id="time-7" name="time-7" value="9:30 - 10:00" />
                          <label class="slot" for="time-7">10:00 - 10:30</label>

                          <input type="radio" id="time-8" name="time-8" value="9:30 - 10:00" />
                          <label class="slot" for="time-8">14:30 - 15:00</label>

                          <input type="radio" id="time-9" name="time-9" value="9:30 - 10:00" />
                          <label class="slot" for="time-9">10:30 - 11:00</label>

                          <input type="radio" id="time-10" name="time-10" value="9:30 - 10:00" />
                          <label class="slot" for="time-10">15:00 - 15:30</label>

                          <input type="radio" id="time-11" name="time-11" value="9:30 - 10:00" />
                          <label class="slot" for="time-11">11:00 - 11:30</label>

                          <input type="radio" id="time-12" name="time-12" value="9:30 - 10:00" />
                          <label class="slot" for="time-12">15:30 - 16:00</label>

                          <input type="radio" id="time-13" name="time-13" value="9:30 - 10:00" />
                          <label class="slot" for="time-13">11:30 - 12:00</label>

                          <input type="radio" id="time-14" name="time-14" value="9:30 - 10:00" />
                          <label class="slot" for="time-14">16:00 - 16:30</label>
                  
                          <!-- Repeat for all time slots -->
                        </div>
                      </div>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn">Done</button>
                    <button type="reset" class="reset-btn">Reset</button>
                  </form>
                  
            </div>
         
       
            
        </div>
    </div>
    </div>

    <script src="../Scripts/script.js"></script>
    <script src="timeslot.js"></script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    
    
</body>
</html>