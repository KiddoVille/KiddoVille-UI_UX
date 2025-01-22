<html>

<head>
    <title>History</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/history.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Main.css?v=<?= time() ?>">
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
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px; margin-left: 12px !important;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first select-child"
                            onclick="window.location.href = '<?= ROOT ?>/Parent/Home'">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
                                style="width: 60px; height:60px; border-radius: 30px;">
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
                                    style="width: 60px; height: 60px; border-radius: 30px; margin-left: -20px !important;">
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
                <!-- notification icon and drop down -->
                <div class="bell-con" id="bell-container" style="cursor: pointer;">
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
                    <h3><img src="<?= IMAGE ?>/attendance.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Holidays</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['holidays'] ?> Days</p>
                    <span style="font-weight: 50;">holiday to the daycare</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/sick.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Average attendance</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['average_attendance'] ?> Day</p>
                    <span style="font-weight: 50;">Average of attendance in a month</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?= IMAGE ?>/mountain.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Total late arrivals</h3>
                    <p style="margin-bottom: 3px;"> <?= $data['late_arrivals'] ?> Days</p>
                    <span style="font-weight: 50;">Laet arrivals of all child</span>
                </div>
            </div>
            <div class="saperate" style="height: 520px;">
                <div class="child-history" style="width: 760px !important; height: 420px; margin-top: 0px;">
                    <h2 style="margin-top: 10px !important; margin-bottom: 2px;">Child Attendance</h2>
                    <hr>
                    <input type="date" id="datePicker" id="SnackdatePicker" style="width: 200px; margin-right: 20px;">
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

                <!-- <div class="pickup-container">
                    <h1>Schedule pickups</h1>
                    <p>Review and finalize children pickup from the daycare</p>
                    <button class="button" id="openModalBtn">Schedule pickups</button>
                    <div class="details">
                        <p>Date: 12-16, 2025</p>
                        <p>Pickup person: Guardian</p>
                        <p>Departure time: 8:00pm</p>
                    </div>
                    <button class="button" style="width: 189px" id="editModalBtn">Edit</button>
                </div> -->
                <div class="glass-box" style="width: 200px !important; height: 400px !important;">
                    <div class="report-header">
                        <i class="fa-regular fa-clipboard"></i>
                        <h1>Schedule pickups</h1>
                    </div>
                    <div class="report-body">
                        <p class="text">Review and finalize children pickup from the daycare</p>
                        <button class="button" id="editModalBtn">Schedule Pickups</button>
                    </div>
                    <div class="report-footer">
                        <p class="footer">Date: <span>Feb 12-16, 2025</span></p>
                        <p class="footer">Pickup person: <span>Guardian</span></p>
                        <p class="footer">Pickup Time:<span>8:00 PM</span></p>
                    </div>
                </div>
            </div>
            <!-- pickupModal -->
            <div class="modal" id="pickupModal">
                <div class="pickup-popup">
                    <div class="top-con">
                        <div class="back-con">
                            <i class="fas fa-chevron-left" id="backforpickup"></i>
                        </div>
                        <div class="refresh-con">
                            <i class="fas fa-refresh" id="pickuprefresh"
                                style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                        </div>
                    </div>
                    <h1>Schedule pickup</h1>
                    <form id="pickupForm">
                        <div class="pickup-section">
                            <label for="time">Select Time <span id="red-star" class="red-star"> *</span> </label>
                            <input id="pickuptime" type="time" />
                        </div>
                        <div class="pickup-section">
                            <label>Select person for pickup</label>
                            <div class="person-section">
                                <img alt="Person's photo" height="50" src="<?= IMAGE ?>/face.jpeg" width="50" />
                                <div class="person-info">
                                    <span>Abdulla</span>
                                </div>
                                <div class="add-person"
                                    style="margin-left: 30px; margin-right: 2px; width: 55px; height: 50px">+</div>
                                <div class="person-info">
                                    <span>Add new person</span>
                                </div>
                            </div>
                        </div>
                        <div class="pickup-section">
                            <label for="otp">Confirmation OTP <span id="red-star2" class="red-star"> *</span> </label>
                            <input class="otp" id="pickupotp" type="text" maxlength="6"
                                placeholder="000000" />
                            <small>Enter a number and inform the pickup person</small>
                        </div>
                        <div class="pickup-section checkbox-section">
                            <label>
                                <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> Inform on
                                pickup
                            </label>
                        </div>
                        <div class="terms">
                            <input required type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" />
                            <label>
                                I agree to the
                                <a href="#">Terms of Service</a>
                            </label>
                        </div>
                        <div class="button-popup">
                            <button style="margin-right: 230px;" id="closeModalBtn">Cancel</button>
                            <button>Done</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- edit pickup Modal -->
            <div class="modal" id="editPickupModal">
                <div class="pickup-popup">
                    <div class="top-con">
                        <div class="back-con">
                            <i class="fas fa-chevron-left" id="backforpickupedit"></i>
                        </div>
                        <div class="refresh-con">
                            <i class="fas fa-refresh" id="pickupeditrefresh"
                                style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                        </div>
                    </div>
                    <h1>Edit Scheduled Pickup</h1>
                    <form id="editpickupForm">
                        <div class="pickup-section">
                            <label for="edit-time">Select Time <span id="red-star3" class="red-star hidden"> *</span> </label>
                            <input id="edit-time" type="time" value="20:00" />
                        </div>
                        <div class="pickup-section">
                            <label>Select person for pickup</label>
                            <div class="person-section">
                                <img alt="Person's photo" height="50" src="<?= IMAGE ?>/face.jpeg" width="50" />
                                <div class="person-info">
                                    <span>Guardian</span>
                                    <p style="margin-top: 60px; margin-left: -70px; color: #233E8D;">Selected</p>
                                </div>
                                <div class="add-person"
                                    style="margin-left: 30px; margin-right: 2px; width: 55px; height: 50px">+</div>
                                <div class="person-info">
                                    <span>Add new person</span>
                                </div>
                            </div>
                        </div>
                        <div class="pickup-section">
                            <label for="edit-otp">Confirmation OTP <span id="red-star4" class="red-star hidden"> *</span> </label>
                            <input class="otp" id="edit-otp" type="text" maxlength="6"
                                value="000000" />
                            <small>Enter a number and inform the pickup person</small>
                        </div>
                        <div class="pickup-section checkbox-section">
                            <label>
                                <input type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" /> Inform on
                                pickup
                            </label>
                        </div>
                        <div class="terms">
                            <input required type="checkbox" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" checked />
                            <label>
                                I agree to the
                                <a href="../../../Home/Terms of Service/Terms.html">Terms of Service</a>
                            </label>
                        </div>
                        <div class="button-popup">
                            <button style="margin-right: 220px;" id="closeEditModalBtn">Cancel</button>
                            <button style="margin-left: -60px;">Save Changes</button>
                        </div>
                    </form>
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
        <div class="profile-card" id="profileCard">
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
            <button class="logout-button" onclick="window.location.href ='<?= ROOT ?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
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