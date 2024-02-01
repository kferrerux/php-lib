<?php
// EXERCICE 03 ----------------------------------------------------------------
function increment($global)
{
    $i = $global;

    for ($i = 0; $i < 10; $i++) {
        echo "Vous apellez : " . $i . " fois la fonction";
        echo "<br>";
    }
}

increment($global);
