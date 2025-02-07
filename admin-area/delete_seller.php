<?php
if(isset($_GET['delete_seller'])){
    $delete_id=$_GET['delete_seller'];
    //delete query
    $delete_seller="DELETE FROM `seller_registration` WHERE seller_id=$delete_id";
    $result_seller=mysqli_query($con,$delete_seller);
    if($result_seller){
        
        echo "<script>alert('Deleted Successfully!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    }else{
        
        echo "<script>alert('Error!')</script>";
    }

}




?>