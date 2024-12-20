<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Solution</title>
    <link rel="stylesheet" href="<?= CSS ?>/Manager/meeting.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="C:\Users\Lenovo\Desktop\Daycare front end\Assets\KIDDOVILLE_LOGO.jpg">
    <script src="<?= JS ?>/Manager/profileview.js"></script>
</head>
<style>
    .solution-container {
        margin: 20px;
        font-family: Arial, sans-serif;
    }

    label {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        margin-top: 5%;
    }

    .solution-textarea {
        width: 90%;
        height: 150px;
        padding: 15px;
        font-size: 1rem;
        border: 2px solid #ddd;
        border-radius: 8px;
        resize: vertical;
        background-color: #f9f9f9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        outline: none;
        margin-top: 10%;
    }

    .solution-textarea:focus {
        border-color: #5b9bd5;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .but {
        margin-top: -3%;
    }

    .but button {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        height: 35px;
        width: 20%;
        color: white;
        cursor: pointer;
    }


    .but button:hover {
        background-color: #eee;
        color: black;
    }

    .but {
        display: flex;
        justify-content: space-between;
    }

    .publish {
        margin-left: 5%;
    }

    .cancel {
        margin-right: 5%;
    }

    .popup {
        margin-top: 10%;
        margin-left: 35%;
        height: 50%;
    }
</style>

<body style="background: linear-gradient(to bottom right, #f7f7f7, #eaeaea);">
    <div>
        <div class="sidebar">
            <div class="logo_stuf" style="display: flex;margin-top:6%">
                <img src="<?= IMAGE ?>/logo_light.png" style="width: 40px;height:40px" alt="">
                <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            </div>
            <ul>
                <li class="selected">
                    <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;">
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
                            <i class="fas fa-share"></i>Publish
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Event" style="font-size: 18px;">
                            <i class="fa fa-calendar-plus"></i>Event
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Foodtable" style="font-size: 18px;">
                            <i class="fa fa-pizza-slice"></i>Food Plane
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
        <div class="header" style="margin-top:-8.5%">
            <div class="name">
                <h1 style="margin-left: -65%;">Hey Namal</h1>
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
        <div class="popup">
            <form action="Manage-problem.html" style="height:300px;" method="post">
                <div class="solution-container">
                    <label for="solution">Solution</label>
                    <textarea id="solution" class="solution-textarea" placeholder="Write your solution here..." required></textarea>
                </div>
                <div style="display: flex;" class="but">
                    <button type="submit" class="publish">Send</button>
                    <button type="button" class="cancel" onclick="location.href='<?= ROOT ?>/Manager/Problem'">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>