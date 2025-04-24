<html>

<head>
    <title>
        KIDDO VILLE Schedule
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Schedule.css?v=<?= time() ?>" />
    <link rel="icon" href="<?= CSS ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Dashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/StaffSchedule.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Manager/profileview.js"></script>
</head>

<body id="body">
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
                <li class="selected">
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
                    <a href="<?= ROOT ?>/Manager/Meeting"><i class="fa fa-exclamation-triangle"></i>Meeting</a>
                </li>
            </ul>

            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Holiday" style="font-size: 18px;">
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
    <div class="header" style="margin-top:-40.05%">
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


    <div class="container" id="container" style="margin-top:22%;margin-left:-6.5%;">
        <div id="content1" class="content show">
            <form action="<?= ROOT ?>/Manager/Schedule/addschedule" method="post">
                <div class="activity-schedule" style="position:fixed;margin-top:-25%;margin-left:-28%;z-index:2;">
                    <div style="display: flex;justify-content:space-around;">
                        <h2 style="color: #233E8D;margin-left:-25%">Tomorrow Activity Schedule</h2>
                    </div>
                    <hr style="margin-top: -1%;">

                    <div class="filters">
                        <div style="display: flex;width:100px;">
                            <input type="date" id="onlyTomorrow" name="Date">
                        </div>
                        <select name="AgeGroup" style="margin-right: 325px;width:150px;" id="ageGroupSelect">
                            <option value="" disabled selected>Select age group</option>
                            <option value="3 - 5">3 - 5</option>
                            <option value="6 - 9">6 - 9</option>
                            <option value="10 - 13">10 - 13</option>

                        </select>
                    </div>

                    <div class="table-div">
                        <table>
                            <thead>
                                <tr class="table_headings">
                                    <th style="color: #233E8D;background-color:transparent">Activity</th>
                                    <th style="color: #233E8D;background-color:transparent">Staff</th>
                                    <th style="color: #233E8D;background-color:transparent">Start_Time</th>
                                    <th style="color: #233E8D;background-color:transparent">End_Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" value="Breakfast" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" class="styled-select" readonly>
                                    <td>
                                        <input type="text" value="8:00" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" value="8:30" readonly class="styled-select">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <select name="Activity" class="styled-select" id="">
                                            <option value="Select Activity" disabled selected>Select Activity</option>
                                            <option value="">Creative Acitivity</option>
                                            <option value="">Story Time</option>
                                            <option value="">Out door Time</option>
                                            <option value="">Basic Learning Time</option>
                                            <option value="">Maths</option>
                                            <option value="">Science</option>
                                            <option value="">English</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="TeacherID" class="styled-select" id="">
                                            <option value="Select Staff" disabled selected>Select Staff</option>
                                            <option value="">Ms.Rahul</option>
                                            <option value="">Ms.Thilina</option>
                                            <option value="">Ms.Hanshika</option>
                                            <option value="">Ms.Kivitha</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="8:30" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" value="10:00" readonly class="styled-select">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" value="Refreshment" class="styled-select" readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="styled-select" readonly>
                                    </td>
                                    <td>
                                        <input type="text" value="10:00" class="styled-select" readonly>
                                    </td>
                                    <td>
                                        <input type="text" value="10:30" class="styled-select" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="" class="styled-select" id="">
                                            <option value="Select Activity" disabled selected>Select Activity</option>
                                            <option value="">Creative Acitivity</option>
                                            <option value="">Story Time</option>
                                            <option value="">Out door Time</option>
                                            <option value="">Basic Learning Time</option>
                                            <option value="">Maths</option>
                                            <option value="">Science</option>
                                            <option value="">English</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="TeacherID" class="styled-select" id="">
                                            <option value="Select Staff" disabled selected>Select Staff</option>
                                            <option value="">Ms.Rahul</option>
                                            <option value="">Ms.Thilina</option>
                                            <option value="">Ms.Hanshika</option>
                                            <option value="">Ms.Kivitha</option>
                                        </select>
                                    </td>               
                                    <td>
                                        <input type="text" value="10:30" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" value="12:00" readonly class="styled-select">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="Ready for Lunch" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" name="" id="" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" value="12:00" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" value="13:00" readonly class="styled-select">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" class="styled-select" value="Lunch" readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="styled-select" readonly>
                                    </td>
                                    <td>
                                        <input type="text" value="13:00" class="styled-select" readonly>
                                    </td>
                                    <td>
                                        <input type="text" value="13:30" class="styled-select" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="" class="styled-select" id="">
                                            <option value="Select Activity" disabled selected>Select Activity</option>
                                            <option value="">Creative Acitivity</option>
                                            <option value="">Story Time</option>
                                            <option value="">Out door Time</option>
                                            <option value="">Basic Learning Time</option>
                                            <option value="">Maths</option>
                                            <option value="">Science</option>
                                            <option value="">English</option>
                                        </select>
                                    </td>
                                    <td><select name="TeacherID" class="styled-select" id="">
                                            <option value="Select Staff" disabled selected>Select Staff</option>
                                            <option value="">Ms.Rahul</option>
                                            <option value="">Ms.Thilina</option>
                                            <option value="">Ms.Hanshika</option>
                                            <option value="">Ms.Kivitha</option>
                                        </select></td>
                                    <td>
                                        <input type="text" value="13:30" readonly class="styled-select">
                                    </td>
                                    <td>
                                        <input type="text" value="15:00" readonly class="styled-select">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="" class="styled-select" id="">
                                            <option value="Select Activity" disabled selected>Select Activity</option>
                                            <option value="">Creative Acitivity</option>
                                            <option value="">Story Time</option>
                                            <option value="">Out door Time</option>
                                            <option value="">Basic Learning Time</option>
                                            <option value="">Maths</option>
                                            <option value="">Science</option>
                                            <option value="">English</option>
                                        </select>
                                    </td>
                                    <td><select name="TeacherID" class="styled-select" id="">
                                            <option value="Select Staff" disabled selected>Select Staff</option>
                                            <option value="">Ms.Rahul</option>
                                            <option value="">Ms.Thilina</option>
                                            <option value="">Ms.Hanshika</option>
                                            <option value="">Ms.Kivitha</option>
                                        </select></td>
                                    <td>
                                        <input type="text" value="15:00" readonly class="styled-select">

                                    </td>
                                    <td>
                                        <input type="text" value="16:30" readonly class="styled-select">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="Activity" class="styled-select" id="">
                                            <option value="Select Activity" disabled selected>Select Activity</option>
                                            <option value="">Creative Acitivity</option>
                                            <option value="">Story Time</option>
                                            <option value="">Out door Time</option>
                                            <option value="">Basic Learning Time</option>
                                            <option value="">Maths</option>
                                            <option value="">Science</option>
                                            <option value="">English</option>
                                        </select>
                                    </td>

                                    <td>
                                        <select name="TeacherID" class="styled-select" id="">
                                            <option value="" disabled selected>Select Staff</option>
                                            <?php if (isset($teachers) && is_array($teachers)): ?>
                                                <?php foreach ($teachers as $teacher): ?>
                                                    <option value="<?= $teacher->TeacherID ?>"><?= $teacher->LastName ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="16:30" readonly class="styled-select">

                                    </td>
                                    <td>
                                        <input type="text" class="styled-select" readonly value="17:00">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="resetbtn" style="background-color: #233E8D;color:white;">Add</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set tomorrow's date
            const dateInput = document.getElementById('onlyTomorrow');
            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(today.getDate() + 1);

            const yyyy = tomorrow.getFullYear();
            const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
            const dd = String(tomorrow.getDate()).padStart(2, '0');

            dateInput.value = `${yyyy}-${mm}-${dd}`;
            dateInput.min = dateInput.value;
            dateInput.max = dateInput.value;

            const ageGroupSelect = document.getElementById('ageGroupSelect');
            const activityRows = document.querySelectorAll('tbody tr');
            const fixedRows = document.querySelectorAll('tbody tr:nth-child(1), tbody tr:nth-child(3), tbody tr:nth-child(6)'); // Breakfast, Refreshment, Lunch rows
            const lunchRow = document.querySelector('tbody tr:nth-child(6)'); // Lunch row
            const lunchStartTimeInput = lunchRow.querySelector('td:nth-child(3) input'); // Lunch start time input
            const lunchEndTimeInput = lunchRow.querySelector('td:nth-child(4) input'); // Lunch end time input

            // Get post-lunch activity rows
            const postLunchActivityRow = document.querySelector('tbody tr:nth-child(7)'); // First activity after lunch
            const subjectRow = document.querySelector('tbody tr:nth-child(8)'); // Second activity after lunch (subject)
            const finalActivityRow = document.querySelector('tbody tr:nth-child(9)'); // Final activity

            ageGroupSelect.addEventListener('change', function() {
                const selectedAgeGroup = this.value;

                // Always show fixed rows (meals)
                fixedRows.forEach(row => {
                    row.style.display = '';
                });

                // Adjust lunch time and post-lunch activities based on age group
                if (selectedAgeGroup === '6 - 9' || selectedAgeGroup === '10 - 13') {
                    // Set lunch time to 14:00 for older age groups
                    lunchStartTimeInput.value = '14:00';
                    lunchEndTimeInput.value = '14:30';

                    // Update post-lunch activity times
                    if (postLunchActivityRow) {
                        postLunchActivityRow.querySelector('td:nth-child(3) input').value = '14:30';
                        postLunchActivityRow.querySelector('td:nth-child(4) input').value = '15:30';

                        // Update first dropdown to show it's an activity
                        const activitySelect = postLunchActivityRow.querySelector('td:nth-child(1) select');
                        if (activitySelect) {
                            activitySelect.querySelector('option[disabled]').textContent = 'Select Activity';
                        }
                    }

                    if (subjectRow) {
                        subjectRow.querySelector('td:nth-child(3) input').value = '15:30';
                        subjectRow.querySelector('td:nth-child(4) input').value = '16:30';

                        // Update first dropdown to show it's a subject
                        const subjectSelect = subjectRow.querySelector('td:nth-child(1) select');
                        if (subjectSelect) {
                            subjectSelect.querySelector('option[disabled]').textContent = 'Select Subject';
                        }
                    }

                    if (finalActivityRow) {
                        finalActivityRow.querySelector('td:nth-child(3) input').value = '16:30';
                        finalActivityRow.querySelector('td:nth-child(4) input').value = '17:00';
                    }

                    // Show only needed activity rows for older kids
                    activityRows.forEach((row, index) => {
                        row.style.display = index >= 10 - 5 ? '' : 'none';
                    });

                    // Make sure staff dropdowns are enabled and reset to default
                    activityRows.forEach(row => {
                        const staffSelect = row.querySelector('td:nth-child(2) select');
                        if (staffSelect) {
                            staffSelect.disabled = false;
                            staffSelect.selectedIndex = 0;
                        }
                    });
                } else if (selectedAgeGroup === '3 - 5') {
                    // Keep original lunch time (13:00) for younger kids
                    lunchStartTimeInput.value = '13:00';
                    lunchEndTimeInput.value = '13:30';

                    // Update post-lunch activity times
                    if (postLunchActivityRow) {
                        postLunchActivityRow.querySelector('td:nth-child(3) input').value = '13:30';
                        postLunchActivityRow.querySelector('td:nth-child(4) input').value = '15:30';
                    }

                    if (subjectRow) {
                        subjectRow.querySelector('td:nth-child(3) input').value = '15:30';
                        subjectRow.querySelector('td:nth-child(4) input').value = '16:30';
                    }

                    if (finalActivityRow) {
                        finalActivityRow.querySelector('td:nth-child(3) input').value = '16:30';
                        finalActivityRow.querySelector('td:nth-child(4) input').value = '17:00';
                    }

                    // Show all activity rows for younger kids
                    activityRows.forEach(row => {
                        row.style.display = '';

                        // Clear and disable all staff selects for age group 3-5
                        const staffSelect = row.querySelector('td:nth-child(2) select');
                        if (staffSelect) {
                            staffSelect.selectedIndex = 0; // Reset to default option
                            staffSelect.disabled = true; // Disable the select
                        }

                        // Also clear any static staff inputs if they exist
                        const staffInput = row.querySelector('td:nth-child(2) input');
                        if (staffInput) {
                            staffInput.value = ''; // Clear the input
                        }
                    });
                } else {
                    // Reset lunch time and schedule to default if no age group selected
                    lunchStartTimeInput.value = '13:00';
                    lunchEndTimeInput.value = '13:30';

                    // Reset post-lunch activity times
                    if (postLunchActivityRow) {
                        postLunchActivityRow.querySelector('td:nth-child(3) input').value = '13:30';
                        postLunchActivityRow.querySelector('td:nth-child(4) input').value = '15:00';
                    }

                    if (subjectRow) {
                        subjectRow.querySelector('td:nth-child(3) input').value = '15:00';
                        subjectRow.querySelector('td:nth-child(4) input').value = '16:30';
                    }

                    if (finalActivityRow) {
                        finalActivityRow.querySelector('td:nth-child(3) input').value = '16:30';
                        finalActivityRow.querySelector('td:nth-child(4) input').value = '17:00';
                    }

                    // Show all rows if no age group selected
                    resetFilter();

                    // Enable staff dropdowns
                    activityRows.forEach(row => {
                        const staffSelect = row.querySelector('td:nth-child(2) select');
                        if (staffSelect) {
                            staffSelect.disabled = false;
                            staffSelect.selectedIndex = 0;
                        }
                    });
                }
            });

            function resetFilter() {
                activityRows.forEach(row => {
                    row.style.display = '';
                });
            }
        });
    </script>
</body>

</html>