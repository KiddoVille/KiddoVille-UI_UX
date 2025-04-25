<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS?>/Maid/maid_leaves.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Maid/checklist.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Maid/main.css?v=<?= time() ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>Maid Leaves</title>
</head>
<body>
    <div class="main">
        <div class="side_bar">
            <div class="userblock">
                <div class="photo">
                    <img alt="User profile picture" height="50" src="./assets/profilePic.png" width="50"/>
                </div>
                <div class="username">
                    <h3>
                        Kayla Wood
                       </h3>
                       <p>
                        Maid
                       </p>
                </div>
            </div>
            <div class="directions">
                <div class="direction-items">
                    <a href="<?=ROOT?>/Maid/Home"><div class="dashboard">
                        
                        <i class="fas fa-tachometer-alt">
                        </i>
                        <span>&nbsp;&nbsp; Dashboard</span>
                      
                    </div> </a>
                   
                     <a href="<?=ROOT?>/Maid/Leaves"><div class="leaves">
                        <i class="fas fa-calendar-check">
                        </i>
                       <span>&nbsp;&nbsp; Leaves</span>
                     </div></a>
                    <hr>
                    <div class="help">
                        <i class="fas fa-question-circle">
                        </i>
                        <span>&nbsp;&nbsp; Help</span>
                    </div>
                    </div>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <div class="header-title">
                    <h2>
                        Leaves
                       </h2>
                       <p>
                        12/08/2025
                       </p>
                </div>
                <div class="field_input">
                    <i class="fas fa-search">
                    </i>
                  <input placeholder="Search" type="text"/>
                </div>
                <div class="subscription">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="photo2">
                    <img alt="User profile picture" height="50" src="./assets/profilePic.png" width="50"/>
                </div>
            </div>
            <div class="detailed_content">
                        <div class="make_background">
                          
                          <div class="payment_table">
                            <div class="table_header">
                                <div class="topic"><span>Maid Leave Details</span></div>
                                
                                <a href=""><div class="paymentbutton">
                                    <span>Request &nbsp;Leave</span>
                                </div></a>
                            </div>
                            <div class="hr_reset">
                            <hr>
                            </div>
                            <div class="table_filters">
                                 <div class="date_entry">
                                    <input type="date"/>
                                 </div>
                            </div>
                            <div class="leave_history_box">
                                <div class="leave_history_box_header">
                                    <div class="leave_type_h">
                                        <h4>Leave Type</h4>
                                    </div>
                                    <div class="start_date_h">
                                        <h4>Start Date</h4>
                                    </div>
                                    <div class="end_date_h">
                                        <h4>End Date</h4>
                                    </div>
                                    <div class="duration_h">
                                        <h4>Duration</h4>
                                    </div>
                                    <div class="status_h">
                                        <h4>Status</h4>
                                    </div>
                                </div>
                                <div class="leave_history_box_annual">
                    
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>25/03/2025</p>
                                    </div>
                                    <div class="end_date">
                                        <p>25/03/2025</p>
                                    </div>
                                    <div class="duration">
                                        <p>1</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_sick">
                                    <div class="leave_type">
                                        <p>Sick Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>02/01/2025</p>
                                    </div>
                                    <div class="end_date">
                                        <p>03/01/2025</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_compassionate">
                                    <div class="leave_type">
                                        <p>Compassionate</p>
                                    </div>
                                    <div class="start_date">
                                        <p>20/12/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>22/12/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>3</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_decline"><span>Declined</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_sick2">
                                    <div class="leave_type">
                                        <p>Sick Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_annual2">
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_annual2">
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_annual2">
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_annual2">
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_annual2">
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                <div class="leave_history_box_annual2">
                                    <div class="leave_type">
                                        <p>Annual Leave</p>
                                    </div>
                                    <div class="start_date">
                                        <p>10/11/2024</p>
                                    </div>
                                    <div class="end_date">
                                        <p>11/11/2024</p>
                                    </div>
                                    <div class="duration">
                                        <p>2</p>
                                    </div>
                                    <div class="status">
                                        <div class="state_approve"><span>Approved</span></div> 
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="group"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
         
        </div>
    </div>
    <script src='./test.js' defer></script>
    <script src = './receptionist_attendance.js' defer></script>
</body>
</html>