<html>

<head>
    <title>Events</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Child/event.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Child/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Child/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/MessageDropdown.js?v=<?= time() ?>"></script>
    <!-- <script src="<?= JS ?>/Child/event.js?v=<?= time() ?>"></script> -->
</head>

<body style="overflow:hidden;">
    <div class="container">
        <!-- sidebar to navigate to pages -->
        <div class="sidebar" id="sidebar1">
            <img src="<?=IMAGE?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?=IMAGE?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
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
                    <a href="<?= ROOT ?>/Child/Message">
                        <i class="fas fa-comment"></i> <span>Messager</span>
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
        <!-- To navigate through childrens -->
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px; margin-left: 15px !important;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px; margin-left: 20px;">
                    <ul>
                        <li class="hover-effect first"
                            onclick="removechildsession();">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
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
                                <?php if($child['name'] === $data['selectedchildren']['name']){ echo"select-child"; } ?>
                            " 
                                onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>','<?= isset($child['Child_Id']) ? $child['Child_Id'] : '' ?>')">
                                <img src="<?php echo htmlspecialchars($child['image']); ?>"
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px; <?php if($child['name'] !== $data['selectedchildren']['name']){ echo"margin-left: -20px !important"; } ?>">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" id="main-content" style="overflow:hidden;">
            <!-- Header of the page -->
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
                <!-- messaging icon and it's dropdown -->
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
                <!-- Profile icon and btn to view image -->
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>
            <!-- stats on events -->
            <div class="stats">
                <div class="stat" id="NewEvent" style="width: 60px !important; display: flex; flex-direction: row !important;">
                    <div style="display: flex; flex-direction: row;">
                        <img src="<?=isset($data['stat3']['Image']) ? $data['stat3']['Image'] : IMAGE.'/event-2.svg'; ?>" alt="Event Image"
                            style="width: 130px ; height: 130px; margin-top: -15px; border-radius: 7px 0px 0px 7px; margin-bottom: -15px;">
                        <div style="display: flex; flex-direction: column; margin-top: 10px;">
                            <h3 class="footer" style="margin-left: 5px;">Event Name: <?= $data['stat3']['EventName'] ?></h3>
                            <p class="footer" style="margin-left: 5px; font-size: 1rem; white-space:nowrap;">Date: <?= date('d/m/Y', strtotime(isset($data['stat3']['Date'])? $data['stat3']['Date'] : '' )) ?></p>
                        </div>
                    </div>
                </div>
                <div class="stat" id="stat1" style="display: none;">
                    <h3>
                        <img src="<?= IMAGE ?>/event.svg?v=<?= time() ?>" alt="Attendance" style="width: 40px; margin-right: 10px; margin-bottom: -10px;">
                        Upcoming events
                    </h3>

                    <?php if (!empty($data['stat1']['upcomingEvent'])): ?>
                        <!-- If there is an upcoming event -->
                        <p style="margin-bottom: 3px;">
                            <?= $data['stat1']['upcomingEvent']['EventName'] ?>
                        </p>
                    <?php else: ?>
                        <!-- If there is no upcoming event -->
                        <p style="margin-bottom: 3px;">
                            No upcoming events at the moment.
                        </p>
                    <?php endif; ?>

                    <span style="font-weight: 50;"><?= isset($data['stat1']['upcomingEvent']['Date'])? $data['stat1']['upcomingEvent']['Date']: '' ; ?> </span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/event-2.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Enroll to events</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['stat2']['enrolledEvents'] ?></p>
                    <span style="font-weight: 50;"><?= $data['stat2']['eventsMessage'] ?></span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/event-2.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">View all events</h3>
                    <div class="lol" style="cursor: pointer; margin-bottom: -100px; margin-top: 10px;"
                        onclick="window.location.href='<?= ROOT ?>/Child/allevent';">
                        <p>View</p>
                    </div>
                </div>
            </div>
            <div class="saperate" style="margin-top: 40px;">
                <!-- Modal to view event -->
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
                <!-- Modal for rating events -->
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
                <!-- table on events -->
                <div class="event-container" style="width: 750px; height: 400px;" >
                    <h2 style="margin-top: 10px !important; margin-bottom: 2px;"> Events </h2>
                    <hr>
                    <div class="filters">
                        <input type="date" id="datePicker" value="" style="width: 200px">
                        <select style="width: 200px">
                            <option value="" hidden>Status</option>
                            <option value="NULL">All</option>
                            <option value="Upcoming">Upcoming</option>
                            <option value="Happening">Happening</option>
                            <option value="Finished">Finished</option>
                        </select>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th> Child </th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="glass-box" style="width: 200px !important; height: 360px !important;">
                    <div class="report-header">
                        <i class="fa-regular fa-clipboard"></i>
                        <h1>Feedback</h1>
                    </div>
                    <div class="report-footer">
                        <p class="footer">Event Name: <span>Drawing</span></p>
                        <p class="footer">Date: <span>12/12/2024</span></p>
                    </div>
                    <div class="report-body">
                        <p class="text">Give us feedback for the events that your child participated</p>
                        <button style="margin-top: 21px;" class="button" id="feedbackbtn">Give feedback</button>
                    </div>
                </div>
            </div>
            <!-- To navigate to message page -->

        </div>
        <!-- Profile card -->
        <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?php echo htmlspecialchars($data['selectedchildren']['image']); ?>" width="100"
            class="profile" />
        <h2><?=$data['selectedchildren']['fullname'] ?></h2>
        <p>SRD<?= $data['selectedchildren']['id'] ?></p>
            <button class="profile-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/GuardianProfile'">
                Guardian profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildPackage'">Package</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildID'">Id Card</button>
            <button class="logout-button" onclick="window.location.href ='<?= ROOT ?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
        function setChildSession(childName) {
            fetch('<?= ROOT ?>/Child/Home/setchildsession', {
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
                        window.location.href = '<?= ROOT ?>/Child/Event';
                    } else {
                        console.error("Failed to set child name in session.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function removechildsession() {
            fetch('<?= ROOT ?>/Child/Home/removechildsession', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Child name removed from session.");
                        window.location.href = '<?= ROOT ?>/Parent/Event';
                    } else {
                        console.error("Failed to remove child name from session.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function updateEventTable(events) {
            const tbody = document.querySelector('.event-container table tbody');
            tbody.innerHTML = '';

            events.forEach(event => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${event.EventName}</td>
                    <td> ${event.ChildName} </td>
                    <td>${new Date(event.Date).toLocaleDateString()}</td>
                    <td>${event.Status}</td>
                    <td><i class="fas fa-eye icon eventbtn" data-eventid="${event.EventID}"></i></td>
                `;
                tbody.appendChild(row);
            });
        }

        function attachEventListeners() {
            const eventbtns = document.querySelectorAll('.eventbtn');
            const EventModal = document.getElementById('EventModal');
            eventbtns.forEach(function(eventbtn) {
                eventbtn.addEventListener('click', function() {
                    const eventId = this.dataset.eventid;
                    console.log(eventId);
                    fetchEventDetails(eventId);
                });
            });
        }

        function fetchrequest(date, status) {
            fetch('<?= ROOT ?>/Child/Event/store_data', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date,
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Event data:", data.data);
                        updateEventTable(data.data);
                        attachEventListeners();
                    } else {
                        console.error("Failed to fetch events:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        document.addEventListener('DOMContentLoaded', function() {
            fetchrequest(null, null);

            const datePicker = document.getElementById('datePicker');
            const statusDropdown = document.querySelector('select');

            function applyFilters() {
                const selectedDate = datePicker.value || null;
                const selectedStatus = statusDropdown.value || null;
                console.log(selectedDate, selectedStatus);
                fetchrequest(selectedDate, selectedStatus);
            }

            datePicker.addEventListener('change', applyFilters);
            statusDropdown.addEventListener('change', applyFilters);

            const EventModal = document.getElementById('EventModal');
            const eventbtns = document.querySelectorAll('.eventbtn');
            const mainContent = document.getElementById('main-content');
            const eventback = document.getElementById('back-arrow');

            eventback.addEventListener('click', function() {
                toggleModal(EventModal, 'none');
            })

            function attachEventListeners() {
                const eventbtns = document.querySelectorAll('.eventbtn');
                eventbtns.forEach(function(eventbtn) {
                    eventbtn.addEventListener('click', function() {
                        console.log("EVENT BTN");
                        toggleModal(EventModal, 'block');
                    });
                });
            }

            attachEventListeners();

            window.addEventListener('click', function(e) {
                if (e.target === EventModal) {
                    toggleModal(EventModal, 'none');
                }
            });

            const RatingModal = document.getElementById('RatingModal');
            const feedbackbtn = document.getElementById('feedbackbtn');
            const backforrating = document.getElementById('backforrating');

            backforrating.addEventListener('click', function() {
                toggleModal(RatingModal, 'none');
            });

            feedbackbtn.addEventListener('click', function() {
                toggleModal(RatingModal, 'flex');
            });

            const stars = document.querySelectorAll('.star-rate');
            const meetingrefresh = document.getElementById('ratingrefresh');
            const ratingform = document.getElementById('ratingform');

            meetingrefresh.addEventListener('click', function() {
                ratingform.reset();
                stars.forEach((star) => {
                    star.classList.remove('selectestar')
                });
            })

            let rating = 0;
            let i = 0;

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    if (star.classList.contains('selectestar') && index === rating - 1) {
                        for (let j = index; j < stars.length; j++) {
                            stars[j].classList.remove('selectestar');
                        }
                        rating -= 1;
                        i -= 1;
                    } else if (index === rating) {
                        stars[index].classList.add('selectestar');
                        rating += 1;
                        i += 1;
                    }
                });
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

            const stat1 = document.getElementById('stat1');
            const stat2 = document.getElementById('stat2');
            const NewEvent = document.getElementById('NewEvent');

            function rotateStats() {
                if (stat1.style.display == '') {
                    stat1.style.display = 'none';
                    NewEvent.style.display = 'flex';
                } else {
                    stat1.style.display = '';
                    NewEvent.style.display = 'none';
                }
            }

            setInterval(rotateStats, 5000);

        });
    </script>
</body>

</html>