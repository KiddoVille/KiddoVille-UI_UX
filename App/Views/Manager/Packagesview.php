    <html>

    <head>
        <title>View Packages</title>
        <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../Header/Header.css" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/package.css?v=<?= time() ?>" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/component.css?v=<?= time() ?>" />
        <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>" />

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
            <div class="header" style="margin-top:78.35%">
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
            <div class="fill" style="margin-left: 300px;margin-top:92%">
                <h1 style=" margin-left: 20px;color:#233E8D ;width:75%;margin-top:20px;">Packages</h1>
                <hr>
                <div class="packages">
                    <?php if (!empty($data['packageData'])) : ?>
                        <?php foreach ($data['packageData'] as $package) : ?>
                            <div class="package-card">
                                <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                                <p><?= $package->Name; ?></p>
                                <p style="display: none;"><?= $package->services; ?></p>
                                <p>LKR.<?= $package->Price; ?>.00</p>
                                <p style="display: none;"><?= $package->days; ?></p>
                                <p style="display: none;"><?= $package->id; ?></p>
                                <button id='confirmView' class="view-btn" onclick="viewPackage('<?= $package->id; ?>')">View</button>
                                <button id='confirmDeleteBtn ' class="delete-btn" onclick="deletepackage('<?= $package->PackageID; ?>')">Delete</button>
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
                            <option value="AllHours">Egg with Noodles</option>
                            <option value="FoodAddons">Marmite with Bread</option>
                            <option value="Everything">Yourgurt</option>
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

            <!-- Delete Confirmation Modal -->
            <div id="deleteModal" class="modal">
                <div class="modal-content">
                    <h2>Confirm Deletion</h2>
                    <p>Are you sure you want to delete this Package?</p>
                    <div class="modal-buttons">
                        <button id="confirmDelete" class="confirm-btn">Yes, Delete</button>
                        <button id="cancelDelete" class="cancel-btn" id="closePopup">Cancel</button>
                    </div>
                </div>
            </div>

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


            document.addEventListener("DOMContentLoaded", function() {
                // Get elements
                const openPopup = document.getElementById("addpack");
                const closePopup = document.getElementById("closePopup");
                const popupOverlay = document.getElementById("popupOverlay");
                const popupBox = document.getElementById("addcontainer");

                // Function to open popup
                openPopup.addEventListener("click", () => {
                    popupOverlay.style.display = "block";
                    popupBox.style.display = "block";
                });

                // Function to close popup
                closePopup.addEventListener("click", () => {
                    popupOverlay.style.display = "none";
                    popupBox.style.display = "none";
                });

                // Close when clicking outside the popup
                popupOverlay.addEventListener("click", () => {
                    popupOverlay.style.display = "none"; 
                    popupBox.style.display = "none";
                });
            });
    
        </script>

    </body>

    </html>