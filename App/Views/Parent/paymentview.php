<html>

<head>
    <title>Payments</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/payment.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Parent/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Parent/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Parent/Navbar.js?v=<?= time() ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <li class="selected" style="margin-top: 40px;">
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
                            <img src="<?= isset($data['parent']['image']) ? $data['parent']['image'] . '?v=' . time() : '' ?>"
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
                            <li class="hover-effect first" onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>')">
                                <img src="<?= isset($child['image']) ? $child['image'] . '?v=' . time() : ROOT . '/Uploads/default_images/default_profile.jpg' ?>"
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
                <!-- notoifcation icona and dropdown -->
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
                <div class="stat" style="justify-content: center; display: flex; flex-direction: column; align-items: center;">
                    <div class="overdue-payment" style="justify-content: center; display: flex;">
                        <div style="margin-left: 20px; margin-right: 20px;">
                            <h3 style="color: red;">Overdue Payment</h3>
                            <p>Due Date: <strong>2023-11-01</strong></p>
                            <p>Amount: <strong>$120</strong></p>
                            <button class="pay-now" style="padding: 10px 15px; border-bottom-right-radius: 10px; white-space: nowrap; margin-bottom: -15px !important; margin-top: -10px; margin-left: 290px;">Pay Now</button>
                        </div>
                    </div>
                </div>
                <div class="stat" style="justify-content: center; display: flex; flex-direction: column; align-items: center;">
                    <div class="upcoming-payment" style="justify-content: center; display: flex;">
                        <div style="margin-left: -10px; margin-right: 20px;">
                            <h3 style="color: green;">Upcoming Payment</h3>
                            <p>Due Date: <strong>2023-12-15</strong></p>
                            <p>Amount: <strong>$150</strong></p>
                        </div>
                    </div>
                </div>
                <div class="stat"
                    style="justify-content: center; display: flex; flex-direction: column; align-items: center;">
                    <h3 style="margin-top: -16px;"><img src="<?= IMAGE ?>/mountain.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Last bill amount</h3>
                    <div class="lol" style="cursor: pointer; margin-top: 10px;">
                        <p>7000</p>
                    </div>
                </div>
            </div>
            <div class="saperate">
                <!-- payment table -->
                <div class="reservation-container">
                    <div class="toggle" style="margin-top: -20px;">
                        <label class="background" for="toggle"></label>
                        <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                            <label class="up-btn" id="up-btn">Upcoming</label>
                            <label class="hi-btn" id="hi-btn">History</label>
                        </div>
                    </div>
                    <div id="history" style="display: none;">
                        <h2 style="margin-top: 10px !important; margin-bottom: 2px;"> Payment History </h2>
                        <hr>
                        <div class="filters">
                            <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                            <select style="margin-right: 325px; width: 200px">
                                <option value="" hidden>Status</option>
                                <option value="2 - 5">Approved</option>
                                <option value="5 - 7">Pending</option>
                                <option value="7 - 9">Canceled</option>
                            </select>
                            <select style="margin-right: 700px; width: 200px; margin-left: -200px;">
                                <option value="" hidden>Child</option>
                                <option value="2 - 5">Abdulla</option>
                                <option value="5 - 7">yunus</option>
                                <option value="7 - 9">Ayyub</option>
                            </select>
                        </div>
                        <table class="payments" style="margin-top: -10px;">
                            <thead>
                                <tr>
                                    <th>Payment ID</th>
                                    <th>Child</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Amount</th>
                                    <th> View </th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="approved">
                                            <p> Approved </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="approved">
                                            <p> Approved </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="cancel">
                                            <p> Declined </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="cancel">
                                            <p> Declined </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="pending">
                                            <p> Approved </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="approved">
                                            <p> Approved </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11000011</td>
                                    <td>Abdulla</td>
                                    <td>25/03/2025</td>
                                    <td>8:00 AM</td>
                                    <td> 20000</td>
                                    <td> <i class="fas fa-eye"></i> </td>
                                    <td>
                                        <div class="approved">
                                            <p> Approved </p>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <button class="pay"> Make payment </button>
                    </div>
                    <div id="upcoming" style="display: flex; flex-direction: row; align-items: flex-start;">
                        <canvas id="paymentsChart" width="500" height="200"></canvas>
                        <div>
                            <html>
                            <div class="payment-description">
                                <h3>
                                    Payment Description
                                </h3>
                                <hr>
                                <ul>
                                    <li>
                                        <span>
                                            Service: Tuition Fee
                                        </span>
                                        <span class="amount">
                                            Amount: $500
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Service: Meal Plan
                                        </span>
                                        <span class="amount">
                                            Amount: $200
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Service: Sports Activity
                                        </span>
                                        <span class="amount">
                                            Amount: $150
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Service: Art Class
                                        </span>
                                        <span class="amount">
                                            Amount: $100
                                        </span>
                                    </li>
                                </ul>
                                <div class="total">
                                    Total Amount: $950
                                </div>
                                <div style=" display: flex;justify-content: space-between; ">
                                    <button class="btn" onclick="window.location.href='<?=ROOT?>/Parent/PaymentSheet'">
                                        View Details
                                    </button>
                                    <button class="btn" onclick="window.location.href='<?=ROOT?>/Parent/Pay'">
                                        Pay Now
                                    </button>
                                </div>
                            </div>
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
        <div class="profile-card" id="profileCard">
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
            fetch("<?= ROOT ?>/Parent/payment/Logout", {
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

        function setChildSession(childName) {
            console.log(childName);
            fetch(' <?= ROOT ?>/Parent/Home/setchildsession', {
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
                        window.location.href = '<?= ROOT ?>/Child/Home';
                    } else {
                        console.error("Failed to set child name in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        document.addEventListener('DOMContentLoaded', function() {
            const upbtn = document.getElementById('up-btn');
            const hibtn = document.getElementById('hi-btn');
            const upcoming = document.getElementById('upcoming');
            const history = document.getElementById('history');
            const headingres = document.getElementById('heading-res');

            upbtn.addEventListener('click', function() {
                upbtn.style.color = 'white';
                hibtn.style.color = 'black';
                upbtn.style.backgroundColor = '#10639a';
                hibtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'block';
                history.style.display = 'none';
                headingres.style.marginLeft = '180px';
                headingres.textContent = 'Reervation';
            });

            hibtn.addEventListener('click', function() {
                hibtn.style.color = 'white';
                upbtn.style.color = 'black';
                hibtn.style.backgroundColor = '#10639a';
                upbtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'none';
                history.style.display = 'block';
                headingres.style.marginLeft = '140px';
                headingres.textContent = 'Reervation history';
            });
        });

        const data = {
            labels: ['October', 'November', 'December'], // Months
            datasets: [{
                    label: 'Child 1',
                    data: [400, 500, 450], // Payments for Child 1
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Child 2',
                    data: [300, 400, 350], // Payments for Child 2
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Child 3',
                    data: [200, 250, 300], // Payments for Child 3
                    backgroundColor: 'rgba(255, 206, 86, 0.6)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Child 4',
                    data: [100, 150, 200], // Payments for Child 4
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Child 5',
                    data: [50, 100, 150], // Payments for Child 5
                    backgroundColor: 'rgba(153, 102, 255, 0.6)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }
            ]
        };

        // Configuration for the chart
        const config = {
            type: 'bar', // Bar chart
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        font: {
                            size: 20, // Font size in pixels
                            weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
                        },
                    },
                    title: {
                        display: true,
                        text: 'Payments per Child',
                        font: {
                            size: 20, // Font size in pixels
                            weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
                        },
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month',
                            font: {
                                size: 20, // Font size in pixels
                                weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
                            },
                        },
                        stacked: false
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Payments (RS)',
                            font: {
                                size: 20, // Font size in pixels
                                weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
                            },
                        }
                    }
                }
            }
        };

        // Render the chart
        const ctx = document.getElementById('paymentsChart').getContext('2d');
        new Chart(ctx, config);
    </script>
</body>

</html>