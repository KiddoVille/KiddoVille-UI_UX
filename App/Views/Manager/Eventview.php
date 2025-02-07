<html>

<head>
    <title>
        KIDDO VILLE Schedule
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="<?= CSS ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Event.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Manager/foodtable.js"></script>
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
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Holiday" style="font-size: 18px;">
                            <i class="fas fa-umbrella-beach"></i> Holiday</a>
                    </li>
                </ul>
                <ul>
                    <li class="selected">
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
        </div>



        <div class="alltables">
            <div class="publish-events">
                <h1 style="color: #233E8D;">Publish Event</h1>
                <form action="<?= ROOT ?>/Manager/Event/addEvent" method="post" class="leave-form">
                    <div class="form-group">
                        <label for="EName">Event Type <span class="required">*</span></label>
                        <select name="EName" id="EName" class="form-control">
                            <option value="">Select Event Type</option>
                            <option value="Annual Event" <?php if (isset($_POST['EName']) && $_POST['EName'] == "Annual Event") echo 'selected'; ?>>Annual Event</option>
                            <option value="Sports day" <?php if (isset($_POST['EName']) && $_POST['EName'] == "Sports day") echo 'selected'; ?>>Sports Day</option>
                            <option value="Cultural Leave" <?php if (isset($_POST['EName']) && $_POST['EName'] == "Cultural Leave") echo 'selected'; ?>>Cultural Leave</option>
                            <option value="Eid Festival" <?php if (isset($_POST['EName']) && $_POST['EName'] == "Eid Festival") echo 'selected'; ?>>Eid Festival</option>
                            <option value="Other" <?php if (isset($_POST['EName']) && $_POST['EName'] == "Other") echo 'selected'; ?>>Other</option>
                        </select>

                        <label for="Date">Date <span class="required">*</span></label>
                        <input type="date" id="Edate" name="EDate" class="form-control" value="<?= isset($_POST['EDate']) ? htmlspecialchars($_POST['EDate']) : ''; ?>" required>

                        <label for="Edescription">Description</label>
                        <textarea id="Edescription" name="Edescription" placeholder="Include comments for Event type" class="form-control" required><?= isset($_POST['Edescription']) ? htmlspecialchars($_POST['Edescription']) : ''; ?></textarea>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
            <div class="Display-events">
                <h2>Published Events</h2>
                <div class="event-list">
                    <?php if (!empty($data['allevents'])): ?>
                        <?php foreach ($data['allevents'] as $event): ?>
                            <div class="lists">
                                <h3><?= htmlspecialchars($event->EName) ?></h3>
                                <p>Date: <?= htmlspecialchars($event->EDate) ?></p>
                                <p>Description: <?= htmlspecialchars($event->Edescription) ?></p>
                                <button class="del-btn" onclick="deleteEvent(<?= $event->EventID ?>)">Delete</button>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No events published yet.</p>
                    <?php endif ?>

                    <!-- Delete Confirmation Modal -->
                    <div id="deleteModal" class="modal">
                        <div class="modal-content">
                            <h2>Confirm Deletion</h2>
                            <p>Are you sure you want to delete this Event?</p>
                            <div class="modal-buttons">
                                <button id="confirmDelete" class="confirm-btn">Yes, Delete</button>
                                <button id="cancelDelete" class="cancel-btn">Cancel</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteEvent(EventID) {
            const modal = document.getElementById("deleteModal");
            const confirmBtn = document.getElementById("confirmDelete");
            const cancelBtn = document.getElementById("cancelDelete");

            // Show modal
            modal.style.display = "flex";

            // When the user clicks "Yes, Delete"
            confirmBtn.onclick = function() {
                window.location.href = `<?= ROOT ?>/Manager/Event/deleteEvent/${EventID}`;
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