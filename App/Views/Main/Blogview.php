<html>

<head>
    <title> Blog </title>
    <link rel="icon" href="<?IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/Main/Header.css">
    <link rel="stylesheet" href="<?=CSS?>/Main/Footer.css">
    <link rel="stylesheet" href="<?=CSS?>/Main/Blog.css">
</head>

<body style="background: url('http://localhost/MVC/Public/Assets/Images/blog-background.png') no-repeat top center, url('http://localhost/MVC/Public/Assets/Images/blog-background 2.png') no-repeat bottom center; ">
    <!-- Header structure -->
    <div class="navbar">
        <div class="navbar-logo">
            <img src="<?=IMAGE?>/Header logo.png" alt="Logo" style="height:80px ; width:100px" />
        </div>
        <div class="navbar-links">
            <a href="<?=ROOT?>/Main/Home"><button class="navbar-link">Home</button></a>
            <a href="<?=ROOT?>/Main/Profile"><button class="navbar-link">Profile</button></a>
            <a href="<?=ROOT?>/Main/Blog"> <button class="navbar-link select">Blog</button></a>
            <a href="<?=ROOT?>/Main/AboutUs"><button class="navbar-link">AboutUs</button></a>
            <a href="<?=ROOT?>/Main/Help"><button class="navbar-link">ContactUs</button></a>
            <a href="<?=ROOT?>/Main/Login"><button class="navbar-button login">Login</button></a>
            <a href="<?=ROOT?>/Main/Signup"><button class="navbar-button signup">Sign Up</button></a>
        </div>
    </div>
    <!-- Articles on we page -->
    <div class="container">
        <div class="header">
            <h1>
                All Articles
            </h1>
            <h2>
                2024 Early Learning Back to School Summit: ECE Best Practices
            </h2>
            <p class="date">
                <i class="fas fa-calendar-alt"></i> August 31, 2024
            </p>
        </div>

        <!-- Events of the daycare to enter images on the event -->
        <div class="events">
            <h3>
                Our Events
            </h3>
            <div class="event-list">
                <div class="event-item">
                    <img alt="Children playing sports"
                        src="https://storage.googleapis.com/a1aa/image/6xdsDjOa5y6sHtiKt5dbOfInhiouxfziq9yM4BETXbzanSmTA.jpg" />
                    <p>Sports Programs</p>
                </div>
                <div class="event-item">
                    <img alt="Children in an educational program"
                        src="https://storage.googleapis.com/a1aa/image/PX0HgJDFGvKTIFvcR4Z9DhZK48mZosIwNQCWyfy8AjjvTJzJA.jpg" />
                    <p>Educational Programs</p>
                </div>
                <div class="event-item">
                    <img alt="Cultural event with many people"
                        src="https://storage.googleapis.com/a1aa/image/HV24dTKDcsrfcqGfxieP9aE2c5WSmbngJhvOdyPRfq7ydKZOB.jpg" />
                    <p>Cultural Events</p>
                </div>
            </div>

            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

