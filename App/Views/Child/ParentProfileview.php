<!DOCTYPE html>
<html>
<title>Parent Profile</title>
<link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?=CSS?>/Child/profile.css?v=<?= time() ?>">
<script src="<?=JS?>/Parent/Number.js"></script>
    <style>
        .fa-chevron-left{
            margin-left: 40px;
            cursor: pointer;
            color: white !important;
        }
    </style>
<head>
</head>
<body>
    <!-- View parent details -->
    <div class="Profilecard">
        <div class="top-con">
            <div class="back-con">
                <i class="fas fa-chevron-left" id="backforpickup" onclick="window.location.href='<?=ROOT?>/Child/Home'"></i>
            </div>
        </div>
        <div class="Profile">
            <p style="margin-top: -40px; margin-bottom: 20px; margin-left: 60px; cursor: pointer; color: rgba(35, 83, 167, 1);">Parent Profile</p>
        </div>
        <div class="ProfileContainer">
            <div class="leftcon">
                <form id="editprofileleft">
                    <img src="<?= isset($data[0]->profile)? $data[0]->profile.'?v=' . time() : '' ?>" class="profile-img" style="width: 200px; height: 200px;">
                    <div class="datacon">
                        <div class="data">
                            <label>First Name</label>
                            <input readonly placeholder="<?= isset($data[0]->First_Name)? $data[0]->First_Name : '' ?> " type="text">
                        </div>
                        <div class="data">
                            <label>Last Name</label>
                            <input readonly placeholder="<?= isset($data[0]->Last_Name)? $data[0]->Last_Name : '' ?> " type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Password</label>
                            <input readonly placeholder="*******" style="width: 627.5px;" type="password">
                            <p class="edit" onclick="window.location.href='<?=ROOT?>/Main/ResetPasswordNown'" style="cursor: pointer;"> Change Password</p>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>User Name</label>
                            <input readonly placeholder="AbdullaAurad" style="width: 627.5px;" type="text">
                            <p class="edit" onclick="window.location.href='<?=ROOT?>/Main/ChangeUsername'" style="cursor: pointer;"> Change UserName</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <form id="editprofileright">
                <div class="rightcon" style="margin-top: 40px;">
                    <div class="datacon">
                        <div class="data">
                            <label>Email</label>
                            <input readonly placeholder="<?= isset($data[0]->Email)? $data[0]->Email : '' ?> " type="email">
                        </div>
                        <div class="data">
                            <label>NID</label>
                            <input readonly maxlength="12" placeholder="<?= isset($data[0]->NID)? $data[0]->NID : '' ?> " type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Gender</label>
                            <input readonly type="text" placeholder="<?= isset($data[0]->Gender)? $data[0]->Gender : '' ?> ">
                        </div>
                        <div class="data">
                            <label>Language</label>
                            <input readonly type="text" placeholder="<?= isset($data[0]->Language)? $data[0]->Language : '' ?> ">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Last seen</label>
                            <input readonly placeholder="<?= isset($data[0]->Last_Seen)? $data[0]->Last_Seen : '' ?> " type="text">
                        </div>
                        <div class="data">
                            <label>Contact</label>
                            <input readonly class="number" maxlength="12" placeholder="<?= isset($data[0]->Phone_Number)? $data[0]->Phone_Number : '' ?> " type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Address</label>
                            <input readonly placeholder="<?= isset($data[0]->Address)? $data[0]->Address : '' ?> " style="width: 625px;" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Contact Preference</label>
                            <input readonly type="text" placeholder="Mobile">
                        </div>
                        <div class="data">
                            <label>Visibility</label>
                            <input readonly type="text" placeholder="Only to Manager">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>