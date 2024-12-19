<html>

<head>
    <title>Dashboard</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Child/all-event.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Child/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Child/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/MessageDropdown.js?v=<?= time() ?>"></script>
</head>

<body style="overflow: hidden;">
    <div class="container">
        // minimized sidebar
        <div class="sidebar" id="sidebar1">
            <img src="<?= IMAGE ?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
                <h2 id="sidebar-kiddo">KIDDO VILLE </h2>
            </div>
            <ul>
                <li class="hover-effect unselected first">
                    <a href="<?= ROOT ?>/Child/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/report">
                        <i class="fa fa-user-shield"></i> <span>Report</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?= ROOT ?>/Child/event">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/funzonehome">
                        <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/payment">
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
                <h2 style="margin-top: 25px; margin-left: 15px !important;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px; margin-left: 20px;">
                    <ul>
                        <li class="hover-effect first"
                            onclick="removechildsession();">
                            <img src="<?= isset($data['parent']['image']) ? $data['parent']['image'] . '?v=' . time() : '' ?>"
                                style="width: 60px; height:60px; border-radius: 30px;">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px; margin-left: 15px !important;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 15px !important;">
                        Explore your children's activities and progress!
                    </p>
                    <ul class="children-list">
                        <?php foreach ($data['children'] as $child): ?>
                            <li class="first
                                <?php if ($child['name'] === $data['selectedchildren']['name']) {
                                    echo "select-child";
                                } ?>
                            "
                                onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>','<?= isset($child['Child_Id']) ? $child['Child_Id'] : '' ?>')">
                                <img src="<?= isset($child['image']) ? $child['image'] . '?v=' . time() : ROOT . '/Uploads/default_images/default_profile.jpg' ?>"
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px; <?php if ($child['name'] !== $data['selectedchildren']['name']) {
                                                                                                echo "margin-left: -20px !important";
                                                                                            } ?>">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
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
                <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow"
                    style="width: 24px; height: 24px; fill: #233E8D !important; margin-left: -1080px; cursor: pointer;"
                    class="back" onclick="window.location.href='<?= ROOT ?>/Child/event'">
                <h2 style="margin-top: 10px !important; margin-bottom: 2px;"> Events </h2>
                <hr>
                <div class="filters">
                    <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                </div>
                <div class="packages">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
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
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                        <p> Event Name: Drawing</p>
                        <p> Date: 10/09/2024</p>
                        <p> Time: 10:00 - 11:00</p>
                        <button class="eventbtn">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
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
            <a href="<?= ROOT ?>/Child/Message" class="chatbox">
                <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <!-- onclick function -->
        <div class="profile-card" id="profileCard">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?= IMAGE ?>/profilePic.png" width="100"
                class="profile" />
            <h2>
                Thilina Perera
            </h2>
            <p>
                Student    RS0110657
            </p>
            <button class="profile-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/GuardianProfile'">
                Guardian profile
            </button>
            <button class="logout-button" onclick="window.location.href ='<?= ROOT ?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
        function setChildSession(childName) {
            console.log(childName);
            fetch(' <?= ROOT ?>/Parent/Home/setchildsession', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        childName: childName
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Child name set in session.");
                        window.location.href = '<?= ROOT ?>/Child/Home';
                    } else {
                        console.error("Failed to set child name in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        document.addEventListener('DOMContentLoaded', function() {
            const EventModal = document.getElementById('EventModal');
            const eventbtns = document.querySelectorAll('.eventbtn');
            const mainContent = document.getElementById('main-content');
            const eventback = document.getElementById('back-arrow');

            eventback.addEventListener('click', function() {
                toggleModal(EventModal, 'none');
            })

            eventbtns.forEach(function(eventbtn) {
                eventbtn.addEventListener('click', function() {
                    toggleModal(EventModal, 'flex');
                })
            });

            window.addEventListener('click', function(e) {
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