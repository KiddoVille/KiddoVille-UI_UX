<html>

<head>
    <title>
        KIDDO VILLE Publish
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Schedule.css?v=<?= time() ?>" />
    <link rel="icon" href="<?= IMAGE ?>/Manager/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Dashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Event.css?v=<?= time() ?>">
</head>
<style>
        .btn-success {
            background: coral;
            border: 1px solid #ddd;
            padding: 8px 20px;
            color: white;
            cursor: pointer;
            margin-top: 30%;
            margin-left: 50%;
        }
        .box-card {
            background: #fff;
            margin-bottom: 20px;
            font-size: 20px;
            display: none;
        }
        .show {
            display: block;
        }
    </style>

<body id="body">
    <div class="sidebar">
        <h2 style="margin-top: 10px;font-size:25px;">Dashboard</h2>
        <ul>
            <li class="selected">
                <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;">
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
                <li class="hover-effect unselected">
                    <a href="#" style="font-size: 18px;">
                        <<i class="fas fa-cogs"></i>Operations
                    </a>
                    <ul class="dropdown">
                        <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Problem"><i class="fas fa-exclamation-triangle"></i> Problems</a></li>

                        <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Packages"><i class="fas fa-box"></i> Packages</a></li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Publish" style="font-size: 18px;">
                        <i class="fas fa-share"></i>Publish
                </li>
            </ul>
            <ul>
                <li class="hover-effect unselected">
                    <a href="#" style="font-size: 18px;">
                        <i class="fas fa-info-circle"></i>Info & profile
                    </a>
                    <ul class="dropdown">
                        <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Blog"><i class="fas fa-blog"></i>Blog</a></li>
                        <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Aboutus"><i class="fas fa-info-circle"></i>About Us</a></li>
                        <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Contactus"><i class="fas fa-envelope"></i>Contact Us</a></li>
                        <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Profile"><i class="fas fa-user-circle"></i>Profile</a></li>

                    </ul>
                </li>
            </ul>

        </ul>

    </div>
    <div class="header" style="margin-top: 0.05%">
        <div class="name">
            <h1>Hey Namal</h1>
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
    <button id="btn" class="btn-success">Change</button>
    <div id="card1" class="box-card show">
        <div class="container_event">
            <div class="form-section" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                <form action="View-events.html" method="post">
                    <h2>Event Name</h2>
                    <div class="form-group">
                        <input type="text" value="Bak maha Ulele" required>
                    </div>
                    <h2>Event date</h2>
                    <div class="form-group">
                        <input type="text" value="12/12/2023" required>
                    </div>
                    <h2>Content</h2>
                    <div class="form-group">
                        <textarea placeholder="Add content" required></textarea>
                    </div>

            </div>
            <div class="upload-section" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                <h2>Upload Images</h2>
                <div class="upload-box">
                    <i class="fas fa-upload"></i>
                    <p>Drag and drop files to upload or</p>
                    <div class="file-upload">
                        <label for="fileInput" class="custom-file-label">Upload</label>
                        <input type="file" id="fileInput" class="custom-file-input" />
                    </div>
                    <p>Supported Files: JPEG, PNG, PDF, DOCX</p>
                </div>
                <div class="import-url">
                    <input type="text" placeholder="Add file URL">
                </div>
                <div class="buttons">
                    <a href="<?= ROOT ?>/Manager/Home" style="margin-left: 9%;"><button type="submit" class="done">Done</button></a>
                    <button class="cancel">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    
    <div id="card2" class="box-card">
        <div class="popup" style="height: 450px;">
            <div>
                <i class="fas fa-arrow-left"></i>
                <span>Publish Leaves</span>
            </div>
            <div class="background-image"></div>
            <form action="../Dashboard/Dashboard.html" method="post">
                <div class="form-group">
                    <label for="leave-type">Leave Type <span class="required">*</span></label>
                    <select id="leave-type" required>
                        <option value="">Select Leave Type</option>
                        <option>Annual Leave</option>
                        <option>Poya Leave</option>
                        <option>Independent Day</option>
                        <option>Cultural Leave</option>
                        <option>Religion Leave</option>
                    </select>

                    <label for="dates">Dates <span class="required">*</span></label>
                    <input type="date" id="dates" value="08/14/2025" style="width:340px" required>

                    <label for="about">About</label>
                    <textarea id="about" placeholder="Include comments for your approver" required></textarea>
                </div>

                <div class="buttons">
                    <button type="submit" class="publish">Publish</button>
                    <button type="button" style="margin-left:200px;width:85px;height:35px">Cancel</button>
                </div>
            </form>
        </div>
    </div>


    <script>
      let btn = document.getElementById('btn');
      let card1 = document.getElementById('card1');
      let card2 = document.getElementById('card2');
      
      btn.addEventListener('click',() =>{
        if(card1.classList.contains('show')){
            card1.classList.remove('show');
            card2.classList.add('show');
            btn.innerText = 'event';
        }
        else{
            card1.classList.add('show');
            card2.classList.remove('show');
            btn.innerText = 'sport';
        }
      })
    </script>
</body>

</html>