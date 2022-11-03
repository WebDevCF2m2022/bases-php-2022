<?php
include "22-functions.php";
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
    <h1>Calculette</h1>
    <form action="" name="calcul" method="POST">
        <input type="text" name="num1" />
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="text" name="num2" />
        <input type="submit" value="Calculer"/>
    </form>
<?php
if(isset ($_POST['num1'],$_POST["num2"],$_POST["op"])){
    echo calculBasic($_POST['num1'],$_POST['num2'],$_POST["op"]);
}
?>
</body>
</html>