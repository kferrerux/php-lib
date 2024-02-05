<?php

//--------------------------------------------------------------------------------------
// METHOD GET & POST
//--------------------------------------------------------------------------------------

// Balise <form>
// La méthode GET passe par l'URL (visible) (ex : barre de recherche)
// La méthode POST passe par le corps de la requête (invisible) (ex : type sensible)
// Ajout de l'attribut <action> dans le formulaire 
// Créer un autre fichier contact-traitement.php
// Voir l'attribut name
// On définit l'attribut name sur chaque <input> du formulaire
// Permet de récupérer des données dès lors que l'on utilise la method POST

// $_POST renvoi un tableau avec les attributs listés

// multipart/form-data permet d'inserer des images dans un formulaire
// Et n'est pas vide, et n'est pas vide, (!empty &&)

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION - FORMULAIRE (PHP)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-white vh-100 w-100 fs-5 d-flex flex-column justify-content-center align-items-center">

    <h1 class="text-center">COURS & PRATIQUE<br>Formulaire / PHP & phpmyadmin</h1>

    <form action="return-form.php" method="POST">

        <div class="my-3">
            <label class="w-100 text-center my-2 fw-bold" for="username">Nom d'utilisateur</label><br>
            <input class="rounded" type="text" id="username" name="username" placeholder="Nom d'utilisateur">
        </div>

        <div>
            <label class="w-100 text-center my-2 fw-bold" for="email">Adresse mail</label><br>
            <input class="rounded" type="text" id="email" name="email" placeholder="Adresse mail">
        </div>

        <div class="my-3">
            <label class="w-100 text-center my-2 fw-bold" for="password">Mot de passe</label><br>
            <input class="rounded" type="password" id="password" name="password" placeholder="Mot de passe">
        </div>

        <div>
            <button class="btn btn-primary w-100 text-center my-3" type="submit">ENVOYER</button>
        </div>

        <hr>

    </form>

</body>

</html>