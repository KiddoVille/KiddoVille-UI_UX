<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaves</title>
    <link rel="stylesheet" href="<?=CSS?>/Doctor/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Doctor/variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Doctor/time.css?v=<?= time() ?>">
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
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                    <a href="<?=ROOT?>/Doctor/TimeSlots" class="sidebar-list-item" id="home-link">
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
            <div class="appointment-page">
                <div class="appointment-page-header">
                    <div class="appointment-page-header-group">
                        <i class="fa-regular fa-calendar"></i>
                        <h3>Appointments</h3>
                    </div>
                    
                    <hr>
                </div>
                <div class="appointment-table">
                    <div class="appointment-table-title">
                        <h4>Appointment ID</h4>
                        <h4>Time Slot</h4>
                        <h4>Status</h4>
                        <h4>Patient Name</h4>
                        <h4>Actions </h4>
                        
                    </div>
                    <div class="appointment-row">
                        <p>APT0019</p>
                        <p>10:00 - 10:30</p>
                        <div class="booked">Booked</div> 
                        <p>Thilina Perera</p>
                        <div class="actions">
                            <a href="<?=ROOT?>/Doctor/Dashboard"><button type="button" class="edit-btn-booked">Edit</button></a>
                            <button type="button" class="dlt-btn-booked">Delete</button>
                        </div>
                        
                                               
                    </div>
                    <div class="appointment-row">
                        <p>APT0019</p>
                        <p>10:30 - 11:00</p>
                        <div class="available">Available</div> 
                        <p>Dewmini Rathnayaka</p>  
                        <div class="actions">
                        <a href="<?=ROOT?>/Doctor/TimeSlots"><button type="button" class="edit-btn">Edit</button></a>
                            <button type="button" class="dlt-btn ">Delete</button>
                        </div>
                        
                    </div>
                    <div class="appointment-row">
                        <p>APT0019</p>
                        <p>15:00 - 15:30</p>
                        <div class="booked">Booked</div> 
                        <p>Rinesh Silva</p>
                        <div class="actions">
                            <button type="button" class="edit-btn-booked">Edit</button>
                            <button type="button" class="dlt-btn-booked">Delete</button>
                        </div>
                    </div>
                    <a href="<?=ROOT?>/Doctor/TimeSlots">
                    <button type="button" class="add-btn">Add Slot</button>
                    </a>
                </div>
                
            </div>
         
       
            
        </div>
    </div>
    </div>

    <script src="<?=JS?>/Teacher/script.js"></script>
    <script></script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    
    
</body>
</html>