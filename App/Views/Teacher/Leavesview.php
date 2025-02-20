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
    



        
        <div class="wrapper-1">

             <!-- ********* REQUEST LEAVES **********-->

            <div class="request-leave-container" id="request-leave-container">
                <div class="leave-content">
                    <h3>Leave Request</h3>
                    <form action="<?=ROOT?>/Teacher/Leaves/addLeave" method = "POST">
                    <div class="leave-body">
                        <div class="body-left">
                            <label for="Leave_Type">Leave Type<span>*</span></label>
                            <select name="Leave_Type" required>
                                <option value="Annual Leave">Annual Leave</option>
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Compassionate">Compassionate</option>
                            </select>
                            <label for="Start_Date">From</label>
                            <input type="date" name="Start_Date" id="Start_Date" required> 
                            <label for="End_Date">To</label>
                            <input type="date" name="End_Date" id="End_Date" required>
                            <label for="Description">About</label>
                            <textarea name="Description" id="Description" placeholder="Inlcude comments for your approver" rows="5" required></textarea>
                            
                        </div>
                        <div class="body-right">
                            <img src="<?=ROOT?>/assets/images/leave.png">
                            <div class="leave-info">
                                <h4>Your Request Includes</h4>
                                <hr>
                                <b><p class="para-1"><span>10 </span>days of annual leave</p></b>
                                <p class="para-2"><span>
                                    </span> days remaining</p>
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


             <!-- ********* EDIT REQUEST LEAVES **********-->

             <div class="request-leave-edit" id="request-leave-edit">
                <div class="edit-leave-content">
                    <h3>Leave Request</h3>
                    <form action="<?=ROOT?>/Teacher/Leaves/editLeave" method = "POST">
                    <div class="edit-leave-body">
                        <div class="body-left">
                            
                            <input type="hidden" id="leave-id" name="id">
                            <label for="Leave_Type">Leave Type<span>*</span></label>
                            <select name="Leave_Type" required>
                                <option value="Annual Leave">Annual Leave</option>
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Compassionate">Compassionate</option>
                            </select>
                            <label for="Start_Date">From</label>
                            <input type="date" name="Start_Date" id="Start_Date" required> 
                            <label for="End_Date">To</label>
                            <input type="date" name="End_Date" id="End_Date" required>
                            <label for="Description">About</label>
                            <textarea name="Description" id="Description" placeholder="Inlcude comments for your approver" rows="5" required></textarea>
                            
                        </div>
                        <div class="body-right">
                            <img src="<?=ROOT?>/assets/images/leave.png">
                            <div class="leave-info">
                                <h4>Your Request Includes</h4>
                                <hr>
                                <b><p class="para-1"><span>10 </span>days of annual leave</p></b>
                                <p class="para-2"><span>
                                    </span> days remaining</p>
                            </div>
                        </div>
                    </div>
                    <div class="leave-footer">
                        <button class="edit-request" type="submit">Request Now</button>
                        <button class="edit-cancel" id="close-edit-request" onclick="closeEditLeaves(event)">Cancel</button>
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
           
            <div class="leave-page">
                <div class="leave-page-header">
                    <div class="leave-page-header-group">
                        <i class="fa-regular fa-calendar"></i>
                        <h3>Leave History</h3>
                        <div class="req-btn">
                            <button class="new-req" id="open-request" onclick="openRequest()">New Request</button>
                        </div>
                    </div>
                    
                    <hr>
                    <?php if (!empty($errors)): ?>
            <div class="error-messages">
                <ul>
                    <?php foreach ($errors as $field => $error): ?>
                        <li><strong><?= ucfirst($field) ?>:</strong> <?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
                <?php endif; ?>
                <?php if (isset($message)): ?>
                    <div class="success-message">
                        <p><?= $message ?></p>
                    </div>
                <?php endif; ?>
                </div>
                <div class="leave-table">
                    <div class="leave-table-title">
                        <h4><i class="fa-solid fa-file-alt"></i>Leave Type</h4>
                        <h4><i class="fa-solid fa-calendar-plus"></i>Start Date</h4>
                        <h4><i class="fa-solid fa-calendar-check"></i>End Date</h4>
                        <h4><i class="fa-solid fa-hourglass-half"></i>Duration</h4>
                        <h4><i class="fa-solid fa-info-circle"></i>Status</h4>
                        <h4><i class="fa-solid fa-cogs"></i>Action</h4>
                    </div>
                    <?php if(isset($leaves)):?>
                        <?php foreach($leaves as $leave):?>
                            <div class="leave-row">
                                <p><?=$leave->Leave_Type?></p>
                                <p><?=$leave->Start_Date?></p>
                                <p><?=$leave->End_Date?></p>
                                <p class="num"><?=$leave->Duration?></p>
                                <div class="approve" ><?=$leave->Status?></div>  
                                <button class="edit-btn"  onclick='openEditLeaves(<?= htmlspecialchars(json_encode($leave)) ?>)'>Edit</button>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                 
                </div>
            </div>
    

         <!-- <br><br><br><br><br><br><br><br><br><br>
         sdsdsds -->
       
            
        </div>
    </div>
    </div>

    <script src="<?=JS?>/Teacher/script.js"></script>
    <script src="<?=JS?>/Teacher/leaves.js"></script>
    <script>



// // OPEN LEAVE REQUEST POPUP
// const openRequest = () => {
//     const requestContainer = document.getElementById("request-leave-container");
//     if (requestContainer) {
//         requestContainer.classList.add("show-request");
//     }
// };

// // CLOSE LEAVE REQUEST POPUP
// const closeRequest = () => {
//     const requestContainer = document.getElementById("request-leave-container");
//     if (requestContainer) {
//         requestContainer.classList.remove("show-request");
//     }
// };

// OPEN EDIT LEAVES POPUP
const openEditLeaves = (leave) => {
    try {
        // Parse the leave object if it's a string
        if (typeof leave === 'string') {
            leave = JSON.parse(leave);
        }
        
        const editContainer = document.getElementById("request-leave-edit");
        
        if (editContainer) {
            // Show the edit container by adding the class
            editContainer.classList.add("show-request-edit");
            
            // Set form field values from the leave object
            if (document.getElementById('leave-id')) {
                document.getElementById('leave-id').value = leave.id;
            }
            
            // Get all the Start_Date fields in the edit form
            const startDateInputs = editContainer.querySelectorAll('#Start_Date');
            startDateInputs.forEach(input => input.value = leave.Start_Date);
            
            // Get all the End_Date fields in the edit form
            const endDateInputs = editContainer.querySelectorAll('#End_Date');
            endDateInputs.forEach(input => input.value = leave.End_Date);
            
            // Get all the Description fields in the edit form
            const descriptionInputs = editContainer.querySelectorAll('#Description');
            descriptionInputs.forEach(input => input.value = leave.Description);
            
            console.log("Successfully opened edit form with data:", leave);
        } else {
            console.error("Edit container not found!");
        }
    } catch (error) {
        console.error("Error opening edit form:", error);
        console.error("Leave data:", leave);
    }
};

// CLOSE EDIT LEAVES POPUP
const closeEditLeaves = (event) => {
    if (event) {
        event.preventDefault();
    }
    const editContainer = document.getElementById("request-leave-edit");
    if (editContainer) {
        editContainer.classList.remove("show-request-edit");
    } else {
        console.error("Edit container not found!");
    }
};
    </script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    
    
</body>
</html>