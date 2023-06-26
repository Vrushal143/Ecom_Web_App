<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-bag-shopping"></i> PHP Ecom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categories.php"><i class="fa-solid fa-truck-fast"></i> Collections</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                </li>
                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>  <?= $_SESSION['auth_user']['name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="my-orders.php">My Orders </a></li>
                          
                            <li><a class="dropdown-item" href="logout.php"> Logout <i class="fa-solid fa-right-from-bracket">  </i></a></li>
                        </ul>
                    </li>

                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>

                    <?php
                }
            ?>


            </ul>
        </div>
    </div>
</nav>