<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meal Plan</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/meal.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Sidebar.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Sidebar2.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/Navbar.js?v=<?= time() ?>"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar" id="sidebar1">
            <img src="<?= IMAGE ?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
                <h2 style="font-size: 1.5em; white-space: nowrap; margin-left: 0px;" id="sidebar-kiddo">KIDDO VILLE </h2>
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
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?= ROOT ?>/Parent/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
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
                <a href="#" style="text-decoration:none; color:purple"><i class="fas fa-question-circle"></i> <span>Help</span></a>
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
        <div class="main-content">
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
            <div style="display: flex; flex-direction: row; width: 100%; justify-content:flex-start;">
                <div class="container-food" style="margin-left: 20px; top:0; vertical-align: top;">
                    <!-- Table for Food -->
                    <div class="timetable" style="margin-right: 1%; width: 395px; vertical-align: top;">
                        <h3 style="margin-top: 10px !important; margin-bottom: 4px; top:0;">Meal Plan</h3>
                        <hr>
                        <input type="date" id="datePicker" value="<?= (date('Y-m-d')); ?>" style="width: 200px">
                        <table id="mealsTable" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="color: #233E8D; background-color:transparent; padding-right: 4%;">Meal</th>
                                    <th style="color: #233E8D; background-color:transparent; padding-left: 0%;">Dish</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-food" style="margin-left: 20px;">
                    <!-- Table for Snacks -->
                    <div class="timetable" style="margin-right: 1%; width: 395px;">
                        <h3 style="margin-top: 10px !important; margin-bottom: 4px;">Snack Plan</h3>
                        <hr>
                        <input type="date" id="SnackdatePicker" value="<?= (date('Y-m-d')); ?>" style="width: 200px">
                        <table id="snackTable" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="color: #233E8D; background-color:transparent; padding-right: 4%;">Time</th>
                                    <th style="color: #233E8D; background-color:transparent; padding-left: 0%;">Snack</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-food" style="margin-left: 20px;">
                    <h3 style="margin-top: 10px !important; margin-bottom: 4px; margin-right: 60px;">Add Snack</h3>
                    <hr style="width: 160px;">
                    <div class="pickup-section" style="margin-top: 20px;">
                        <label for="date">Date</label>
                        <input required id="" type="date">
                        <label for="date">Meal</label>
                        <select required id="" type="date">
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                        <label for="date">Child</label>
                        <select required id="" type="date">
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                        <label for="date">Snack</label>
                        <select required id="" type="date">
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                    </div>
                    <button style="margin-top: 15px; margin-left:110px;"> Add </button>
                </div>
            </div>

            <div class="container-food" style="margin-left: 40px; margin-top: 20px; align-items: left; width: 1060px; justify-content: space-between;">
                <h3 style="margin-top: 0px !important; margin-bottom: 4px; margin-right: 900px;">Assigned Snacks</h3>
                <hr style="width: 1070px;">
                <p> Please select the child and meal, then enter the snack to assign it. You can easily view and edit the assigned snacks for each child as needed. </p>
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column; margin-right: 50px;">
                        <h3 style="margin-top: 10px !important; margin-bottom: 4px; margin-right: 60px;">Edit Snack Request</h3>
                        <hr style="width: 360px;">
                        <div class="pickup-section" style="margin-top: 20px;">
                            <label for="date">Date</label>
                            <input class="editsnack" required id="" type="date">
                            <label for="date">Meal</label>
                            <select class="editsnacksel" required id="" type="date">
                                <option>Breakfast</option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                            </select>
                            <label for="date">Child</label>
                            <select class="editsnacksel" required id="" type="date">
                                <option>Breakfast</option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                            </select>
                            <label for="date">Snack</label>
                            <select class="editsnacksel" required id="" type="date">
                                <option>Breakfast</option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                            </select>
                        </div>
                        <button style="margin-top: 15px; margin-left:200px;"> Edit </button>
                    </div>
                    <div style="width: 3px; background-color: lightgray; margin-right: 50px;"></div>
                    <div class="timetable" style="display: flex; flex-direction: column;">
                        <input type="date" id="requestPicker" value="<?= (date('Y-m-d')); ?>" style="width: 200px; margin-top:20px; margin-bottom: -10px; table-layout: fixed;">
                        <table id="requestTable" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                            <thead>
                                <tr>
                                    <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Child</th>
                                    <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Meal</th>
                                    <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Snack</th>
                                    <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Edit</th>
                                </tr>
                            </thead>
                            <tbody style="max-height: 400px; overflow-y: auto;">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="<?= ROOT ?>/Parent/Message" class="chatbox">
                <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots" style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>

        <div class="profile-card" id="profileCard">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow" style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?= IMAGE ?>/profilePic.png" width="100" class="profile" />
            <h2>Thilina Perera</h2>
            <p>Student    RS0110657</p>
            <button class="profile-button" onclick="window.location.href ='<?= ROOT ?>/Parent/ParentProfile'">Profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Parent/GuardianProfile'">Guardian profile</button>
            <?php if ($data['Child_Count'] < 5) { ?>
                <button class="secondary-button" onclick="window.location.href='<?php echo ROOT; ?>/Onbording/Child'">
                    Add Children
                </button>
            <?php } ?>
            <button class="logout-button" onclick="logoutUser()">LogOut</button>
        </div>
    </div>
    <script>

        function logoutUser() {
            fetch("<?= ROOT ?>/Parent/meal/Logout", {
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

        function setChildSession(ChildID) {
            fetch(' <?= ROOT ?>/Parent/Meal/setchildsession', {
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
                        console.log("Child name set in session.");
                        window.location.href = '<?= ROOT ?>/Child/Meal';
                    } else {
                        console.error("Failed to set child name in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function fetchMealPlan(date) {
            fetch('<?= ROOT ?>/Parent/Meal/store_food', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Meal plan data:", data.data);
                        updateMealPlanTables(data.data);
                    } else {
                        console.error("Failed to fetch meal plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        // Function to update tables dynamically
        function updateMealPlanTables(mealPlan) {
            console.log(mealPlan);
            const mealsTableBody = document.querySelector('#mealsTable tbody');
            mealsTableBody.innerHTML = '';

            // Loop through each meal type (e.g., breakfast, lunch, dinner)
            for (const [meal, dishes] of Object.entries(mealPlan)) {
                let rowSpanSet = false;

                // Loop through the dishes for the current meal
                dishes.forEach(dish => {
                    const row = document.createElement('tr');

                    // Add meal type cell with rowspan for multiple dishes
                    if (!rowSpanSet) {
                        const mealCell = document.createElement('td');
                        mealCell.textContent = meal.charAt(0).toUpperCase() + meal.slice(1); // Capitalize meal type
                        mealCell.rowSpan = dishes.length; // Set rowspan for the meal type cell
                        row.appendChild(mealCell);
                        rowSpanSet = true;
                    }

                    // Add dish cell
                    const dishCell = document.createElement('td');
                    dishCell.textContent = dish; // Set the dish name
                    row.appendChild(dishCell);

                    // Append the row to the table body
                    mealsTableBody.appendChild(row);
                });
            }
        }

        function fetchSnackPlan(date) {
            fetch('<?= ROOT ?>/Parent/Meal/store_snack', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Snack plan data:", data.data);
                        updateSnackPlanTables(data.data);
                    } else {
                        console.error("Failed to fetch snack plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        // Function to update tables dynamically
        function updateSnackPlanTables(SnackPlan) {
            console.log(SnackPlan);
            const snacksTableBody = document.querySelector('#snackTable tbody');
            snacksTableBody.innerHTML = '';

            // Loop through each meal type (e.g., breakfast, lunch, dinner)
            for (const [meal, dishes] of Object.entries(SnackPlan)) {
                let rowSpanSet = false;

                // Loop through the dishes for the current meal
                dishes.forEach(dish => {
                    const row = document.createElement('tr');

                    // Add meal type cell with rowspan for multiple dishes
                    if (!rowSpanSet) {
                        const mealCell = document.createElement('td');
                        mealCell.textContent = meal.charAt(0).toUpperCase() + meal.slice(1); // Capitalize meal type
                        mealCell.rowSpan = dishes.length; // Set rowspan for the meal type cell
                        row.appendChild(mealCell);
                        rowSpanSet = true;
                    }

                    // Add dish cell
                    const dishCell = document.createElement('td');
                    dishCell.textContent = dish; // Set the dish name
                    row.appendChild(dishCell);

                    // Append the row to the table body
                    snacksTableBody.appendChild(row);
                });
            }
        }

        function fetchrequest(date) {
            fetch('<?= ROOT ?>/Parent/Meal/store_request', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("snack request data:", data.data);
                        updateSnackrequestTables(data.data);
                    } else {
                        console.error("Failed to fetch snack request:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function updateSnackrequestTables(snackRequestData) {
            console.log("hi");
            console.log(snackRequestData);
            // Get the table body element
            const tableBody = document.querySelector("#requestTable tbody");
            tableBody.innerHTML = "";

            // Iterate through the snack request data
            for (const childName in snackRequestData) {
                const meals = snackRequestData[childName];
                let firstRowForChild = true;

                // Iterate through meals (breakfast, lunch, dinner)
                for (const meal in meals) {
                    const snacks = meals[meal];
                    let firstRowForMeal = true;

                    // Iterate through snacks for the current meal
                    for (const snackName in snacks) {
                        const quantity = snacks[snackName];

                        // Create a new row for the table
                        const row = document.createElement("tr");

                        // Add child name cell (only for the first row of the child)
                        if (firstRowForChild) {
                            const childCell = document.createElement("td");
                            childCell.textContent = childName;
                            childCell.style.padding = "10px 15px";
                            childCell.rowSpan = Object.values(meals).reduce((sum, mealSnacks) => sum + Object.keys(mealSnacks).length, 0);
                            row.appendChild(childCell);
                            firstRowForChild = false;
                        }

                        // Add meal cell (only for the first row of the meal)
                        if (firstRowForMeal) {
                            const mealCell = document.createElement("td");
                            mealCell.textContent = meal;
                            mealCell.style.padding = "10px 15px";
                            mealCell.rowSpan = Object.keys(snacks).length;
                            row.appendChild(mealCell);
                            firstRowForMeal = false;
                        }

                        // Add snack name cell
                        const snackCell = document.createElement("td");
                        snackCell.textContent = `${snackName} (${quantity})`;
                        snackCell.style.padding = "10px 15px";
                        row.appendChild(snackCell);

                        // Add edit actions cell
                        const editCell = document.createElement("td");
                        editCell.className = "edit";
                        editCell.style.padding = "10px 15px";
                        editCell.innerHTML = `
                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px; cursor: pointer;"></i>
                    <i class="fas fa-trash" style="cursor: pointer;"></i>`;
                        row.appendChild(editCell);

                        // Append the row to the table body
                        tableBody.appendChild(row);
                    }
                }
            }
        }


        // Add event listener for date picker
        document.addEventListener('DOMContentLoaded', function() {

            const currentDate = new Date().toISOString().split('T')[0];
            fetchMealPlan(currentDate);
            fetchSnackPlan(currentDate);
            fetchrequest(currentDate);

            document.getElementById('requestPicker').addEventListener('change', function() {
                const selectedDate = this.value;
                fetchrequest(selectedDate);
            });

            document.getElementById('datePicker').addEventListener('change', function() {
                const selectedDate = this.value;
                fetchMealPlan(selectedDate);
            });

            document.getElementById('SnackdatePicker').addEventListener('change', function() {
                const selectedDate = this.value;
                fetchSnackPlan(selectedDate);
            });
        });
    </script>
</body>

</html>