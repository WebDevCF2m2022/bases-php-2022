<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>include() est une function qui va permettre d'importer n'importe quoi (en généeral  une autre fichier PHP ) , autant de fois qu'on souhaite, et sans erreur grave en cas d'echec  </p> 
<?php
include "18-config.php "; 
//appel le footer 
include "18-footer-1.php"; 
//erreur 
include "18-footer-1.php2 ";
//malgré l'erreur , le code ne s'arrête pas ,on charge dont encore le footer 
include "18-footer-1.php " ; 

//appel le footer 
include_once "18-footer-1.php"; 
// erreur
include_once "18-footer-1.php2"; 
// malgre l'ereure , me code ne s'arrêter pas , on recharge pas le footer 
include_once "18-footer-1.php";


echo "<h3> je suis quand meme executé </h3>" ; 
?>
</body>

</html>