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

    <form action="form-return-page.php" method="POST">

        <?php

        // GESTION FORMULAIRE (AVANT BDD)
        // ------------------------------

        // VARIABLES 
        $username = htmlspecialchars($_POST['username']);
        $email  = htmlspecialchars($_POST['email']);
        $password  = htmlspecialchars($_POST['password']);

        // STRUCTURE CONDITIONNELLES
        // SI TOUT LES CHAMPS DU FORMULAIRE NE SONT PAS VIDES
        if (!empty($username) && !empty($email) && !empty($password)) {
            // ON AFFICHE AVEC ECHO 'OK'
            echo "<h2>Tout est ok, merci!</h2>";
            // SINON
        } else {
            // ON AFFICHE AVEC ECHO 'NON'
            echo "<h2>Un des champs du formulaire est vide.</h2>";
        }

        // CONNEXION A LA BASE DE DONNEES
        // ------------------------------
        // https://www.php.net/manual/fr/intro.mysqli.php

        $link = mysqli_connect("localhost", "root", "EdenManon.", "test-form");
        //JE VERIFIE MA CONNECTION A MA BDD(base de donné)
        if (mysqli_connect_errno()) {
            printf("Échec de la connexion : %s\n", mysqli_connect_error());
        }

        $sqli = "INSERT INTO contact (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($link, $sqli);

        // var_dump($_POST);
        echo "<h2>Insertion à la base de donnée effectuée.</h2>";

        ?>

        <a class="my-3 w-100 btn btn-primary" href="./form.php">RETOUR</a>

        <hr>

    </form>

</body>

</html>