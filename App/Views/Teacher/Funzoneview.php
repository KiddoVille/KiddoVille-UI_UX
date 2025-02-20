<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="<?=CSS?>/Teacher/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/funzone.css?v=<?= time() ?>">
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
                    <a href="<?=ROOT?>/Teacher/Funzone" class="sidebar-list-item" id="home-link">
                    <i class="fa-solid fa-puzzle-piece"></i>
                        <span class="text">Funzone</span>
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

             <!-- ********* FUN ZONE CONTENT ADDING **********-->


            <div class="funzone-popup-container" id="funzone-popup-container" >
                <form action="" method="post">
                <div class="funzone-content">
                    <div class="funzone-header">
                        <i class="fa-solid fa-upload"></i>
                        <h3>Upload Resources</h3>
                        <img src="<?=ROOT?>/assets/images/logo.png">
                    </div>
                    

                    <div class="drag-and-drop">
                        <div class="foramts">
                            <i class="fa-regular fa-file"></i>
                            <i class="fa-regular fa-image"></i>
                            <i class="fa-regular fa-file-lines"></i>
    
                        </div>
                        <h3>Drag and drop files to upload or </h3>
                        <button class="browse">Browse</button>
                        <p>Supported Files: JPG, PNG, PDF, DOCX</p>
                    </div>
                    <div class="funzone-footer">
                        <h3>Import from URL</h3>
                        <input type="text" name="url" placeholder="Add file URL"/>
                        <p>You will be notified once the import is successful</p>
                    </div>
                    <div class="funzone-buttons">
                        <button class="cancel"  onclick="closeFunZone()">Cancel</button>
                        <button class="done" id="close-funzone" type="submit">Done</button>
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
            <div class="funzone-page">
                <div class="funzone-page-header">
                <i class="fa-solid fa-puzzle-piece"></i>
                    <h3>Fun Zone</h3>  
                                        
                </div>
                <hr>
                

                <div class="filter-group">
                    <div class="filters">
                        <input type="text" name="search" placeholder="Search Name...">
                        
                        <div class="age-select">
                            <label for="date">Age Group</label>
                            <select name="age-group">
                                <option value="3-5">3-5</option>
                                <option value="6-9">6-9</option>
                                <option value="10-13">10-13</option>
                            </select>
                        </div>
                        <button class="upload" id="open-funzone" onclick="showFunzone()"><i class="fa-solid fa-plus"></i>Upload a file</button>
                    </div>
                    
                </div> 

                <div class="student-table">
                    
                    <div class="student-table-title">
                        <h4 class="file-name"><i class="fa-solid fa-file"></i>File Name</h4>
                        <h4 class="status"><i class="fa-solid fa-check"></i>Status</h4>
                        <h4 class="last-md"><i class="fa-solid fa-clock"></i>Last Modified</h4>
                        <h4 class="up"><i class="fa-solid fa-user"></i>Uploaded By</h4>
                        <h4 class="actions"><i class="fa-regular fa-circle-check"></i>Actions</h4>
                    </div>
                    <div class="table-rows">
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/mp4.png">
                        <p class="row-items name">Forest Poem</p></div>
                        <p class="row-items center small">34 Views</p>
                        <p class="row-items center opacity">2025-03-14</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>
                            </button>
                        </div>                      
                        </div>
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/pdf.png">
                        <p class="row-items name">Forest Poem</p></div>
                        <p class="row-items center small">12 Views</p>
                        <p class="row-items center opacity">2025-02-20</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>
                            </button>
                        </div>                        
                        </div>
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/pdf.png">
                        <p class="row-items name">Reading the Rabbit</p></div>
                        <p class="row-items center small">6 Views</p>
                        <p class="row-items center opacity">2025-02-10</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>
                            </button>
                        </div>                        
                        </div>
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/mp4.png">
                        <p class="row-items name">Farmer's Village</p></div>
                        <p class="row-items center small">31 Views</p>
                        <p class="row-items center opacity">2025-01-21</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>
                            </button>
                        </div>                       
                        </div>
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/jpg.png">
                        <p class="row-items name">Princess the Isebella</p></div>
                        <p class="row-items center small">45 Views</p>
                        <p class="row-items center opacity">2025-01-6</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>
                            </button>
                        </div>                        
                        </div>
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/mp4.png">
                        <p class="row-items name">Math with Fun</p></div>
                        <p class="row-items center small">60 Views</p>
                        <p class="row-items center opacity">2024-12-15</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>
                            </button>
                        </div>                        
                        </div>
                        <div class="student-row">
                        <div class="first-row">
                        <img src="<?=IMAGE?>/mp3.png">
                        <p class="row-items name">Speaking the simple english</p></div>
                        <p class="row-items center small">14 Views</p>
                        <p class="row-items center opacity">2024-11-15</p>
                        <div class="upload">
                            <img src="<?=IMAGE?>/profilePic.png">
                            <div class="upld-person">
                                <p class="name">Jane Strovert</p>
                                <p class="email">janestr567@gmail.com</p>    
                            </div>
                        </div>
                        
                       
                        <div class="actions center">
                            <a href="#"><button type="button" class="edit-btn">Edit
                            <i class='bx bxs-edit-alt' ></i>
                            </button></a>
                            <button type="button" class="dlt-btn">Delete
                            <i class='bx bx-trash-alt' ></i>    
                            </button>
                        </div>                     
                        </div>
                    </div>
                   
                </div>
            </div>
            
       
        </div>
    </div>
    </div>
    


    
    <script src="<?=JS?>/Teacher/script.js"></script>
    <script></script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    

    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
</body>
</html>