<?php
include('../include/connect.php');
if(isset($_GET['edit_seller'])){
    $edit_seller = $_GET['edit_seller'];
    //$get_seller = "SELECT * FROM `seller_registration` WHERE seller_id=$edit_seller";
    //$result = mysqli_query($con, $get_seller);
    //$row = mysqli_fetch_assoc($result);
    //$status = $row['status'];
    $status_new = 'approved'; // Change status to 'approved'
    $update_query = "UPDATE `seller_registration` SET `status`='$status_new' WHERE seller_id='$edit_seller'";
    $result_seller = mysqli_query($con, $update_query);
    if($result_seller){
        echo "<script>alert('Successfully updated status to approved!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    } else {
        echo "<script>alert('Failed to update status!')</script>";
    }
}

if(isset($_POST['edit_seller'])){
    $edit_seller = $_POST['edit_seller'];
    $status_new = 'approved'; // Change status to 'approved'
    $update_query = "UPDATE `seller_registration` SET `status`='$status_new' WHERE seller_id='$edit_seller'";
    $result_seller = mysqli_query($con, $update_query);
    if($result_seller){
        echo "<script>alert('Successfully updated status to approved!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    } else {
        echo "<script>alert('Failed to update status!')</script>";
    }
}

?>
