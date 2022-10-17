<?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}
?>
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
    <h2>Exercice Calculatrice</h2>
    <p>Créer une branche et un nouveau fichier dans 14-exe/14-calcul-{prénom}.php
        <br>
        Envoyez-moi le git pull request sur notre dépôt de la classe
    </p>
    <h1>Calculatrice</h1><br>
<input name="n1" value="">
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<input name="n2" value=""><br>
<br>
<br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
</form>

        </body>
</html>