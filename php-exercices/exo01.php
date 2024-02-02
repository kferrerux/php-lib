<?php
// EXERCICE 01 ----------------------------------------------------------------
function addition($arg1, $arg2)
{
    echo $arg1 + $arg2;
}

addition(10, 10);


// CORRECTION EXERCICE 01 ----------------------------------------------------
function addition($par1, $par2)
{
    $sum = $par1 + $par2; // 10 + 15
    return $sum;
}

$result = addition(10, 15);
echo "<h1> Résultat de la fonction : $result </h1>";


// NOTES ----------------------------------------------------------------------
// return : retourne mais n'affiche pas
// Tout ce qui se trouve en dessous du return ne sera pas lu par le programme, ce dernier renvoi la valeur finale,
// le paramètre est traité, la valeur est retournée.
// echo : affiche une vue (navigateur)
// var_dump : debug
// Un appel de fonction peut être vu comme un bouton poussoir "Démarre le programme"
// On appel une fonction autant que l'on souhaite
// On concatène quand on a plus d'une valeur