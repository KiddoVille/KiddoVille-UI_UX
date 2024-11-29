<html>

<head>
    <title>View Packages</title>
    <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Header/Header.css" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/View-package.css?v=<?= time() ?>" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Dashboard.css?v=<?= time() ?>" />

</head>
<style>
    /* Add styles for the modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: white;
        margin: 15% auto;
        padding: 20px;
        border-radius: 10px;
        width: 400px;
        text-align: center;
    }

    .modal-buttons {
        display: flex;
        justify-content: space-evenly;
        margin-top: 20px;
    }

    .modal-buttons button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .delete-btn {
        background-color: #e74c3c;
        color: white;
    }

    .cancel-btn {
        background-color: #95a5a6;
        color: white;
    }

    .package-card button {
        margin: 5px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #3498db;
        color: white;
    }

    .delete-btn:hover {
        background-color: red;
    }

    .view-btn:hover {
        background-color: aqua;
    }
</style>

<body>
    <!-- <div class="navbar" style="justify-content: space-between;">
        <div class="navbar-logo">
            <img src="../Assets/Header logo.png" alt="Logo" style="height:80px; width:100px" />
        </div>
    </div> -->

    <div class="container">
        <div class="sidebar">
            <h2 style="margin-top: 10px;">Dashboard</h2>
            <ul>
                <li class="selected">
                    <a href="<?= ROOT ?>/Manager/Home">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-user-check"></i>Accounts
                        </a>
                        <ul class="dropdown">
                            <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                            <li><a href="../View-profile/child-profile.html"><i class="fas fa-child"></i> Child</a></li>
                            <li><a href="../suspand/suspend.html"><i class="fas fa-ban"></i> Suspend & Deactive</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-calendar"></i>Scheduling
                        </a>
                        <ul class="dropdown">
                            <li><a href="../Food-table/Food-table.html"><i class="fas fa-utensils"></i> Meal Plane</a></li>
                            <li><a href="../allocation-table/allocation.html"><i class="fas fa-users"></i> Staff Allocation</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <<i class="fas fa-cogs"></i>Operations & Services
                        </a>
                        <ul class="dropdown">
                            <li><a href="../Manage-problems/Manage-problem.html"><i class="fas fa-exclamation-triangle"></i> Problems</a></li>
                            <!-- <li><a href="#"><i class="fas fa-sun"></i>Leaves</a></li> -->
                            <li><a href="../Vacancies/View-vacancy.html"><i class="fas fa-user-plus"></i>Hiring</a></li>
                            <!-- <li><a href="#"><i class="fas fa-smile"></i>FunZone</a></li> -->
                            <li><a href="<?= ROOT ?>/Manager/Packages"><i class="fas fa-box"></i> Packages</a></li>
                            <li><a href="../Events/View-events.html"><i class="fas fa-calendar-alt"></i> Events</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-envelope"></i>Evenets & Communication

                            <ul class="dropdown">
                                <li><a href="../Events/ChooseEvent.html"><i class="fas fa-calendar"></i>Create Events</a></li>
                                <li><a href="../PublishLeaves/PublishLeaves.html"><i class="fas fa-sun"></i>Publish leaves</a></li>
                            </ul>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#">
                            <i class="fas fa-info-circle"></i>Info & profile
                        </a>
                        <ul class="dropdown">
                            <li><a href="../Blog/EditBlog.html"><i class="fas fa-blog"></i>Blog</a></li>
                            <li><a href="../AboutUs/Editaboutus.html"><i class="fas fa-info-circle"></i>About Us</a></li>
                            <li><a href="../Contactus/EditContactUs.html"><i class="fas fa-envelope"></i>Contact Us</a></li>
                            <li><a href="../Profile/Editprofilepage.html"><i class="fas fa-user-circle"></i>Profile</a></li>

                        </ul>
                    </li>
                </ul>

            </ul>
        </div>
        <div class="header">
            <div class="name">
                <h1>Hey Thilina</h1>
                <p style="color: white;">Let’s do some productive activities today</p>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
                <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
            </div>
            <div class="bell-icon" style="cursor: pointer;">
                <button class="bellbtn" onclick="handlenotify()">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="message-dropdown" id="notification">
                    <ul>
                        <li>
                            <p>New Message 1 <i class="fas fa-paper-plane"></i></p>
                            <p class="content">Content like a message</p>
                        </li>
                        <li>
                            <p>New Message 2 <i class="fas fa-paper-plane"></i></p>
                            <p class="content">Content like a message</p>
                        </li>
                        <li>
                            <p>New Message 3 <i class="fas fa-paper-plane"></i></p>
                            <p class="content">Content like a message</p>
                        </li>
                        <li>
                            <p>New Message 4 <i class="fas fa-paper-plane"></i></p>
                            <p class="content">Content like a message</p>
                        </li>
                        <li>
                            <p>New Message 5 <i class="fas fa-paper-plane"></i></p>
                            <p class="content">Content like a message</p>
                        </li>
                        <li>
                            <p>New Message 6 <i class="fas fa-paper-plane"></i></p>
                            <p class="content">Content like a message</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="message-numbers">
                <p> 2</p>
            </div>
            <div class="profile">
                <button class="profilebtn" onclick="handleClick()">
                    <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                </button>
            </div>
        </div>
        <!-- <div class="title-image-container">
            <div class="title">
                Packages Detail
            </div>
            <div class="image-container">
                <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" width="500" />
            </div>
        </div> -->
        <!-- <div class="fill" style="margin-left: 300px;">
            <h1 style="color: black;margin-left:20px"> Packages</h1> -->
        <!-- <div class="filters" style="text-align: left;">
                    <label for="minPrice">Min Price:</label>
                    <input type="text" id="minPrice" class="price" maxlength="7" placeholder="Min Price"
                        style="width: 100px;">
                    <label for="maxPrice">Max Price:</label>
                    <input type="text" id="maxPrice" class="price" maxlength="7" placeholder="Max Price"
                        style="width: 100px;">
                </div> -->
        <div class="fill" style="margin-left: 300px;">
            <h1 style=" margin-left: 20px;">Packages</h1>
            <div class="packages">
                <?php if (!empty($data['packageData'])) : ?>
                    <?php foreach ($data['packageData'] as $package) : ?>
                        <div class="package-card">
                            <img alt="Classroom with colorful furniture and toys" src="<?= IMAGE ?>/packages.png" />
                            <p><?= $package->name; ?></p>
                            <p style="display: none;"><?= $package->services; ?></p>
                            <p><?= $package->price; ?></p>
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



            // packageIdView = packageId;
            // if(packageIdView){
            //     fetch(`<?= ROOT ?>/Manager/View/${packageIdView}`,{
            //     method: 'POST'
            //     })
            // }
            // location.reload();

        }

        // viewbtn.onclick = function () {
        //     console.log(packageIdView)

        // }

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