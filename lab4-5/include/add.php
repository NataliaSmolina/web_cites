<?php
    session_start();
    require_once 'connect.php';
    
    if (isset($_SESSION['user'])){

            
        if ($_SESSION['user']==='admin'){
            $title = $_POST['title'];
            $price = $_POST['price'];
            $desc = $_POST['description'];
            $path = 'uploads/' . time() . $_FILES['file']['name'];
            if (!move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path)){
                $_SESSION['error_uploading']='Фото товара не загрузилось';
                header('Location: ../add_item.php');
            }
            if (mysqli_query($connect, "INSERT INTO `items` ( `title`, `price`, `description`, `file`) VALUES ('$title', '$price', '$desc', '$path')")){
                $_SESSION['added']='Товар добавлен';
                header('Location: ../add_item.php');
            } else{
                $_SESSION['added']='Товар не был добавлен';
                header('Location: ../add_item.php');
            }
        } else{
            header('Location: ../mainpage_for_users.php');
        }
} else{
    header('Location: ../page.html');
}
    
?>