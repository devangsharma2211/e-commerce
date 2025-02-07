<?php
include('../include/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_price'];
    $product_status="true";
    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    $product_image4=$_FILES['product_image4']['name'];
    $product_image5=$_FILES['product_image5']['name'];
    $product_image6=$_FILES['product_image6']['name'];
    //accessing img temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    $temp_image4=$_FILES['product_image4']['tmp_name'];
    $temp_image5=$_FILES['product_image5']['tmp_name'];
    $temp_image6=$_FILES['product_image6']['tmp_name'];
    //checking empty conditions
    if($product_title==' ' or  $product_description==' ' or $product_keyword==' ' or $product_category==' ' or  $product_brand==' ' or $product_image1==' ' or  $product_image2==' ' or $product_image3==' ' or  $product_image4==' ' or $product_price==' ' ){
        echo "<script>alert('Fill all the Required Fields')</script>";
        //exit();
    } else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        move_uploaded_file($temp_image4,"./product_images/$product_image4");
        move_uploaded_file($temp_image5,"./product_images/$product_image5");
        move_uploaded_file($temp_image6,"./product_images/$product_image6");
        //insert query
        $insert_query="INSERT INTO `products`(`product_title`, `product_description`, `product_keywords`, `category_title`, `brand_title`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `product_image6`, `product_price`, `date`, `status`) values ('$product_title','$product_description'
         ,'$product_keyword','$product_category', '$product_brand','$product_image1','$product_image2','$product_image3','$product_image4','$product_image5','$product_image6',
         '$product_price', NOW(), '$product_status')";
         $result_query=mysqli_query($con,$insert_query);
        if($result_query){
            echo "<script>alert('Product Inserted Successfully')</script>";
        }
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert-Products</title>
    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3 style="text-align:center; margin:20px;">Insert Products</h3>

        <section id="form-details">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="title">

                    <label for="product_title">Product Title</label>
                    <input type="text" name="product_title" id="product_title" placeholder="Product Title" autocomplete="off" required="required">
                    <label for="product_description">Product Description</label>
                    <input type="text" name="product_description" id="product_description" placeholder="Product Description" autocomplete="off"  required="required">
                    <label for="product_keyword">Product Keyword</label>
                    <input type="text" name="product_keyword" id="product_keyword" placeholder="Product Keyword" autocomplete="off"  required="required">
                    <label for="product_category">Product Category</label>
                    <select name="product_category" id="product_category" class="product_category" style="
    width: 100%;
    padding: 12px 15px;
    outline: none;
    margin-bottom: 20px;
    border: 1px solid #e1e1e1;
" required="required">

                        <option value="">Select Category</option>
                        <?php
                            $select_query="select * from `categories`";
                            $result_query=mysqli_query($con,$select_query);
                            while($row=mysqli_fetch_array($result_query)){
                                $category_title=$row['category_title'];
                                $category_id=$row['category_id'];
                                echo "<option value=''>$category_title</option> ";
                            }
                        ?>
                    </select>
                    <label for="product_brand">Product Brand</label>

                    <select name="product_brand" id="product_brand" class="product_brand" style="
    width: 100%;
    padding: 12px 15px;
    outline: none;
    margin-bottom: 20px;
    border: 1px solid #e1e1e1;
" required="required" >
                        <option value="">Select Brand</option>
                        <?php
                            $select_query="select * from `brands`";
                            $result_query=mysqli_query($con,$select_query);
                            while($row=mysqli_fetch_array($result_query)){
                                $brand_title=$row['brand_title'];
                                $brand_id=$row['brand_id'];
                                echo "<option value=''>$brand_title</option> ";
                            }
                        ?>
                    
                    </select>
                    <label for="product_image1">Product Image 1 <span style="color: red;">*</span></label>
                    <input type="file" name="product_image1" id="product_image1"  required="required">
                    <label for="product_image2">Product Image 2 <span style="color: red;">*</span></label>
                    <input type="file" name="product_image2" id="product_image2"  required="required">
                    <label for="product_image3">Product Image 3 <span style="color: red;">*</span></label>
                    <input type="file" name="product_image3" id="product_image3"  required="required">
                    <label for="product_image4">Product Image 4 <span style="color: red;">*</span></label>
                    <input type="file" name="product_image4" id="product_image4"  required="required">
                    <label for="product_image5">Product Image 5</label>
                    <input type="file" name="product_image5" id="product_image5">
                    <label for="product_image6">Product Image 6</label>
                    <input type="file" name="product_image6" id="product_image6">
                    <label for="product_price">Product Price</label>
                    <input type="text" name="product_price" id="product_price" placeholder="Product Price" autocomplete="off" required="required" >
                    
                    

                    <input type="submit" class="normal" name="insert_product" placeholder="Insert Product">
                    <!--<button class="normal">Insert Categories</button>-->
                </div>
            </form>
           
        </section>
        <script src="script.js"></script>
</body>
</html>