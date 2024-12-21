<html>

<head>
    <title>
        KIDDO VILLE Schedule
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="<?= CSS ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Dashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/leave.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Manager/foodtable.js"></script>
    <script src="<?= JS ?>/Manager/profileview.js"></script>
</head>

<body id="body">
    <div style="display: flex;">
        <div class="sidebar">
            <div class="logo_stuf" style="display: flex;margin-top:6%">
                <img src="<?= IMAGE ?>/logo_light.png" style="width: 40px;height:40px" alt="">
                <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            </div>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;margin-left:10%;">
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
                    <li class="selected">
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
        <div style="display: block;">
            <div class="header" style="margin-top:1">
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

            <div class="leave-form-container" style="margin-left: 260%;margin-top:57.5%">
                <h1 style="color: #233E8D;">Publish Event</h1>
                <form action="<?= ROOT ?>/Manager/Home" method="post" class="leave-form">
                    <div class="form-group">
                        <label for="leave-type">Event Type <span class="required">*</span></label>
                        <select name="" id="leavetype" class="form-control">
                            <option value="">Select Leave Type</option>
                            <option>Annual Event</option>
                            <option>Independent Day</option>
                            <option>Cultural Leave</option>
                            <option>Religion Leave</option>
                            <option>Other</option>
                        </select>
                        <label for="dates">Dates <span class="required">*</span></label>
                        <input type="date" id="dates" value="08/14/2025" class="form-control">
                        <label for="about">About</label>
                        <textarea id="about" placeholder="Include comments for your approver" class="form-control"></textarea>
                    </div>
                    <div class="button-group">
                        <button type="submit" onclick="history.back();" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>