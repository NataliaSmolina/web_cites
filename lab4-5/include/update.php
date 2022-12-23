<?php
  
    session_start();
    require_once 'connect.php';
    if (isset($_SESSION['user'])){

            
            if ($_SESSION['user']==='admin'){
                $product_id = $_POST['id'];
                $title = $_POST['title'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                if (($_FILES['file']['name'])===''){
                    mysqli_query($connect, "UPDATE `items` SET `title`='$title',`price`='$price',`description`='$description' WHERE `id`= '$product_id'");
                } else{
                    
                    $path = 'uploads/' . time() . $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path);
                    mysqli_query($connect, "UPDATE `items` SET `title`='$title',`price`='$price',`description`='$description',`file`='$path' WHERE `id`= '$product_id'");
                }
                header('Location: ../add_item.php');
            } else{
                header('Location: ../mainpage_for_users.php');
            }
    } else{
        header('Location: ../page.html');
    }
?>