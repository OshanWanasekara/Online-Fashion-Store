<nav id="nav">
            <div class="container">
                <!-- Logo -->
                <a href="index.php" class="">
                    <img class="navbar-brand" src="assets/images/logo2.png" alt="logo">
                </a>
                <!-- Navigation -->
                <ul class="navbar" id="navbar">
                    <li class="navbar-item">
                        <a class="navbar-link"href="index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="shop.php">Shop</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="blog.php">New Arrivals</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="services.php">Men</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="about.php">Women</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="contact.php">Product</a>
                    </li>
                </ul>
                <ul class="sign-btn">
                    <?php
                        if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
                            $email = $_SESSION['email'];
                            // Display navbar for authenticated users
                            ?>
                                <div class="login-menu subnav">
                                    <span class='navbar-link'><?php echo $email; ?></span>
                                    <ul class="subnav-content">
                                        <li><a href="profile.php"><i class="ri-user-line"></i> Profile Setting</a></li>
                                        <li><a href="my-booking.php"><i class="ri-book-line"></i> My Order</a></li>
                                        <li class="logout"><a href="logout.php"><i class="ri-login-box-line"></i> Log Out</a></li>
                                    </ul>
                                </div> 
                            <?php
                        } else {
                            echo "<li class='navbar-item'>
                                    <a class='navbar-link' href='signin.php'><i class='ri-user-line'></i></a>
                                </li>
                                <li class='navbar-item'>
                                    <a class='navbar-link' href='signup.php'><i class='ri-shopping-cart-2-line'></i></a>
                                </li>";
                        }
                    ?>
                    
                </ul>
            </div>
        </nav> 