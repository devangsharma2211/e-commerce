<?php
include('../include/connect.php');
if(isset($_POST['insert_brand'])){
    $brand_title=$_POST['brand_title'];
    //Select From Database
    $select_query="select * from `brands` where brand_title='$brand_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('Brand already Exist') </script>";

    }
else{

    $insert_query="insert into `brands` (brand_title) values ('$brand_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script> alert('Brand Inserted Successfully') </script>";
    }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert-Categories</title>
    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3 style="text-align:center;">Insert Brands</h3>
        <section id="form-details">
            <form action="" method="post">
                <input type="text" name="brand_title" placeholder="Insert Brands" required="required">
                <input type="submit" class="normal"name="insert_brand" placeholder="Insert Categories"> 
                <!--<button class="normal">Insert Brands</button>-->
                
            </form>
           
        </section>
        <script src="script.js"></script>
</body>
</html>