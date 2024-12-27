<!DOCTYPE html>
<html>

<head>
    <title>Payment Statement</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .header .details {
            flex-grow: 1;
            margin-left: 20px;
        }

        .header .details h1 {
            margin: 0;
            font-size: 24px;
        }

        .header .details p {
            margin: 5px 0;
            color: #666;
        }

        .cards-container {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: repeat(3, 1fr);
            /* Adjusts columns dynamically */
            gap: 20px;
            /* Space between grid items */
            justify-content: center;
            /* Centers the grid as a whole */
            align-items: center;
            /* Vertically centers items */
            justify-items: center;
            /* Horizontally centers individual items in their grid cells */
        }

        .card {
            display: flex;
            align-items: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
            height: 160px;
        }

        .card img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }

        .card .child-details {
            flex-grow: 1;
        }

        .card .child-details h2 {
            margin: 0;
            font-size: 20px;
        }

        .card .child-details p {
            margin: 5px 0;
            color: #666;
        }

        .card-buttons {
            display: flex;
            gap: 10px;
        }

        .card-buttons button {
            padding: 10px 15px;
            font-size: 14px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            margin-bottom: -25px;
            margin-left: 163px;
            margin-right: -20px;
        }

        .card-buttons button:hover {
            background-color: #0056b3;
        }

        .footer-total,
        .cost-details {
            margin-top: 20px;
        }

        .footer-total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
        }

        .button-container {
            text-align: right;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }

        .cost-details {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .cost-details h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .cost-details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cost-details li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .cost-details li:last-child {
            border-bottom: none;
        }

        .cost-details .date {
            flex: 1;
            color: #666;
            font-size: 0.9em;
        }

        .cost-details .description {
            flex: 2;
            text-align: left;
            font-weight: bold;
            color: #333;
        }

        .cost-details .child {
            flex: 2;
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .cost-details .amount {
            flex: 1;
            text-align: right;
            color: #4caf50;
            font-weight: bold;
        }

        .red{
            color: red !important;
        }

        @media (max-width: 768px) {
            .card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .card img {
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="details">
                <h1>Parent Name: John Doe</h1>
                <p>Week: 1st - 7th January 2023</p>
                <p>Details: Payment for childcare services</p>
            </div>
            <img src="https://storage.googleapis.com/a1aa/image/D0WU9tZEHUY4JJuPgtzrYENJ7MLboQMmofkEUVQo9alsJieTA.jpg" alt="Photo of John Doe" />
        </div>

        <div class="cards-container">
            <!-- Card Template -->
            <div class="card">
                <img src="https://storage.googleapis.com/a1aa/image/CZPxUXerpEUIBiJLs3egevwGpVz03VENO8e2TYQfAzNHciofE.jpg" alt="Photo of Alex Doe" />
                <div class="child-details">
                    <h2>Child Name: Alex Doe</h2>
                    <p>Childcare: $50</p>
                    <p>Food: $30</p>
                    <p>Snacks: $20</p>
                    <p>Total for Alex: <strong>$100</strong></p>
                    <div class="card-buttons">
                        <button onclick="window.location.href='<?=ROOT?>/Child/PaymentSheet'">View Report</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://storage.googleapis.com/a1aa/image/CZPxUXerpEUIBiJLs3egevwGpVz03VENO8e2TYQfAzNHciofE.jpg" alt="Photo of Alex Doe" />
                <div class="child-details">
                    <h2>Child Name: Alex Doe</h2>
                    <p>Childcare: $50</p>
                    <p>Food: $30</p>
                    <p>Snacks: $20</p>
                    <p>Total for Alex: <strong>$100</strong></p>
                    <div class="card-buttons">
                        <button onclick="window.location.href='<?=ROOT?>/Child/PaymentSheet'">View Report</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://storage.googleapis.com/a1aa/image/CZPxUXerpEUIBiJLs3egevwGpVz03VENO8e2TYQfAzNHciofE.jpg" alt="Photo of Alex Doe" />
                <div class="child-details">
                    <h2>Child Name: Alex Doe</h2>
                    <p>Childcare: $50</p>
                    <p>Food: $30</p>
                    <p>Snacks: $20</p>
                    <p>Total for Alex: <strong>$100</strong></p>
                    <div class="card-buttons">
                        <button onclick="window.location.href='<?=ROOT?>/Child/PaymentSheet'">View Report</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://storage.googleapis.com/a1aa/image/CZPxUXerpEUIBiJLs3egevwGpVz03VENO8e2TYQfAzNHciofE.jpg" alt="Photo of Alex Doe" />
                <div class="child-details">
                    <h2>Child Name: Alex Doe</h2>
                    <p>Childcare: $50</p>
                    <p>Food: $30</p>
                    <p>Snacks: $20</p>
                    <p>Total for Alex: <strong>$100</strong></p>
                    <div class="card-buttons">
                        <button onclick="window.location.href='<?=ROOT?>/Child/PaymentSheet'">View Report</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://storage.googleapis.com/a1aa/image/CZPxUXerpEUIBiJLs3egevwGpVz03VENO8e2TYQfAzNHciofE.jpg" alt="Photo of Alex Doe" />
                <div class="child-details">
                    <h2>Child Name: Alex Doe</h2>
                    <p>Childcare: $50</p>
                    <p>Food: $30</p>
                    <p>Snacks: $20</p>
                    <p>Total for Alex: <strong>$100</strong></p>
                    <div class="card-buttons">
                        <button onclick="window.location.href='<?=ROOT?>/Child/PaymentSheet'">View Report</button>
                    </div>
                </div>
            </div>
            <!-- End of Card Template -->
        </div>

        <div class="cost-details">
            <h3>Cost Breakdown:</h3>
            <ul>
                <li>
                    <span class="date">12/12/2024</span>
                    <span class="child"> Child</span>
                    <span class="description"> Reservation</span>
                    <span class="amount">$50</span>
                </li>
                <li>
                    <span class="date">12/12/2024</span>
                    <span class="child"> Child</span>
                    <span class="description">Food charge</span>
                    <span class="amount">$30</span>
                </li>
                <li>
                    <span class="date">12/12/2024</span>
                    <span class="child"> Child</span>
                    <span class="description">Snacks charge</span>
                    <span class="amount">$20</span>
                </li>
                <li>
                    <span class="date">12/12/2024</span>
                    <span class="child"> Child</span>
                    <span class="description">Reservation Cancelation</span>
                    <span class="amount red">$20</span>
                </li>
            </ul>
        </div>

        <div class="footer-total" style="margin-right: 300px;">
            Final Total: <strong>$550</strong>
        </div>

        <div class="button-container">
            <button> Download </button>
            <button>Pay Now</button>
        </div>
    </div>
</body>

</html>