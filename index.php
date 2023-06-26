<?php
include('functions/userfunctions.php');
include('includes/heder.php');
include('includes/slider.php');

?>
<!-- Products -->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Trending Products</h4>
                <div class="underline mb-2"></div>
                <!-- Owl carousal -->
                <div class="owl-carousel">
                    <?php
                    $trendingProducts = getAllTrending();
                    if (mysqli_num_rows($trendingProducts) > 0) {
                        foreach ($trendingProducts as $item) {
                    ?>
                            <div class="item">
                                <a href="product-view.php?product=<?= $item['slug']; ?>">
                                    <div class=" card text-dark bg-light mb-3">
                                        <div class="card-body">
                                            <img src="./admin/uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                                            <h6 class="text-center"><?= $item['name']; ?></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us -->
<div class="py-5 bg-f2f2f2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>About Us</h4>
                <div class="underline mb-2"></div>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ipsum facilis exercitationem laudantium accusantium, sequi corrupti nisi aperiam molestiae debitis perspiciatis porro modi dicta nobis reiciendis magnam. Assumenda, eius tempore.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ipsum facilis exercitationem laudantium accusantium, sequi corrupti nisi aperiam molestiae debitis perspiciatis porro modi dicta nobis reiciendis magnam. Assumenda, eius tempore.
                    <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ipsum facilis exercitationem laudantium accusantium, sequi corrupti nisi aperiam molestiae debitis perspiciatis porro modi dicta nobis reiciendis magnam. Assumenda, eius tempore.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-white">E-shope</h4>
                <div class="underline mb-2"></div>
                <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i> Home </a> <br>
                <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i> My Cart </a> <br>
                <a href="categories.php" class="text-white"><i class="fa fa-angle-right"></i> Our Collections </a> <br>
                <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i> About Us </a> <br>
                <a href="#" class="text-white"><i class="fa fa-angle-right"></i> Contact Us </a> 

                
            </div>
            <div class="col-md-3">
                <h4 class="text-white">Address</h4>
                <p class="text-white">
                    #24, Ground Floor,
                    2nd street,xyz layout,
                    Maharashtra,  India.
                </p>
                <a href="tel:+919876543210" class="text-white"><i class="fa fa-phone"></i> +91 9876543210</a> <br>
                <a href="mailto:xyz@gmail.com" class="text-white"><i class="fa fa-envelope"></i> xyz@gmail.com</a>
            </div>
            <div class="col-md-6">
            <h4 class="text-white"><i class="fa-solid fa-location-dot"></i> Location</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14884.552793516692!2d79.076694870875!3d21.14689781826114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1ca1f71a02f%3A0x76c4e12c367fe503!2sZero%20Mile%20Stone!5e0!3m2!1sen!2sin!4v1672825140834!5m2!1sen!2sin" class="w-100" height="200" style="border:0;"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
<!-- Footer code -->

  <!-- Section: Social media -->
  <section class="mb-4">
  <h4 class="text-white">Social Connect</h4>
  <div class="underline mb-2"></div>
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/vrushal.shahare.77"
        role="button"
        ><i class="fa fa-facebook-f"></i>
    </a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="https://twitter.com/vrushal_shahare"
        role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://www.instagram.com/vrushal_shahare_/"
        role="button"
        ><i class="fa fa-instagram"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="https://github.com/Vrushal143"
        role="button"
        ><i class="fa fa-github"></i
      ></a>
    </section>
  
        </div>
    </div>
</div>

<div class="py-2 bg-danger">
    <div class="text-center">
        <p class="mb-0 text-white">All rights reserved. Copyright @ Vrushal Web Designer & Developer <?= date('Y') ?></p>
    </div>
</div>


<?php include('includes/footer.php'); ?>

<script>
    $(document).ready(function() {

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    });
</script>