<?php
include ('../include/connect.php');
if (isset($_GET['edit_products'])) {
    $edit_id = $_GET['edit_products'];
    $get_data = "SELECT * FROM `products` WHERE product_id=$edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $category_title = $row['category_title'];
    $brand_title = $row['brand_title'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_image4 = $row['product_image4'];
    $product_image5 = $row['product_image5'];
    $product_image6 = $row['product_image6'];
    $product_price = $row['product_price'];
    //fetch category name
    $select_category = "SELECT * FROM `categories` WHERE category_title=$category_title";
    $result_category = mysqli_query($con,$select_category);
    if($result_category !== false){
    $row_category = mysqli_fetch_array($result_category);
    $category_title = $row_category['category_title'];}

    //fetching brand name
    $select_brand = "SELECT * FROM `brands` WHERE brand_title=$brand_title";
    $result_brand = mysqli_query($con, $select_brand);
    if($result_brand !== false){
    $row_brand = mysqli_fetch_assoc($result_brand);
    $brand_title = $row_brand['brand_title'];}
}
?>

<div class="container mt-5">
    <h1 class="text-center">
        Edit Products
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title </label>
            <input type="text" name="product_title" value="<?php echo $product_title; ?>" id="product_title" class="form-control" required>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_description" class="form-label">Product description </label>
            <input type="text" name="product_description" value="<?php echo $product_description; ?>" id="product_description" class="form-control" required>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product keywords </label>
            <input type="text" name="product_keywords" value="<?php echo $product_keywords; ?>" id="product_keywords" class="form-control" required>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="category_title" class="form-label">Product category </label>
            <select name="category_title" class="form-select">
                <option value="<?php echo $category_title; ?>"><?php echo $category_title; ?></option>
                <?php

                $select_category_all = "SELECT * FROM `categories`";
                $result_category_all = mysqli_query($con, $select_category_all);
                while ($row_category_all = mysqli_fetch_assoc($result_category_all)) {
                    $category_title = $row_category_all['category_title'];
                    echo "
                <option value='$category_title'>$category_title</option>";
                }

                ?>

            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="brand_title" class="form-label">Product brands </label>
            <select name="brand_title" class="form-select">
                <option value="<?php echo $brand_title; ?>"><?php echo $brand_title; ?></option>
                <?php
                  $select_brand_all = "SELECT * FROM `brands`";
                  $result_brand_all = mysqli_query($con, $select_brand_all);
                  while ($row_brand_all = mysqli_fetch_assoc($result_brand_all)) {
                      $brand_title = $row_brand_all['brand_title'];
                      echo "
                  <option value='$brand_title'>$brand_title</option>";
                  }
                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product image 1 </label>
            <div class="d-flex">

                <input type="file" name="product_image1" id="product_image1" class="form-control w-90 m-auto" required>
                <img src="../admin-area/product_images/<?php echo $product_image1; ?>" alt="" style="width: 100px; height: 100px;" />
            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product image 2 </label>
            <div class="d-flex">

                <input type="file" name="product_image2" id="product_image2" class="form-control w-90 m-auto" required>
                <img src="../admin-area/product_images/<?php echo $product_image2; ?>" alt="" style="width: 100px; height: 100px;" />

            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">Product image 3 </label>
            <div class="d-flex">

                <input type="file" name="product_image3" id="product_image3" class="form-control w-90 m-auto" required>
                <img src="../admin-area/product_images/<?php echo $product_image3; ?>" alt="" style="width: 100px; height: 100px;" />

            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image4" class="form-label">Product image 4 </label>
            <div class="d-flex">

                <input type="file" name="product_image4" id="product_image4" class="form-control w-90 m-auto" required>
                <img src="./product_images/<?php echo $product_image4; ?>" alt="" style="width: 100px; height: 100px;" />

            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image5" class="form-label">Product image 5 </label>
            <div class="d-flex">

                <input type="file" name="product_image5" id="product_image5" class="form-control w-90 m-auto">
                <img src="../admin-area/product_images/<?php echo $product_image5; ?>" alt="" style="width: 100px; height: 100px;" />

            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image6" class="form-label">Product image 6 </label>
            <div class="d-flex">

                <input type="file" name="product_image6" id="product_image6" class="form-control w-90 m-auto">
                <img src="../admin-area/product_images/<?php echo $product_image6; ?>" alt="" style="width: 100px; height: 100px;" />

            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product price </label>
            <input type="text" name="product_price" value="<?php echo $product_price; ?>" id="product_price" class="form-control" required>

        </div>
        <div class="text-center w-50 m-auto">
            <input type="submit" name="edit_product" value="Update Product" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>
<!--- Editing Products ---->
<?php
if (isset($_POST['edit_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $category_title=$_POST['category_title'];
    $brand_title=$_POST['brand_title'];
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    $product_image4=$_FILES['product_image4']['name'];
    $product_image5=$_FILES['product_image5']['name'];
    $product_image6=$_FILES['product_image6']['name'];
    $product_price=$_POST['product_price'];


    
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    $temp_image4=$_FILES['product_image4']['tmp_name'];
    $temp_image5=$_FILES['product_image5']['tmp_name'];
    $temp_image6=$_FILES['product_image6']['tmp_name'];
    //checking fields empty or not
    if($product_title=='' or $product_description=='' or  $product_keywords=='' or $category_title=='' or $brand_title=='' or $product_image1==''
    or $product_image2=='' or $product_image3=='' or $product_image4=='' or $product_price==''){
        echo "<script>alert('Plz Fill all the fields properly')</script>";
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        move_uploaded_file($temp_image4,"./product_images/$product_image4");
        move_uploaded_file($temp_image5,"./product_images/$product_image5");
        move_uploaded_file($temp_image6,"./product_images/$product_image6");

        //query to update products
        $update_product="UPDATE `products` SET product_title='$product_title', product_description='$product_description', product_keywords='$product_keywords',
         category_title='$category_title', brand_title='$brand_title', product_image1='$product_image1', product_image2='$product_image2', product_image3='$product_image3',
         product_image4='$product_image4', product_image5='$product_image5', product_image6='$product_image6', product_price='$product_price', date=NOW() WHERE product_id='$edit_id' ";
         $result_update=mysqli_query($con,$update_product);
         if($result_update){
            echo "<script>alert('Data edited successfully!')</script>";
            echo "<script>window.open('view-product.php','_self')</script>";
         }else{
            echo "<script>alert('Error')</script>";
            
         }
    }
}
?>