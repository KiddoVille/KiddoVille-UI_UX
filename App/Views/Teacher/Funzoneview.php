<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="<?=CSS?>/Teacher/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Teacher/funzone.css?v=<?= time() ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!--Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar">
                <div class="sidebar-header">
                <?php if(isset($result)):?>
                <img src="<?=$result['image']?>">
                    <div class="sidebar-header-content">
                        <h3><?= $result['firstName'] ?> <?= $result['lastName'] ?></h3>
                        <?php endif; ?>
                        <h4>Teacher</h4>
                    </div>
                </div>
                <div class="sidebar-list">
                    <a href="<?=ROOT?>/Teacher/Dashboard" class="sidebar-list-item" id="dashboard-link"> 
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Funzone" class="sidebar-list-item" id="home-link">
                    <i class="fa-solid fa-puzzle-piece"></i>
                        <span class="text">Funzone</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Reports" class="sidebar-list-item" id="report-link">
                        <i class='bx bxs-report' ></i>
                        <span class="text"> Report </span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Students" class="sidebar-list-item" id="students-link">
                        <i class='bx bxs-group' ></i>
                        <span class="text">Students</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Leaves" class="sidebar-list-item" id="leaves-link">
                        <i class='bx bx-calendar' ></i>
                        <span class="text">Leaves</span>
                    </a>
                    <a href="<?=ROOT?>/Teacher/Message" class="sidebar-list-item" id="chat-link" >
                        <i class='bx bx-message-square-detail'></i>
                        <span class="text">Messages</span>
                    </a>
                    
                   
                    
        
                </div>
            </div>
        </div>



        
        <div class="wrapper-1">

             <!-- ********* FUN ZONE CONTENT ADDING **********-->


            <div class="funzone-popup-container" id="funzone-popup-container" >
                <form action="<?=ROOT?>/Teacher/Funzone/addMedia" method="post" enctype="multipart/form-data">
                <div class="funzone-content">
                    <div class="funzone-header">
                        <i class="fa-solid fa-upload"></i>
                        <h3>Upload Resources</h3>
                        <img src="<?=ROOT?>/assets/images/logo.png">
                    </div>
                    
                    <div class="selects">
                        <div class="age">
                            <label for="date">Age Group</label>
                            <select name="AgeGroup" >
                                <option disabled selected value="">Select</option>
                                <option value="3-5">3-5</option>
                                <option value="6-9">6-9</option>
                                <option value="10-13">10-13</option>
                            </select>
                        </div>
                        <div class="type">
                            <label for="type">Media Type</label>
                            <select name="MediaType">
                            <option disabled selected value="">Select</option>
                                <option value="Audio">Audio</option>
                                <option value="Video">Video</option>
                                <option value="Image">Image</option>
                                <option value="Text">Text</option>
                            </select>
                        </div>
                            
                    </div>
                    <div class="title">
                        <h4>Title</h4>
                        <input type="text" name="Title" placeholder="Add file title" required/>
                       
                    </div>

                    <div class="funzone-footer">
                        <h4>Description</h4>
                        <input type="textarea" name="Description" placeholder="Add file description" />
                        <p>You will be notified once the import is successful</p>
                    </div>

                    <div class="drag-and-drop">
                        <div class="foramts">
                            <i class="fa-regular fa-file"></i>
                            <i class="fa-regular fa-image"></i>
                            <i class="fa-regular fa-file-lines"></i>
    
                        </div>
                        <h3>Drag and drop files to upload or </h3>
                        <div class="file-select">
                             <input type="file" name="file" id="file" >
                        </div>
                        
                        <p>Supported Files: JPG, PNG, PDF, DOCX</p>
                    </div>
                   
                    <div class="funzone-buttons">
                        <button type = "button"class="cancel"  onclick="closeFunZone()">Cancel</button>
                        <button class="done" id="" type="submit">Done</button>
                    </div>
                </form>
                </div>
    
    
            </div> 

            <!-- ********* FUN ZONE CONTENT EDITING  **********-->


            <div class="funzone-popup-edit" id="funzone-popup-edit" >
                <form action="<?=ROOT?>/Teacher/Funzone/addMedia" method="post" enctype="multipart/form-data">
                <div class="edit-funzone-content">
                    <div class="funzone-header">
                        <i class="fa-solid fa-upload"></i>
                        <h3>Upload Resources</h3>
                        <img src="<?=ROOT?>/assets/images/logo.png">
                    </div>
                    
                    <div class="selects">
                        <div class="age">
                            <label for="date">Age Group</label>
                            <select name="AgeGroup" >
                                <option disabled selected value="">Select</option>
                                <option value="3-5">3-5</option>
                                <option value="6-9">6-9</option>
                                <option value="10-13">10-13</option>
                            </select>
                        </div>
                        <div class="type">
                            <label for="type">Media Type</label>
                            <select name="MediaType">
                            <option disabled selected value="">Select</option>
                                <option value="Audio">Audio</option>
                                <option value="Video">Video</option>
                                <option value="Image">Image</option>
                                <option value="Text">Text</option>
                            </select>
                        </div>
                            
                    </div>
                    <div class="title">
                        <h4>Title</h4>
                        <input type="text" name="Title" placeholder="Add file title" required/>
                       
                    </div>

                    <div class="funzone-footer">
                        <h4>Description</h4>
                        <input type="textarea" name="Description" placeholder="Add file description" />
                        <p>You will be notified once the import is successful</p>
                    </div>

                    <div class="drag-and-drop">
                        <div class="foramts">
                            <i class="fa-regular fa-file"></i>
                            <i class="fa-regular fa-image"></i>
                            <i class="fa-regular fa-file-lines"></i>
    
                        </div>
                        <h3>Drag and drop files to upload or </h3>
                        <div class="file-select">
                             <input type="file" name="file" id="file" >
                        </div>
                        
                        <p>Supported Files: JPG, PNG, PDF, DOCX</p>
                    </div>
                   
                    <div class="funzone-buttons">
                        <button type = "button"class="cancel"  onclick="closeFunZone()">Cancel</button>
                        <button class="done" id="" type="submit">Done</button>
                    </div>
                </form>
                </div>
    
    
            </div> 

            <div class="navabr">
                <div class="navbar-left">
                    <a href="#"><h2>Hey <?= $teacher['firstName'] ?> <?= $teacher['lastName'] ?></h2></a>
                    <h4>Empowering Excellence in Every Lesson!</h4>
                </div>
                <div class="navbar-right">
                <!-- <div class="alter-icon"></div>
                <a href="#" class="notification" onclick="toggleNotify()" id = "notificationIcon">
                   
                    <i class='bx bxs-bell' ></i>
                </a> -->
                <a href="#" class="profile">
                    <img src="<?=$teacher['image']?>" onclick="toggleMenu()" id="profileIcon">
                </a>
                </div>
    
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="<?=$item->image?>" alt="">
                            <h3>Sara Bretney</h3>
                        </div>
                        <hr>
    
                        <a href="<?=ROOT?>/Teacher/Profile" class="sub-menu-link">
                            <i class='bx bx-edit'></i>
                            <p>View Profile</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class='bx bx-help-circle' ></i>
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class='bx bx-log-out'></i>
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
                <!-- <div class="notify-menu" id="notify">
                    <div class="notify">
                        <a href="#" class="notify-info">
                            <i class='bx bx-message-square-detail'></i>
                            <div class="msg-info">
                                <h4>New Notification</h4>
                                <h5>Leave request approved</h5>
                                <p >05.33 22 Jul</p>
                            </div>
                           
                        </a>
                        <hr>
                        <a href="#" class="notify-info">
                            <i class='bx bx-message-square-detail'></i>
                            <div class="msg-info">
                                <h4>New Notification</h4>
                                <h5>Parents meeting</h5>
                                <p >05.33 22 Jul</p>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="notify-info">
                            <i class='bx bx-message-square-detail'></i>
                            <div class="msg-info">
                                <h4>New Notification</h4>
                                <h5>Reports have been updated</h5>
                                <p>05.33 22 Jul</p>
                            </div>
                        </a>
                        <a href="<?=ROOT?>/Teacher/Notifications" onclick="toggleNotify()" class="all-btn">See all</a>
                    </div>
                </div>  -->
    
            </div>
        <div class="content">
            <div class="backgorund-overlay" ></div>
            <div class="funzone-page">
                <div class="funzone-page-header">
                <i class="fa-solid fa-puzzle-piece"></i>
                    <h3>Fun Zone</h3>  
                                        
                </div>
                <hr>
                

                <div class="filter-group">
                    <div class="filters">
                        <input type="text" name="search" placeholder="Search Name..." id="media_name">
                        
                        <div class="age-select">
                            <label for="date">Age Group</label>
                            <select name="age-group">
                                <option value="3-5">3-5</option>
                                <option value="6-9">6-9</option>
                                <option value="10-13">10-13</option>
                            </select>
                        </div>
                        <button class="upload" id="open-funzone" onclick="showFunzone()"><i class="fa-solid fa-plus"></i>Upload a file</button>
                    </div>
                    
                </div> 
                <?php if (!empty(($message))): ?>
                <div class="error-message">
                       
                           <?php foreach($message as $error): ?>
                            <p><li><?= $error ?></li></p>
                            <?php endforeach; ?>
                       
                        </div>
                        <?php endif; ?>
                <div class="student-table">
               
                    
                    
                    <div class="student-table-title">
                        <h4 class="file-name"><i class="fa-solid fa-file"></i>File Name</h4>
                        <h4 class="status"><i class="fa-solid fa-check"></i>Description</h4>
                        <h4 class="last-md"><i class="fa-solid fa-clock"></i>Date Created</h4>
                        <h4 class="up"><i class="fa-solid fa-user"></i>Uploaded By</h4>
                        <h4 class="actions"><i class="fa-regular fa-circle-check"></i>Actions</h4>
                    </div>
                   
                    <div class="table-rows">
                  
                       

                        <?php if(isset($media)):?>
                            <?php foreach($media as $item):?>
                        <div class="student-row">
                        <div class="first-row">
                            <img src="<?=IMAGE?>/mp4.png">
                            <p class="row-items name"><?= $item->Title ?></p></div>
                            <p class="row-items center small"><?=$item->Description?></p>
                            <p class="row-items center opacity"><?=$item->DateTime?></p>

                           
                            <div class="upload">
                                <img src="<?=$item->image?>">
                                <div class="upld-person">
                                    <p class="name"><?= $item->firstName?>&nbsp<?= $item->lastName?></p>
                                    <p class="email"><?= $item->email?></p>    
                                </div>
                            </div>
                        
                       
                            <div class="actions center">
                                <a href="#"><button type="button" class="edit-btn">Edit
                                <i class='bx bxs-edit-alt' ></i>
                                </button></a>
                                <form action="<?=ROOT?>/Teacher/Funzone/removeMedia" method = "POST">
                                    <input type="hidden" name="id" value="<?= $item->MediaID?>">
                                    <button type="submit" class="dlt-btn">Delete
                                    <i class='bx bx-trash-alt' ></i>
                                    </button>
                                </form>
                                
                            </div>                      
                        </div>
                        <?php endforeach;?>
                        <?php endif; ?>  
                        

                    </div>
                   
                </div>
            </div>
            
       
        </div>
        
    </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="
    
    
    "></script>
    <script src="<?=JS?>/Teacher/funzone.js"></script>
    <script>
        $(document).ready(function (){
            fetchMedia();
            $('#media_name').on('keyup',function(){
                let media_name = $(this).val();
                fetchMedia(media_name);
            });
        });

        function fetchMedia(media_name = ''){
            console.log("typed : ",media_name);
            $.ajax({
                url:"<?=ROOT?>/Teacher/Funzone/index",
                method:"POST",
                data:{
                    action: 'SearchMedia',
                    media_name: media_name
                },
                dataType:"json",
                success:function(data){
                    console.log("JSON received:", data);
                    if(data.media.length > 0){
                        // loop & build HTML here if needed
                        $('#media_list').html(buildMediaHTML(data.media)); // or use your own method
                    } else {
                        $('#media_list').html('<p>' + data.message + '</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX failed:", status, error);
                    console.log("Response text:", xhr.responseText);
                }
            });
        }

    </script>
    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
    

    <script src="https://kit.fontawesome.com/73dcf6eb33.js" crossorigin="anonymous"></script>
</body>
</html>