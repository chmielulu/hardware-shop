
<?php
    session_start();

    if(isset($_SESSION['info'])) echo $_SESSION['info'];
    unset($_SESSION['info']);

    require_once 'database.php';

    $pdo = new DatabaseConnect;

    $query = $pdo->getPDO();

    $getCategories = $query->prepare('SELECT category_id, category_name FROM categories');
    $getCategories->execute();
    $categories = $getCategories->fetchAll();
    
    $i = 0;

    foreach($categories as $item){

        $categoryID[$i] = $item['category_id'];
        $categoryName[$i] = $item['category_name'];

        $i++;
    }

        $i = 0;

    foreach($categoryID as $item){
        $getSubCategories = $query->prepare('SELECT sub_category_id, sub_category_name FROM sub_categories WHERE category_id = :category_id');
        $getSubCategories->bindValue(':category_id', $categoryID[$i], PDO::PARAM_INT);
        $getSubCategories->execute();

        $subCategories[$i] = $getSubCategories->fetchAll();
        $i++;
    }

    if(isset($_POST['name'])){
        $insertProduct = $query->prepare('INSERT INTO products VALUES (NULL, :name, :info, :price, :discount, :ranking, :quantity, :subCategory)');
        $insertProduct->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $insertProduct->bindValue(':info', $_POST['info'], PDO::PARAM_STR);
        $insertProduct->bindValue(':price', $_POST['price'], PDO::PARAM_STR);
        $insertProduct->bindValue(':discount', $_POST['discount'], PDO::PARAM_STR);
        $insertProduct->bindValue(':ranking', $_POST['ranking'], PDO::PARAM_INT);
        $insertProduct->bindValue(':quantity', $_POST['quantity'], PDO::PARAM_INT);
        $insertProduct->bindValue(':subCategory', $_POST['sub-category'], PDO::PARAM_INT);
        $insertProduct->execute();

        $_SESSION['info'] = '<span class="info">Wysłano!</span>';

        header('Location: dodawanie_produktow.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie produktów</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Dodawanie produktów</h1>

    <form method="POST">
        <input type="text" placeholder="Nazwa produktu" name="name">
        <br>
        <input type="text" placeholder="Podstawowe informacje" name="info">
        <br>
        <input type="number" step=".01" placeholder="Cena produktu" name="price">
        <br>
        <input type="number" step=".01" placeholder="Przecena (jeśli istnieje)" name="discount">
        <br>
        <input type="number" placeholder="Ranking" name="ranking">
        <br>
        <input type="number" placeholder="Ilość posiadanych" name="quantity">
        <br>
        <select name="sub-category">
            <option selected disabled>Podkategoria</option>
            <?php
                $i = 0;
                foreach($categoryName as $catName){
                    echo '<optgroup label="'.$catName.'">';
                    foreach($subCategories[$i] as $item){
                        echo '<option value="'.$item['sub_category_id'].'">';
                        echo $item['sub_category_name'];
                        echo '</option>';
                    }
                    echo '</optgroup>';
                    $i++;
                }
            ?>
        </select>
        <br>

        <input type="submit">
    </form>

    <a href="index.php">Powrót</a>
</body>
</html>