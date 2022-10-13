<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle while</title>
</head>
<body>
    <h1>La boucle while</h1>
    <p>C'est une boucle qui permet de tourner tant que ses paramètres (arguments) nous donent TRUE. Cela va fonctionner tant que ce que l'on a entre parentheses est vrai.<br>
    C'est la boucle la plus dangeureuse car on crée rès facilement des boucles infinies. Du coup, pourquoi l'utiliser? parce que c'est la plus rapide.</p>
    
    <pre><code>while (tant que c'est vrai){
        exécution...
    }
    </code></pre>

    <?php
    $i=5;
    while($i<20){
        echo "$i ";
        $i+=5;
    }
    //je dois obligatoirement mettre quelque chose pour arreter ma boucle
    echo "<hr>";

    //tableau indexé avec 5 valeurs
    $tab=[0,1,2,3,4];
    // seul le 0 représente FALSE, les autres valeurs valent TRUE
    /* pour ma boucle, je vais prendre une clef au hasard dans le tableau.
    pour cela, on va utliser array_rand --> rand pour random 
    https://www.php.net/manual/fr/function.array-rand.php*/
    
    /*création d'une fonction utilisateur nommée nombre TableauHasard qui a besoin d'un tableau en paramètre ($value)*/
    function nombreTableauHasard(array $value){
        //création d'une variable locale qui va contenir une valeur du tableau au hasard
        $nombre=array_rand($value);
        //si cette valeur est 0
        if($nombre==0){
            //on envoie false (pour notre while -> fin de boucle)
            return false;
        //sinon
        }
        else{
            //on renvoie le nombre venant du tableau
            return $nombre;
        }
    }
    
    //tant que nombreTableauHasard($tab) vaut vrai (true), la boucle pourra s'arrêter car la valeur 0 renvoie false

    while($a = nombreTableauHasard($tab)){
        //on affiche le numérique récupéré
        echo "tab";
    }
   
    ?>
    
 



</body>
</html>