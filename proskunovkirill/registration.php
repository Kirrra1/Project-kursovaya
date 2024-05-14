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
    <link rel="stylesheet" href="registration.css">
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
        <div class="container1">
            <div class="main">  	
                <input type="checkbox" id="chk" aria-hidden="true">
        
                <div class="login">
                    <form class="form" method="post" action="./backend/reg.php">
                        <label for="chk" aria-hidden="true">Войти в аккаунт</label>
                        <?php
        if ($_SESSION['mes']) {
          echo   $_SESSION['mes'];
        }
        unset($_SESSION['mes']);
        ?>
                        <input class="input" type="email" name="email" placeholder="Email" required>
                        <input class="input" type="password" name="passwordlog" placeholder="Пароль..." required>
                        <button type="submit">Войти</button>
                    </form>
                </div>
        
                <div class="register">
                    <form class="form" action="./backend/reg.php" method="post">
                        <label for="chk" aria-hidden="true">Регистрация</label>
                        <input class="input" type="text" name="name" placeholder="Имя" required>
                        <input class="input" type="email" name="email" placeholder="Email" required>
                        <input class="input" type="password" name="password" placeholder="Пароль..." required>
                        <button type="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div> 
    </main>
    <footer id="footer-section">
           
           <div class="footer-copyright">
               <div class="container">
                   <p class="footer-copyright__text">©2024 Все права защищены. | proskunovkirill@gmail.com</p>
               </div>
           </div>
       </footer>
</body>    