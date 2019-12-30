
<?php
    session_start();

    require_once 'database.php';

    if(isset($_SESSION['info'])) echo $_SESSION['info'];
    unset($_SESSION['info']);

    $pdo = new DatabaseConnect;

    $query = $pdo->getPDO();

    $getProducts = $query->prepare('SELECT product_id, product_name, sub_category_name, category_name FROM products, sub_categories, categories WHERE products.sub_category_id = sub_categories.sub_category_id AND sub_categories.category_id = categories.category_id');
    $getProducts->execute();

    $products = $getProducts->fetchAll();

    if(isset($_POST['submit'])){
        if(is_uploaded_file($_FILES['image']['tmp_name'])){

            if(!file_exists('../Shop/Products/'.$_POST['product'])){
                mkdir('../Shop/Products/'.$_POST['product']);
                mkdir('../Shop/Products/'.$_POST['product'].'/Photos');
            }

            if(!file_exists('../Shop/Products/'.$_POST['product'].'/Photos/1.jpg')){
                $lastFileName = 0;
            }

            else{
                $files = array_slice(scandir('../Shop/Products/'.$_POST['product'].'/Photos'), 2);
                $lastFile = end($files);
                $lastFileName = (int)preg_replace('/\\.[^.\\s]{3,4}$/', '', $lastFile);
            }

            $temp = explode(".", $_FILES["image"]["name"]);
            $newFileName = $lastFileName + 1 . '.' . end($temp);

            move_uploaded_file($_FILES['image']['tmp_name'],
                $_SERVER['DOCUMENT_ROOT'].'/Shop/Products/'.$_POST['product'].'/Photos/'.$newFileName
            );

        }
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie zdjęć produktów</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Dodawanie zdjęć produktów</h1>

    <?php
        echo '<form method="POST" ENCTYPE="multipart/form-data">';
            echo '<select name="product">';
            echo '<option selected disabled>Produkt</option>';

            foreach($products as $item){
                echo '<option value="'.$item['product_id'].'">';
                    echo $item['product_name'].' . . . . . . . . . . . . . . . . . '.$item['sub_category_name'].' ('.$item['category_name'].')';
                echo '</option>'.PHP_EOL;
            }

            echo '</select>';

            echo '<br>';

            echo '<input type="file" name="image" accept="image/jpeg">';

            echo '<br>';
            echo '<input type="submit" name="submit">';
        echo '</form>';
    ?>

    <a href="index.php">Powrót</a>

</body>
</html>