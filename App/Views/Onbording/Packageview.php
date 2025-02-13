<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Onbording/Onbording.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Onbording/Package.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Onbording/child.js"></script>
    <style>
        .error {
            color: red !important;
            margin-left: 0px !important;
            font-size: 15px;
            margin-top: 0px;
            margin-bottom: -15px;
        }

        .delete {
            margin-top: 0px;
            padding: 10px;
            border-radius: 20px;
            background-color: #3498db;
            margin-left: -50px;
            margin-bottom: 440px;
        }
    </style>
</head>

<body>
    <form method="post" id="details" enctype="multipart/form-data">
        <!-- container to get details -->
        <div class="Profilecard">
            <div style="background-color: #60a6ec; width: 350px; height: 600px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                <img src="<?= IMAGE ?>/logo_light-remove.png" style="width:70px">
                <div class="heading">
                    <h1>Let's Create Your</h1>
                    <h1>Personalized</h1>
                    <h1>Profile for a</h1>
                    <h1>Tailored</h1>
                    <h1>Experienece!</h1>
                </div>
                <div class="text">
                    <p> Share your details for a smooth</p>
                    <p>and safe Daycare Experienece</p>
                </div>
                <div class="circles">
                    <div class="circle"></div>
                    <div class="circle select"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="ProfileContainer" style="flex-direction: column !important;">
                <div style="display: flex; flex-direction: row; justify-content: flex-start; margin-top: 20px; margin-left: 20px;">
                    <div class="toggle">
                        <label class="background" for="toggle"></label>
                        <div style="display: flex; flex-direction: row; justify-content: space-between; width: 30%;">
                            <label class="up-btn" id="up-btn">Fixed</label>
                            <label class="hi-btn" id="hi-btn">Custom</label>
                        </div>
                    </div>
                </div>
                <div id="spe-Modal">
                    <div class="datacon" style="margin-top: 10px;">
                        <div class="data">
                            <h1 style="color: #10639a; text-align: center;">Attending Days</h1>
                            <div class="days">
                                <div class="day" data-day="Sun" style="margin-left:0px">Sun</div>
                                <div class="day" data-day="Mon">Mon</div>
                                <div class="day" data-day="Tue">Tue</div>
                                <div class="day" data-day="Wed">Wed</div>
                                <div class="day" data-day="Thu">Thur</div>
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
                        <label> if the day count stay the same the payment amoutn will not change </label>
                    </div>
                    <div class="datacon" style="margin-top: -5px;font-weight: bold; color:  #10639a !important;">
                        <label> For additional days of visit a extra payment will be added</label>
                    </div>
                    <div class="package"
                        style="display: flex; flex-direction: column; margin-top: 20px; width: 350px; margin-left: auto; margin-right: auto; text-align: left;">
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
                        <input type="checkbox" id="payment-now">
                        <label for="payment-now" style="color:  #10639a; font-weight: bold;">
                            Payment can be made now or 2 weeks later.<br>
                            Check this box to pay now.
                        </label>
                    </div>
                </div>
                <!-- If person wants to change days dynamically packages -->
                <div id="fle-Modal" style="display: none; justify-content: center; align-items: center; margin-top: 90px;">
                    <h1 style="color: #10639a; text-align: center">Dynamic Payment Details </h1>
                    <div class="datacon" style="margin-top: 40px !important; font-weight: bold;color:  #10639a !important;">
                        <label> After a daycare attendance the payment for the day will be added to the account </label>
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
                </div>
                <!-- <?php echo !empty($data['value']['button']) ? 'flex-end' : 'space-between '; ?> -->
                <div class="datacon" style="margin-top: 500px; position: fixed; flex-direction: row; justify-content: <?php echo empty($data['value']['button']) ? 'flex-end' : 'space-between '; ?>; margin-right: 20px;">
                    <?php
                    if (!empty($data['value']['button']) && $data['value']['button'] === true) {
                        echo <<<HTML
                <div class="data">
                    <button name="action" value="child" type="submit" id="add-btn" style="font-weight: 600; width: 200px; font-size: 20px; padding: 7px; background-color:rgb(67, 99, 154) !important; color: white !important;">Add Children<i class="fa fa-chevron-right" style="margin-left: 4px;"></i></button>
                </div>
            HTML;
                    }
                    ?>
                    <div class="data">
                        <button name="action" value="guardian" type="submit" id="submit" style="font-weight: 600; width: 200px; font-size: 20px; padding: 7px; background-color:rgb(67, 99, 154) !important; color: white !important; margin-left: 260px;">Add Guardian<i class="fa fa-chevron-right" style="margin-left: 4px;"></i></button>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const upbtn = document.getElementById('up-btn');
            const hibtn = document.getElementById('hi-btn');
            const upcoming = document.getElementById('spe-Modal');
            const history = document.getElementById('fle-Modal');

            upbtn.addEventListener('click', function() {
                upbtn.style.backgroundColor = '#10639a';
                hibtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'block';
                history.style.display = 'none';
            });

            hibtn.addEventListener('click', function() {
                hibtn.style.backgroundColor = '#10639a';
                upbtn.style.backgroundColor = '#60a6ec';
                upcoming.style.display = 'none';
                history.style.display = 'block';
                days.forEach(day => {
                    day.classList.remove('selectday');
                })
            });

            const days = document.querySelectorAll('.day');
            days.forEach(dayDiv => {
                dayDiv.addEventListener('click', function() {
                    const dayValue = dayDiv.getAttribute('data-day');
                    const checkbox = document.getElementById(`day-${dayValue}`);

                    // Toggle the checkbox and add/remove 'selected' class
                    if (checkbox.checked) {
                        checkbox.checked = false;
                        dayDiv.classList.remove('selectday');
                    } else {
                        checkbox.checked = true;
                        dayDiv.classList.add('selectday');
                    }
                });
            });
        });
    </script>
</body>

</html>