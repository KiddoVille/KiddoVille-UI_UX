<html>

<head>
    <title>View Packages</title>
    <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Header/Header.css" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/View-package.css?v=<?= time() ?>" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>" />
    <script src="<?= JS ?>/Manager/profileview.js"></script>

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
                        <a href="<?= ROOT ?>/Manager/Publish" style="font-size: 18px;">
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
        <div class="header" style="margin-top:-1.5%">
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
        <div class="fill" style="margin-left: 300px;">
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
                            <button id='confirmDeleteBtn ' class="delete-btn" onclick="confirmDelete('<?= $package->id; ?>')">Delete</button>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div>No packages available</div>
                <?php endif; ?>
            </div>
            <div class="add-packages">
                <a href="<?= ROOT ?>/Manager/Createpackage">+ Add Packages</a>
            </div>
        </div>

        <div id="deleteModal" class="modal">
            <div class="modal-content">
                <p>Are you sure you want to delete this package?</p>
                <div class="modal-buttons">
                    <button id="confirmDeleteBtn" class="delete-btn">Delete</button>
                    <button id="cancelDeleteBtn" class="cancel-btn">Cancel</button>
                </div>
            </div>
        </div>

        <div class="add-packages">
            <a href="<?= ROOT ?>/Manager/Createpackage">
                + Add packages
            </a>
        </div>
    </div>
    </div>
    <!-- <a class="back-button" href="../Dashboard/Dashboard.html" style="margin-left: 20px">
        Back
    </a> -->

    <script>
        // JavaScript for modal functionality
        let deleteModal = document.getElementById('deleteModal');
        let confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        let cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
        let viewbtn = document.getElementById('confirmView');
        let packageIdToDelete = null;
        let packageIdView = null;

        function confirmDelete(packageId) {
            packageIdToDelete = packageId;
            deleteModal.style.display = 'block';
        }

        function viewPackage(packageId) {

            window.location.href = '<?= ROOT ?>/Manager/View/' + packageId;





        }



        confirmDeleteBtn.onclick = function() {
            if (packageIdToDelete) {
                // Replace the URL with your delete endpoint
                //console.log(packageIdToDelete);
                fetch(`<?= ROOT ?>/Manager/Delete/${packageIdToDelete}`, {
                        method: 'POST'
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (!(data.success)) {
                            alert('Package deleted successfully!');
                            location.reload();
                        } else {
                            alert('Failed to delete package.');
                            location.reload();
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
            deleteModal.style.display = 'none';
        };

        cancelDeleteBtn.onclick = function() {
            deleteModal.style.display = 'none';
            packageIdToDelete = null;
        };

        window.onclick = function(event) {
            if (event.target === deleteModal) {
                deleteModal.style.display = 'none';
                packageIdToDelete = null;
            }
        };
    </script>

</body>

</html>