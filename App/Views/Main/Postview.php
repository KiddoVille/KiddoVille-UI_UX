<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title> post </title>
    <link rel="icon" href="<?=IMAGE?>/logo_light-remove.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet" href="<?=CSS?>/Teacher/home.css?v=<?= time() ?>" />
    <link rel="stylesheet" href="<?=CSS?>/Teacher/variables.css?v=<?= time() ?>" />
    <link rel="stylesheet" href="<?=CSS?>/Main/Footer.css?v=<?= time() ?>" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .header img {
            height: 40px;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-weight: 700;
        }

        .article-title {
            font-size: 24px;
            font-weight: 700;
            margin: 20px 0;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #777;
            font-size: 14px;
        }

        .article-meta i {
            color: #007BFF;
        }

        .article-content img {
            width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .article-content p {
            line-height: 1.6;
            margin: 20px 0;
        }

        .quote {
            background-color: #f0f0f0;
            padding: 20px;
            border-left: 5px solid #007BFF;
            margin: 20px 0;
            font-style: italic;
        }

        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body style="background:url(<?=IMAGE?>/back-login.jpg); background-size:cover; ">
<div class="navbar">
                <div class="navbar-logo">
                    <img src="<?=IMAGE?>/Header logo.png" alt="Logo" style="height:80px ; width:100px" />
                </div>
                <div class="navbar-links">
                    <a style="color:#10639a !important;" href="<?=ROOT?>/Main/Landing"><div class="navbar-link select">Home</div></a>
                    <a style="color:#10639a !important;" href="<?=ROOT?>/Main/Profile"><div class="navbar-link">Profile</div></a>
                    <a style="color:#10639a !important;" href="<?=ROOT?>/Main/Blog"> <div class="navbar-link">Blog</div></a>
                    <a style="color:#10639a !important;" href="<?=ROOT?>/Main/AboutUs"><div class="navbar-link">AboutUs</div></a>
                    <a style="color:#10639a !important;" href="<?=ROOT?>/Main/Help"><div class="navbar-link">ContactUs</div></a>
                </div>
                <div class="sign-up-buttons">
                    <a href="<?=ROOT?>/Main/Login"><div class="navbar-link-login">Login</div></a>
                    <a href="<?=ROOT?>/Main/Signup"><div class="navbar-link-signup">Sign Up</div></a>
                </div>
            </div>
    <div class="container">
        <article>
            <h1 class="article-title">
                The Impact of Technology on the Workplace: How Technology is Changing
            </h1>
            <div class="article-meta">
                <i class="fas fa-calendar-alt">
                </i>
                <span>
                    March 15, 2023
                </span>
                <i class="fas fa-user">
                </i>
                <span>
                    John Doe
                </span>
            </div>
            <div class="article-content">
                <img alt="A beautiful view of a castle at sunset with a river in the foreground." height="400" src="https://storage.googleapis.com/a1aa/image/cOVnO3FYClY6ApxuI4fwQowdhPEy7NWfDe4cjURV2Xjlho1nA.jpg" width="800" />
                <p>
                    Traveling is an incredible experience that opens up new horizons, exposes us to different cultures, and creates lasting memories. Whether you're a seasoned traveler or planning your first trip, there are always new tips and tricks to make your journey more enjoyable. In this article, we'll explore some essential travel tips that can help you make the most of your adventures.
                </p>
                <h2>
                    Research Your Destination
                </h2>
                <p>
                    Before you embark on your journey, it's important to research your destination. This includes understanding the local customs, traditions, and laws. Knowing a few basic phrases in the local language can also go a long way in making your trip smoother and more enjoyable.
                </p>
                <p>
                    Additionally, research the weather conditions and pack accordingly. An unexpected rainstorm or heatwave can put a damper on your plans if you're not prepared. Check the local news and travel advisories for any safety concerns or travel restrictions.
                </p>
                <h2>
                    Plan Your Itinerary
                </h2>
                <p>
                    Having a well-thought-out itinerary can help you organize your trip and maximize your time. Make a list of the must-see attractions and activities, but also leave some room for spontaneity. Sometimes the best experiences come from unplanned adventures.
                </p>
                <p>
                    When planning your itinerary, consider the logistics of getting from one place to another. Research public transportation options, rental car services, and the best routes to take. This will save you time and reduce stress during your trip.
                </p>
                <div class="quote">
                    "Traveling – it leaves you speechless, then turns you into a storyteller." – Ibn Battuta
                </div>
                <img alt="A person standing in front of a window overlooking a beautiful sunset landscape." height="400" src="https://storage.googleapis.com/a1aa/image/e5vKii6A6ByCDKw27uoDNREGGdLy4AOTNhQ7kvjX9UTYIa9JA.jpg" width="800" />
                <h2>
                    Pack Lightly and Smartly
                </h2>
                <p>
                    Packing can be one of the most challenging aspects of travel, but it doesn't have to be. Start by making a packing list to ensure you don't forget any essentials. Pack versatile clothing that can be mixed and matched, and consider the climate of your destination.
                </p>
                <h2>
                    Stay Safe and Healthy
                </h2>
                <p>
                    Your health and safety should be a top priority while traveling. Make sure you have travel insurance that covers medical emergencies. Carry a basic first aid kit with band-aids, pain relievers, and any necessary prescription medications.
                </p>
                <p>
                    Stay hydrated, especially if you're traveling to a hot climate. Drink bottled water if the local water supply is questionable. Be cautious with street food and make sure it's cooked thoroughly to avoid foodborne illnesses.
                </p>
                <h2>
                    Immerse Yourself in the Local Culture
                </h2>
                <p>
                    One of the most rewarding aspects of travel is experiencing the local culture. Visit local markets, try traditional foods, and participate in cultural activities. Engage with the locals and learn about their way of life. This will enrich your travel experience and create meaningful connections.
                </p>
                <h2>
                    Capture Memories
                </h2>
                <p>
                    Don't forget to capture the moments that make your trip special. Take photos, keep a travel journal, or create a scrapbook. These memories will be cherished for years to come and will allow you to relive your adventures.
                </p>
                <h2>
                    Conclusion
                </h2>
                <p>
                    Traveling is an enriching experience that broadens our perspectives and creates lasting memories. By researching your destination, planning your itinerary, packing smartly, staying safe, immersing yourself in the local culture, and capturing memories, you can make the most of your travels. So, pack your bags, embark on new adventures, and let the journey begin!
                </p>
            </div>
        </article>
    </div>
    <div class="Footer" style="margin-left: 0px; padding: 0px 0px; margin-top: 20px;">
        <img class="Footer-logo" src="<?=IMAGE?>/Footer-logo.png" alt="WhatsApp Icon" />
        <div class="KiddoVille">Kiddo<br />Ville</div>
        <div class="Group4">
            <div class="Home"><a href="Home">Home</a></div>
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
        <!-- Social icons -->
        <div class="social-icons">
            <!-- twiiter icon -->
            <div class="socialcontainer">
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
            <!-- instagram icon -->
            <div class="socialcontainer">
                <div class="icon social-icon-2-2">
                    <svg fill="white" class="svgIcon" viewBox="0 0 448 512" height="1.5em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg>
                </div>
                <!-- Instagram icon effect-->
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
                <!-- facebook icon effect-->
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