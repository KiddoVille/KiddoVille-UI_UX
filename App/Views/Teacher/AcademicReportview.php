<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Report</title>
    <link rel="stylesheet" href="<?=CSS?>/Teacher/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/academic.css?v=<?= time() ?>">
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
                    <img src="<?=IMAGE?>/profilePic.png" alt="profile-pic">
                    <div class="sidebar-header-content">
                        <h3>Sara Britney</h3>
                        <h4>Teacher</h4>
                    </div>
                </div>
                <div class="sidebar-list">
                    <a href="<?=ROOT?>/Teacher/Dashboard" class="sidebar-list-item" id="dashboard-link"> 
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                    <a href="<?=ROOT?>/Main/Home" class="sidebar-list-item" id="home-link">
                        <i class='bx bxs-home'></i>
                        <span class="text">Home</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Reports" class="sidebar-list-item" id="report-link">
                        <i class='bx bxs-report' ></i>
                        <span class="text"> Report </span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Students" class="sidebar-list-item" id="students-link">
                        <i class='bx bxs-group' ></i>
                        <span class="text">Students</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Leaves" class="sidebar-list-item" id="leaves-link">
                        <i class='bx bx-calendar' ></i>
                        <span class="text">Leaves</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Message" class="sidebar-list-item" id="chat-link" >
                        <i class='bx bx-message-square-detail'></i>
                        <span class="text">Messages</span>
                    </a>
                    <hr>
                    <a href="<?=ROOT?>/Main/Help" class="sidebar-bottom" id="help-link">
                            <i class='bx bxs-help-circle' ></i>
                            <span class="text">Help</span>
                    </a>
                    
        
                </div>
            </div>
        </div>



        
        <div class="wrapper-1">

            <div class="navabr">
                <div class="navbar-left">
                    <a href="#"><h2>Hey Sara Britney</h2></a>
                    <h4>Empowering Excellence in Every Lesson!</h3>
                </div>
                <div class="navbar-right">
                <div class="alter-icon"></div>
                <a href="#" class="notification" onclick="toggleNotify()" id = "notificationIcon">
                   
                    <i class='bx bxs-bell' ></i>
                </a>
                <a href="#" class="profile">
                    <img src="<?=IMAGE?>/profilePic.png" onclick="toggleMenu()" id="profileIcon">
                </a>
                </div>
    
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="<?=IMAGE?>/profilePic.png" alt="">
                            <h3>Sara Bretney</h3>
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
                        <a href="<?=ROOT?>/Teacher/Notifications" onclick="toggleNotify()" class="all-btn">See all</a>
                    </div>
                </div> 
    
            </div>
        <div class="content">
            <div class="backgorund-overlay"></div>
            
            <div class="success-popup" id="success">
                <div class="success-popup-content">
                    <div class="checkmark">
                        <img src="<?=IMAGE?>/tick.png">
                        <h2>Success!</h2>
                    </div>
                    <p>Report has been submitted successfully</p>
                    <div class="continue">
                       <a href="<?=ROOT?>/Teacher/Reports"> <h3>Continue</h3></a>
                    </div>
                    
                    
           
                </div>
            </div>
            
            <div class="report-page">
                <H3>Academic Report</H3>
                <div class="report-header">
                    <div class="profile">
                        <div class="first-row">
                            <img src="<?=IMAGE?>/profilePic-3.png" alt="profile pic">
                            <h3>Thilina Perera </h3>
                        </div>
                        <div class="sub-details">
                            <p>Registration Number : <span>SRD110021</span></p>
                            <p>Age: 6 </p>
                        </div>
                        <div class="sub-details">
                            <p>Report Duraiton: 6<sup>th</sup> - 13<sup>th</sup> May</p>
                            <p>Creation Date: 2025-05-14 </p>
                        </div>
                        
                    </div>
                    <div class="attendence-bar">
                            <h3>My Attendence </h3>
                            <hr>
                            <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                </div>
                <div class="subject-grades">
                    <div class="subject-grades-head">
                        <h3>Learning Checks</h3>
                    </div>
                    <div class="subject-grades-titles">
                        <h4>No</h4>
                        <h4>Subject</h4>
                        <h4>Marks</h4>
                        <h4>Level</h4>
                    </div>
                    <div class="subject-grades-data">
                        <p>1</p>
                        <p>English</p>
                        <p>87</p>
                        <p>df</p>
                    </div>
                    <div class="subject-grades-data">
                        <p>1</p>
                        <p>English</p>
                        <p>87</p>
                        <p>df</p>
                    </div>
                    <div class="subject-grades-data">
                        <p>1</p>
                        <p>English</p>
                        <p>87</p>
                        <p>df</p>
                    </div>
                </div>
                <div class="social-behaviour">
                    <div class="social">
                        <div class="social-head">
                            <h3>Social Development</h3>
                        </div>
                        <div class="skills">
                            <p>Connecting with Peers</p>
                            <input type="range" min="0" max="100" value="50" step="20"> 
                        </div>
                        <div class="skills">
                            <p>Connecting with Peers</p>
                            <input type="range" min="0" max="100" value="50" step="20"> 
                        </div>
                    </div>
                    <div class="behaviour">
                        
                            <div class="behaviour-head">
                                <h3>Behavioural Development</h3>
                            </div>
                            <div class="behaviour-skills">
                                <div class="text-line">
                                <input type="checkbox" name="behaviour">Consistently calm and cooperative
                                </div>
                            
                            <div class="text-line">
                                <input type="checkbox" name="behaviour">Expresses emotions freely
                           </div>
                        </div>
                            
                        

                    </div>
                </div>
                <div class="general-notes">
                    <div class="note-head">
                        <h3>General Notes and Suggestions</h3>
                    </div>
                    <div class="text-area">
                        <textarea rows="3" placeholder="Give suggestions and feedbacks" id="note"></textarea>
                    </div>
                </div>
                <div class="report-footer">
                    
                    <button class="reset" id="reset-report" >Reset</button>
                    <button class="submit-report" id="submit-report">Submit</button>
                </div>
            </div>
         
       
        
        </div>
    </div>
    </div>

    <script src="<?=JS?>/Teacher/script.js"></script>
    <script src="<?=JS?>/Teacher/academic.js"></script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    
    
</body>
</html>