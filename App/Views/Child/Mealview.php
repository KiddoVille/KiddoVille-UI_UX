<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meal Plan</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?=CSS?>/Child/meal.css">
    <link rel="stylesheet" href="<?=CSS?>/Child/Main.css">
    <script src="<?=JS?>/Child/Profile.js"></script>
    <script src="<?=JS?>/Child/MessageDropdown.js"></script>
    <script src="<?=JS?>/Child/Navbar.js"></script>
    <script src="<?=JS?>/Child/Taskbar.js"></script>
</head>
<body style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg');">
    <div class="container">
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2>Dashboard</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/Home">
                        <i class="fas fa-home"></i>     <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i>        <span>Reservation</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Child/Meal">
                        <i class="fas fa-utensils"></i>           <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/Allevent">
                        <i class="fas fa-calendar-alt"></i>      <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Child/package">
                        <i class="fas fa-box"></i>               <span>Package</span>
=======
    <link rel="stylesheet" href="<?= CSS ?>/child/meal.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/child/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/child/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/child/MessageDropdown.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/child/meal.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/child/Navbar.js?v=<?= time() ?>"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar" id="sidebar1">
            <img src="<?= IMAGE ?>/logo_light.png" class="star" id="starImage">
            <div class="logo-div">
                <img src="<?= IMAGE ?>/logo_light.png" class="logo" id="sidebar-logo"> </img>
                <h2 id="sidebar-kiddo">KIDDO VILLE </h2>
            </div>
            <ul>
                <li class="hover-effect unselected" style="margin-top: -20px;">
                    <a href="<?= ROOT ?>/Child/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/history">
                        <i class="fas fa-history"></i> <span>History</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/report">
                        <i class="fa fa-user-shield"></i> <span>Report</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
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
>>>>>>> origin/main
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span
                        id="help">Help</span></a>
            </div>
        </div>
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
<<<<<<< HEAD
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/family.jpg" style="width: 60px; height:60px; border-radius: 30px;">
=======
                <h2 style="margin-top: 25px; margin-left: 12px !important;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
                    <ul>
                        <li class="hover-effect first select-child"
                            onclick="window.location.href = '<?= ROOT ?>/Parent/Home'">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
                                style="width: 60px; height:60px; border-radius: 30px;">
>>>>>>> origin/main
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
<<<<<<< HEAD
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
                        Explore your children's activities and progress!
                    </p>
                    <ul>
                        <li class="hover-effect first select-child">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
                        <li class="hover-effect first">
                            <img src="<?=IMAGE?>/face.jpeg">
                            <h2>Abdulla</h2>
                        </li>
                        <hr>
