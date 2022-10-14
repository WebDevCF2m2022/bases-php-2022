
 

<?php
//Exem1

foreach($stagiaires as $value){

    echo $value." | ";

}
?>

<?php

//Exem2

foreach($stagiaires as $key =>$value){

   echo $clef." ->". $value."<br>";

}
?>

<?php
//Exem3

asort($stagiaires);

foreach($stagiaires as $key =>value){
    echo $value."-$key |";
}
?>

 <?php
 $hasard = mt_rand(0.17);
 for($i=0; $i<=$hasard; $i++){
    echo"$i, ";

 }
 