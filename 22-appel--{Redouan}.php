<?php
include "22-functions.php";
var_dump($_POST);
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
   
    <form method="post" action="">
            <input type="text" name="num1">
            <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/" selected>/</option>
            </select>
            <input type="text" name="num2">
            <input type="submit" value="Calculer!">
            <br>
            <br>Réponse :<input type='text' value="<?php if(isset($_POST['num1'],$_POST['num2'],$_POST['op'])){ echo calculBasic($_POST['num1'],$_POST['num2'],$_POST['op']);}?>"><br>

    </form>

</body>
</html>