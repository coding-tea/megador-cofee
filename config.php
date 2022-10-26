<?php

try {
    $db = new PDO("mysql:host=localhost:3310;dbname=megador", "root", "");
} catch (PDOException $e) {
    die("Error" . $e->getMessage());
}
