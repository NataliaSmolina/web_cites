<?php
    session_start();
    require_once 'connect.php';
    if (isset($_SESSION['user'])){

            
            if ($_SESSION['user']==='admin'){
                
                $product_id = $_POST['id'];
                echo $product_id;
                mysqli_query($connect, "DELETE FROM `items` WHERE `id`='$product_id'");
                header('Location: ../add_item.php');
            } else{
                header('Location: ../mainpage_for_users.php');
            }
    } else{
        header('Location: ../page.html');
    }
    
?>