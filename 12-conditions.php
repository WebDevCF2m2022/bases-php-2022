<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h2>if (condition)</h2>
    <p>Plus basique que les boucles, les conditions sont cependants la base de tous les langages informatique.</p>
    <p>Le if va vérifier que le ou les paramètre.s passé.s entre () valent true (boolean)</p>
    <pre><code>
        if (condition){
            // si la condition est vraie
            echo "true";
        }
    </code></pre>

    <?php
    $nombre = mt_rand(0,20);
    
    //si $nombre est plus petit que 10 affichez le entre "$nombre est plus petit que 10"

    if($nombre<10){
        echo "$nombre est plus petit que 10";

    }
    ?>
    <p>Une condition peut être complexe, et donc utiliser les && (et), || (ou), ! (contraire de) et XOR (^ ou stricte)</p>

    <?php
    if(isset($nombre) and $nombre > 5 and $nombre < 15){
        echo "$nombre existe ET est plus grand que 5 ET est plus petit que 15";
    }
    ?>
    <h2>else - SINON</h2>
       <p>C'est l'exécution du code si jamais le if qui précède est un false</p>

       <?php
       $temp = mt_rand(-20,20);
       echo "<h4>$temp ° ";

       if($temp <= 0){
            echo "Il gèle dehors !";

       }else{
            echo "Il ne gèle pas";
       }
       ?>
       <h2>elseif ou else if - SINON SI</h2>
       <p>C'est l'exécution d'une vérification supplémentaire si jamais le if (ou autre elseif) qui précède est un false</p>
       <?php
       if($temp <= -10){
            echo "Il fait très froid dehors";
    

       }elseif($temp <=0){
        echo "Il fait froid dehors";
        
       }
       elseif($temp <=12){
            echo "Qué frio!";
       }
       else{
        echo "il fait bon dehors";
       }
       ?>
</body>
</html>