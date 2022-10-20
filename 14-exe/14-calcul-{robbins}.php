 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <h2>Exercice calculatrice</h2>
    <p>Créez une branche et un nouveau fichier dans 14-exe/14-calcul-{prénom}.php<br>
Envoyez-moi le git pull request sur notre dépôt de la classe</p>
    <p>$reponse doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p>
   
    <?php
    if(isset($reponse)):
        echo $reponse;
    endif;
    ?>
    <hr>
    <?php
    var_dump($_POST);
    ?>
</body>
</html>


</html>
<html>
<body>
    <h1>Calculatrice</h1>
<form method="POST" action="#" >
<input type="text" name="n1">
<select name="op" >                       
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
         <option value="/">/</option>
        </select> 
<input type="text" name="n2">
<input type="submit" name="b1" value="Calculer">
</form>
<?php
	 $n1=$_POST['n1'];
	$op=$_POST['op'];
	$n2=$_POST['n2'];
		if (isset($op)){
    echo("Resultat du calcul ".$n1.$op.$n2." : ");
    if ($op=="+") {
        echo $n1+$n2;
    } elseif ($op=="-") {
        echo $n1-$n2;
    } elseif ($op=="*") {
        echo $n1*$n2;
    } else {
        echo $n1/$n2;
    }
}
?>
</body>
</html>