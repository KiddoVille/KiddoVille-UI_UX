<!DOCTYPE html>
<html>
<head>
<title>Child Profile</title>
<link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?=CSS?>/ReChild/userprofile.css">
<script src="<?=JS?>/ReChild/Number.js"></script>
<script src="<?=JS?>/ReChild/childView.js"></script>
</head>

<body style="background-image: url('<?=IMAGE?>/profile-bg.png');">
    <!-- To input prescription -->
    <div id="prescriptionModal" class="prescription-view">
        <div class="top-con">
            <div class="back-con" id="back-arrow">
                <i class="fas fa-chevron-left" id="backforprescription"></i>
            </div>
        </div>
        <i class="fa fa-chevron-left move" id="left" style="margin-left: -20px !important;"></i>
        <img src="<?=IMAGE?>/prescription1.jpeg" alt="prescriptions" class="prescription-img" id="prescription-img">
        <i class="fa fa-chevron-right move" id="right"></i>
    </div>
    <!-- To input documents -->
    <div id="documentModal">
        <div class="top-con">
            <div class="back-con" id="back-arrow">
                <i class="fas fa-chevron-left" id="backfordocument"></i>
            </div>
        </div>
        <div id="fileListContainer">
        </div>
    </div>
    <!-- profilecard -->
    <div class="Profilecard" id="Profilecard">
        <div class="Profile">
            <p style="margin-top: 0px; margin-bottom: 0px; cursor: pointer; color: rgba(35, 83, 167, 1);">Child Profile
            </p>
        </div>
        <div class="ProfileContainer">
            <div class="leftcon">
                <form id="editprofileleft">
                    <img src="<?=IMAGE?>/face.jpeg" class="profile-img">
                    <div class="datacon">
                        <div class="data">
                            <label>First Name</label>
                            <input readonly placeholder="Yunus" type="text">
                        </div>
                        <div class="data">
                            <label>Last Name</label>
                            <input readonly placeholder="Mahir" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Nickname</label>
                            <input readonly placeholder="Yunu" type="text">
                        </div>
                        <div class="data">
                            <label>Date Of Birth</label>
                            <input readonly placeholder="Yunu" type="date">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Gender</label>
                            <input type="text" placeholder="Male">
                        </div>
                        <div class="data">
                            <label>User Relationship</label>
                            <input type="text" placeholder="Father">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Language</label>
                            <input readonly placeholder="Tamil,English" type="text">
                        </div>
                        <div class="data">
                            <label>Religion</label>
                            <input readonly placeholder="Islam" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <form id="editprofileright">
                <div class="rightcon">
                    <div class="datacon">
                        <div class="data">
                            <label>Emergency Contact</label>
                            <input readonly class="number" type="number" placeholder="071-4810928">
                        </div>
                        <div class="data">
                            <label>Allergies</label>
                            <input readonly type="text" placeholder="Shrimp">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Medications</label>
                            <input readonly style="width: 635px;" type="text">
                            <p class="edit" style="margin-left: 220px;" id="prescriptions">View doctor prescriptions
                            </p>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Medical Conditions</label>
                            <input readonly style="width: 635px;" type="text">
                            <p class="edit" style="margin-left: 260px;" id="documents">View documents </p>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Enrolled clubs</label>
                            <select style="width: 315px">
                                <option hidden>Guardening Club</option>
                                <option>Swimming Club</option>
                                <option>Singing Club</option>
                            </select>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Attending Days</label>
                            <div class="days">
                                <div class="day select" style="margin-left:0px">Sun</div>
                                <div class="day">Mon</div>
                                <div class="day select">Tue</div>
                                <div class="day">Wed</div>
                                <div class="day">Thur</div>
                                <div class="day">Fri</div>
                                <div class="day select">Sat</div>
                            </div>
                        </div>
                    </div>
                    <div
                        style="margin-top: 20px; margin-bottom: 5px; display: flex; justify-content:flex-end;align-items: right; margin-right: -20px;">
                        <button type="button" class="Save" onclick="window.location.href='<?=ROOT?>/ReChild/ChildEditProfile'">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>