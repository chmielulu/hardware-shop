<?php

session_start();
$_SESSION['page'] = "Products";

try{
    if(!file_exists("../config.php")){
        throw new Exception("File doesn't exists");
    }

    else{
        require_once "../config.php";
    }

}

catch(Exception $e) {    
    echo "Fatal error! " . $e->getMessage();
    exit();
}

loadFile("../database.php");
loadFile(PDIR_TEMPLATES."core.php");

?>