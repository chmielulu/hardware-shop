<?php
    session_start();
    $_SESSION['page'] = "Home";

    try{
        if(!file_exists("config.php")){
            throw new Exception("File doesn't exists");
        }
    
        else{
            require_once("config.php");
        }

    }
    
    catch(Exception $e) {    
        echo "Fatal error! " . $e->getMessage();
        exit();
    }

    loadFile("database.php");
    loadFile(DIR_TEMPLATES."core.php");

?>