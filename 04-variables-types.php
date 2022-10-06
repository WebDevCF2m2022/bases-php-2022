<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Les types de variables </h2>
<h2>les string</h2>
<p> les chaines de caractere sont mises dans des variables de type string ou str , ce sont les variable les plus utilisées pour l'affiche  de texte dans les sites web</p>
<p>on peut les utiliser et les mettre une à la suite de ... Cela s'appelle la concaténation </p>
<?php
//creation de la variable (ici en camelCase ), avec le = qui donne la valeur .En procedure , le typage strict n'est pas obligatoire 

$monTitre ="Bientôt la fin de ce cours interminable !"; 
//affichage du contenu  de la variable avec une chaine concaténée (utilisation .ou de la virgle )
//gettype est un function qui retourn le type de variable (en php 8 plutôt  get_debug_type())
echo $monTitre. "yes ! <br>" ; 
echo "le type e la variable est ".gettype($monTitre);  '!' ; 


?>

<p>Il existe des centaines de fonctions  pour gérer du texte , par exemple </p>
<?php
echo 'mettre tout en majuscule : strtoupper($monTitre '.strtoupper($monTitre); 
?>
<p><a href="https://www.php.net/manual/fr/book.strings.php" target="_blank">string</a></p>



<h2>Les numerique </h2>
<p>Les numerique sont  les variable le plus utiliser pour le calculs , il existe plusieurs sous-types de ceux-ci  </p>
<h3>Les entier (integer, int )</h3> 
<p>Sont des entiers les nomber sans virglues ,positif comme negative </p>
<?php
        $myFirstInt = 22;     /** on pas besoin mettre le mot cle int  */
        $mySecondInt = -7; 
    
        echo $myFirstInt; 
        echo $mySecondInt; 
        echo $monTitre;  
        
        //adition
        $add=$myFirstInt + $mySecondInt ; 
        echo $add ; 

         //soustraction 
         $sous =$myFirstInt -$mySecondInt ; 
         echo $sous; 

         // multiplication 
         $multi =$myFirstInt * $mySecondInt;
         echo $multi; 

         //division 
         $div =$myFirstInt / $mySecondInt ; 
         echo $div; 
         

     // outile de débougage 
     var_dump($myFirstInt;$mySecondInt,$monTitre, $add, $sous,$multi,$div ); 
        
?>
<h3> 







</body>
</html>