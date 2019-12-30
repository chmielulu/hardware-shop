<?php
    $category = $_GET['kategoria'];
    if($category == 'Smartfony iOS') $categoryID = 38;
    else if($category == 'Komputery producentow') $categoryID = 3;
    else{
        echo '<div class="error">'.PHP_EOL;
            echo '<span>Wystąpił błąd! Przepraszamy za utrudnienia.</span>'.PHP_EOL;
            echo '<a href="http://localhost/Shop" class="errorBack">Powrót do strony głównej</a>'.PHP_EOL;
        echo '</div>';
        exit();
    }

    try{
        $PDO = new DatabaseConnect;
        $query = $PDO->getPDO();

        $queryProducts = $query->prepare('SELECT products.product_id, products.product_name, products.product_info, products.product_price, products.product_discount, products.product_ranking FROM products WHERE products.sub_category_id = :category ORDER BY products.product_ranking');
        $queryProducts->bindValue(':category', $categoryID, PDO::PARAM_STR);
        $queryProducts->execute();

        $products = $queryProducts->fetchAll();

        $i = 0;
        foreach($products as $item){
            $queryBasicSpecs = $query->prepare('SELECT DISTINCT attributes.attribute_name, product_attributes.product_attribute_value FROM basic_attributes, product_attributes, sub_category_attributes, attributes WHERE basic_attributes.product_attribute_id = product_attributes.product_attribute_id AND product_attributes.sub_category_attribute_id = sub_category_attributes.sub_category_attribute_id AND sub_category_attributes.attribute_id = attributes.attribute_id AND basic_attributes.product_id = :product_id');
            $queryBasicSpecs->bindValue(':product_id', $item['product_id'], PDO::PARAM_INT);
            $queryBasicSpecs->execute();

            $basicSpecs[$i] = $queryBasicSpecs->fetchAll();
            $i++;
        }

        $querySubCategoryAttributes = $query->prepare('SELECT DISTINCT attributes.attribute_name, sub_category_attribute_id FROM sub_category_attributes, attributes WHERE sub_category_attributes.attribute_id = attributes.attribute_id AND sub_category_attributes.sub_category_id = :sub_category_id ORDER BY sub_category_attributes.sub_category_attribute_order LIMIT 10');
        $querySubCategoryAttributes->bindValue(':sub_category_id', $categoryID, PDO::PARAM_INT);
        $querySubCategoryAttributes->execute();

        $subCategoryAttributes = $querySubCategoryAttributes->fetchAll();

        $i = 0;

        foreach($subCategoryAttributes as $item){
            $querySubCategoryAttributesValues = $query->prepare('SELECT DISTINCT product_attributes.product_attribute_value, sub_category_attributes.sub_category_attribute_id FROM product_attributes, sub_category_attributes WHERE product_attributes.sub_category_attribute_id = sub_category_attributes.sub_category_attribute_id AND sub_category_attributes.sub_category_id = :sub_category_id AND sub_category_attributes.sub_category_attribute_id = :sub_category_attribute_id LIMIT 5');
            $querySubCategoryAttributesValues->bindValue(':sub_category_id', $categoryID, PDO::PARAM_INT);
            $querySubCategoryAttributesValues->bindValue(':sub_category_attribute_id', $item['sub_category_attribute_id'], PDO::PARAM_INT);
            $querySubCategoryAttributesValues->execute();

            $subCategoryAttributesValues[$i] = $querySubCategoryAttributesValues->fetchAll();

            $x = 0;
            foreach($subCategoryAttributesValues[$i] as $item) {
                $queryCountOfAttributesValues = $query->prepare('SELECT COUNT(product_attribute_value) FROM product_attributes, sub_category_attributes WHERE product_attribute_value LIKE :product_attribute_value AND product_attributes.sub_category_attribute_id = sub_category_attributes.sub_category_attribute_id AND sub_category_attributes.sub_category_attribute_id = :sub_category_attribute_id');
                $queryCountOfAttributesValues->bindValue(':product_attribute_value', $item['product_attribute_value'], PDO::PARAM_STR);
                $queryCountOfAttributesValues->bindValue(':sub_category_attribute_id', $item['sub_category_attribute_id'], PDO::PARAM_STR);
                $queryCountOfAttributesValues->execute();

                $countOfAttributesValues[$i][$x] = $queryCountOfAttributesValues->fetchAll();
                $x++;
            }
            $i++;
        }

        $queryCountOfProducts = $query->prepare('SELECT COUNT(products.product_id) FROM products WHERE products.sub_category_id = :sub_category_id');
        $queryCountOfProducts->bindValue(':sub_category_id', $categoryID, PDO::PARAM_INT);
        $queryCountOfProducts->execute();

        $countOfProducts = $queryCountOfProducts->fetch();

        $quantity = $countOfProducts['COUNT(products.product_id)'];
    }

    catch(Exception $e){
        echo $e->getMessage();
        exit();
    }

    $productsList = $queryProducts->fetchAll();

