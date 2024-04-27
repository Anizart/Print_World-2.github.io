<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Печатный Мир</title>
    <link rel="stylesheet" href="../CSS/Header&Footer.css">
    <link rel="stylesheet" href="../CSS/Catalog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .menu__link.style{

            color: #65E500;
            line-height: 23px;
            border-bottom: 1px solid #65E500;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="back_img">

        <header class="header ">
            <div class="container">

                <button class="header__burger-btn" id="Burger"></button>

                <div class="header__wrap">

                    <div class="wrap">
                        <div class="header__logo">
                            <div class="logo__img"></div>
                        </div>
                        <p class="text-logo">
                            Печатный Мир
                        </p>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li><a class="menu__link" href="../Index/MainPage.html">Главная</a></li>
                            <li><a class="menu__link style" href="../Index/Catalog.html">Каталог</a></li>
                            <li><a class="menu__link" href="../Index/ToOrder.html">Заказать</a></li>
                            <li><a class="menu__link" href="../Index/AboutUs.html">О нас</a></li>
                        </ul>
                    </nav>

                    <div class="Wtel">
                        <div class="header__tel"></div>
                        <div class="header__tel-num">+7 911 911-87-12</div>
                    </div>

                </div>

            </div>

        </header>

            <div class="content">
                
                <div class="content__wrap">

                    <a class="wrap__link" href="../Index/LearnMore1Notepad.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_1__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Блокноты</p>
                            </div>
                        </div>
                    </a>

                    <a class="wrap__link" href="../Index/LearnMore2Liflets.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_2__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Лифлеты</p>
                            </div>
                        </div>
                    </a>

                    <a class="wrap__link" href="../Index/ReadMore3Posters.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_3__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Плакаты</p>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="content__wrap">

                    <a class="wrap__link" href="../Index/LearnMore4BusinessCards.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_4__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Визитки</p>
                            </div>
                        </div>
                    </a>

                    <a class="wrap__link" href="../Index/ReadMore5Pens.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_5__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Ручки</p>
                            </div>
                        </div>
                    </a>

                    <a class="wrap__link" href="../Index/ReadMore6Books.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_6__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Книги</p>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="content__wrap">

                    <a class="wrap__link" href="../Index/ReadMore7Flyers.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_7__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Листовки</p>
                            </div>
                        </div>
                    </a>

                    <a class="wrap__link" href="../Index/ReadMore8Magazines.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_8__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Журналы</p>
                            </div>
                        </div>
                    </a>

                    <a class="wrap__link" href="../Index/LearnMore9Stickers.html">
                        <div class="wrap__die"> <!-- Обёртка Плашки -->
                            <div class="segment1">
                                <div class="segment1_9__img"></div>
                            </div>
                            <div class="segment2">
                                <p class="segment2__text">Наклейки</p>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="blur">

                    <form class="form" action="form.php" method="post">
                        <input class="input" type="text" name="username" placeholder="Имя: ( до 10 символов )" tabindex="1" require>
                        <input class="input" type="text" name="email" placeholder="Ваша почта:" tabindex="2">
                        <input class="input" type="tel" name="number" placeholder="Телефон:" tabindex="3">
                        <textarea class="text_ar" placeholder="Ваши пожелания: ( до 180 символов )" name="wish" id="" tabindex="4"></textarea>
                        <div class="btn_wrap">
                            <button class="reset" type="reset" tabindex="5">Очистить</button>
                            <button class="done" type="submit" tabindex="6">Готово</button>
                        </div>
                    </form>
        
                </div>

            </div>

            <footer class="footer">
            <div class="container">

                <div class="footer__wrap">
                    <div class="w">
                        <div class="footer__logo">
                            <div class="f-logo__img"></div>
                        </div>
                        <a class="footer__link" href="../Index/AboutUs.html">О нас</a>
                    </div>
                    <p class="footer__text">
                        Все права защищены © 2024г.
                    </p>
                    <div class="masseg">
                        <a href="#!" class="footer__VK">
                            <div class="VK__img"></div>
                        </a>
                        <a href="#!" class="footer__Telegram">
                            <div class="telegram__img"></div>
                        </a>
                    </div>
                </div>

            </div>
        </footer>

        </div>
    </div>
    <script src="../JS/HeaderFooter.js"></script>
</body>
</html>