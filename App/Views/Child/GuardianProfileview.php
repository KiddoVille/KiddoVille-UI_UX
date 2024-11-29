<!DOCTYPE html>
<html>
<title>Guardian Profile</title>
<link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?=CSS?>/Child/profile.css?v=<?= time() ?>">
<script src="<?=JS?>/Child/Number.js"></script>
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
    <div class="Profilecard" style="display: flex; flex-direction: column; justify-content: center; align-self: center; margin-top: 80px;">
        <div class="top-con">
            <div class="back-con">
                <i class="fas fa-chevron-left" id="backforpickup" onclick="window.location.href='<?=ROOT?>/Child/Home'"></i>
            </div>
        </div>
        <div class="Profile">
            <p style="margin-left: 70px;margin-top: -55px; margin-bottom: 0px; cursor: pointer; color: rgba(35, 83, 167, 1);">Guardian Profile</p>
        </div>
        <div class="ProfileContainer">
            <div class="leftcon">
                <form id="editprofileleft">
                    <img src="<?= isset($data[0]->profile)? $data[0]->profile.'?v=' . time() : '' ?>" class="profile-img">
                    <div class="datacon">
                        <div class="data">
                            <label>First Name</label>
                            <input readonly placeholder="<?= isset($data[0]->First_Name)? $data[0]->First_Name : '' ?>" type="text">
                        </div>
                        <div class="data">
                            <label>Last Name</label>
                            <input readonly placeholder="<?= isset($data[0]->Last_Name)? $data[0]->Last_Name : '' ?>" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Email</label>
                            <input readonly placeholder="<?= isset($data[0]->Email)? $data[0]->Email : '' ?>" type="email">
                        </div>
                        <div class="data">
                            <label>NID</label>
                            <input readonly maxlength="12" placeholder="<?= isset($data[0]->NID)? $data[0]->NID : '' ?>" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <form id="editprofileright" style="margin-top: 40px;">
                <div class="rightcon">
                    <div class="datacon">
                        <div class="data">
                            <label>Gender</label>
                            <input readonly type="text" placeholder="<?= isset($data[0]->Gender)? $data[0]->Gender : '' ?>">
                        </div>
                        <div class="data">
                            <label>Language</label>
                            <input readonly type="text" placeholder="<?= isset($data[0]->Language)? $data[0]->Language : '' ?>">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Contact</label>
                            <input readonly class="number" maxlength="12" placeholder="<?= isset($data[0]->Phone_Number)? $data[0]->Phone_Number : '' ?>" type="text">
                        </div>
                        <div class="data">
                            <label>Contact Preference</label>
                            <input readonly type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Address</label>
                            <input readonly  placeholder="<?= isset($data[0]->Address)? $data[0]->Address : '' ?>" style="width: 625px;" type="text">
                        </div>
                    </div>
                    <div style="margin-top: 20px; margin-bottom: 5px; display: flex; justify-content:flex-end;align-items: right;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>