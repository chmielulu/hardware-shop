<?php
    require_once 'database.php';

    $pdo = new DatabaseConnect;
    $query = $pdo->getPDO();

    if(isset($_GET['name'])){

        $insetCategories = $query->prepare('INSERT INTO `categories` VALUES (NULL, :name)');
        $insetCategories->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
        $insetCategories->execute();
        unset($_GET['name']);
    }

    $getCategories = $query->prepare('SELECT * FROM categories');
    $getCategories->execute();

    $categories = $getCategories->fetchAll();

    if(isset($_POST['category-id'])){
        $insertSubCategories = $query->prepare('INSERT INTO sub_categories VALUES (NULL, :categoryId, :categoryName)');
        $insertSubCategories->bindValue(':categoryId', $_POST['category-id'], PDO::PARAM_INT);
        $insertSubCategories->bindValue(':categoryName', $_POST['sub-category-name'], PDO::PARAM_STR);
        $insertSubCategories->execute();
        $id = $_POST['category-id'];
    }

    $_GET = array();
    $_POST = array();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form method="GET">

        <h3>Nazwa kategorii:</h3>
        <br>
        <input type="text" name="name">

        <input type="submit">

    </form>

    <form method="POST">
    <h3>Kategorie:</h3>
    <br>
    <?php
        foreach($categories as $item){
            echo '<span class="id"><b>'.$item['category_id'].'</b> </span>';
            echo '<span class="name">'.$item['category_name'].'</span>';
            echo '<br>';
        }
    ?>
    <br>
        ID Kategorii
        <input type="number" name="category-id" value="<?php if(isset($id)) echo $id;?>">
        
        <br>

        Nazwa kategorii
        <input type="text" name="sub-category-name">

        <input type="submit">
    </form>

    <a href="index.php">Powrót</a>
</body>
</html>

<?php
    unset($categories);
?>