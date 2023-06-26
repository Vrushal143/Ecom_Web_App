<?php

include('includes/heder.php');
include('../functions/myfunctions.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = getByID("products", $id);
                if (mysqli_num_rows($product) > 0) {
                    $data = mysqli_fetch_array($product);
            ?>
                    <!-------------Edit Product ----------------------->
                    <div class="card mt-4">
                        <div class="card header">
                            <h4 class="text-center mt-3 text-uppercase font-weight-bold">Edit Product
                                <a href="products.php" class="btn btn-primary float-end">Back</a>
                            </h4>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <label class=" mb-0 ">Select Category</label>
                                            <select name="category_id" class="form-select mb-2 " placeholder="Select Category">
                                                <option selected>Select Category</option>
                                                <?php
                                                $categories = getAll("categories");
                                                if (mysqli_num_rows($categories) > 0) {
                                                    foreach ($categories as $item) {
                                                ?>
                                                        <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : '' ?>><?= $item['name']; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo "No product available";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">

                                        <div class="col-md-6">
                                            <label class="mb-0 ">Name</label>
                                            <input type="text" required name="name" value="<?= $data['name']; ?>" placeholder="Enter Category Name" class="form-control mb-2 ">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="mb-0">Slug</label>
                                            <input type="text" required name="slug" value="<?= $data['slug']; ?>" placeholder="Enter Slug" class="form-control mb-2">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="mb-0"> Small Description</label>
                                            <textarea rows="3" required name="small_description" placeholder="Enter small description" class="form-control mb-2"> <?= $data['small_description']; ?></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="mb-0"> Description</label>
                                            <textarea rows="3" required name="description" placeholder="Enter description" class="form-control mb-2"><?= $data['description']; ?></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="mb-0">Original Price</label>
                                            <input type="text" required name="original_price" value="<?= $data['original_price']; ?>" placeholder="Enter Original Price" class="form-control mb-2">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="mb-0">Selling Price</label>
                                            <input type="text" required name="selling_price" value="<?= $data['selling_price']; ?>" placeholder="Enter Selling Price" class="form-control mb-2">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Upload Image</label>
                                            <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                            <input type="file"  class="form-control mb-2">
                                            <label for="">Current Image</label>
                                            <img src="uploads/<?= $data['image'] ?>" alt="product Image" height="55px" width="55px">

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="mb-0">Quantity</label>
                                                <input type="number" required name="qty" value="<?= $data['qty']; ?>" placeholder="Enter Quantity" class="form-control mb-2">
                                            </div>

                                            <div class="col-md-3">
                                                <label class="mb-0">Status</label> <br>
                                                <input type="checkbox" name="status" <?= $data['status'] == '0' ? 'checked' : '' ?> ">
                                            </div>

                                            <div class=" col-md-3">
                                                <label class="mb-0">Trending</label> <br>
                                                <input type="checkbox" name="trending" <?= $data['trending'] == '0' ? 'checked' : '' ?> ">
                                            </div>
                                        </div>

                                        <div class=" col-md-12">
                                                <label class="mb-0">Meta Title</label>
                                                <input type="text" required name="meta_title" value="<?= $data['meta_title']; ?>" placeholder="Enter meta title" class="form-control mb-2">
                                            </div>

                                            <div class="col-md-12">
                                                <label for="">Meta Description</label>
                                                <textarea row="3" name="meta_description" placeholder="Enter meta description" class="form-control"><?= $data['meta_description'] ?>
                                            </textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="">Meta Keyword</label>
                                                <textarea textarea row="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control"><?= $data['meta_keywords'] ?>
                                            </textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                            </div>

                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "Id Missing from url";
            }
            ?>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>