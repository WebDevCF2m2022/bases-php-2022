<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>require_once</h1>
    <p>require_once() est une function qui va permettre d'importer n'importe quoi (en généeral  une autre fichier PHP ) , autant de fois qu'on souhaite, et sans erreur grave en cas d'echec  </p> 
<?php
//appel le footer 
require_once "18-footer-1.php"; 
//erreur 
require_once "18-footer-1.php2 ";
 
echo "<h3> je suis pas executé </h3>" ; 
?>
</body>

</html>