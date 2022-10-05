<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les string (text)</h2>
    <p>Les chaines de caractères sont mise dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettres une à la suite de... Cela s'appelle la concaténation.</p>

    <?php
    // Création de la variable (ici en camelCase), avec le = qui donne la valeur. En procédural, le typage stricte n'est pas obligatoire. 
    $monTitre = "Bientot la fin de ce cours interminable";
    // Affiche de la variable avec une chaine concaténée (utilisation du . ou de la virgule) - gettype est une fonction permettant de récupérer le typage d'une variable (en PHP 8 on utilisera plutôt get_debug_type()) 
    echo $monTitre." Yes! <br>";
    echo "Le type de la variable est ".gettype($monTitre).' !';
    ?>
    <p>Il existe des centaines de fonctions pour gérer du texte, par exemple</p>
    <?php
    echo 'mettre tout en majuscule : strtoupper($monTitre) '.strtoupper($monTitre);
    ?>
    <p><a href="https://www.php.net/manual/fr/book.strings.php" target="_blank">string</a></p>
</body>
</html>