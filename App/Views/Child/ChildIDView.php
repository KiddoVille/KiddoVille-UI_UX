<html>

<head>
    <title>
        ID Card
    </title>
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .id-card {
            width: 300px;
            height: 500px;
            background-color: #0275d8;
            color: white;
            text-align: center;
            border-radius: 10px;
            padding: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .id-card .header {
            background-color: white;
            color: #0275d8;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .id-card .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .id-card .header h2 {
            margin: 5px 0 0 0;
            font-size: 16px;
            font-weight: normal;
        }

        .id-card .content {
            padding: 20px;
        }

        .id-card img {
            width: 160px;
            height: 160px;
            border: 5px solid white;
            margin-bottom: 10px;
        }

        .id-card h2 {
            margin: 10px 0 5px 0;
            font-size: 18px;
        }

        .id-card p {
            margin: 0;
            font-size: 16px;
        }

        .id-card .info {
            background-color: #025aa5;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }

        .id-card .info p {
            margin: 5px 0;
            font-size: 16px;
        }

        .id-card .info p span {
            font-weight: bold;
        }

        .id-card .website {
            background-color: white;
            margin-top: 20px;
            font-size: 16px;
            padding: 20px 50px;
            margin-left: -20px;
            margin-right: -20px;
            margin-bottom: -30px !important;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .id-card .website a {
            color:#025aa5;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="id-card">
        <div class="header">
            <h1>
                KIDDO VILLE
            </h1>
            <h2>
                CHILD ID CARD
            </h2>
        </div>
        <div class="content">
            <img alt="Portrait of the child" src="https://storage.googleapis.com/a1aa/image/LRD5K5nU0yZ6MpvwNnL0SlPsQ86iZfHNeDtv36NNZKAs5C6TA.jpg" />
            <h2>
                Jane Doe
            </h2>
            <p>
                Age: 4
            </p>
            <div class="info">
                <p>
                    <span>
                        ID NO:
                    </span>
                    DC12345
                </p>
                <p>
                    <span>
                        CONTACT:
                    </span>
                    0714810928
                </p>
            </div>
            <div class="website">
                <a href="http://localhost/MVC/Public/Main/Home">www.KiddoVille.com</a>
            </div>
        </div>
    </div>
</body>

</html>
