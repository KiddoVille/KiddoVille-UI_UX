<html>

<head>
    <title>
        KIDDO VILLE Schedule
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="<?= CSS ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Holiday.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="<?= JS ?>/Manager/leave.js"></script>
</head>

<body id="body">
    <div style="display: flex;">
        <div class="sidebar">
            <div class="logo_stuf" style="display: flex;margin-top:6%">
                <img src="<?= IMAGE ?>/logo_light.png" style="width: 40px;height:40px" alt="">
                <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            </div>
            <ul style=" margin-top: 10%;">
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;margin-left:10%;margin-top:-10%;">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Viewprofile" style="font-size: 18px;">
                            <i class="fas fa-user-check"></i>Accounts
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Schedule" style="font-size: 18px;">
                            <i class="fas fa-calendar"></i>Scheduling
                        </a>
                    </li>
                </ul>

                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Packages"><i class="fas fa-box"></i> Packages</a>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Problem"><i class="fa fa-exclamation-triangle"></i>Problems</a>
                    </li>
                </ul>

                <ul>
                    <li class="selected">
                        <a href="<?= ROOT ?>/Manager/Holiday    " style="font-size: 18px;">
                            <i class="fas fa-umbrella-beach"></i> Holiday</a>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Event" style="font-size: 18px;">
                            <i class="fa fa-calendar-plus"></i>Event</a>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Foodtable" style="font-size: 18px;">
                            <i class="fa fa-pizza-slice"></i>Food Plane</a>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Leaverequest" style="font-size: 18px;">
                            <i class="fas fa-hand-paper"></i>Request</a>
                    </li>
                </ul>
            </ul>
        </div>
        <div style="display: block;">
            <div class="header" style="margin-top:1">
                <div class="name">
                    <h1>Hey Namal</h1>
                    <p style="color: white;">Let’s do some productive activities today</p>
                </div>
                <div class="profile">
                    <button class="profilebtn" onclick="handleClick()">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
                <div class="profile-card" id="profileCard" style="margin-top: 21%;">
                    <button class="back" onclick="handleHide()"><i class="fas fa-chevron-left"></i></button>
                    <img alt="Profile picture of Thilina Perera" height="100" src="../Assets/shimhan.jpg" width="100" class="profile" />
                    <h2>
                        Thilina Perera
                    </h2>
                    <p>
                        ID    RS0110657
                    </p>
                    <button class="profile-button">
                        Personal info
                    </button>
                    <button class="secondary-button">
                        Change Password
                    </button>
                    <button class="logout-button">
                        LogOut
                    </button>
                </div>
            </div>
            <div class="alltables">
                <div class="leave-cal">
                    <div class="leave-form-container">
                        <h1 style="color: #233E8D;">Publish Holidays</h1>
                        <form action="<?= ROOT ?>/Manager/Holiday/addleave" method="POST" class="leave-form" id="leaveForm">
                            <div class="form-group">
                                <label for="Leave_Type">Leave Type:</label>
                                <select name="Leave_Type" id="leavetype" class="form-control" required>
                                    <option value="">Select Leave Type</option>
                                    <option value="Annual Leave">Annual Leave</option>
                                    <option value="Poya Leave">Poya Leave</option>
                                    <option value="Independent Day">Independent Day</option>
                                    <option value="Cultural Leave">Cultural Leave</option>
                                    <option value="Religion Leave">Religion Leave</option>
                                    <option value="Other">Other</option>
                                </select>

                                <label for="Date_of_Holiday">Date of Holiday:</label>
                                <input type="date" name="Date_of_Holiday" id="Date_of_Holiday" class="form-control"
                                    value="<?php echo isset($_POST['Date_of_Holiday']) ? $_POST['Date_of_Holiday'] : ''; ?>" required>
                                <label for="About">About:</label>
                                <textarea name="About" id="About" required class="form-control" required><?php echo isset($_POST['About']) ? htmlspecialchars($_POST['About']) : ''; ?></textarea>
                                <div class="button-group">
                                    <button type="submit" class="btn btn-primary" style="margin-top:    5%;">Publish</button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="published-holidays" style="width: 25%; margin-top: 7.5%; padding-left: 20px;">
                    <h2>Published Holidays</h2>
                    <div class="holiday-list">
                        <?php if (!empty($data['allholidays'])): ?>
                            <?php foreach ($data['allholidays'] as $holiday): ?>
                                <div class="holiday-item">
                                    <h3><?= htmlspecialchars($holiday->Leave_Type) ?></h3>
                                    <p>Date: <?= htmlspecialchars($holiday->Date_of_Holiday) ?></p>
                                    <p>About: <?= htmlspecialchars($holiday->About) ?></p>
                                    <button class="del-btn" onclick="deleteholiday(<?= $holiday->HolidayID ?>)">Delete</button>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No holidays published yet.</p>
                        <?php endif ?>
                        <!-- Delete Confirmation Modal -->
                        <div id="deleteModal" class="modal">
                            <div class="modal-content">
                                <h2>Confirm Deletion</h2>
                                <p>Are you sure you want to delete this holiday?</p>
                                <div class="modal-buttons">
                                    <button id="confirmDelete" class="confirm-btn">Yes, Delete</button>
                                    <button id="cancelDelete" class="cancel-btn">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="calendar">
                    <div class="calheading">
                        <div id="prev" class="btn"><i class="fa-solid fa-arrow-left"></i></div>
                        <div id="month-year"></div>
                        <div id="next" class="btn"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    <div class="weekdays">
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thur</div>
                        <div>Fri</div>
                        <div>Sat</div>
                        <div>Sun</div>
                    </div>
                    <div class="days" id="days"></div>
                </div>
            </div>

            <script>
                function deleteholiday(HolidayID) {
                    const modal = document.getElementById("deleteModal");
                    const confirmBtn = document.getElementById("confirmDelete");
                    const cancelBtn = document.getElementById("cancelDelete");

                    // Show modal
                    modal.style.display = "flex";

                    // When the user clicks "Yes, Delete"
                    confirmBtn.onclick = function() {
                        window.location.href = `<?= ROOT ?>/Manager/Holiday/deleteholiday/${HolidayID}`;
                    };

                    // When the user clicks "Cancel"
                    cancelBtn.onclick = function() {
                        modal.style.display = "none";
                    };

                    // Close modal when clicking outside
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    };
                }
            </script>
</body>

</html>