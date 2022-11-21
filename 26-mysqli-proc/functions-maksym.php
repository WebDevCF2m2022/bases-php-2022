<?php

/*
reçoit un int avec le nombre d'habitants
renvoie un string avec la convertion en millions (avec 2 chiffres après la virgule)

en Inde : perMillion(1210193422) => "1210.19 Millions"
à Andorre : perMillion(85959) => "0.08 Million"

A partir de 2 millions on rajoute s à "Million"

*/
function perMillion(int $number): string {

        if ($number > 1000000) return round(($number/1000000), 2).' Millions';
        elseif ($number <1000000) return round(($number/1000000), 2).' Million';
        return number_format($number);
    }

echo perMillion('1210193422');
echo perMillion('85959');

?>
<br><br>
    return "";
}