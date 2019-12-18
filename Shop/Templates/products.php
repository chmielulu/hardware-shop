<?php
    $category = $_GET['kategoria'];
    $quantity = 91;

    /*try{
        $PDO = new DatabaseConnect;
        $query = $PDO->getPDO();

        $queryProducts = $query->prepare('SELECT ID, Name, Attribute, Price, Discount, Quantity, Sorting FROM products WHERE Category = :category');
        $queryProducts->bindValue(':category', $category, PDO::PARAM_STR);
        $queryProducts->execute();
    }

    catch(PDOException $e){
        echo $e->getMessage();
        exit();
    }

    $productsList = $queryProducts->fetchAll();*/
?>
<aside>
    <div class="asideFiltersContainer">
        <form>
            <div class="asideFilter">
                <h3>Producenci</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Apple"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Apple (98)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Samsung"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Samsung (0)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Huawei"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Huawei (98)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Xiaomi"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Xiaomi (0)</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

            <div class="asideFilter">
                <h3>System operacyjny</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="iOS"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>iOS (98)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Android"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Android (0)</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

            <div class="asideFilter">
                <h3>Kolor</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Srebrny"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Srebrny (21)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Czarny"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Czarny (18)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Bialy"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Biały (17)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Zloty"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Złoty (12)</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

            <div class="asideFilter">
                <h3>Przekątna ekranu</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Ponad6"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Ponad 6" (34)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="5.5-6"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>5.5" - 6" (13)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="4.1-4.7"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>4.1" - 4.7" (11)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="3.6-4"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>3.6" - 4" (9)</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

            <div class="asideFilter">
                <h3>4G LTE</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Tak"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Tak</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="Nie"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>Nie</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

            <div class="asideFilter">
                <h3>Pamięć wbudowana</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="64GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>64 GB (45)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="128GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>128 GB (25)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="256GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>256 GB (16)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="32GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>32 GB (9)</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

            <div class="asideFilter">
                <h3>Pamięć RAM</h3>
                <p>Sortuj A-Z</p>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="3GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>3 GB (34)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="2GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>2 GB (39)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="4GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>4 GB (14)</span>
                    </label>
                </div>

                <div class="asideFilterItem">
                    <label>
                        <div class="checkbox"><input type="checkbox" value="1GB"><span class="iconify" data-icon="dashicons:yes" data-inline="false"></span></div>
                        <span>1 GB (4)</span>
                    </label>
                </div>

                <span class="FilterItemMore"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span> Pokaż więcej</span>
            </div>

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

            <div class="prizeSetContainer">
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
        <article>
            <div class="productPhoto">
                <a href="#"><image src="../Products/1/Photos/1.jpg" alt=""></a>
            </div>

            <div class="productDescription">
                <div class="productDescriptionHeader">
                    <header>
                        <div class="productTitle">
                            <a href="#"><h2>Smartfon Apple iPhone 11 4/64GB Czarny</h2></a>
                        </div>

                        <div class="productAttribute">
                            <p>Pamięć wbudowana: 32 GB Czarny 750 x 1334</p>
                        </div>
                        <div class="productID">
                            <span>ID produktu: 1</span>
                        </div>
                    </header>
                </div>

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

                <div class="basicSpecification">
                    <div class="basicSpecificationItem">
                        <h3>Aparat główny [MPix]: </h3> <p>12 + 12</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Dual SIM: </h3> <p>Tak</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć RAM: </h3> <p>4 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć wbudowana: </h3> <p>64 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Przekątna ekranu ["]: </h3> <p>6.1</p>
                    </div>
                </div>
            </div>
            <div class="productPrize">
                <div class="discountPrize">3 913,99 zł</div>
                <div class="prize">
                    <span>3 559 zł</span>
                </div>

                <button>Dodaj do koszyka</button>
            </div>
        </article>

        <article>
            <div class="productPhoto">
                <a href="#"><image src="../Products/1/Photos/1.jpg" alt=""></a>
            </div>

            <div class="productDescription">
                <div class="productDescriptionHeader">
                    <header>
                        <div class="productTitle">
                            <a href="#"><h2>Smartfon Apple iPhone 11 4/64GB Czarny</h2></a>
                        </div>

                        <div class="productAttribute">
                            <p>Pamięć wbudowana: 32 GB Czarny 750 x 1334</p>
                        </div>
                        <div class="productID">
                            <span>ID produktu: 1</span>
                        </div>
                    </header>
                </div>

                <div class="productRecommendation">
                    <div class="stars">
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="bx:bxs-star-half" data-inline="false"></span>
                        <span class="iconify" data-icon="bx:bxs-star-half" data-inline="false" data-width="24" data-height="24"></span>
                    </div>

                    <div class="quantityReviews">
                        <span>(78)</span>
                    </div>

                    <div class="quantityOrders">
                        <span>Kupiło 20 osób</span>
                    </div>
                </div>

                <div class="basicSpecification">
                    <div class="basicSpecificationItem">
                        <h3>Aparat główny [MPix]: </h3> <p>12 + 12</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Dual SIM: </h3> <p>Tak</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć RAM: </h3> <p>4 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć wbudowana: </h3> <p>64 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Przekątna ekranu ["]: </h3> <p>6.1</p>
                    </div>
                </div>
            </div>
            <div class="productPrize">
                <div class="discountPrize">3 913,99 zł</div>
                <div class="prize">
                    <span>3 559 zł</span>
                </div>

                <button>Dodaj do koszyka</button>
            </div>
        </article>

        <article>
            <div class="productPhoto">
                <a href="#"><image src="../Products/1/Photos/1.jpg" alt=""></a>
            </div>

            <div class="productDescription">
                <div class="productDescriptionHeader">
                    <header>
                        <div class="productTitle">
                            <a href="#"><h2>Smartfon Apple iPhone 11 4/64GB Czarny</h2></a>
                        </div>

                        <div class="productAttribute">
                            <p>Pamięć wbudowana: 32 GB Czarny 750 x 1334</p>
                        </div>
                        <div class="productID">
                            <span>ID produktu: 1</span>
                        </div>
                    </header>
                </div>

                <div class="productRecommendation">
                    <div class="stars">
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                    </div>

                    <div class="quantityReviews">
                        <span>(78)</span>
                    </div>

                    <div class="quantityOrders">
                        <span>Kupiło 20 osób</span>
                    </div>
                </div>

                <div class="basicSpecification">
                    <div class="basicSpecificationItem">
                        <h3>Aparat główny [MPix]: </h3> <p>12 + 12</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Dual SIM: </h3> <p>Tak</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć RAM: </h3> <p>4 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć wbudowana: </h3> <p>64 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Przekątna ekranu ["]: </h3> <p>6.1</p>
                    </div>
                </div>
            </div>
            <div class="productPrize">
                <div class="discountPrize">3 913,99 zł</div>
                <div class="prize">
                    <span>3 559 zł</span>
                </div>

                <button>Dodaj do koszyka</button>
            </div>
        </article>

        <article>
            <div class="productPhoto">
                <a href="#"><image src="../Products/1/Photos/1.jpg" alt=""></a>
            </div>

            <div class="productDescription">
                <div class="productDescriptionHeader">
                    <header>
                        <div class="productTitle">
                            <a href="#"><h2>Smartfon Apple iPhone 11 4/64GB Czarny</h2></a>
                        </div>

                        <div class="productAttribute">
                            <p>Pamięć wbudowana: 32 GB Czarny 750 x 1334</p>
                        </div>
                        <div class="productID">
                            <span>ID produktu: 1</span>
                        </div>
                    </header>
                </div>

                <div class="productRecommendation">
                    <div class="stars">
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                        <span class="iconify" data-icon="ant-design:star-fill" data-inline="false"></span>
                    </div>

                    <div class="quantityReviews">
                        <span>(78)</span>
                    </div>

                    <div class="quantityOrders">
                        <span>Kupiło 20 osób</span>
                    </div>
                </div>

                <div class="basicSpecification">
                    <div class="basicSpecificationItem">
                        <h3>Aparat główny [MPix]: </h3> <p>12 + 12</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Dual SIM: </h3> <p>Tak</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć RAM: </h3> <p>4 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Pamięć wbudowana: </h3> <p>64 GB</p>
                    </div>

                    <div class="basicSpecificationItem">
                        <h3>Przekątna ekranu ["]: </h3> <p>6.1</p>
                    </div>
                </div>
            </div>
            <div class="productPrize">
                <div class="discountPrize">3 913,99 zł</div>
                <div class="prize">
                    <span>3 559 zł</span>
                </div>

                <button>Dodaj do koszyka</button>
            </div>
        </article>

    </div>
</section>