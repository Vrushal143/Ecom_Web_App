<?php
include('../middleware/adminMiddleware.php');
include('includes/heder.php');

?>
<!-------------Index Page Start --------------------->
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h1 class="text-center text-dark">Hye, <span class="underlined underline-clip ">Admin!</span>
        <style>
          h1 {
            --s: 0.1em;
            --c: #2c4bff;

            color: #0000;
            padding-bottom: var(--s);
            background:
              linear-gradient(90deg, var(--c) 50%, #000 0) calc(100% - var(--_p, 0%))/200% 100%,
              linear-gradient(var(--c) 0 0) 0% 100%/var(--_p, 0%) var(--s) no-repeat;
            -webkit-background-clip: text, padding-box;
            background-clip: text, padding-box;
            transition: 0.5s;
          }

          h1:hover {
            --_p: 100%
          }

          body {
            height: 100vh;
            margin: 0;
            display: grid;
            place-content: center;
          }

          h1 {
            font-family: system-ui, sans-serif;
            font-size: 5rem;
            cursor: pointer;
          }
        </style>
    </div>
  </div>
</div>

<!-------------Index Page End --------------------->
<?php
include('includes/footer.php');
?>