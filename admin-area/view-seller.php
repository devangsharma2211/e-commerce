<section>
        <h3 style="text-align: center; margin: 20px">Manage Seller</h3>
        <table class="table table-bordered mt-5">
            <thead class="bg-info">
                <tr>
                    <th>Serial No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Enrollment Number</th>
                    <th>Status</th>
                    <th>Approve</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="bg-secondary text-dark">
                <?php
                $select_seller = "SELECT * FROM `seller_registration`";
                $result_seller = mysqli_query($con, $select_seller);
                $number = 0;
                while ($row = mysqli_fetch_assoc($result_seller)) {
                    $seller_id = $row['seller_id'];
                    $seller_username = $row['username'];
                    $seller_email = $row['email'];
                    $seller_enroll = $row['enroll'];
                    $seller_status = $row['status'];
                    $number++;

                ?>
                    <tr>
                        <td><?php echo $number; ?></td>
                        <td><?php echo $seller_username; ?></td>
                        <td><?php echo $seller_email; ?></td>
                        <td><?php echo $seller_enroll; ?></td>
                        <td><?php echo $seller_status; ?></td>
                        <td><a href='home.php?edit_seller=<?php echo $seller_id; ?>' class='text-dark'><i class='fa-solid fa-square-check'></i></a></td>
                        <td><a href='home.php?delete_seller=<?php echo $seller_id; ?>' class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </section>