<?php
$stagiaires=[
    "Redouan",
    "Coralie",
    "Florence",
    "Tom",
    "Billy",
    "Jaouad",
    "Frédéric",
    "Maksym",
    "Pierre-Alain",
    "Youssef",
    "Jonathan",
    "Melvin",
    "Yanis",
    "Robbins",
    "Ana-Maria",
    "Jennifer",
    "Valérie",
];
$hasard = mt_rand(0,17);

$nb1 = -100;

$nb2 =0;

$nb3 = 100;





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
    <h1>Exercice sur les boucles</h1>
    <p>Créer dans ce dossier un fichier exe-11-coralie.php en copiant celui-ci </p>
    <?php

    ?>


    <h3>Exe 1</h3>
    <p>Affichez tous les noms de la varible $stagiaires séparés par un " | "</p>
    <?php

    ?>


    <h3>Exe 2</h3>
    <p>Affichez tous les noms de la varible $stagiaires séparés par un " | " avec leur clef : exemple <code> 0 -> Redouan | 1 -> Coralie</p>
    <?php

    ?>


    <h3>Exe 3</h3>
    <p>Voir la doc sur les tableaux : Affichez tous les noms des variables stagiaires classés par ordre alphabétique séparés par un " | " </p>
    <?php

    ?>


    <h4>Exe 4</h4>
    <p>Affichez les chiffres de 0 à la valeur de la variable $hasard (entiers positif : 0, 1, 2, 3, ...)</p>

    <?php

?>
</body>
</html>