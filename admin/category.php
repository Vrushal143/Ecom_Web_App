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
                    <div class="card-body" id="categories_table">
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
                $category = getAll("categories");

                if (mysqli_num_rows($category) > 0) {

                  foreach ($category as $item) {

                ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['name']; ?></td>
                                    <td>
                                        <img src="uploads/<?= $item['image']; ?>" width="55px" height="70px"
                                            alt="<?= $item['name']; ?>">
                                    </td>
                                    <td>
                                        <?= $item['status'] == '0' ? "Visible" : "Hidden" ?>
                                    </td>
                                    <td>
                                        <a href="edit-category.php?id=<?= $item['id']; ?>"
                                            class="btn btn-sm btn-primary">Edit</a>

                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                name="delete_category_btn">Delete</button>
                                        </form>
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