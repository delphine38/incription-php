<?php

$bdd = new PDO($dsn = 'mysql:host=127.0.0.1;dbname=inscriptionphp', $username = 'inscriptionphp', $password = 'inscriptionphp');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <!--bootstrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Utilisateur</title>
</head>

<body>
    <section class="header">
        <article class="h1header">
            <h1>Piscine</h1>
        </article>
        <article class="h5header">
            <h5>Se déconnecter</h5>
        </article>


    </section>

    <main>
        <h2>Vous pouvez désormais mettre un commentaire bienveillant ou une amélioration à apporter</h2>

        <form action="" id="" method="post" class="new-member-form text-center">

            <label class="labelUtilisateur" for="name">Merci d'ajouter vos commentaires</label>
            <div class="mb-3">
                <input id="name" name="description" type="text" placeholder="Entrez vos commentaires" />
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </main>


</body>

</html>