<!-- Articles on events  -->
        <div class="articles">
            <h3>
                Articles
            </h3>
            <div class="article-list">
                <div class="article-item">
                    <img alt="Management tips"
                        src="https://storage.googleapis.com/a1aa/image/uPXFsQ0xbiqZPx7GBNlKEKle7l34UtfJLEfR7fFuBcL1dKZOB.jpg" />
                    <p>Management tips</p>
                </div>
                <div class="article-item">
                    <img alt="Child development"
                        src="https://storage.googleapis.com/a1aa/image/FNgene62jFq0CUFw7lHK1OgaV2Wr8gMfeOfb8SoOO8xB8UycC.jpg" />
                    <p>Child development</p>
                </div>
                <div class="article-item">
                    <img alt="Group activities"
                        src="https://storage.googleapis.com/a1aa/image/BkOG01jx5SZkJVnTfKoFiTSu9TZTfLQRgUku7khVbokhnSmTA.jpg" />
                    <p>Group activities</p>
                </div>
            </div>

            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div>

        <div class="new-articles">
            <p>Every last week of the month we publish new articles</p>
            <a href="#">Sign Up</a>
        </div>

        <div class="border-image">
            <img src="<?=IMAGE?>/blog-border.png" alt="border">
        </div>

        <div class="footer=p">
            <p>
                Check out the KIDDO blog for your all-in-one source for everything you need to know about the building blocks of high-quality childcare! We cover the latest on early childhood education, childcare center management, family engagement, professional development, and more. Find the latest on trends, innovations, inspiration, and best practices in the early childhood education industry.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <div class="Footer">
        <img class="Footer-logo" src="<?=IMAGE?>/Footer-logo.png" alt="WhatsApp Icon" />
        <div class="KiddoVille">Kiddo<br/>Ville</div>
            <div class="Group4">
                <div class="Home"><a href="<?=ROOT?>/Main/Home">Home</a></div>
                <div class="AboutUs"><a href="<?=ROOT?>/Main/AboutUs">About Us</a></div>
                <div class="ContactUs"><a href="<?=ROOT?>/Main/Help">Contact Us</a></div>
                <div class="Features"><a href="<?=ROOT?>/Main/features">Features</a></div>
            </div>
            <div class="Group5">
                <div class="Contact"><a href="<?=ROOT?>/Main/FAQ">FAQ</a></div>
                <div style="white-space: nowrap;" class="Address"><a href="<?=ROOT?>/Main/Report">Report Problems</a></div>
                <div style="margin-top: 20px;" class="Address"><a href="<?=ROOT?>/Main/Terms">Terms</a></div>
            </div>
            <div class="Group6">
                <div class="Contact"><a href="<?=ROOT?>/Main/Blog">Blog</a></div>
                <div class="Address"><a href="<?=ROOT?>/Main/Profile">Profile</a></div>
                <div style="margin-top: 20px; white-space: nowrap;" class="Address"><a href="<?=ROOT?>/Main/Privacy">Privacy Policy</a></div>
            </div>
        <div class="Group7">
            <div class="Frame13">
                <button class="Join">Join US Today</button>
            </div>
            <div class="Enrol">Enrol now to kickstart the childhood journey</div>
        </div>
        <div class="Line6"></div>
        
        <!-- Social Icons -->
        <div class="social-icons">
            <div class="socialcontainer">
                <!-- twiiter icon -->
                <div class="icon social-icon-1-1">
                    <svg viewBox="0 0 512 512" height="1.7em" xmlns="http://www.w3.org/2000/svg" class="svgIcontwit"
                        fill="white">
                        <path fill="#ffffff"
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                        </path>
                    </svg>
                </div>
                <!-- twiiter icon effect-->
                <div class="social-icon-1">
                    <svg viewBox="0 0 512 512" height="1.7em" xmlns="http://www.w3.org/2000/svg" class="svgIcontwit"
                        fill="white">
                        <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="socialcontainer">
                <!-- instagram icon -->
                <div class="icon social-icon-2-2">
                    <svg fill="white" class="svgIcon" viewBox="0 0 448 512" height="1.5em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg>
                </div>
                <!-- instagram icon effect-->
                <div class="social-icon-2">
                    <svg fill="white" class="svgIcon" viewBox="0 0 448 512" height="1.5em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="socialcontainer">
                <!-- facebook icon -->
                <div class="icon social-icon-3-3">
                    <svg viewBox="0 0 384 512" fill="white" height="1.6em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z">
                        </path>
                    </svg>
                </div>
                <!-- facebook icon effect -->
                <div class="social-icon-3">
                    <svg viewBox="0 0 384 512" fill="white" height="1.6em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z">
                        </path>
                    </svg>
                </div>
            </div>
            <!-- Youtube icon -->
            <div class="socialcontainer">
                <div class="icon social-icon-4-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 256 180">
                        <path fill="white" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"></path>
                        <path fill="#144A78" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"></path>
                    </svg>            
                </div>
                <!-- Youtube icon effect-->
                <div class="social-icon-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 256 180">
                        <path fill="white" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"></path>
                        <path fill="red" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"></path>
                    </svg>            
                </div>
            </div>        
        </div>
    </div>
</body>

</html>
