<html>

<head>
    <title>Reservation</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>/Child/reservation.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Child/Main.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Child/Profile.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/Navbar.js?v=<?= time() ?>"></script>
    <script src="<?= JS ?>/Child/MessageDropdown.js?v=<?= time() ?>"></script>
    <style>
    </style>
</head>

<body style="overflow:hidden;" id="body">
    <div class="container">
        <div class="sidebar" id="sidebar1" style="z-index: 100;">
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
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Child/report">
                        <i class="fa fa-user-shield"></i> <span>Report</span>
                    </a>
                </li>
                <li class="selected" style="margin-top:40px;">
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
                <a href="#" style="text-decoration:none"><i class="fas fa-question-circle"></i> <span>Help</span></a>
            </div>
        </div>
        <div class="sidebar-2" id="sidebar2" style="display: flex; flex-direction: row;">
            <div>
                <h2 style="margin-top: 25px; margin-left: 35px !important;">Familty Ties</h2>
                <div class="family-section" style="margin-top: 10px; margin-left: 20px;">
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
                    <h2 style="margin-top: 25px; margin-left: 35px !important;">Little Explorers</h2>
                    <p style="margin-bottom: 20px; color: white; margin-left: 35px !important;">
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
                                <img src="<?php echo htmlspecialchars($child['image']); ?>"
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
                    <h3><img src="<?= IMAGE ?>/reservation.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -10px;">Accepted reservation</h3>
                    <p style="margin-bottom: 3px;"><?= isset($data['Approved']) ? $data['Approved'] : '0'; ?> reservations</p>
                    <span style="font-weight: 50;">Reservations been scheduled</span>
                </div>
                <div class="stat">
                    <h3><img src="<?= IMAGE ?>/pending.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 30px; margin-right: 10px; margin-bottom: -10px;">Pending reservation</h3>
                    <p style="margin-bottom: 3px;"><?= isset($data['Pending']) ? $data['Pending'] : '0'; ?> reservation</p>
                    <span style="font-weight: 50;">The reservation has not been accepted by maid
                        yet</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?= IMAGE ?>/cancel.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Canceled reservation</h3>
                    <p style="margin-bottom: 3px;"><?= isset($data['Canceled']) ? $data['Canceled'] : '0'; ?> reservations</p>
                    <span style="font-weight: 50;">The reservation has not been canceled</span>
                </div>
                <div class="stat">
                    <h3 style="margin-top: -16px;"><img src="<?= IMAGE ?>/calendar-plus-solid.svg?v=<?= time() ?>" alt="Attendance"
                            style="width: 40px; margin-right: 10px; margin-bottom: -15px;">Make reservation</h3>
                    <div class="lol" id="newreservationbtn" style="cursor: pointer; margin-bottom: -100px; margin-top: 20px;">
                        <p>Create</p>
                    </div>
                </div>
            </div>
            <div class="saperate">
                <div class="modal" id="NewReservationModal">
                    <div class="Edit-Reservation">
                        <form id="NewReservationForm" method="post">
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
                                    <label for="time">Select Date <span id="red-star6" class="red-star <?= isset($data['values']['Date']) ? 'hidden' : '' ?>)"> *</span>
                                    </label>
                                    <p style="color: black; margin-top: -28px; margin-left: 100px;"> November 2024
                                    </p>
                                    <div class="dates">
                                        <?php foreach ($data['dates'] as $date): ?>
                                            <?php
                                            // Extract the day from the full date in $data['editvalues']['Date']
                                            $selectedDay = isset($data['editvalues']['Date']) ? (new DateTime($data['editvalues']['Date']))->format('j') : null;
                                            ?>
                                            <div class="date <?= ($selectedDay === $date['day']) ? 'select' : '' ?>">
                                                <p class="whichday"><?= $date['dayName'] ?></p>
                                                <h1 class="day"><?= $date['day'] ?></h1>
                                            </div>
                                        <?php endforeach ?>
                                        <input type="hidden" name="Date" id="date-inputforpost" required />
                                    </div>
                                    <p class="error"> <?= isset($data['errors']['Date']) ? $data['errors']['Date'] : '' ?> </p>
                                </div>
                                <div class="pickup-section" style="margin-bottom:10px; display: flex; flex-direction: column; justify-content:space-between; text-align:center;">
                                    <div style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <div>
                                            <label style="margin-top: 5px;">Start Time :<span id="red-star7" class="red-star <?= isset($data['values']['Start_Time']) ? 'hidden' : '' ?>"> *</span></label>
                                            <input name="Start_Time" type="time" style="width: 130px" required step="900" min="08:00" max="20:00"
                                                value="<?= isset($data['values']['Start_Time']) ? $data['values']['Start_Time'] : '' ?>" id="customtime1">
                                            <p class="error"><?= isset($data['errors']['Start_Time']) ? $data['errors']['Start_Time'] : '' ?></p>
                                        </div>
                                        <div>
                                            <label style="margin-top: 5px;">End Time :<span id="red-star8" class="red-star <?= isset($data['values']['End_Time']) ? 'hidden' : '' ?>"> *</span></label>
                                            <input name="End_Time" type="time" style="width: 130px" required step="900" min="08:00" max="20:00"
                                                value="<?= isset($data['values']['End_Time']) ? $data['values']['End_Time'] : '' ?>" id="customtime2">
                                            <p class="error"><?= isset($data['errors']['End_Time']) ? $data['errors']['End_Time'] : '' ?></p>
                                        </div>
                                    </div>
                                    <p class="error"><?= isset($data['errors']['Time']) ? $data['errors']['Time'] : '' ?></p>
                                </div>
                                <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                    <label style="margin-top: 5px;">Special notes</label>
                                    <input id="notes" type="text" placeholder="put to sleep at 8:00 PM" name="Notes"
                                        value="<?= isset($data['values']['Notes']) ? $data['values']['Notes'] : '' ?>">
                                </div>
                                <div class="button-popup">
                                    <button type="button" style="margin-right: 230px;" id="closenewReservation">Cancel</button>
                                    <button type="submit" name="makereservation" value="new-reservation">Done</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal" id="ReservationModal">
                    <div class="Edit-Reservation">
                        <form id="ReservationEditForm" method="post">
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
                                        <label for="time">Select Date <span id="red-star3" class="red-star <?= isset($data['editvalues']['Date']) ? 'hidden' : '' ?>"> *</span></label>
                                        <p style="color: lightgray; margin-top: -28px; margin-left: 100px;"> May 2024</p>
                                        <input type=id id="modal-Res_Id" style="display: none;" name="Res_Id" value="<?= isset($data['editvalues']['Date']) ? $data['editvalues']['Date'] : '' ?>">
                                        <div class="dates">
                                            <input type="date" id="modal-Date" style="display: none;">
                                            <?php foreach ($data['dates'] as $date): ?>
                                                <?php
                                                // Extract the day from the full date in $data['editvalues']['Date']
                                                $selectedDay = isset($data['editvalues']['Date']) ? (new DateTime($data['editvalues']['Date']))->format('j') : null;
                                                ?>
                                                <div class="date <?= ($selectedDay === $date['day']) ? 'select' : '' ?>">
                                                    <p class="whichday"><?= $date['dayName'] ?></p>
                                                    <h1 class="day"><?= $date['day'] ?></h1>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <i class="fa fa-chevron-right"
                                            style="font-size: 30px; margin-top: -65px; margin-left: 350px; color: #233E8D;"></i>
                                        <p class="error"> <?= isset($data['editerrors']['Date']) ? $data['editerrors']['Date'] : '' ?> </p>
                                    </div>
                                    <input name="Date" type="date" id="date-inputforpost2" required style="display: none;" value="<?= isset($data['editvalues']['Date']) ? $data['editvalues']['Date'] : '' ?>" />
                                    <div class="pickup-section" style="margin-bottom:10px; display: flex; flex-direction: column; justify-content:space-between; text-align:center;">
                                        <div style="display: flex; flex-direction: row; justify-content:space-between;">
                                            <div>
                                                <label style="margin-top: 5px;">Start Time :<span id="red-star7" class="red-star <?= isset($data['editvalues']['Start_Time']) ? 'hidden' : '' ?>"> *</span></label>
                                                <input name="Start_Time" type="time" style="width: 130px" required step="900" min="08:00" max="20:00" id="modal-Start_Time"
                                                    value="<?= isset($data['editvalues']['Start_Time']) ? $data['editvalues']['Start_Time'] : '' ?>">
                                                <p class="error"><?= isset($data['editerrors']['Start_Time']) ? $data['editerrors']['Start_Time'] : '' ?></p>
                                            </div>
                                            <div>
                                                <label style="margin-top: 5px;">End Time :<span id="red-star8" class="red-star <?= isset($data['editvalues']['End_Time']) ? 'hidden' : '' ?>"> *</span></label>
                                                <input name="End_Time" type="time" style="width: 130px" required step="900" min="08:00" max="20:00" id="modal-End_Time"
                                                    value="<?= isset($data['editvalues']['End_Time']) ? $data['editvalues']['End_Time'] : '' ?>">
                                                <p class="error"><?= isset($data['editerrors']['End_Time']) ? $data['editerrors']['End_Time'] : '' ?></p>
                                            </div>
                                        </div>
                                        <p class="error"><?= isset($data['editerrors']['Time']) ? $data['editerrors']['Time'] : '' ?>
                                    </div>
                                    <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                        <label style="margin-top: 5px;">Special notes</label>
                                        <input type="text" placeholder="put to sleep at 8:00 PM" name="Notes" id='modal-Notes'
                                            value="<?= isset($data['editvalues']['Notes']) ? $data['editvalues']['Notes'] : '' ?>">
                                    </div>
                                    <div class="button-popup">
                                        <button type="button" style="margin-right: 230px;" id="closeReservationedit">Cancel</button>
                                        <button type="submit" name="editreservation" value="edited-reservation">Done</button>
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
                                        <i class="fas fa-chevron-left" id="backvieweservation"></i>
                                    </div>
                                </div>
                                <h1>View Reservation</h1>
                                <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                    <div>
                                        <label style="margin-top: 5px;">Status :</label>
                                        <div id="datedesign">
                                            <p style="padding: 0px 30px;" id="viewstatusreservation">Canceled</p>
                                        </div>
                                    </div>
                                    <div>
                                        <label style="margin-top: 5px;">Date :</label>
                                        <input readonly type="date" id="viewdate">
                                    </div>
                                </div>
                                <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                    <div>
                                        <label style="margin-top: 5px;">Start Time :</label>
                                        <input readonly type="time" id="viewstarttime" style="width: 130px">
                                    </div>
                                    <div>
                                        <label style="margin-top: 5px;">End Time :</label>
                                        <input readonly type="time" id="viewendtime" style="width: 130px">
                                    </div>
                                </div>
                                <div class="pickup-section" style="display: flex; flex-direction: row; justify-content:space-between;">
                                    <div>
                                        <label style="margin-top: 5px;">Special notes</label>
                                        <textarea readonly type="text" style="width:305px; height: 75px; resize: none;" id="viewnotes"></textarea>
                                    </div>
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
                        <form id="myform" method="post">
                            <input id="residforreview" type="text" style="display: none;" name="Res_Id">
                            <h1>Review and Rating</h1>
                            <label for="package-name">Reason</label>
                            <input id="package-name" name="Reason" type="text" placeholder="Reason for the review" required />
                            <label for="included-services">Your review</label>
                            <textarea class="services" id="included-services" name="Review" required
                                placeholder="Provided a good service. The child was so happy. but the he left his toy at the daycare"></textarea>
                            <label for="price">Add your rating </label>
                            <div class="rating pickup-section">
                                <i class="star-rate fas fa-star" data-value="5"></i>
                                <i class="star-rate fas fa-star" data-value="4"></i>
                                <i class="star-rate fas fa-star" data-value="3"></i>
                                <i class="star-rate fas fa-star" data-value="2"></i>
                                <i class="star-rate fas fa-star" data-value="1"></i>
                                <input id="starnumber" style="display: none;" type="number" name="Stars">
                            </div>
                            <div class="button-popup">
                                <button style="margin-right: 120px;" type="button" id="closeratingBtn">Cancel</button>
                                <button style="margin-right: 15px;" type="submit" onclick="reviewformsubmit()">Done</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="reservation-container" style="margin-top: 4px; width: 1167px;">
                    <div style="display: flex; flex-direction: column; justify-content: flex-start; ">
                        <div class="toggle">
                            <label class="background" for="toggle"></label>
                            <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                                <label class="up-btn" id="up-btn">Upcoming</label>
                                <label class="hi-btn" id="hi-btn">History</label>
                            </div>
                        </div>
                        <h2 style="margin-top: -10px !important; margin-bottom: 2px;"> Reservations </h2>
                        <hr>
                    </div>
                    <div class="filters">
                        <input type="date" id="datePicker" style="width: 200px">
                        <select id="statusPicker" style="margin-right: 25px; width: 200px; margin-left: -70px; margin-top: 10px;">
                            <option value="">All</option>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Canceled">Canceled</option>
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

                        </tbody>
                    </table>
                </div>
            </div>
            <a href="<?= ROOT ?>/Child//Message" class="chatbox">
                <img src="<?= IMAGE ?>/message.svg" class="fas fa-comment-dots"
                    style="margin-left: 12px; width: 24px; height: 24px; margin-top: 2px;" alt="Message Icon" />
                <div class="message-numbers" style="margin-left: -5px; margin-bottom: 15px;">
                    <p> 2</p>
                </div>
            </a>
        </div>
        <div id="confirmationModal" class="modal">
            <div class="modal-content">
                <p>Are you sure you want to delete this reservation?</p>
                <button id="confirmDelete" onclick="confirmDelete()">Yes</button>
                <button onclick="closeModal()">Cancel</button>
            </div>
        </div>
        <div class="verification-alert" id="alert">
            <div class="alert-icon">
                <img src="<?= IMAGE ?>/success.svg" style="width: 64px; height: 64px; filter: invert(43%) sepia(85%) saturate(542%) hue-rotate(83deg); align-items: center;" alt="success icon">
            </div>
            <div class="alert-message">
                <h1>Success</h1>
            </div>
        </div>
        <!-- onclick function -->
        <div class="profile-card" id="profileCard" style="top: 0 !important; position: fixed !important; z-index: 1000000;">
            <img src="<?= IMAGE ?>/back-arrow-2.svg" alt="back-arrow"
                style="width: 24px; height: 24px; fill:#233E8D !important;" class="back">
                <img alt="Profile picture of Thilina Perera" height="100" src="<?php echo htmlspecialchars($data['selectedchildren']['image']); ?>" width="100"
            class="profile" />
        <h2><?=$data['selectedchildren']['fullname'] ?></h2>
        <p>SRD<?= $data['selectedchildren']['id'] ?></p>
            <button class="profile-button" onclick="window.location.href='<?= ROOT ?>/Child/ChildProfile'">
                Profile
            </button>
            <button class="secondary-button" onclick="window.location.href='<?= ROOT ?>/Child/ParentProfile'">
                Parent profile
            </button>
            <button class="secondary-button" onclick="window.location.href='<?= ROOT ?>/Child/GuardianProfile'">
                Guardian profile
            </button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildPackage'">Package</button>
            <button class="secondary-button" onclick="window.location.href ='<?= ROOT ?>/Child/ChildID'">Id Card</button>
            <button class="logout-button" onclick="window.location.href='<?= ROOT ?>/Main/Home'">
                LogOut
            </button>
        </div>
    </div>
