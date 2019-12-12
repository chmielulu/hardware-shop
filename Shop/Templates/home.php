<?php
    $PDO = new DatabaseConnect;

    $query = $PDO->getPDO();

    $id1 = 1;
    $id2 = 2;
    $id3 = 3;
    $id4 = 4;
    $id5 = 5;

    try{
        $queryDiscount = $query->prepare('SELECT Name, Price, Discount FROM products WHERE ID = :id1 OR ID = :id2 OR ID = :id3 OR ID = :id4 OR ID = :id5');
        $queryDiscount->bindValue(':id1', $id1, PDO::PARAM_INT);
        $queryDiscount->bindValue(':id2', $id2, PDO::PARAM_INT);
        $queryDiscount->bindValue(':id3', $id3, PDO::PARAM_INT);
        $queryDiscount->bindValue(':id4', $id4, PDO::PARAM_INT);
        $queryDiscount->bindValue(':id5', $id5, PDO::PARAM_INT);
        $queryDiscount->execute();
    }

    catch(PDOException $e){
        echo $e->getMessage();
        exit();
    }

    $listDiscount  = $queryDiscount->fetchAll();
    $i = 0;

    foreach($listDiscount as $element => $item){
        $listElementName[$i] = $item["Name"];
        $listElementPrice[$i] = $item["Price"];
        $listElementDiscount[$i] = $item["Discount"];
        $i++;
    }
?>

<section class="bannerContainer">
    <div class="banner"></div>
</section>

<section class="discountContainer">
    <h2>Produkty na przecenie</h2>

    <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>

    <article class="discountProduct">
        <div class="discountPhoto"><image src="Products/<?php echo $id1 ?>/Photos/1.jpg"></div>
        <h3 class="productName"><?php echo $listElementName[0] ?></h3>
        <div class="prizes">
            <p class="productPrice"><?php echo $listElementPrice[0] ?> zł</p>
            <p class="productPrice"><?php echo $listElementDiscount[0] ?> zł</p>
        </div>
    </article>

    <article class="discountProduct">
        <div class="discountPhoto"><image src="Products/<?php echo $id2 ?>/Photos/1.jpg"></div>
        <h3 class="productName"><?php echo $listElementName[1] ?></h3>
        <div class="prizes">
            <p class="productPrice"><?php echo $listElementPrice[1] ?> zł</p>
            <p class="productPrice"><?php echo $listElementDiscount[1] ?> zł</p>
        </div>
    </article>

    <article class="discountProduct">
        <div class="discountPhoto"><image src="Products/<?php echo $id3 ?>/Photos/1.jpg"></div>
        <h3 class="productName"><?php echo $listElementName[2] ?></h3>
        <div class="prizes">
            <p class="productPrice"><?php echo $listElementPrice[2] ?> zł</p>
            <p class="productPrice"><?php echo $listElementDiscount[2] ?> zł</p>
        </div>
    </article>

    <article class="discountProduct">
        <div class="discountPhoto"><image src="Products/<?php echo $id4 ?>/Photos/1.jpg"></div>
        <h3 class="productName"><?php echo $listElementName[3] ?></h3>
        <div class="prizes">
            <p class="productPrice"><?php echo $listElementPrice[3] ?> zł</p>
            <p class="productPrice"><?php echo $listElementDiscount[3] ?> zł</p>
        </div>
    </article>

    <article class="discountProduct">
        <div class="discountPhoto"><image src="Products/<?php echo $id5 ?>/Photos/1.jpg"></div>
        <h3 class="productName"><?php echo $listElementName[4] ?></h3>
        <div class="prizes">
            <p class="productPrice"><?php echo $listElementPrice[4] ?> zł</p>
            <p class="productPrice"><?php echo $listElementDiscount[4] ?> zł</p>
        </div>
    </article>

    <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>
</section>

<section class="tutorials">
    <div class="tutorial">
        <image src="<?php echo DIR_TUTORIALS."monitory.jpg" ?>" alt="Jak wybrać odpowiedni monitor?">
        <div class="tutorialBackground"><h4>Jak wybrać odpowiedni monitor?</h4></div>
    </div>

    <div class="tutorial">
        <image src="<?php echo DIR_TUTORIALS."procesory.jpg" ?>" alt="AMD czy Intel?">
        <div class="tutorialBackground"><h4>AMD czy Intel?</h4></div>
    </div>

    <div class="tutorial">
        <image src="<?php echo DIR_TUTORIALS."myszki.jpg" ?>" alt="Jak wybrać mysz komputerową?">
        <div class="tutorialBackground"><h4>Jak wybrać mysz komputerową?</h4></div>
    </div>
</section>