
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le condition </title>
</head>
<body>
    <h1> les condition <h1>
    <h2>if (condition ), si </h2>
    <p> Plus basique que le bolucle le condition sont cependent la base de tous les langages informatique </p>  
 <p> Le if il va vérifier que le ou les parametres passe entre valent true (boolean) </p>
  <pre>
    <code>
 if (condition  1 ){   // si la condition est vraie 
         echo " true "; 
 }
 </pre>
    </code>
    <p> un condition peut etre complect , et donc utiliser les && ; || , ! (contraire de ) et XOR (^ ou stricte  )  </p>


 <h2> else- sionn </h2>
 <p> c'est l'execution de code si jamais le if qui précede est à falsew </p><hr>

  <h2>elseof -else-if = sinon si </h2>
  <p>c'est l'execution d'une vérification supplémentaire si jamais le if (ou autre elseif ) qui précede est à false </p>







  
<?php
 
$nombre = mt_rand(0,20); 
 // si $nombre est plus petit que les 10 ecrie $nomber plus petit que 10; 

if($nombre <=10  ){
    echo $nombre."est plus petit que 10"; 
}
// si  il fait $temp ° dehors  est 
 $temp =mt_rand(-20,20); 
 
 if($temp <=0){
  echo $temp."il gèle dehors à $temp ° " ; 
 }else{
  echo $temp."il ne gèle pas pour le moment " ; 
 }

// si la variable est initialisée (isset) (ici $nombre existe )
  if(isset($nomber)&& $nomber > 5 && $nomber <15){
    echo "$nomber existe ET est plus grand  que 5 ET est plus 15 ";
  }
  



  // 
  if($temp <= -10){
    echo "il fait tres froid dehoirs "; 
  }else if($temp <=0){
    echo "il fait froid dehors"; 
  }else if($temp <=12){
    echo "il fait frsquet  "; 
    //dans les autres cas(default) 
  }else{
    echo "il fait agreable  dehors "; 
  }
    ?>

</body>
</html>