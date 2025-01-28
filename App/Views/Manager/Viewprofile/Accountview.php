<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        KIDDO VILLE Account
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Schedule.css?v=<?= time() ?>" />
    <link rel="icon" href="<?= CSS ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Dashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Account.css?v=<?= time() ?>">
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
                <li class="selected">
                    <a href="<?= ROOT ?>/Manager/Account" style="font-size: 18px;">
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
        </ul>
    </div>
    <div class="header" style="margin-top:-22%">
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


    <div class="container" id="container" style="margin-top:22%;margin-left:20.5%;">
        <div style="width: 85%; margin-top:-20%">
            <div class="fill">
                <div style="display: block;">
                    <h3 class="heading">
                        View profiles
                    </h3>
                </div>
                <hr>
                <div class="search-container">
                    <form action="" method="GET">
                        <input type="text"
                            name="search_id"
                            placeholder="Search ID"
                            style="padding: 10px 30px;"
                            value="<?= htmlspecialchars($_GET['search_id']) ?>">

                        <select name="role" id="role" onchange="this.form.submit()">
                            <option value="" <?= empty($_GET['role']) ? 'selected' : '' ?>>Selcet role</option>
                            <option value="user" <?= isset($_GET['role']) && $_GET['role'] == 'User' ? 'selected' : '' ?>>User</option>
                            <option value="teacher" <?= isset($_GET['role']) && $_GET['role'] == 'teacher' ? 'selected' : '' ?>>Teacher</option>
                            <option value="maid" <?= isset($_GET['role']) && $_GET['role'] == 'maid' ? 'selected' : '' ?>>Maid</option>
                            <option value="receptionist" <?= isset($_GET['role']) && $_GET['role'] == 'receptionist' ? 'selected' : '' ?>>Receptionist</option>
                            <option value="doctor" <?= isset($_GET['role']) && $_GET['role'] == 'doctor' ? 'selected' : '' ?>>Doctor</option>
                        </select>
                    </form>
                </div>
                <div class="cards">
                    <?php if (!empty($data['allusers'])): ?>
                        <?php foreach ($data['allusers'] as $user): ?>
                            <div class="report-card">
                                <div class="card-content">
                                    <div class="profile-img">
                                        <img src="<?= IMAGE ?>/profilePic.png" class="face" width="70px">
                                    </div>
                                    <div class="card-details">
                                        <h4><?= htmlspecialchars($user->Username); ?></h4>
                                        <p>UserID: <?= htmlspecialchars($user->UserID); ?></p>
                                        <p>Role: <?= htmlspecialchars($user->Role); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <button>View</button>
                                        <button class="del">Delete</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No users found matching the criteria.</p>
                    <?php endif; ?>
                </div>

                <a href="" style="margin-left:85%;text-decoration:none;font-size:20px;color:blue">+Add User</a>
            </div>
        </div>
    </div>

</body>

</html>