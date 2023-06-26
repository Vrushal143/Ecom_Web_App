<!-- Admin footer start -->

<footer class="footer pt-5">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-12">
        <ul class="nav nav-footer justify-content-center ">

          <li class="nav-item">
            <a href="#" class="nav-link pe-0 text-muted">About Us</a>

          <li class="nav-item">
            <a href="#" class="nav-link pe-0 text-muted">Services</a>

          <li class="nav-item">
            <a href="#" class="nav-link pe-0 text-muted">Contact</a>

          <li class="nav-item">
            <a href="#" class="nav-link pe-0 text-muted">About</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- Admin footer End -->

 <!-- Font Awesome -->
<script src="https://kit.fontawesome.com/d9ac3e5613.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<!-- Jquery -->
<script src="assets/js/jquery-3.6.3.min.js"></script>

<!-- Jquery Bootstrap Bundle -->
<script src="assets/js/bootstrap.bundle.min.js" ></script>

<!-- Custom Sweet-Alert  -->
<script src="assets/js/sweetalert.js"></script>

<!-- Custom Js File -->
<script src="assets/js/custom.js"></script>

<!-- ALERTIFY JS -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
  <?php
  if (isset($_SESSION['message'])) { ?>
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('<?= $_SESSION['message']; ?>');
  <?php
    unset($_SESSION['message']);
  }
  ?>
</script>

</body>

</html>