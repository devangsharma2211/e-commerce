<?php
include('./include/connect.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="https://i.ibb.co/F46mDQn/logo-removebg-preview.png" class="logo" width="100px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i><sup>
                            <?php
                            cart_item();
                            ?>
                        </sup></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>

            </ul>
            <div id="mobile">
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup>
                        <?php
                        cart_item();
                        ?>
                    </sup></a>

                <i id="bar" class="fas fa-outdent"></i>

            </div>
        </div>
    </section>
    <?php
    $select_query = 'SELECT * FROM `products`';
    $result_query = mysqli_query($con, $select_query);
    //$row=mysqli_fetch_array($result_query);
    //echo $row['product_title']
    while ($row = mysqli_fetch_array($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        // $product_keywords=$row['product_keywords'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_image4 = $row['product_image4'];

        $product_price = $row['product_price'];
        $category_title = $row['category_title'];
        $brand_title = $row['brand_title'];
    }
    echo " <section id='prodetails' class='section-p1'>
            <div class='single-pro-image'>
                <img src='./admin-area/product_images/$product_image1' width='100%' id='MainImg'>
                <div class='small-img-group'>
                    <div class='small-img-col'>
                        <img src='./admin-area/product_images/$product_image2' width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src='./admin-area/product_images/$product_image3' width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src='./admin-area/product_images/$product_image4' width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src='
                        https://i.ibb.co/Wp31szQ/f4.jpg' width='100%' class='small-img' alt=''>
                    </div>
                </div>
            </div>
            <div class='single-pro-details'>
                <h6>Home / T-Shirt</h6>
                <h4>Men's Fashion T-Shirt</h4>
                <h2>&#x20b9 1000</h2>
                <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
                </select>
                <input type='number' value='1'>
                <button class='normal'>Add To Cart</button>
                <h4>Product Detail</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit excepturi deserunt nemo aperiam dignissimos explicabo repellendus earum dicta! Quisquam minus at provident eligendi omnis? Itaque dolor aliquid at recusandae assumenda.
                Dolores molestias, ratione dolore incidunt tenetur suscipit quod sequi, placeat totam, culpa quisquam minus quia similique ipsa reprehenderit atque asperiores possimus officia nam itaque laudantium unde quos odio iste. Aspernatur?
                At veniam excepturi fuga quo nobis deserunt! Doloribus quod earum dolores nihil quia quae, eos est deserunt sed magni eaque illum maiores et vero. Ipsum asperiores aliquam eaque possimus doloremque.
                Fuga similique eaque vero tempore quisquam, necessitatibus eius. Nesciunt totam id aspernatur officiis voluptates quis temporibus, nostrum sed! Vero at amet id nostrum, ut accusamus debitis? Ducimus repudiandae voluptate sint!
                Sed natus dolor, architecto, vitae repellendus esse officia dolores praesentium libero ut laborum quo modi possimus, facilis eaque veniam earum fugit accusamus ad? Labore autem magni necessitatibus voluptate, mollitia dolorem.</span>
                </div>
                </section>";
    ?>


    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://i.ibb.co/LQdYrxR/n1.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20b9 1000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="
                    https://i.ibb.co/4Nw6dHk/n2.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20b9 1000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="
                    https://i.ibb.co/z7fvGfB/n3.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20b9 1000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://i.ibb.co/NsygFF2/n4.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20b9 1000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>SignUp for NewsLetters</h4>
            <p>Get E-mail updates about our latest shop and <span> special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="normal">SignUp</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="https://i.ibb.co/F46mDQn/logo-removebg-preview.png" width="100px" height="100px">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Lorem ipsum dolor sit </p>
            <p><strong>Phone:</strong> +91 7742280073 </p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-x"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-pinterest-p"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>

        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install Apps</h4>
            <p>From App Store and Google Play</p>
            <div class="row">
                <img src="https://i.ibb.co/VW36cqz/app.jpg" alt="">
                <img src="https://i.ibb.co/92tkZb3/play.jpg" alt="">
                <p>Secure Payment Gateways</p>
                <img src="https://i.ibb.co/VmtvMry/pay.png" alt="">

            </div>
        </div>
        <div class="copyright">
            <p>&#169 2024, Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
    </footer>
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
    <script src="script.js"></script>
</body>

</html>