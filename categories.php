<?php

include('functions/userfunctions.php');
include('includes/heder.php');
?>
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home / Collections</h6>
    </div>
</div>

<div class="py-3">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <h2>Our Collections!</h2>
                <hr>
                <div class="row">

                    <?php
                    $categories = getAllActive("categories");

                    if (mysqli_num_rows($categories) > 0) {
                        foreach ($categories as $item) {
                    ?>
                            <div class="col-md-3 mb-2 ">
                                <a href="products.php?category=<?= $item['slug']; ?>">
                                    <div class="card shadow" style="width: 13rem;">
                                        <div class="card-body">
                                            <img class="card-img-top " src="./admin/uploads/<?= $item['image']; ?>" alt="Category Image">
                                            <h4 class="text-center"><?= $item['name']; ?></h4>
                                        </div>
                                    </div>
                                </a>

                            </div>
                    <?php
                        }
                    } else {
                        echo "No data Found";
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>