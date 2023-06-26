<?php
session_start();
include('includes/heder.php');
if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "You are already logged In";
    header('Location: index.php');
    exit();
}

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if (isset($_SESSION['message'])) {

                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php

                    unset($_SESSION['message']);
                }
                ?>

<!-- Section: Design Block -->
<section class="text-center ">

  <div class="card ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-3">Registration Form</h2>
          <h4 class="card-title text-center">Create Account</h4>

          <form action="functions/authcode.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                 
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                <input type="number" name="phone" class="form-control" placeholder="Phone number">
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control" placeholder="Create password">
            </div>

            <div class="form-outline mb-4">
            <input type="password" name="cpassword" class="form-control" placeholder="Repeat password" type="password">
            </div>
   

            <!-- Submit button -->
            <button type="submit" name="register_btn" class="btn btn-primary btn-block mb-4">
            Create Account 
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-facebook"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
















             


<?php include('includes/footer.php'); ?>

</body>

</html>