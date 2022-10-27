<?php
define("UNE_CONSTANTE","une chaine de caracter");
echo UNE_CONSTANTE; 
// on peut injecte un scripe pour change la constant c'est deja defini (pour ca on donne la valeur la creeation ); 
//define("UNE_CONSTANTE",25);    => il donne une erreur ; 

echo "<br> UNE_CONSTANTE est affichée " ;
echo "<br>" {UNE_CONSTANTE} "est affichée " ;
echo "<br>".UNE_CONSTANTE."est affichée " ;
define("DB_HOST","localhost"); 
define("TABLEAU",[ 'un', 
                  'deux',
                'trois',]); 

echo "<br>".DB_HOST; 
//echo "<br>".TABLEAU;    => erreur de affichage de tableau ;  le constant c'est rare en tableau ; 
echo "<br>".TABLEAU[0]; 

var_dump(TABLEAU); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <h3>Les constant</h3>
<p> ce sont des variables qui doivent être initialisées avec une valeur. Celui-ci ne peut être changée aprés l'initialisation, On peut utiliser define ou const en php pour cree celle-ci </p>
<h4>define("NOM_MAJUSCULE", {valeur}) </h4>
<p> 
</body>
</html>