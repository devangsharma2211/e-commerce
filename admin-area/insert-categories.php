<?php
include('../include/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    //Select From Database
    $select_query="select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('Category already Exist') </script>";

    }
else{

    $insert_query="insert into `categories` (category_title) values ('$category_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script> alert('Category Inserted Successfully') </script>";
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
<h3 style="text-align:center;">Insert Categories</h3>

        <section id="form-details">
            <form action="" method="post">
                <input type="text" name="cat_title" placeholder="Insert Categories" required="required" >
                <input type="submit" class="normal" name="insert_cat" placeholder="Insert Categories">
                <!--<button class="normal">Insert Categories</button>-->
                
            </form>
           
        </section>
        <script src="script.js"></script>
</body>
</html>