<!DOCTYPE html>
<html>
<title>Parent Profile</title>
<link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?=CSS?>/ReParent/profile.css">
<script src="<?=JS?>/ReParent/Number.js"></script>

<head>
</head>
<body style="background-image: url('<?=IMAGE?>/profile-bg.png');">
    <!-- View parent details -->
    <div class="Profilecard">
        <div class="Profile">
            <p style="margin-top: 0px; margin-bottom: 0px; cursor: pointer; color: rgba(35, 83, 167, 1);">My Profile</p>
        </div>
        <div class="ProfileContainer">
            <div class="leftcon">
                <form id="editprofileleft">
                    <img src="<?=IMAGE?>/face.jpeg" class="profile-img">
                    <div class="datacon">
                        <div class="data">
                            <label>First Name</label>
                            <input readonly placeholder="Abdulla" type="text">
                        </div>
                        <div class="data">
                            <label>Last Name</label>
                            <input readonly placeholder="Aurad" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Password</label>
                            <input readonly placeholder="*******" style="width: 627.5px;" type="password">
                            <p class="edit" onclick="window.location.href='../../Login/Reset-password-nown.html'" style="cursor: pointer;"> Change Password</p>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>User Name</label>
                            <input readonly placeholder="AbdullaAurad" style="width: 627.5px;" type="text">
                            <p class="edit" onclick="window.location.href='../../Login/change-username.html'" style="cursor: pointer;"> Change UserName</p>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Email</label>
                            <input readonly placeholder="abdullaaurad@gmail.com" type="email">
                        </div>
                        <div class="data">
                            <label>NID</label>
                            <input readonly maxlength="12" placeholder="200232901776" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <form id="editprofileright">
                <div class="rightcon">
                    <div class="datacon">
                        <div class="data">
                            <label>Gender</label>
                            <input readonly type="text" placeholder="Male">
                        </div>
                        <div class="data">
                            <label>Language</label>
                            <input readonly type="text" placeholder="English">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Date of birth</label>
                            <input readonly placeholder="24/11/2002" type="text">
                        </div>
                        <div class="data">
                            <label>Contact</label>
                            <input readonly class="number" maxlength="12" placeholder="0714810928" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Address</label>
                            <input readonly  placeholder="106/37,Brandiyawatta,wellampitiya" style="width: 625px;" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Contact Preference</label>
                            <input readonly type="text" placeholder="Email">
                        </div>
                        <div class="data">
                            <label>Visibility</label>
                            <input readonly type="text" placeholder="Everyone">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            payment Methods
                            <div style="display: flex; flex-direction: row; margin-top: 10px;">
                                <div class="cardcon">
                                    <img src="<?=IMAGE?>/Visa.png" class="card">
                                    Visa
                                </div>
                                <div class="cardcon">
                                    <img src="<?=IMAGE?>/master.png" class="card">
                                    Master
                                </div>
                            </div>
                            <p style="color:rgb(2, 77, 205); margin-top: 5px; font-weight: 600;">+Add payment modes</p>
                        </div>
                    </div>
                    <div style="margin-top: -20px; margin-bottom: 5px; display: flex; justify-content:flex-end;align-items: right;">
                        <button type="button" class="Save" onclick="window.location.assign('<?=ROOT?>/ReParent/ParentEditProfile')">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>