<?php

/* Le concept de boucle est important dans tous les langages, en PHP il existe diverses manières de créer des boucles :


foreach => boucles sur les tableaux et objets
for => boucle de type numérique
while => boucle de vérification true
do while > boucle de vérification true avec une exécution obligatoire
fonction récursives => Vous créez vos propres boucles ! 


Les boucles ne doivent jamais être infinies.
*/

$tab = ["un","deux","trois","quatre","cinq"];
foreach($tab as $value){

   // affichage de toutes les valeurs du tableau    
    echo $value." ";
}
echo "<hr>";

// idem avec un for
for($i=0; $i<count($tab); $i++){

    echo $tab[$i]." ";
}
foreach($tab as $key => $value){

    // affichage de toutes les valeurs du tableau    
     echo $key. " -> ".$value." <br> ";
 }
 echo "<hr>";

 foreach($tab as $cle => $valeur){

    // affichage de toutes les valeurs du tableau    
     echo $cle. " -> ".$valeur." <br> ";
 }
 echo "<hr>";
//tableau associatif
 $tab2 = [
        "un"=> 1,
        "deux" => 2,
        3 => 3,
        "wassup"=> "what're you up to?"
 ];

 echo "<hr>";

foreach($tab2 as $value2){
    echo $value2. " ";

}

 echo "<hr>";
 var_dump($tab2);

 foreach($tab2 as $key2 => $value2){
   // echo $key2." -> ".$value2. "<br> ";
   echo "$key2 -> $value2 <br>";

}

?>