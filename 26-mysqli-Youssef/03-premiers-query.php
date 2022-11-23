<?php 
include "function.php";
require_once "config.php";
try {
    // connexion à la DB mysql "statistiques"
    $mysqliConnect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);

    // application du charset à notre connexion
    mysqli_set_charset($mysqliConnect, DB_CHARSET);

// capture de l'erreur plutôt que son affichage immédiat
}catch(Exception $e){

    // affichage de l'erreur encodée en utf8 avec utf8_encode()
    echo utf8_encode($e->getMessage());
}

var_dump($mysqliConnect);
     // crétation d'une variable du cul ma bite
    $sql = "SELECT * FROM statistiques ORDER BY  `nom` ASC;"; 
   //execution de requête avec mysqli_querry, en cas d'échec on arrête le script 
    $query = mysqli_query($mysqliConnect,$sql) or die("Erreur lors de la requête");

    // on vérifie combien de resultats on a obtenu avec notre select
    $nbPays = mysqli_num_rows($query); 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Première requête </title>
</head>
<body>
    <h1>Prmeière requête</h1>
    <h2>Nombre de pays <?=$nbPays?> </h2>
    <?php
    //si on a pas récupérer de pays
    if(empty($nbPays))    :
        echo "<h3>Pasde pays !</h3>";
    // tant qu'on a des pays à lister
    
else:


    //tant qu'on a des lignes de résultats (pas de foreach car l'objest n'est pas traité a l'avance, utilisation du while) - mysqli_fetch_assoc convertit,  ligne après ligne, le résultat en tableau assiosiatif
    while($item = mysqli_fetch_assoc($query)):
    
    ?>
    <p><?=$item['nom']?> <?=perMillion($item['population'])?> </p>
    <?php 
    endwhile;
    endif;
    ?> 
</body>
</html>