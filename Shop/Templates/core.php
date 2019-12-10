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

    <link rel="stylesheet" href=<?php echo DIR_CSS."main.css" ?>>
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
                        <li><a href="">Komputery PC</a>
                            <ul>
                                <li><a href="">Nasze komputery</a></li>
                                <li><a href="">Komputery producentów</a></li>
                            </ul>
                        </li>
                        <li><a href="">Podzespoły komputerowe</a>
                            <ul>
                                <li><a href="">Procesory</a></li>
                                <li><a href="">Karty graficzne</a></li>
                                <li><a href="">Płyty główne</a></li>
                                <li><a href="">Pamięci RAM</a></li>
                                <li><a href="">Zasilacze</a></li>
                                <li><a href="">Obudowy</a></li>
                                <li><a href="">Chłodzenie komputerowe</a></li>
                                <li><a href="">Dyski i nośniki danych</a></li>
                                <li><a href="">Inne</a></li>
                            </ul>
                        </li>
                        <li><a href="">Oprogramowanie</a>
                            <ul>
                                <li><a href="">Systemy operacyjne</a></li>
                                <li><a href="">Antywirusy</a></li>
                                <li><a href="">Inne</a></li>
                            </ul>
                        </li>
                        <li><a href="">Peryferia komputerowe</a>
                            <ul>
                                <li><a href="">Monitory</a></li>
                                <li><a href="">Klawiatury komputerowe</a></li>
                                <li><a href="">Myszki komputerowe</a></li>
                                <li><a href="">Słuchawki</a></li>
                                <li><a href="">Głośniki</a></li>
                                <li><a href="">Mikrofony</a></li>
                                <li><a href="">Drukarki i skanery</a></li>
                                <li><a href="">Kamerki internetowe</a></li>
                            </ul>
                        </li>
                        <li><a href="">Serwery</a>
                            <ul>
                                <li><a href="">Serwery plików</a></li>
                                <li><a href="">Dyski do serwerów</a></li>
                                <li><a href="">Szafy Rack</a></li>
                                <li><a href="">UPS</a></li>
                            </ul>
                        </li>
                        <li><a href="">Serwis komputerowy</a>
                            <ul>
                                <li><a href="">Narzędzia</a></li>
                                <li><a href="">Inne</a></li>
                            </ul>
                        </li>
                        <li><a href="">Sieci</a>
                            <ul>
                                <li><a href="">Routery</a></li>
                                <li><a href="">Kable</a></li>
                                <li><a href="">Switche</a></li>
                                <li><a href="">Acces pointy</a></li>
                            </ul>
                        </li>
                    </ul>
                </a></li>
                
                <li><span class="mainCategoriesElement">Laptopy</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>
                    <ul>
                        <li><a href="">Laptopy, ultrabooki</a>
                            <ul>
                                <li><a href="">Laptopy</a></li>
                                <li><a href="">Ultrabooki</a></li>
                                <li><a href="">Laptopy 2w1</a></li>
                                <li><a href="">Laptopy dla profesjonalistów</a></li>
                            </ul>
                        </li>
                        <li><a href="">Przenoszenie i ochrona</a>
                            <ul>
                                <li><a href="">Torby i plecaki</a></li>
                                <li><a href="">Etui do laptopów</a></li>
                                <li><a href="">Linki zabezpieczające</a></li>
                            </ul>
                        </li>
                        <li><a href="">Akcesoria do laptopów</a>
                            <ul>
                                <li><a href="">Baterie do laptopów</a></li>
                                <li><a href="">Dyski zewntętrzne</a></li>
                                <li><a href="">Podstawki chłodzące</a></li>
                                <li><a href="">Zasilacze do laptopów</a></li>
                                <li><a href="">Inne</a></li>
                            </ul>
                        </li>
                    </ul>
                </a></li>
                <li><span class="mainCategoriesElement">Kable i adaptery</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></li>
                <li><span class="mainCategoriesElement">Telefony</span> <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span>
                    <ul>
                        <li><a href="">Smartfony</a>
                            <ul>
                                <li><a href="">Android</a></li>
                                <li><a href="">iOS</a></li>
                            </ul>
                        </li>

                        <li><a href="">Telefony komórkowe</a>
                            <ul>
                                <li><a href="">Dla aktywnych</a></li>
                                <li><a href="">Dla seniora</a></li>
                            </ul>
                        </li>

                        <li><a href="">Telefony stacjonarne</a>
                            <ul>
                                <li><a href="">Telefony przewodowe</a></li>
                                <li><a href="">Telefony bezprzewodowe</a></li>
                            </ul>
                        </li>

                        <li><a href="">Zasilanie</a>
                            <ul>
                                <li><a href="">Baterie do telefonów</a></li>
                                <li><a href="">Ładowarki samochodowe</a></li>
                                <li><a href="">Ładowarki sieciowe</a></li>
                                <li><a href="">Powerbanki</a></li>
                            </ul>
                        </li>

                        <li><a href="">Smartwatche, sport</a>
                            <ul>
                                <li><a href="">Smartwatche</a></li>
                                <li><a href="">Zegarki sportowe</a></li>
                                <li><a href="">Smartbandy</a></li>
                                <li><a href="">Akcesoria do smartwatchy</a></li>
                                <li><a href="">Pulsometry i krokomierze</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="">Ochrona</a>
                            <ul>
                                <li><a href="">Etui i pokrowce</a></li>
                                <li><a href="">Folie i szkła ochronne</a></li>
                            </ul>
                        </li>

                        <li><a href="">Pozostałe akcesoria</a>
                            <ul>
                                <li><a href="">Gogle VR</a></li>
                                <li><a href="">Karty pamięci microSD</a></li>
                                <li><a href="">Rysiki</a></li>
                                <li><a href="">Selfie stick</a></li>
                                <li><a href="">Uchwyty do telefonów</a></li>
                                <li><a href="">Inne</a></li>
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
            loadFile(DIR_TEMPLATES."home.php");
        ?>
    </main>

    <footer>
        <?php
            loadFile(DIR_TEMPLATES."homeFooter.php");
        ?>
    </footer>

    <script type="text/javascript" src="<?php echo TDIR_SCRIPTS."core.js"?>"></script>
</body>
</html>