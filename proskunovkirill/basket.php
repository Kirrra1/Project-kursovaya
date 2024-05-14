<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
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
    <div class="container">
    <h2 class="title-section">Корзина</h2>
    <table class="basket">
    <thead>
            <tr>
                <th></th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th></th>
            </tr>
        </thead>
<?php 
require_once './backend/connect.php';
if (isset($_SESSION['cart'])) {
    $finalPrice = 0;
    foreach ($_SESSION['cart'] as $item) {
        $id = $item['id'];

        $product = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `id` = '$id'");
        while ($row = mysqli_fetch_assoc($product)) {
            $finalPrice += $row['price'];
?>
       
        <tbody>
            <tr>
                <td><img width="110" height="110" src="img/<?php echo $row['img']?>" alt=""></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['price']?></td>
                <td>1</td>
                <td><a href="./backend/delete.php?delete=<?php echo $row['id']?>"><img width="40" height="50" src="./img/bin.svg" alt=""></a></td>
            </tr>
        </tbody>
    
<?php
}
}
}
 ?>
 </table>
 <?php if ($finalPrice == 0) {
    echo "<h2 class=\"title-section\">Корзина Пуста</h2>";
} else { ?>
 <form class="order_form" method="post" action="./backend/order.php">
    <label class="lb">Имя:</label>
    <input name = 'name' type="text">
    <label class="lb">Email:</label>
    <input name = 'mail' type="email">
    <label class="lb">Номер телефона:</label>
    <input name = 'phone' type="text">
    <label class="lb">Цена Заказа: <?php echo $finalPrice?></label>
    <button type="submit" class="order_button">Оформить заказ</button>
 </form>
 <?php }?>
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
</html>