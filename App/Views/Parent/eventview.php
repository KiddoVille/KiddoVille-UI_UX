<html>
<head>
    <title>Events</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Parent/event.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Main.css?v=<?= time() ?>">
    <script src="<?=JS?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/event.js?v=<?= time() ?>"></script>
</head>

<body>
    <div class="container">
        <!-- miminzed sidebar -->
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Parent/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/report">
                        <i class="fa fa-user-shield" aria-hidden="true"></i> <span>Report</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="selected" style="margin-top:40px;">
                    <a href="<?=ROOT?>/Parent/event">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/funzonehome">
                        <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/package">
                        <i class="fas fa-credit-card"></i> <span>Payments</span>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <!-- navigation -->
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first select-child">
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
                        <li class="hover-effect first" onclick="window.location.href = '../../Registered-Child/Events/event.html'">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first" nclick="window.location.href = '../../Registered-Child/Events/event.html'">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first" nclick="window.location.href = '../../Registered-Child/Events/event.html'">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first" nclick="window.location.href = '../../Registered-Child/Events/event.html'">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first" nclick="window.location.href = '../../Registered-Child/Events/event.html'"> 
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" id="main-content">
            <!-- Header -->
            <div class="header">
                <i class="fa fa-bars" id="minimize-btn"
                    style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
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
                            <li>
                                <p>New Message 1 <i href="" class="fas fa-paper-plane"></i> </p>
                                <p class="content"> content like a message</p>
                            </li>
                            <li>
                                <p>New Message 2 <i href="" class="fas fa-paper-plane"></i></p>
                                <p class="content"> content like a message</p>
                            </li>
                            <li>
                                <p>New Message 3 <i href="" class="fas fa-paper-plane"></i></p>
                                <p class="content"> content like a message</p>
                            </li>
                            <li>
                                <p>New Message 4 <i href="" class="fas fa-paper-plane"></i></p>
                                <p class="content"> content like a message</p>
                            </li>
                            <li>
                                <p>New Message 5 <i href="" class="fas fa-paper-plane"></i></p>
                                <p class="content"> content like a message</p>
                            </li>
                            <li>
                                <p>New Message 6 <i href="" class="fas fa-paper-plane"></i></p>
                                <p class="content"> content like a message</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="message-numbers">
                    <p> 2</p>
                </div>
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>
            <div class="stats">
                <div class="stat">
                    <h3><img src="<?=IMAGE?>/event.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Upcoming events</h3>
                    <p style="margin-bottom: 3px; color: #D3D3D3;">19/09/2024</p>
                    <span style="font-weight: 50;">Unattended days</span>
                </div>
                <div class="stat">
                    <h3><img src="<?=IMAGE?>/event-2.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Enroll to events</h3>
                    <p style="margin-bottom: 3px;color: #D3D3D3;"> 2 events left</p>
                    <span style="font-weight: 50;">2 enrolled events upcoming this month</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?=IMAGE?>/feedback.svg" alt="Attendance"
                            style="width: 50px; margin-right: 10px; margin-bottom: -15px;">Event feedback</h3>
                    <p style="margin-top: 20px;color: #D3D3D3;">
                        <img src="<?=IMAGE?>/star2.svg" class="star" alt="star">
                        <img src="<?=IMAGE?>/star2.svg" class="star" alt="star">
                        <img src="<?=IMAGE?>/star2.svg" class="star" alt="star">
                        <img src="<?=IMAGE?>/star.svg" class="star" alt="star">
                        <img src="<?=IMAGE?>/star.svg" class="star" alt="star">
                    </p>
                    <span style="font-weight: 50;">drawing event feedback</span>
                </div>
                <div class="stat">
                    <h3><img src="<?=IMAGE?>/event-2.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">View all events</h3>
                    <div class="lol" style="cursor: pointer; margin-bottom: -100px; margin-top: 10px;"
                        onclick="window.location.href='<?=ROOT?>/ReParent/allevent';">
                        <p>View</p>
                    </div>
                </div>
            </div>
            <div class="saperate">
                <!-- Event Modal -->
                <div class="modal" id="EventModal">
                    <div class="View-Package">
                                            <div class="top-con">
                        <div class="back-con" id="back-arrow">
                            <i class="fas fa-chevron-left" id="backformeeting"></i>
                        </div>
                    </div>
                        <div class="back-arrow" id="back-arrow">
                            <i class="fas fa-chevron-left" style="color: white !important; margin-left: 0px;"></i>
                        </div>
                        <h1>View Event</h1>
                        <label for="package-name">Event name</label>
                        <input id="package-name" readonly="" type="text" value="Basic care plan" />
                        <label for="included-services">Activity details</label>
                        <div class="services" id="included-services">
                            title of the compition is on nature
                            <br />
                            All type of drawing methods are allowd
                            <br />
                            competiton is partitioned in age groups
                        </div>
                        <label for="price">Price</label>
                        <div class="price-container">
                            <input id="price" readonly="" type="text" value="10:00 - 11:00 AM" />
                        </div>
                    </div>
                </div>
                <!-- Rating Modal -->
                <div class="modal" id="RatingModal">
                    <div class="Give-Rating">
                        <div class="top-con">
                            <div class="back-con">
                                <i class="fas fa-chevron-left" id="backforrating"></i>
                            </div>
                            <div class="refresh-con">
                                <i class="fas fa-refresh" id="ratingrefresh"
                                    style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                            </div>
                        </div>
                        <form id="ratingform">
                            <h1>Review and Rating</h1>
                            <label for="package-name">Reason</label>
                            <input id="package-name" type="text" placeholder="Reason for the review" />
                            <label for="included-services">Your review</label>
                            <textarea class="services" id="included-services"
                                placeholder="Provided a good service. The child was so happy. but the he left his toy at the daycare"></textarea>
                            <label for="price">Add your rating</label>
                            <div class="rating pickup-section">
                                <i class="star-rate fas fa-star" data-value="5"></i>
                                <i class="star-rate fas fa-star" data-value="4"></i>
                                <i class="star-rate fas fa-star" data-value="3"></i>
                                <i class="star-rate fas fa-star" data-value="2"></i>
                                <i class="star-rate fas fa-star" data-value="1"></i>
                            </div>
                            <div class="button-popup">
                                <button style="margin-right: 120px;" id="closeratingBtn">Cancel</button>
                                <button style="margin-right: 15px;" type="submit">Done</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Event conatiner -->
                <div class="event-container">
                    <h1>Events</h1>
                    <div class="filters">
                        <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                        <select style="width: 200px">
                            <option value="" hidden>Status</option>
                            <option value="2 - 5">Upcoming</option>
                            <option value="5 - 7">Happening</option>
                            <option value="7 - 9">finished</option>
                        </select>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                            <tr>
                                <td>Drawing</td>
                                <td>20/0902024</td>
                                <td>Upcoming</td>
                                <td><i class="fas fa-eye icon eventbtn"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pickup-container">
                    <h1>New Event</h1>
                    <div class="details">
                        <p> Event Name: Drawing</p>
                        <p>Date: 12-16, 2025</p>
                    </div>
                    <p>Don’t Miss the Annual Halloween Party! Enroll your child by Oct 20.</p>
                    <button class="button eventbtn">View event</button>
                </div>
                <div class="pickup-container">
                    <h1>feedback</h1>
                    <div class="details">
                        <p> Event Name: Drawing</p>
                        <p>Date: 12-16, 2025</p>
                    </div>
                    <p>Give us feedback for the events that your child participated</p>
                    <button id="feedbackbtn" class="button">Give Feedback</button>
                </div>
            </div>
            <!-- navigation to messager -->
            <a href="<?=ROOT?>/ReParent/Message" class="chatbox">
                <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <!-- profile card -->
        <div class="profile-card" id="profileCard">
            <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100"
                class="profile" />
            <h2>
                Thilina Perera
            </h2>
            <p>
                Student    RS0110657
            </p>
            <button class="profile-button" onclick="window.location.href ='<?=ROOT?>/ReParent/ChildProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReParent/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/ReParent/GuardianProfile'">
                Guardian profile
            </button>
            <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
</body>

</html>