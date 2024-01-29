<?php function navItems ($link, $text) {
// CETTE FONCTION A POUR BUT DE METTRE A JOUR DYNAMIQUEMENT NOTRE NAVIGATION (li > a)
// ------------------------------------------------------------------------------------------------------->
// CETTE FONCTION COMPRENDS DEUX PARAMS : $link & $text
    return 
    '<li class="nav-item">
    <a class="nav-link active text-white" aria-current="page"
    href="' . $link . '">' . $text . '</a>
    </li>';
// CI-DESSOUS ON return LES ELEMENTS DE LISTE COMPRENANT 
// LES DEUX PARAMS PRECEDEMMENT DECLARES
}
?>