=======
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
>>>>>>> origin/main
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <i class="fa fa-bars" id="minimize-btn" style="margin-right: -50px; cursor: pointer; font-size: 30px;"></i>
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
                                <p>New Message 1 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">content like a message</p>
                            </li>
                            <li>
                                <p>New Message 2 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">content like a message</p>
                            </li>
                            <li>
                                <p>New Message 3 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">content like a message</p>
                            </li>
                            <li>
                                <p>New Message 4 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">content like a message</p>
                            </li>
                            <li>
                                <p>New Message 5 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">content like a message</p>
                            </li>
                            <li>
                                <p>New Message 6 <i class="fas fa-paper-plane"></i></p>
                                <p class="content">content like a message</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="message-numbers">
                    <p>2</p>
                </div>
                <div class="profile">
                    <button class="profilebtn">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>
            <div style="display: flex; flex-direction: row; width: 100%; justify-content:flex-start;">
                <div class="container-food" style="margin-left: 20px;">
                    <!-- Table for Food -->
                    <div class="timetable" style="margin-right: 1%; width: 395px;">
                        <h3 style="margin-top: 10px !important; margin-bottom: 4px;">Meal Plan</h3>
                        <hr>
                        <input type="date" id="datePicker" value="2025-01-10" style="width: 200px">
                        <table id="mealsTable" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="color: #233E8D; background-color:transparent; padding-right: 4%;">Meal</th>
                                    <th style="color: #233E8D; background-color:transparent; padding-left: 0%;">Dish</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Breakfast Rows -->
                                <tr>
                                    <td rowspan="4">Breakfast</td>
                                    <td>Pancakes</td>
                                </tr>
                                <tr>
                                    <td>Omelette</td>
                                </tr>
                                <tr>
                                    <td>Omelette</td>
                                </tr>
                                <tr>
                                    <td>Fruit Smoothie</td>
                                </tr>
                                <!-- Lunch Rows -->
                                <tr>
                                    <td rowspan="4">Lunch</td>
                                    <td>Grilled Chicken Salad</td>
                                </tr>
                                <tr>
                                    <td>Garlic Bread</td>
                                </tr>
                                <tr>
                                    <td>Soup</td>
                                </tr>
                                <tr>
                                    <td>Omelette</td>
                                </tr>
                                <!-- Dinner Rows -->
                                <tr>
                                    <td rowspan="4">Dinner</td>
                                    <td>Spaghetti Bolognese</td>
                                </tr>
                                <tr>
                                    <td>Omelette</td>
                                </tr>
                                <tr>
                                    <td>Caesar Salad</td>
                                </tr>
                                <tr>
                                    <td>Chocolate Mousse</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-food" style="margin-left: 20px;">
                    <!-- Table for Snacks -->
                    <div class="timetable" style="margin-right: 1%; width: 395px;">
                        <h3 style="margin-top: 10px !important; margin-bottom: 4px;">Snack Plan</h3>
                        <hr>
                        <input type="date" id="snacckdatePicker" value="2025-01-10" style="width: 200px">
                        <table id="snacksTable" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="color: #233E8D; background-color:transparent; padding-right: 4%;">Time</th>
                                    <th style="color: #233E8D; background-color:transparent; padding-left: 0%;">Snack</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Morning Snack Rows -->
                                <tr>
                                    <td rowspan="3">Morning</td>
                                    <td>Fruit Salad</td>
                                </tr>
                                <tr>
                                    <td>Energy Bar</td>
                                </tr>
                                <tr>
                                    <td>Apple</td>
                                </tr>
                                <tr>
                                    <td>Apple</td>
                                </tr>
                                <!-- Afternoon Snack Rows -->
                                <tr>
                                    <td rowspan="3">Afternoon</td>
                                    <td>Yogurt with Granola</td>
                                </tr>
                                <tr>
                                    <td>Banana</td>
                                </tr>
                                <tr>
                                    <td>Trail Mix</td>
                                </tr>
                                <tr>
                                    <td>Apple</td>
                                </tr>
                                <!-- Evening Snack Rows -->
                                <tr>
                                    <td rowspan="3">Evening</td>
                                    <td>Mixed Nuts</td>
                                </tr>
                                <tr>
                                    <td>Cheese Crackers</td>
                                </tr>
                                <tr>
                                    <td>Dark Chocolate</td>
                                </tr>
                                <tr>
                                    <td>Apple</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-food" style="margin-left: 20px;">
                    <h3 style="margin-top: 10px !important; margin-bottom: 4px; margin-right: 60px;">Add Snack</h3>
                    <hr style="width: 160px;">
                    <div class="pickup-section" style="margin-top: 20px;">
                        <label for="date">Date</label>
                        <input required id="customdate" type="date">
                        <label for="date">Meal</label>
                        <select required id="customdate" type="date">
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                        <label for="date">Snack</label>
                        <select required id="customdate" type="date">
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                    </div>
                    <button style="margin-top: 15px; margin-left:110px;"> Add </button>
                </div>
            </div>

