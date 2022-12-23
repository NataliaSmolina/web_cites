<?php
    session_start();
    require_once 'include/connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Добавление</title>
       
        <link href="css/del&upd.css" rel="stylesheet">
    </head>
    <body>
        <div class="whole">
            <div class="menu">
                <ul>
                  <li><a href="include/signout.php">sign out</a></li>
                  <li><a href="page_for_admin.php">main page</a></li>
                  
                </ul>
            </div>
            <div class="form-table">
                <form class="authorize" action="include/add.php" method="post" enctype="multipart/form-data">
                
                    <label> Name</label>
                    <input type="text" placeholder="Type the name" name="title">
                    <label>Price</label>
                    <input type="text" placeholder="Type the price" name="price">
                    <label>Description</label>
                    <input type="text" placeholder="Describe" name="description">
                    <label>File</label>
                    <input type="file" placeholder="Upload the file" name="file">
                    <button type="submit">Add the item</button>
                    <?php
                        if (isset($_SESSION['error_uploading'])) {
                            echo '<p class="mes_green"> ' . $_SESSION['error_uploading'] . ' </p>';
                            unset($_SESSION['error_uploading']);
                        }
                        if (isset($_SESSION['added'])) {
                            echo '<p class="message"> ' . $_SESSION['added'] . ' </p>';
                            unset($_SESSION['added']);
                        }
                    ?>
                    
                </form>
                <table>
                        <tr>
                            
                            <td>name</td>
                            <td>price</td>
                            <td>description</td>
                            <td>file</td>
                            <td></td>
                            <td></td>
                        </tr>
                
                <?php 
                $products = mysqli_query($connect, "SELECT * FROM `items`");
                $products = mysqli_fetch_all($products);
                foreach ($products as $product){
                    echo '
                    <tr>
                        
                        <td>' . $product[1] . '</td>
                        <td>' . $product[2] . '</td>
                        <td>' . $product[3] . '</td>
                        <td><img src="' . $product[4] . '" width=20% border="1px solid black"></td>
                        <td><a href="update.php?id=' . $product[0] .'">edit</a></td>
                        <td><a href="delete.php?id=' . $product[0] .'">delete</a></td>
                    </tr>';
                }
                ?>
                </table>
            </div>
        </div>
    </body>
</html>