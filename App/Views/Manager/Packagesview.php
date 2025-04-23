    <html>

    <head>
        <title>View Packages</title>
        <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../Header/Header.css" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/package.css?v=<?= time() ?>" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/component.css?v=<?= time() ?>" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/Holiday.css?v=<?= time() ?>">

    </head>

    <body>
        <div class="container">
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
                        <li class="selected">
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
                            <a href="<?= ROOT ?>/Manager/Holiday" style="font-size: 18px;">
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
            <div class="header" style="margin-top:-1%">
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
            <div class="fill" style="margin-left: 300px;margin-top:10%">
                <h1 style=" margin-left: 20px;color:#233E8D ;width:75%;margin-top:20px;">Packages</h1>
                <hr>
                <div class="packages">
                    <?php if (!empty($data['packageData'])) : ?>
                        <?php foreach ($data['packageData'] as $package) : ?>
                            <div class="package-card">
                                <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                                <p><?= $package->Name; ?></p>
                                <p>LKR.<?= $package->Price; ?>.00</p>
                                <button class='update-btn' data-id="<?= $package->PackageID ?>">Update</button>
                                <button class="delete-btn" onclick="deletepackage('<?= $package->PackageID; ?>')">Delete</button>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div>No packages available</div>
                    <?php endif; ?>
                </div>
                <div class="add-packages">
                    <button class="add-btn" onclick="addPackage()" id="addpack">+Add Package</button>
                </div>
                <div id="popupOverlay"></div>
                <div class="addcontainer">
                    <h1>Create Package</h1>
                    <form id="packageForm" method="post" action="<?= ROOT ?>/Manager/Packages/addpackage">
                        <!-- Package name -->
                        <label for="package-name">Package Name <span class="required">*</span></label>
                        <input type="text" class="opt" name="Name" placeholder="Enter package name"
                            value="<?php echo isset($_POST['Name']) ? $_POST['Name'] : ''; ?>" required>
                        <!-- Included services -->
                        <label for="included-services">Description<span class="required">*</span></label>
                        <textarea name="Description" id="included-services" class="Description" placeholder="List included services" required><?php echo isset($_POST['Description']) ? $_POST['Description'] : ''; ?></textarea>
                        <!-- Price -->
                        <label for="Price">Price <span class="required">*</span></label>
                        <input type="number" id="Price" name="Price" value="<?php echo isset($_POST['Price']) ? $_POST['Price'] : '' ?>"
                            required min="1" max="25000">
                        <?php if (isset($_POST['Price']) && $_POST['Price'] > 25000): ?>
                            <p class="error">Price cannot exceed 25,000.</p>
                        <?php endif; ?>
                        <!-- Age group -->
                        <label for="AgeGroup">Age Group:</label>
                        <select name="AgeGroup" id="agegroup" class="form-control" required>
                            <option value="">Select Age Group</option>
                            <option value="2-3">2-3</option>
                            <option value="3-4">3-4</option>
                            <option value="4-5">4-5</option>
                            <option value="5-7">5-7</option>
                            <option value="7-9">7-9</option>
                        </select>
                        <!-- FoodAddons  -->
                        <label for="FoodAddons">Food Addons:</label>
                        <select name="features" id="foodaddons" class="form-control" required>
                            <option value="" selected hidden>Select Features</option>
                            <option value="AllHours">All Hours</option>
                            <option value="FoodAddons">Food Addons</option>
                            <option value="Everything">Everything</option>
                        </select>
                        <!-- Days -->

                        <?php
                        // Assuming selected days are stored in an array
                        $selectedDays = isset($_POST['days']) ? $_POST['days'] : [];
                        ?>

                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="Monday"> Monday
                            </label>
                            <label>
                                <input type="checkbox" name="Tuesday"> Tuesday
                            </label>
                            <label>
                                <input type="checkbox" name="Wedenesday"> Wednesday
                            </label>
                            <label>
                                <input type="checkbox" name="Thursday"> Thursday
                            </label>
                            <label>
                                <input type="checkbox" name="Friday"> Friday
                            </label>
                            <label>
                                <input type="checkbox" name="Saturday"> Saturday
                            </label>
                            <label>
                                <input type="checkbox" name="Sunday"> Sunday
                            </label>
                        </div>

                        <!-- Submit button -->
                        <div class="buttons">
                            <button type="submit" class="publish">Publish</button>
                            <a href="<?= ROOT ?>/Manager/Packages" class="cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- Add this near the top of your packages view -->
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?>">
                    <?= $_SESSION['message'] ?>
                </div>
                <?php
                // Clear the message after displaying
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
                ?>
            <?php endif; ?>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="modal">
            <div class="modal-content">
                <h2>Confirm Deletion</h2>
                <p>Are you sure you want to delete this Package?</p>
                <div class="modal-buttons">
                    <button id="confirmDelete" class="confirm-btn">Delete</button>
                    <button id="cancelDelete" class="cancel-btn" id="closePopup">Cancel</button>
                </div>
            </div>
        </div>



        <div id="popupContainer" class="popup-container">
            <div class="popup">
                <button id="closePopup" class="close-btn">×</button>
                <h1 style="color: #233E8D;">Update Package</h1>
                <form action="" method="POST" class="leave-form" id="updatePackageForm">
                    <!-- Hidden package ID field -->
                    <input type="hidden" name="PackageID" id="packageId">

                    <!-- Package name -->
                    <label for="package-name">Package Name <span class="required">*</span></label>
                    <input type="text" class="opt" name="Name" id="packageName" placeholder="Enter package name" required>

                    <!-- Description -->
                    <label for="included-services">Description<span class="required">*</span></label>
                    <textarea name="Description" id="packageDescription" class="Description" placeholder="List included services" required></textarea>

                    <!-- Price -->
                    <label for="Price">Price <span class="required">*</span></label>
                    <input type="number" id="packagePrice" name="Price" required min="1" max="25000">

                    <!-- Age group -->
                    <label for="AgeGroup">Age Group:</label>
                    <select name="AgeGroup" id="packageAgeGroup" class="form-control" required>
                        <option value="">Select Age Group</option>
                        <option value="2-3">2-3</option>
                        <option value="3-4">3-4</option>
                        <option value="4-5">4-5</option>
                        <option value="5-7">5-7</option>
                        <option value="7-9">7-9</option>
                    </select>

                    <!-- Features -->
                    <label for="features">Features:</label>
                    <select name="features" id="packageFeatures" class="form-control" required>
                        <option value="" selected hidden>Select Features</option>
                        <option value="AllHours">All Hours</option>
                        <option value="FoodAddons">Food Addons</option>
                        <option value="Everything">Everything</option>
                    </select>

                    <!-- Days -->
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="Monday" id="monday"> Monday</label>
                        <label><input type="checkbox" name="Tuesday" id="tuesday"> Tuesday</label>
                        <label><input type="checkbox" name="Wednesday" id="wednesday"> Wednesday</label>
                        <label><input type="checkbox" name="Thursday" id="thursday"> Thursday</label>
                        <label><input type="checkbox" name="Friday" id="friday"> Friday</label>
                        <label><input type="checkbox" name="Saturday" id="saturday"> Saturday</label>
                        <label><input type="checkbox" name="Sunday" id="sunday"> Sunday</label>
                    </div>

                    <!-- Submit button -->
                    <div class="buttons">
                        <button type="submit" class="publish">Update</button>
                        <a href="<?= ROOT ?>/Manager/Packages" class="cancel">Cancel</a>
                    </div>
                </form>
            </div>
        </div>


        <script>
            function deletepackage(PackageID) {
                const modal = document.getElementById("deleteModal");
                const confirmBtn = document.getElementById("confirmDelete");
                const cancelBtn = document.getElementById("cancelDelete");

                // Show modal
                modal.style.display = "flex";

                // When the user clicks "Yes, Delete"
                confirmBtn.onclick = function() {
                    window.location.href = `<?= ROOT ?>/Manager/Packages/deletePackage/${PackageID}`;
                };

                // When the user clicks "Cancel"
                cancelBtn.onclick = function() {
                    modal.style.display = "none";
                };

                // Close modal when clicking outside
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                };
            }

            function addPackage() {
                document.querySelector(".addcontainer").style.display = "flex";
            }

            function closePackageForm() {
                document.querySelector(".addcontainer").style.display = "none";
            }


            // document.addEventListener('DOMContentLoaded', function() {
            //     // Get all update buttons by class instead of ID
            //     const updateButtons = document.querySelectorAll('.update-btn');
            //     const closeBtn = document.getElementById('closePopup');
            //     const popupContainer = document.getElementById('popupContainer');

            //     // Add click event to all update buttons
            //     updateButtons.forEach(button => {
            //         button.addEventListener('click', function() {
            //             // Get the holiday data from this specific holiday item
            //             const holidayItem = this.closest('.package-card');
            //             const holidayId = this.getAttribute('data-id');

            //             // Get the text content of leave type, date, and about
            //             const leaveType = holidayItem.querySelector('h3').textContent;
            //             const dateText = holidayItem.querySelector('p:nth-of-type(1)').textContent;
            //             const aboutText = holidayItem.querySelector('p:nth-of-type(2)').textContent;

            //             // Extract just the date value from "Date: 2023-04-16" format
            //             const nameValue = dateText.replace('Name: ', '').trim();
            //             // Extract just the about text from "About: Some text" format
            //             const priceValue = aboutText.replace('Price: ', '').trim();
            //             const DescriptionValue = aboutText.replace('Description: ', '').trim();
            //             const mondayValue = aboutText.replace('Monday: ', '').trim();
            //             const tuesdayValue = aboutText.replace('Tuesday: ', '').trim();
            //             const wednesdayValue = aboutText.replace('Wednesday: ', '').trim();
            //             const thursdayValue = aboutText.replace('Thursday: ', '').trim();
            //             const fridayValue = aboutText.replace('Friday: ', '').trim();
            //             const saturdayValue = aboutText.replace('Saturday: ', '').trim();
            //             const sundayValue = aboutText.replace('Sunday: ', '').trim();
            //             const ageGroupValue = aboutText.replace('AgeGroup: ', '').trim();
            //             const foodAddonsValue = aboutText.replace('FoodAddons: ', '').trim();
            //             const allHoursValue = aboutText.replace('AllHours: ', '').trim();
            //             const everythingValue = aboutText.replace('Everything: ', '').trim();



            //             // Set form action to point to the update endpoint with the correct ID
            //             const form = document.querySelector('#popupContainer form');
            //             form.action = `<?= ROOT ?>/Manager/Package/updatepackage/${PackageID}`;

            //             // Add hidden input for holiday ID if needed
            //             let hiddenInput = form.querySelector('input[name="PackageID"]');
            //             if (!hiddenInput) {
            //                 hiddenInput = document.createElement('input');
            //                 hiddenInput.type = 'hidden';
            //                 hiddenInput.name = 'PackageID';
            //                 form.appendChild(hiddenInput);
            //             }
            //             hiddenInput.value = holidayId;

            //             // Populate form fields with the holiday data
            //             const nameInput = form.querySelector('select[name="Namel"]');
            //             const priceInput = form.querySelector('input[name="price"]');
            //             const descriptionTextarea = form.querySelector('textarea[name="Description"]');
            //             const mondayCheckbox = form.querySelector('input[name="Monday"]');
            //             const tuesdayCheckbox = form.querySelector('input[name="Tuesday"]');
            //             const wednesdayCheckbox = form.querySelector('input[name="Wedenesday"]');
            //             const thursdayCheckbox = form.querySelector('input[name="Thursday"]');
            //             const fridayCheckbox = form.querySelector('input[name="Friday"]');
            //             const saturdayCheckbox = form.querySelector('input[name="Saturday"]');
            //             const sundayCheckbox = form.querySelector('input[name="Sunday"]');
            //             const ageGroupSelect = form.querySelector('select[name="AgeGroup"]');
            //             const foodAddonsSelect = form.querySelector('select[name="features"]');
            //             const allHoursCheckbox = form.querySelector('input[name="AllHours"]');
            //             const everythingCheckbox = form.querySelector('input[name="Everything"]');


            //             // Set the selected option in the dropdown
            //             for (let i = 0; i < leaveTypeSelect.options.length; i++) {
            //                 if (leaveTypeSelect.options[i].value === leaveType) {
            //                     leaveTypeSelect.selectedIndex = i;
            //                     break;
            //                 }
            //             }

            //             // Set the date and about values
            //             nameInput.value = nameValue;
            //             priceInput.value = priceValue;
            //             descriptionTextarea.value = DescriptionValue;
            //             mondayCheckbox.checked = mondayValue === '1';
            //             tuesdayCheckbox.checked = tuesdayValue === '1';
            //             wednesdayCheckbox.checked = wednesdayValue === '1';
            //             thursdayCheckbox.checked = thursdayValue === '1';
            //             fridayCheckbox.checked = fridayValue === '1';
            //             saturdayCheckbox.checked = saturdayValue === '1';
            //             sundayCheckbox.checked = sundayValue === '1';
            //             ageGroupSelect.value = ageGroupValue;
            //             foodAddonsSelect.value = foodAddonsValue;
            //             allHoursCheckbox.checked = allHoursValue === '1';
            //             everythingCheckbox.checked = everythingValue === '1';

            //             // Show the popup
            //             popupContainer.style.display = 'flex';
            //         });
            //     });

            //     // Close popup function
            //     function closePopup() {
            //         popupContainer.style.display = 'none';
            //     }

            //     // Event listener for close button
            //     if (closeBtn) {
            //         closeBtn.addEventListener('click', closePopup);
            //     }

            //     // Close popup when clicking outside
            //     popupContainer.addEventListener('click', function(event) {
            //         if (event.target === popupContainer) {
            //             closePopup();
            //         }
            //     });

            //     // Close popup with Escape key
            //     document.addEventListener('keydown', function(event) {
            //         if (event.key === 'Escape') {
            //             closePopup();
            //         }
            //     });
            // });



            document.addEventListener('DOMContentLoaded', function() {
                // Get all update buttons, close button, and popup container
                const updateButtons = document.querySelectorAll('.update-btn');
                const closeBtn = document.getElementById('closePopup');
                const popupContainer = document.getElementById('popupContainer');
                const updateForm = document.getElementById('updatePackageForm');

                // Add click event to all update buttons
                updateButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const packageId = this.getAttribute('data-id');

                        // Fetch package details via AJAX
                        fetch(`<?= ROOT ?>/Manager/Package/getPackageDetails/${packageId}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(packageData => {
                                // Fill the form with package data
                                populateUpdateForm(packageData);

                                // Update form action
                                updateForm.action = `<?= ROOT ?>/Manager/Package/updatepackage/${packageId}`;

                                // Show the popup
                                popupContainer.style.display = 'flex';
                            })
                            .catch(error => {
                                console.error('Error fetching package details:', error);
                                alert('Failed to load package details. Please try again.');
                            });
                    });
                });

                // Function to populate form fields with package data
                function populateUpdateForm(packageData) {
                    // Set basic fields
                    document.getElementById('packageId').value = packageData.PackageID;
                    document.getElementById('packageName').value = packageData.Name;
                    document.getElementById('packageDescription').value = packageData.Description;
                    document.getElementById('packagePrice').value = packageData.Price;
                    document.getElementById('packageAgeGroup').value = packageData.AgeGroup;

                    // Set checkboxes for days
                    document.getElementById('monday').checked = packageData.Monday == 1;
                    document.getElementById('tuesday').checked = packageData.Tuesday == 1;
                    document.getElementById('wednesday').checked = packageData.Wednesday == 1;
                    document.getElementById('thursday').checked = packageData.Thursday == 1;
                    document.getElementById('friday').checked = packageData.Friday == 1;
                    document.getElementById('saturday').checked = packageData.Saturday == 1;
                    document.getElementById('sunday').checked = packageData.Sunday == 1;

                    // Set features dropdown based on which one is 1
                    let featureValue = '';
                    if (packageData.FoodAddons == 1) featureValue = 'FoodAddons';
                    else if (packageData.AllHours == 1) featureValue = 'AllHours';
                    else if (packageData.Everything == 1) featureValue = 'Everything';

                    document.getElementById('packageFeatures').value = featureValue;
                }

                // Close popup function
                function closePopup() {
                    popupContainer.style.display = 'none';
                    // Reset form to prevent data persistence between openings
                    updateForm.reset();
                }

                // Event listener for close button
                if (closeBtn) {
                    closeBtn.addEventListener('click', closePopup);
                }

                // Close popup when clicking outside
                popupContainer.addEventListener('click', function(event) {
                    if (event.target === popupContainer) {
                        closePopup();
                    }
                });

                // Close popup with Escape key
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape') {
                        closePopup();
                    }
                });
            });








            // document.addEventListener("DOMContentLoaded", function() {
            //     // Get elements
            //     const openPopup = document.getElementById("addpack");
            //     const closePopup = document.getElementById("closePopup");
            //     const popupOverlay = document.getElementById("popupOverlay");
            //     const popupBox = document.getElementById("addcontainer");

            //     // Function to open popup
            //     openPopup.addEventListener("click", () => {
            //         popupOverlay.style.display = "block";
            //         popupBox.style.display = "block";
            //     });

            //     // Function to close popup
            //     closePopup.addEventListener("click", () => {
            //         popupOverlay.style.display = "none";
            //         popupBox.style.display = "none";
            //     });

            //     // Close when clicking outside the popup
            //     popupOverlay.addEventListener("click", () => {
            //         popupOverlay.style.display = "none";
            //         popupBox.style.display = "none";
            //     });
            // });


            // // Select the update popup and close button
            // const updatePopup = document.querySelector('.addcontainer');
            // const closeUpdatePopup = document.getElementById('closeupdatePopup');

            // // Function to show the update popup
            // function showUpdatePopup() {
            //     updatePopup.style.display = "block";
            // }

            // // Function to hide the update popup
            // function hideUpdatePopup() {
            //     updatePopup.style.display = "none";
            // }

            // // Attach event listeners to all update buttons
            // document.querySelectorAll('.updatepopupbtn').forEach(button => {
            //     button.addEventListener('click', showUpdatePopup);
            // });

            // // Attach event listener to the close button
            // closeUpdatePopup.addEventListener('click', hideUpdatePopup);

            // // Close the popup when clicking outside of it
            // window.addEventListener('click', function(event) {
            //     if (event.target === updatePopup) {
            //         hideUpdatePopup();
            //     }
            // });
        </script>

    </body>

    </html>