<html>

<head>
    <title>Report</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/report.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/Navbar.js?v=<?= time() ?>"></script>
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
                <li class="hover-effect unselected" style="margin-top: 40px;">
                    <a href="<?= ROOT ?>/Parent/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="selected" style="margin-top:40px;">
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
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span
                        id="help">Help</span> </a>
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
                <!-- activity icon and dropdown -->
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
            <div class="stats" id="maid-stats">
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report.svg?v=<?= time() ?>" alt="Attendance" style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Pending reports</h3>
                    <p style="margin-bottom: 3px;"><?= $data['stats']['maid_pending'] ?> pending</p>
                    <span style="font-weight: 50;">Maid reports still in progress</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report view.svg?v=<?= time() ?>" alt="Attendance" style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Report views</h3>
                    <p style="margin-bottom: 3px;"><?= $data['stats']['maid_viewed'] ?> viewed</p>
                    <span style="font-weight: 50;">Maid reports viewed</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report download.svg?v=<?= time() ?>" alt="Attendance" style="width: 50px; margin-right: 10px; margin-bottom: -15px;">Report downloads</h3>
                    <p style="margin-bottom: 3px;"><?= $data['stats']['maid_downloaded'] ?> downloaded</p>
                    <span style="font-weight: 50;">Total Maid reports downloaded</span>
                </div>
            </div>
            <div class="stats" id="teacher-stats" style="display: none;">
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report.svg?v=<?= time() ?>" alt="Attendance" style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Pending reports</h3>
                    <p style="margin-bottom: 3px;"><?= $data['stats']['teacher_pending'] ?> pending</p>
                    <span style="font-weight: 50;">Maid reports still in progress</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report view.svg?v=<?= time() ?>" alt="Attendance" style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Report views</h3>
                    <p style="margin-bottom: 3px;"><?= $data['stats']['teacher_viewed'] ?> viewed</p>
                    <span style="font-weight: 50;">Maid reports viewed</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report download.svg?v=<?= time() ?>" alt="Attendance" style="width: 50px; margin-right: 10px; margin-bottom: -15px;">Report downloads</h3>
                    <p style="margin-bottom: 3px;"><?= $data['stats']['teacher_downloaded'] ?> downloaded</p>
                    <span style="font-weight: 50;">Total Maid reports downloaded</span>
                </div>
            </div>
            <!-- View Report -->
            <div class="saperate">
                <div class="report-container" style="width: 1200px !important;">
                    <div style="display: flex; flex-direction: column; justify-content: flex-start; margin-bottom: -20px; margin-top: 20px; margin-left: 7px;">
                        <div class="toggle">
                            <label class="background" for="toggle"></label>
                            <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                                <label class="up-btn" id="up-btn" style="padding-left: 50px !important; padding-right: 40px;">Maid</label>
                                <label class="hi-btn" id="hi-btn">Teacher</label>
                            </div>
                        </div>
                        <h2 style="margin-top: -10px !important; margin-bottom: 5px;"> Child Reports </h2>
                        <hr style="margin-bottom: 30px;">
                    </div>
                    <input type="date" id="datePicker" id="SnackdatePicker" style="width: 200px; margin-right: 20px;">
                    <select id="childPicker">
                        <option Value="All" selected> All </option>
                        <?php foreach ($data['children'] as $child): ?>
                            <option value="<?php echo htmlspecialchars($child['name']); ?>">
                                <?php echo htmlspecialchars($child['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <table id="upcoming">
                        <thead>
                            <tr>
                                <th>Child</th>
                                <th>Date</th>
                                <th>Maid</th>
                                <th>View</th>
                                <th>Download</th>
                                <th>Viewed</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <table id="history" style="display: none;">
                        <thead>
                            <tr>
                                <th>Child</th>
                                <th>Date</th>
                                <th>Teacher</th>
                                <th>View</th>
                                <th>Download</th>
                                <th>Viewed</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ReportModal -->
            <div class="modal" id="ReportModal">
                <div class="line" id="line"></div>
                <div class="View-Report" style="display: block;" id="Medical-con">
                    <div class="top-con">
                        <div class="back-con">
                            <i class="fas fa-chevron-left" id="backforreport"></i>
                        </div>
                    </div>
                    <div class="header2">
                        <i class="fas fa-info-circle"></i>
                        <h2>Special Conditions</h2>
                    </div>
                    <div class="tabs">
                        <div class="tab active">Medical</div>
                        <div class="tab" id="behavior">Behavioural</div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label for="title">Title</label>
                        <input readonly type="text" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea readonly id="description"
                            placeholder="Details about the medical condition"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <div class="date-input">
                            <input readonly type="text" id="date" value="Jan 10, 2025">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="cancel" id="reportcancel">Cancel</button>
                        <button class="done">Done</button>
                    </div>
                </div>
                <div class="View-Report" style="display: none;" id="Behavior-con">
                    <div class="top-con">
                        <div class="back-con">
                            <i class="fas fa-chevron-left" id="backforreport"></i>
                        </div>
                    </div>
                    <div class="header2">
                        <i class="fas fa-info-circle"></i>
                        <h2>Special Conditions</h2>
                    </div>
                    <div class="tabs">
                        <div class="tab" id="medical">Medical</div>
                        <div class="tab">Behavioural</div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label for="title">Type</label>
                        <input readonly type="text" id="title" value="Aggresive behaviour">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea readonly id="description"
                            placeholder="Details about the medical condition"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <div class="date-input">
                            <input readonly type="text" id="date" value="Jan 10, 2025">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="cancel" id="reportcancel">Cancel</button>
                        <button class="done">Done</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- messager navigation -->
        <a href="<?= ROOT ?>/Parent/Message" class="chatbox">
            <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots"
                style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
            <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                <p> 2</p>
            </div>
        </a>
    </div>
    <!-- profile card -->
    <div class="profile-card" id="profileCard" style="margin-top: -720px;">
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
            fetch("<?= ROOT ?>/Parent/report/Logout", {
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
        function fetchReports(date, child) {
            fetch('<?= ROOT ?>/Parent/Report/store_reports', {
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
                        updateReportTables(data.data);
                    } else {
                        console.error("Failed to fetch meal plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function setChildSession(ChildID) {
            console.log(ChildID);
            fetch(' <?= ROOT ?>/Parent/Report/setchildsession', {
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
                        window.location.href = '<?= ROOT ?>/Child/Report';
                    } else {
                        console.error("Failed to set child name in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function updateReportTables(data) {
            const maidTableBody = document.querySelector('#upcoming tbody');
            const teacherTableBody = document.querySelector('#history tbody');

            // Clear the existing table rows
            maidTableBody.innerHTML = '';
            teacherTableBody.innerHTML = '';

            // Update Maid Reports table
            if (data.Maid) {
                data.Maid.forEach(report => {
                    const formattedDate = new Date(report.Report_Date).toLocaleDateString('en-GB');
                    const row = `
                        <tr>
                            <td>${sanitizeHTML(report.Child_Name)}</td>
                            <td>${formattedDate}</td>
                            <td>${sanitizeHTML(report.Maid_Name)}</td>
                            <td><i class="fas fa-eye icon reportbtn"></i></td>
                            <td><i class="fas fa-download icon"></i></td>
                            <td>
                                <label class="custom-checkbox">
                                    <input type="checkbox" class="checkbox" ${report.Viewed === 'Yes' ? 'checked' : ''} />
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </tr>
                    `;
                    maidTableBody.insertAdjacentHTML('beforeend', row);
                });
            }

            // Update Teacher Reports table
            if (data.Teacher) {
                data.Teacher.forEach(report => {
                    const formattedDate = new Date(report.Report_Date).toLocaleDateString('en-GB');
                    const row = `
                        <tr>
                            <td>${sanitizeHTML(report.Child_Name)}</td>
                            <td>${formattedDate}</td>
                            <td>${sanitizeHTML(report.Teacher_Name)}</td>
                            <td><i class="fas fa-eye icon reportbtn"></i></td>
                            <td><i class="fas fa-download icon"></i></td>
                            <td>
                                <label class="custom-checkbox">
                                    <input type="checkbox" class="checkbox" ${report.Viewed === 'Yes' ? 'checked' : ''} />
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </tr>
                    `;
                    teacherTableBody.insertAdjacentHTML('beforeend', row);
                });
            }
        }

        // Helper function to sanitize HTML content to prevent XSS
        function sanitizeHTML(str) {
            const temp = document.createElement('div');
            temp.textContent = str;
            return temp.innerHTML;
        }


        document.addEventListener('DOMContentLoaded', function() {
            const upbtn = document.getElementById('up-btn');
            const hibtn = document.getElementById('hi-btn');
            const maidStats = document.getElementById('maid-stats');
            const teacherStats = document.getElementById('teacher-stats');
            const upcoming = document.getElementById('upcoming');
            const history = document.getElementById('history');

            upbtn.addEventListener('click', function() {
                // Toggle stats visibility
                maidStats.style.display = 'flex';
                teacherStats.style.display = 'none';

                // Toggle table visibility
                upcoming.style.display = 'block';
                history.style.display = 'none';

                // Update button styles
                upbtn.style.color = 'white';
                hibtn.style.color = 'white';
                upbtn.style.backgroundColor = '#10639a';
                hibtn.style.backgroundColor = '#60a6ec';
            });

            hibtn.addEventListener('click', function() {
                // Toggle stats visibility
                maidStats.style.display = 'none';
                teacherStats.style.display = 'flex';

                // Toggle table visibility
                upcoming.style.display = 'none';
                history.style.display = 'block';

                // Update button styles
                hibtn.style.color = 'white';
                upbtn.style.color = 'white';
                hibtn.style.backgroundColor = '#10639a';
                upbtn.style.backgroundColor = '#60a6ec';
            });


            const datePicker = document.getElementById('datePicker');
            const childPicker = document.getElementById('childPicker');

            fetchReports(datePicker.value, childPicker.value);

            datePicker.addEventListener('change', function() {
                fetchReports(datePicker.value, childPicker.value);
            });

            childPicker.addEventListener('change', function() {
                fetchReports(datePicker.value, childPicker.value);
            });

        });
    </script>
</body>

</html>