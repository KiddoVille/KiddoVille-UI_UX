<!DOCTYPE html>
<html>
<title>Child Profile</title>
<link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= CSS ?>/Child/profile.css?v=<?= time() ?>">
<link rel="stylesheet" href="<?= CSS ?>/Child/childpackage.css?v=<?= time() ?>">
<script src="<?= JS ?>/Child/Number.js"></script>
<style>
    .fa-chevron-left {
        margin-left: 40px;
        cursor: pointer;
        color: white !important;
    }
</style>

<head>
</head>

<body>
    <div class="Profilecard" id="Profilecard">
        <div class="top-con">
            <div class="back-con">
                <i class="fas fa-chevron-left" id="backforpickup" onclick="window.location.href='<?= ROOT ?>/Child/Home'"></i>
            </div>
        </div>
        <div class="Profile">
            <p style="margin-top: -40px; margin-bottom: 20px; margin-left: 60px; cursor: pointer; color: rgba(35, 83, 167, 1);">Child Package
            </p>
        </div>
        <div class="ProfileContainer">
            <div id="spe-Modal" style="padding: 0px 20px;">
                <div class="datacon" style="margin-top: 10px;">
                    <div class="data">
                        <h1 style="color: #10639a; text-align: center;">Attending Days</h1>
                        <div class="days">
                            <div class="day" data-day="Sun" style="margin-left:0px">Sun</div>
                            <div class="day" data-day="Mon">Mon</div>
                            <div class="day" data-day="Tue">Tue</div>
                            <div class="day" data-day="Wed">Wed</div>
                            <div class="day" data-day="Thu">Thu</div>
                            <div class="day" data-day="Fri">Fri</div>
                            <div class="day" data-day="Sat">Sat</div>
                        </div>
                        <div style="display: none">
                            <input type="checkbox" id="day-Sun" name="selectedDays[]" value="Sun">
                            <input type="checkbox" id="day-Mon" name="selectedDays[]" value="Mon">
                            <input type="checkbox" id="day-Tue" name="selectedDays[]" value="Tue">
                            <input type="checkbox" id="day-Wed" name="selectedDays[]" value="Wed">
                            <input type="checkbox" id="day-Thu" name="selectedDays[]" value="Thu">
                            <input type="checkbox" id="day-Fri" name="selectedDays[]" value="Fri">
                            <input type="checkbox" id="day-Sat" name="selectedDays[]" value="Sat">
                        </div>
                    </div>
                </div>
                <div class="datacon" style="margin-top: 10px; font-weight: bold;color: #10639a !important;">
                    <label> if the day count stay the same the payment amount will not change </label>
                </div>
                <div class="datacon" style="margin-top: -5px;font-weight: bold; color:  #10639a !important;">
                    <label> For additional days of visit, extra payment will be added</label>
                </div>
                <div class="package" style="display: flex; flex-direction: column; margin-top: 20px; width: 350px; margin-left: auto; margin-right: auto; text-align: left;">
                    <div style="display: flex; justify-content: space-between; width: 100%; padding: 5px 0;">
                        <label>Package Name</label>
                        <span> : something</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; width: 100%; padding: 5px 0;">
                        <label>Number of Days Included</label>
                        <span> : 3</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; width: 100%; padding: 5px 0;">
                        <label>Amount</label>
                        <span> : 14000</span>
                    </div>
                </div>

                <div class="payment-option">
                    <label for="payment-now" style="color:  #10639a; font-weight: bold;">
                        Payment must be made in 2 week intervals.<br>
                    </label>
                </div>
                <div style="margin-top: 20px; margin-bottom: 5px; display: flex; justify-content:flex-end;align-items: right; margin-right: -20px;">
                    <button type="button" style="background-color: #10639a; margin-top:-50px; margin-bottom: 0px;" class="Save" onclick="window.location.href='<?= ROOT ?>/Child/ChildEditProfile'">
                        Edit
                    </button>
                </div>
            </div>

            <div id="fle-Modal" style="display: none; justify-content: center; align-items: center; margin-top: 90px;">
                <h1 style="color: #10639a; text-align: center">Dynamic Payment Details</h1>
                <div class="datacon" style="margin-top: 40px !important; font-weight: bold;color:  #10639a !important;">
                    <label> After daycare attendance, the payment for the day will be added to the account. </label>
                </div>
                <div class="package" style="display: flex; flex-direction: column; margin-top: 20px; width: 350px; margin-left: auto; margin-right: auto; text-align: left;">
                    <div style="display: flex; justify-content: space-between; width: 100%; padding: 5px 0;">
                        <label>Weekday Price</label>
                        <span> : 6000</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; width: 100%; padding: 5px 0;">
                        <label>Weekend Price</label>
                        <span> : 7000</span>
                    </div>
                </div>
                <div style="margin-top: 20px; margin-bottom: 5px; display: flex; justify-content: flex-end; align-items: center; margin-right: 20px;">
                    <button type="button" style="margin-right: 20px !important;" class="Save" onclick="window.location.href='<?= ROOT ?>/Child/ChildEditPackage'">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>