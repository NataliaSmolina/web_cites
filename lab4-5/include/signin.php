<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $pass = $_POST['password'];
    
    if ($login=="admin" and $pass=="123"){
        $_SESSION['user']=$login;
        header('Location: ../page_for_admin.php');
    } else{
        $check = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
        if ($check){
            
            $_SESSION['user']=$login;
            header('Location: ../mainpage_for_users.php');
        } else{
            $_SESSION['msg']='Авторизация не выполнена';
            $user = mysqli_fetch_assoc($check);
            
            header('Location: ../authorize.php');
        }
    }
    
    
?>
