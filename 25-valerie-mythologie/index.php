
<?php

if(isset($_GET['vue'])){

    switch ($_GET['vue']){
        case 'concepts':
            include "pg/concepts.php";
            break;
        case include 'utilite':
            include "pg/utilite.php";
            break;
        case 'dieux':
            include "pg/dieux.php";
            break;
        case 'photos':
            include "pg/photos.php";
            break;
        case 'actuellement':
            include "pg/actuellement.php";
            break;
        case 'merci':
            include "pg/merci.php";
            break;   
        default:
            include_once "pg/404.php" ;
        }
    }else{
        include_once "pg/introduction.php";
    }


?>