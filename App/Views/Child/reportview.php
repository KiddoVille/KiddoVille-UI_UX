<html>

<head>
    <title>Report</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Child/report.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Child/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Child/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/report.js?v=<?= time() ?>"></script>
</head>

<body style="overflow: hidden;">
    <div class="container">
        <!-- minimzed sidebar -->
        <div class="sidebar" id="sidebar1">
            <img src="<?= IMAGE ?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
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
                <li class="selected" style="margin-top: 40px;">
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
                <li class="hover-effect unselected">
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
                    <a href="<?= ROOT ?>/Child/payment">
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
        <!-- navigation to home and stuff -->
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px; margin-left: 15px !important;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px; margin-left: 20px;">
                    <ul>
                        <li class="hover-effect first"
                            onclick="removechildsession();">
                            <img src="<?= isset($data['parent']['image']) ? $data['parent']['image'] . '?v=' . time() : '' ?>"
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
                                <?php if ($child['name'] === $data['selectedchildren']['name']) {
                                    echo "select-child";
                                } ?>
                            "
                                onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>','<?= isset($child['Child_Id']) ? $child['Child_Id'] : '' ?>')">
                                <img src="<?= isset($child['image']) ? $child['image'] . '?v=' . time() : ROOT . '/Uploads/default_images/default_profile.jpg' ?>"
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px; <?php if ($child['name'] !== $data['selectedchildren']['name']) {
                                                                                                echo "margin-left: -20px !important";
                                                                                            } ?>">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" id="main-content" style="overflow: none;">
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
            <div class="stats">
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Pending reports</h3>
                    <p style="margin-bottom: 3px;">Sep first week</p>
                    <span style="font-weight: 50;">report's still in progress</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/report view.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Report views</h3>
                    <p style="margin-bottom: 3px;">1 left</p>
                    <span style="font-weight: 50;">Report left to view</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?= IMAGE ?>/report download.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 50px; margin-right: 10px; margin-bottom: -15px;">Report downloads</h3>
                    <p style="margin-bottom: 3px;">5 downloaded</p>
                    <span style="font-weight: 50;">Total of 5 report downloaded</span>
                </div>
            </div>
            <div class="saperate" style="margin-top: 25px !important; height: 460px !important;">
                <!-- Report table -->
                <div class="report-container" style="width: 1200px !important;">
                    <h2 style="margin-top: 10px !important; margin-bottom: 2px;"> Weekly Reports </h2>
                    <hr>
                    <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Maid</th>
                                <th>View</th>
                                <th>Download</th>
                                <th>Viewed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>25/03/2025</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>02/01/2025</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>20/12/2024</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>10/11/2024</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>13/08/2024</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>13/08/2024</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>13/08/2024</td>
                                <td>Anula</td>
                                <td><i class="fas fa-eye icon reportbtn"></i></td>
                                <td><i class="fas fa-download icon"></i></td>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- report Modal -->
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
        <!-- Messager navigation -->
        <a href="<?= ROOT ?>/Child/Message" class="chatbox">
            <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots"
                style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
            <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                <p> 2</p>
            </div>
        </a>
    </div>
    <!-- profile card -->
    <div class="profile-card" id="profileCard" style="margin-top: -710px;">
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
        <button class="profile-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildProfile'">
            Profile
        </button>
        <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ParentProfile'">
            Parent profile
        </button>
        <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/GuardianProfile'">
            Guardian profile
        </button>
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
                        window.location.href = '<?= ROOT ?>/Child/Report';
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
                        window.location.href = '<?= ROOT ?>/Parent/Report';
                    } else {
                        console.error("Failed to remove child name from session.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }
    </script>
</body>

</html>