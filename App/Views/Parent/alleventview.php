<html>

<head>
    <title>Events</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Parent/all-event.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Main.css?v=<?= time() ?>">
    <script src="<?=JS?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?=JS?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
</head>

<body style=" overflow: hidden;">
    <div class="container">
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
                <li class="selected">
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
            <div class="chatbox">
                <a href="../Messager/Message.html">
                    <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                        style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                </a>
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </div>
            <div class="modal" id="EventModal">
                <div class="View-Package">
                    <div class="top-con">
                        <div class="back-con" id="back-arrow">
                            <i class="fas fa-chevron-left" id="backformeeting"></i>
                        </div>
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
            <div class="fill">
                <h1 style="color: black"> Events</h1>
                <div class="filters">
                    <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                </div>
                <div class="packages">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                </div>
                <div class="packages" style="margin-top: -10px;">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#">
                        &lt;
                    </a>
                    <a class="active" href="#">
                        1
                    </a>
                    <a href="#">
                        2
                    </a>
                    <a href="#">
                        3
                    </a>
                    <a href="#">
                        ...
                    </a>
                    <a href="#">
                        &gt;
                    </a>
                </div>
            </div>
            <a href="<?=ROOT?>/Parent/Message" class="chatbox">
                <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <!-- onclick function -->
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
            <button class="profile-button" onclick="window.location.href ='<?=ROOT?>/Parent/ParentProfile'">
                Profile
            </button>
            <button class="secondary-button"  onclick="window.location.href ='<?=ROOT?>/Parent/GuardianProfile'">
                Guardian profile
            </button>
            <button class="logout-button"  onclick="window.location.href ='<?=ROOT?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const EventModal = document.getElementById('EventModal');
            const eventbtns = document.querySelectorAll('.eventbtn');
            const mainContent = document.getElementById('main-content');
            const eventback = document.getElementById('back-arrow');

            eventback.addEventListener('click', function () {
                toggleModal(EventModal, 'none');
            })

            eventbtns.forEach(function (eventbtn) {
                eventbtn.addEventListener('click', function () {
                    toggleModal(EventModal, 'flex');
                })
            });

            window.addEventListener('click', function (e) {
                if (e.target === EventModal) {
                    toggleModal(EventModal, 'none');
                }
            });

            function toggleModal(modal, display) {
                modal.style.display = display;
                if (display === 'flex') {
                    document.body.classList.add('no-scroll');
                    mainContent.classList.add('blurred');
                } else {
                    document.body.classList.remove('no-scroll');
                    mainContent.classList.remove('blurred');
                }
            }
        });
    </script>
</body>
</html>