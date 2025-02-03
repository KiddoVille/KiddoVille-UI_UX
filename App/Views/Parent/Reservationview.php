<html>

<head>
    <title>Reservation</title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS?>/Parent/reservation.css">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Main.css">
    <script src="<?=JS?>/Parent/Profile.js"></script>
    <script src="<?=JS?>/Parent/Navbar.js"></script>
    <script src="<?=JS?>/Parent/MessageDropdown.js"></script>
    <style>
        .Canceled {
            background-color: #F6DADA;
            border-color: #FF8787;
            border: 2px solid #FF8787;
            border-radius: 20px;
            height: 40px;
        }
        .Canceled p{
            color: #FF8787;
            margin-top: 10px;
        }
    </style>
</head>

<<<<<<< HEAD
<body style="background-image: url('<?=IMAGE?>/dashboard-background.jpeg'); overflow: hidden;">
=======
<body style="overflow: hidden;">
>>>>>>> origin/main
    <div class="container">
        <div class="sidebar minimized" id="sidebar1">
            <img src="<?=IMAGE?>/navbar-star.png" class="star show" id="starImage">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/Home">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="selected" style="margin-top: 40px;">
                    <a href="<?=ROOT?>/Parent/reservation">
                        <i class="fas fa-calendar-check"></i> <span>Reservation</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/meal">
                        <i class="fas fa-utensils"></i> <span>Meal plan</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/allevent">
                        <i class="fas fa-calendar-alt"></i> <span>Event</span>
                    </a>
                </li>
                <li class="hover-effect unselected">
                    <a href="<?=ROOT?>/Parent/package">
                        <i class="fas fa-box"></i> <span>Package</span>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 40px;">
            <div class="help">
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px;">
<<<<<<< HEAD
                    <ul>
                        <li class="hover-effect first select-child">
                            <img src="<?= isset($data['parent']['image']) ? $data['parent']['image']: ''?>"
=======
                    <ul style="margin-left: 20px;">
                        <li class="hover-effect first select-child" style="width:140px;"
                            onclick="window.location.href = '<?= ROOT ?>/Parent/Home'">
                            <img src="<?php echo htmlspecialchars($data['parent']['image']); ?>"
>>>>>>> origin/main
                                style="width: 60px; height:60px; border-radius: 30px;">
                            <h2>Family</h2>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 style="margin-top: 25px;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 10px;">
                        Explore your children's activities and progress!
                    </p>
                    <ul class="children-list">
                        <?php foreach ($data['children'] as $child): ?>
<<<<<<< HEAD
                            <li class="hover-effect first" 
                                onclick="setChildSession('<?= isset($child['name']) ? $child['name'] : '' ?>','<?= isset($child['id']) ? $child['id'] : '' ?>')">
                                <img src="<?= isset($child['image']) ? $child['image'] : ROOT . '/Uploads/default_images/default_profile.jpg' ?>" 
=======
                            <li class="hover-effect first"
                                onclick="setChildSession('<?= isset($child['Id']) ? $child['Id'] : '' ?>','<?= isset($child['id']) ? $child['id'] : '' ?>')">
                                <img src="<?php echo htmlspecialchars($child['image']); ?>"
