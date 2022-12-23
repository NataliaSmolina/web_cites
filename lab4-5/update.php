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
        <title>Обновление</title>
        
        <link href="css/authorize.css" rel="stylesheet">
    </head>
    <body>
        <form class="authorize" action="include/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value=<?=$product_id?>>
            <label> Название</label>
            <input type="text" placeholder="Введите название" name="title" value=<?= $product['title']?>>
            <label>Цена</label>
            <input type="text" placeholder="Введите цену" name="price" value=<?= $product['price']?>>
            <label>Описание</label>
            <input type="text" placeholder="Введите описание" name="description" value=<?= $product['description']?>>
            <label>Фотография</label>
            <input type="file" placeholder="Загрузите файл" name="file" value=<?= $product['file']?>>
            <button type="submit">Обновить товар</button>
            
            
        </form>
        
    </body>
</html>