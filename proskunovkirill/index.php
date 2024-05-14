<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHouse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header id="header-section">
    <div class="logo1">GameHouse</div>
        <div class="container">
            <div class="header">
                <div class="header-logo">
                    <img class="header-logo__img" src="img/testlogo.png" alt="">
                </div>
                <nav class="nav-main">
                    <ul class="nav-main__list">
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="/index.php">Главная</a>
                        </li>
                        <?php
          if(!isset($_SESSION['user'])){
            echo "  <li class=\"nav-main__item\"><a class=\"nav-main__link\" href=\"registration.php\">Корзина</a> </li>";
          }else{
                echo "<li class=\"nav-main__item\"><a class=\"nav-main__link\" href=\"basket.php\">Корзина</a></li>";
            }
        ?>
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="#">Отзывы</a>
                        </li>
                <?php
          if(!isset($_SESSION['user'])){
            echo "  <li class=\"nav-main__item\"><a class=\"nav-main__link\" href=\"registration.php\">Войти</a> </li></ul></nav>
            <a class=\"btn-primary header__btn\" href=\"registration.php\">Зарегистрироваться</a>";
          }else{
                echo "</ul></nav><a class=\"btn-primary header__btn\" href=\"./backend/logout.php\">Выйти</a>";
            }
        ?>
            </div>
        </div>
    </header>
    <main>
        <section id="banner-section">
            <div class="container">
                <div class="banner">
                    <h2 class="banner__header">Добро пожаловать!</h2>
                    <p class="banner__text">Мы продаем игровые компклетующие для вашего будущего или нынешнего компютера. Наш сервис обраудет вас низкими ценами, быстрой доставкой, приятными бонусами и высоким качеством. Мы - команда профессиональных мастеров которые готовы помочь в любую минуту с выбором комплектующих, так же проконсультировать вас в любом вопросе и готовы решить любую проблему.</p>
                    <div class="banner-links-wrap">
                        
                        <a class="btn-secondary banner__btn" href="/catalog.php">Сделать заказ</a>
                    </div>
                    <div class="banner-features">
                        <span class="banner-features__text"><strong class="banner-features__text_strong">700+</strong>Покупателей каждый день</span>
                        
                    </div>
                </div>
            </div>
            <div class="banner-img"></div>
        </section>
        <section id="rent-section">
            <div class="container">
                <h2 class="title-section">Лучшие компклетующие ждут вас!</h2>
                <div class="rent-wrap">
                    <div class="rent">
                        <span class="rent__name">Видеокарты</span>
                        <a class="rent__link" href="/catalog.php">Подробнее</a>
                    </div>
                    <div class="rent">
                        <span class="rent__name">Процессоры</span>
                        <a class="rent__link" href="/catalog.php">Подробнее</a>
                    </div>
                    <div class="rent">
                        <span class="rent__name">Корпусы</span>
                        <a class="rent__link" href="/catalog.php">Подробнее</a>
                    </div>
                    <div class="rent">
                        <span class="rent__name">Оперативная память</span>
                        <a class="rent__link" href="/catalog.php">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="services-section">
            <div class="container">
                <h2 class="title-section services-section__title">Почему именно мы?</h2>
                <div class="services-wrap">
                    <div class="services">
                        <img class="services__img" src="img/ser1.jpg" alt="Private Charter service">
                        <h3 class="services__title">Низкие цены</h3>
                        <p class="services__text">Наш магазин всегда будет радовать вас низкими ценами на весь ассортимент</p>
                    </div>
                    <div class="services">
                        <img class="services__img" src="img/ser2.png" alt="Chauffer Driven Car Rentals service">
                        <h3 class="services__title">Быстрая доставка</h3>
                        <p class="services__text">Бесплатная и быстрая доставка по всей России</p>
                    </div>
                    <div class="services">
                        <img class="services__img" src="img/ser3.png" alt="Wedding Car Rentals service">
                        <h3 class="services__title">Довольные покупатели</h3>
                        <p class="services__text">У нас море довольных покупателей которые оставляют отзывы каждый день</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="destination-section">
            <div class="container">
                <h2 class="title-section destination-section__title">Популярные товары</h2>
                <div class="destination-wrap">
                    <div class="destination">
                        <img class="destination__img" src="img/det1.jpg" alt="">
                        <div class="destination-info">
                            <h3 class="destination__title">RTX 4060</h3>
                            <p class="destination__text">8ГБ GDDR6</p>
                            <b class="destination__price">Цена: 32.999р</b>
                            <a class="destination__link" href="/catalog.php">Купить</a>
                        </div>
                    </div>
                    <div class="destination">
                        <img class="destination__img" src="img/det2.jpg" alt="">
                        <div class="destination-info">
                            <h3 class="destination__title">I5 12400F</h3>
                            <p class="destination__text">6 ядер 12 потоков</p>
                            <b class="destination__price">Цена: 13.999р</b>
                            <a class="destination__link" href="/catalog.php">Купить</a>
                        </div>
                    </div>
                    <div class="destination">
                        <img class="destination__img" src="img/det3.jpg" alt="">
                        <div class="destination-info">
                            <h3 class="destination__title">Powercase</h3>
                            <p class="destination__text">Vision white</p>
                            <b class="destination__price">Цена: 8.999р</b>
                            <a class="destination__link" href="/catalog.php">Купить</a>
                        </div>
                    </div>
                    <div class="destination">
                        <img class="destination__img" src="img/det4.jpg" alt="">
                        <div class="destination-info">
                            <h3 class="destination__title">Kingston FURY </h3>
                            <p class="destination__text">16ГБ 3200МГЦ</p>
                            <b class="destination__price">Цена: 4.999р</b>
                            <a class="destination__link" href="/catalog.php">Купить</a>
                        </div>
                    </div>
                    <div class="destination">
                        <img class="destination__img" src="img/det5.jpg" alt="">
                        <div class="destination-info">
                            <h3 class="destination__title">RTX 3060</h3>
                            <p class="destination__text">8 ГБ GDDR6</p>
                            <b class="destination__price">Цена: 29.999р</b>
                            <a class="destination__link" href="/catalog.php">Купить</a>
                        </div>
                    </div>
                    <div class="destination">
                        <img class="destination__img" src="img/det6.jpg" alt="">
                        <div class="destination-info">
                            <h3 class="destination__title">i7-12700K</h3>
                            <p class="destination__text">12 ядер 20 потоков</p>
                            <b class="destination__price">Цена: 35.799</b>
                            <a class="destination__link" href="/catalog.php">Купить</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="location-section">
            <div class="container">
                <h2 class="title-section">Где нас найти?</h2>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.869769947686!2d37.609689865437154!3d55.691251879314855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54ca8181725cf%3A0x4235fc389dbf8faf!2z0KjQutC-0LvQsCAyNtC60LDQtNGA!5e0!3m2!1sru!2sru!4v1707256829641!5m2!1sru!2sru" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
                
            </div>
        </section>
        <footer id="footer-section">
           
            <div class="footer-copyright">
                <div class="container">
                    <p class="footer-copyright__text">©2024 Все права защищены. | proskunovkirill@gmail.com</p>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>