<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Array</h1>
    <p>Les tableaux sont la base de gestion des données en PHP comme dans la plupart des langages. On pourra également utiliser des objets, des fichiers JSON ou Xml pour faire la même chose, mais en PHP le tableau restera le principal pour gérer toutes les données.</p>
    <p>en PHP, on a 2 manières de créer des tableaux:</p>
    <pre><code> <!--pre fait un retour à la ligne, code affiche en format code sur l'écran-->

$tab = array();   // manière longue d'écrire 

$tab = [],     //manière courte d'écrire et de plus en plus utiliser comme bonne pratique et bien gérer par JSON
    </code></pre>

    <h2>Les tableaux indexés</h2>
    <p>Tableaux dont les clefs ne sont pas créées par le développeur mais par PHP de manière automatique</p>
    <pre><code>
$tab = [
        5,
        8,
        false,  <!--n'affichera rien à l'écran, juste un vide, et le true indiquerait 1    -->
        27.12,
            [
                "coucou",
                "vous",
                "allez",
                "bien",
                "?",
                   [ <!--je met un nouveau tableau dans mon tableau-->
                        9,
                        "yes",
                        "je vais bien",                
                    ],
            ],        
        ];

        <?php
            print_r($tab);

        ?>
    </code></pre>

</body>
</html>