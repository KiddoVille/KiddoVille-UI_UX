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
            text-align: center;
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

        .cost .amount {
            flex: 1;
            text-align: right;
            color: #4caf50;
            font-weight: bold;
        }

        .cost .description {
            flex: 0;
            text-align: left;
            font-weight: bold;
            color: #333;
            margin-left: -30px;
        }

        .cost-details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cost {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .cost h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .cost li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .cost li:last-child {
            border-bottom: none;
        }

        .red {
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
    <div class="container" style="margin-top: 70px;">
        <div class="header">
            <div class="details">
                <h1>Child Name: John Doe</h1>
                <p>Week: 1st - 7th January 2023</p>
                <p>Details: Payment for childcare services</p>
            </div>
            <img src="https://storage.googleapis.com/a1aa/image/D0WU9tZEHUY4JJuPgtzrYENJ7MLboQMmofkEUVQo9alsJieTA.jpg" alt="Photo of John Doe" />
        </div>

        <div style="display: flex; flex-direction: row;">
            <div class="cost-details" style="width: 500px;">
                <h3>Cost Breakdown:</h3>
                <ul>
                    <li>
                        <span class="date">12/12/2024</span>
                        <span class="description"> Reservation</span>
                        <span class="amount">$50</span>
                    </li>
                    <li>
                        <span class="date">12/12/2024</span>
                        <span class="description">Food charge</span>
                        <span class="amount">$30</span>
                    </li>
                    <li>
                        <span class="date">12/12/2024</span>
                        <span class="description">Snacks charge</span>
                        <span class="amount">$20</span>
                    </li>
                    <li>
                        <span class="date">12/12/2024</span>
                        <span class="description">Reservation Cancelation</span>
                        <span class="amount red">$20</span>
                    </li>
                </ul>
            </div>
            <div class="cost" style="width: 500px;">
                <h3>Cost Categorized:</h3>
                <ul>
                    <li>
                        <span class="description"> Package</span>
                        <span class="amount">$50</span>
                    </li>
                    <li>
                        <span class="description">Reservations</span>
                        <span class="amount">$30</span>
                    </li>
                    <li>
                        <span class="description">Snacks</span>
                        <span class="amount">$20</span>
                    </li>
                    <li>
                        <span class="description">Medical</span>
                        <span class="amount red">$20</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-total" style="margin-right: 40px; margin-top: 10px; margin-bottom: 40px;">
            Final Total: <strong>$550</strong>
        </div>

        <div class="button-container">
            <button> Download </button>
            <form id="pay-form" action="http://localhost/MVC/App/core/Payment.php" method="GET">
                <input type="hidden" name="total" id="total-input" value="500000" />
                <button type="submit" id="pay-now-button">Pay Now</button>
            </form>
        </div>
    </div>
</body>

</html>