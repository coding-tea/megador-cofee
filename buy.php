<?php date_default_timezone_set("Africa/Casablanca"); ?>
<?php

// require "authentification.php";
require "config.php";

if (!empty($_GET['name']) && !empty($_GET['annuler']) && !empty($_GET['prix'])) {
    $stmt = $db->prepare("INSERT INTO `product` (`product_name`, `prix`, `datee`, cadeau, `dateTime`, annuler) VALUES (?, ?, ?, ?, ?, ?)");
    $flag = $stmt->execute([$_GET['name'], $_GET['prix'], date('Y-m-d'), 0, date('H:i:s'), 1]);
    if ($flag)
        header('location:index.php');
}

if (!empty($_GET['name']) && !empty($_GET['prix']) && !empty($_GET['cadeau'])) {
    $stmt = $db->prepare("INSERT INTO `product` (`product_name`, `prix`, `datee`, cadeau, `dateTime`, annuler) VALUES (?, ?, ?, ?, ?, ?)");
    $flag = $stmt->execute([$_GET['name'], $_GET['prix'], date('Y-m-d'), $_GET['cadeau'], date('H:i:s'), 0]);
    if ($flag)
        header('location:cadeau.php');
} else if (!empty($_GET['name']) && !empty($_GET['prix']) && empty($_GET['annuler'])) {
    $stmt = $db->prepare("INSERT INTO `product` (`product_name`, `prix`, `datee`, `dateTime`, annuler, cadeau) VALUES (?, ?, ?, ?, ?, ?)");
    $flag = $stmt->execute([$_GET['name'], $_GET['prix'], date('Y-m-d'), date('H:i:s'), 0, 0]);
    if ($flag)
        header('location:index.php?message');
}
