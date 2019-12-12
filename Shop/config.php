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
    define("PDIR_TEMPLATES", "../".DIR_TEMPLATES);
    define("DIR_TUTORIALS", DIR_IMAGES."Tutorials/");
    define("PDIR_TUTORIALS", "../".DIR_IMAGES."Tutorials/");
    define("DIR_PRODUCTS", "Products/");
    define("PDIR_PRODUCTS", "../".DIR_PRODUCTS);
    define("DIR_PRODUCT_IMAGES", DIR_PRODUCTS."Images/");
    define("PDIR_PRODUCT_IMAGES", "../".DIR_PRODUCTS);
    define("DIR_CSS", DIR_ASSETS."css/");
    define("DIR_SCRIPTS", DIR_ASSETS."scripts/");
    define("PDIR_CSS", "../".DIR_CSS);
    define("PDIR_SCRIPTS", "../".DIR_SCRIPTS);
?>