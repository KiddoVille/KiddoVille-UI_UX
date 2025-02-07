<html>

<head>
    <title>Package</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Child/package.css">
    <link rel="stylesheet" href="<?=CSS?>/Child/Main.css">
    <script src="<?=JS?>/Child/Profile.js"></script>
    <script src="<?=JS?>/Child/MessageDropdown.js"></script>
    <script src="<?=JS?>/Child/Navbar.js"></script>
    <script src="<?=JS?>/Child/Price.js"></script>
    <script src="<?=JS?>/Child/Taskbar.js"></script>
</head>

<body style="overflow: hidden; background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="hover-effect">
                    <a href="<?=ROOT?>/Main/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Main/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Main/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Main/allevent">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Main/package">
                        <i class="fas fa-box"></i> <span>Package</span>
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
                        <li class="hover-effect first"
                            onclick="removechildsession();">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
                                style="width: 60px; height:60px; border-radius: 30px;">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
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
        <div class="main-content" id="main-content">
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
            <div class="modal" id="PackageModal">
                <div class="View-Package">
                    <div class="top-con">
                        <div class="back-con" id="back-arrow">
                            <i class="fas fa-chevron-left" id="backformeeting"></i>
                        </div>
                    </div>
                    <h1>View Package</h1>
                    <label for="package-name">Package name</label>
                    <input id="package-name" readonly="" type="text" value="Basic care plan" style="margin-left: 15px; width: 300px;"/>
                    <label for="included-services" style="margin-top: -10px;">Included services</label>
                    <div class="services" id="included-services" style="width: 280px;">
                        
                    </div>
                    <label for="price" style="margin-top: -10px;">Price</label>
                    <div class="price-container">
                        <input id="price" readonly="" type="text" value="80,000" style="width: 400px !important; margin-left: 15px;"/>
                        <span>RS</span>
                    </div>
                    <label for="included-days" style="margin-top: -10px;">Included days</label>
                    <div class="services" id="included-days" style="display: grid; grid-template-columns: repeat(2, 1fr); height: 70px; width: 280px;">
                        <ul id="first-ul" style="margin-top: -10px;"></ul>
                        <ul id="second-ul" style="margin-top: -10px;"></ul>
                    </div>
                </div>
            </div>
            <div class="chatbox">
                <a href="<?=ROOT?>/Child/Message">
                    <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                        style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                </a>
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </div>
            <div class="fill">
                <div style="text-align: left; display: flex; flex-direction: column; justify-content: left;">
                    <h2 style="margin-top: 0px !important; margin-bottom: 2px;">Packages</h2>
                    <hr style="width: 1080px;">
                </div>
                <div class="filters" style="text-align: left;">
                    <label for="minPrice">Min Price:</label>
                    <input type="text" id="min_price" class="price" maxlength="7" placeholder="Min Price"
                        style="width: 100px;">
                    <label for="maxPrice">Max Price:</label>
                    <input type="text" id="max_price" class="price" maxlength="7" placeholder="Max Price"
                        style="width: 100px;">
                </div>
                <div class="packages" style="display: grid; grid-template-columns: repeat(5, 1fr); height: 460px;">

                </div>
                <div class="pagination" style="margin-top: 30px; margin-bottom: -10px;">

                </div>
            </div>
            <a href="<?=ROOT?>/Child/Message" class="chatbox">
                <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <!-- onclick function -->
        <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
            <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?php echo htmlspecialchars($data['selectedchildren']['image']); ?>" width="100"
            class="profile" />
        <h2><?=$data['selectedchildren']['fullname'] ?></h2>
        <p>SRD<?= $data['selectedchildren']['id'] ?></p>
            <button class="profile-button" onclick="window.location.href ='<?=ROOT?>/Child/ChildProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/Child/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/Child/GuardianProfile'">
                Guardian profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildPackage'">Package</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildID'">Id Card</button>
            <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/Main/Home'">
                LogOut
            </button>
        </div>
        <div class="tasks" id="taskbtn">
            <i class="fas fa-chevron-left" id="taskicon"></i>
        </div>
        <div class="task-container" id="tasknavbar">
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
    <script>

        function fetchrequest(max, min) {
            fetch('<?= ROOT ?>/Child/package/store_package', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        Min_price: min,
                        Max_price: max
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Event data:", data.data);
                        const packagesArray = Object.values(data.data);
                        displayPackages(packagesArray);
                        attachEventListeners(packagesArray);
                    } else {
                        console.error("Failed to fetch events:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function displayPackages(data, page = 1, itemsPerPage = 10) {
            const packagesContainer = document.querySelector(".packages");
            const paginationContainer = document.querySelector(".pagination");

            // Clear the current packages and pagination
            packagesContainer.innerHTML = "";
            paginationContainer.innerHTML = "";

            // Pagination logic
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = page * itemsPerPage;
            const paginatedData = data.slice(startIndex, endIndex);
            const totalPages = Math.ceil(data.length / itemsPerPage);

            // Create package cards
            paginatedData.forEach(pkg => {
                const card = document.createElement("div");
                card.classList.add("package-card");

                card.innerHTML = `
                    <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                    <p>Package : ${pkg.Name}</p>
                    <p>Price : Rs. ${pkg.Price}</p>
                    <button class="view">View</button>
                `;
                packagesContainer.appendChild(card);
            });

            // Create pagination
            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement("a");
                pageLink.href = "#";
                pageLink.textContent = i;
                if (i === page) {
                    pageLink.classList.add("active");
                }
                pageLink.addEventListener("click", (e) => {
                    e.preventDefault();
                    displayPackages(data, i, itemsPerPage); // Load the selected page
                });
                paginationContainer.appendChild(pageLink);
            }

            // Add previous and next links
            if (page > 1) {
                const prevLink = document.createElement("a");
                prevLink.href = "#";
                prevLink.addEventListener("click", (e) => {
                    e.preventDefault();
                    displayPackages(data, page - 1, itemsPerPage);
                });
                paginationContainer.insertBefore(prevLink, paginationContainer.firstChild);
            }

            if (page < totalPages) {
                const nextLink = document.createElement("a");
                nextLink.href = "#";
                nextLink.addEventListener("click", (e) => {
                    e.preventDefault();
                    displayPackages(data, page + 1, itemsPerPage);
                });
                paginationContainer.appendChild(nextLink);
            }
        }

        function attachEventListeners(packages) {
            console.log("hi");
            const PackageModal = document.getElementById('PackageModal');
            const packageBtns = document.querySelectorAll('.view');

            packageBtns.forEach((btn, index) => {
                btn.addEventListener('click', function() {
                    const pkg = packages[index];
                    if (pkg) {
                        setModalData(pkg);
                        toggleModal(PackageModal, 'flex');
                    }
                });
            });
        }

        function getAllowedDaysList(pkg) {
            const days = [{
                    name: 'Monday',
                    value: pkg.Monday
                },
                {
                    name: 'Tuesday',
                    value: pkg.Tuesday
                },
                {
                    name: 'Wednesday',
                    value: pkg.Wednesday
                },
                {
                    name: 'Thursday',
                    value: pkg.Thursday
                },
                {
                    name: 'Friday',
                    value: pkg.Friday
                },
                {
                    name: 'Saturday',
                    value: pkg.Saturday
                },
                {
                    name: 'Sunday',
                    value: pkg.Sunday
                },
            ];

            // Split the days into two parts
            const firstHalfDays = days.slice(0, Math.ceil(days.length / 2));
            const secondHalfDays = days.slice(Math.ceil(days.length / 2));

            // Create the first <ul> element and add the first half of the days
            const firstUl = document.getElementById('first-ul');
            firstUl.innerHTML = ''; // Clear previous content
            firstHalfDays.forEach(day => {
                if (day.value) {
                    const li = document.createElement('li');
                    li.textContent = day.name;
                    firstUl.appendChild(li);
                }
            });

            // Create the second <ul> element and add the second half of the days
            const secondUl = document.getElementById('second-ul');
            secondUl.innerHTML = ''; // Clear previous content
            secondHalfDays.forEach(day => {
                if (day.value) {
                    const li = document.createElement('li');
                    li.textContent = day.name;
                    secondUl.appendChild(li);
                }
            });
        }

        function setModalData(pkg) {
            console.log("package");
            // Set the package name
            const packageNameInput = document.getElementById('package-name');
            packageNameInput.value = pkg.Name;

            // Set the included services
            const includedServicesDiv = document.getElementById('included-services');
            const includeddatesDiv = document.getElementById('included-days');
            includedServicesDiv.innerHTML = `
                ${pkg.Description}
                <br />
                ${pkg.AllHours ? '24/7 care included.' : ''}
                <br />
                ${pkg.FoodAddons ? 'All food add-ons allowed.' : ''}
                <br />
                ${pkg.Everything ? 'Everything included in the package.' : ''}
            `;

            getAllowedDaysList(pkg);
            // Set the price
            const priceInput = document.getElementById('price');
            priceInput.value = pkg.Price;
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

        document.addEventListener('DOMContentLoaded', function () {

            fetchrequest(null, null);

            const max_price = document.getElementById('max_price');
            const min_price = document.getElementById('min_price');

            function applyFilters() {
                const max = max_price.value || null;
                const min = min_price.value || null;
                console.log(max, min);
                fetchrequest(max, min);
            }

            max_price.addEventListener('change', applyFilters);
            min_price.addEventListener('change', applyFilters);

            const PackageModal = document.getElementById('PackageModal');
            const packagebtns = document.querySelectorAll('.view');
            const mainContent = document.getElementById('main-content');
            const packageback = document.getElementById('back-arrow');

            packageback.addEventListener('click', function () {
                toggleModal(PackageModal, 'none');
            })

            packagebtns.forEach(function (eventbtn) {
                console.log("Hi");
                eventbtn.addEventListener('click', function () {
                    toggleModal(PackageModal, 'flex');
                })
            });

            window.addEventListener('click', function (e) {
                if (e.target === PackageModal) {
                    toggleModal(PackageModal, 'none');
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
                        window.location.href = '<?= ROOT ?>/Child/Package';
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
                        window.location.href = '<?= ROOT ?>/Parent/Package';
                    } else {
                        console.error("Failed to remove child name from session.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }
    </script>
</body>

</html>