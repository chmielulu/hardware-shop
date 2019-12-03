<?php
    function loadFile($fileDirection){
        try{
            if(!file_exists($fileDirection)){
                throw new Exception("<b>Fatal error!</b> File: $fileDirection doesn't exists!");
            }

            else{
                require_once $fileDirection;
            }
        }

        catch(Exception $e){
            echo $e->getMessage();
            exit();
        }
    }

    define("DIR_ASSETS", "Assets/");
    define("DIR_IMAGES", DIR_ASSETS."images/");
    define("DIR_TEMPLATES", "Templates/");
    define("DIR_TUTORIALS", DIR_IMAGES."Tutorials/");
    define("TDIR_TUTORIALS", "./".DIR_IMAGES."Tutorials/");
    define("DIR_PRODUCTS", "Products/");
    define("TDIR_PRODUCTS", "./".DIR_PRODUCTS);
    define("DIR_PRODUCT_IMAGES", DIR_PRODUCTS."Images/");
    define("TDIR_PRODUCT_IMAGES", "./".DIR_PRODUCTS);
    define("DIR_CSS", DIR_ASSETS."css/");
    define("TDIR_CSS", "./".DIR_CSS);
?>