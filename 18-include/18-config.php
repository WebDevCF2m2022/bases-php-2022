<?php
 const TEST ="coucou"; 


 function ecrit(){
    global $lulu ;
    $lulu = "coucou"; 
    return $lulu ; 
 }
 echo ecrit(); 


?>