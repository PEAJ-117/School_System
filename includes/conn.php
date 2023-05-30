<?php
$host = "";
$user = "";
$db = "";
$pass = "";

try {
    $pdo = new PDO('mysql:host = '.$host.';dbname='.$db.';charset-utf8',$user.$pass);
    $pdo -> setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    'error; '.$e -> getMessage();
}