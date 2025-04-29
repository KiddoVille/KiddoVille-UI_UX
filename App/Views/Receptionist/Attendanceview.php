<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?=CSS?>/Receptionist/Attendancedashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Receptionist/maincss.css?v=<?= time() ?>">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
   
<title>Receptionist</title>
</head>
<body>
    <div class="main">
        <div class="side_bar">
            <div class="userblock">
                <div class="photo">
                    <img alt="User profile picture" height="50" src="<?=ROOT?>/assets/images/profilePic.png" width="50"/>
                </div>
                <div class="username">
                    <h3>
                        Kayla Wood
                       </h3>
                       <p>
                        Receptionist
                       </p>
                </div>
            </div>
            <div class="directions">
                <div class="direction-items">
                <a href="<?=ROOT?>/Receptionist/Home"><div class="dashboard">
                    
                    <i class="fas fa-tachometer-alt">
                    </i>
                    <span>&nbsp;&nbsp; Dashboard</span>
                  
                </div> </a>
                 <a href="<?=ROOT?>/Receptionist/Attendance"><div class="mark_attendance">
                    <i class="fas fa-check-circle">
                    </i>
                   <span>&nbsp;&nbsp; Attendance</span>
                    
                 </div></a>
                 
                 <a href="<?=ROOT?>/Receptionist/Payment"><div class="payment">
                    <i class="fas fa-money-bill-wave">
                    </i>
                    <span>&nbsp;&nbsp; Payment</span>
                </div></a>
                <a href="<?=ROOT?>/Receptionist/Visitor"><div class="visitor">
                    <i class="fas fa-users">
                    </i>
                    <span>&nbsp;&nbsp; visitort</span>
                </div></a>
                <a href="<?=ROOT?>/Receptionist/Leaves"><div class="leaves">
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
                        Attendance
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
                    <img alt="User profile picture" height="50" src="<?=ROOT?>/assets/images/profilePic.png" width="50"/>
                </div>
            </div>
            <div class="detailed_content">
                        <div class="make_background">
                          <div class="weeklygraph_todaypresents">
                            <div class="weekly_graph">
                                <div class="weekly_texts">
                                    <span class="total_topic">Total</span>
                                    <div class="number_and_text">
                                        <span class="number">245</span>
                                        <span class="text">THIS<br>WEEK</span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="graph">
                                <div class="bars-box">
                                  <div class="bar bar-1"></div>
                                  <div class="bar bar-2"></div>
                                  <div class="bar bar-3"></div>
                                  <div class="bar bar-4"></div>
                                  <div class="bar bar-5"></div>
                                  <div class="bar bar-6"></div>
                                  <div class="bar bar-7"></div>
                                </div>
                                <div class="day-box">
                                  <div class="day months-1">Mon</div>
                                  <div class="day day-2">Tue</div>
                                  <div class="day day-3">Wed</div>
                                  <div class="day day-4">Thu</div>
                                  <div class="day day-5">Fri</div>
                                  <div class="day day-6">Sat</div>
                                  <div class="day day-7">Sun</div>
                                </div>
                              </div>
                            </div>
                            <div class="last_marked">
                                 <span class="last_marked_topic">Previous Check-In</span>
                                 <div class="lastmarkedchilds">
                                    <div class="profile_image">
                                        <img alt="User profile picture" height="50" src="<?=ROOT?>/assets/images/profilePic-1.png" width="50"/>
                                    </div>
                                    <div class="name_time">
                                        <span class="lastmarkedname">Thilina Perera</span>
                                    <span class="lastmarkedtime">8:41 PM</span>
                                    </div>
                                </div>
                                <hr>
                                 <div class="lastmarkedchilds">
                                    <div class="profile_image">
                                        <img alt="User profile picture" height="50" src="<?=ROOT?>/assets/images/profilePic-1.png" width="50"/>
                                    </div>
                                    <div class="name_time">
                                        <span class="lastmarkedname">Nishadini Perea </span>
                                    <span class="lastmarkedtime">8:30 PM</span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="second_part">
                            <div class="attendance_table">
                                <div class="table_header">    
                                    <div class="topic"><span>Mark Attendance</span></div>
                                </div>
                                <hr>
                                <div class="table_filters">
                                    <div class="search_line">
                                        <form class="field_input2" action = "<?=ROOT?>/Receptionist/Attendance/search" method="POST">
                                            <i class="fas fa-search">
                                            </i>
                                          <input placeholder="Search Index......" type="text" name="ChildID"/>
                                        </form>
                                     </div>
                                     <div class="date_entry">
                                        <input type="date"/>
                                     </div>
                                     <div class="select_age">
                                        <form class="select-agegroup" method="POST" action="<?=ROOT?>/Receptionist/attendance" >
                                            <select class="select" id = "group" name="ageGroup" onchange="this.form.submit()" >
                                                <option class="option" value='Default'>Age Group</option>
                                                <option class="option" value='2-3'>AGE 2-3</option>
                                                <option class="option" value='4-5'>AGE 4-5</option>
                                                <option class="option" value='6-7'>AGE 6-7</option>
                                                <option class="option" value='8-9'>AGE 8-9</option>
                                                <option class="option" value='10-11'>AGE 10-11</option>
                                                <option class="option" value='12-13'>AGE 12-13</option>
                                                <option class="option" value='14-15'>AGE 14-15</option>
                                            </select>
                                        </form>
                                     </div>
                                </div>
                            <div class="table_topics">
                                <div class="head reg_id">
                                    <i class="fas fa-id-card" title="Registration ID"></i>
                                    <span>Registration No</span> 
                                </div>
                                <div class="head name">
                                    <i class="fas fa-user" title="Child Name"></i>
                                    <span>Name</span>
                                </div>
                                <div class="head check_in">
                                    <i class="fas fa-clock fa-2x" ></i>
                                    <span>Check-In</span>
                                </div>
                                <div class="head check_Out">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <span>Check-Out</span>
                                </div>
             
                            </div>
                            <div class="table_columns">
                        <?php if (!empty($children)): ?>
                            <?php foreach ($children as $child): ?>
                            <div class="table_column">
                                <div class="colum reg_id">
                                    <span>#00<?= htmlspecialchars($child->ChildID) ?></span> 
                                </div>
                                <div class="colum name">
                                    <img alt="card icon" height="30px" src="<?=ROOT?>/assets/images/profilePic-1.png">
                                    <span><?= htmlspecialchars($child->First_Name) ?></span>
                                </div>
                                <div class="colum check_in">
                                
                                        <?php if(isset($child->Start_Time) && $child->Start_Time !== NULL): ?>
                                           
                                            <span><?= htmlspecialchars($child->Start_Time) ?></span>
                                         <?php else: ?>
                                            
                                            <form class="before_mark attendanceButton" method="POST" action="<?=ROOT?>/Receptionist/Attendance/markAttendance">
                                                <input type="hidden" name="childID" value="<?= htmlspecialchars($child->ChildID) ?>">
                                                <button type="submit">Mark</button>
                                            </form>
                                        <?php endif; ?>

                                    
                                </div>
                                <div class="colum Check-in" >
                                <?php if(isset($child->End_Time) && $child->End_Time !== NULL): ?>
                                           
                                           <span><?= htmlspecialchars($child->End_Time) ?></span>
                                        <?php else: ?>
                                           
                                           <form class="before_mark attendanceButton" method="POST" action="<?=ROOT?>/Receptionist/Attendance/finAttendance">
                                               <input type="hidden" name="childID" value="<?= htmlspecialchars($child->ChildID) ?>">
                                               <button type="submit">Mark</button>
                                           </form>
                                       <?php endif; ?>
                                   
                                </div>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                        </div>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
            
        </div>
    </div>
    <script>
           
       
    </script>

    <script src="<?=JS?>/Receptionist/attendance_dashboard.js"></script>
    <!-- <script src="<?=JS?>/Receptionist/receptionist_attendance.js"></script> -->
    <script src="<?=JS?>/Receptionist/mark_attendance.js"></script>
</body>
</html>