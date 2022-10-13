<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucle while</h1>
    <p>C'est une boucle qui permet de tourner tant que ses paramètres (arguments) nous donnent true. C'est la plus dangereuse car on arrive vite à faire une boucle infinie non prévue. Son avantage est qu'elle est la plus rapide.</p>
    <pre><code>while(tant que c'est vrai){
        exécution ...
        
    } 

    </code></pre>
    <?php $i=5;
    while($i<20){
        echo "$i ";
        $i+=5;
    }
    echo "<hr>";
    // voici un tableau avec 5 valeurs
    $tab = [0,1,2,3,4];

    // seul le 0 représente false, les autres valeurs valent true
    // on va mettre dans le while une valeur au hasard de notre tableau avec array_rand
    // https://www.php.net/manual/en/function.array-rand.php

    /* création d'une variable utilisateur nommée nombreTableauHasard
    qui a besoin d'un tableau paramètre ($value)
    */
    
    function nombreTableauHasard(array $value){
        // création d'une fonction locale qui va contenir une valeur du tableau au hasard
        $nombre = array_rand($value);
        // si cette valeur est 0 
        if($nombre==0){
            // on envois false (pour notre while -> fin de la boucle)
            return false;
        // sino
        }else{
            // on renvoie le nombre venant du tableau
            return $nombre;
        }
    }

    // tant que nombreTableauHasard($tab) vaut vrai (true), la boucle pourra s'arrêter car la valeur 0 renvoie false 
    while($a = nombreTableauHasard($tab)){
        // on affiche le numérique récupéré
        echo "$a";
    }
    




    ?>
    
</body>
</html>