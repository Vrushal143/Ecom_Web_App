<?php

include('../middleware/adminMiddleware.php');
include('includes/heder.php');
?>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-4">
        <div class="card-header bg-primary">
        <span class="text-white fs-4">Orders
            <a href="order-history.php" class="btn btn-info float-end">Order History</a>
            </span>
        </div>
          <div class="card-body">
                <table class="table table-hover table-fixed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Tracking No</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $orders = getAllOrders();

                        if (mysqli_num_rows($orders) > 0) {
                            foreach ($orders as $item) {
                        ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['name']; ?></td>
                                    <td><?= $item['tracking_no']; ?></td>
                                    <td><?= $item['total_price']; ?></td>
                                    <td><?= $item['created_at']; ?></td>
                                    <td>
                                        <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">View details</a>
                                    </td>
                                </tr>

                            <?php
                            }
                        } else {
                            ?>

                            <tr>
                                <td colspan="5">No orders yet!</td>
                                
                            </tr>
                        <?php
                        }

                        ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
  </div>
</div>




<?php include('includes/footer.php'); ?>