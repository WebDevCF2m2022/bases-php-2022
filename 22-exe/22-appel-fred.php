<?php
include "22-functions.php";

if(isset($_POST['nb1'],$_POST['operateur'],$_POST['nb2'],)){

$result = "Effectuez un calcul";

$num1=($_POST['nb1']); 
$op=($_POST['operateur']); 
$num2 =($_POST['nb2']); 

$result=calculBasic($num1,$num2,$op);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
</head>
<body>
    <h1>Test de nos fonctions</h1>
    <h2>Calculatrice</h2>
    <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
    <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>
    <p>Bonus, changez la fonction pour afficher par exemple :<br> 25/5 = 5</p>
    
    <h1>Calculatrice</h1>
    
  
    <form action="" name="calcul" method="POST">
        <input type="text" name="nb1" />
        <select name="operateur">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="nb2" />
        <input type="submit" value="="/>
    </form>
    <hr>
<?php

if(isset($result))
echo $num1, $op, $num2, "=", $result
?>
</body>
</html>