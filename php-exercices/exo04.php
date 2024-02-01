<?php
// EXERCICE 04 ----------------------------------------------------------------
function salutation($nom)
{
    if ($nom == null) {
        echo "Bonjour, [nom] !";
    } else {
        echo "Bonjour " . $nom . " !";
    }
}

salutation("");
echo "<br>";
salutation("Kevin");
