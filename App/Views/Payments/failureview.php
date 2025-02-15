<html>
<head>
    <title>Payment Failed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
        }
        .container .icon {
            font-size: 50px;
            color: #F44336;
        }
        .container h1 {
            font-size: 24px;
            margin: 20px 0;
            color: #333;
        }
        .container p {
            font-size: 16px;
            color: #666;
            margin: 10px 0;
        }
        .container .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #F44336;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .container .btn:hover {
            background-color: #e53935;
        }
        .container .btn-secondary {
            background-color: #9E9E9E;
            margin-left: 10px;
        }
        .container .btn-secondary:hover {
            background-color: #757575;
        }
        .details {
            text-align: left;
            margin-top: 20px;
        }
        .details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <i class="fas fa-times-circle"></i>
        </div>
        <h1>Payment Failed</h1>
        <p>Unfortunately, your transaction could not be completed.</p>
        <p>Please try again or contact customer support for assistance.</p>
        <div class="details">
            <h2>Payment Details</h2>
            <p><strong>Transaction ID:</strong> 1234567890</p>
            <p><strong>Amount:</strong> $99.99</p>
            <p><strong>Payment Method:</strong> Credit Card (Visa)</p>
            <p><strong>Date:</strong> October 1, 2023</p>
        </div>
        <a href="/retry-payment" class="btn">Retry Payment</a>
        <a href="/previous-page" class="btn btn-secondary">Go Back</a>
    </div>
</body>
</html>