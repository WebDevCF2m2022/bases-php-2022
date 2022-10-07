<?php
 $tab =array();
 $tab= []; 
 $tab1 =[5,
8,
"coucou",
false,
27.12,

]; 

var_dump($tab,$tab1); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h1>Array </h1>
       <p>Les tableau sont la base de gestion des donées en PHP comme dans la plupart des 
        langage , on pourra égalme,t utiliser des oj , des fichier json ou xml pour faire la 
        même chose , mais en PHP le tableau restera le principal format pour gérer toutes les donées </p>
        <p>En PHP on a 2 maniere de crééer des tableaux </p>
        
      <pre>  <code>

      $tab =array();  // maniere long  
      $tab= [];          // maniere court 
</code></pre>

       <h2>Les tableau indexe </h2>
       <p>Tableaux dont les clefs ne sont pas créer pat l'developpeur  , mais en php </p>
<pre><code>
    $tab=[5,
    8,
    "coucou",
    false,
    27.12,

    ];    // on peut mettre de tableau dans le tableau ....
</code></pre>


<p> Pour afficher les valeur manuelle d'un tableau indexé , on utilise le nom de la variable avec des $var =[clef]   </p>
<pre><code>
$tab=[5,
    8,
    "coucou",
    false,
    27.12,
   
    ];




    echo $tab[2]." ".$tab[5][1]." ".$tab[5][2]." ".$tab[5][3]." <br>".  donne : 
</body>
</html>