<html>

<head>
    <title>Package</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Parent/package.css">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Main.css">
    <script src="<?=JS?>/Parent/Profile.js"></script>
    <script src="<?=JS?>/Parent/MessageDropdown.js"></script>
    <script src="<?=JS?>/Parent/Navbar.js"></script>
    <script src="<?=JS?>/Parent/Price.js"></script>
</head>

<body style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="hover-effect">
                    <a href="<?=ROOT?>/Parent/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
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
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/allevent">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Parent/package">
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
<<<<<<< HEAD
                        <li class="hover-effect first select-child">
                            <img src="<?=IMAGE?>/family.jpg" style="width: 60px; height:60px; border-radius: 30px;">
=======
                        <li class="hover-effect first select-child"
                            onclick="window.location.href = '<?= ROOT ?>/Parent/Home'">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
                                style="width: 60px; height:60px; border-radius: 30px;">
>>>>>>> origin/main
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
                        Explore your children's activities and progress!
                    </p>
<<<<<<< HEAD
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
=======
                    <ul class="children-list">
                        <?php foreach ($data['children'] as $child): ?>
                            <li class="hover-effect first" onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>')">
                                <img src="<?php echo htmlspecialchars($child['image']); ?>"
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px; margin-left: -20px !important;">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
>>>>>>> origin/main
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
                    <input id="package-name" readonly="" type="text" value="Basic care plan" />
                    <label for="included-services" style="margin-top: -10px;">Included services</label>
                    <div class="services" id="included-services">
                        Standard hours of care.
                        <br />
                        Access to all basic activities and educational programs.
                        <br />
                        Healthy snacks and meals provided during the day.
                    </div>
                    <label for="price" style="margin-top: -10px;">Price</label>
                    <div class="price-container">
                        <input id="price" readonly="" type="text" value="80,000" />
                        <span>RS</span>
                    </div>
<<<<<<< HEAD
                    <img src="<?=IMAGE?>/package-back.jpg" alt="packages" class="package-img">
=======
                    <label for="included-days" style="margin-top: -10px;">Included days</label>
                    <div class="services" id="included-days" style="display: grid; grid-template-columns: repeat(2, 1fr); height: 70px;">
                        <ul id="first-ul" style="margin-top: -10px;"></ul>
                        <ul id="second-ul" style="margin-top: -10px;"></ul>
                    </div>
>>>>>>> origin/main
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
            <div class="fill">
<<<<<<< HEAD
                <h1 style="color: black"> Packages</h1>
=======
                <div style="text-align: left; left: 0; display: flex; flex-direction: column; justify-content: left;">
                    <h2 style="margin-top: 0px !important; margin-bottom: 2px;">Packages</h2>
                    <hr style="width: 1080px;">
                </div>
>>>>>>> origin/main
                <div class="filters" style="text-align: left;">
                    <label for="minPrice">Min Price:</label>
                    <input type="text" id="min_price" class="price" maxlength="7" placeholder="Min Price"
                        style="width: 100px;">
                    <label for="maxPrice">Max Price:</label>
                    <input type="text" id="max_price" class="price" maxlength="7" placeholder="Max Price"
                        style="width: 100px;">
                    <label for="minPrice">Age Group:</label>
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
<<<<<<< HEAD
                <div class="packages">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                </div>
                <div class="packages" style="margin-top: -10px;">
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
                            View
                        </button>
                    </div>
                    <div class="package-card">
                        <img alt="Classroom with colorful furniture and toys" src="<?=IMAGE?>/packages.png" />
                        <p>Package : Basic care plan</p>
                        <p>Price : Rs. 12000</p>
                        <button class="view">
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
=======
                <div class="packages" style="display: grid; grid-template-columns: repeat(5, 1fr); height: 460px;">

                </div>
                <div class="pagination" style="margin-top: 30px; margin-bottom: -10px;">

>>>>>>> origin/main
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
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/Parent/GuardianProfile'">
                Guardian profile
            </button>
            <button class="logout-button" onclick="window.location.href ='<?=ROOT?>/Parent/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
<<<<<<< HEAD
        document.addEventListener('DOMContentLoaded', function () {
=======
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
                        window.location.href = '<?= ROOT ?>/Child/Package';
                    } else {
                        console.error("Failed to set child ID in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function fetchrequest(max, min, age) {
            fetch('<?= ROOT ?>/Parent/package/store_package', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        Min_price: min,
                        Max_price: max,
                        Age: age
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
            const PackageModal = document.getElementById('PackageModal');
            const packageBtns = document.querySelectorAll('.view');

            packageBtns.forEach((btn, index) => {
                btn.addEventListener('click', function() {
                    const pkg = packages[index]; // Get the corresponding package data
                    if (pkg) {
                        setModalData(pkg); // Set modal data with the package details
                        toggleModal(PackageModal, 'flex'); // Show the modal
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

        document.addEventListener('DOMContentLoaded', function() {

            fetchrequest(null, null, null);

            const max_price = document.getElementById('max_price');
            const min_price = document.getElementById('min_price');
            const age = document.getElementById('age');

            function applyFilters() {
                const max = max_price.value || null;
                const min = min_price.value || null;
                const agegroup = age.value || null;
                console.log(max, min, agegroup);
                fetchrequest(max, min, agegroup);
            }

            max_price.addEventListener('change', applyFilters);
            min_price.addEventListener('change', applyFilters);
            age.addEventListener('change', applyFilters);

>>>>>>> origin/main
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
    </script>
</body>

</html>