<?php $eleves = ['karadoc', 'perceval', 'gauvin', 'yvain'];
// CREATION DE TABLEAU INDEXE AVEC BOUCLE FOR + COUNT
// ---------------------------------------------------------------------------------------------
// print_r($rgb);  
// var_dump($rgb);

// CREER LA BOUCLE "for" POUR PARCOURIR LE TABLEAU
    for ($i = 0; $i < count($eleves); $i++)  {
        // count EST L'EQUIVALENT DE .length EN JAVASCRIPT
        // ON AFFICHE LE TABLEAU AVEC UN echo
        // echo $eleves[$i]; 
    }
?>

<?php
// BOUCLE "foreach"
foreach ($eleves as $eleve) {
// echo $eleve;
}

?>

<?php 
// EXERCICE - TABLEAUX ASSOCIATIFS
// CREER DES TABLEAUX ASSOCIATIFS POUR CHAQUE ARTICLES (3)
// NOUS ALLONS RECUPERER : image/date/titre/texte/lirelasuite

// UPDATE : NOUS AVONS FACTORISES, LES TROIS TABLEAUX SONT DEVENU UN SEUL ET MEME GRAND TABLEAUX
// ---------------------------------------------------------------------------------------------

$articles = [
    [
        "image" => "assets/imgs/img01.jpg",
        "date"  => "28 OCTOBRE 2018",
        "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
        "texte" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "lirelasuite" => "404.php"
    ],
    [
        "image" => "assets/imgs/img02.jpg",
        "date"  => "28 OCTOBRE 2018",
        "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
        "texte" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "lirelasuite" => "404.php"
    ],
    [
        "image" => "assets/imgs/img01.jpg",
        "date"  => "28 OCTOBRE 2018",
        "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
        "texte" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "lirelasuite" => "404.php"         
    ]
];

// TROIS TABLEAUX INDEPENDANTS (NON FACTORISES) CI-DESSUS POUR L'UPDATE (BONNE PRATIQUE)
// ---------------------------------------------------------------------------------------------

// $article1 = [
//     "image" => "assets/imgs/img01.jpg",
//     "date"  => "28 OCTOBRE 2018",
//     "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
//     "texte" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//     "lirelasuite" => "Lire la suite"
// ];

// $article2 = [
//     "image" => "assets/imgs/img02.jpg",
//     "date"  => "28 OCTOBRE 2018",
//     "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
//     "texte" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//     "lirelasuite" => "Lire la suite"
// ];

// $article3 = [
//     "image" => "assets/imgs/img03.jpg",
//     "date"  => "28 OCTOBRE 2018",
//     "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
//     "texte" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//     "lirelasuite" => "Lire la suite"
// ];

// $article0 = [
        // VOIR LA SUITE (INTERESSANT TEMPLATE)
//     "image" => [image01, image02, image03] ;
//     "titre" => "titre article 1, titre article 2, titre article 3";
//     "texte" => "texte article 1, texte article 2, texte article 3";
//     "lirelasuite" => "En savoir plus"
// ];

// var_dump($article3);

?>

<!-- BONNE PRATIQUE UTILISATION DE foreach -->

<?php foreach ($eleves as $eleve) : ?>
<?php // SYNTAXE ALTERNITIVE QUAND ON ECRIT DU HTML/RELATIVE AU VUE/MVC ?>
    <td><?php echo $eleve ?></td>

<?php endforeach; ?>

<?php
foreach ($eleves as $eleve) {
    // ICI QUE DU PHP EN GENERAL
    echo "<td> $eleve</td>";
}
?>