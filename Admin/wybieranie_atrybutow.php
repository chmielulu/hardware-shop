
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

    if(isset($_POST['product'])){
        $getAttributeGroups = $query->prepare('SELECT DISTINCT attribute_groups.attribute_group_id, attribute_groups.attribute_group_name FROM sub_category_attributes, attributes, attribute_groups, product_attributes WHERE attributes.attribute_group_id = attribute_groups.attribute_group_id AND sub_category_attributes.attribute_id = attributes.attribute_id AND product_attributes.product_id = :product_id');
        $getAttributeGroups->bindValue(':product_id', $_POST['product'], PDO::PARAM_INT);
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
            $getProductAttributes = $query->prepare('SELECT product_attributes.product_attribute_id, attributes.attribute_name, product_attributes.product_attribute_value FROM product_attributes, sub_category_attributes, attributes, attribute_groups WHERE product_attributes.sub_category_attribute_id = sub_category_attributes.sub_category_attribute_id AND sub_category_attributes.attribute_id = attributes.attribute_id AND attributes.attribute_group_id = attribute_groups.attribute_group_id AND product_attributes.product_id = :product_id AND attribute_groups.attribute_group_id = :attribute_group_id');
            $getProductAttributes->bindValue(':product_id', $_POST['product'], PDO::PARAM_INT);
            $getProductAttributes->bindValue(':attribute_group_id', $item, PDO::PARAM_INT);
            $getProductAttributes->execute();

            $productAttributes[$i] = $getProductAttributes->fetchAll();
            $i++;
        }

        $_SESSION['productID'] = $_POST['product'];
    }

    if(isset($_POST['attributes'])){

        foreach($_POST['attributes'] as $item){
            $insertBasicSpec = $query->prepare('INSERT INTO basic_attributes VALUES (NULL, :product_id, :product_attribute_id)');
            $insertBasicSpec->bindValue(':product_id', $_SESSION['productID'], PDO::PARAM_INT);
            $insertBasicSpec->bindValue(':product_attribute_id', $item, PDO::PARAM_INT);
            $insertBasicSpec->execute();
        }

        $_SESSION['info'] = '<span class="info">Wybrano!</span>';
        unset($_SESSION['productID']);

        header('Location: wybieranie_atrybutow.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wybieranie podstawowych atrybutów specifikacji</title>
    <link rel="stylesheet" href="main.css">
    
    <?php
        if(isset($_POST['product'])){
            echo '
                <script>
                    function onlyOneCheckBox() {
                        var checkboxgroup = document.getElementById("form").getElementsByTagName("input");
                        var limit = 4;
                        for (var i = 0; i < checkboxgroup.length; i++) {
                            checkboxgroup[i].onclick = function() {
                                var checkedcount = 0;
                                for (var i = 0; i < checkboxgroup.length; i++) {
                                    checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
                                }
                                if (checkedcount > limit) {
                                alert("Możesz zaznaczyć maksymalnie " + limit + " atrybuty.");
                                this.checked = false;
                                }
                            }
                        }
                    }
        </script>';
        }
    ?>
</head>
<body>
    <h1>Wybieranie podstawowych atrybutów specifikacji</h1>

    <?php
        if(!isset($_POST['product'])){
            echo '<form method="POST">';
                echo '<select name="product" onchange="if(this.value != 0) { this.form.submit(); }">';
                echo '<option selected disabled>Produkt</option>';

                foreach($products as $item){
                    echo '<option value="'.$item['product_id'].'">';
                    echo $item['product_name'].' . . . . . . . . . . . . . . . . . '.$item['sub_category_name'].' ('.$item['category_name'].')';
                    echo '</option>'.PHP_EOL;
                }

                echo '</select>';
            echo '</form>';
        }

        else{
            echo '<form method="POST" id="form">';
            echo '<h2>Specyfikacja</h2>';
                $i = 0;
                foreach($attributeGroupName as $groupName){
                    echo '<h3>'.$groupName.'</h3>';
                    foreach($productAttributes[$i] as $item){
                        echo '<label>';
                            echo '<input type="checkbox" name="attributes[]" value="'.$item['product_attribute_id'].'">'.PHP_EOL;
                            echo '<b>'.$item['attribute_name'].'</b>: ';
                            echo $item['product_attribute_value'];
                        echo '</label>';
                        echo '<br>';
                    }
                    $i++;
                }
            echo '<input type="submit">';
            echo '</form>';
            echo '<script>onlyOneCheckBox();</script>';
        }
    ?>

    <a href="index.php">Powrót</a>

</body>
</html>