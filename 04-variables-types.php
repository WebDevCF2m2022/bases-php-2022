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
    <h2>les strings (text)</h2>
    <p>Les chaînes de caractères sont mises dans des variables de type string ou "str". Ce sont les variables les plus utlisées pour l'affichage de texte dans les sites web.</p>
    <p>On peut les utiliser et les mettre une à la suite des autres avec des ... Cela s'appelle la concaténation.</p>


    <?php
    //création de la variable (ici en camelCase), avec le = qui donne de la valeur. En procédural, le typage strict n'est pas obligatoire.
    $monTitre = "Bientôt la fin de ce cours interminable !";
    // affichage du contenu de la variable avec une chaîne concaténée (grâce au . que je met - la virgule peut aussi fonctionner mes avec des risques) 
    //gettype est une fonction permettant de récupérer le typage d'une variable (en PHP8 on utilisera plutôt get_debug_type() ) 
    echo $monTitre. "Yes ! <br>";
    echo "le type de la variable est ".gettype($monTitre). ' !';
    ?>

    <p>Il existe des centaines de fonctions pour gérer du texte, par exemple</p>

    <?php
    echo 'mettre tout en majuscule : mb_strtoupper ($monTitre)' .mb_strtoupper($monTitre);

    ?>

    <p><a href=https:www.php.net/manual/fr/book.strings.php target="_blank">string</a></p>
    
    <h2>Les numériques</h2>
    <p>Ce sont les plus utilisées pour les calculs. Il existe plusieurs sous-types de ceux-ci.</p>
    <h3>Les entiers (integer, int)</h3>
    <p>Sont des entiers les nombres sans virgules, positifs comme négatifs.</p>
    <pre>$myFirstInt = 22;
$mySecondInt = -7;</pre> 

    <?php   //en PHP si je met le $, il comprend directement qu'il s'agit d'une variable. Je peux donc utiliser n'importe quel mot - même à priori un mot réservé comme "echo" car avec le $, PHP va directement
    $myFirstInt=22;
    $mySecondInt=-7;

    echo $myFirstInt;
    echo "<br>";


    //addition
        $add=$myFirstInt+$mySecondInt;
            echo $add;
            echo "<br>";


    //soustraction
        $sous=$myFirstInt-$mySecondInt;
            echo $sous;
            echo "<br>";

    //multiplication
        $multi=$myFirstInt*$mySecondInt;
            echo $multi;
            echo "<br>";


    //division
        $div=$myFirstInt/$mySecondInt;
            echo $div;
            echo " - Ce dernier, résultat de la division, devient un float number <br>";
            
    ?>


    <h3>Les chiffres à virgules (float, double, nombres réels)</h3>
    <p>Ils ont le type float - du coup attention au cas de calcul en base 10. On peut avoir des erreurs dues au fait que les ordinateurs travaillent sur les calculs en base 16! (16bits)<br>
    On va utiliser le point "." et pas la virgule "," comme séparateur. </br>
    <a href="https://floating-point-gui.de/">Why don’t my numbers add up?</a></p>

    <?php
    $firstFloat = 8.27;
    $secondFloat = -79.78945321    //il y a un nombre limité de place pour les chiffres!
    ?>

    <h2>Les booléens (bools, boolean)</h2>
    <p>Variable représentant sur un seul bit les 2 possibilités du binairre: true ou false</p>
    
    <?php
    $bool1=true;
    $bool2=false;
    ?>

    <h2>Les types NULL (NULL)</h2>
    <p>Le type NULL est une variable sans valeur. ATTENTION que c'est bien une variable et qu'elle va donner un résultat - le résultat NULL<br>
    En booléen le résultat sera <a href="https://www.php.net/manual/fr/function.is-null.php" >TRUE</a>
    </p>

    <?php
    $nada = NULL;
    ?>


    <h2>Les types de tableaux (array)</h2>
    <p>Les tableaux permettent de contenir plusieurs variables à l'intérieur d'une variable de type array. Ils sont multidimensionnels càd qu'on peut avoir autant de tableaux que nécessaires dans un tableau.</p>
    <p>Il existe 2 types de tableaux: les tableaux indexés et les tableaux associatifs.</p>
    
    <h3>Tableaux indexés</h3>
    <p>Il ne contient que des valeurs, les clefs sont attribuées par PHP (clefs automatiques)</p>

    <?php
    //création d'un tableau indexé. La clef part de 0 puis 1 etc..
    $tab1 = array(5, "lulu", "dupuis", true);
    //déboggage de tableaux ou objets avec print_r  -  moins complet que var_dump mais prend également moins de place sur l'écran 
    print_r($tab1);
    //on veut afficher la deuxième clef: --> c'est comme pour las array en JS, on commence à zéro
    echo $tab1[1];
    ?>
    
    <h3>Tableaux associatifs</h3>
    <p>Tableau dont on a indiqué au moins une des clefs - ce qui en fait un tableau associatif</p>

    <?php
    //création d'un tableau associatif
    $tab2 = array("un"=>1,
                    "deux"=>2,
                        "trois"=>3,
                        4 => "coucou",
                        "lala",
                        array(1,2,3),
                    );

    //déboggage de tableaux ou objets avec print_r
    print_r($tab2);
    echo $tab2["deux"];
    ?>



    <hr>
    <?php
    //outil de déboggage le plus commun
    var_dump($monTitre, $myFirstInt, $mySecondInt,$add, $sous, $multi, $div, $firstFloat, $secondFloat, $bool1, $bool2, $nada, $tab1, $tab2);

    ?>


</body>
</html>