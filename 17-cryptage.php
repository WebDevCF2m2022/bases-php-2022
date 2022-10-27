<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Cryptage</h1>
<h2> les crytages non inversables </h2>
<h2>Ne jamais utiliser un site extern pour crééer  mots de passe ! </h2>
<body>
    <form action="" methode="post" name="pwd" >
        <input type="password" name="aPassword" require>
        <input  type ="submit" value="envoyer" />
</form>
<?php
var_dump($_POST); 

?>
<h2>MD5</h2>
<p>  a ne plus utiliser ,trop rapide et donc peu securite  (deja cassée )     </p>
<?php
echo md5_file($_POST['aPassword']); 
?>
<h2>SHA-1 (128bit) </h2>
<p> à ne plus utiliser , car deja casse , emme si c'est de maniere anecodotique  </p>
<?php
echo sha1_file($_POST['aPassword']); 
?>
<h2>SHA-2 (256 bit) </h2>
<p> On peut l'utiliser  avec la founction hash () ;</p>
<p>on va l'utiliser pour le gestion de nos mots de passe , sans lui donner d'algorythme par défault </p>
<?php
echo hash('sha256',$_POST['aPassword']); 
?>
<h1>Recommande : password_hash() et password_verify() ; <h1>
    <p>on va l'utilisr pour le gestion des nos mots de passe , sans ljui donner </p>

    <?php
$pwdHash = password_hash ($_POST['aPassword'], PASSWORD_DEFAULT);
echo $pwdHash ; 
 if (password_verify($_POST['aPassword'],$pwdHash)){
    echo "Bon mot de passe "; 
 } else {
    echo "Mot de passe incorrecte "; 
 }
?>
</body>

</html>