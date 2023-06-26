<?php
include('../middleware/adminMiddleware.php');
include('includes/heder.php');

?>
<!-------------Index Page Start --------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="text-center mt-3 text-uppercase font-weight-bold">Products</h4>
                    <div class="card-body" id="products_table">
                        <table class="table table-hover table-fixed">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $products = getAll("products");

                                if (mysqli_num_rows($products) > 0) {

                                    foreach ($products as $item) {
                                ?>
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td>
                                            <img src="uploads/<?=$item['image']; ?>" width="55px" height="70px" alt="<?=$item['name']; ?>">
                                            <td>
                                                <?= $item['status'] == '0' ? "Visible" : "Hidden" ?>
                                            </td>
                                            <td>
                                                <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                            </td>
                                            <td>
                                        
                                                    <button type="submit" class="btn btn-sm btn-danger delete_product_btn" value="<?=$item['id']; ?>">Delete</button>
                                               
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "No Records Found";
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

<!-------------Index Page End --------------------->
<?php
include('includes/footer.php');
?>