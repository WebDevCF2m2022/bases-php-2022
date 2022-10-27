<?php
 $a= mt_ran(1,5); 

 // on verifie la valeur de $a  de maniere non stricte (la valeur mais pas le type ) comme le == 

 switch($a){
    // si ça vaut 1 (non strictement => "1" || 1 || true )
    case 1 :  
    echo "$a - premier "; 
    break ; 
    case 2: 
    echo "$a - deuxieme " ; 
    break; 
    case 3:; 
    echo "$a - troisiéme "; 
    break ; 
    case 4:; 
    echo "$a -quatrieme " ; 
    break;
    default : 
    echo "$a -Erreur "; 

 }


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
 </head>
 <body>
    <h1>avec if </h1> 
        <p>Avantages : on peut comparer plusieurs valeurs (&& ,|| , etc ), on peut vérifier des typages strict (==== , <==) , on peut vérifier autre chose que de  des egalistes </p>
        <p>Desvantage : plus lent , parfois moins lisibile ;</p>
 


<h1> avec switch </h1>
<p> Avantages : vitesse fortement augumenté </p>
<p>desvantage : ne verifie que une egalite non stricte ( la valeur mai pas le type ) ey qu'une variable à la fois    </p>
    <p> Equivalance des && avec switch </p>
    <?php
    $temp=mt_rand(-5,5); 

    switch($temp){
        case -5:
        case -4:
        case -3:
        case -2: 
        case -1:
        case 0: 
            echo "Il géle {$temp}° " ; 
        break ; 
    default: 
            echo " l'eau c'est lichide "; 
    }
    echo "<br>" ; 

  ?>
 </body>
 </html>