<html>

<head>
    <title>Events</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/all-event.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Sidebar.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Sidebar2.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
</head>

<body style=" overflow: hidden;">
    <div class="container">
        <div class="sidebar " id="sidebar1">
            <img src="<?= IMAGE ?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
                <h2 id="sidebar-kiddo">KIDDO VILLE </h2>
            </div>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected" style="margin-top: 40px;">
                    <a href="<?= ROOT ?>/Parent/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/report">
                        <i class="fa fa-user-shield" aria-hidden="true"></i> <span>Report</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?= ROOT ?>/Parent/event">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/funzonehome">
                        <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Parent/package">
                        <i class="fas fa-credit-card"></i> <span>Payments</span>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <div class="sidebar-2" id="sidebar2">
            <div>
                <h2>Familty Ties</h2>
                <div class="family-section">
                    <ul>
                        <li class="hover-effect first select-child"
                            onclick="window.location.href = '<?= ROOT ?>/Parent/Home'">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 5px !important;">
                        Explore your children's activities and progress!
                    </p>
                    <ul class="children-list">
                        <?php foreach ($data['children'] as $child): ?>
                            <li class="hover-effect first" onclick="setChildSession('<?= isset($child['Id']) ? $child['Id'] : '' ?>')">
                                <img src="<?php echo htmlspecialchars($child['image']); ?>"
                                    alt="Child Profile Image"
                                    style="margin-left: -20px;">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" id="main-content">
        <div class="header">
                <i class="fa fa-bars" id="minimize-btn" style=""></i>
                <div class="name">
                    <h1><?= isset($data['parent']['fullname']) ? $data['parent']['fullname'] : 'No name set'; ?></h1>
                    <p style="color: white">Let’s do some productive activities today</p>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                </div>
                <!-- message icon -->
                <div class="bell-con" id="bell-container" style="cursor: pointer;">
                    <i class="fas fa-bell bell-icon"></i>
                    <div class="message-numbers">
                        <p> 2</p>
                    </div>
                    <div class="message-dropdown" id="messageDropdown" style="display: none;">
                        <ul>
                            <li>
                                <p>New Message 1 <i href="" class="fas fa-paper-plane"></i> </p>
                                <p class="content"> content like a message</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Prodile btn -->
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle"></i>
                    </button>
                </div>
            </div>

            <div class="modal" id="EventModal">
                <div class="View-Package">
                    <img src="" id="Event-img" style="width: 360px; height: 250px; position: fixed; margin-left: -20px; margin-top: -20px; border-radius: 7px 0px 7px 0px;">
                    <div class="top-con" style="margin-top: 0px; margin-left: 1px;">
                        <div class="back-con" id="back-arrow">
                            <i class="fas fa-chevron-left" id="backformeeting"></i>
                        </div>
                    </div>
                    <div class="pickup-section" style="margin-top: 230px;">
                        <label for="package-name">Event name</label>
                        <input id="Event-name" readonly="" type="text" />
                    </div>
                    <div class="pickup-section">
                        <label for="included-services">Activity details</label>
                        <div class="services" id="description">

                        </div>
                    </div>
                    <div class="pickup-section">
                        <label for="price">Date Time</label>
                        <input id="datetime" readonly="" type="text" />
                    </div>
                    <button id="Enrollbtn" value="" style="width: 150px; margin-left: 170px; margin-top: 10px;" class="eventbtn" onclick="getchildrens(this.value)"> Enroll Children </button>
                </div>
            </div>
            <div class="modal" id="EnrollModal">
                <div class="View-Package" style="height: 440px;">
                    <img src="<?= IMAGE ?>/packages.png" style="width: 360px; height: auto position: fixed; margin-left: -20px; margin-top: -20px; border-radius: 7px 0px 7px 0px;">
                    <div class="top-con" style="margin-top: -190px; margin-left: 1px;">
                        <div class="back-con" id="Eback-arrow">
                            <i class="fas fa-chevron-left" id="backforenroll"></i>
                        </div>
                    </div>
                    <div class="pickup-section" style="margin-top: 190px;">
                        <label for="package-name">Select Child</label>
                        <div class="child-selection" style="margin-top: 20px; height: 150px;">

                        </div>
                    </div>
                    <button style="width: 150px; margin-left: 170px" id="Enrollmodel"> Enroll </button>
                </div>
            </div>
            <div class="fill" style="margin-left: 30px; width: 1180px;">
                <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow"
                    style="width: 24px; height: 24px; fill: #233E8D !important; margin-left: -1120px; cursor: pointer;"
                    class="back" onclick="window.location.href='<?= ROOT ?>/Parent/event'">
                <h2 style="margin-top: -10px !important; margin-bottom: 2px; margin-right: 980px;"> Events </h2>
                <hr style="width: 1070px;">
                <div class="filters" style="margin-left: 330px !important;">
                    <input type="date" id="datePicker" value="" style="width: 200px; margin-left: 70px;">
                    <select id="age">
                        <option value="All" selected> All </option>
                        <option value="2-3"> 2-3 </option>
                        <option value="4-5"> 4-5 </option>
                        <option value="6-7"> 6-7 </option>
                        <option value="8-9"> 8-9 </option>
                        <option value="10-11"> 10-11 </option>
                        <option value="12-13"> 12-13 </option>
                        <option value="14-15"> 14-15 </option>
                    </select>
                </div>
                <div class="packages" style="display: grid; grid-template-columns: repeat(5, 1fr); height: 460px;">

                </div>
                <div class="pagination" style="margin-top: 30px; margin-bottom: -10px;">

                </div>
            </div>
            <a href="<?= ROOT ?>/Parent/Message" class="chatbox">
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
            <button class="profile-button" onclick="window.location.href ='<?= ROOT ?>/Parent/ParentProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Parent/GuardianProfile'">
                Guardian profile
            </button>
            <?php if ($data['Child_Count'] < 5) { ?>
                <button class="secondary-button" onclick="window.location.href='<?php echo ROOT; ?>/Onbording/Child'">
                    Add Children
                </button>
            <?php } ?>
            <button class="logout-button" onclick="logoutUser()">
                LogOut
            </button>
        </div>
    </div>
    <script>

        function logoutUser() {
            fetch("<?= ROOT ?>/Parent/allevent/Logout", {
                method: "POST", 
                credentials: "same-origin"
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "<?= ROOT ?>/Main/Login"; // Redirect after logout
                } else {
                    alert("Logout failed. Try again.");
                }
            })
            .catch(error => console.error("Error:", error));
        }

        let paginatedData = [];

        function setChildSession(ChildID) {
                console.log(ChildID);
                fetch(' <?= ROOT ?>/Parent/Home/setchildsession', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            ChildID: ChildID
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log("Child Id set in session.");
                            window.location.href = '<?= ROOT ?>/Child/allevent';
                        } else {
                            console.error("Failed to set child ID in session at " + window.location.href + " inside function setChildSession.", data.message);
                        }
                    })
                    .catch(error => console.error("Error:", error));
            }

        function fetchrequest(date, age) {
            fetch('<?= ROOT ?>/Parent/allevent/store_events', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date,
                        Age: age
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Event data:", data.data);
                        const eventArray = Object.values(data.data);
                        displayEvents(eventArray);
                    } else {
                        console.error("Failed to fetch events:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function getchildrens(eventId) {
            toggleModal(EnrollModal, 'flex');
            fetch('<?= ROOT ?>/Parent/allevent/store_allowedchild', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        Id: eventId,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Event data:", data.data);
                        const childs = Object.values(data.data);
                        displaychilds(childs);
                    } else {
                        console.error("Failed to fetch events:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function displaychilds(children) {
            const childSelectionDiv = document.querySelector('.child-selection');
            childSelectionDiv.innerHTML = ''; // Clear the existing content

            children.forEach(child => {
                // Create the container div for each child
                const childDiv = document.createElement('div');
                childDiv.style.marginBottom = '0px';
                childDiv.style.display = 'flex';
                childDiv.style.flexDirection = 'row';

                // Create the radio input element
                const input = document.createElement('input');
                input.type = 'radio';
                input.id = `child${child.ChildID}`;
                input.name = 'child';
                input.value = child.ChildID;

                // Create the label for the radio input
                const label = document.createElement('label');
                label.htmlFor = `child${child.ChildID}`;
                label.textContent = child.childName;

                // Append the input and label to the container div
                childDiv.appendChild(input);
                childDiv.appendChild(label);

                // Append the container div to the parent selection div
                childSelectionDiv.appendChild(childDiv);
            });
        }

        function toggleModal(modal, display) {
            const mainContent = document.getElementById('main-content');
            modal.style.display = display;
            if (display === 'flex') {
                document.body.classList.add('no-scroll');
                mainContent.classList.add('blurred');
            } else {
                document.body.classList.remove('no-scroll');
                mainContent.classList.remove('blurred');
            }
        }

        function setModalData(event) {
            console.log("Event data:", event);
            const Event_img = document.getElementById('Event-img');
            const Event_name = document.getElementById('Event-name');
            const Description = document.getElementById('description');
            const Datetime = document.getElementById('datetime');
            const Enrollbtn = document.getElementById('Enrollbtn');

            Enrollbtn.value = event.EventID;
            Event_img.src = event.Image;
            Event_name.value = event.EventName;
            Description.innerHTML = `
                ${event.Description}
            `
            Datetime.value = event.Date + ' ' + event.Time;
        }

        function displayEvents(data, page = 1, itemsPerPage = 10) {
            const eventsContainer = document.querySelector(".packages");
            const paginationContainer = document.querySelector(".pagination");

            // Clear the current events and pagination
            eventsContainer.innerHTML = "";
            paginationContainer.innerHTML = "";

            // Pagination logic
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = page * itemsPerPage;
            paginatedData = data.slice(startIndex, endIndex); // Store the paginated data globally
            const totalPages = Math.ceil(data.length / itemsPerPage);

            paginatedData.forEach((event, index) => {
                const card = document.createElement("div");
                card.classList.add("package-card");

                card.innerHTML = `
                    <img alt="Classroom with colorful furniture and toys" src="${event.image || '<?= IMAGE ?>/packages.png'}" />
                    <p>Event Name: ${event.EventName}</p>
                    <p>Date: ${event.Date}</p>
                    <p>Time: ${event.Time}</p>
                    <button class="eventbtn lol" data-index="${index}">View</button>
                `;
                eventsContainer.appendChild(card);
            });

            const eventBtns = eventsContainer.querySelectorAll(".eventbtn");
            eventBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    const index = parseInt(btn.getAttribute("data-index")); // Get the index from the button's data attribute
                    const selectedEvent = paginatedData[index]; // Use the paginatedData to get the correct event
                    setModalData(selectedEvent); // Pass the event data to setModalData
                    toggleModal(document.getElementById("EventModal"), "flex"); // Open the modal
                });
            });

            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement("a");
                pageLink.href = "#";
                pageLink.textContent = i;
                if (i === page) {
                    pageLink.classList.add("active");
                }
                pageLink.addEventListener("click", (e) => {
                    e.preventDefault();
                    displayEvents(data, i, itemsPerPage);
                });
                paginationContainer.appendChild(pageLink);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {

            fetchrequest(null, null);

            const datePicker = document.getElementById('datePicker');
            const age = document.getElementById('age');

            function applyFilters() {
                const date = datePicker.value || null;
                const agegroup = age.value || null;
                console.log(date, agegroup);
                fetchrequest(date, agegroup);
            }

            datePicker.addEventListener('change', applyFilters);
            age.addEventListener('change', applyFilters);

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
                    toggleModal(EnrollModal, 'none');
                })
            });

            const EnrollModal = document.getElementById('EnrollModal');
            const Enrollbtn = document.getElementById('Enrollbtn');
            const Enrollback = document.getElementById('Eback-arrow');

            backforenroll.addEventListener('click', function() {
                toggleModal(EnrollModal, 'none');
                toggleModal(EventModal, 'flex');
            });

            Enrollbtn.addEventListener('click', function() {
                toggleModal(EventModal, 'none'); // Close the EventModal first
                toggleModal(EnrollModal, 'flex'); // Then open the EnrollModal
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