<?php
include('./functions/common_function.php');
include('./include/connect.php');

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        /*sign in page css*/
        body {
            margin: 0;
            padding: 0;
        }

        .container1 {
            width: 100%;
            height: 112%;
            background-position: center;
            background-size: cover;
            position: relative;

        }

        .form {
            margin-top: 5%;
            margin-left: 30%;
            width: 35%;
            height: 35rem;
            border: 2px solid black;
            border-radius: 10%;
            float: left;
        }

        .form input {
            margin-top: 15%;
            margin-left: 25%;
        }

        .form h1 {
            text-align: center;
            font-family: fantasy;
            font-size: 3rem;
        }

        .form-box {
            width: 90%;
            max-width: 450px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 50px 60px 70px;
            text-align: center;
        }

        .form-box h1 {
            font-size: 30px;
            margin-bottom: 60px;
            color: #555;
            position: relative;

        }

        .form-box h1::after {
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #088178;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }

        .input-field {
            background: #e3e6f3;
            margin: 15px 0px;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;


        }

        input {
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
        }

        .input-field i {
            margin-left: 15px;
            color: #999;

        }

        form p {
            text-align: left;
            font-size: 13px;

        }

        form p a {
            text-decoration: none;
            color: #088178;
        }

        .btn-fied {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn-field button {
            flex-basis: 48%;
            background: #088178;
            color: #fff;
            height: 40px;
            border-radius: 20px;
            width: 140px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background 1s;
            margin-bottom: 25px;
        }

        .input-group {
            height: 385px;
        }

        .btn-field button.disable {
            background: #eaeaea;
            color: #555;

        }

        /*sign in page css end*/
    </style>
    <title>Sign In</title>
</head>

<body>
    <section id="header">
        <a href="#"><img src="https://i.ibb.co/F46mDQn/logo-removebg-preview.png" class="logo" width="100px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="active" href="signin.php">Sign In</a></li>
                <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i>
                        <sup>
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
    <div class="container1" id="rowitems">
        <div class="form-box">
            <h1 id="title">User Login</h1>
            <form action="" method="post">
                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="user_email" id="email" autocomplete="off" required="required">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="user_password" id="password" autocomplete="off" required="required">
                    </div>


                    <p>Forgot Password<a href="#">Click Here!</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" type="button" id="signinbtn" name="signin" id="signin"> Sign In</button>


                </div>
            </form>
        </div>

    </div>

    <!---Footer-->

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
    <script src="script.js"></script>

</body>

</html>
<?php
session_start();
// Signin
if(isset($_POST['signin'])){
    $user_id=$_POST['user_id'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $select_query = "SELECT * FROM `user_table` WHERE user_email='$email'";
    $result = mysqli_query($con, $select_query);
    if($result) {
        $rows_count = mysqli_num_rows($result);
        
        if($rows_count > 0){
            $row_data = mysqli_fetch_assoc($result);
            if(password_verify($password, $row_data['user_password'])){
                echo "<script>alert('LogIn Successful.')</script>";
                echo "<script>window.open('index.php?$user_id','_self')</script>";
            } else {
                echo "<script>alert('Invalid Email or Password.')</script>";
            }
        } else {
            echo "<script>alert('You don't have an account. Please SignUp!')</script>";
        }
    } else {
        echo "<script>alert('Error in executing query.')</script>";
    }
}
?>