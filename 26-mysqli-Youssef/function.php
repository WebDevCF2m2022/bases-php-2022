<?php 

/*
    reçoit un it avec le nombre d'habitants 
    renvoie un string avec la convertion en millions (avec 2 chiffre après la virgule)
*/
function perMillion(int $number): string {
    $resultat = number_format($number/1000000, 2, ',', ' ');
    if($resultat > 1):
        return " {$resultat} Millions" ;
    else :
        return "{$resultat} Million";
    endif;
}
    
