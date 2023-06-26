
    <?php
    session_start();

    if (isset($_SESSION['auth'])) {
        $_SESSION['message'] = "You are already logged In";
        header('Location: index.php');
        exit();
    }

    include('includes/heder.php');
    ?>

    
                    <?php 
                    if (isset($_SESSION['message'])) 
                    {

                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        unset($_SESSION['message']);
                    }
                    ?>


<section class="vh-50 gradient-custom">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-5 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-4">Please enter your login and password!</p>

              
              <form action="functions/authcode.php" method="POST">

              <div class="form-outline form-white mb-3">
                <label class="form-label" for="typeEmailX"> <i class="fa fa-envelope"></i>  Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
              </div>

              <div class="form-outline form-white mb-3">
                <label class="form-label" for="typePasswordX"> <i class="fa fa-lock"></i> Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
              </div>

              <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="#">Forgot password?</a></p>

              <button type="submit" name="login_btn" class="btn btn-outline-light btn-lg px-5">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div><br>
              <p class="mb-3">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Register Here </a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>






                    <!--container end.//-->

       
    <?php include('includes/footer.php'); ?>
</body>

</html>