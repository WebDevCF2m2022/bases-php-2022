<?php
//affichez les chiffres de 100 à 0 séparés par un espace
for($i=100; $i >= 0; $i=$i-1){
    echo"$i ";
}
//on met un espace après le $i sans utiliser de . dans ce cas-ci car on est à l'intérieur de l'echo
echo"<br>";

for($i=100; $i>=0; $i--){
    echo"$i ";
}

echo "<br>";

//affichez tous les pairs entre 2 et 1000 séparés par un espace
for($i=2; $i<=100; $i+=2){
    echo"$i ";
}

echo "<br>";

//affichez tous les impairs entre 1 et -99 séparés par un espace
for($i=1; $i>=-99; $i-=2){
    echo"$i ";
}
