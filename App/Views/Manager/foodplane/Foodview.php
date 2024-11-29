<html>

<head>
    <title>
        KIDDO VILLE Food Plan
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=CSS?>/Manager/Food-table.css" />
    <link rel="icon" href="<?=CSS?>/Manager/KIDDOVILLE_LOGO.jpg">
    <script src="<?=JS?>foodtable.js"></script>
</head>

<body>
    <div class="container">
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
                            <option value=""disabled selected>Select the Snack</option>
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
                            <option value=""disabled selected>Select the Snack</option>
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
                            <option value=""disabled selected>Select the Snack</option>
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
                            <option value=""disabled selected>Select the Snack</option>
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
                            <option value=""disabled selected>Select the Snack</option>
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
                            <option value=""disabled selected>Select the Snack</option>
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
                            <option value="" disabled  selected>Select the Snack</option>
                            <option value="">Yogurt Parfait</option>
                            <option value="">Peanut Butter Banana Toast</option>
                            <option value="">Avocado Toast</option>
                        </select>
                        <br />
                        <select name="" id="selectfood">
                            <option value=""disabled selected>Select the Snack</option>
                            <option value="">Fruit and Nut Energy Bites</option>
                            <option value="">Cheese and Crackers</option>
                            <option value="">Hard-Boiled Eggs</option>
                        </select>
                        <br />
                        <select name="" id="selectfood">
                            <option value="" disabled  selected>Select the Snack</option>
                            <option value="">Oatmeal Cups</option>
                            <option value="">Mini Breakfast Burritos</option>
                            <option value="">Muffins</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="selectfood">
                            <option value="" disabled  selected>Select the Snack</option>
                            <option value="">Yogurt Parfait</option>
                            <option value="">Peanut Butter Banana Toast</option>
                            <option value="">Avocado Toast</option>
                        </select>
                        <br />
                        <select name="" id="selectfood">
                            <option value=""disabled selected>Select the Snack</option>
                            <option value="">Fruit and Nut Energy Bites</option>
                            <option value="">Cheese and Crackers</option>
                            <option value="">Hard-Boiled Eggs</option>
                        </select>
                        <br />
                        <select name="" id="selectfood">
                            <option value="" disabled  selected>Select the Snack</option>
                            <option value="">Oatmeal Cups</option>
                            <option value="">Mini Breakfast Burritos</option>
                            <option value="">Muffins</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="selectfood">
                            <option value="" disabled  selected>Select the Snack</option>
                            <option value="">Yogurt Parfait</option>
                            <option value="">Peanut Butter Banana Toast</option>
                            <option value="">Avocado Toast</option>
                        </select>
                        <br />
                        <select name="" id="selectfood">
                            <option value=""disabled selected>Select the Snack</option>
                            <option value="">Fruit and Nut Energy Bites</option>
                            <option value="">Cheese and Crackers</option>
                            <option value="">Hard-Boiled Eggs</option>
                        </select>
                        <br />
                        <select name="" id="selectfood">
                            <option value="" disabled  selected>Select the Snack</option>
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
            <a class="back-button" href="<?=ROOT?>/Manager/Home">
                Back
            </a>
            <button class="reset-button" onclick="resetSelects()">Reset</button>
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
        function  saveValues() {
            const inputs = document.querySelectorAll("select");

            //iterate over each element and save its value in local storage
            inputs.forEach((element) => {
                localStorage.setItem(element.id, element.value)
            });
        }
        //load values from local storage for all selects

        function loadValues(){
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