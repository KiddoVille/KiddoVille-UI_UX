<html>

<head>
    <title>
        KIDDO VILLE Schedule
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Schedule.css?v=<?= time() ?>" />
    <link rel="icon" href="<?= CSS ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Dashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Allocation.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Manager/profileview.js"></script>
</head>

<body id="body">
    <div class="sidebar">
            <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;margin-left:10%">
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
                        <a  href="<?= ROOT ?>/Manager/Problem"><i class="fa fa-exclamation-triangle"></i>Problems</a>
                    </li>
                </ul>

                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Publish" style="font-size: 18px;">
                            <i class="fas fa-share"></i>Publish</a>
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
                        <a href="#" style="font-size: 18px;">
                            <i class="fas fa-info-circle"></i>Info
                        </a>
                        <ul class="dropdown">
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Blog"><i class="fas fa-blog"></i>Blog</a></li>
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Aboutus"><i class="fas fa-info-circle"></i>About Us</a></li>
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Contactus"><i class="fas fa-envelope"></i>Contact Us</a></li>
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Profile"><i class="fas fa-user-circle"></i>Home</a></li>

                        </ul>
                    </li>
                </ul>

            </ul>
        </div>
    <div class="header" style="margin-top:-41%">
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
            <div class="activity-schedule" style="position:fixed;margin-top:-25%;margin-left:-28%;z-index:2;">
                <div style="display: flex;justify-content:space-around;">
                    <h2 style="color: #233E8D;">Upcoming Days Activity Schedule</h2>
                </div>

                <div class="filters">
                    <div style="display: flex;width:100px;">
                        <input type="date" value="2025-01-10">
                        <input type="date" value="2025-01-17">
                    </div>
                    <span style="margin-left:-17.5%">to</span>
                    <select style="margin-right: 325px;width:150px;">
                        <option value="" disabled selected>Select age group</option>
                        <option value="2 - 5">2 - 5</option>
                        <option value="5 - 7">5 - 7</option>
                        <option value="7 - 9">7 - 9</option>
                        <option value="9 - 11">9 - 11</option>
                    </select>
                </div>

                <table>
                    <thead>
                        <tr class="table_headings">
                            <th style="color: #233E8D;background-color:transparent">Activity</th>
                            <th style="color: #233E8D;background-color:transparent">Staff</th>
                            <th style="color: #233E8D;background-color:transparent">Start Time</th>
                            <th style="color: #233E8D;background-color:transparent">End Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td><select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select></td>
                            <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                            <td>
                                <select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td>
                                <select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select>
                            </td>
                            <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                            <td><select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td><select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select></td>
                            <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                            <td>
                                <select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td>
                                <select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select>
                            </td>
                            <td>
                                <select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select>
                            </td>
                            <td>
                                <select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td>
                                <select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select>
                            </td>
                            <td>
                                <select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select>
                            </td>
                            <td>
                                <select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td>
                                <select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select>
                            </td>
                            <td>
                                <select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select>
                            </td>
                            <td>
                                <select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="" class="styled-select" id="">
                                    <option value="Select Activity" disabled selected>Select Activity</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Tea time</option>
                                    <option value="">Lunch</option>
                                    <option value="">Creative Acitivity</option>
                                    <option value="">Story Time</option>
                                    <option value="">Out door Time</option>
                                    <option value="">Basic Learning Time</option>
                                    <option value="">Tea time Evening</option>
                                    <option value="">End Time</option>
                                </select>
                            </td>
                            <td>
                                <select name="Staff name" class="styled-select" id="">
                                    <option value="Select Staff" disabled selected>Select Staff</option>
                                    <option value="">Ms.Rahul</option>
                                    <option value="">Ms.Thilina</option>
                                    <option value="">Ms.Hanshika</option>
                                    <option value="">Ms.Kivitha</option>
                                </select>
                            </td>
                            <td><select name="Start time" class="styled-select" id="">
                                    <option value="Select Start Time" disabled selected>Select Start Time <i class="fas fa-chevron-down"></i></option>
                                    <option value="">08.00</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                </select></td>
                            <td>
                                <select name="End Time" class="styled-select" id="">
                                    <option value="Select End Time" disabled selected>Select End Time</option>
                                    <option value="">09.00</option>
                                    <option value="">10.00</option>
                                    <option value="">11.00</option>
                                    <option value="">12.00</option>
                                    <option value="">13.00</option>
                                    <option value="">14.00</option>
                                    <option value="">15.00</option>
                                    <option value="">15.30</option>
                                    <option value="">16.00</option>
                                    <option value="">17.00</option>
                                    <option value="">17.30</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="resetbtn" onclick="resetSelects()" style="background-color: #233E8D;color:white;">Reset</button>
            </div>
        </div>
    </div>

    <script>
        // Store the initial state of the table rows globally when the page loads
            function resetSelects() {
                // Select all <select> elements within both tables
                const selects = document.querySelectorAll("#foodtable select, #snacktable select");
                // Reset each <select> to its default (first) option
                selects.forEach(select => select.selectedIndex = 0);
            }
        //save all select values to local storage
        function saveValues() {
            const inputs = document.querySelectorAll("select");

            //iterate over each element and save its value in local storage
            inputs.forEach((element) => {
                localStorage.setItem(element.id, element.value)
            });
        }
        //load values from local storage for all selects

        function loadValues() {
            const inputs = document.querySelectorAll("select");
            inputs.forEach((element) => {
                element.value = localStorage.getItem(element.id);
            });
        }

        // Clear all stored values for inputs and selects
        function clearStorage() {
            const inputs = document.querySelectorAll("select");

            inputs.forEach((element) => {
                localStorage.removeItem(element.id);
                element.value = ""; // Clear the field in the UI as well
            });
        }

        // Event listener for each input and select to save values on change
        document.querySelectorAll("select").forEach((element) => {
            element.addEventListener("change", saveValues);
        });

    </script>
</body>

</html>