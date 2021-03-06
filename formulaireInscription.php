<?php

$bdd = new PDO($dsn = 'mysql:host=127.0.0.1;dbname=inscriptionphp', $username = 'inscriptionphp', $password = 'inscriptionphp');



//test pour savoir si notre utilisateur entre de bonne valeurs
if (isset($_POST['forminscription'])) {

    $identifiant = htmlspecialchars(($_POST['identifiant']));
    $password = sha1(($_POST['password']));
    $passwordconfirme = sha1(($_POST['passwordconfirme']));
    //echo "ok" s'affichera si je clique sur "je m'inscris", donc isset fonctionne
    //echo "ok";
    if (
        !empty($_POST['identifiant']) &&
        !empty($_POST['password']) &&
        !empty($_POST['passwordconfirme'])
    ) {
        // echo "ok les valeurs fonctionne";
        // une fois que echo te met bien =>ok

        // finalement ces valeurs sont plus haut
        // $identifiant = htmlspecialchars(($_POST['identifiant']));
        // $password = sha1(($_POST['password']));
        // $passwordconfirme = sha1(($_POST['passwordconfirme']));

        //gestion du nbre de caractère
        $identifiantlength = strlen($identifiant);
        if ($identifiantlength <= 255) {

            //on vérifie si les 2 mot de pass correspondent sont les mêmes ?
            if ($password == $passwordconfirme) {
                // echo "ok";
                $insertUser = $bdd->prepare("INSERT INTO users(identifiant, password, passwordconfirme) VALUES (?,?,?)");
                $insertUser->execute(array($identifiant, $password, $passwordconfirme));


                $_SESSION['comptecree'] = "votre compte à bien été créé";
                header('Location: comptecree.php');


                $erreur = "Votre compte à bien été créer";
            } else {
                $erreur = "Les mots de pass ne sont pas identique";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères";
        }
    } else {
        // echo "non";
        $erreur = "Tous les champs doivent être complété";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription php</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <section class="header">
        <article class="h1headerformulaireinscription">
            <a href="index.php">
                <h1>Piscine</h1>
            </a>
        </article>
        <!-- <article class="h5header">
            <h5>Se déconnecter</h5>
        </article> -->


    </section>
    <main>
        <h2>Inscription</h2>
        <div class="divInscription">
            <!-- action: ne rien mettre à l'interieur commme ça on reste sur la meme page pour le traitement -->
            <form action="" method="POST">
                <!-- ici la value indique que la valeur restera afficher même si il y a une erreur -->
                <div class="mb-3">
                    <input type="text" name="identifiant" placeholder="identifiant" value="<?php if (isset($identifiant)) {
                                                                                                echo $identifiant;
                                                                                            } ?>">
                </div>
                <div class="mb-3">
                    <input type="text" name="password" placeholder="Mot de pass">
                </div>
                <div class="mb-3">
                    <input type="text" name="passwordconfirme" placeholder="Confirmation de mot de pass">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Je m'inscris" name="forminscription" class="btn btn-primary">
                    <div class="mb-3">
            </form>
            <?php
            if (isset($erreur)) {
                // echo $erreur;
                echo '<font color="red">' . $erreur . "</font>";
            }
            ?>
        </div>
    </main>