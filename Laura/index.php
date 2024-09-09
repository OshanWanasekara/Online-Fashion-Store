<!DOCTYPE html>
<html lang="en">

<head>
    <?php
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

    <div class="sliderbox">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="assets/images/slide-01.jpg" style="width:100%  ">
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="assets/images/slide-02.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="cloth gallary">
                <div class="content">
                    <img src="">
                </div>
            </div>

        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

   


    <div class="bot-menue">

        <!-- box-1-start -->

        <div class="bot-menu-box-1">


            <div class="item-box-overlay">



                <center><button class="item-view-button">Mens</button></center>


            </div>

        </div>
        <!-- box-1-end -->

        <!-- box-2-start -->
        <div class="bot-menu-box-2">

            <div class="item-box-overlay">



                <center><button class="cat-view-button">Women</button></center>


            </div>

        </div>

        <!-- box-2-end -->


        <!-- box-3-start -->
        <div class="bot-menu-box-3">


            <div class="item-box-overlay">



                <center><button class="cat-view-button">Kids</button></center>


            </div>

        </div>

        <!-- box-3-end -->

    </div>

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

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

</body>

</html>