</body>
<script>
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

    function openeditModal() {
        document.getElementById('ReservationModal').style.display = 'flex';
    }

    function confirmDelete() {
        console.log("time to delete = ", currentResId);
        if (currentResId) {
            // Send AJAX request
            fetch('<?= ROOT ?>/Child/Reservation/RemoveReservation', {
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

    function reviewform(Res_Id) {
        document.getElementById('RatingModal').style.display = 'flex';
        document.getElementById('residforreview').value = Res_Id;
    }

    function editReservation(Res_Id) {
        console.log(Res_Id);
        if (Res_Id) {
            fetch('<?= ROOT ?>/Child/Reservation/GeteditReservation', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `Res_Id=${Res_Id}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        openeditModal();
                        document.getElementById('date-inputforpost').value = data.data.Date;
                        document.getElementById('modal-Res_Id').value = data.data.Res_Id;
                        document.getElementById('modal-Date').value = data.data.Date;
                        document.getElementById('modal-Start_Time').value = data.data.Start_Time;
                        document.getElementById('modal-End_Time').value = data.data.End_Time;
                        if (data.data.Notes !== null) {
                            document.getElementById('modal-Notes').value = data.data.Notes;
                        } else {
                            document.getElementById('modal-Notes').value = ''; // Clear the notes field if empty
                        }
                        highlightSelectedDate();
                    } else {
                        alert(data.message);
                    }
                })
        } else {
            alert('No Reservation ID provided');
        }
    }

    function openviewModal() {
        document.getElementById('ReservationViewModal').style.display = 'flex';
    }

    function viewReservation(Res_Id) {
        console.log(Res_Id);
        if (Res_Id) {
            fetch('<?= ROOT ?>/Child/Reservation/GetviewReservation', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `Res_Id=${Res_Id}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        openviewModal();
                        document.getElementById('viewstatusreservation').textContent = data.data.Status;
                        document.getElementById('datedesign').classList.add(data.data.Status);
                        document.getElementById('viewdate').value = data.data.Date;
                        document.getElementById('viewstarttime').value = data.data.Start_Time;
                        document.getElementById('viewendtime').value = data.data.End_Time;
                        if (data.data.Notes !== null) {
                            document.getElementById('viewnotes').value = data.data.Notes;
                        } else {
                            document.getElementById('viewnotes').value = 'No notes available'; // Clear the notes field if empty
                        }
                    } else {
                        alert(data.message);
                    }
                })
        } else {
            alert('No Reservation ID provided');
        }
    }

    function fetchReservation(date = null, status = null) {
            console.log(date, status)
            fetch('<?= ROOT ?>/Child/Reservation/store_reservations', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        date: date,
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

        function setChildSession(childName, childId) {
            fetch('<?= ROOT ?>/Child/Reservation/setchildsession', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        childName: childName,
                        childId: childId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Child name set in session.");
                        window.location.href = '<?= ROOT ?>/Child/Reservation';
                    } else {
                        console.error("Failed to set child name in session.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function removechildsession() {
            fetch('<?= ROOT ?>/Child/Reservation/removechildsession', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("Child name removed from session.");
                        window.location.href = '<?= ROOT ?>/Parent/Reservation';
                    } else {
                        console.error("Failed to remove child name from session.", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        function highlightSelectedDate() {
            const selectedDate = document.getElementById('modal-Date').value; // Get the value from the date input

            if (selectedDate !== '') { // Proceed only if the value is not empty
                const selectedDay = parseInt(selectedDate.split('-')[2], 10); // Extract the day part as an integer

                const dateElements = document.querySelectorAll('.date'); // Select all date elements

                dateElements.forEach(dateElement => {
                    console.log("Checking date match...");
                    const dayText = parseInt(dateElement.querySelector('.day').textContent, 10); // Get the day text as an integer

                    // Compare the selected day with the dayText
                    if (selectedDay === dayText) {
                        dateElement.classList.add('select'); // Add the 'select' class
                        selectDate(selectedDay);
                    } else {
                        dateElement.classList.remove('select'); // Remove the 'select' class if no match
                    }
                });
            } else {
                console.warn("modal-Date value is empty. No action taken.");
            }
        }

        function selectDate(date) {
            var dateInput = document.getElementById('date-inputforpost2');
            dateInput.value = '2024-11-' + date;
        }

        function reviewformsubmit() {
            const form = document.getElementById('myform'); // Get the form element by ID
            const formData = new FormData(form); // Create a FormData object using the form element

            fetch('<?= ROOT ?>/Child/Reservation/Review', {
                    method: 'POST', // e.g., 'POST'
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        return response.json(); // Parse the JSON response
                    }
                    throw new Error('Network response was not ok');
                })
                .then(data => {
                    if (data.success) {
                        console.log('Success:', data.message);
                        document.getElementById('RatingModal').style.display = 'none';
                        // Optionally redirect or update UI
                    } else {
                        console.error(data.post_data)
                        console.error('Failure:', data.message);
                        // Optionally display error to the user
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });
        }

        document.addEventListener('DOMContentLoaded', function() {

            const datePicker = document.getElementById('datePicker');
            const statusPicker = document.getElementById('statusPicker');

            // Initial fetch with 'null' values (or a default option like 'All')
            fetchReservation( null , null);

            datePicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null; // Use null if empty
                const statusValue = statusPicker.value || null; // Use null if empty
                fetchReservation(dateValue, statusValue);
            });

            statusPicker.addEventListener('change', function() {
                const dateValue = datePicker.value || null;
                const statusValue = statusPicker.value || null;
                fetchReservation(dateValue, statusValue);
            });

            const stars = document.querySelectorAll('.star-rate');
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
                    } else if (index === rating) {
                        stars[index].classList.add('selectestar');
                        rating += 1;
                        i += 1;
                    }
                    document.getElementById('starnumber').value = rating;
                });
            });

            const NewReservationModal = document.getElementById('NewReservationModal');
            const newreservationrefresh = document.getElementById('newreservationrefresh');
            const newreservationbtn = document.getElementById('newreservationbtn');
            const backfornewreservation = document.getElementById('backfornewreservation');
            const mainContent = document.getElementById('main-content');
            const closenewReservation = document.getElementById('closenewReservation');
            const redstar7 = document.getElementById('red-star7');
            const redstar8 = document.getElementById('red-star8');
            const starttime = document.getElementById('customtime1');
            const endtime = document.getElementById('customtime2');
            const notes = document.getElementById('notes');

            newreservationrefresh.addEventListener('click', function() {
                clearSelectedDates();
                NewReservationForm.reset();
                starttime.value = ''; // Clear Start Time input
                endtime.value = '';
                notes.value = '';
                document.querySelectorAll('.error').forEach(errorElement => {
                    errorElement.textContent = ''; // Clear the text content of all error elements
                });
            });

            closenewReservation.addEventListener('click', function() {
                window.location.href = '<?= ROOT ?>/Child/Reservation';
            });

            newreservationbtn.addEventListener('click', function() {
                toggleModal(NewReservationModal, 'flex');
            });

            backfornewreservation.addEventListener('click', function() {
                window.location.href = '<?= ROOT ?>/Child/Reservation';
            });

            starttime.addEventListener('input', function() {
                if (!starttime.value) {
                    redstar7.classList.remove('hidden');
                } else {
                    redstar7.classList.add('hidden');
                }
            })

            endtime.addEventListener('input', function() {
                if (!endtime.value) {
                    redstar8.classList.remove('hidden');
                } else {
                    redstar8.classList.add('hidden');
                }
            })

            const reservationeditbtn = document.querySelectorAll('.reservation-edit');
            const backforreservationedit = document.getElementById('backforreservationedit');
            const reservationeditrefresh = document.getElementById('reservationeditrefresh');
            const closeReservationedit = document.getElementById('closeReservationedit');
            const ReservationEditForm = document.getElementById('ReservationEditForm');
            const redstar4 = document.getElementById('red-star4');
            const redstar5 = document.getElementById('red-star5');
            const settime = document.getElementById('settime');
            const ReservationEditModal = document.getElementById('ReservationModal');

            reservationeditrefresh.addEventListener('click', function() {
                clearSelectedDates();
                ReservationEditForm.reset();
                document.querySelectorAll('.error').forEach(errorElement => {
                    errorElement.textContent = ''; // Clear the text content of all error elements
                });
            });

            reservationeditbtn.forEach(button => {
                button.addEventListener('click', function() {
                    toggleModal(ReservationEditModal, 'flex');
                });
            });

            backforreservationedit.addEventListener('click', function() {
                window.location.href = '<?= ROOT ?>/Child/Reservation';
            });

            closeReservationedit.addEventListener('click', function() {
                window.location.href = '<?= ROOT ?>/Child/Reservation';
            });

            let originalDate = null;

            // reservationeditrefresh.addEventListener('click', function () {
            //     clearSelectedDates();
            //     ReservationEditForm.reset();
            //     dateElements.forEach(date => {
            //         if (date.textContent === originalDate) {
            //             date.classList.add('select');
            //         }
            //     })
            // })

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

            const dateElements = document.querySelectorAll('.date');
            const redstar3 = document.getElementById('red-star3');
            const redstar6 = document.getElementById('red-star6');
            let selectedDate = null;

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
                        selectDate2(selectedDate);
                    }
                });
            });

            function selectDate(date) {
                console.log("Selected date:", date);
                var dateInput = document.getElementById('date-inputforpost');
                dateInput.value = '2024-11-' + date;
                console.log(dateInput.value);

                var allDates = document.querySelectorAll('.date');
                allDates.forEach(function(element) {
                    element.classList.remove('select');
                });

                event.target.closest('.date').classList.add('select');
            }

            function selectDate2(date) {
                console.log("Selected date:", date);
                var dateInput = document.getElementById('date-inputforpost2');
                dateInput.value = '2024-11-' + date;
                console.log(dateInput.value);

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

            if (<?= (isset($data['displayModal']) && ($data['displayModal'] === true) && ($data['Entered'] === true))  ? 'true' : 'false' ?>) {
                NewReservationModal.style.display = 'flex';
            }

            const ReservationModal = document.getElementById('ReservationModal');

            if (<?= (isset($data['editdisplayModal']) && ($data['editdisplayModal'] === true) && ($data['editEntered'] === true))  ? 'true' : 'false' ?>) {
                ReservationModal.style.display = 'flex';
            }

            document.getElementById("customtime1").addEventListener('change', function(event) {
                const timeInput = event.target;
                const [hours, minutes] = timeInput.value.split(":").map(Number);

                const roundedMinutes = Math.round(minutes / 15) * 15;
                let adjustedHours = hours;
                let adjustedMinutes = roundedMinutes;
                if (roundedMinutes === 60) {
                    adjustedHours += 1;
                    adjustedMinutes = 0;
                }
                if (adjustedHours < 8) {
                    adjustedHours = 8;
                    adjustedMinutes = 0;
                } else if (adjustedHours >= 17 && adjustedMinutes > 0) {
                    adjustedHours = 17;
                    adjustedMinutes = 0;
                }
                const formattedHours = String(adjustedHours).padStart(2, '0');
                const formattedMinutes = String(adjustedMinutes).padStart(2, '0');
                timeInput.value = `${formattedHours}:${formattedMinutes}`;
            });

            document.getElementById("customtime2").addEventListener('change', function(event) {
                const timeInput = event.target;
                const [hours, minutes] = timeInput.value.split(":").map(Number);

                const roundedMinutes = Math.round(minutes / 15) * 15;
                let adjustedHours = hours;
                let adjustedMinutes = roundedMinutes;
                if (roundedMinutes === 60) {
                    adjustedHours += 1;
                    adjustedMinutes = 0;
                }
                if (adjustedHours < 8) {
                    adjustedHours = 8;
                    adjustedMinutes = 0;
                } else if (adjustedHours >= 17 && adjustedMinutes > 0) {
                    adjustedHours = 17;
                    adjustedMinutes = 0;
                }
                const formattedHours = String(adjustedHours).padStart(2, '0');
                const formattedMinutes = String(adjustedMinutes).padStart(2, '0');
                timeInput.value = `${formattedHours}:${formattedMinutes}`;
            })

            window.addEventListener('click', function(e) {
                if (e.target === RatingModal) {
                    toggleModal(RatingModal, 'none');
                }
                if (e.target === ReservationEditModal) {
                    window.location.href = '<?= ROOT ?>/Child/Reservation';
                    toggleModal(ReservationEditModal, 'none');
                }
                if (e.target === ReservationViewModal) {
                    toggleModal(ReservationViewModal, 'none');
                }
                if (e.target === NewReservationModal) {
                    window.location.href = '<?= ROOT ?>/Child/Reservation';
                    toggleModal(NewReservationModal, 'none');
                }
            });

            const ReservationViewModal = document.getElementById('ReservationViewModal');
            const backvieweservation = document.getElementById('backvieweservation');

            backvieweservation.addEventListener('click', function() {
                toggleModal(ReservationViewModal, 'none');
            });

            const backforrating = document.getElementById('backforrating');
            const closeratingBtn = document.getElementById('closeratingBtn');
            const ratingrefresh = document.getElementById('ratingrefresh');

            backforrating.addEventListener('click', function() {
                document.getElementById('RatingModal').style.display = 'none';
                document.getElementById('myform').reset();
                stars.forEach((star) => {
                    star.classList.remove('selectestar')
                });
            });

            ratingrefresh.addEventListener('click', function() {
                document.getElementById('myform').reset();
                stars.forEach((star) => {
                    star.classList.remove('selectestar')
                });
            });

            closeratingBtn.addEventListener('click', function() {
                document.getElementById('myform').reset();
                stars.forEach((star) => {
                    star.classList.remove('selectestar')
                });
            });

            const upbtn = document.getElementById('up-btn');
            const hibtn = document.getElementById('hi-btn');
            const upcoming = document.getElementById('upcoming');
            const history = document.getElementById('history');
            const headingres = document.getElementById('heading-res');

            upbtn.addEventListener('click', function() {
                upbtn.style.color = 'white';
                upbtn.style.backgroundColor = '#10639a';
                hibtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'block';
                history.style.display = 'none';
                headingres.style.marginLeft = '180px';
                headingres.textContent = 'Reervation';
            });

            hibtn.addEventListener('click', function() {
                hibtn.style.color = 'white';
                hibtn.style.backgroundColor = '#10639a';
                upbtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'none';
                history.style.display = 'block';
                headingres.style.marginLeft = '140px';
                headingres.textContent = 'Reervation history';
            });
        });
    </script>
</html>