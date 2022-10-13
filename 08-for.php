<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>for</h1>
    <p>Le for est souvent utilisé pour afficher des listes numériques (classement, pagination, etc)</p>
    <p>Par défaut, on utilise généralement $i comme variable (i de itération)</p>
    <p>Il faut faire attention car il est très facile de faire une boucle infinie avec la boucle for.</p>
    <pre><code>
    for(déclaration ; condition ; changement)
</code></pre>
    <h1>for</h1>
    <p>Le for est souvent utilisé pour afficher des listes numériques (classement, pagination, etc)</p>
    <p>Par défaut, on utilise généralement $i comme variable (i de itération), la règle la plus commune étant de mettre $i à 0 ou à 1 (=déclaration, que je ne fais qu'une fois au tout début comme en JS), d'effectuer ensuite la boucle tant que $i sera plus petit ou plus grand qu'un nombre choisi (c'est la condition, doit devenir false à un moment pour éviter la boucle infinie), ensuite on modifie la valeur de $i (lechangement, par exemple une incrémentation) pour éviter la boucle infinie.</p>
    <p>Il faut faire attention car il est très facile de faire une boucle infinie avec la boucle for.</p>
    <pre><code>
    for(déclaration ; condition ; changement){ ... exécution}
</code></pre>
    <h3>Incrémentation de 1</h3>
    <!--les simples guillemets ' ' interprente que c'est un STRING
les double guillemets " "  interpretent la VARIABLE-->
    <pre><code>$i=5   <!--on démarre à 5. IL y a plusieurs manière d'incrémenter, c'est ce qu'on va montrer ci-dessous-->
$i=$i+1
echo $i;  //6
$i+=1;
echo $i;  //7
$i++;
echo $i;  //8
echo $1++; //8 car il affiche le $i avant de faire l'incrémentation
echo $i;  //9 car a effectué l'incrémentation de la ligne précédente
echo ++$i;  //10 car l'incrémentation se fait avant l'affichage
</code></pre>
    <?php
    //$i vaut 1 au premier tour. Il passe la condition -> après l'exécution, il effectue le changement puis recommence la boucle (sans devoir passer par l'étape déclaration ou initialisation)
    // initialisation -> condition -> modification
    for ($i = 1; $i <= 20; $i = $i + 1) {
        echo "$i";
    }
    ?>

    <p>Si on veut incrémenter d'un autre chiffre que 1, l'utilisation du += est le plus courant.</p>
    <?php
    for ($i = -10; $i <= 10; $i += 2) {
        echo "$i";
    }
    ?>

    <h3>Décrémentation de 1</h3>
    <pre><code>$i=5   <!--la même chose mais dans l'autre sens-->
$i=$i-1
echo $i;  //4
$i-=1;
echo $i;  //3
$i--;
echo $i;  //2
echo $1--; //2 car il affiche le $i avant de faire la décrémentation
echo $i;  //1 car a effectué la décrémentation de la ligne précédente
echo --$i;  //0 car la décrémentation se fait avant l'affichage
</code></pre>

</body>

</html>