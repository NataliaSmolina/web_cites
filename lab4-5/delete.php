<?php
    session_start();
    require_once 'include/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `items` WHERE `id`= '$product_id'");
    $product = mysqli_fetch_assoc($product);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Удаление</title>
        
        <link href="css/authorize.css" rel="stylesheet">
    </head>
    <body>
        <form class="authorize" action="include/delete.php" method="post">
            
            <!-- вывести описание товара -->
            <input type="hidden" name="id" value=<?=$product_id?>>
            <button type="submit">Delete the item</button>
            
            
        </form>
        
    </body>
</html>