<<<<<<< HEAD
            <div class="container-food">
                <img src="<?=IMAGE?>/meal.png" style="margin-right: 500px; margin-left: -480px; margin-bottom: -120px; margin-top: -50px;">
                <div class="title">KIDDO VILLE Food plan</div>
                <div class="navigation">
                    <button><i class="fas fa-chevron-left"></i></button>
                    <span>Aug 04 - Aug 07</span>
                    <button><i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                        </tr>
                        <tr>
                            <td>Breakfast</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Breakfast</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Breakfast</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                    </table>
                </div>
                <img src="<?=IMAGE?>/snack.png" style="margin-left: 800px; margin-right: -200px; margin-top: -80px; margin-bottom: -90px;">
                <!-- Add Snack Section -->
                <div class="title">KIDDO VILLE SNACK PLAN</div>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                            <th>2024 Aug</th>
                        </tr>
                        <tr>
                            <td>Snack</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Snack</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
                        <tr>
                            <td>Snack</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                            <td>Rice + Dhal, Sambol<br>String Hoppers + Dhal<br>Bread + Butter and Jam</td>
                        </tr>
=======
            <div class="container-food" style="margin-left: 40px; margin-top: 20px; align-items: left; width: 1060px; justify-content: space-between;">
                <h3 style="margin-top: 0px !important; margin-bottom: 4px; margin-right: 900px;">Assigned Snacks</h3>
                <hr style="width: 1070px;">
                <p> Please select the child and meal, then enter the snack to assign it. You can easily view and edit the assigned snacks for each child as needed. </p>
                <div style="display: flex; flex-direction: row; justify-content:space-around;">
                    <div style="display: flex; flex-direction: column; margin-right: 100px; margin-left: -100px;">
                        <h3 style="margin-top: 10px !important; margin-bottom: 4px; margin-right: 60px;">Edit Snack Request</h3>
                        <hr style="width: 360px;">
                        <div class="pickup-section" style="margin-top: 20px;">
                            <label for="date">Date</label>
                            <input class="editsnack" required id="customdate" type="date">
                            <label for="date">Meal</label>
                            <select class="editsnacksel" required id="customdate" type="date">
                                <option>Breakfast</option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                            </select>
                            <label for="date">Snack</label>
                            <select class="editsnacksel" required id="customdate" type="date">
                                <option>Breakfast</option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                            </select>
                        </div>
                        <button style="margin-top: 15px; margin-left:200px;"> Edit </button>
                    </div>
                    <div style="width: 3px; background-color: lightgray; margin-right: 100px;"></div>
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <thead>
                            <tr>
                                <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Meal</th>
                                <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Snack</th>
                                <th style="color: #233E8D; background-color: transparent; padding: 10px 15px;">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Breakfast Rows -->
                            <tr>
                                <td style="padding: 10px 15px;" rowspan="3">Breakfast</td>
                                <td style="padding: 10px 15px;">Fruit Salad</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px;">Energy Bar</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px;">Apple</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <!-- Lunch Rows -->
                            <tr>
                                <td style="padding: 10px 15px;" rowspan="3">Lunch</td>
                                <td style="padding: 10px 15px;">Yogurt with Granola</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px;">Banana</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px;">Trail Mix</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <!-- Dinner Rows -->
                            <tr>
                                <td style="padding: 10px 15px;" rowspan="3">Dinner</td>
                                <td style="padding: 10px 15px;">Mixed Nuts</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px;">Cheese Crackers</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px;">Dark Chocolate</td>
                                <td class="edit" style="padding: 10px 15px;">
                                    <i class="fas fa-pen reservation-edit" style="margin-right: 15px;"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                        </tbody>
>>>>>>> origin/main
                    </table>

                </div>
            </div>
<<<<<<< HEAD
            <div class="tasks" id="taskbtn">
                <i class="fas fa-chevron-left" id="taskicon"></i>
            </div>
        </div>
        <a href="../Messager/Message.html" class="chatbox">
            <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
            <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                <p> 2</p>
            </div>
        </a>
        <div class="profile-card" id="profileCard">
            <img src="../../../Assets/back-arrow-2.svg" alt="back-arrow" style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100" class="profile"/>
=======
            <a href="<?= ROOT ?>/Parent/Message" class="chatbox">
                <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots" style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" id="back-arrow-profile"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?= IMAGE ?>/profilePic.png" width="100"
                class="profile" />
