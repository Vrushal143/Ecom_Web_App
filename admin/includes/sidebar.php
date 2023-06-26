<?php
      $page= substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>
<!-- Admin Sidebar Start -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-gradient-secondary" >
  <div class="sidenav-header">
    <i class="fa fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" ></i>
    <a class="navbar-brand m-0" href="#">
      <span class="font-weight-bold text-white"> <i class="fa-solid fa-bars"></i> PHP Ecom</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class=" w-auto  max-height-vh-100" >
    <ul class="navbar-nav">
      <!-- Dashboard Start  -->
      <li class="nav-item">
        <a class="nav-link text-white <?=  $page =="index.php"? 'active bg-gradiant-primary':'';  ?> " href="index.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1"> <i class="fa-solid fa-list"></i> Dashboard</span>
        </a>
      </li>

      <!--------------------All Categories------------------------>
      <li class="nav-item">
        <a class="nav-link text-white <?=  $page =="category.php"? 'active bg-gradiant-primary':'';  ?> " href="category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1"> <i class="fa-solid fa-plus"></i> All Categories</span>
        </a>
      </li>
<!--------------------Add Categories------------------------>
      <li class="nav-item">
        <a class="nav-link text-white <?=  $page =="add-category.php"? 'active bg-gradiant-primary':'';  ?> " href="add-category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1"><i class="fa-solid fa-plus"></i> Add Category</span>
        </a>
      </li>

      <!--------------------All Products------------------------>
      <li class="nav-item">
        <a class="nav-link text-white <?=  $page =="products.php"? 'active bg-gradiant-primary':'';  ?> " href="products.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

          </div>
          <span class="nav-link-text ms-1"><i class="fa-solid fa-plus"></i> All Products</span>
        </a>
      </li>
<!--------------------Add Products----------------------->
      <li class="nav-item">
        <a class="nav-link text-white <?=  $page =="add-product.php"? 'active bg-gradiant-primary':'';  ?> " href="add-product.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1"> <i class="fa-solid fa-plus"></i> Add Products</span>
        </a>
      </li>

      <!--All order list -->
      <li class="nav-item">
        <a class="nav-link text-white <?=  $page =="orders.php"? 'active bg-gradiant-primary':'';  ?> " href="orders.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1"><i class="fa-solid fa-cart-shopping"></i> Orders</span>
        </a>
      </li>
      
   <!-- Dashboard end  -->
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../logout.php">Logout</a>
    </div>
  </div>
</aside>

<!-- Admin Sidebar end -->