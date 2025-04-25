<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS?>/Maid/main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Maid/dashboard.css?v=<?= time() ?>">
    <link href = "maid_dashboard.css" rel = "stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>Document</title>
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
                <a href=""><div class="dashboard">
                    
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
                       Dashboard
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
                            <div class="group">
                                <div class="group_topic">
                                    <span class="header_topic">Group Members</span>
                                </div>
                                <div class="table_topic">
                                    <div class="child_topic">
                                        <span>Child</span>
                                    </div>
                                    <div class="skill">
                                        <span>Attendance</span>
                                    </div>
                                    <div class="profile">
                                        <span>Profile</span>
                                    </div>
                                </div>
                                <div class="members">
                                    <div class="member">
                                        <div class="child_row">
                                            <div class="photo_child">
                                                <img alt="User profile picture" height="35" width="35" src="./assets/profilePic-1.png" width="50"/>
                                            </div>
                                            <div class="name">
                                                <span>Thilina Perera</span>
                                            </div>
                                        </div>
                                       <div class="skill_content">
                                        <div class="skill_line">
                                            <div class="skill_percentage"></div>   
                                        </div>
                                        <span>75%</span>
                                       </div>
                                       <div class="navigation_button">
                                            <div class="view_profile">
                                                <span>Profile</span>
                                            </div>
                                       </div>
                                       
                                    </div>
                                    <hr>
                                    <div class="member">
                                        <div class="child_row">
                                            <div class="photo_child">
                                                <img alt="User profile picture" height="35" width="35" src="./assets/profilePic-1.png" width="50"/>
                                            </div>
                                            <div class="name">
                                                <span>Thilina Perera</span>
                                            </div>
                                        </div>
                                       <div class="skill_content">
                                        <div class="skill_line">
                                            <div class="skill_percentage"></div>   
                                        </div>
                                        <span>75%</span>
                                       </div>
                                       <div class="navigation_button">
                                            <div class="view_profile">
                                                <span>Profile</span>
                                            </div>
                                       </div>
                                       
                                    </div>
                                    <hr>
                                    <div class="member">
                                        <div class="child_row">
                                            <div class="photo_child">
                                                <img alt="User profile picture" height="35" width="35" src="./assets/profilePic-1.png" width="50"/>
                                            </div>
                                            <div class="name">
                                                <span>Thilina Perera</span>
                                            </div>
                                        </div>
                                       <div class="skill_content">
                                        <div class="skill_line">
                                            <div class="skill_percentage"></div>   
                                        </div>
                                        <span>75%</span>
                                       </div>
                                       <div class="navigation_button">
                                            <a href="studenprofile.html"><div class="view_profile">
                                                <span>Profile</span>
                                            </div></a>
                                       </div>
                                       
                                    </div>
                                    <hr>
                                    <div class="member">
                                        <div class="child_row">
                                            <div class="photo_child">
                                                <img alt="User profile picture" height="35" width="35" src="./assets/profilePic-1.png" width="50"/>
                                            </div>
                                            <div class="name">
                                                <span>Thilina Perera</span>
                                            </div>
                                        </div>
                                       <div class="skill_content">
                                        <div class="skill_line">
                                            <div class="skill_percentage"></div>   
                                        </div>
                                        <span>75%</span>
                                       </div>
                                       <div class="navigation_button">
                                            <div class="view_profile">
                                                <span>Profile</span>
                                            </div>
                                       </div>
                                       
                                    </div>
                                    <hr>
                                    <div class="member">
                                        <div class="child_row">
                                            <div class="photo_child">
                                                <img alt="User profile picture" height="35" width="35" src="./assets/profilePic-1.png" width="50"/>
                                            </div>
                                            <div class="name">
                                                <span>Thilina Perera</span>
                                            </div>
                                        </div>
                                       <div class="skill_content">
                                        <div class="skill_line">
                                            <div class="skill_percentage"></div>   
                                        </div>
                                        <span>75%</span>
                                       </div>
                                       <div class="navigation_button">
                                            <div class="view_profile">
                                                <span>Profile</span>
                                            </div>
                                       </div>
                                       
                                    </div>
                                    <hr>
                                    
                                </div>
                            </div>
                            
                           
                            <div class="schedule">
                                 <h3>
                                  Activity Schedule
                                 </h3>
                                 <table>
                                  <tr>
                                   <th>
                                    Date
                                   </th>
                                   <th>
                                    Age Group
                                   </th>
                                  </tr>
                                  <tr>
                                   <td>
                                   <input type="date"/>
                                   </td>
                                   <td>
                                    <div class="select-agegroup">
                                        <div class="select">
                                            <span>Age Group</span>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="option-list">
                                            <div class="option">Age 2-5</div>
                                            <div class="option">Age 6-9</div>
                                            <div class="option">Age 10-13</div>
                                        </div>
                                    </div>
                                   </td>
                                  </tr>
                                 </table>
                                 <div class = "activity"><table>
                                    <tr>
                                     <th>
                                      Hours
                                     </th>
                                     <th>
                                      Activity
                                     </th>
                                     <th>
                                      Status
                                     </th>
                                    </tr>
                                    <tr>
                                     <td>
                                      08:00 - 09:00 AM
                                     </td>
                                     <td>
                                      Breakfast
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_1">
                                          <label for = "check_1" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      09:00 - 10:00 AM
                                     </td>
                                     <td>
                                      Creative Play
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_2">
                                          <label for = "check_2" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      10:00 - 11:00 AM
                                     </td>
                                     <td>
                                      Creative Play
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_3">
                                          <label for = "check_3" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      11:00 - 12:00 AM
                                     </td>
                                     <td>
                                      Story Time
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_4">
                                          <label for = "check_4" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      12:00 - 01:00 PM
                                     </td>
                                     <td>
                                      Lunch
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_5">
                                          <label for = "check_5" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      01:00 - 02:00 PM
                                     </td>
                                     <td>
                                      Bed Time
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_6">
                                          <label for = "check_6" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      02:00 - 03:00 PM
                                     </td>
                                     <td>
                                      Basic Learning Activities
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_7">
                                          <label for = "check_7" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>
                                      03:00 - 04:00 PM
                                     </td>
                                     <td>
                                      Tea Time
                                     </td>
                                     <td>
                                      <div class = "holder">
                                          <input class="tog-but" type="checkbox" id="check_8">
                                          <label for = "check_8" class="tog"></label>
                                      </div>
                                     </td>
                                    </tr>
                                   </table>
                                   <div class = "reset">
                                    <button id = "rset-button">Reset</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script src="./receptionist_attendance.js"></script>
            <script src = './maid_dashboard_skill.js' ></script>
</body>
</html>