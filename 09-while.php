<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h1>Boucle While</h1>
    <p>C'est une boucle qui permet de tourner tant que ses paramètres (arguments) nous donnent "true". C'est la boucle la plus dangereuse car on arrive vite à faire une boucle infinie non prévue. Son avantage est qu'elle la plus rapide.</p>
    <pre><code>

            while( tant que c'est vrai){
                exécution...
            }

    </code></pre>

    <?php
    $i=1;
    while($i<21){
        echo $i." <br> ";
        $i+=1;
    }
    echo "<hr>";
    // voici un tableau indéxé avec 5 valeurs
    $tab = [0,1,2,3,4];

    // seul le 0 représente false, les autres valeurs valent true
    /* on va mettre dans le while une valeur au hasard de notre tableau avec array_rand */

    while (array_rand($tab)){
        echo 

    }
    ?>
</body>
</html>