<!DOCTYPE html>
<html lang="en">
<head>
    <title>Meal Plan</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Child/meal.css">
    <link rel="stylesheet" href="<?=CSS?>/Child/Main.css">
    <script src="<?=JS?>/Child/Profile.js"></script>
    <script src="<?=JS?>/Child/MessageDropdown.js"></script>
    <script src="<?=JS?>/Child/Navbar.js"></script>
    <script src="<?=JS?>/Child/Taskbar.js"></script>
</head>
<body style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2>Dashboard</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/Home">
                        <i class="fas fa-home"></i>     <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i>        <span>Reservation</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Child/Meal">
                        <i class="fas fa-utensils"></i>           <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/Allevent">
                        <i class="fas fa-calendar-alt"></i>      <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/package">
                        <i class="fas fa-box"></i>               <span>Package</span>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none; color:purple"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/family.jpg" style="width: 60px; height:60px; border-radius: 30px;">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
                        Explore your children's activities and progress!
                    </p>
                    <ul>
                        <li class="hover-effect first select-child">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <i class="fa fa-bars" id="minimize-btn" style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
                <div class="name">
                    <h1>Hey Thilina</h1>
                    <p>Let’s do some productive activities today</p>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                    <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
                </div>
                <div class="bell-con" style="cursor: pointer;" id="bell-container">
                    <i class="fas fa-bell bell-icon" style="margin-left: -350px;"></i>
                    <div class="message-dropdown" id="messageDropdown" style="display: none;">
                        <ul>
                            <li><p>New Message 1 <i class="fas fa-paper-plane"></i></p><p class="content">content like a message</p></li>
                            <li><p>New Message 2 <i class="fas fa-paper-plane"></i></p><p class="content">content like a message</p></li>
                            <li><p>New Message 3 <i class="fas fa-paper-plane"></i></p><p class="content">content like a message</p></li>
                            <li><p>New Message 4 <i class="fas fa-paper-plane"></i></p><p class="content">content like a message</p></li>
                            <li><p>New Message 5 <i class="fas fa-paper-plane"></i></p><p class="content">content like a message</p></li>
                            <li><p>New Message 6 <i class="fas fa-paper-plane"></i></p><p class="content">content like a message</p></li>
                        </ul>
                    </div>
                </div>
                <div class="message-numbers"><p>2</p></div>
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>                    
                </div>
            </div>

            <div class="container-food">
                <img src="<?=IMAGE?>/meal.png" style="margin-right: 500px; margin-left: -480px; margin-bottom: -120px; margin-top: -50px;">
                <div class="title">KIDDO VILLE Food plan</div>
                <div class="navigation">
                    <button><i class="fas fa-chevron-left"></i></button>
                    <span>Aug 04 - Aug 07</span>
                    <button><i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                        </tr>
                        <tr>
                            <td>Breakfast</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Breakfast</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Breakfast</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                    </table>
                </div>
                <img src="<?=IMAGE?>/snack.png" style="margin-left: 800px; margin-right: -200px; margin-top: -80px; margin-bottom: -90px;">
                <!-- Add Snack Section -->
                <div class="title">KIDDO VILLE SNACK PLAN</div>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                        </tr>
                        <tr>
                            <td>Snack</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Snack</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Snack</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tasks" id="taskbtn">
                <i class="fas fa-chevron-left" id="taskicon"></i>
            </div>
        </div>
        <a href="../Messager/Message.html" class="chatbox">
            <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
            <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                <p> 2</p>
            </div>
        </a>
        <div class="profile-card" id="profileCard">
            <img src="../../../Assets/back-arrow-2.svg" alt="back-arrow" style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100" class="profile"/>
            <h2>Thilina Perera</h2>
            <p>Student    RS0110657</p>
            <button class="profile-button" onclick="window.location.href ='<?=ROOT?>/Child/ChildProfile'">Profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/Child/ParentProfile'">Parent profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/Child/GuardianProfile'">Guardian profile</button>
            <button class="secondary-button">Medications</button>
            <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/Main/Home'">LogOut</button>
        </div>
        <div class="task-container" id="tasknavbar" style="position: fixed;">
            <h1 style="margin-top: 20px;"> Quick Tasks Hub </h1>
            <div class="card">
                <h2>Calendar</h2>
                <div class="calendar-header">
                    <a href="#">&lt; October</a>
                    <h3>November 2024</h3>
                    <a href="#">December &gt;</a>
                </div>
                <table class="calendar-table">
                    <thead>
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><span class="today">2</span></td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <h2>Upcoming Tasks</h2>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">Math Homework</p>
                        <span class="task-deadline">Due: Nov 5, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">History Essay</p>
                        <span class="task-deadline">Due: Nov 10, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">Science Project</p>
                        <span class="task-deadline">Due: Nov 15, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
            <div class="card">
                <h2>Main menu</h2>
                <a href="#" class="main-menu-item">
                    <i class="fas fa-bullhorn icon-announcements"></i>
                    <span>Site announcements</span>
                </a>
                <a href="#" class="main-menu-item">
                    <i class="fas fa-globe icon-library"></i>
                    <span>KIDDOVILLE Funzone</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
