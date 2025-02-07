<?php
include('./include/connect.php');
//getting products function
function getproducts()
{
    global $con;
    $select_query = 'SELECT * FROM `products`  order by rand() limit 0,8';
    $result_query = mysqli_query($con, $select_query);
    //$row=mysqli_fetch_array($result_query);
    //echo $row['product_title']
    while ($row = mysqli_fetch_array($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        // $product_keywords=$row['product_keywords'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_title = $row['category_title'];
        $brand_title = $row['brand_title'];
        echo " <section id='product1' class='section-p1 column'>
                     <div class='pro-container'>
                                <div class='pro' >
                                <a href='product_details.php?product_id=$product_id'> <img src='./admin-area/product_images/$product_image1'></a>
                                    <div class='des'>
                                        <span>$brand_title</span>
                                        <h5>$product_title</h5>
                                        <div class='star'>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                        </div>
                                        <h4>&#x20b9 $product_price</h4>
                                    </div>
                                    <a href='index.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping cart' ></i></a>
                                </div>
                    </div>
                        </div>
                            </section>";
        //echo "<br>";
    }
}
function getbrands()
{
    global $con;
    $select_brands = "Select * from `brands`";
    $result_brands = mysqli_query($con, $select_brands);
    //$row_data=mysql_fetch_assoc($result_brands);
    //echo $row_data['brand_title'];
    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id'];
        echo $brand_title;
        echo '<br>';
    }
}
function getcategories()
{
    global $con;
    $select_categories = "Select * from `categories`";
    $result_categories = mysqli_query($con, $select_categories);
    //$row_data=mysql_fetch_assoc($result_brands);
    //echo $row_data['brand_title'];
    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo $category_title;
        echo '<br>';
    }
}
//get ip address function
function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  

//cart function
function cart()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $ip = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$ip' AND product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<script> alert('Item Already Present.')</script>";
            echo "<script> window.open('index.php','_self')</script>";
        } else {
            $insert_query = "INSERT INTO `cart_details` (product_id,ip_address,quantity) VALUES ($get_product_id,'$ip',0) ";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script> window.open('index.php','_self')</script>";
        }
    }
}
// Function to get cart item number
function cart_item()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $ip = getIPAddress();
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$ip'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    } else {
        global $con;
        $ip = getIPAddress();
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$ip'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    }
    echo $count_cart_items;
}
//total price function
function total_cart_price(){
    global $con;
    $ip = getIPAddress();
    $total = 0;
    $cart_query="SELECT * FROM `cart_details` WHERE ip_address='$ip'";
    $result=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="SELECT * FROM `products` WHERE product_id='$product_id'";
        $result_products=mysqli_query($con,$select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $product_values=array_sum($product_price);
            $total+=$product_values;
        }
    }
    echo $total;

}





