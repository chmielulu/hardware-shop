
<?php
    session_start();

    require_once 'database.php';

    if(!isset($_SESSION['selected-product'])) $_SESSION['selected-product'] = null;

    if(isset($_SESSION['info'])) echo $_SESSION['info'];
    unset($_SESSION['info']);

    $pdo = new DatabaseConnect;

    $query = $pdo->getPDO();

    $getProducts = $query->prepare('SELECT product_id, product_name, products.sub_category_id, sub_category_name, category_name FROM products, sub_categories, categories WHERE products.sub_category_id = sub_categories.sub_category_id AND sub_categories.category_id = categories.category_id');
    $getProducts->execute();

    $products = $getProducts->fetchAll();

    if(isset($_POST['product'])){
        $product_explode = explode('|', $_POST['product']);

        $getAttributeGroups = $query->prepare('SELECT DISTINCT attribute_groups.attribute_group_id, attribute_groups.attribute_group_name FROM sub_category_attributes, attributes, attribute_groups WHERE attributes.attribute_group_id = attribute_groups.attribute_group_id AND sub_category_attributes.attribute_id = attributes.attribute_id AND sub_category_attributes.sub_category_id = :sub_category_id');
        $getAttributeGroups->bindValue(':sub_category_id', $product_explode[1], PDO::PARAM_INT);
        $getAttributeGroups->execute();

        $attributeGroups = $getAttributeGroups->fetchAll();

        $i = 0;

        foreach($attributeGroups as $item){
    
            $attributeGroupID[$i] = $item['attribute_group_id'];
            $attributeGroupName[$i] = $item['attribute_group_name'];
    
            $i++;
        }

        $i = 0;

        foreach($attributeGroupID as $item){
            $getSubCategoryAttributes = $query->prepare('SELECT sub_category_attribute_id, attribute_name FROM sub_category_attributes, attributes, attribute_groups WHERE sub_category_attributes.attribute_id = attributes.attribute_id AND attributes.attribute_group_id = attribute_groups.attribute_group_id AND sub_category_attributes.sub_category_id = :sub_category_id AND attribute_groups.attribute_group_id = :attribute_group_id');
            $getSubCategoryAttributes->bindValue(':sub_category_id', $product_explode[1], PDO::PARAM_INT);
            $getSubCategoryAttributes->bindValue(':attribute_group_id', $item, PDO::PARAM_INT);
            $getSubCategoryAttributes->execute();

            $subCategoryAttributes[$i] = $getSubCategoryAttributes->fetchAll();
            $i++;
        }

        $_SESSION['selected-product'] = $product_explode[0];
    }

    if(isset($_POST['value']) && $_POST['value'] != ''){
        $insertProductAttributes = $query->prepare('INSERT INTO product_attributes VALUES (NULL, :product_id, :sub_category_attribute_id, :product_attribute_value)');
        $insertProductAttributes->bindValue(':product_id', $_POST['product'], PDO::PARAM_INT);
        $insertProductAttributes->bindValue(':sub_category_attribute_id', $_POST['attribute'], PDO::PARAM_INT);
        $insertProductAttributes->bindValue(':product_attribute_value', $_POST['value'], PDO::PARAM_STR);
        $insertProductAttributes->execute();

        $_SESSION['info'] = '<span class="info">Wysłano!</span>';
        $_SESSION['selected-product'] = NULL;

        header('Location: dodawanie_specyfikacji.php');
        exit();
    }

    else if(isset($_POST['value']) && $_POST['value'] == ''){
        $_SESSION['info'] = '<span class="info">Wartość nie może być pusta!</span>';
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie specyfikacji</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Dodawanie specyfikacji</h1>

    <form method="POST">
        <select name="product" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option <?php if($_SESSION['selected-product'] == null) echo 'selected '; ?> disabled>Produkt</option>
            <?php
                foreach($products as $item){
                    echo '<option value="'.$item['product_id'].'|'.$item['sub_category_id'].'"';
                    if($_SESSION['selected-product'] == $item['product_id']) echo ' selected>';
                    else echo '>';
                    echo $item['product_name'].' . . . . . . . . . . . . . . . . . '.$item['sub_category_name'].' ('.$item['category_name'].')';
                    echo '</option>'.PHP_EOL;

                }
                unset($_SESSION['selected-product']);
            ?>
        </select>

        <?php
            if(isset($subCategoryAttributes)){
                echo '<br>';

                echo '<select name="attribute">';

                    $i = 0;
                    foreach($attributeGroupName as $groupName){
                        echo '<optgroup label="'.$groupName.'">';
                        foreach($subCategoryAttributes[$i] as $item){
                            echo '<option value="'.$item['sub_category_attribute_id'].'">';
                            echo $item['attribute_name'];
                            echo '</option>';
                        }
                        echo '</optgroup>';
                        $i++;
                    }

                echo '</select>';
                echo '<br>';
                echo '<input type="text" name="value" placeholder="Wartość">';
                echo '<br>';
                echo '<input type="submit">';
            }
        ?>
    </form>


    <a href="index.php">Powrót</a>

</body>
</html>