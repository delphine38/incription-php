<?php

$host = "localhost";
$userDB = "inscriptionphp";
$passDB = "inscriptionphp";
$Database = "inscriptionphp";

//MySQLi
$ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);

//PDO
try {
        $objetPdo = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB);
        $objetPdo->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
} catch (PDOEXeption $e) {
        echo $e;
}
