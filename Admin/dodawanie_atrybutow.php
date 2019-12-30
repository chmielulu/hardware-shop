
<?php
    session_start();

    if(isset($_SESSION['info'])) echo $_SESSION['info'];
    unset($_SESSION['info']);

    if(!isset($_SESSION['selected-group'])) $_SESSION['selected-group'] = null;
    if(!isset($_SESSION['selected-subCategory'])) $_SESSION['selected-subCategory'] = null;

    require_once 'database.php';

    $pdo = new DatabaseConnect;
    $query = $pdo->getPDO();

    if(isset($_POST['group-name'])){
        $insertGroup = $query->prepare('INSERT INTO attribute_groups VALUES (NULL, :name)');
        $insertGroup->bindValue(':name', $_POST['group-name'], PDO::PARAM_STR);
        $insertGroup->execute();

        $_SESSION['info'] = '<span class="info">Wysłano!</span>';

        header('Location: dodawanie_atrybutow.php');
        exit();
    }

    $getGroups = $query->prepare('SELECT * FROM attribute_groups');
    $getGroups->execute();

    $groups = $getGroups->fetchAll();

    if(isset($_POST['attribute-name'])){
        $insertAttribute = $query->prepare('INSERT INTO attributes VALUES (NULL, :name, :group)');
        $insertAttribute->bindValue(':name', $_POST['attribute-name'], PDO::PARAM_STR);
        $insertAttribute->bindValue(':group', $_POST['group'], PDO::PARAM_INT);
        $insertAttribute->execute();

        $_SESSION['info'] = '<span class="info">Wysłano!</span>';
        $_SESSION['selected-group'] = $_POST['group'];

        header('Location: dodawanie_atrybutow.php');
        exit();
    }

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

    $i = 0;

    foreach($groups as $item){
        $groupID[$i] = $item['attribute_group_id'];
        $groupName[$i] = $item['attribute_group_name'];

        $i++;
    }

    $i = 0;

    foreach($groupID as $item){
        $getAttributes = $query->prepare('SELECT attribute_id, attribute_name FROM attributes WHERE attribute_group_id = :group_id');
        $getAttributes->bindValue(':group_id', $groupID[$i], PDO::PARAM_INT);
        $getAttributes->execute();

        $Attributes[$i] = $getAttributes->fetchAll();
        $i++;
    }

    if(isset($_POST['attribute'])){
        $insertSubCategoryAttributes = $query->prepare('INSERT INTO sub_category_attributes VALUES (NULL, :sub_category_id, :attribute_id)');
        $insertSubCategoryAttributes->bindValue(':sub_category_id', $_POST['sub-category'], PDO::PARAM_INT);
        $insertSubCategoryAttributes->bindValue(':attribute_id', $_POST['attribute'], PDO::PARAM_INT);
        $insertSubCategoryAttributes->execute();

        $_SESSION['info'] = '<span class="info">Wysłano!</span>';
        $_SESSION['selected-subCategory'] = $_POST['sub-category'];

        header('Location: dodawanie_atrybutow.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie atrybutów specyfikacji</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Dodawanie atrybutów specyfikacji</h1>

    <br><br><br><br>

    <h2>Grupy</h2>

    <form method="POST">
        <input type="text" name="group-name" placeholder="Nazwa grupy">
        <input type="submit">
    </form>

    <br><br><br><br>

    <h2>Atrybuty</h2>

    <form method="POST">
        <input type="text" name="attribute-name" placeholder="Nazwa atrybutu">
        <br>

        <select name="group">
            <option <?php if($_SESSION['selected-group'] == null) echo 'selected '; ?> disabled>Grupa</option>
            <?php
                foreach($groups as $item){
                    echo '<option value="'.$item['attribute_group_id'].'"';
                    if($_SESSION['selected-group'] == $item['attribute_group_id']) echo ' selected>';
                    else echo '>';
                    echo $item['attribute_group_name'];
                    echo '</option>';
                }

                unset($_SESSION['selected-group']);
            ?>
        </select>

        <br>

        <input type="submit">
    </form>

    <br><br><br><br>

    <h2>Łączenie z podkategoriami</h2>

    <form method="POST">

    <select name="sub-category">
        <option <?php if($_SESSION['selected-subCategory'] == null) echo 'selected '; ?> disabled>Podkategoria</option>
        <?php
            $i = 0;
            foreach($categoryName as $catName){
                echo '<optgroup label="'.$catName.'">';
                foreach($subCategories[$i] as $item){
                    echo '<option value="'.$item['sub_category_id'].'"';
                    if($_SESSION['selected-subCategory'] == $item['sub_category_id']) echo ' selected>';
                    else echo '>';
                    echo $item['sub_category_name'];
                    echo '</option>';
                }
                echo '</optgroup>';
                $i++;
            }

            unset($_SESSION['selected-subCategory']);
        ?>
    </select>
    <br>
    <select name="attribute">
        <option selected disabled>Atrybut</option>
        <?php
            $i = 0;
            foreach($groupName as $grName){
                echo '<optgroup label="'.$grName.'">';
                foreach($Attributes[$i] as $item){
                    echo '<option value="'.$item['attribute_id'].'">';
                    echo $item['attribute_name'];
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