?>
<aside>
    <div class="asideFiltersContainer">
        <form>

            <?php

                $i = 0;$x = 0;
                foreach ($subCategoryAttributes as $subCatAttributes){
                    $x = 0;
                    echo '<div class="asideFilter">';
                        echo '<h3>'.$subCatAttributes['attribute_name'].'</h3>';
                        echo '<p>Sortuj A-Z</p>';

                        foreach ($subCategoryAttributesValues[$i] as $attributesValue){
                            echo '<div class="asideFilterItem">';
                                foreach($countOfAttributesValues[$i][$x] as $countOfValues){
                                    echo '<label>';
                                    echo '<div class="checkbox"><input type="checkbox" value="'.$attributesValue['product_attribute_value'].'"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>';
                                    echo '<span>'.$attributesValue['product_attribute_value'].' ('.$countOfValues['COUNT(product_attribute_value)'].')</span>';
                                    echo '</label>';
                                }
                            echo '</div>';
                            $x++;
                        }

                        echo '<span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>';
                    echo '</div>';
                    $i++;
                }
            ?>

            <input type="submit" value="Filtruj" id="button">
        </form>
    </div>
</aside>

<section class="productsListContainer">
    <header>
        <div class="productsListHeader">
            <div class="productsListHeadline">
                <h2><?php echo $category." "."(".$quantity.")"?></h2>
            </div>

            <div class="priceSetContainer">
                <div class="strapContainer">
                    <span>Cena (zł):</span>

                    <div class="strap">
                        <div class="line"></div>
                        <div class="wheel"></div>
                        <div class="wheel"></div>
                    </div>
                </div>

                <div class="priceRange">
                    <input type="number" class="from" value="700">

                    <div class="line"></div>

                    <input type="number" class="to" value="1000">

                    <input type="submit" value="Filtruj" class="priceSubmit">
                </div>
            </div>

            <div class="sortingContainer">
                <form>
                    <div class="sortingSelect">
                        <div class="selectedValueContainer">
                            <span class="selectedValue">Sortuj domyślnie</span>

                            <span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <div class="productsList">

        <?php
            $i = 0;
            foreach($products as $item){
                echo '<article>';
                    echo '<div class="productPhoto">';
                        echo '<a href="#"><image src="../Products/'.$item['product_id'].'/Photos/1.jpg" alt="'.$item['product_name'].'"></a>';
                    echo '</div>';

                    echo '<div class="productDescription">';
                        echo '<div class="productDescriptionHeader">';
                            echo '<header>';

                                echo '<div class="productTitle">';
                                    echo '<a href="#"><h2>'.$item['product_name'].'</h2></a>';
                                echo '</div>';

                                echo '<div class="productAttribute">';
                                    echo '<p>'.$item['product_info'].'</p>';
                                echo '</div>';

                                echo '<div class="productID">';
                                    echo '<span>ID produktu: '.$item['product_id'].'</span>';
                                echo '</div>';

                            echo '</header>';
                        echo '</div>';

                        echo '
                        <div class="productRecommendation">
                            <div class="stars">
                                <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                                <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                                <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                                <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                                <span class="iconify" data-icon="bx:bxs-star-half" data-inline="false" data-width="24" data-height="24"></span>
                            </div>
        
                            <div class="quantityReviews">
                                <span>(78)</span>
                            </div>
        
                            <div class="quantityOrders">
                                <span>Kupiło 20 osób</span>
                            </div>
                        </div>
        
                        <div class="basicSpecification">';
                            foreach($basicSpecs[$i] as $basicSpec){
                                echo '<div class="basicSpecificationItem">';
                                    echo '<h3>'.$basicSpec['attribute_name'].': </h3><p>'.$basicSpec['product_attribute_value'].'</p>';
                                echo '</div>';
                            }
                        echo '</div>';
                    echo '</div>';

                    echo '<div class="productPrice">';
                        if($item['product_discount'] != 0){
                            echo '<div class="discountPrice">'.$item['product_price'].' zł</div>';
                            echo '<div class="price"><span>'.$item['product_discount'].' zł</span></div>';
                        }

                        else{
                            echo '<div class="price"><span>'.$item['product_price'].' zł</span></div>';
                        }

                        echo '<button>Dodaj do koszyka</button>';
                    echo '</div>';

                echo '</article>';

                $i++;
            }
        ?>
    </div>
</section>