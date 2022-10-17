<?php
// débogage dans la variable var_dump()
//var_dump($_POST);

//si il existe la variable *_POST nommé temperature

if(isset($_POST['temperature']) && is_numeric($_POST['temperature'])){


    //on va créer une variable temporaire locale, et changer le type de notre variable en entier en utilisant (int) pour integrer, si ça fonctionne ça nous 
    $temp = (int) $_POST['temperature'];

    // $temp2 = settype($_POST['temperature'], "integer");
    //var_dump($temp,$temp2,$_POST['temperature']);
    $response = "<h3>";


        if($temp <= 0){
                $response .="Il gèle";
        }


        $reponse .= "</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interface utilisateur</title>
</head>
<body>
    <h1>Températures</h1>
    <form name="temperature" method="post" action="">
    <p>Bonjour, quel est la température dehors?</p>
    <input type="number" name="temperature" placeholder="Mettez la température" required><br>
    <input type="submit" value="Envoyer">


    </form>

    <?php
    if(isset($response) && empty($response)){
        echo "C'est vide";
    }
    ?>
</body>
</html>