<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>

<h1>for</h1>
<p>Le for est souvent utilisé pour afficher des listes numériques, (classement, pagination, etc)

</p>
<p>Par défaut on utlise généralement $i comme variable (itération), la ègle la plus commune étant de mettre $i à 0 ou à 1 (Déclaration), d'effecuer la boucle tant que $i sera plus petit ou plus grand qu'un nombre choisi (Condition), on modifie ensuite la valeur de $i (Changement) pour éviter la boucle infinie
</p>
<pre><code>
for (Déclaration ; Condition ; Changement){
    exécution...
}

</code></pre>
<h3>Incrémentation</h3>
<p>Ajouter 1 à une variable de type numérique</p>
<pre><code>
$i = 5;
$i = $i + 1;
echo $i; // 6
</code></pre>
<hr>
    <?php
    //$i vaut 1 au premier tour, il passe la condition, après l'exécution il effectue changement et recommence la boucle (sans repasser par la déclaration ou initialisation)
    for($i=1; $i <= 20 ; $i++){
        echo $i."<br>";

    }
    ?>
    <p> Si on veut incrémenter d'un autre chiffre que 1, l'utilisation du += est le plus courant</p>
    <?php
    for($i2= -10 ; $i2<=10; $i2+=2){
        echo $i2."<br>";
    }
    ?>
    </body>
</html>