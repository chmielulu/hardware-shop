<?php
    define("VERSION", "0.01 Beta");
    session_start();

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