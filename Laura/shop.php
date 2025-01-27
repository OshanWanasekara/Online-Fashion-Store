<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include 'includes/config.php'; // Database Connection
        include 'includes/header.php';
        session_start(); // Start the session
    ?>
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php 
            include 'includes/menu.php'; 
        ?>
    </header>

    <!-- Shop Section -->
    <section class="shop">
        <div class="container">
            <h1>Bestseller</h1>
            <h3>Coloring book wayfarers food truck air plant affogato gentrify</h3>

            <!-- Product Cards -->
            <div class="row">

            <?php 
                $sql = "SELECT * FROM product";
                $result = mysqli_query($conn, $sql);
      
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {  ?>
                         <div class="product-card">
                            <img src="assets/images/uploads/<?php echo $row['product_image']; ?>" alt="">
                                <h4><?php echo $row['product_name']; ?></h4>
                                <div>
                                    <span>Rs <?php echo $row['product_price']; ?></span>
                                    <form method="post" action="includes/add_to_cart.php">
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                        <input type="submit" class="btn" name="add_to_cart" value="Add to Cart">
                                    </form>
                                </div>
                        </div>
                    <?php }} 
            ?>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="grid">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">Return and Refund</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="assets/images/logo 2.png" alt="logo" class="footer-logo-img">
                    <div class="contact">
                        <a href="#"><i class="ri-mail-line"></i> email@mail.com</a>
                        <a href="#"><i class="ri-phone-line"></i> +9422566445</a>
                    </div>
                    <div class="social-icon">
                        <a href="#" title="facebook"> 
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" title="instagram"> 
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="#" title="twitter"> 
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#" title="linkedin"> 
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>