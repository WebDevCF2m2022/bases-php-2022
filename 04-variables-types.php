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
        echo "<br>"; 

         //soustraction 
         $sous =$myFirstInt -$mySecondInt ; 
         echo $sous; 
         echo "<br>" ; 

         // multiplication 
         $multi =$myFirstInt * $mySecondInt;
         echo $multi; 
         echo "<br>"; 

         //division 
         $div =$myFirstInt / $mySecondInt ; 
         echo $div; 
         echo "<br>"; 

     // outile de débougage 
   
        
?>
<h3> Les chiffre  float (flottante , double , no réels )<h3>
<p>ils ont le type float , meme attention en base 10 on peut avoir de erreurs du au fait que le ordinateurs travaille sur le calculc in base 16  , pour ca on utilise la base 16 pour le calcule . ATTENTION ON UTILISE . NU  , COMME SEPARATEUR <a href="https://floating-point-gui.be" target="_blank">What every programmer should know about floating-point arithmetic </p>
  <?php
  // pour calcule on peut utilise un function  gmp ( comme la Math ), exemple gmp.abs  ; meme sur le infinit c'est un probleme //
     
  $firstFloat=8.27 ; 
  $secondFloat=79.78946312558819 ; // il manque 3 caractere  c'est de pasque le espace c'est insufisant 

  // function bc math il vais grandir le mémoire  , exemple = bcadd = > il vais // 
?>
<h3>les boolean (bool ,boolean )<h3>
    <p>Variable réprezentant sur une seul bit les 2 posibilite du binaire : true , false </p>
<hr>
<?php
  $bool1= true; 
  $bool2=false; 

?>
<h3>Variable null <h3>
<p>le type Null est un varaible sans valeurs , sans ocuppe l'espace dans memeoire </p>
<?php
 $nada =NULL;
?>
<h3> les tableaux (array) </h3>
<p>Les tableaux permettent de contenir plusieurs  variables à l'interieur à l'intérieur d'un variable de type  array. Ils sont multidimensionnels , càd on peut avoir autant de tableaux que nécessaire dans un tableau 
</p><p>Il existe 2 type de tableau :  les tableau indexés , et le tableau associatifs </p>

<h3>tableau indexe</h3>
<p>il ne contient que des valeurs,les clefs sont attribut par PHP</p> 
<?php
 $tab1 = array( 5,"lulu","Dupuis ",true); 
 print_r($tab1);     // debogage de tab ou oj avec print_r , moins complect que la var_dump 
 echo $tab1[1];     // on veu affchier la 2 eme index (clé)
?>

<h3> tableau associatif </p>
<p>Tableau dont on a indique au mois 1 des cles , ce qui en fait un tableau associatif</p>


<?php
  $tab2=array( "un "=> 1 , 
               "deux" =>2 , 
               "trois" =>3, 
               17=>"coucou", 
               "lala ",

); 

print_r($tab2); 
?>

<?php
  var_dump($myFirstInt,$mySecondInt,$monTitre, $add, $sous,$multi,$div,$bool1,$bool2,$firstFloat,$secondFloat,$nada); 
?>
</body>
</html>