<?php
// EXERCICE 05 ----------------------------------------------------------------
function division($arg1, $arg2)
{
    if ($arg1 == 0 || $arg2 == 0) {
        echo "Zéro n'est pas divisible.";
    } else {
        echo "Le résultat est : " . $arg1 / $arg2 . "";
    }
}

division(10, 2);
