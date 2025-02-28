<html>

<head>
    <title>History</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/history.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Sidebar.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Sidebar2.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Stats.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
    <!-- <script src="<?= JS ?>/Parent/history.js?v=<?= time() ?>"></script> -->
    <script src="<?= JS ?>/Parent/Navbar.js?v=<?= time() ?>"></script>
    <!-- <script src="<?= JS ?>/Parent/Pickup.js?v=<?= time() ?>"></script> -->
    <script src="<?= JS ?>/Parent/OTP.js?v=<?= time() ?>"></script>
</head>

<body>
    <div class="container">
        <!-- minimized sidebar -->
        <div class="sidebar" id="sidebar1">
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
                <li class="selected" style="margin-top: 40px;">
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
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <!-- navigation -->
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
            <!-- Header -->
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
            <div class="stats">
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/attendance.svg?v=<?= time() ?>" alt="Attendance">Holidays</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['holidays'] ?> Days</p>
                    <span>holiday to the daycare</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/sick.svg?v=<?= time() ?>" alt="Attendance">Average attendance</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['average_attendance'] ?> Day</p>
                    <span>Average of attendance in a month</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?= IMAGE ?>/mountain.svg?v=<?= time() ?>" alt="Attendance">Total late arrivals</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['late_arrivals'] ?> Days</p>
                    <span>Laet arrivals of all child</span>
                </div>
            </div>
            <div class="saperate" style="height: 520px;">
                <div class="child-history" style="width: 760px !important; height: 420px; margin-top: 0px;">
                    <h2 style="margin-top: 10px !important; margin-bottom: 2px;">Child Attendance</h2>
                    <hr>
                    <input type="date" id="datePicker" value="" style="width: 200px; margin-right: 20px;">
                    <select id="childPicker">
                        <option Value="All" selected> All </option>
                        <?php foreach ($data['children'] as $child): ?>
                            <option value="<?php echo htmlspecialchars($child['name']); ?>">
                                <?php echo htmlspecialchars($child['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <table id="historyTable">
                        <thead>
                            <tr>
                                <th>Child</th>
                                <th>Arrival</th>
                                <th>Departure</th>
                                <th>Pickup</th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

                <div class="glass-box" style="width: 200px !important; height: 400px !important;">

                </div>
            </div>
            <!-- messager page -->
            <a href="<?= ROOT ?>/Parent/Message" class="chatbox">
                <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <!-- profile card -->
        <div class="profile-card" id="profileCard" style="margin-top: 0px; margin-right: 0px !important; margin-left: 0px !important; position:fixed;">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow" id="back-arrow-profile"
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
            fetch("<?= ROOT ?>/Parent/history/Logout", {
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
            fetch(' <?= ROOT ?>/Parent/History/setchildsession', {
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
                        window.location.href = '<?=ROOT?>/Child/History';
                    } else {
                        console.error("Failed to set child ID in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function fetchAttendanceHistory(date, child) {
            fetch('<?= ROOT ?>/Parent/History/store_history', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date,
                        child: child
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Meal plan data:", data.data);
                        updateAttendanceTable(data.data);
                    } else {
                        console.error("Failed to fetch meal plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function updateAttendanceTable(attendanceData) {
            // Get the table body
            const tableBody = document.querySelector('#historyTable tbody');
            
            // Clear any existing rows in the table
            tableBody.innerHTML = '';

            // Loop through the attendance data and create table rows
            attendanceData.forEach(attendance => {
                const row = document.createElement('tr');
                
                // Child Name
                const childCell = document.createElement('td');
                childCell.textContent = attendance.First_Name;  // Assuming First_Name is returned
                row.appendChild(childCell);
                
                // Arrival Time (Start Date & Time)
                const arrivalCell = document.createElement('td');
                arrivalCell.textContent = `${attendance.Start_Date} ${attendance.Start_Time}`;
                row.appendChild(arrivalCell);
                
                // Departure Time (End Date & Time)
                const departureCell = document.createElement('td');
                departureCell.textContent = `${attendance.End_Date} ${attendance.End_Time}`;
                row.appendChild(departureCell);
                
                // Pickup Information
                const pickupCell = document.createElement('td');
                pickupCell.textContent = attendance.Pickup || 'N/A';  // Handle if Pickup is empty or undefined
                row.appendChild(pickupCell);
                
                // Status (Present or Absent)
                const statusCell = document.createElement('td');
                statusCell.textContent = attendance.Status;
                row.appendChild(statusCell);

                // Append the created row to the table body
                tableBody.appendChild(row);
            });
        }


        document.addEventListener('DOMContentLoaded', function() {
            const datePicker = document.getElementById('datePicker');
            const childPicker = document.getElementById('childPicker');
            
            fetchAttendanceHistory(datePicker.value, childPicker.value );

            datePicker.addEventListener('change', function() {
                fetchAttendanceHistory(datePicker.value, childPicker.value );
            });

            childPicker.addEventListener('change', function() {
                fetchAttendanceHistory(datePicker.value, childPicker.value);
            });
        });

    </script>
</body>

</html>