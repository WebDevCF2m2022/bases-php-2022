<?php
include_once "configuration.php";
include "pages/menu.php"; 
if(isset($_GET['u'])){
    
    // utilisation du switch
    switch($_GET['u']){
        case 'formateurs':
            include "pages/formaweb.php";
            break;
        case 'stagiaires':
            include 'pages/stagweb.php';
            break;
        case 'classes':
            include 'pages/classcf.php';
            break;
        default:
            include_once "pages/homepage.php";

    }

// sinonpas de $_GET['page'];    
}else{
    include_once "pages/homepage.php";
    

}

include "pages/footer.php";
?>
 