<html>

<head>
    <title>Payments</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/child/payment.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/child/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Child/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/Navbar.js?v=<?= time() ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <!-- minimized sidebar -->
        <div class="sidebar" id="sidebar1">
            <img src="<?=IMAGE?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?=IMAGE?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
                <h2 id="sidebar-kiddo">KIDDO VILLE </h2>
            </div>
            <ul>
                <li class="hover-effect unselected first">
                    <a href="<?=ROOT?>/Child/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/report">
                        <i class="fa fa-user-shield"></i> <span>Report</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/event">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/funzonehome">
                        <i class="fas fa-gamepad"></i> <span>Fun Zone</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/Message">
                        <i class="fas fa-comment"></i> <span>Messager</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Child/payment">
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
                        <li class="hover-effect first"
                            onclick="removechildsession();">
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
                            <li class="first
                                <?php if ($child['name'] === $data['selectedchildren']['name']) {
                                    echo "select-child";
                                } ?>
                            "
                                onclick="setChildSession('<?= isset($child['Id']) ? $child['Id'] : '' ?>')">
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
                        <p><?= isset($data['totalAmountPaid'])? $data['totalAmountPaid'] : '0' ;?></p>
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
                        <input type="date" id="datePicker" style="width: 200px">
                            <select id="modePicker" style="margin-right: 100px; width: 200px">
                                <option value="All" hidden>Mode</option>
                                <option value="All">All</option>
                                <option value="Cash">Cash</option>
                                <option value="Online">Online</option>
                                <option value="Transfer">Transfer</option>
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

                            </tbody>
                        </table>
                        <button class="pay"> Make payment </button>
                    </div>
                    <div id="upcoming" style="display: flex; flex-direction: row; align-items: flex-start;">
                    <canvas id="paymentChart" width="500" height="200" style="max-width: 600px; max-height: 400px; margin-top:-10px;"></canvas>
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
                                    <button class="btn" onclick="window.location.href='<?=ROOT?>/Child/PaymentSheet'">
                                        View Details
                                    </button>
                                    <!-- <button class="btn" onclick="window.location.href='<?=ROOT?>/Parent/Pay'">
                                        Pay Now
                                    </button> -->
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
        <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?php echo htmlspecialchars($data['selectedchildren']['image']); ?>" width="100"
            class="profile" />
        <h2><?=$data['selectedchildren']['fullname'] ?></h2>
        <p>SRD<?= $data['selectedchildren']['id'] ?></p>
            <button class="profile-button" onclick="window.location.href ='<?= ROOT ?>/Parent/ParentProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Parent/GuardianProfile'">
                Guardian profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildPackage'">Package</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildID'">Id Card</button>
            <button class="logout-button" onclick="window.location.href ='<?= ROOT ?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
        function removechildsession() {
        fetch('<?= ROOT ?>/Child/Payment/removechildsession', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("Child id removed from session.");
                    window.location.href = '<?= ROOT ?>/Parent/Payment';
                } else {
                    console.error("Failed to remove child id from session.", data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    }

    function setChildSession(ChildID) {
        console.log(ChildID);
        fetch('<?= ROOT ?>/Child/Payment/setchildsession', {
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
                    console.log("Child id set in session.");
                    window.location.href = '<?= ROOT ?>/Child/Payment';
                } else {
                    console.error("Failed to set child id from session.", data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    }

        function fetchPayments(date = null, mode = null) {
            fetch('<?= ROOT ?>/Child/Payment/store_history', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date,
                        mode: mode
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("data:", data.data);
                        updaterHistoryTable(data.data);
                    } else {
                        console.error("Failed to fetch meal plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function updaterHistoryTable(data) {
            const historyTableBody = document.querySelector('#history tbody');
            historyTableBody.innerHTML = '';

            data.forEach(pay => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${pay.PaymentID ?? "No res set"}</td>
                    <td>${pay.ChildName ?? "No res set"}</td>
                    <td>${pay.Date ?? "No res set"}</td>
                    <td> ${pay.Time ?? "No res set"} </td>
                    <td> ${pay.Amount ?? "No res set"} </td>
                    <td> <i class="fas fa-eye"></i> </td>
                    <td> ${pay.Mode ?? "No res set"} </td>
                `;
                historyTableBody.appendChild(row);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const datePicker = document.getElementById('datePicker');
            const modePicker = document.getElementById('modePicker');

            fetchPayments( null , null);

            datePicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null; // Use null if empty
                const modeValue = modePicker.value || null; // Use null if empty
                fetchPayments(dateValue, modeValue);
            });

            modePicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null;
                const modeValue = modePicker.value || null;
                fetchPayments(dateValue, modeValue);
            });

            const upbtn = document.getElementById('up-btn');
            const hibtn = document.getElementById('hi-btn');
            const upcoming = document.getElementById('upcoming');
            const history = document.getElementById('history');
            const headingres = document.getElementById('heading-res');

            upbtn.addEventListener('click', function() {
                upbtn.style.backgroundColor = '#10639a';
                hibtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'flex';
                history.style.display = 'none';
                headingres.style.marginLeft = '180px';
                headingres.textContent = 'Reervation';
            });

            hibtn.addEventListener('click', function() {
                hibtn.style.backgroundColor = '#10639a';
                upbtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'none';
                history.style.display = 'block';
                headingres.style.marginLeft = '140px';
                headingres.textContent = 'Reervation history';
            });
        });

document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('paymentChart').getContext('2d');

    var chartData = <?php echo($data['graph']); ?>;

    // Destroy existing chart instance if it exists
    if (window.inventoryChart instanceof Chart) {
        window.inventoryChart.destroy();
    }

    // Create the new line chart
    window.inventoryChart = new Chart(ctx, {
        type: 'line',
        data: chartData, // Use the PHP-injected data
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        font: {
                            size: 14,
                            weight: 'bold'
                        }
                    }
                },
                title: {
                    display: true,
                    text: 'Monthly Fees for <?=$data['selectedchildren']['name'] ?>',
                    font: {
                        size: 18,
                        weight: 'bold'
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Months',
                        font: {
                            size: 14,
                            weight: 'bold'
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Income (LKR)',
                        font: {
                            size: 14,
                            weight: 'bold'
                        }
                    }
                }
            }
        }
    });
});


        // const data = {
        //     labels: ['October', 'November', 'December'], // Months
        //     datasets: [{
        //             label: 'Child 1',
        //             data: [400, 500, 450], // Payments for Child 1
        //             backgroundColor: 'rgba(255, 99, 132, 0.6)',
        //             borderColor: 'rgba(255, 99, 132, 1)',
        //             borderWidth: 1
        //         },
        //         {
        //             label: 'Child 2',
        //             data: [300, 400, 350], // Payments for Child 2
        //             backgroundColor: 'rgba(54, 162, 235, 0.6)',
        //             borderColor: 'rgba(54, 162, 235, 1)',
        //             borderWidth: 1
        //         },
        //         {
        //             label: 'Child 3',
        //             data: [200, 250, 300], // Payments for Child 3
        //             backgroundColor: 'rgba(255, 206, 86, 0.6)',
        //             borderColor: 'rgba(255, 206, 86, 1)',
        //             borderWidth: 1
        //         },
        //         {
        //             label: 'Child 4',
        //             data: [100, 150, 200], // Payments for Child 4
        //             backgroundColor: 'rgba(75, 192, 192, 0.6)',
        //             borderColor: 'rgba(75, 192, 192, 1)',
        //             borderWidth: 1
        //         },
        //         {
        //             label: 'Child 5',
        //             data: [50, 100, 150], // Payments for Child 5
        //             backgroundColor: 'rgba(153, 102, 255, 0.6)',
        //             borderColor: 'rgba(153, 102, 255, 1)',
        //             borderWidth: 1
        //         }
        //     ]
        // };

        // // Configuration for the chart
        // const config = {
        //     type: 'bar', // Bar chart
        //     data: data,
        //     options: {
        //         responsive: true,
        //         plugins: {
        //             legend: {
        //                 display: true,
        //                 position: 'top',
        //                 font: {
        //                     size: 20, // Font size in pixels
        //                     weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
        //                 },
        //             },
        //             title: {
        //                 display: true,
        //                 text: 'Payments per Child',
        //                 font: {
        //                     size: 20, // Font size in pixels
        //                     weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
        //                 },
        //             }
        //         },
        //         scales: {
        //             x: {
        //                 title: {
        //                     display: true,
        //                     text: 'Month',
        //                     font: {
        //                         size: 20, // Font size in pixels
        //                         weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
        //                     },
        //                 },
        //                 stacked: false
        //             },
        //             y: {
        //                 beginAtZero: true,
        //                 title: {
        //                     display: true,
        //                     text: 'Payments (RS)',
        //                     font: {
        //                         size: 20, // Font size in pixels
        //                         weight: 'bold', // Font weight (e.g., 'bold', 'normal', 'lighter')
        //                     },
        //                 }
        //             }
        //         }
        //     }
        // };

        // Render the chart
        // const ctx = document.getElementById('paymentsChart').getContext('2d');
        // new Chart(ctx, config);
    </script>
</body>

</html>