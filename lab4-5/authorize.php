<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
        <link href="css/authorize.css" rel="stylesheet">
    </head>
    <body>
        <form class="authorize" action="include/signin.php" method="post">
            <label>Логин</label>
            <input type="text" placeholder="Введите логин" name="login">
            <label>Пароль</label>
            <input type="password" placeholder="Введите пароль" name="password">
            <button type="submit">Войти</button>
            <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь!</a></p>
            <?php
                if (isset($_SESSION['msg'])) {
                    echo '<p class="message"> ' . $_SESSION['msg'] . ' </p>';
                    unset($_SESSION['msg']);
                    
                }
                if (isset($check)){
                    echo $check;
                }
            ?>
        </form>
    </body>
</html>