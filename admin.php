<?php
session_start();
require "config.php";
if(empty($_GET['admin'])){
    header('location:authentification.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
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
            padding: 40px;
            border-radius: 10px;
            border: 1px solid black;
        }

        input {
            width: 100%;
            padding: 8px 15px;
            background-color: #202225;
            color: white;
            margin-top: 15px;
            outline: none;
            border: none;
        }

        .all {
            width: 100%;
            padding: 10px;
        }

        .title {
            text-transform: uppercase;
            font-size: 14px;
            color: #3BA55D;
            font-weight: bold;
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 3px solid white;
        }

        table {
            margin-top: 15px;
            width: 100%;
            text-align: center;
            border: 2px solid white;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border: 2px solid white;
        }

        .produit div {
            width: 100%;
            font-weight: bold;
        }

        p {
            padding: 25px 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 20px;
        }

        .heading {
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: bold;
        }

        form {
            margin-bottom: 20px;
        }

        .time {
            margin-bottom: 10px;
        }

        .accueil {
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            margin-right: 15px;
            transition: .4s ease;
            padding: 15px 0;
        }

        .accueil:hover {
            color: #3BA55D;
        }

        .btn{
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <section id="main_page">
    <div class="btn">
    <a href="index.php" class="accueil"><i class="fa-solid fa-house"></i> accueil</a>
    </div>
        <form action="" method="post">
            choisir un date : <input type="date" name="date" />
            <input type="submit" value="rechercher" name="rechercher" id="rechercher">
        </form>
        <?php
        date_default_timezone_set("Africa/Casablanca");
        if (isset($_POST['rechercher']) && !empty($_POST['date'])) {
            $stmt = $db->prepare('SELECT * FROM product WHERE datee=?');
            $stmt->execute([$_POST['date']]);
            $product = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (isset($product)) :
        ?>
                <div class="all" id="all">
                    <h1 class="heading">activites de <?= $_POST['date']. " " .date("h:i:s") ?></h1>
                    <table>
                        <tr>

                            <td>
                                <div class="produit">
                                    <h1 class="title">cafe</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='cafe' and datee=?");
                                    $stmt->execute([$_POST['date']]);
                                    $cafe = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($cafe)) : ?>
                                        <?php foreach ($cafe as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">chicha 30dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=30");
                                    $stmt->execute([$_POST['date']]);
                                    $chicha = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($chicha)) : ?>
                                        <?php foreach ($chicha as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">chicha 35dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=35");
                                    $stmt->execute([$_POST['date']]);
                                    $chicha = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($chicha)) : ?>
                                        <?php foreach ($chicha as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">chicha 40dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=40");
                                    $stmt->execute([$_POST['date']]);
                                    $chicha = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($chicha)) : ?>
                                        <?php foreach ($chicha as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">tea</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='tea' and datee=?");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">jus 10dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=10");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">jus 12dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=12");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">jus 20dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=20");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>


                            <td>
                                <div class="produit">
                                    <h1 class="title">soda energy 15dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=15");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>


                            <td>
                                <div class="produit">
                                    <h1 class="title">soda energy 25dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=25");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                            </td>


                            <td>
                                <div class="produit">
                                    <h1 class="title">soda</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda' and datee=?");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>


                            <td>
                                <div class="produit">
                                    <h1 class="title">l'eau 6dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=6");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>


                            <td>
                                <div class="produit">
                                    <h1 class="title">l'eau 10dh</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=10");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="produit">
                                    <h1 class="title">produit annuler</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=1 AND cadeau=0 AND datee=?");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->product_name ?> <?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>


                            <td>
                                <div class="produit">
                                    <h1 class="title">cadeau</h1>
                                    <?php
                                    $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=1 AND datee=?");
                                    $stmt->execute([$_POST['date']]);
                                    $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php if (isset($tea)) : ?>
                                        <?php foreach ($tea as $c) : ?>
                                            <div class="time"><?= $c->product_name ?> <?= $c->dateTime ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='cafe' and datee=?");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=30");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=35");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=40");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='tea' and datee=?");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=10");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=12");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=20");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=15");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=25");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda' and datee=?");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=6");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=10");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=1 AND cadeau=0 AND datee=?");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>


                            <td>
                                <?php
                                $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=1 AND datee=?");
                                $stmt->execute([$_POST['date']]);
                                $total = $stmt->fetch(PDO::FETCH_OBJ);
                                echo "total : " . $total->total . "DH";
                                ?>
                            </td>

                        </tr>

                    </table>
                    <?php
                    $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=1 AND cadeau=0 AND datee=?");
                    $stm = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=1 AND datee=?");
                    $statment = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND datee=?");
                    $stmt->execute([$_POST['date']]);
                    $stm->execute([$_POST['date']]);
                    $statment->execute([$_POST['date']]);
                    $annuler = $stmt->fetch(PDO::FETCH_OBJ);
                    $cadeau = $stm->fetch(PDO::FETCH_OBJ);
                    $all = $statment->fetch(PDO::FETCH_OBJ);
                    $total_money = $all->total - ($annuler->total + $cadeau->total);
                    ?>
                    <p class="total_money"> total : <?= $total_money ?> DH</p>


                </div>
        <?php endif;
        } ?>

        <div class="all" id="all">
            <h1 class="heading">activites de <?= date('Y-m-d h:i:s') ?></h1>
            <table>
                <tr>

                    <td>
                        <div class="produit">
                            <h1 class="title">cafe</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='cafe' and datee=?");
                            $stmt->execute([date('Y-m-d')]);
                            $cafe = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($cafe)) : ?>
                                <?php foreach ($cafe as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">chicha 30dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=30");
                            $stmt->execute([date('Y-m-d')]);
                            $chicha = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($chicha)) : ?>
                                <?php foreach ($chicha as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">chicha 35dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=35");
                            $stmt->execute([date('Y-m-d')]);
                            $chicha = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($chicha)) : ?>
                                <?php foreach ($chicha as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">chicha 40dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=40");
                            $stmt->execute([date('Y-m-d')]);
                            $chicha = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($chicha)) : ?>
                                <?php foreach ($chicha as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">tea</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='tea' and datee=?");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">jus 10dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=10");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">jus 12dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=12");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">jus 20dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=20");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>


                    <td>
                        <div class="produit">
                            <h1 class="title">soda energy 15dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=15");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>


                    <td>
                        <div class="produit">
                            <h1 class="title">soda energy 25dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=25");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                    </td>


                    <td>
                        <div class="produit">
                            <h1 class="title">soda</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda' and datee=?");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>


                    <td>
                        <div class="produit">
                            <h1 class="title">l'eau 6dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=6");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>


                    <td>
                        <div class="produit">
                            <h1 class="title">l'eau 10dh</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=10");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td>
                        <div class="produit">
                            <h1 class="title">produit annuler</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=1 AND cadeau=0 AND datee=?");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->product_name ?> <?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>


                    <td>
                        <div class="produit">
                            <h1 class="title">cadeau</h1>
                            <?php
                            $stmt = $db->prepare("SELECT * FROM product WHERE annuler=0 AND cadeau=1 AND datee=?");
                            $stmt->execute([date('Y-m-d')]);
                            $tea = $stmt->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php if (isset($tea)) : ?>
                                <?php foreach ($tea as $c) : ?>
                                    <div class="time"><?= $c->product_name ?> <?= $c->dateTime ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </td>

                </tr>


                <tr>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='cafe' and datee=?");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=30");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=35");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='chicha' and datee=? AND prix=40");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='tea' and datee=?");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=10");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=12");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='jus' and datee=? AND prix=20");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=15");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda energy' and datee=? AND prix=25");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='soda' and datee=?");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=6");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND product_name='leau' AND datee=? AND prix=10");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=1 AND cadeau=0 AND datee=?");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>


                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=1 AND datee=?");
                        $stmt->execute([date('Y-m-d')]);
                        $total = $stmt->fetch(PDO::FETCH_OBJ);
                        echo "total : " . $total->total . "DH";
                        ?>
                    </td>

                </tr>

            </table>
            <?php
            $stmt = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=1 AND cadeau=0 AND datee=?");
            $stm = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=1 AND datee=?");
            $statment = $db->prepare("SELECT sum(prix) as total FROM product WHERE annuler=0 AND cadeau=0 AND datee=?");
            $stmt->execute([date('Y-m-d')]);
            $stm->execute([date('Y-m-d')]);
            $statment->execute([date('Y-m-d')]);
            $annuler = $stmt->fetch(PDO::FETCH_OBJ);
            $cadeau = $stm->fetch(PDO::FETCH_OBJ);
            $all = $statment->fetch(PDO::FETCH_OBJ);
            $total_money = $all->total - ($annuler->total + $cadeau->total); //- ($annuler->total + $cadeau->total)
            ?>
            <p class="total_money"> total : <?= $total_money ?> DH</p>


        </div>
    </section>
</body>

</html>