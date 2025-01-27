<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/config.php';
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

<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        td img {
            width: 80px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .cart-container {
            margin: 20px;
        }

        .cart-buttons {
            margin-top: 10px;
        }
    </style>
    </head>

<body>

    <!-- Cart Section -->
    <section class="cart">
        <div class="container">
            <div class="cart-container">
                <h2>Shopping Cart</h2>
                <?php
                // Check if the cart exists in the session
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    $cartItems = $_SESSION['cart'];

                    // Retrieve the product details from the database based on the cart items
                    $productIds = array_keys($cartItems);
                    $productIdsString = implode(',', $productIds);

                    $sql = "SELECT * FROM product WHERE product_id IN ($productIdsString)";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        ?>
                        <table>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $totalPrice = 0; // Variable to calculate the total price
                            while ($row = $result->fetch_assoc()) {
                                $productId = $row['product_id'];
                                $productName = $row['product_name'];
                                $productImg = $row['product_image'];
                                $productPrice = $row['product_price'];
                                $quantity = $cartItems[$productId];

                                $itemTotal = $productPrice * $quantity; // Calculate the total price for each item
                                $totalPrice += $itemTotal; // Add the item total to the total price
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $productName; ?>
                                    </td>
                                    <td>
                                        <?php echo "<img src='assets/images/uploads/$productImg'>" ?>
                                    </td>
                                    <td>
                                        <?php echo $quantity; ?>
                                    </td>
                                    <td>
                                        <?php echo $productPrice; ?>
                                    </td>
                                    <td>
                                        <form action="includes/delete_item.php" method="post"> <!-- Form to submit delete request -->
                                            <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                                            <button type="submit" class="btn" style="background: transparent; color:#12242c"><i class="ri-close-line"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            <!-- Total price row -->
                            <tr>
                                <td></td>
                                <td></td>
                                <th>Total Price:</th>
                                <th class="total-value"><?php echo $totalPrice; ?></th>
                            </tr>
                        </table>
                        <?php
                    } else {
                        echo "No items in the cart.";
                    }
                } else {
                    echo "Cart is empty.";
                }
                ?>

                <br>
                <div class="cart-buttons">
                    <a href="shop.php" class="btn">Continue Shopping</a>
                    <a href="checkout.php" class="btn">Checkout</a>
                </div>
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