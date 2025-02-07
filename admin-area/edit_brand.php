<?php
if(isset($_GET['edit_brand'])){
    $edit_brand=$_GET['edit_brand'];
    $get_brands="SELECT * FROM `brands` WHERE brand_id=$edit_brand";
    $result=mysqli_query($con,$get_brands);
    $row=mysqli_fetch_array($result);
    $brand_title=$row['brand_title'];
    
}
if(isset($_POST['edit_cat'])){
    $cat_title=$_POST['brand_title'];
    $update_query="UPDATE `brands` SET brand_title='$cat_title' WHERE brand_id='$edit_brand'";
    $result_brand=mysqli_query($con,$update_query);
    if($result_brand){
        echo "<script>alert('brand Updated Successfully!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>
<div class="container mt-3">
    <h1 class="text-center">
        Edit brand
    </h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_title" class="form-label">brand Title</label>
            <input type="text" name="brand_title" id="brand_title" class="form-control" required value='<?php echo $brand_title; ?>' >
        </div>
        <input type="submit" value="Update brand" class="btn btn-info px3 mb-3" name="edit_cat">
    </form>
</div>