>>>>>>> origin/main
            <h2>Thilina Perera</h2>
            <p>Student    RS0110657</p>
            <button class="profile-button"
                onclick="window.location.href ='<?= ROOT ?>/Child/ChildProfile'">Profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ParentProfile'">Parent profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/GuardianProfile'">Guardian profile</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildPackage'">Package</button>
            <button class="logout-button" onclick="window.location.href ='<?= ROOT ?>/Child/Home'">LogOut</button>
        </div>
        <div class="task-container" id="tasknavbar" style="position: fixed;">
            <h1 style="margin-top: 20px;"> Quick Tasks Hub </h1>
            <div class="card">
                <h2>Calendar</h2>
                <div class="calendar-header">
                    <a href="#">&lt; October</a>
                    <h3>November 2024</h3>
                    <a href="#">December &gt;</a>
                </div>
                <table class="calendar-table">
                    <thead>
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><span class="today">2</span></td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <h2>Upcoming Tasks</h2>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">Math Homework</p>
                        <span class="task-deadline">Due: Nov 5, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">History Essay</p>
                        <span class="task-deadline">Due: Nov 10, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="task-item">
                    <div class="task-info">
                        <p class="task-title">Science Project</p>
                        <span class="task-deadline">Due: Nov 15, 2024</span>
                    </div>
                    <a href="#" class="task-icon" title="View Task Details"><i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
            <div class="card">
                <h2>Main menu</h2>
                <a href="#" class="main-menu-item">
                    <i class="fas fa-bullhorn icon-announcements"></i>
                    <span>Site announcements</span>
                </a>
                <a href="#" class="main-menu-item">
                    <i class="fas fa-globe icon-library"></i>
                    <span>KIDDOVILLE Funzone</span>
                </a>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
    <script>
        function setChildSession(ChildID) {
            fetch(' <?= ROOT ?>/Parent/Meal/setchildsession', {
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
                        window.location.href = '<?= ROOT ?>/Child/Meal';
                    } else {
                        console.error("Failed to set child name in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function fetchMealPlan(date) {
            fetch('<?= ROOT ?>/Parent/Meal/store_food', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Meal plan data:", data.data);
                        updateMealPlanTables(data.data);
                    } else {
                        console.error("Failed to fetch meal plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        // Function to update tables dynamically
        function updateMealPlanTables(mealPlan) {
            const mealsTableBody = document.querySelector('#mealsTable tbody');
            const snacksTableBody = document.querySelector('#snacksTable tbody');

            mealsTableBody.innerHTML = ''; // Clear existing rows
            snacksTableBody.innerHTML = ''; // Clear existing rows

            // Populate meals table
            for (const [meal, dishes] of Object.entries(mealPlan.meals)) {
                let rowSpanSet = false;

                dishes.forEach(dish => {
                    const row = document.createElement('tr');

                    if (!rowSpanSet) {
                        const mealCell = document.createElement('td');
                        mealCell.textContent = meal.charAt(0).toUpperCase() + meal.slice(1);
                        mealCell.rowSpan = dishes.length;
                        row.appendChild(mealCell);
                        rowSpanSet = true;
                    }

                    const dishCell = document.createElement('td');
                    dishCell.textContent = dish;
                    row.appendChild(dishCell);

                    mealsTableBody.appendChild(row);
                });
            }

            // Populate snacks table
            for (const [time, snacks] of Object.entries(mealPlan.snacks)) {
                let rowSpanSet = false;

                snacks.forEach(snack => {
                    const row = document.createElement('tr');

                    if (!rowSpanSet) {
                        const timeCell = document.createElement('td');
                        timeCell.textContent = time.charAt(0).toUpperCase() + time.slice(1);
                        timeCell.rowSpan = snacks.length;
                        row.appendChild(timeCell);
                        rowSpanSet = true;
                    }

                    const snackCell = document.createElement('td');
                    snackCell.textContent = snack;
                    row.appendChild(snackCell);

                    snacksTableBody.appendChild(row);
                });
            }
        }

        // Add event listener for date picker
        document.getElementById('datePicker').addEventListener('change', function() {
            const selectedDate = this.value;
            fetchMealPlan(selectedDate);
        });
    </script>
>>>>>>> origin/main
</body>

</html>