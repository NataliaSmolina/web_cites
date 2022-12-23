<?php
    session_start();
    require_once 'include/connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/pagecss.css">
        <link rel="stylesheet" href="./css/first.css">
        <link rel="stylesheet" href="./css/second.css">
        <link rel="stylesheet" href="./css/third.css">
        <link rel="stylesheet" href="./css/fourth.css">
        <link rel="stylesheet" href="./css/fifth.css">
        <link rel="stylesheet" href="./css/sixth.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <header class="container">
            <div class="container-header1">
              <img src="./pics/pexels-cottonbro-4503751 1.png" alt="">
            </div>

            <div class="container-header">
              <div class="menu">
                <ul>
                  <li><img src="./pics/лупа.png" class="menu-icons"></li>
                  <li><img class="menu-icons" src="./pics/тележка.png"></li>
                  <li class="button"><a href="include/signout.php">Sign out</a></li>
                </ul>
              </div>
              <div>
  	            <h1 class="title">Kembang Flower Mantap</h1>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and 
                  typesetting industry. Lorem Ipsum has been the industry's 
                  standard dummy text ever since the 1500s,</p>
              </div>
            </div>
        </header>
        <main>
          <div class="features">
            <div class="feature">
              <div class="img-h">
                <div class="picture"><img src="./pics/delivery.png"></div>
                <div><h3>Fast Delivery</h3></div>
              </div>
              <div><p class="text">Lorem Ipsum is simply dummy text of the printing and
                 typesetting industry. Lorem Ipsum has been the industry's
                  standard</p>
                </div>
            </div>
            <div class="feature except">
              <div class="img-h">
                <div class="picture"><img src="./pics/headphones.png"></div>
                <div><h3>Great Customer Service</h3></div>
              </div>
              <div><p class="text">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                 standard</p>
               </div>
            </div>
            <div class="feature">
              <div class="img-h">
                <div class="picture"><img src="./pics/plant.png"></div>
                <div><h3>Original Plants</h3></div>
              </div>
              <div><p class="text">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                 standard</p>
               </div>
            </div>
            <div class="feature feature-last except4">
              <div class="img-h">
                <div class="picture"><img src="./pics/dollar.png"></div>
                <div><h3>Affordable Price</h3></div>
              </div>
              <div><p class="text">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                 standard</p>
               </div>
            </div>
          </div>
          <!-- здесь код на php -->
          <!--Надо в цикле выводить наши товары -->
          
          <div class="featured-plants">
            <div class="featured-h">
              <div><h3>Featured Plants</h3></div>
            </div>
            <div class="plants" style="overflow-y:auto;">
              <?php 
                  $products = mysqli_query($connect, "SELECT * FROM `items`");
                  $products = mysqli_fetch_all($products);
                  foreach ($products as $product){?> 
                      <div class="display-plants">
                        <div>
                          <img src="<?=$product[4] ?>">
                        </div>
                        <div>
                          <p class="text change-text"><?=$product[1] ?></p>
                          <h4 class="change-h">IDR <?=$product[2] ?></h4>
                        </div>
                      </div>
              <?php 
              }?>
            </div>
          </div>
          <div class="psychology">
            <div class="pic-n-text">
              <div>
                <h3>Buy more plants, it helps you to be relaxed </h3>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.</p>
              </div>
              <div><img src="./pics/column_plants.png"></div>
            </div>
            <div class="solo-pic">
              <img src="./pics/row_plants.png" alt="">
            </div>
          </div>
          <div class="prefooter">
            <div class="prefooter-button">
              <h3>Get your favourites plant on our shop now</h3>
              <div><a href="#">Visit shop</a></div>
            </div>
            <div class="pic">
              <img src="./pics/last_pic.png">
            </div>
          </div>
        </main>
        <footer>
            <div class="footerr">
              <div class="first">
                <h2>Plantku</h2>
                <h3>Plantku House</h3>
                <p>Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok,
                   Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282</p>
              </div>
              <div class="second">
                <h3>Perusahaan</h3>
                <p class="footer-block">Tentang Kami</p>
                <p>Hubungi Kami</p>
              </div>
              <div class="third">
                <h3>Produk</h3>
                <p class="footer-block">Tanaman</p>
                <p>Tanaman Lain</p>
              </div>
              <div class="fourth">
                <h3>Berlangganan Email Kami</h3>
                <div><input class="in-div" type="email" placeholder="Masukan Alamat Email"></div>
                <input class="submit-button" type="submit" value="Submit">
              </div>
            </div>
        </footer>
    </body>
</html>