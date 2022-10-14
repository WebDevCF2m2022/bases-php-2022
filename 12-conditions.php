<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <h1>Les Conditions</h1>
        <h2>if (condition), SI</h2>
            <p>Plus basiques que les boucles, les conditions sont cependant le base de tous les langages informatiques.<br>
            Le if va vérifier que le(s) paramètre(s) entre () valent true (boolean).</p>
            <pre><code>
                if(condition1){  //si la condition est vraie
                    echo "true";
                }
            </code></pre>
            
            <?php
            $nombre = mt_rand(0,20);
            //si $nombre est plus petit que 10, affichez le - de cette manière "$nombre est plus petit que 10"
            if($nombre<10){
                echo "$nombre est plus petit que 10";
            }      
            ?>
            <br>
            <p>Une condition peut être complexe et donc utiliser <br>
                - les && (vaut "et", tout doit être valide), <br>
                - || (vaut "ou" et c'est un ou non-exclusif: il suffit d'un seul true pour que ça soit bon), <br>
                - ! (contraire de) et <br>
                - XOR ("ou" exclusif: un seul peut être true, si plusieurs sont true alors le résultat est false) <br>
               Voir également <a href="https.//www.php.net/manual/fr/language.operators.logical.php" target="_blank">les opérateurs logiques.</a></p>
               
            <?php 
            /*isset va être beaucoup utiliser pour des variables ecternes
            le sens de lecture est important
            */
            //si la variable est initialisée (isset) (ici $nombre existe)

            if (isset ($nombre)&&$nombre>5 && $nombre <15){
                echo "$nombre existe ET est plus grand que 5 ET est plus petit que 15";
            }
            
            ?>   
            









</body>
</html>