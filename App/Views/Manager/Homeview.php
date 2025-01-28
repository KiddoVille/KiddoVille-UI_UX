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
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Leaverequest.css?<?= time() ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo_stuf" style="display: flex;margin-top:6%">
                <img src="<?= IMAGE ?>/logo_light.png" style="width: 40px;height:40px" alt="">
                <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            </div>
            <ul style=" margin-top: 10%;">
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
                <!-- <ul>
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
                </ul> -->
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
                    <h2 style="margin-bottom: 3px;color: #233E8D;"><?= $data['Totalchild'] ?></h2>
                    <p style="color: #233E8D;">Out of 120 Children today attended to Daycare</p>
                </div>
                <div class="stat">
                    <h3 style="color: #233E8D;">Total Employees Attendance</h3>
                    <h2 style="margin-bottom: 3px;color: #233E8D;"><?= $data['Totaluser'] ?></h2>
                    <p style="color: #233E8D;">Out of 27 employees today attended to Daycare</p>
                </div>
                <div class="stat">
                    <h3 style="color: #233E8D;">Total Enrollment</h3>
                    <h2 style="margin-bottom: 3px;color: #233E8D;"><?= $data['Totalenroll'] ?></h2>
                    <p style="color: #233E8D;">Dec-2024</p>
                </div>
            </div>

            <div class="two-divs">
                <div class="graph">
                    <h2 style="color: #233E8D;">Income of the month</h2>
                    <hr>
                    <div class="description_gr">
                        <p style="color: #233E8D;font-weight:bold;color:red;font-size:18px;">Pending :LKR.56000</p>
                        <p style="color: #233E8D;font-weight:bold;color:green;font-size:18px;">Paid : LKR.123000</p>
                        <p style="color: #233E8D;font-weight:bold;font-size:18px;">Total:LKR. 156000</p>
                    </div>
                    <canvas id="inventoryChart" width="600" height="157"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script src="inventoryGraph.js"></script>
                </div>
                <div class="emergency">
                    <h2 style="color: #233E8D;margin-left:5%;margin-top:5%;">Emergency Alerts</h2>
                    <hr>
                    <div class="request" data-name="John Doe" data-role="Teacher" data-dates="2024-12-20 to 2024-12-22" data-reason="Flu">
                        <img img src="<?= IMAGE ?>/profilePic.png" class="resize" style="width: 50px; border-radius: 50%;">
                        <p class="l_name" style="margin-left:30%;margin-top:-24%;"><strong>John Doe</strong><br>Teacher</p>
                        <p>Reason:Today do not come to the class.be...</p>
                        <button class="viewbtn">View</button>
                    </div>
                    <div class="request" data-name="John Doe" data-role="Teacher" data-dates="2024-12-20 to 2024-12-22" data-reason="Flu">
                        <img img src="<?= IMAGE ?>/profilePic.png" class="resize" style="width: 50px; border-radius: 50%;">
                        <p class="l_name" style="margin-left:30%;margin-top:-24%;"><strong>John Doe</strong><br>Maid</p>
                        <p>Reason: Child emergency situation</p>
                        <button class="viewbtn">View</button>
                    </div>
                    <div class="request" data-name="John Doe" data-role="Teacher" data-dates="2024-12-20 to 2024-12-22" data-reason="Flu">
                        <img img src="<?= IMAGE ?>/profilePic.png" class="resize" style="width: 50px; border-radius: 50%;">
                        <p class="l_name" style="margin-left:30%;margin-top:-24%;"><strong>John Doe</strong><br>Parent</p>
                        <p>Reason: Today i will pick my child at 1:00 P.M</p>
                        <button class="viewbtn">View</button>
                    </div>
                </div>
            </div>

            <div class="today_visitors" style="padding-bottom: 2%;">
                <div class="today_visitors_header">
                    <span style="white-space: nowrap;">
                        <i class="fas fa-door-open" style="margin-right: 5%;"></i>Visitors Summary
                    </span>
                    <input type="Date" class="visitorsdate">
                </div>
                <div class="visitor-table-topics">
                    <div class="visitorname"><span>NAME</span></div>
                    <div class="visitorposition"><span>Role</span></div>
                    <div class="visitorpurpose"><span>PURPOSE</span></div>
                    <div class="visitorstarttime"><span>Start Time</span></div>
                    <div class="visitorendtime"><span>End Time</span></div>
                </div>
                <?php if (!empty($data['visitorsummary'])): ?>
                    <?php foreach ($data['visitorsummary'] as $visitor): ?>
                        <div class="detailed-lines">
                            <div class="visitorname"><span><?= htmlspecialchars($visitor->VisitorName);?></span></div>
                            <div class="visitorposition"><span><?= htmlspecialchars($visitor->Role);?></span></div>
                            <div class="visitorpurpose"><span><?= htmlspecialchars($visitor->Purpose);?></span></div>
                            <div class="visitorstarttime"><span><?= htmlspecialchars($visitor->Start_Time); ?></span></div>
                            <div class="visitorendtime"><span><?= htmlspecialchars($visitor->End_Time); ?></span></div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No visitors found.</p>
                <?php endif; ?>

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
    </script>
</body>

</html>