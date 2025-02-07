<?php
if(isset($_GET['delete_orders'])){
    $delete_id=$_GET['delete_orders'];
    //delete query
    $delete_orders="DELETE FROM `user_orders` WHERE order_id=$delete_id";
    $result_order=mysqli_query($con,$delete_orders);
    if($result_order){
        
        echo "<script>alert('Order Deleted Successfully!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }else{
        
        echo "<script>alert('Error!')</script>";
    }

}




?>