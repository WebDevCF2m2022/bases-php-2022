<h3>Les constantes</h3>
<p>Ce sont des variables qui doivent être initialisées avec une valeur. Celle-ci ne peut être changée après l'initialisation. On peut utiliser defin ou const en PHP pour créer celles-ci.</p>
<h4>define("NOM_MAJUSCULE",{valeur})</h4>
<p></p>
<?php
define("UNE_CONSTANTE","une chaîne de caractère");

echo UNE_CONSTANTE;
//erreur car dejà définie !
//define("UNE_CONSTANTE",25);
echo "<br>".UNE_CONSTANTE." est affichée";

define("DB_HOST","localhost");
define("TABLEAU",['un',
                    'deux',
                    'trois',

]);
echo "<br>".DB_HOST;
// erreur, affichage d'un tableau
// echo "<br>".TABLEAU;
array_push(TABLEAU,["lala"]);
var_dump(TABLEAU);
echo "<br>".TABLEAU[0];

?>