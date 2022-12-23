<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Регистрация</title>
        <link href="css/authorize.css" rel="stylesheet">
        
    </head>
    <body>
        <form class="authorize" action="include/signup.php" method="post">
            <label>Имя</label>
            <input type="text" placeholder="Введите имя" name="name">
            <label>Почта</label>
            <input type="email" placeholder="Введите почту" name="email">
            <label>Логин</label>
            <input type="text" placeholder="Введите логин" name="login">
            <label>Пароль</label>
            <input type="password" placeholder="Введите пароль" name="pass">
            <label>Подтвердите пароль</label>
            <input type="password" placeholder="Введите пароль еще раз" name="pass_confirm">
            <button type="submit">Зарегистрироваться</button>
            <p>Есть аккаунт? <a href="authorize.php">Войдите!</a></p>
            <?php
                if (isset($_SESSION['msg'])) {
                    echo '<p class="message"> ' . $_SESSION['msg'] . ' </p>';
                    unset($_SESSION['msg']);
                }
            ?>
            
        </form>
    </body>
</html>