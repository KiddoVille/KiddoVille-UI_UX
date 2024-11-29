<!DOCTYPE html>
<html>
<title>Child Profile</title>
<link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= CSS ?>/Child/profile.css?v=<?= time() ?>">
<script src="<?= JS ?>/Child/Number.js"></script>
<style>
    .fa-chevron-left {
        margin-left: 40px;
        cursor: pointer;
        color: white !important;
    }

    .profile-img {
        width: 200px;
        height: 200px;
        border-radius: 100%;
        border: 5px solid rgba(27, 54, 101, 1);
        box-shadow: 0px 0px 12px rgba(72, 99, 180, 0.5);
        transition: box-shadow 0.3s;
        margin-top: 10px;
        margin-left: 250px;
        justify-content: center;
        align-items: center;
    }
</style>

<head>
</head>
<body>
    <form id="form">
        <div id="prescriptionModal" class="prescription-view">
            <div class="top-con" style="margin-bottom: 570px;">
                <div class="back-con" id="back-arrow">
                    <i class="fas fa-chevron-left" id="backforprescription"></i>
                </div>
            </div>
            <i class="fa fa-chevron-left move" id="left" style="margin-left: -20px !important;"></i>
            <input type='file' name='prescriptions[]' id="image-input" multiple style="display: none;">
            <img src="<?= IMAGE ?>/prescription1.jpeg" alt='input mark' class="prescription-img" id="prescription-img">
            <button type="button" id="delete-image-btn" class="delete"><i class="fas fa-trash" style="color: white; font-size: 20px;"></i></button>
            <i class="fa fa-chevron-right move" id="right"></i>
        </div>
        <div id="documentModal">
            <div class="top-con">
                <div class="back-con" id="back-arrow">
                    <i class="fas fa-chevron-left" id="backfordocument"></i>
                </div>
            </div>
            <div id="fileListContainer"></div>
            <div>
                <input type="file" style="display: none; position: absolute;" name='documents[]' id="file-input" multiple>
                <button class="add-files" style="cursor: pointer !important;" for="file-input" id="file-btn" type='button'> Add Files </button>
            </div>
        </div>
        <div class="Profilecard" id="Profilecard" style="margin-top: 45px !important;">
            <div class="Profile">
                <p style="margin-top: 0px; margin-bottom: -10px; margin-left: 90px; cursor: pointer; color: rgba(35, 83, 167, 1);"
                    onclick="window.location.href='../Home/Home.html'">Child Profile
                    <span style="margin-left: 10px;"> > </span>
                    <span style="cursor: pointer; color: rgba(35, 83, 167, 1);"> Edit Child Profile</span>
                </p>
                <div class="back-con" id="back-arrow" style="margin-top: -25px !important; border-top-left-radius: 0px;">
                    <i class="fas fa-chevron-left" id="backforprescription"></i>
                </div>
                <div class="refresh-con" style="margin-top: -40px; border-top-right-radius: 0px;">
                    <i class="fas fa-refresh" id="profilerefresh"
                        style="margin-left: 10px; margin-bottom: -20px; cursor: pointer; color: #233E8D;"></i>
                </div>
            </div>
            <div class="ProfileContainer" style="margin-top: 10px;">
                <div class="leftcon">
                    <div id="editprofileleft">
                        <div class="profile-img" style="display: none;" id="add-con" style="width:200px !important; height:200px !important; ">
                            <input type="file" id="fileInput" name="profileimage">
                            <i class="fa fa-plus add" id="add"></i>
                        </div>
                        <img src="<?= isset($data[0]->profile) ? $data[0]->profile . '?v=' . time() : '' ?>" class="profile-img" id="img" style="width:200px; height:200px; margin-bottom: 40px;">
                        <i class="fa fa-edit"
                            style="font-size:30px; margin-left: 400px; margin-bottom: 0px; margin-top: -60px; color: #6f6f6f; cursor: pointer; display:flex;"
                            id="image-edit">
                        </i>

                        <div class="datacon">
                            <div class="data">
                                <label>First Name</label>
                                <input name="First_Name" required value="<?= isset($data[0]->First_Name) ? $data[0]->First_Name : '' ?>" type="text">
                            </div>
                            <div class="data">
                                <label>Last Name</label>
                                <input name="Last_Name" required value="<?= isset($data[0]->Last_Name) ? $data[0]->Last_Name : '' ?>" type="text">
                            </div>
                        </div>
                        <div class="datacon">
                            <div class="data">
                                <label>Nickname</label>
                                <input name="Nickname" required value="<?= isset($data[0]->Nickname) ? $data[0]->Nickname : '' ?>" type="text">
                            </div>
                            <div class="data">
                                <label>Date Of Birth</label>
                                <input name="DOB" required value="<?= isset($data[0]->DOB) ? $data[0]->DOB : '' ?>" type="date">
                            </div>
                        </div>
                        <div class="datacon">
                            <div class="data">
                                <label>Gender</label>
                                <select style="width: 315px;" name="Gender">
                                <?php
                                    $selectedGender = isset($data[0]->Gender) ? $data[0]->Gender : '';// Fetch the stored value ('M' or 'F')
                                ?>
                                    <option value="M" <?= $selectedGender === 'M' ? 'selected' : '' ?>>Male</option>
                                    <option value="F" <?= $selectedGender === 'F' ? 'selected' : '' ?>>Female</option>
                                </select>
                            </div>
                            <div class="data">
                                <label>User Relationship</label>
                                <input required name="Relation" type="text" value="<?= isset($data[0]->Relation) ? $data[0]->Relation : '' ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div id="editprofileright">
                    <div class="rightcon">
                        <div class="datacon">
                            <div class="data">
                                <label>Language</label>
                                <select style="width: 315px;" name="Language">
                                    <?php $selectedLanguage = isset($data[0]->Language) ? $data[0]->Language : ''; // Fetch the value
                                    ?>
                                    <option value="Tamil" <?= $selectedLanguage === 'Tamil' ? 'selected' : '' ?>>Tamil</option>
                                    <option value="English" <?= $selectedLanguage === 'English' ? 'selected' : '' ?>>English</option>
                                    <option value="Sinhala" <?= $selectedLanguage === 'Sinhala' ? 'selected' : '' ?>>Sinhala</option>
                                </select>
                            </div>
                            <div class="data">
                                <label>Religion</label>
                                <select style="width: 315px;" name="Religion">
                                    <?php $selectedReligion = isset($data[0]->Religion) ? $data[0]->Religion : ''; // Fetch the value
                                    ?>
                                    <option value="None" <?= $selectedGender === 'None' ? 'selected' : '' ?>>None</option>
                                    <option value="Budhisum" <?= $selectedGender === 'Budhisum' ? 'selected' : '' ?>>Budhisum</option>
                                    <option value="Islam" <?= $selectedGender === 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Christianity" <?= $selectedGender === 'Christianity' ? 'selected' : '' ?>>Christianity</option>
                                    <option value="Tamil" <?= $selectedGender === 'Tamil' ? 'selected' : '' ?>>Tamil</option>
                                </select>
                            </div>
                        </div>
                        <div class="datacon">
                            <div class="data">
                                <label>Emergency Contact</label>
                                <input required type="text" readonly value="<?= isset($data[0]->Mobile) ? $data[0]->Mobile : 'None' ?>" class="number">
                            </div>
                            <div class="data">
                                <label>Email</label>
                                <input required type="text" readonly value="<?= (isset($data[0]->Email) && $data[0]->Email !== '') ? $data[0]->Email : 'None' ?>">
                            </div>
                        </div>
                        <div class="datacon">
                            <div class="data">
                                <label>Medications</label>
                                <input readonly style="width: 635px;" type="text">
                                <p class="edit" style="margin-left: 220px;" id="prescriptions">+Add doctor prescriptions
                                </p>
                            </div>
                        </div>
                        <div class="datacon">
                            <div class="data">
                                <label>Medical Conditions</label>
                                <input readonly style="width: 635px;" type="text">
                                <p class="edit" style="margin-left: 260px;" id="documents">+Add documents </p>
                            </div>
                        </div>
                        <div class="datacon">
                            <div class="data">
                                <label>Allergies</label>
                                <input type="text" name="Allergies" value="<?= (isset($data[0]->Allergies) && $data[0]->Allergies !== '') ? $data[0]->Allergies : 'None' ?>" style="width: 635px;">
                            </div>
                        </div>
                        <div class="Save-con" style="margin-top: 20px;">
                            <button class="Save" type="button" onclick="window.location.href='<?= ROOT ?>/Child/ChildProfile'">
                                Cancel
                            </button>
                            <button class="Save" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Document modal elements
            const documents = document.getElementById('documents');
            const documentModal = document.getElementById('documentModal');
            const fileListContainer = document.getElementById('fileListContainer');
            const backForDocument = document.getElementById('backfordocument');
            const fileInput = document.getElementById('file-input');
            const fileBtn = document.getElementById('file-btn');
            const Profilecard = document.getElementById('Profilecard');

            // Profile image elements
            const imageEdit = document.getElementById('image-edit');
            const profileImg = document.getElementById('img');
            const addCon = document.getElementById('add-con');
            const add = document.getElementById('add');
            const profileFileInput = document.getElementById('fileInput');

            // Document handling
            let documentFiles = <?= json_encode($data[0]->documents); ?>;
            renderDocumentList()

            documents.addEventListener('click', function() {
                documentModal.style.display = 'block';
                Profilecard.style.filter = "blur(10px)";
            });

            backForDocument.addEventListener('click', function() {
                documentModal.style.display = 'none';
                Profilecard.style.filter = "blur(0px)";
            });

            fileBtn.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function(e) {
                const newFiles = Array.from(e.target.files);

                newFiles.forEach(file => {
                    const fileEntry = {
                        name: file.name,
                        file: file,
                        path: URL.createObjectURL(file)
                    };
                    documentFiles.push(fileEntry);
                });

                renderDocumentList();
            });

            function renderDocumentList() {
                fileListContainer.innerHTML = '';

                documentFiles.forEach((fileEntry, index) => {
                    const fileDiv = document.createElement('div');
                    fileDiv.className = "file-entry";

                    // View link
                    const viewLink = document.createElement('a');
                    viewLink.href = fileEntry.path;
                    viewLink.target = "_blank";
                    viewLink.textContent = fileEntry.name;
                    viewLink.className = "view-link";

                    // Download button
                    const downloadButton = document.createElement('button');
                    downloadButton.textContent = "Download";
                    downloadButton.className = "download-button";
                    downloadButton.onclick = function() {
                        const link = document.createElement('a');
                        link.href = fileEntry.path;
                        link.download = fileEntry.name;
                        link.click();
                    };

                    // Delete button
                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = "Delete";
                    deleteButton.className = "delete-button";
                    deleteButton.onclick = function() {
                        documentFiles.splice(index, 1);
                        renderDocumentList();
                    };

                    fileDiv.appendChild(viewLink);
                    fileDiv.appendChild(downloadButton);
                    fileDiv.appendChild(deleteButton);
                    fileListContainer.appendChild(fileDiv);
                });
            }

            // Profile image handling
            imageEdit.addEventListener('click', function() {
                imageEdit.style.display = 'none';
                profileImg.style.display = 'none';
                addCon.style.display = 'flex';
            });

            add.addEventListener('click', function() {
                profileFileInput.click();
                imageEdit.style.display = 'none';
            });

            profileFileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];

                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        profileImg.src = e.target.result;
                        profileImg.style.display = 'block';
                        addCon.style.display = 'none';
                        imageEdit.style.display = '';
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert("Please select a valid image file.");
                }
            });

            const prescriptions = document.getElementById('prescriptions');
            const prescriptionsModal = document.getElementById('prescriptionModal');
            const profileimage = document.getElementById('images');
            const imginput = document.getElementById('image-input');
            const left = document.getElementById('left');
            const right = document.getElementById('right');
            const prescriptionimg = document.getElementById('prescription-img');
            const backforprescription = document.getElementById('backforprescription');

            prescriptionimg.addEventListener('click', function() {
                imginput.click();
            })

            backforprescription.addEventListener('click', function() {
                prescriptionsModal.style.display = 'none';
                Profilecard.style.filter = "none";
            })

            prescriptions.addEventListener('click', function() {
                prescriptionsModal.style.display = 'flex';
                Profilecard.style.filter = "blur(10px)";
            });

            let images = <?= json_encode($data[0]->prescription); ?>; // JSON data from PHP
            images.push('<?= IMAGE ?>/prescription1.jpeg');
            console.log(images);
            const fileArray = [];
            let currentIndex = 0;

            const deleteImageBtn = document.getElementById('delete-image-btn');

            updateImage();

            imginput.addEventListener('change', function() {
                if (imginput.files) {
                    for (const file of imginput.files) {
                        fileArray.push(file); // Store each selected file in `fileArray`
                        const newImageURL = URL.createObjectURL(file);
                        images.splice(images.length - 1, 0, newImageURL); // Insert new image before last image placeholder
                    }
                    currentIndex = images.length - 2; // Move to the last new image
                    updateImage();
                }
            });

            function updateImage() {
                prescriptionimg.src = images[currentIndex];
            }

            left.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateImage();
            });

            right.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % images.length;
                updateImage();
            });

            function toggleDeleteButton() {
                // If we're on the first image or on the last placeholder image, hide the delete button
                if (currentIndex === images.length - 1 || currentIndex === 0) {
                    deleteImageBtn.style.display = "none";
                } else {
                    deleteImageBtn.style.display = "block";
                }
            }

            deleteImageBtn.addEventListener('click', function() {
                if (currentIndex >= 0 && currentIndex < images.length - 1) {
                    // Remove image from images array
                    images.splice(currentIndex, 1);

                    // Remove the file from the fileArray (so it won't be submitted)
                    fileArray.splice(currentIndex, 1);

                    // Update the image index
                    if (currentIndex >= images.length) {
                        currentIndex = images.length - 1; // Go to the last image if we've deleted the last one
                    }

                    updateImage();
                    updateFileInput();
                }
            });

            function updateFileInput() {
                const dataTransfer = new DataTransfer(); // Creates a new DataTransfer object

                // Add remaining files to the dataTransfer object
                fileArray.forEach(file => {
                    dataTransfer.items.add(file);
                });

                // Update fileInput.files with the new files
                imginput.files = dataTransfer.files;
            }

            updateImage();

            // Form submission
            document.getElementById('form').addEventListener("submit", function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                // Add document files to form data
                documentFiles.forEach((fileEntry, index) => {
                    if (fileEntry.url) {
                        formData.append('documents[]', fileEntry); // Add file URL instead of File object
                    }
                });

                const fileInput = document.getElementById('fileInput');

                // Loop through the selected files and append them to the FormData object
                if (fileInput.files) {
                    for (let i = 0; i < fileInput.files.length; i++) {
                        formData.append('profile[]', fileInput.files[i]); // Use `profile[]` to handle multiple files
                    }
                }

                // Append URLs of images
                images.forEach((image, index) => {
                    if (image.url) {
                        formData.append('prescriptions[]', image); // Add image URL instead of File object
                    }
                });
                
                formData.append('remaining_files', JSON.stringify(documentFiles));
                formData.append('remaining_images', JSON.stringify(images));

                for (let [key, value] of formData.entries()) {
                    console.log(key, value); // Logs each key-value pair
                }

                fetch('<?= ROOT ?>/Child/ChildEditProfile/Savedetails', {
                        method: 'POST',
                        body: formData // Send as FormData instead of JSON
                    })
                    .then(response => response.text())
                    .then(responseData => {
                        if (responseData.errors && responseData.errors.length > 0) {
                            responseData.errors.forEach(error => {
                                console.error(error);
                                // Handle errors appropriately
                            });
                        } else {
                            console.log(formData);
                            // Handle success
                            window.location.href = '<?= ROOT ?>/Child/ChildProfile';
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            });
        });
    </script>
</body>

</html>