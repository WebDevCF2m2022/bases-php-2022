<?php 

// Appel des dépendances
require_once "config.php";

// si il existe une variable get nommée page
if(isset($_GET['page'])){
    echo"yes";
}else{
    echo"no"
}