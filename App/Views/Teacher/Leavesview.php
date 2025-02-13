<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaves</title>
    <link rel="stylesheet" href="<?=CSS?>/Teacher/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/leaves.css?v=<?= time() ?>">
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
                        <h3>Hey Sara Britney</h3>
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

<!-- leave edit popup-->
<div class="request-leave-container" id="request-leave-container">
                <div class="leave-content">
                    <h3>Leave Request</h3>
                    <form action="#">
                    <div class="leave-body">
                        <div class="body-left">
                            <label for="leave-type">Leave Type<span>*</span></label>
                            <select name="leave-type" required>
                                <option value="Annual Leave">Annual Leave</option>
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Compassionate">Compassionate</option>
                            </select>
                            <label for="fromdate">From</label>
                            <input type="date" name="fromdate" id="fromdate" required> 
                            <label for="todate">To</label>
                            <input type="date" name="todate" id="todate" required>
                            <label for="about">About</label>
                            <textarea name="about" id="about" placeholder="Inlcude comments for your approver" rows="5" required></textarea>
                            
                        </div>
                        <div class="body-right">
                            <img src="<?=ROOT?>/assets/images/leave.png">
                            <div class="leave-info">
                                <h4>Your Request Includes</h4>
                                <hr>
                                <b><p class="para-1"><span>10 </span>days of annual leave</p></b>
                                <p class="para-2"><span>26</span> days remaining</p>
                            </div>
                        </div>
                    </div>
                    <div class="leave-footer">
                        <button class="request" type="submit">Request Now</button>
                        <button class="cancel" id="close-request" onclick="closeRequest()">Cancel</button>
                    </div>
                </form>
                </div>
            </div>

            <div class="navabr">
                <div class="navbar-left">
                    <a href="#"><h2>Hey Sara Britney</h2></a>
                    <h4>Empowering Excellence in Every Lesson!</h4>
                </div>
                <div class="navbar-right">
                <div class="alter-icon"></div>
                <a href="#" class="notification" onclick="toggleNotify()" id = "notificationIcon">
                   
                    <i class='bx bxs-bell' ></i>
                </a>
                <a href="#" class="profile">
                    <img src="<?=IMAGE?>/profilePic.png"  onclick="toggleMenu()" id="profileIcon">
                </a>
                </div>
    
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="<?=IMAGE?>/profilePic.png" alt="">
                            <h3>Sara Bretney</h3>
                        </div>
                        <hr>
    
                        <a href="<?=ROOT?>/Teacher/Profile" class="sub-menu-link">
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
            <div class="backgorund-overlay" ></div>
            <div class="leave-page">
                <div class="leave-page-header">
                    <div class="leave-page-header-group">
                        <i class="fa-regular fa-calendar"></i>
                        <h3>Leave History</h3>
                    </div>
                    
                    <hr>
                </div>
                <div class="leave-table">
                    <div class="leave-table-title">
                        <h4>Leave Type</h4>
                        <h4>Start Date</h4>
                        <h4>End Date</h4>
                        <h4>Duration</h4>
                        <h4>Status</h4>
                        <h4>Action</h4>
                    </div>
                    <div class="leave-row">
                        <p>Annual Leave</p>
                        <p>25/03/2025</p>
                        <p>25/03/2025</p>
                        <p class="num">2</p>
                        <div class="approve">Approved</div>  
                        <button class="edit-btn" onclick="openRequest()" id="open-request">Edit</button>                      
                    </div>
                    <div class="leave-row">
                        <p>Annual Leave</p>
                        <p>10/06/2025</p>
                        <p>11/06/2025</p>
                        <p class="num">1</p>
                        <div class="approve">Approved</div>
                        <button class="edit-btn" onclick="">Edit</button>      
                        
                    </div>
                    <div class="leave-row">
                        <p>Annual Leave</p>
                        <p>05/04/2025</p>
                        <p>06/04/2025</p>
                        <p class="num">1</p>
                        <div class="rejected">Rejected</div> 
                        <button class="edit-btn" onclick="">Edit</button>     
                    </div>
                    <div class="leave-row">
                        <p>Sick Leave</p>
                        <p>20/12/2024</p>
                        <p>24/12/2025</p>
                        <p class="num">4</p>
                        <div class="approve">Approved</div>  
                        <button class="edit-btn" onclick="">Edit</button>    
                    </div>
                    <div class="leave-row">
                        <p>Compassinate Leave</p>
                        <p>06/01/2025</p>
                        <p>07/01/2025</p>
                        <p class="num">1</p>
                        <div class="approve">Approved</div>    
                        <button class="edit-btn" onclick="">Edit</button>  
                    </div>
                </div>
            </div>
         
       
            
        </div>
    </div>
    </div>

    <script src="<?=JS?>/Teacher/script.js"></script>
    <script>
        const openRequest = ()=>{
    const openBtn = document.getElementById("open-request");
    const requestContainer = document.getElementById("request-leave-container");

    if(openBtn && requestContainer){
        requestContainer.classList.add("show-request");
    }
};

// CLOSE LEAVE REQUEST  POPUP

const closeRequest = ()=>{
    const closeBtn = document.getElementById("close-request");
    const requestContainer = document.getElementById("request-leave-container");
    requestContainer.classList.remove("show-request");
}

    </script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    
    
</body>
</html>