<html>

<head>
    <title>
        KIDDO VILLE Food Plan
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Header.css" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Food-table.css?v=<?= time() ?>" />
    <link rel="stylesheet" href="<?= CSS ?>/Manager/Home.css?v=<?= time() ?>">
    <script src="<?= JS ?>/Manager/foodtable.js"></script>
    <script src="<?= JS ?>/Manager/profileview.js"></script>
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <h2 style="margin-top: 10px;font-size:25px;">KIDDO VILLE</h2>
            <ul>
                <li class="hover-effect unselected">
                    <a href="<?= ROOT ?>/Manager/Home" style="font-size: 18px;margin-left:10%">
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
                        <a href="<?= ROOT ?>/Manager/Packages"><i class="fas fa-box"></i> Packages</a>
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="<?= ROOT ?>/Manager/Problem"><i class="fa fa-exclamation-triangle"></i>Problems</a>
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
                        <a href="<?= ROOT ?>/Manager/Event" style="font-size: 18px;">
                            <i class="fa fa-calendar-plus"></i>Event
                    </li>
                </ul>
                <ul>
                    <li class="selected">
                        <a href="<?= ROOT ?>/Manager/Foodtable" style="font-size: 18px;">
                            <i class="fa fa-pizza-slice"></i>Food Plane
                    </li>
                </ul>
                <ul>
                    <li class="hover-effect unselected">
                        <a href="#" style="font-size: 18px;">
                            <i class="fas fa-info-circle"></i>Info
                        </a>
                        <ul class="dropdown">
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Blog"><i class="fas fa-blog"></i>Blog</a></li>
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Aboutus"><i class="fas fa-info-circle"></i>About Us</a></li>
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Contactus"><i class="fas fa-envelope"></i>Contact Us</a></li>
                            <li><a style="font-size: 16px;" href="<?= ROOT ?>/Manager/Profile"><i class="fas fa-user-circle"></i>Home</a></li>

                        </ul>
                    </li>
                </ul>

            </ul>
        </div>

        <div class="sub-container">
            <div class="header">
                <div class="name">
                    <h1>Hey Namal</h1>
                    <p style="color: white;">Let’s do some productive activities today</p>
                </div>
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                    <i class="fa fa-times clear-btn" style="margin-right: 10px;"></i>
                </div> -->
                <!-- <div class="bell-icon" style="cursor: pointer;">
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
                </div> -->

                <!-- <div class="message-numbers">
                    <p> 2</p>
                </div> -->
                <div class="profile">
                    <button class="profilebtn" onclick="handleClick()">
                        <i class="fas fa-user-circle" style="margin-left: 10px;"></i>
                    </button>
                </div>
                <div class="profile-card" id="profileCard">
                    <button class="back" onclick="handleHide()"><i class="fas fa-chevron-left"></i></button>
                    <img alt="Profile picture of Thilina Perera" height="100" src="../Assets/shimhan.jpg" width="100" class="profile" />
                    <h2>
                        Thilina Perera
                    </h2>
                    <p>
                        ID    RS0110657
                    </p>
                    <button class="profile-button">
                        Personal info
                    </button>
                    <button class="secondary-button">
                        Change Password
                    </button>
                    <button class="logout-button">
                        LogOut
                    </button>
                </div>
            </div>
            <div class="title">
                KIDDO VILLE Food plan
            </div>
            <div class="navigation">
                <span class="datebutton" onclick="changeDate('prev')">&lt;</span>
                <span class="date-display" id="dateRange">Aug 04, 2024 - Aug 06, 2024</span>
                <span class="datebutton" onclick="changeDate('next')">&gt;</span>
            </div>
            <div class="table-container">
                <table id="foodtable">
                    <tr>
                        <th style="background-color:#f5f5f5; border:none">
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader1">Aug 04, 2024</span>
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader2">Aug 05, 2024</span>
                        </th>
                        <th>
                            <span class="date-display" id="dateHeader3">Aug 06, 2024</span>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Breakfast
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">StringHoppers+CoconutSambol+PotatoCurr</option>
                                <option value="">Milk Rice+Seeni Sambol</option>
                                <option value="">Hoppers+SpicyOnionSambol+CoconutMilk</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected> Select the Food</option>
                                <option value="">PlainRoti+DhalCurry+CoconutSambol</option>
                                <option value="">Pittu+CoconutMilk+FishCurry(or vegcurry)</option>
                                <option value="">PolRoti(CoconutRoti)+KattaSambol+Banana</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Bread + Butter+Lunu Miris + Scrambled Egg</option>
                                <option value="">StringHoppers+KiriHodhi+Dhal</option>
                                <option value="">Rice + Polos Curry+Coconut Sambol</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">StringHoppers+CoconutSambol+PotatoCurr</option>
                                <option value="">Milk Rice+Seeni Sambol</option>
                                <option value="">Hoppers+SpicyOnionSambol+CoconutMilk</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected> Select the Food</option>
                                <option value="">PlainRoti+DhalCurry+CoconutSambol</option>
                                <option value="">Pittu+CoconutMilk+FishCurry(or vegcurry)</option>
                                <option value="">PolRoti(CoconutRoti)+KattaSambol+Banana</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Bread + Butter+Lunu Miris + Scrambled Egg</option>
                                <option value="">StringHoppers+KiriHodhi+Dhal</option>
                                <option value="">Rice + Polos Curry+Coconut Sambol</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">StringHoppers+CoconutSambol+PotatoCurr</option>
                                <option value="">Milk Rice+Seeni Sambol</option>
                                <option value="">Hoppers+SpicyOnionSambol+CoconutMilk</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected> Select the Food</option>
                                <option value="">PlainRoti+DhalCurry+CoconutSambol</option>
                                <option value="">Pittu+CoconutMilk+FishCurry(or vegcurry)</option>
                                <option value="">PolRoti(CoconutRoti)+KattaSambol+Banana</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Bread + Butter+Lunu Miris + Scrambled Egg</option>
                                <option value="">StringHoppers+KiriHodhi+Dhal</option>
                                <option value="">Rice + Polos Curry+Coconut Sambol</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Morning Tea time
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Bun + Milk Tea + Banana</option>
                                <option value="">Plain Cake + Orange Juice</option>
                                <option value="">Biscuits + Warm Milk + Apple Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Savory Puff Pastry + Lemon Tea</option>
                                <option value="">Sweet Bun + Mango Juice </option>
                                <option value="">Cupcake + Fresh Watermelon Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Milk Toffee + Herbal Tea</option>
                                <option value="">Bread And Butter+Jam + WarmMilk </option>
                                <option value="">Sandwiches(CheeseOrEgg)+IcedMilo</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Bun + Milk Tea + Banana</option>
                                <option value="">Plain Cake + Orange Juice</option>
                                <option value="">Biscuits + Warm Milk + Apple Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Savory Puff Pastry + Lemon Tea</option>
                                <option value="">Sweet Bun + Mango Juice </option>
                                <option value="">Cupcake + Fresh Watermelon Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Milk Toffee + Herbal Tea</option>
                                <option value="">Bread And Butter+Jam + WarmMilk </option>
                                <option value="">Sandwiches(CheeseOrEgg)+IcedMilo</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Bun + Milk Tea + Banana</option>
                                <option value="">Plain Cake + Orange Juice</option>
                                <option value="">Biscuits + Warm Milk + Apple Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Savory Puff Pastry + Lemon Tea</option>
                                <option value="">Sweet Bun + Mango Juice </option>
                                <option value="">Cupcake + Fresh Watermelon Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Milk Toffee + Herbal Tea</option>
                                <option value="">Bread And Butter+Jam + WarmMilk </option>
                                <option value="">Sandwiches(CheeseOrEgg)+IcedMilo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lunch
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Rice+Chicken Curry+Dhal Curry+Mallung</option>
                                <option value="">Rice+Fish Curry+Pumpkin Curry+Papadam</option>
                                <option value="">Rice+Dhal+Beetroot Curry+Coconut Sambol</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">YellowRice+ChickenFry+Salad+Potato</option>
                                <option value="">Rice+Soya MeatCurry+GotuKola+Dhal</option>
                                <option value="">Rice+FishAmbulThiyal+CabbageMall+Carrot</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">FriedRice+DeviledChicken+TomatoAndCucu</option>
                                <option value="">Rice+PolosCurry+Beans+CoconutSambol</option>
                                <option value="">Rice+EggCurry+SpinachCurry+BrinjalMoju</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Rice+Chicken Curry+Dhal Curry+Mallung</option>
                                <option value="">Rice+Fish Curry+Pumpkin Curry+Papadam</option>
                                <option value="">Rice+Dhal+Beetroot Curry+Coconut Sambol</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">YellowRice+ChickenFry+Salad+Potato</option>
                                <option value="">Rice+Soya MeatCurry+GotuKola+Dhal</option>
                                <option value="">Rice+FishAmbulThiyal+CabbageMall+Carrot</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">FriedRice+DeviledChicken+TomatoAndCucu</option>
                                <option value="">Rice+PolosCurry+Beans+CoconutSambol</option>
                                <option value="">Rice+EggCurry+SpinachCurry+BrinjalMoju</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Rice+Chicken Curry+Dhal Curry+Mallung</option>
                                <option value="">Rice+Fish Curry+Pumpkin Curry+Papadam</option>
                                <option value="">Rice+Dhal+Beetroot Curry+Coconut Sambol</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">YellowRice+ChickenFry+Salad+Potato</option>
                                <option value="">Rice+Soya MeatCurry+GotuKola+Dhal</option>
                                <option value="">Rice+FishAmbulThiyal+CabbageMall+Carrot</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">FriedRice+DeviledChicken+TomatoAndCucu</option>
                                <option value="">Rice+PolosCurry+Beans+CoconutSambol</option>
                                <option value="">Rice+EggCurry+SpinachCurry+BrinjalMoju</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Evening Tea time
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Bun + Milk Tea + Banana</option>
                                <option value="">Plain Cake + Orange Juice</option>
                                <option value="">Biscuits + Warm Milk + Apple Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Savory Puff Pastry + Lemon Tea</option>
                                <option value="">Sweet Bun + Mango Juice </option>
                                <option value="">Cupcake + Fresh Watermelon Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Milk Toffee + Herbal Tea</option>
                                <option value="">Bread And Butter+Jam + WarmMilk </option>
                                <option value="">Sandwiches(CheeseOrEgg)+IcedMilo</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Bun + Milk Tea + Banana</option>
                                <option value="">Plain Cake + Orange Juice</option>
                                <option value="">Biscuits + Warm Milk + Apple Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Savory Puff Pastry + Lemon Tea</option>
                                <option value="">Sweet Bun + Mango Juice </option>
                                <option value="">Cupcake + Fresh Watermelon Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Milk Toffee + Herbal Tea</option>
                                <option value="">Bread And Butter+Jam + WarmMilk </option>
                                <option value="">Sandwiches(CheeseOrEgg)+IcedMilo</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Bun + Milk Tea + Banana</option>
                                <option value="">Plain Cake + Orange Juice</option>
                                <option value="">Biscuits + Warm Milk + Apple Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Savory Puff Pastry + Lemon Tea</option>
                                <option value="">Sweet Bun + Mango Juice </option>
                                <option value="">Cupcake + Fresh Watermelon Slices</option>
                            </select>
                            <br>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Milk Toffee + Herbal Tea</option>
                                <option value="">Bread And Butter+Jam + WarmMilk </option>
                                <option value="">Sandwiches(CheeseOrEgg)+IcedMilo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dinner(For 24 hours service)
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">String Hoppers+Coconut Sambol+Fish Curry</option>
                                <option value="">Plain Roti + Dhal Curry + Potato Fry</option>
                                <option value="">Hoppers + Coconut Milk+Seeni Sambol</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Pittu + Coconut Milk + Chicken Curry</option>
                                <option value="">Milk Rice (Kiribath) +Katta Sambol + Banana</option>
                                <option value="">Rice + Egg Curry + Gotu Kola Sambol </option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">FriedRice+SoySauceFriedVegetab+Omelette</option>
                                <option value="">Rice + Pumpkin Curry + Dhal + Papadam</option>
                                <option value="">Roti + Fish Cutlet + Coconut Sambol</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">String Hoppers+Coconut Sambol+Fish Curry</option>
                                <option value="">Plain Roti + Dhal Curry + Potato Fry</option>
                                <option value="">Hoppers + Coconut Milk+Seeni Sambol</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Pittu + Coconut Milk + Chicken Curry</option>
                                <option value="">Milk Rice (Kiribath) +Katta Sambol + Banana</option>
                                <option value="">Rice + Egg Curry + Gotu Kola Sambol </option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">FriedRice+SoySauceFriedVegetab+Omelette</option>
                                <option value="">Rice + Pumpkin Curry + Dhal + Papadam</option>
                                <option value="">Roti + Fish Cutlet + Coconut Sambol</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">String Hoppers+Coconut Sambol+Fish Curry</option>
                                <option value="">Plain Roti + Dhal Curry + Potato Fry</option>
                                <option value="">Hoppers + Coconut Milk+Seeni Sambol</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">Pittu + Coconut Milk + Chicken Curry</option>
                                <option value="">Milk Rice (Kiribath) +Katta Sambol + Banana</option>
                                <option value="">Rice + Egg Curry + Gotu Kola Sambol </option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Food</option>
                                <option value="">FriedRice+SoySauceFriedVegetab+Omelette</option>
                                <option value="">Rice + Pumpkin Curry + Dhal + Papadam</option>
                                <option value="">Roti + Fish Cutlet + Coconut Sambol</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="title">
                KIDDO VILLE SNACK PLAN
            </div>
            <div class="table-container">
                <table id="snacktable">
                    <tr>
                        <th style="background-color: #f5f5f5;border:none">
                        </th>
                        <th>
                            <span class="date-display" id="snackDateHeader1">Aug 04, 2024</span>
                        </th>
                        <th>
                            <span class="date-display" id="snackDateHeader2">Aug 05, 2024</span>
                        </th>
                        <th>
                            <span class="date-display" id="snackDateHeader3">Aug 06, 2024</span>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Breakfast
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Yogurt Parfait</option>
                                <option value="">Peanut Butter Banana Toast</option>
                                <option value="">Avocado Toast</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Fruit and Nut Energy Bites</option>
                                <option value="">Cheese and Crackers</option>
                                <option value="">Hard-Boiled Eggs</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Oatmeal Cups</option>
                                <option value="">Mini Breakfast Burritos</option>
                                <option value="">Muffins</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Yogurt Parfait</option>
                                <option value="">Peanut Butter Banana Toast</option>
                                <option value="">Avocado Toast</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Fruit and Nut Energy Bites</option>
                                <option value="">Cheese and Crackers</option>
                                <option value="">Hard-Boiled Eggs</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Oatmeal Cups</option>
                                <option value="">Mini Breakfast Burritos</option>
                                <option value="">Muffins</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Yogurt Parfait</option>
                                <option value="">Peanut Butter Banana Toast</option>
                                <option value="">Avocado Toast</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Fruit and Nut Energy Bites</option>
                                <option value="">Cheese and Crackers</option>
                                <option value="">Hard-Boiled Eggs</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Oatmeal Cups</option>
                                <option value="">Mini Breakfast Burritos</option>
                                <option value="">Muffins</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lunch
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Hummus and Veggies</option>
                                <option value="">Turkey and Cheese Roll-Ups</option>
                                <option value="">Caprese Skewers</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Quinoa Salad</option>
                                <option value="">Pita Bread with Tzatziki</option>
                                <option value="">Mini Quesadillas</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Rice Cakes with Avocado</option>
                                <option value="">Sushi Rolls</option>
                                <option value="">Fruit and Nut Snack Box</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Hummus and Veggies</option>
                                <option value="">Turkey and Cheese Roll-Ups</option>
                                <option value="">Caprese Skewers</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Quinoa Salad</option>
                                <option value="">Pita Bread with Tzatziki</option>
                                <option value="">Mini Quesadillas</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Rice Cakes with Avocado</option>
                                <option value="">Sushi Rolls</option>
                                <option value="">Fruit and Nut Snack Box</option>
                            </select>
                        </td>

                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Hummus and Veggies</option>
                                <option value="">Turkey and Cheese Roll-Ups</option>
                                <option value="">Caprese Skewers</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Quinoa Salad</option>
                                <option value="">Pita Bread with Tzatziki</option>
                                <option value="">Mini Quesadillas</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Rice Cakes with Avocado</option>
                                <option value="">Sushi Rolls</option>
                                <option value="">Fruit and Nut Snack Box</option>
                            </select>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dinner(For 24 hours service)
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Hummus and Veggies</option>
                                <option value="">Vegetable Fried Rice</option>
                                <option value="">Fish or Chicken Roll</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Pumpkin and Lentil Stew</option>
                                <option value="">Stuffed Bell Peppers</option>
                                <option value="">Coconut and Vegetable Kottu</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Dhal and Vegetable Fritters</option>
                                <option value="">Pasta Salad</option>
                                <option value="">Sweet Potato Mash</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Hummus and Veggies</option>
                                <option value="">Vegetable Fried Rice</option>
                                <option value="">Fish or Chicken Roll</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Pumpkin and Lentil Stew</option>
                                <option value="">Stuffed Bell Peppers</option>
                                <option value="">Coconut and Vegetable Kottu</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Dhal and Vegetable Fritters</option>
                                <option value="">Pasta Salad</option>
                                <option value="">Sweet Potato Mash</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Hummus and Veggies</option>
                                <option value="">Vegetable Fried Rice</option>
                                <option value="">Fish or Chicken Roll</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Pumpkin and Lentil Stew</option>
                                <option value="">Stuffed Bell Peppers</option>
                                <option value="">Coconut and Vegetable Kottu</option>
                            </select>
                            <br />
                            <select name="" id="selectfood">
                                <option value="" disabled selected>Select the Snack</option>
                                <option value="">Dhal and Vegetable Fritters</option>
                                <option value="">Pasta Salad</option>
                                <option value="">Sweet Potato Mash</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="button-row">
                <button class="reset-button" onclick="resetSelects()">Reset</button>
            </div>
        </div>






    </div>

    <script>
        // Store the initial state of the table rows globally when the page loads
        function resetSelects() {
            // Select all <select> elements within both tables
            const selects = document.querySelectorAll("#foodtable select, #snacktable select");
            // Reset each <select> to its default (first) option
            selects.forEach(select => select.selectedIndex = 0);
        }
        //save all select values to local storage
        function saveValues() {
            const inputs = document.querySelectorAll("select");

            //iterate over each element and save its value in local storage
            inputs.forEach((element) => {
                localStorage.setItem(element.id, element.value)
            });
        }
        //load values from local storage for all selects

        function loadValues() {
            const inputs = document.querySelectorAll("select");
            inputs.forEach((element) => {
                element.value = localStorage.getItem(element.id);
            });
        }

        // Clear all stored values for inputs and selects
        function clearStorage() {
            const inputs = document.querySelectorAll("select");

            inputs.forEach((element) => {
                localStorage.removeItem(element.id);
                element.value = ""; // Clear the field in the UI as well
            });
        }

        // Event listener for each input and select to save values on change
        document.querySelectorAll("select").forEach((element) => {
            element.addEventListener("change", saveValues);
        });

        // Load saved values when the page loads
        window.onload = loadValues;
    </script>
</body>

</html>