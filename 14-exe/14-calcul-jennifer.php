<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice "calculatrice"</title>
</head>
<body>
<h2>Exercice calculatrice</h2>
 <p>Envoyez-moi le git pull request sur notre dépôt de la classe</p><br>
    <p>$reponse doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p><br>
    
    <form action="" name="calcul" method="POST">
        <input type="text" name="first" />
        <select name="choix">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
         <option value="/">/</option>
        </select>
        <input type="text" name="second" />
        <input type="submit" name="rep" value="Calculer"/>
    </form>
   
    <hr>
    <?php
    $first=$_POST['first'];
    $choix=$_POST['choix'];
    $second=$_POST['second'];
    
    if (isset($_POST['first'],$_POST['choix'],$_POST['second'])){
        
        if ($choix=== '/' && $second===0){
           
         $reponse= "Impossible";
         echo $reponse; // Problème avec le echo il ne s'affiche pas et je vois pas le problème sorry 
        }
        elseif ($choix=="+"){
           $reponse= $first+$second;
           echo "la reponse est ". $reponse;
        }
        elseif ($choix=="-"){
            $reponse= $first-$second;
           echo "la reponse est".$reponse;
        }
        elseif ($choix=="*"){
            $reponse= $first*$second;
            echo "la reponse est".$reponse;
        }
        
        }
        elseif ($choix=="/"){
            $reponse= $first/$second;
            echo "la reponse est".$reponse;
        }
        
    
    ?>
    <hr>
    <?php
    var_dump($_POST);
    ?>
    <?php
    if(isset($reponse)):
        echo $reponse;
    endif;
    ?>
</body>
</html>