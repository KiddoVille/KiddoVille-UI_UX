<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Manager</title>
    <link rel="icon" href="<?= IMAGE ?>/KIDDOVILLE_LOGO.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="<?= JS ?>/Manager/profileview.js"></script>
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo_stuf" style="display: flex;margin-top:6%">
                <img src="<?= IMAGE ?>/logo_light.png" style="width: 40px;height:40px" alt="">
                <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            </div>
            <ul>
                <li class="selected">
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

        <div class="main-content">
            <div class="header">
                <div class="name">
                    <h1>Hey Namal</h1>
                    <p style="color: white;">Let’s do some productive activities today</p>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                    <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
                </div>
                <div class="bell-icon" style="cursor: pointer;">
                    <button class="bellbtn" onclick="handlenotify()">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="message-dropdown" id="notification">
                        <ul>
                            <li>
                                <p>New Message 1 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">Content like a message</p>
                            </li>
                            <li>
                                <p>New Message 2 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">Content like a message</p>
                            </li>
                            <li>
                                <p>New Message 3 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">Content like a message</p>
                            </li>
                            <li>
                                <p>New Message 4 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">Content like a message</p>
                            </li>
                            <li>
                                <p>New Message 5 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">Content like a message</p>
                            </li>
                            <li>
                                <p>New Message 6 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">Content like a message</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="message-numbers">
                    <p> 2</p>
                </div>
                <div class="profile">
                    <button class="profilebtn" onclick="handleClick()">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
                <div class="profile-card" id="profileCard">
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

            <div class="stats">
                <div class="stat">
                    <h3 style="color: #233E8D;">Total Attendance</h3>
                    <h2 style="margin-bottom: 3px;color: #233E8D;">89/120</h2>
                    <p style="color: #233E8D;">Out of 120 Children today attended to Daycare</p>
                </div>
                <div class="stat">
                    <h3 style="color: #233E8D;">Total Employees Attendance</h3>
                    <h2 style="margin-bottom: 3px;color: #233E8D;">20 Employees</h2>
                    <p style="color: #233E8D;">Out of 24 employees today attended to Daycare</p>
                </div>
                <div class="stat">
                    <h3 style="color: #233E8D;">Total Enrollment</h3>
                    <h2 style="margin-bottom: 3px;color: #233E8D;">13 Children</h2>
                    <p style="color: #233E8D;">Dec-2024</p>
                </div>
            </div>

            <div class="two-divs">
                <div class="graph">
                    <h2 style="color: #233E8D;">Income of the month</h2>
                    <div class="description_gr">
                        <p style="color: #233E8D;font-weight:bold;color:red;font-size:18px;">Pending :LKR.56000</p>
                        <p style="color: #233E8D;font-weight:bold;color:green;font-size:18px;">Paid : LKR.123000</p>
                        <p style="color: #233E8D;font-weight:bold;font-size:18px;">Total:LKR. 156000</p>
                    </div>
                    <canvas id="inventoryChart" width="600" height="157"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script src="inventoryGraph.js"></script>
                </div>
                <div class="leaverequest">
                    <div id="leave-requests" class="scroll-container">
                        <h1 style="margin-top: 1%; color:#233E8D; font-size:24px">Leave requests</h1>

                        <!-- Leave Requests -->
                        <div class="request" data-name="John Doe" data-role="Teacher" data-dates="2024-12-20 to 2024-12-22" data-reason="Flu">
                            <img img src="<?= IMAGE ?>/profilePic.png" class="resize" style="width: 50px; border-radius: 50%;">
                            <p class="l_name"><strong>John Doe</strong><br>Teacher</p>
                            <p style="margin-top: 10%;">From: 2024-12-20 To: 2024-12-22</p>
                            <p>Reason: Flu</p>
                            <button class="viewbtn">View</button>
                        </div>

                        <div class="request" data-name="Jane Smith" data-role="Maid" data-dates="2024-12-25 to 2024-12-30" data-reason="Family Trip">
                            <img img src="<?= IMAGE ?>/profilePic.png" class="resize" style="width: 50px; border-radius: 50%;">
                            <p class="l_name"><strong>Jane Smith</strong><br>Maid</p>
                            <p style="margin-top: 10%;">From: 2024-12-25 To: 2024-12-30</p>
                            <p>Reason: Family Trip</p>
                            <button class="viewbtn">View</button>
                        </div>

                        <!-- Overlay -->
                        <div class="overlay" id="overlay"></div>

                        <!-- Popup -->
                        <div class="popup" id="popup">
                            <h3>Personal Leave</h3>
                            <div class="form-field">
                                <label>Employee Name</label>
                                <input type="text" id="popup-name" readonly>
                            </div>
                            <div class="form-field">
                                <label>Application Type</label>
                                <input type="text" value="Leave Request" readonly>
                            </div>
                            <div class="form-field">
                                <label>Leave</label>
                                <input type="text" id="popup-dates" readonly>
                            </div>
                            <div class="form-field">
                                <label>Reason</label>
                                <input type="text" id="popup-reason" readonly>
                            </div>
                            <div class="buttons">
                                <button class="approve-btn">Approve</button>
                                <button class="reject-btn">Reject</button>
                            </div>
                            <span class="close-btn" id="closePopup" style="text-decoration: none;">Close</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="today_visitors">
                <div class="today_visitors_header">
                    <span><i class="fas fa-door-open"></i>Lastday Visitors Summary</span>
                </div>
                <div class="visitor-table-topics">
                    <div class="visitorname"><span>NAME</span></div>
                    <div class="visitorposition"><span>POSITION</span></div>
                    <div class="visitorpurpose"><span>PURPOSE</span></div>
                </div>
                <div class="today_visitors_content">
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Lisa Johnson</span></div>
                        <div class="visitorposition"><span>Delivery Personnel</span></div>
                        <div class="visitorpurpose"><span>Delivering office supplies</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Dr. Emily Brown</span></div>
                        <div class="visitorposition"><span>Pediatrician</span></div>
                        <div class="visitorpurpose"><span>Conducting health check-ups</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Michael Smith</span></div>
                        <div class="visitorposition"><span>Maintenance Staff</span></div>
                        <div class="visitorpurpose"><span>Inspecting AC systems</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Sarah White</span></div>
                        <div class="visitorposition"><span>Parent</span></div>
                        <div class="visitorpurpose"><span>Meeting with teachers</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>David Green</span></div>
                        <div class="visitorposition"><span>IT Technician</span></div>
                        <div class="visitorpurpose"><span>Fixing internet issues</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Anna Roberts</span></div>
                        <div class="visitorposition"><span>Event Organizer</span></div>
                        <div class="visitorpurpose"><span>Planning holiday events</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>John Carter</span></div>
                        <div class="visitorposition"><span>Government Inspector</span></div>
                        <div class="visitorpurpose"><span>Checking safety protocols</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Karen Lee</span></div>
                        <div class="visitorposition"><span>Consultant</span></div>
                        <div class="visitorpurpose"><span>Discussing childcare strategy</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Daniel Williams</span></div>
                        <div class="visitorposition"><span>Courier</span></div>
                        <div class="visitorpurpose"><span>Package delivery</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Jessica Brown</span></div>
                        <div class="visitorposition"><span>Photographer</span></div>
                        <div class="visitorpurpose"><span>Taking promotional photos</span></div>
                    </div>
                    <div class="detailed-lines">
                        <div class="visitorname"><span>Chris Taylor</span></div>
                        <div class="visitorposition"><span>Electrician</span></div>
                        <div class="visitorpurpose"><span>Repairing power issues</span></div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <script>
        // Get the canvas element
        const ctx = document.getElementById('inventoryChart').getContext('2d');

        // const productLabels = ['Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const productLabels = ['1st', '2nd', '3rd', '4th'];
        const inventoryData = [56, 32, 42, 65]; // Inventory levels for each product

        // Create the bar chart
        const inventoryChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: productLabels,
                datasets: [{
                    label: 'Income in LKR',
                    data: inventoryData, // Inventory data
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1 // Border width for bars
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true, // Show the legend
                    },
                    tooltip: {
                        enabled: true, // Show tooltips on hover
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true, // Start y-axis at zero
                        title: {
                            display: true,
                            text: 'Income in LKR X 1000' // Y-axis title
                        },
                        ticks: {
                            stepSize: 10
                        },
                        max: 100
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Weekly Income'
                        }
                    }
                }
            }
        });



        const leaveRequests = [{
                name: "Alice Brown",
                type: "Teacher",
                from: "2025-01-01",
                to: "2025-03-01",
                Reason: "Flud"
            },
            {
                name: "Mark Lee",
                type: "Reciptionist",
                from: "2024-12-23",
                to: "2024-12-25",
                Reason: "Sick leave"
            },
        ];

        const container = document.getElementById('leave-requests');

        leaveRequests.forEach(request => {
            const requestDiv = document.createElement('div');
            requestDiv.className = 'request';
            requestDiv.innerHTML = ` <img src="<?= IMAGE ?>/profilePic.png"  class="resize"><p class="l_name"><strong>${request.name}</strong><br>${request.type}</p>
                                         <p style="margin-top: 10%;">From: ${request.from} To: ${request.to}</p>
                                         <p>Reason: ${request.Reason}</p>  <button class="viewbtn">View</button>`;
            container.appendChild(requestDiv);
        });

        const viewButtons = document.querySelectorAll('.viewbtn');
        const overlay = document.getElementById('overlay');
        const popup = document.getElementById('popup');
        const closePopup = document.getElementById('closePopup');

        const popupName = document.getElementById('popup-name');
        const popupDates = document.getElementById('popup-dates');
        const popupReason = document.getElementById('popup-reason');

        viewButtons.forEach((button) => {
            button.addEventListener('click', (e) => {
                const requestDiv = e.target.closest('.request');
                const name = requestDiv.getAttribute('data-name');
                const dates = requestDiv.getAttribute('data-dates');
                const reason = requestDiv.getAttribute('data-reason');

                // Set popup content dynamically
                popupName.value = name;
                popupDates.value = dates;
                popupReason.value = reason;

                // Show popup
                popup.style.display = 'block';
                overlay.style.display = 'block';
            });
        });

        // Close Popup
        closePopup.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });
    </script>
</body>

</html>