>>>>>>> origin/main
                                    alt="Child Profile Image"
                                    style="width: 60px; height: 60px; border-radius: 30px;">
                                <h2><?= isset($child['name']) ? $child['name'] : 'No name set'; ?></h2>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content" id="main-content">
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
                    <h3><img src="<?=IMAGE?>/reservation.svg" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Accepted reservation</h3>
                    <p style="margin-bottom: 3px; color: #D3D3D3;"><?= isset($data['Approved']) ? $data['Approved'] : '0'; ?> reservations</p>
                    <span style="color: #00FFFF;font-weight: 50;">Reservations been scheduled</span>
                </div>
                <div class="stat">
                    <h3><img src="<?=IMAGE?>/pending.svg" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Pending reservation</h3>
                    <p style="margin-bottom: 3px;color: #D3D3D3;"><?= isset($data['Pending']) ? $data['Pending'] : '0'; ?> reservation</p>
                    <span style="color: #00FFFF;font-weight: 50;">The reservation has not been accepted by maid
                        yet</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?=IMAGE?>/cancel.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Canceled reservation</h3>
                    <p style="margin-bottom: 3px;color: #D3D3D3;"><?= isset($data['Canceled']) ? $data['Canceled'] : '0'; ?> reservations</p>
                    <span style="color: #00FFFF;font-weight: 50;">The reservation has not been canceled</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?=IMAGE?>/calendar-plus-solid.svg" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Make reservation</h3>
                    <div class="lol" id="newreservationbtn" style="color: #00FFFF; cursor: pointer; margin-bottom: -100px; margin-top: 20px;">
                        <p>Create</p>
                    </div>
                </div>
            </div>
            <div class="saperate">
                <div class="modal" id="NewReservationModal">
                    <div class="Edit-Reservation">
                        <form id="NewReservationForm">
                            <div class="pickup-popup">
                                <div class="top-con">
                                    <div class="back-con">
                                        <i class="fas fa-chevron-left" id="backfornewreservation"></i>
                                    </div>
                                    <div class="refresh-con">
                                        <i class="fas fa-refresh" id="newreservationrefresh"
                                            style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                                    </div>
                                </div>
                                <h1>Make Reservation</h1>
                                <div class="pickup-section" style="margin-bottom: 10px;">
                                    <label for="time">Select Date <span id="red-star6" class="red-star"> *</span>
                                    </label>
                                    <p style="color: lightgray; margin-top: -28px; margin-left: 100px;"> May 2024
                                    </p>
                                    <div class="dates">
                                        <div class="date">
                                            <p class="whichday">Mon</p>
                                            <h1 class="day">14</h1>
                                        </div>
                                        <div class="date">
                                            <p class="whichday">Tue</p>
                                            <h1 class="day">15</h1>
                                        </div>
                                        <div class="date">
                                            <p class="whichday">Wed</p>
                                            <h1 class="day">16</h1>
                                        </div>
                                        <div class="date">
                                            <p class="whichday">Thu</p>
                                            <h1 class="day">17</h1>
                                        </div>
                                        <div class="date">
                                            <p class="whichday">Fri</p>
                                            <h1 class="day">18</h1>
                                        </div>
                                        <div class="date">
                                            <p class="whichday">Sat</p>
                                            <h1 class="day">19</h1>
                                        </div>
                                        <div class="date">
                                            <p class="whichday">Sun</p>
                                            <h1 class="day">20</h1>
                                        </div>
                                    </div>
                                    <i class="fa fa-chevron-right"
                                        style="font-size: 30px; margin-top: -65px; margin-left: 350px; color: #233E8D;"></i>
                                </div>
                                    <div class="pickup-section" style="margin-bottom:10px; display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Start Time :<span id="red-star7" class="red-star"> *</span></label>
                                            <input id='start-time' type="time" style="width: 130px">
                                        </div>
                                        <div>
                                            <label style="margin-top: 5px;">End Time :<span id="red-star8" class="red-star"> *</span></label>
                                            <input id="end-time" type="time" style="width: 130px">
                                        </div>
                                    </div>
                                    <div class="pickup-section" style="margin-bottom:10px; display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Maid<span id="red-star9" class="red-star"> *</span></label>
                                            <div style="display: flex; flex-direction: row; justify-content:space-around; overflow-x: scroll; width: 320px">
                                            <div class="person-section" style="width: 130px; display: flex; flex-direction: column; cursor: pointer;">
                                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                                <div class="person-info">
                                                    <span>Abdulla</span>
                                                </div>
                                            </div>
                                            <div class="person-section" style="width: 130px; display: flex; flex-direction: column;">
                                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                                <div class="person-info">
                                                    <span>Abdulla</span>
                                                </div>
                                            </div>
                                            <div class="person-section" style="width: 130px; display: flex; flex-direction: column;">
                                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                                <div class="person-info">
                                                    <span>Abdulla</span>
                                                </div>
                                            </div>
                                            <div class="person-section" style="width: 130px; display: flex; flex-direction: column;">
                                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                                <div class="person-info">
                                                    <span>Abdulla</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <label style="margin-top: 5px;">Special notes</label>
                                        <input type="text" placeholder="put to sleep at 8:00 PM"></input>
                                    </div>
                                    <div class="button-popup">
                                        <button style="margin-right: 230px;" id="closenewReservation">Cancel</button>
                                        <button type="submit">Done</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal" id="ReservationModal">
                    <div class="Edit-Reservation">
                        <form id="ReservationEditForm">
                            <div class="pickup-popup">
                                <div class="top-con">
                                    <div class="back-con">
                                        <i class="fas fa-chevron-left" id="backforreservationedit"></i>
                                    </div>
                                    <div class="refresh-con">
                                        <i class="fas fa-refresh" id="reservationeditrefresh"
                                            style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                                    </div>
                                </div>
                                <h1>Edit Reservation</h1>
                                <form id="visitForm">
                                    <div class="pickup-section">
                                        <label for="time">Select Date <span id="red-star3" class="red-star" style="display: none;"> *</span>
                                        </label>
                                        <p style="color: lightgray; margin-top: -28px; margin-left: 100px;"> May 2024
                                        </p>
                                        <div class="dates">
                                            <div class="date select">
                                                <p class="whichday">Mon</p>
                                                <h1 class="day">14</h1>
                                            </div>
                                            <div class="date">
                                                <p class="whichday">Tue</p>
                                                <h1 class="day">15</h1>
                                            </div>
                                            <div class="date">
                                                <p class="whichday">Wed</p>
                                                <h1 class="day">16</h1>
                                            </div>
                                            <div class="date">
                                                <p class="whichday">Thu</p>
                                                <h1 class="day">17</h1>
                                            </div>
                                            <div class="date">
                                                <p class="whichday">Fri</p>
                                                <h1 class="day">18</h1>
                                            </div>
                                            <div class="date">
                                                <p class="whichday">Sat</p>
                                                <h1 class="day">19</h1>
                                            </div>
                                            <div class="date">
                                                <p class="whichday">Sun</p>
                                                <h1 class="day">20</h1>
                                            </div>
                                        </div>
                                        <i class="fa fa-chevron-right"
                                            style="font-size: 30px; margin-top: -65px; margin-left: 350px; color: #233E8D;"></i>
                                    </div>
                                    <div class="pickup-section" style="display: flex; flex-direction: column;">
                                        <label for="time">Select Time <span id="red-star4" class="red-star" style="display: none;">
                                                *</span></label>
                                        <input id="settime" type="time" value="08:00">
                                    </div>
                                    <div class="pickup-section">
                                        <label for="otp"> Speacial notes </label>
                                        <input class="text" id="text" placeholder="some notes" type="text"
                                            maxlength="12" />
                                    </div>
                                    <div class="terms" style="margin-left: 15px;">
                                        <input required type="checkbox"
                                            style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);" />
                                        <label for="number">
                                            I agree to the
                                            <a href="#">Terms of Service</a>
                                        </label>
                                    </div>
                                    <div class="button-popup">
                                        <button style="margin-right: 230px;" id="closeReservationedit">Cancel</button>
                                        <button type="submit">Done</button>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal" id="ReservationViewModal">
                    <div class="Edit-Reservation">
                        <form id="ReservationViewForm">
                            <div class="pickup-popup">
                                <div class="top-con">
                                    <div class="back-con">
                                        <i class="fas fa-chevron-left" id="backforreservation"></i>
                                    </div>
                                    <div class="refresh-con">
                                        <i class="fas fa-refresh" id="reservationrefresh"
                                            style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                                    </div>
                                </div>
                                <h1>View Reservation</h1>
                                    <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Status :<span style="color: black">Approved</span></label>
                                        </div>
                                        <div>
                                            <label style="margin-top: 5px;">Child :<span style="color: black">Abdulla</span></label>
                                        </div>
                                    </div>
                                    <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Date :</label>
                                            <input readonly type="date" value="2024-08-18">
                                        </div>
                                        <div>
                                            <label style="margin-top: 5px;">End Date :</label>
                                            <input readonly type="date" value="2024-08-19">
                                        </div>
                                    </div>
                                    <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Start Time :</label>
                                            <input readonly type="time" value="08:00" style="width: 130px">
                                        </div>
                                        <div>
                                            <label style="margin-top: 5px;">End Time :</label>
                                            <input readonly type="time" value="20:00" style="width: 130px">
                                        </div>
                                    </div>
                                    <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Maid</label>
                                            <div class="person-section" style="width: 130px">
                                                <img alt="Person's photo" height="50" src="<?=IMAGE?>/face.jpeg" width="50" />
                                                <div class="person-info">
                                                    <span>Abdulla</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label style="margin-top: 5px;">Special notes</label>
                                            <textarea  readonly type="text" style="width:140px; height: 75px; resize: none;"> put to sleep at 8:00 PM</textarea>
                                        </div>
                                    </div>
                                    <div class="button-popup">
                                        <button style="margin-right: 230px;" id="closeReservation">Cancel</button>
                                        <button type="submit">Done</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal" id="RatingModal">
                    <div class="Give-Rating">
                        <div class="top-con">
                            <div class="back-con">
                                <i class="fas fa-chevron-left" id="backforrating"></i>
                            </div>
                            <div class="refresh-con">
                                <i class="fas fa-refresh" id="ratingrefresh"
                                    style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                            </div>
                        </div>
                        <form id="ratingform">
                            <h1>Review and Rating</h1>
                            <label for="package-name">Reason</label>
                            <input id="package-name" type="text" placeholder="Reason for the review" />
                            <label for="included-services">Your review</label>
                            <textarea class="services" id="included-services"
                                placeholder="Provided a good service. The child was so happy. but the he left his toy at the daycare"></textarea>
                            <label for="price">Add your rating</label>
                            <div class="rating pickup-section">
                                <i class="star-rate fas fa-star" data-value="5"></i>
                                <i class="star-rate fas fa-star" data-value="4"></i>
                                <i class="star-rate fas fa-star" data-value="3"></i>
                                <i class="star-rate fas fa-star" data-value="2"></i>
                                <i class="star-rate fas fa-star" data-value="1"></i>
                            </div>
                            <div class="button-popup">
                                <button style="margin-right: 120px;" id="closeratingBtn">Cancel</button>
                                <button style="margin-right: 15px;" type="submit">Done</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="saperate">
                <div class="reservation-container" style="margin-top: -30px;">
                    <div style="display: flex; flex-direction: row; justify-content: flex-start; ">
                        <div class="toggle">
                            <label class="background" for="toggle"></label>
                            <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                                <label class="up-btn" id="up-btn">Upcoming</label>
                                <label class="hi-btn" id="hi-btn">History</label>
                            </div>
                        </div>
                        <h1 style="font-size: 35px; margin-left: 130px;">Reservations</h1>
                    </div>
                    <div class="filters">
                        <input type="date" id="datePicker" style="width: 200px">
                        <select id="statusPicker" style="margin-right: 25px; width: 200px; margin-left: -70px; margin-top: 10px;">
                            <option value="">All</option>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Canceled">Canceled</option>
                        </select>
                        <select id="childPicker" style="margin-right: 200px; margin-top: 10px;">
                            <option Value="" selected> All </option>
                            <?php foreach ($data['children'] as $child): ?>
                                <option value="<?= $child['name']; ?>">
                                    <?= $child['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <table id="upcoming">
                        <thead>
                            <tr>
                                <th>Res ID</th>
                                <th>Child</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            <?php foreach ($data['upcoming'] as $res): ?>
                                <tr>
                                    <td> <?= isset($res['reservation']->Res_Id)? $res['reservation']->Res_Id: "No res set" ?> </td>
                                    <td> <?= isset($res['First_Name'])? $res['First_Name']: "No res set" ?> </td>
                                    <td> <?= isset($res['reservation']->Date)? $res['reservation']->Date: "No res set" ?> </td>
                                    <td> <?= isset($res['reservation']->Start_Time)? $res['reservation']->Start_Time: "No res set" ?> </td>
                                    <td> <?= isset($res['reservation']->End_Time)? $res['reservation']->End_Time: "No res set" ?> </td>
                                    <td>
                                        <div class="<?= isset($res['reservation']->Status)? $res['reservation']->Status: "cancel" ?>">
                                            <p> <?= isset($res['reservation']->Status)? $res['reservation']->Status: "cancel" ?> </p>
                                        </div>
                                    </td>
                                    <td class="edit">
                                        <i class="fas fa-pen reservation-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
=======

>>>>>>> origin/main
                        </tbody>
                    </table>
                    <table id="history" style="display: none;">
                        <thead>
                            <tr>
                                <th>Child</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                        <?php foreach ($data['history'] as $res): ?>
                                <tr>
                                    <td> <?= isset($res['reservation']->Res_Id)? $res['reservation']->Res_Id: "No res set" ?> </td>
                                    <td> <?= isset($res['First_Name'])? $res['First_Name']: "No res set" ?> </td>
                                    <td> <?= isset($res['reservation']->Date)? $res['reservation']->Date: "No res set" ?> </td>
                                    <td> <?= isset($res['reservation']->Start_Time)? $res['reservation']->Start_Time: "No res set" ?> </td>
                                    <td> <?= isset($res['reservation']->End_Time)? $res['reservation']->End_Time: "No res set" ?> </td>
                                    <td>
                                        <div class="<?= isset($res['reservation']->Status)? $res['reservation']->Status: "cancel" ?>">
                                            <p> <?= isset($res['reservation']->Status)? $res['reservation']->Status: "cancel" ?> </p>
                                        </div>
                                    </td>
                                    <td class="edit">
                                        <i class="fas fa-eye"></i>
                                        <i class="fas fa-star feedbackbtn" style="display :<?php if($res['reservation']->Status === 'Canceled' ){echo "none";};  ?>"></i>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
=======

>>>>>>> origin/main
                        </tbody>
                    </table>


                </div>
            </div>
            <a href="<?=ROOT?>/Parent/Message" class="chatbox">
                <img src="<?=IMAGE?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <!-- onclick function -->
        <div class="profile-card" id="profileCard">
            <img src="<?=IMAGE?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
            <img alt="Profile picture of Thilina Perera" height="100" src="<?=IMAGE?>/profilePic.png" width="100"
                class="profile" />
            <h2>
                Thilina Perera
            </h2>
            <p>
                Student    RS0110657
            </p>
            <button class="profile-button" onclick="window.location.href ='<?=ROOT?>/Parent/ParentProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?=ROOT?>/Parent/GuardianProfile'">
                Guardian profile
            </button>
            <button class="logout-button" onclick="window.location.href='<?=ROOT?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
    <script>
<<<<<<< HEAD

        function setChildSession(childName, childId) {
            fetch('<?=ROOT?>/Parent/Reservation/setchildsession', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ childName: childName, childId: childId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log(childName);
                    console.log("Child name set in session.");
                    window.location.href = '<?= ROOT ?>/Child/Reservation';
                } else {
                    console.error("Failed to set child name in session.", data.message);
                }
            })
            .catch(error => console.error("Error:",error));
        }

        document.addEventListener('DOMContentLoaded', function () {
=======
        function setChildSession(ChildID) {
            fetch(' <?= ROOT ?>/Parent/Reservation/setchildsession', {
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
                        window.location.href = '<?= ROOT ?>/Child/Reservation';
                    } else {
                        console.error("Failed to set child name in session at " + window.location.href + " inside function setChildSession.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        <?php if (isset($_SESSION['success']) && $_SESSION['success'] === true): ?>
            document.getElementById('alert').classList.add('showl');
            setTimeout(function() {
                document.getElementById('alert').classList.remove('showl');
            }, 1000);
            <?php $_SESSION['success'] = false; ?>
        <?php endif; ?>

        let currentResId = null;

        function deleteReservation(Res_Id) {
            currentResId = Res_Id; // Store Res_Id in a variable
            document.getElementById("confirmationModal").style.display = "flex"; // Show modal
        }

        // Close the modal without deleting
        function closeModal() {
            document.getElementById("confirmationModal").style.display = "none";
            currentResId = null; // Clear the stored Res_Id
        }

        function confirmDelete() {
            console.log("time to delete = ", currentResId);
            if (currentResId) {
                // Send AJAX request
                fetch('<?= ROOT ?>/Parent/Reservation/RemoveReservation', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: `Res_Id=${currentResId}`
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log(data.message);
                            closeModal();
                            document.getElementById('alert').classList.add('showl');
                            setTimeout(function() {
                                document.getElementById('alert').classList.remove('showl'); // Hide the alert after 6 seconds
                                window.location.reload(); // Reload the page after hiding the alert
                            }, 1000);
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }

        function fetchReservation(date = null, status = null, child = null) {
            console.log(date, child, status)
            fetch('<?= ROOT ?>/Parent/Reservation/store_reservations', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date,
                        child: child,
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("data:", data.data);
                        updaterReservationTable(data.data);
                    } else {
                        console.error("Failed to fetch meal plan:", data.message);
                        alert(data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function updaterReservationTable(data) {
            const upcomingTableBody = document.querySelector('#upcoming tbody');
            const historyTableBody = document.querySelector('#history tbody');

            // Clear existing rows
            upcomingTableBody.innerHTML = '';
            historyTableBody.innerHTML = '';

            // Populate upcoming reservations
            data.upcoming.forEach(res => {
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${res?.ResID ?? "No res set"}</td>
            <td>${res.First_Name ?? "No res set"}</td>
            <td>${res?.Date ?? "No res set"}</td>
            <td>${res?.Start_Time ?? "No res set"}</td>
            <td>
                ${res?.End_Time ?? "No res set"}
                ${res?.Is_24_Hour ? '<span class="tag-24-hour" title="24-Hour Reservation"> (24-hour)</span>' : ''}
            </td>
            <td>
                <div class="${res?.Status ?? "cancel"}">
                    <p>${res?.Status ?? "cancel"}</p>
                </div>
            </td>
            <td class="edit">
                <i class="fas fa-pen reservation-edit"></i>
                ${res?.Status === 'Pending' ? `<i class="fas fa-trash" onclick="deleteReservation(${res.ResID})"></i>` : ''}
            </td>
        `;
                upcomingTableBody.appendChild(row);
            });

            // Populate history reservations
            data.history.forEach(res => {
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${res.First_Name ?? "No res set"}</td>
            <td>${res?.Date ?? "No res set"}</td>
            <td>${res?.Start_Time ?? "No res set"}</td>
            <td>
                ${res?.End_Time ?? "No res set"}
                ${res?.Is_24_Hour ? '<span class="tag-24-hour" title="24-Hour Reservation"> (24-hour)</span>' : ''}
            </td>
            <td>
                <div class="${res?.Status ?? "cancel"}">
                    <p>${res?.Status ?? "cancel"}</p>
                </div>
            </td>
            <td class="edit">
                <i class="fas fa-eye"></i>
                <i class="fas fa-star feedbackbtn" style="display: ${res?.Status === 'Canceled' ? "none" : ""}"></i>
            </td>
        `;
                historyTableBody.appendChild(row);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            
            const datePicker = document.getElementById('datePicker');
            const childPicker = document.getElementById('childPicker');
            const statusPicker = document.getElementById('statusPicker');

            // Initial fetch with 'null' values (or a default option like 'All')
            fetchReservation( null , null, null);

            datePicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null; // Use null if empty
                const statusValue = statusPicker.value || null; // Use null if empty
                const childValue = childPicker.value || 'All'; // Default to 'All' if empty
                fetchReservation(dateValue, statusValue, childValue);
            });

            childPicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null;
                const statusValue = statusPicker.value || null;
                const childValue = childPicker.value || 'All'; // Default to 'All' if empty
                fetchReservation(dateValue, statusValue, childValue);
            });

            statusPicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null;
                const statusValue = statusPicker.value || null;
                const childValue = childPicker.value || 'All'; // Default to 'All' if empty
                fetchReservation(dateValue, statusValue, childValue);
            });


            const dateElements = document.querySelectorAll('.date');
            const redstar3 = document.getElementById('red-star3');
            const redstar6 = document.getElementById('red-star6');

            dateElements.forEach(function(date) {
                date.addEventListener('click', function(event) {
                    const dayNumber = date.querySelector('h1').textContent;

                    if (date.classList.contains('select')) {
                        date.classList.remove('select');
                        redstar3.classList.remove('hidden');
                        redstar6.classList.remove('hidden');
                        selectedDate = null;
                    } else {
                        selectedDate = dayNumber;
                        redstar3.classList.add('hidden');
                        redstar6.classList.add('hidden');
                        clearSelectedDates();
                        date.classList.add('select');
                        selectDate(selectedDate);
                    }
                });
            });

            function selectDate(date) {
                console.log("Selected date:", date);
                var dateInput = document.getElementById('date-inputforpost');
                dateInput.value = '2024-11-' + date;

                var allDates = document.querySelectorAll('.date');
                allDates.forEach(function(element) {
                    element.classList.remove('select');
                });

                event.target.closest('.date').classList.add('select');
            }

            function clearSelectedDates() {
                dateElements.forEach(function(date) {
                    date.classList.remove('select');
                });
            }

>>>>>>> origin/main
            const feedbackbtns = document.querySelectorAll('.feedbackbtn');
            const RatingModal = document.getElementById('RatingModal');
            const backformeeting = document.getElementById('backforrating');
            const meetingrefresh = document.getElementById('ratingrefresh');
            const meetingform = document.getElementById('ratingform');
            const closemeetingBtn = document.getElementById('closeratingBtn');
            const stars = document.querySelectorAll('.star-rate');
            const ReservationEditModal = document.getElementById('ReservationModal');
            const mainContent = document.getElementById('main-content');
            const ReservationViewModal = document.getElementById('ReservationViewModal');
            const NewReservationModal = document.getElementById('NewReservationModal');

            const upbtn = document.getElementById('up-btn');
            const hibtn = document.getElementById('hi-btn');
            const upcoming = document.getElementById('upcoming');
            const history = document.getElementById('history');
            const headingres = document.getElementById('heading-res');

            upbtn.addEventListener('click', function(){
                upbtn.style.color = 'white';
<<<<<<< HEAD
                hibtn.style.color = 'black';
                upbtn.style.backgroundColor = '#099690';
                hibtn.style.backgroundColor = '#BADBD0';
=======
                upbtn.style.backgroundColor = '#10639a';
                hibtn.style.backgroundColor = '#60a6ec';
>>>>>>> origin/main
                upcoming.style.display = 'block';
                history.style.display = 'none';
                headingres.style.marginLeft = '180px';
                headingres.textContent = 'Reervation';
            });

            hibtn.addEventListener('click', function(){
                hibtn.style.color = 'white';
<<<<<<< HEAD
                upbtn.style.color = 'black';
                hibtn.style.backgroundColor = '#099690';
                upbtn.style.backgroundColor = '#BADBD0';
=======
                hibtn.style.backgroundColor = '#10639a';
                upbtn.style.backgroundColor = '#60a6ec';
>>>>>>> origin/main
                upcoming.style.display = 'none';
                history.style.display = 'block';
                headingres.style.marginLeft = '140px';
                headingres.textContent = 'Reervation history';
            });

            backformeeting.addEventListener('click', function () {
                toggleModal(RatingModal, 'none');
            })

            meetingrefresh.addEventListener('click', function () {
                meetingform.reset();
                stars.forEach((star) => {
                    star.classList.remove('selectestar')
                });
            })

            closemeetingBtn.addEventListener('click', function () {
                toggleModal(meetingModal, 'none');
            })

            feedbackbtns.forEach(element => {
                console.log("Hi");
                element.addEventListener('click', function () {
                    toggleModal(RatingModal, 'flex');
                })
            });

            window.addEventListener('click', function (e) {
                if (e.target === RatingModal) {
                    toggleModal(RatingModal, 'none');
                }
                if (e.target === ReservationEditModal) {
                    toggleModal(ReservationEditModal, 'none');
                }
                if (e.target === ReservationViewModal) {
                    toggleModal(ReservationViewModal, 'none');
                }
                if (e.target === NewReservationModal) {
                    toggleModal(NewReservationModal, 'none');
                }
            });

            function toggleModal(modal, display) {
                modal.style.display = display;
                if (display === 'flex') {
                    document.body.classList.add('no-scroll');
                    mainContent.classList.add('blurred');
                } else {
                    document.body.classList.remove('no-scroll');
                    mainContent.classList.remove('blurred');
                }
            }

            let rating = 0;
            let i = 0;

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    if (star.classList.contains('selectestar') && index === rating - 1) {
                        for (let j = index; j < stars.length; j++) {
                            stars[j].classList.remove('selectestar');
                        }
                        rating -= 1;
                        i -= 1;
                    }
                    else if (index === rating) {
                        stars[index].classList.add('selectestar');
                        rating += 1;
                        i += 1;
                    }
                });
            });

            const reservationeditbtn = document.querySelectorAll('.reservation-edit');
            const backforreservationedit = document.getElementById('backforreservationedit');
            const reservationeditrefresh = document.getElementById('reservationeditrefresh');
            const closeReservationedit = document.getElementById('closeReservationedit');
            const dateElements = document.querySelectorAll('.date');
            const ReservationEditForm = document.getElementById('ReservationEditForm');
            const redstar3 = document.getElementById('red-star3');
            const redstar4 = document.getElementById('red-star4');
            const redstar5 = document.getElementById('red-star5');
            const settime = document.getElementById('settime');

            settime.addEventListener('input',function(){
                if(!settime.value){
                    redstar4.classList.remove('hidden');
                }
                else{
                    redstar4.classList.add('hidden');
                }
            })

            reservationeditbtn.forEach(button => {
                button.addEventListener('click', function () {
                    toggleModal(ReservationEditModal, 'flex');
                });
            });

            backforreservationedit.addEventListener('click', function () {
                toggleModal(ReservationEditModal, 'none');
            });

            closeReservationedit.addEventListener('click', function () {
                toggleModal(ReservationEditModal, 'none');
            });

            let originalDate = null;
            let selectedDate = null;

            reservationeditrefresh.addEventListener('click', function () {
                clearSelectedDates();
                ReservationEditForm.reset();
                dateElements.forEach(date => {
                    if (date.textContent === originalDate) {
                        date.classList.add('select');
                    }
                })
            })

            // Function to clear selected dates
            function clearSelectedDates() {
                dateElements.forEach(function (date) {
                    date.classList.remove('select');
                });
            }

            dateElements.forEach(function (date) {
                date.addEventListener('click', function () {
                    if (date.classList.contains('select')) {
                        date.classList.remove('select');
                        redstar3.classList.remove('hidden');
                        redstar6.classList.remove('hidden');
                        selectedDate = null;
                    }
                    else {
                        selectedDate = date.textContent;
                        redstar3.classList.add('hidden');
                        redstar6.classList.add('hidden');
                        clearSelectedDates();
                        date.classList.add('select');
                    }
                });
            });

            const reservations = document.querySelectorAll('.reservation');
            const backforreservation = document.getElementById('backforreservation');
            const reservationrefresh = document.getElementById('reservationrefresh');
            const closeReservation = document.getElementById('closeReservation');

            reservations.forEach( reservationbtn => {
                reservationbtn.addEventListener('click',function () {
                    toggleModal(ReservationViewModal, 'flex');
                })
            })

            backforreservation.addEventListener('click', function () {
                toggleModal(ReservationViewModal, 'none');
            });

            closeReservation.addEventListener('click', function () {
                toggleModal(ReservationViewModal, 'none');
            });

            const newreservationbtn = document.getElementById('newreservationbtn');
            const NewReservationForm = document.getElementById('NewReservationForm');
            const backfornewreservation = document.getElementById('backfornewreservation');
            const newreservationrefresh = document.getElementById('newreservationrefresh');
            const closenewReservation = document.getElementById('closenewReservation');

            newreservationbtn.addEventListener('click',function () {
                toggleModal(NewReservationModal,'flex');
            });
            backfornewreservation.addEventListener('click',function () {
                toggleModal(NewReservationModal,'none');
            });
            closenewReservation.addEventListener('click',function () {
                toggleModal(NewReservationModal,'none');
            });
            newreservationrefresh.addEventListener('click',function () {
                NewReservationForm.reset();
            });

            const persons = document.querySelectorAll('.person-section');
            let selectedPerson = null;
            const redstar6 = document.getElementById('red-star6');
            const redstar7 = document.getElementById('red-star7');
            const redstar8 = document.getElementById('red-star8');
            const redstar9 = document.getElementById('red-star9');
            const starttime = document.getElementById('start-time');
            const endtime = document.getElementById('end-time');

            function clearSelectedPersons() {
                persons.forEach(function (person) {
                    person.classList.remove('select-person');
                });
            }

            persons.forEach(function (person) {
                person.addEventListener('click', function () {
                    if (person.classList.contains('select-person')) {
                        person.classList.remove('select-person');
                        redstar9.classList.remove('hidden');
                        selectedPerson = null;
                    }
                    else {
                        selectedPerson = person.textContent;
                        redstar9.classList.add('hidden');
                        clearSelectedPersons();
                        person.classList.add('select-person');
                    }
                });
            });

            starttime.addEventListener('input',function(){
                if(!starttime.value){
                    redstar7.classList.remove('hidden');
                }
                else{
                    redstar7.classList.add('hidden');
                }
            })
            
            endtime.addEventListener('input',function(){
                if(!endtime.value){
                    redstar8.classList.remove('hidden');
                }
                else{
                    redstar8.classList.add('hidden');
                }
            })

        });
    </script>
</body>

</html>