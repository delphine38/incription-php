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


//test pour savoir si notre utilisateur entre de bonne valeurs
if (isset($_POST['forminscription'])) {
    //echo "ok" s'affichera si je clique sur "je m'inscris", donc isset fonctionne
    //echo "ok";
    if (
        !empty($_POST['identifiant']) &&
        !empty($_POST['password']) &&
        !empty($_POST['passwordconfirme'])
    ) {
        echo "ok les valeurs fonctionne";
    } else {
        echo "non";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="inscription">
        <h2>Inscription</h2>
        <br>
        <br>
        <br>

        <!-- action: ne rien mettre à l'interieur commme ça on reste sur la meme page pour le traitement -->
        <form action="" method="POST">

            <input type="text" name="identifiant" placeholder="identifiant">

            <input type="text" name="password" placeholder="Mot de pass">

            <input type="text" name="passwordconfirme" placeholder="Confirmation de mot de pass">

            <input type="submit" value="Je m'inscris" name="forminscription" class="btn btn-primary">
        </form>
    </div>

</body>

</html>