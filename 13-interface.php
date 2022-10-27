<?php 
//débogage de la variable POST 
var_dump($_POST); 

// pour verifie SON TYPE ET SA VALEUR ? on vais voir  si il existe primer fois et apres sont type ;


if(isset($lala) && is_numeric($lala) ){
    echo $lala ; 
}

// si il existe la variable $_POST  nomée temperature (utilisation de isset )-dans notre cas ? 
//  $_POST['temperature'] existe si on a envoyer le formulaire 
 if(isset($_POST['temperature']) && is_numeric($_POST['temperature'])){
    echo "ok"; 
 }
// on va créé une variabe temporaire locale changer  le typage de notre variable en entier en uilisant (int) pour integer si 
// ca fonctionne ca nous ca nous donne un numerique en cas d'echec ca nous donne le numerique , en cas d'echec ca nous donne la numerique 
 $temp=(int)$_POST['temperature']; 
//var_dump($temp===0){
 settype($_POST['temperature'], "integer" ); 
 
 //concatenation avec.= //les {$temp}° permettent  que la variable ne soit pas confondue avec une autre avariable $temp °
    if($temp <=0){
        $reponse.="l'eau gele à {$temp}"; 
    }else if($temp < 100){
        $reponse .="l'eau est liquide {$temp}° " ; 
    }else{
        $reponse ="L'eau est à l'état gazeux à {$temp}° "; 
    }
 
 
 // initializaton du notre variable de reponse 
$reponse="" ; 
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
<h1>Temperature</h1>
<form name="name1" method="POST" action="">

<p> Bonjour , quel est la temperature dehors   </p>
<input type="number" min="-50" max="50" name="temperature"  placeholder ="mettez la temperature" ><br>
<input type="submit" value="Envoyer" >
</form>
<?php


// si le variable $reponse existe en que c'est ne pas vide 
if(isset($reponse)&& !empty($reponse)){
 echo "c 'est vide" ; 
}


?>

</body>
</html>
    