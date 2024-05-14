<!DOCTYPE html>
<?php
session_start();
?>
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
        <section id="destination-section">
            <div class="container">
                  <div class="destination-wrap">
            <?php
            require_once './backend/connect.php';
            $sql = "SELECT * FROM `catalog` ";
            $catalog = mysqli_query($connect, $sql);
            if (mysqli_num_rows($catalog) > 0) {
                while ($row = mysqli_fetch_assoc($catalog)) {
            ?>
                    <div class="destination">
                        <img class="destination__img" width="375" height="375" src="img/<?php echo $row['img']?>">
                        <div class="destination-info">
                            <h3 class="destination__title"><?php echo $row['title']?></h3>
                            <p class="destination__text"><?php echo $row['about']?></p>
                            <b class="destination__price">Цена:<?php echo $row['price']?>р</b>
                            <a class="destination__link" href="./backend/backbasket.php?id=<?php echo $row['id'] ?>">Купить</a>
                        </div>
                    </div>
                <?php
                }
            }
            ?>
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