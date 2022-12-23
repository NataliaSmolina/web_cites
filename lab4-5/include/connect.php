<?php
    $connect = mysqli_connect('localhost','root','','flowershop');
    if (!$connect){
        die('Connection to the database has not been established');
    }
?>