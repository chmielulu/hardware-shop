<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">

    <title>Hardware.pl | Najlepszy sklep internetowy z elektroniką</title>
    <meta name="Description" content="Sklep Internetowy - laptopy, RTV i AGD, konsole, aparaty cyfrowe, telefony komórkowe. Najniższe ceny w Polsce, wysyłka w 24h, zakupy na raty. Sprawdź nas!">
    <meta name="Keywords" content="komputery, laptopy, monitory, gry, telewizory, smartfony, RTV i AGD">
    <meta property="og:url" content="https://localhost/">
    <meta property="og:site_name" content="hardware.pl">
    <meta property="og:image" content="">

    <link rel="stylesheet" href="<?php if($_SESSION['page'] == "Home") echo DIR_CSS."core.css"; else if($_SESSION['page'] == "Products") echo PDIR_CSS."core.css"; ?>">
    <link rel="stylesheet" href="<?php if($_SESSION['page'] == "Home") echo DIR_CSS."end.css"; else if($_SESSION['page'] == "Products") echo PDIR_CSS."end.css"; ?>">

    <?php
        $DIRECTION = [];

        if($_SESSION['page'] == "Home"){
            $DIRECTIONCSS[0] = DIR_CSS."home.css";
            $DIRECTIONCSS[1] = DIR_CSS."homeFooter.css";
            $DIRECTIONCATEGORIES = "Produkty/";
        }

        else if($_SESSION['page'] == "Products"){
            $DIRECTIONCSS[0] = PDIR_CSS."products.css";
            $DIRECTIONCSS[1] = PDIR_CSS."productsFooter.css";
            $DIRECTIONCATEGORIES = "./";
        }

        foreach($DIRECTIONCSS as $item){
            echo '<link rel="stylesheet" href="'.$item.'">';
        }
    ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Sunflower:500&display=swap&subset=latin-ext" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="navbar">
            <div class="companyLogo navbarElement">
                <h1><a href="http://localhost/Shop">Hardware<span></span></a></h1>
            </div>

            <div class="searchContainer navbarElement">
                <form>
                <input type="text" class="searchText" placeholder="Wyszukaj produkt">

                <div class="selectBox">
                    <input type="checkbox" id="optionViewButton">
                    
                    <div class="selectButton brd">
                        <div class="arrow">
                            <span class="iconify" data-icon="bx:bxs-down-arrow" data-inline="false"></span>
                        </div>

                        <div class="selectedValue">
                            Wszystko
                        </div>
                    </div>

                    <div class="options">
                        <label>
                            <input type="radio" name="filters" class="filter" value="Wszystko" checked>
                            <span>Wszystko</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter" value="Komputery">
                            <span>Komputery</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter"value="Laptopy">
                            <span>Laptopy</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter" value="Podzespoły komputerowe">
                            <span>Podzespoły komputerowe</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter" value="Telefony">
                            <span>Telefony</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter" value="Fotografia">
                            <span>Fotografia</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter" value="Kable i adaptery">
                            <span>Kable i adaptery</span>
                        </label>

                        <label>
                            <input type="radio" name="filters" class="filter" value="Oprogramowanie">
                            <span>Oprogramowanie</span>
                        </label>
                    </div>
                </div>
                
                <button class="searchButton"><span class="iconify" data-icon="dashicons:search" data-inline="false"></span></button>
            </form>
            </div>

            <div class="rightOptionsContainer">
                <div class="logInAndSignUp rightOption">
                    <div class="rightOptionIcon"><span class="iconify" data-icon="fa-solid:user" data-inline="false"></span></div>

                    <div class="rightOptionText">
                        <span class="twoLine">Zaloguj się</span> 
                        <span>Załóż konto</span>
                    </div>
                </div>

                <div class="contact rightOption">
                    <div class="rightOptionIcon"><span class="iconify" data-icon="mdi:phone-classic" data-inline="false"></span></div>

                    <div class="rightOptionText">
                        <span>Kontakt</span>
                    </div>

                    <div class="contactInfoContainer">
                        <div class="contactPhone">
                            <span class="iconify" data-icon="feather:phone" data-inline="false"></span>

                            <div class="contactText">
                                <span>12 345 76 23</span>
                                <span>Pon. - Niedz. 8:00 - 21:00</span>
                            </div>
                        </div>

                        <div class="contactMail">
                            <span class="iconify" data-icon="ic:baseline-alternate-email" data-inline="false"></span>

                            <div class="contactText">
                                <span>kontakt@hardware.pl</span>
                                <span>Odpowiedź w ciągu 24h</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="basket rightOption">
                    <div class="rightOptionIcon"><span class="iconify" data-icon="simple-line-icons:basket" data-inline="false"></span></div>

                    <div class="rightOptionText">
                        <span>0,00 zł</span>
                    </div>
                </div>
            </div>
        </div>
        <nav class="categoryContainer">
            <h2>Kategorie</h2>
            <ol class="mainCategories">
                <li><span class="mainCategoriesElement">Komputery</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>
                    <ul>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Komputery%20PC">Komputery PC</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Nasze%20komputery">Nasze komputery</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Komputery%20producentow">Komputery producentów</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Podzespolty%20komputerowe">Podzespoły komputerowe</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Procesory">Procesory</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Karty%20graficzne">Karty graficzne</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Plyty%20glowne">Płyty główne</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Pamieci%20RAM">Pamięci RAM</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Zasilacze">Zasilacze</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Obudowy">Obudowy</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Chlodzenie%20komputerowe">Chłodzenie komputerowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Dyski%20i%20nosniki%20danych">Dyski i nośniki danych</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Inne%20Podzespoly%20komputerowe">Inne</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Oprogramowanie">Oprogramowanie</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Systemy%20operacyjne">Systemy operacyjne</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Antywirusy">Antywirusy</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Inne%20Oprogramowanie">Inne</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Peryferia%20komputerowe">Peryferia komputerowe</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Monitory">Monitory</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Klawiatury%20komputerowe">Klawiatury komputerowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Myszki%20komputerowe">Myszki komputerowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Sluchawki">Słuchawki</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Glosniki">Głośniki</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Mikrofony">Mikrofony</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Drukarki%20i%20skanery">Drukarki i skanery</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Kamerki%20internetowe">Kamerki internetowe</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Serwery">Serwery</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Serwery%20plikow">Serwery plików</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Dyski%20do%20serwerow">Dyski do serwerów</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Szafy%20rack">Szafy Rack</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=UPS">UPS</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Serwis%20komputerowy">Serwis komputerowy</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Narzedzia">Narzędzia</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Inne%20Serwis%20komputerowy">Inne</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Sieci">Sieci</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Routery">Routery</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Kable">Kable</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Switche">Switche</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Acces%20pointy">Acces pointy</a></li>
                            </ul>
                        </li>
                    </ul>
                </a></li>
                
                <li><span class="mainCategoriesElement">Laptopy</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>
                    <ul>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Laptopy%20ultrabooki">Laptopy, ultrabooki</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Laptopy">Laptopy</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Ultrabooki">Ultrabooki</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Laptopy%202w1">Laptopy 2w1</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Laptopy%20dla%20profesjonalistow">Laptopy dla profesjonalistów</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Przenoszenie%20i%20ochrona">Przenoszenie i ochrona</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Torby%20i%20plecaki">Torby i plecaki</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Etui%20do%20laptopow">Etui do laptopów</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Linki%20zabezpieczajace">Linki zabezpieczające</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Akcesoria%20do%20laptopow">Akcesoria do laptopów</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Baterie%20do%20laptopow">Baterie do laptopów</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Dyski%20zewnetrzne">Dyski zewntętrzne</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Podstawki%20chlodzace">Podstawki chłodzące</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Zasilacze%20do%20laptopow">Zasilacze do laptopów</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Inne%20Akcesoria%20do%20laptopow">Inne</a></li>
                            </ul>
                        </li>
                    </ul>
                </a></li>
                <li><span class="mainCategoriesElement">Kable i adaptery</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></li>
                <li><span class="mainCategoriesElement">Telefony</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>
                    <ul>
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Smartfony">Smartfony</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Android">Android</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=iOS">iOS</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Telefony%20komorkowe">Telefony komórkowe</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Dla%20aktywnych">Dla aktywnych</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Dla%20seniora">Dla seniora</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Telefony%20stacjonarne">Telefony stacjonarne</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Telefony%20przewodowe">Telefony przewodowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Telefony%20bezprzewodowe">Telefony bezprzewodowe</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Zasilanie">Zasilanie</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Baterie%20do%20telefonow">Baterie do telefonów</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Ladowarki%20samochodowe">Ładowarki samochodowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Ladowarki%20sieciowe">Ładowarki sieciowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Powerbanki">Powerbanki</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Smartwatche%20sport">Smartwatche, sport</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Smartwatche">Smartwatche</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Zegarki%20sportowe">Zegarki sportowe</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Smartbandy">Smartbandy</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Akcesoria%20do%20smartwatchy">Akcesoria do smartwatchy</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Pulsometry%20i%20krokomierze">Pulsometry i krokomierze</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Ochrona">Ochrona</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Etui%20i%20pokrowce">Etui i pokrowce</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Folie%20i%20szkla%20ochronne">Folie i szkła ochronne</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Pozostale%20akcesoria">Pozostałe akcesoria</a>
                            <ul>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Gogle%20VR">Gogle VR</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Karty%20pamieci%20microSD">Karty pamięci microSD</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Rysiki">Rysiki</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Selfie%20stick">Selfie stick</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Uchwyty%20do%20telefonow">Uchwyty do telefonów</a></li>
                                <li><a href="<?php echo $DIRECTIONCATEGORIES; ?>?kategoria=Inne%20Pozostale%20akcesoria">Inne</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span class="mainCategoriesElement">Fotografia</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></li>
                <li><span class="mainCategoriesElement">Strefa gracza</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></li>
                <li><span class="mainCategoriesElement">Usługi komputerowe</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></li>
            </ol>
        </nav>
    </header>

    <main>
        <?php
            if($_SESSION['page'] == 'Home') loadFile(DIR_TEMPLATES."home.php");
        ?>
    </main>

    <footer>
        <?php
            if($_SESSION['page'] == 'Home') loadFile(DIR_TEMPLATES."homeFooter.php");
        ?>

        <section class="end">
            <div class="yourAccount first">
                <h4>Twoje konto</h4>
                    <p><a href="">Zamówienia w realizacji</a></p>
                    <p><a href="">Produkty do oceny</a></p>
                    <p><a href="">Modyfikacja zamówienia</a></p>
            </div>
            <div class="legalInformation first">
                <h4>Informacje prawne</h4>
                    <p><a href="">Regulamin sklepu</a></p>
                    <p><a href="">Produkty do oceny</a></p>
                    <p><a href="">Modyfikacja zamówienia</a></p>
            </div>
            <div class="shopAbout first">
                <h4>Hardware.pl</h4>
                    <p><a href="">Zamówienia w realizacji</a></p>
                    <p><a href="">Produkty do oceny</a></p>
                    <p><a href="">Modyfikacja zamówienia</a></p>
            </div>
            <div class="answers">
                <h4>Masz pytania?</h4>
                    <p><a href="">Zamówienia w realizacji</a></p>
                    <p><a href="">Produkty do oceny</a></p>
                    <p><a href="">Modyfikacja zamówienia</a></p>
            </div>
            <div class="socialMedia">
                <h4>Social media</h4>
                <div class="icons">
                    <p><a href="" class="facebook"><span class="iconify" data-icon="ps:facebook-alt" data-inline="false"></span></a></p>
                    <p><a href="" class="instagram"><span class="iconify" data-icon="ant-design:instagram-fill" data-inline="false"></span></a></p>
                    <p><a href="" class="youtube"><span class="iconify" data-icon="fa:youtube-play" data-inline="false"></span></a></p>
                </div>
            </div>
        </section>
    </footer>

    <script type="text/javascript" src="<?php if($_SESSION['page'] == "Home") echo DIR_SCRIPTS."core.js"; else if($_SESSION['page'] == "Products") echo PDIR_SCRIPTS."core.js"; ?>"></script>
</body>
</html>

<?php
    unset($_SESSION['page']);
?>