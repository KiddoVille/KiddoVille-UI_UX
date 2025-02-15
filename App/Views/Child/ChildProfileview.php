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
    <div id="documentModal">
        <div class="top-con">
            <div class="back-con" id="back-arrow">
                <i class="fas fa-chevron-left" id="backfordocument"></i>
            </div>
        </div>
        <div id="fileListContainer">
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

            const images = [
                "../../Assets/prescription1.jpeg",
                "../../Assets/prescription2.jpeg",
                "../../Assets/prescription3.jpeg"
            ];
            let currentIndex = 0;

            function updateImage() {
                prescriptionimg.src = images[currentIndex];
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

            const files = [
                { name: "Report_January.pdf", path: "../../Assets/Report_January.pdf" },
                { name: "Report_February.pdf", path: "../../Assets/Report_February.pdf" },
                { name: "Summary_March.pdf", path: "../../Assets/Summary_March.pdf" }
            ];

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