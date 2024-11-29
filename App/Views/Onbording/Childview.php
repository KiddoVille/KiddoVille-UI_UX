<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/Onbording/Onbording.css">
    <script src="<?= JS ?>/Onbording/child.js"></script>
    <style>
        .error {
            color: red !important;
            margin-left: 0px !important;
            font-size: 15px;
            margin-top: 0px;
            margin-bottom: -15px;
        }

        .delete{
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
        <!--  To input doctor prescriptions to the system -->
        <div id="prescriptionModal" class="prescription-view">
            <div class="top-con" style="margin-bottom: 570px;">
                <div class="back-con" id="back-arrow">
                    <i class="fas fa-chevron-left" id="backforprescription"></i>
                </div>
            </div>
            <i class="fa fa-chevron-left move" id="left" style="margin-left: -20px !important;"></i>
            <input type='file' name='prescriptions[]' id="image-input" multiple style="display: none;">
            <img src="" alt='input mark' class="prescription-img" id="prescription-img">
            <button id="delete-image-btn" class="delete" ><i class="fas fa-trash" style="color: white; font-size: 20px;"></i></button>
            <i class="fa fa-chevron-right move" id="right"></i>
        </div>
        <!-- to input documents on childs conditions -->
        <div id="documentModal">
            <div class="top-con">
                <div class="back-con" id="back-arrow">
                    <i class="fas fa-chevron-left" id="backfordocument"></i>
                </div>
            </div>
            <div id="fileListContainer"></div>
            <div>
                <input type="file" style="display: none; position: absolute;" id="file-input" name='documents[]' multiple>
                <button class="add-files" style="cursor: pointer !important;" for="file-input" id="file-btn" type='button'> Add Files </button>
            </div>
        </div>
        <!-- container to get details -->
        <div class="Profilecard">
            <div
                style="background-color: #2524E8; width: 350px; height: 600px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
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
                    <div class="circle select"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="ProfileContainer" style="flex-direction: column !important;">

                <h2> Let's Get Started</h2>
                <div class="hori">
                    <div class="datacon">
                        <div class="data">
                            <label>First Name <span id="red-star" class="red-star 
                            <?php if (!empty($data['values']['First_Name'])) {
                                echo 'hidden';
                            } ?>"> *</span></label>
                            <input name='First_Name' style="width: 200px;" placeholder="Yunus" type="text" id="firstname" 
                            value="<?php if (!empty($data['values']['First_Name'])) {
                                            echo $data['values']['First_Name'];
                                        } ?>">
                            <?php if (!empty($data['errors']['First_Name'])): ?>
                                <p class="error" id="firstname-error">
                                    <?php echo $data['errors']['First_Name']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="data">
                            <label name="Gender">Gender</label>
                            <select style="width: 215px;" required>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="datacon">
                        <div class="data">
                            <label>Last Name <span id="red-star2" class="red-star"> *</span></label>
                            <input name="Last_Name" style="width: 200px;" placeholder="Mohamad" type="text" id="lastname" required
                            value="<?php if (!empty($data['values']['Last_Name'])) {
                                            echo $data['values']['Last_Name'];
                                        } ?>">
                            <?php if (!empty($data['errors']['Last_Name'])): ?>
                                <p class="error" id="lastname-error">
                                    <?php echo $data['errors']['Last_Name']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="data">
                            <label>Date Of Birth</label>
                            <input name="DOB" style="width: 200px;" type="date" id="dob" required
                            value="<?php if (!empty($data['values']['DOB'])) {
                                            echo $data['values']['DOB'];
                                        } ?>">
                            <?php if (!empty($data['errors']['DOB'])): ?>
                                <p class="error" id="dob-error">
                                    <?php echo $data['errors']['DOB']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <span id="red-star5" class="red-star" style="margin-right: -40px;"> *</span>
                    <div class="datacon imagecon" id="image-bg">
                        <input name="profile_image" type="file" style="display: none" id="image" accept="image/*" required>
                        <i class="fa fa-add" style="font-size:30px;cursor: pointer; border-radius: 30px; padding: 10px 12px; border: 2px solid black; background-color: white;" id="image-icon"></i>
                    </div>
                </div>
                <div class="datacon" style="flex-direction: row;">
                    <div class="data">
                        <label>Nickname <span id="red-star3" class="red-star" style="margin-right: -40px;"> *</span></label>
                        <input name="Nickname" style="width: 190px;" type="text" placeholder="yunu" id="nickname">
                    </div>
                    <div class="data">
                        <label>Relationship to user <span id="red-star4" class="red-star"> *</span></label>
                        <input name="Relation" style="width: 190px;" placeholder="Father" type="text" id="relation" maxlength="12" required
                        value="<?php if (!empty($data['values']['Relation'])) {
                                            echo $data['values']['Relation'];
                                        } ?>">
                            <?php if (!empty($data['errors']['Relation'])): ?>
                                <p class="error" id="relation-error">
                                    <?php echo $data['errors']['Relation']; ?>
                                </p>
                            <?php endif; ?>
                    </div>
                    <div class="data">
                        <label>Religion</label>
                        <select name="Religion" style="width: 200px;">
                            <option> None </option>
                            <option>Budhisum</option>
                            <option>Islam</option>
                            <option>Christianity</option>
                            <option>Tamil</option>
                        </select>
                    </div>
                </div>
                <div class="datacon" style="flex-direction: row !important;">
                    <div class="data">
                        <label>Language Preference</label>
                        <select name="Language" style="width: 323px;" required>
                            <option>English</option>
                            <option>Tamil</option>
                            <option>Sinhala</option>
                        </select>
                    </div>
                    <div class="data">
                        <label>Allergies</label>
                        <input name="Allergies" style="width: 308px;" placeholder="shrimp" type="text" maxlength="12">
                    </div>
                </div>
                <div class="datacon" style="flex-direction: row !important;">
                    <div class="data">
                        <label>Medications</label>
                        <p class="edit" style="margin-left: 100px;" id="prescriptions">+ Add Files </p>
                        <input type="text" style="width: 308px;">
                    </div>
                    <div class="data">
                        <label>Medical conditions</label>
                        <input type="text" style="width: 308px;">
                        <p class="edit" style="margin-left: 100px;" id="documents">+ Add Files </p>
                    </div>
                </div>
                <!-- <?php echo !empty($data['value']['button']) ? 'flex-end' : 'space-between '; ?> -->
                <div class="datacon" style="flex-direction: row; justify-content: <?php echo empty($data['value']['button']) ? 'flex-end' : 'space-between '; ?>; margin-right: 20px;">
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
                        <button name="action" value="guardian" type="submit" id="submit" style="font-weight: 600; width: 200px; font-size: 20px; padding: 7px;     background-color:rgb(67, 99, 154) !important; color: white !important;">Add Guardian<i class="fa fa-chevron-right" style="margin-left: 4px;"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // To input childs image
            const imageicon = document.getElementById('image-icon');
            const image = document.getElementById('image');
            const imagebg = document.getElementById('image-bg');

            imageicon.addEventListener('click', function(){
                image.click();
            })

            image.addEventListener('input',function(event){
                const file= event.target.files[0];
                if(file){   
                    redstar5.classList.add('hidden');
                    const imageUrl = URL.createObjectURL(file);
                    imagebg.style.backgroundImage = `url('${imageUrl}')`;
                }
                else{
                    redstar5.classList.remove('hidden');
                }
            })

            // redstars to represent required inputs
            const redstar = document.getElementById('red-star');
            const redstar2 = document.getElementById('red-star2');
            const redstar3 = document.getElementById('red-star3');
            const redstar4 = document.getElementById('red-star4');
            const redstar5 = document.getElementById('red-star5');

            const firstnameError = document.getElementById('firstname-error');
            const nickname = document.getElementById('nickname');
            const lastname = document.getElementById('lastname');
            const lastnameError = document.getElementById('lastname-error');
            const relation = document.getElementById('relation');
            const relationError = document.getElementById('relation-error');
            const firstname = document.getElementById('firstname');

            firstname.addEventListener('input',function(){
                if (!firstname.value) {
                    redstar.classList.remove('hidden');
                } else {
                    redstar.classList.add('hidden');
                }
                firstnameError.textContent = '';
            })

            lastname.addEventListener('input',function(){
                if (!lastname.value) {
                    redstar2.classList.remove('hidden');
                } else {
                    redstar2.classList.add('hidden');
                }
                lastnameError.style.display = 'none';
            })

            nickname.addEventListener('input',function(){
                if (!nickname.value) {
                    redstar3.classList.remove('hidden');
                } else {
                    redstar3.classList.add('hidden');
                }
            })

            relation.addEventListener('input',function(){
                if (!relation.value) {
                    redstar4.classList.remove('hidden');
                } else {
                    redstar4.classList.add('hidden');
                }
                relationError.style.display = 'none';
            })

            const dob = document.getElementById('dob');
            const dobError = document.getElementById('dob-error');

            dob.addEventListener('input', function() {
                dobError.style.display = 'none';
            });

            //prescription doscuments input 
            // to input image on doctores prescriptions
            const prescriptions = document.getElementById('prescriptions');
            const prescriptionsModal = document.getElementById('prescriptionModal');
            const left = document.getElementById('left');
            const right = document.getElementById('right');
            const prescriptionimg = document.getElementById('prescription-img');
            const backforprescription = document.getElementById('backforprescription');
            const imginput = document.getElementById('image-input');


            const documents = document.getElementById('documents');
            const documnetModal = document.getElementById('documentModal');
            const backfordocument = document.getElementById('backfordocument');
            const Profilecard = document.querySelector('.Profilecard');

            documents.addEventListener('click', function () {
                documnetModal.style.display = 'block';
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
                "http://localhost/MVC/Public/Assets/Images/addprescription.png"
            ];
            const fileArray = [];
            let currentIndex = 0;

            const deleteImageBtn = document.getElementById('delete-image-btn');

            updateImage();

            prescriptionimg.addEventListener('click', function () {
                if (currentIndex == images.length - 1) {
                    imginput.click();
                }
            })

            imginput.addEventListener('change', function () {
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

            left.addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateImage();
            });

            right.addEventListener('click', function () {
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

            deleteImageBtn.addEventListener('click', function () {
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
                const dataTransfer = new DataTransfer();  // Creates a new DataTransfer object
            
                // Add remaining files to the dataTransfer object
                fileArray.forEach(file => {
                    dataTransfer.items.add(file);
                });
            
                // Update fileInput.files with the new files
                imginput.files = dataTransfer.files;
            }

            updateImage();

            const files = [];

            const fileListContainer = document.getElementById('fileListContainer');
            const fileInput = document.getElementById('file-input');
            const fileBtn = document.getElementById('file-btn'); // Correct capitalization
            
            function renderFiles() {
                fileListContainer.innerHTML = ''; // Clear current list
            
                files.forEach((file, index) => {
                    const fileDiv = document.createElement('div');
                    fileDiv.className = "file-entry";
            
                    const viewLink = document.createElement('a');
                    viewLink.href = URL.createObjectURL(file);
                    viewLink.target = "_blank";
                    viewLink.textContent = file.name;
                    viewLink.className = "view-link";
            
                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = "Delete";
                    deleteButton.className = "delete-button";
                    deleteButton.onclick = function () {
                        deleteFile(index);
                    };
            
                    fileDiv.appendChild(viewLink);
                    fileDiv.appendChild(deleteButton);
                    fileListContainer.appendChild(fileDiv);
                });
            }
            
            // Open file input when the add files button is clicked
            fileBtn.addEventListener('click', function() {
                fileInput.click();
            });
            
            // Handle new document file selections
            fileInput.addEventListener('change', function() {
                for (const file of fileInput.files) {
                    files.push(file); // Add each selected document to the files array
                }
                renderFiles(); // Update displayed list of files
            });
            
            // Delete a file from the files array
            function deleteFile(index) {
                files.splice(index, 1); // Remove the file from the files array
                renderFiles(); // Re-render the file list
            }
            
            // Ensure all files (images and documents) are sent on form submission
            document.querySelector('form').addEventListener('submit', function (event) {
                const dataTransferImages = new DataTransfer();
                const dataTransferDocuments = new DataTransfer();
            
                // Add all image files to dataTransferImages
                images.forEach(file => dataTransferImages.items.add(file));
                // Set imginput.files to contain all images
                document.getElementById('image-input').files = dataTransferImages.files;
            
                // Add all document files to dataTransferDocuments
                files.forEach(file => dataTransferDocuments.items.add(file));
                // Set fileInput.files to contain all documents
                fileInput.files = dataTransferDocuments.files;
            
                // Uncomment during testing to prevent form reset on submit
                event.preventDefault();

            });

        });
    </script>
</body>

</html>