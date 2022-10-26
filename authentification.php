<?php
session_start();
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentification</title>
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
            padding: 40px;
            border-radius: 10px;
            border: 1px solid black;
        }

        h1 {
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 8px 15px;
            border-radius: 8PX;
            outline: none;
        }

        input[type="submit"] {
            background-color: #3BA55D;
            margin-top: 10px;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
        }
    </style>
</head>

<body>
    <section id="main_page">
        <h1>tapez le mot de passe</h1>
        <form action="" method="post">
            <input type="password" placeholder="mot de passe" name="pass">
            <input type="submit" value="connexion" name="connexion">
        </form>
    </section>

    <?php
    if (isset($_POST['connexion']) && !empty($_POST['pass'])) {
        $stmt = $db->prepare("SELECT * FROM admin WHERE PASSWORD =?");
        $stmt->execute([$_POST['pass']]);
        if ($stmt->rowCount() == 1) {
            header('location:admin.php?admin=true');
        }
    }
    ?>
</body>

</html>