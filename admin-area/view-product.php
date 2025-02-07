<?php

include ('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <style>
        .product_img{
            width: 100px;
            margin: auto;
            object-fit: contain;
        }
    </style>
    <title>View-Products</title>
</head>

<body>
    <h3 style="text-align:center; margin: 50px;">All Products</h3>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th class="bg-info"> Product Id</th>
                <th class="bg-info"> Product Title</th>
                <th class="bg-info"> Product Image</th>
                <th class="bg-info"> Product Price</th>
                <th class="bg-info"> Total Sold</th>
                <th class="bg-info"> Status</th>
                <th class="bg-info"> Edit</th>
                <th class="bg-info"> Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $get_products = "SELECT * FROM `products` ";
            $result = mysqli_query($con,$get_products);
            $number = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $number++;
                $status = $row['status'];
            ?>

                <tr>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $product_title; ?></td>
                    <td><img src='./product_images/<?php echo $product_image1; ?>' class='product_img' /></td>
                    <td>&#x20b9 <?php echo $product_price; ?></td>
                    <td><?php
                        $get_count = "SELECT * FROM `orders_pending` WHERE product_id=$product_id";
                        $result_count = mysqli_query($con,$get_count);
                        $rows_count = mysqli_num_rows($result_count);
                        echo $rows_count;
                        ?></td>
                    <td><?php echo $status ?></td>
                    <td><a href='index.php?edit_products=<?php echo $product_id;?>' class='text-dark'><i class='fa-solid fa-pen-to-square'></i></a></td>
                    <td><a href='index.php?delete_product=<?php echo $product_id;?>' class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

</body>

</html>