<?php
    session_start();
    require_once 'connect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass_confirm'];
    
    //еще добавить ограничения на длину и элементы нашей формы
    //сделать проверку на уже зарегистрированного пользователя после pass pass confirm
    $check = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if ($check){
        $_SESSION['msg']='Пользователь с таким логином уже есть';
        header('Location: ../authorize.php');
    } else{
        if ($pass===$pass_confirm){
            $_SESSION['user']=$login;
            mysqli_query($connect, "INSERT INTO `users` ( `name`, `email`, `login`, `password`) VALUES ('$name', '$email', '$login', '$pass')");
            $_SESSION['msg']='Регистрация прошла успешно';
            header('Location: ../authorize.php');
        } else{
            $_SESSION['msg']='Пароли не совпадают';
            header('Location: ../register.php');
        }
    }
    
?>