<!DOCTYPE html>
<html>
<title>Child Profile</title>
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
    <div id="prescriptionModal" class="prescription-view">
        <div class="top-con" style="margin-top: -555px !important;">
            <div class="back-con" id="back-arrow">
                <i class="fas fa-chevron-left" id="backforprescription"></i>
            </div>
        </div>
        <i class="fa fa-chevron-left move" id="left" style="margin-left: -20px !important;"></i>
        <img src="<?=IMAGE?>/prescription1.jpeg" alt="prescriptions" class="prescription-img" id="prescription-img">
        <i class="fa fa-chevron-right move" id="right"></i>
    </div>
    <div id="documentModal" style="width: 350px">
        <div class="top-con">
            <div class="back-con" id="back-arrow">
                <i class="fas fa-chevron-left" id="backfordocument"></i>
            </div>
        </div>
        <div id="fileListContainer" style="display: flex; justify-content:space-between; width: 330px;">
        </div>
    </div>
    <div class="Profilecard" id="Profilecard">
        <div class="top-con">
            <div class="back-con">
                <i class="fas fa-chevron-left" id="backforpickup" onclick="window.location.href='<?=ROOT?>/Child/Home'"></i>
            </div>
        </div>
        <div class="Profile">
            <p style="margin-top: -40px; margin-bottom: 20px; margin-left: 60px; cursor: pointer; color: rgba(35, 83, 167, 1);">Child Profile
            </p>
        </div>
        <div class="ProfileContainer">
            <div class="leftcon">
                <form id="editprofileleft">
                    <img src="<?= isset($data[0]->profile)? $data[0]->profile .'?v=' . time() : '' ?> " class="profile-img" style="width: 200px; height: 200px;">
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
                            <label>Nickname</label>
                            <input readonly placeholder="<?= isset($data[0]->Nickname)? $data[0]->Nickname : '' ?> " type="text">
                        </div>
                        <div class="data">
                            <label>Date Of Birth</label>
                            <input readonly placeholder="<?= isset($data[0]->DOB)? $data[0]->DOB : '' ?> " type="date">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Gender</label>
                            <input type="text" placeholder="<?= isset($data[0]->Gender)? $data[0]->Gender : 'Male' ?>">
                        </div>
                        <div class="data">
                            <label>User Relationship</label>
                            <input type="text" placeholder="<?= isset($data[0]->Relation)? $data[0]->Relation : '' ?>">
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <form id="editprofileright">
                <div class="rightcon">
                    <div class="datacon">
                        <div class="data">
                            <label>Language</label>
                            <input readonly placeholder="<?= isset($data[0]->Language)? $data[0]->Language : '' ?>" type="text">
                        </div>
                        <div class="data">
                            <label>Religion</label>
                            <input readonly placeholder="<?= isset($data[0]->Religion)? $data[0]->Religion : '' ?>" type="text">
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Emergency Contact</label>
                            <input readonly class="number" type="number" placeholder="<?= isset($data[0]->Mobile)? $data[0]->Mobile : 'None' ?>">
                        </div>
                        <div class="data">
                            <label>Email</label>
                            <input readonly type="text" placeholder="<?= isset($data[0]->Email)? $data[0]->Email : 'None' ?>">
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
                            <label>Allergies</label>
                            <input readonly type="text" style="width:635px;" placeholder="<?= (isset($data[0]->Allergies)&&$data[0]->Allergies !== '' )? $data[0]->Allergies : 'None' ?>">
                        </div>
                    </div>
                    <div
                        style="margin-top: 20px; margin-bottom: 5px; display: flex; justify-content:flex-end;align-items: right; margin-right: -20px;">
                        <button type="button" class="Save" onclick="window.location.href='<?=ROOT?>/Child/ChildEditProfile'">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const prescriptions = document.getElementById('prescriptions');
            const prescriptionsModal = document.getElementById('prescriptionModal');
            const left = document.getElementById('left');
            const right = document.getElementById('right');
            const Profilecard = document.getElementById('Profilecard');
            const prescriptionimg = document.getElementById('prescription-img');
            const backforprescription = document.getElementById('backforprescription');
            const documents = document.getElementById('documents');
            const documnetModal = document.getElementById('documentModal');
            const fileListContainer = document.getElementById('fileListContainer');
            const backfordocument = document.getElementById('backfordocument');

            documents.addEventListener('click', function () {
                documnetModal.style.display = 'flex';
                Profilecard.style.filter = "blur(10px)";
            })

            backfordocument.addEventListener('click', function () {
                documnetModal.style.display = 'none';
                Profilecard.style.filter = "blur(0px)";
            })

            backforprescription.addEventListener('click', function () {
                prescriptionsModal.style.display = 'none';
                Profilecard.style.filter = "blur(0px)";
            })

            prescriptions.addEventListener('click', function () {
                prescriptionsModal.style.display = 'flex';
                Profilecard.style.filter = "blur(10px)";
            });

            const images = <?= json_encode($data[0]->prescription); ?>;
            console.log(images);
            let currentIndex = 0;

            function updateImage() {
                prescriptionimg.src = images[currentIndex];
                console.log(prescriptionimg.src);
            }

            left.addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateImage();
            });

            right.addEventListener('click', function () {
                currentIndex = (currentIndex + 1) % images.length;
                updateImage();
            });

            updateImage();

            const files = <?= json_encode($data[0]->documents); ?>;

            files.forEach(file => {
                const fileDiv = document.createElement('div');
                fileDiv.className = "file-entry";

                const viewLink = document.createElement('a');
                viewLink.href = file.path;
                viewLink.target = "_blank";
                viewLink.textContent = file.name;
                viewLink.className = "view-link";

                const downloadButton = document.createElement('button');
                downloadButton.textContent = "Download";
                downloadButton.className = "download-button";
                downloadButton.onclick = function () {
                    const link = document.createElement('a');
                    link.href = file.path;
                    link.download = file.name;
                    link.click();
                };

                fileDiv.appendChild(viewLink);
                fileDiv.appendChild(downloadButton);
                fileListContainer.appendChild(fileDiv);
            });

        });

    </script>
</body>

</html>