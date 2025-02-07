<html>

<head>
    <title>
        KIDDO VILLE Food Plan
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="<?= IMAGE ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Allocation.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/child-profile.css?v=<?= time() ?>">

    <script src="<?= JS ?>/Manager/foodtable.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo_stuf" style="display: flex;margin-top:6%">
            <img src="<?= IMAGE ?>/logo_light.png" style="width: 40px;height:40px" alt="">
            <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
        </div>
        <ul>
            <li class="hover-effect unselected">
                <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;margin-left:8%">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <ul>
                <li class="selected">
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
                    <a href="<?= ROOT ?>/Manager/Packages" style="margin-left: -4%;"><i class="fas fa-box"></i> Packages</a>
                </li>
            </ul>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Problem" style="margin-left: -4%;"><i class="fa fa-exclamation-triangle"></i>Problems</a>
                </li>
            </ul>

            <ul style="margin-left: -2.5%;">
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Publish" style="font-size: 18px;margin-left: -20%;">
                        <i class="fas fa-share"></i>Publish
                </li>
            </ul>
            <ul style="margin-left: 4%;">
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Event" style="font-size: 18px;margin-left: -4%;">
                        <i class="fa fa-calendar-plus"></i>Event
                </li>
            </ul>
            <ul style="margin-left: 8%;">
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Foodtable" style="font-size: 18px;">
                        <i class="fa fa-pizza-slice"></i>Food Plane
                </li>
            </ul>
            <ul>
                <li class="hover-effect unselected">
                    <a href="#" style="font-size: 18px;margin-left: -40%;">
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
    <div class="header" style="margin-top:-41%;">
        <div class="name">
            <h1 style="color: white;margin-left:-57%;">Hey Namal</h1>
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
    

    <script>
        function handleClick() {
            var profileCard = document.getElementById('profileCard');
            profileCard.classList.toggle('show');
        }

        function handleHide() {
            var profileCard = document.getElementById('profileCard');
            profileCard.classList.remove('show');
        }
    </script>
</body>

</html>