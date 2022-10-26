<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>annuler</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #202225;
            color: white;
            padding: 10px 140px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        #main_page {
            background-color: #36393F;
            padding: 20px;
        }

        .first,
        .second {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .logo {
            font-size: 21px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
        }

        .setting {
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .setting_btn {
            color: white;
        }

        .second {
            margin-bottom: 10px;
        }

        .heading {
            font-size: 16px;
            margin-bottom: 15px;
            color: white;
        }

        .menu {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .btn a {
            text-decoration: none;
            padding: 6px 10px;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: white;
        }

        .btn a:last-child {
            background-color: #3BA55D;
        }

        .btn a:first-child {
            background-color: #D83C3E;
        }

        .btn a:hover {
            background-color: #202225;
            color: white;
        }

        .product {
            color: #50332B;
            width: 20%;
            padding: 10px;
            text-align: center;
            background-color: white;
            margin: 10px;
            box-shadow: rgba(0, 0, 0, 0.5) 0px 5px 15px;
            transition: .4s ease;
        }

        .product:hover {
            transform: scale(1.1);
        }

        h4 {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 15px;
        }

        h5 {
            font-size: 14px;
            color: green;
            font-weight: 500;
        }

        img {
            width: 65px;
            height: 80px;
            margin-bottom: 10px;
        }

        .reussie {
            background-color: #202225;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 21px;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .accueil {
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            color: white;
            margin-right: 15px;
            transition: .4s ease;
        }

        .accueil:hover {
            color: #3BA55D;
        }
    </style>
</head>

<body>

    <section id="main_page">

        <div class="first">

            <div class="logo">
                <a href="index.php" class="accueil"><i class="fa-solid fa-house"></i> accueil</a>
                cafe megador
            </div>

            <div class="setting">
                <?php date_default_timezone_set("Africa/Casablanca"); ?>
                <?= date('d/m/Y h:i:s'); ?>
                <a class="setting_btn" href="authentification.php" title="setting"><i class="fa-solid fa-gear"></i></a>
            </div>

        </div>

        <div class="third">

            <div class="reussie" id="reussie">cadeau</div>

            <div class="menu">

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=cafe&prix=6&cadeau=1"><img src="img/coffee.png"></a>
                    <h4>cafe</h4>
                    <h5>6 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=chicha&prix=30&cadeau=1"><img src="img/ch1.jpg"></a>
                    <h4>chicha</h4>
                    <h5>30 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=chicha&prix=35&cadeau=1"><img src="img/ch1.jpg"></a>
                    <h4>chicha</h4>
                    <h5>35 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=chicha&prix=40&cadeau=1"><img src="img/ch1.jpg"></a>
                    <h4>chicha</h4>
                    <h5>40 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=tea&prix=6&cadeau=1"><img src="img/tea.jpg"></a>
                    <h4>tea</h4>
                    <h5>6 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=jus&prix=10&cadeau=1"><img src="img/jus2.png"></a>
                    <h4>jus</h4>
                    <h5>10 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=jus&prix=12&cadeau=1"><img src="img/jus1.png"></a>
                    <h4>jus</h4>
                    <h5>12 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=jus&prix=20&cadeau=1"><img src="img/jus.jpg"></a>
                    <h4>jus</h4>
                    <h5>20 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=soda energy&prix=15&cadeau=1"><img src="img/energy 1.png"></a>
                    <h4>soda energy</h4>
                    <h5>15 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=soda energy&prix=25&cadeau=1"><img src="img/energy 2.png"></a>
                    <h4>soda energy</h4>
                    <h5>25 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=soda&prix=10&cadeau=1"><img src="img/soda.png"></a>
                    <h4>soda</h4>
                    <h5>10 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=l'eau&prix=6&cadeau=1"><img src="img/water.png"></a>
                    <h4>l'eau</h4>
                    <h5>6 DH</h5>
                </div>

                <div class="product">
                    <a onclick="return confirm('confirm la demande :') " href="buy.php?name=l'eau&prix=10&cadeau=1"><img src="img/water.png"></a>
                    <h4>l'eau</h4>
                    <h5>10 DH</h5>
                </div>


            </div>

        </div>

    </section>
</body>

</html>