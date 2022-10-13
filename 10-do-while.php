<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while</title>
</head>
<body>
    <h1>Do While</h1>
    <p>boucle la moins utilisée. Elle permet d'exécuter le code à haque fois que le résultat est true (comme le while) MAIS si jamais dès la première occurence je tombe sur false, elle va quand même exécuter une fois la fonction.<br>
    en gros, si j'ai 17 true et 1 false après, il va exécuter 17 fois la fonction - mais que 17 fois.<br>
    par contre si je tombe 1 fois sur false et que donc la boucle s'arrête net, elle va quand meme exécuter une fois la fonction (contrairement au while)
    </p>
    <p>fais le! et fais le temps que c'est vrai. Mais d'office fait-le!</p>

    <?php
    $i=0;
    while($i>0 && $i<10){
        echo "$i ";
        $i++;
    }
    $i=0;
    //le do while va afficher le 0 malgré que la condition ne soit pas remplie.
    do{
        echo "$i ";
    }while($i>0 && $i<=10);

    echo "<hr>";
    //ici le code est exécuté 1x, on affiche le 0, puis  on met cette valeur à 1. Du coup, elle rentre dans la condition et le while va alors tourner jusqu'à 10.
    $i=0;
    do{
        echo "$i";
    }while($i>0 && $i<=10);
        
    ?>
</body>
</html>