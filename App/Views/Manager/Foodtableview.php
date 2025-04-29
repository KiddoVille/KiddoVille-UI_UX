<html>

<head>
<title>Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Food-table.css?v=<?= time() ?>" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Manager/foodtable.js"></script>
</head>

<body>
    <div class="container">
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
                    <li class="selected">
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

        <div class="sub-container">
            <div class="header">
                <div class="name">
                    <h1>Hey Namal</h1>
                    <p style="color: white;">Let’s do some productive activities today</p>
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
            <div class="title">
                KIDDO VILLE Food plan
            </div>

            <?php show($data) ?>
            <div class="table-container">
                <table id="foodtable">
                    <tr>
                        <th style="background-color:#f5f5f5; border:none">
                        </th>
                        <?php
                        $today = date('Y-m-d'); // Format: YYYY-MM-DD
                        $tomorrow = date('Y-m-d', strtotime('+1 day'));
                        $dayAfterTomorrow = date('Y-m-d', strtotime('+2 days'));
                        ?>
                        <th>
                            <span class="date-display" id="dateHeader1"><?= $today ?></span>
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader2"><?= $tomorrow ?></span>
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader3"><?= $dayAfterTomorrow ?></span>
                        </th>
                    </tr>
                    <tr>

                        <td>
                            Breakfast
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['today'])): ?>
                                <?php foreach ($data['today'] as $foods): ?>
                                    <?php if ($foods->Time == 'Breakfast') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['tomorrow'])): ?>
                                <?php foreach ($data['tomorrow'] as $foods): ?>
                                    <?php if ($foods->Time == 'Breakfast') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['dayafter'])): ?>
                                <?php foreach ($data['dayafter'] as $foods): ?>
                                    <?php if ($foods->Time == 'Breakfast') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Morning Tea time
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['today'])): ?>
                                <?php foreach ($data['today'] as $foods): ?>
                                    <?php if ($foods->Time == 'MorningTeatime') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($data['tomorrow'])): ?>
                                <?php foreach ($data['tomorrow'] as $foods): ?>
                                    <?php if ($foods->Time == 'MorningTeatime') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($data['dayafter'])): ?>
                                <?php foreach ($data['dayafter'] as $foods): ?>
                                    <?php if ($foods->Time == 'MorningTeatime') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lunch
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['today'])): ?>
                                <?php foreach ($data['today'] as $foods): ?>
                                    <?php if ($foods->Time == 'Lunch') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['tomorrow'])): ?>
                                <?php foreach ($data['tomorrow'] as $foods): ?>
                                    <?php if ($foods->Time == 'Lunch') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['dayafter'])): ?>
                                <?php foreach ($data['dayafter'] as $foods): ?>
                                    <?php if ($foods->Time == 'Lunch') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Evening Tea time
                        </td>
                        <td>
                            <?php if (!empty($data['today'])): ?>
                                <?php foreach ($data['today'] as $foods): ?>
                                    <?php if ($foods->Time == 'EveningTeatime') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($data['tomorrow'])): ?>
                                <?php foreach ($data['tomorrow'] as $foods): ?>
                                    <?php if ($foods->Time == 'EveningTeatime') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($data['dayafter'])): ?>
                                <?php foreach ($data['dayafter'] as $foods): ?>
                                    <?php if ($foods->Time == 'EveningTeatime') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dinner(For 24 hours service)
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['today'])): ?>
                                <?php foreach ($data['today'] as $foods): ?>
                                    <?php if ($foods->Time == 'Dinner') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['tomorrow'])): ?>
                                <?php foreach ($data['tomorrow'] as $foods): ?>
                                    <?php if ($foods->Time == 'Dinner') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($data['dayafter'])): ?>
                                <?php foreach ($data['dayafter'] as $foods): ?>
                                    <?php if ($foods->Time == 'Dinner') echo htmlspecialchars($foods->Food) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>


            </div>
            <div class="title">
                KIDDO VILLE SNACK PLAN
            </div>


            <div class="table-container">
                <table id="snackplan">
                    <tr>
                        <th style="background-color:#f5f5f5; border:none">
                        </th>
                        <?php
                        $today = date('Y-m-d'); // Format: YYYY-MM-DD
                        $tomorrow = date('Y-m-d', strtotime('+1 day'));
                        $dayAfterTomorrow = date('Y-m-d', strtotime('+2 days'));
                        ?>
                        <th>
                            <span class="date-display" id="dateHeader1"><?= $today ?></span>
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader2"><?= $tomorrow ?></span>
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader3"><?= $dayAfterTomorrow ?></span>
                        </th>
                    </tr>
                    <tr>
                        <td>Breakfast</td>
                        <td class="food-items">
                            <?php if (!empty($snackData['today'])): ?>
                                <?php foreach ($snackData['today'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Breakfast') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($snackData['tomorrow'])): ?>
                                <?php foreach ($snackData['tomorrow'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Breakfast') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($snackData['dayafter'])): ?>
                                <?php foreach ($snackData['dayafter'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Breakfast') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Lunch</td>
                        <td class="food-items">
                            <?php if (!empty($snackData['today'])): ?>
                                <?php foreach ($snackData['today'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Lunch') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($snackData['tomorrow'])): ?>
                                <?php foreach ($snackData['tomorrow'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Lunch') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($snackData['dayafter'])): ?>
                                <?php foreach ($snackData['dayafter'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Lunch') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>s
                    </tr>

                    <tr>
                        <td>Dinner (For 24 hours service)</td>
                        <td class="food-items">
                            <?php if (!empty($snackData['today'])): ?>
                                <?php foreach ($snackData['today'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Dinner') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($snackData['tomorrow'])): ?>
                                <?php foreach ($snackData['tomorrow'] as $snacks): ?>
                                    <?php if ($snacks->Time == 'Dinner') echo htmlspecialchars($snacks->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="food-items">
                            <?php if (!empty($snackData['dayafter'])): ?>
                                <?php foreach ($snackData['dayafter'] as $foods): ?>
                                    <?php if ($foods->Time == 'Dinner') echo htmlspecialchars($foods->Snack) . "<br>"; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="button-row">
                <button class="reset-button" onclick="resetSelects()">Edit</button>
            </div>
        </div>
    </div>
</body>

</html>