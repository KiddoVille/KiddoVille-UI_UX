<html>

<head>
    <title> Blog </title>
    <link rel="icon" href="<?= IMAGE ?>/KIDDOVILLE_LOGO.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/Manager/Header.css">
    <link rel="stylesheet" href="<?=CSS?>/Manager/Footer.css">
    <link rel="stylesheet" href="<?=CSS?>/Manager/Blog.css">

    <style>
        /* Hide the actual file input */
        .file-input {
            display: none;
        }

        /* Custom upload button styling */
        .upload-button {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }

        /* Optional hover effect */
        .upload-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="../../Assets/Header logo.png" alt="Logo" style="height:80px ; width:100px" />
        </div>
        <div class="navbar-links">
            <a href="../Landing/Landing.html"><button class="navbar-link">Home</button></a>
            <a href="../Profile/Profilepage.html"><button class="navbar-link">Profile</button></a>
            <a href="../Blog/Blog.html"> <button class="navbar-link select">Blog</button></a>
            <a href="../AboutUs/AboutUs.html"><button class="navbar-link">AboutUs</button></a>
            <a href="../Help/Help.html"><button class="navbar-link">ContactUs</button></a>
            <a href="../../Login/Login.html"><button class="navbar-button login">Login</button></a>
            <a href="../../Login/Signup.html"><button class="navbar-button signup">Sign Up</button></a>
        </div>
    </div>
    <div class="container">
        <form action="../Dashboard/Dashboard.html">
            <div class="header">
                <h1>
                    All Articles
                </h1>
                <h2>
                    <input type="text" value="2024 Early Learning Back to School Summit: ECE Best Practices"
                     style="width: 100%;height:60px;justify-content:center" required
                    >
                </h2>
                <p class="date">
                    <i class="fas fa-calendar-alt"></i> August 31, 2024
                </p>
            </div>
    
            <div class="events">
                <h3>
                    Our Events
                </h3>
                <div class="event-list">
                    <div class="event-item">
                        <img alt="Children playing sports"
                            src="https://storage.googleapis.com/a1aa/image/6xdsDjOa5y6sHtiKt5dbOfInhiouxfziq9yM4BETXbzanSmTA.jpg" />
                        <p>Sports Programs</p>
                        <input type="file" id="fileInput" class="file-input" accept="image/*" required>
                    
                        <!-- Custom button -->
                        <label for="fileInput" class="upload-button">Upload Image</label>
    
                    </div>
                    <div class="event-item">
                        <img alt="Children in an educational program"
                            src="https://storage.googleapis.com/a1aa/image/PX0HgJDFGvKTIFvcR4Z9DhZK48mZosIwNQCWyfy8AjjvTJzJA.jpg" />
                        <p>Educational Programs</p>
                        <input type="file" id="fileInput" class="file-input" accept="image/*" required>
                    
                        <!-- Custom button -->
                        <label for="fileInput" class="upload-button">Upload Image</label>
    
                    </div>
                    <div class="event-item">
                        <img alt="Cultural event with many people"
                            src="https://storage.googleapis.com/a1aa/image/HV24dTKDcsrfcqGfxieP9aE2c5WSmbngJhvOdyPRfq7ydKZOB.jpg" />
                        <p>Cultural Events</p>
                        <input type="file" id="fileInput" class="file-input" accept="image/*" required>
                    
                        <!-- Custom button -->
                        <label for="fileInput" class="upload-button">Upload Image</label>
    
                    </div>
                </div>
    
                <div class="pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
    
            <div class="articles">
                <h3>
                    Articles
                </h3>
                <div class="article-list">
                    <div class="article-item">
                        <img alt="Management tips"
                            src="https://storage.googleapis.com/a1aa/image/uPXFsQ0xbiqZPx7GBNlKEKle7l34UtfJLEfR7fFuBcL1dKZOB.jpg" />
                        <p>Management tips</p>
                        <input type="file" id="fileInput" class="file-input" accept="image/*" required>
                    
                        <!-- Custom button -->
                        <label for="fileInput" class="upload-button">Upload Image</label>
    
                    </div>
                    <div class="article-item">
                        <img alt="Child development"
                            src="https://storage.googleapis.com/a1aa/image/FNgene62jFq0CUFw7lHK1OgaV2Wr8gMfeOfb8SoOO8xB8UycC.jpg" />
                        <p>Child development</p>
                        <input type="file" id="fileInput" class="file-input" accept="image/*" required>
                    
                        <!-- Custom button -->
                        <label for="fileInput" class="upload-button">Upload Image</label>
    
                    </div>
                    <div class="article-item">
                        <img alt="Group activities"
                            src="https://storage.googleapis.com/a1aa/image/BkOG01jx5SZkJVnTfKoFiTSu9TZTfLQRgUku7khVbokhnSmTA.jpg" />
                        <p>Group activities</p>
                        
                            <!-- Hidden file input -->
                            <input type="file" id="fileInput" class="file-input" accept="image/*" required>
                    
                            <!-- Custom button -->
                            <label for="fileInput" class="upload-button">Upload Image</label>
                        
                     </div>
                </div>
    
                <div class="pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                </div>
            </div>
    
            <div class="new-articles">
                <input type="text" value="Every last week of the month we publish new articles" required
                style="width:100%;height:60px">
            </div>
    
            
    
            <div class="footer=p">
                <textarea name="" id="" placeholder="Check out the KIDDO blog for your all-in-one source for everything you need to know about the building blocks of high-quality childcare! We cover the latest on early childhood education, childcare center management, family engagement, professional development, and more. Find the latest on trends, innovations, inspiration, and best practices in the early childhood education industry.
" required style="width: 100%;height:60px;margin-top:10px;"></textarea>
            </div>
        </div>
        
        <div>
            <a href="<?=ROOT?>/Manager/Home"><button class="btn" type="button">Back</button></a>
            <a href="<?=ROOT?>/Manager/Blog"><button class="btn" type="button" style="margin-left: 1270px;">Save</button></a>
        </div>    
        </form>
        
    <div class="Footer">
        <div class="KiddoVille">Kiddo<br />Ville</div>
        <div class="Group4">
          <div class="Home"><a href="#home">Home</a></div>
          <div class="AboutUs"><a href="#about-us">About Us</a></div>
          <div class="ContactUs"><a href="#contact-us">Contact Us</a></div>
          <div class="Features"><a href="#features">Features</a></div>
        </div>
        <div class="Group5">
          <div class="Contact"><a href="#contact">Contact</a></div>
          <div class="Address"><a href="#address">Address</a></div>
        </div>
        <div class="Group6">
          <div class="Contact"><a href="#contact">Contact</a></div>
          <div class="Address"><a href="#address">Address</a></div>
        </div>
        <div class="Group7">
          <div class="Frame13">
            <button class="Join">Join US Today</button>
          </div>
          <div class="Enrol">Enrol now to kickstart the childhood journey</div>
        </div>
        <div class="Line6"></div>
        <div class="cuddlecorner-rights-reserved">©2024 KIDDOVILLE. All rights reserved.</div>
        <div class="Group8">
          <a href="https://www.facebook.com" class="SocialIcons" target="_blank" rel="noopener noreferrer"
            style="text-decoration: none;">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.twitter.com" class="SocialIcons" target="_blank" rel="noopener noreferrer"
            style="text-decoration: none;">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.linkedin.com" class="SocialIcons" target="_blank" rel="noopener noreferrer"
            style="text-decoration: none;">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://www.youtube.com" class="SocialIcons" target="_blank" rel="noopener noreferrer"
            style="text-decoration: none;">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
</body>

</html>
