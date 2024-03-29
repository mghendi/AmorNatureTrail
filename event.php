<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Amor Nature Trail - Events</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="event.html">Events</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="events_details.html">Events Details</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <!-- Button -->
                                            <li class="button-header">
                                                <a href="#" class="header-btn"> <i class="fas fa-phone-alt"></i> +254 789 221 033</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area">
            <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h2>All Events</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- Hero Area End -->
        <!--? services area start -->
        <section class="services-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-45 ">
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat mb-30">
                            <div class="cat-img">
                                <img src="assets/img/gallery/services1.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <div class="pricing d-flex justify-content-between">
                                    <h3><a href="events_details.html"> Enashpai </a></h3>
                                    <span class="price">KES 12000</span>
                                </div>
                                <p><a href="#">12 Dec - 18 Dec</a>5 Days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat mb-30">
                            <div class="cat-img">
                                <img src="assets/img/gallery/services2.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <div class="pricing d-flex justify-content-between">
                                    <h3> <a href="events_details.html"> Naivasha </a></h3>
                                    <span class="price">KES 30000</span>
                                </div>
                                <p><a href="#">23 Nov - 25 Nov</a>2 Days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat mb-30">
                            <div class="cat-img">
                                <img src="assets/img/gallery/services3.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <div class="pricing d-flex justify-content-between">
                                    <h3> <a href="events_details.html"> Maasai Mara </a></h3>
                                    <span class="price">KES 45000</span>
                                </div>
                                <p><a href="#">7 Jan - 10 Jan</a>3 Days</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Services End -->

        <!--Services Table Start -->
        <section class="services-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <!-- Section Title -->
                        <div class="section-tittle text-center mb-45 ">
                            <h2>Events Details</h2>
                            <span>To Fill.</span>
                            <table>
                                <tr>
                                    <th>Lodge Camp</th>
                                    <th>Price</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Mealplan</th>
                                </tr>
                                <?php 
                                $conn = mysqli_connect("localhost", "root", "", "amor");
                                if ($conn->connect_error) {
                                    die ("Connection failed:".$conn-> connect_error);
                                }
                                $sql = "SELECT lodge_camp, price, start_date, end_date, mealplan from rates";
                                $result = $conn -> query($sql);

                                if ($result -> num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()){
                                            echo "<tr><td>".$row["lodge_camp"]."</td><td>".$row["price"]."</td><td>".$row["start_date"]."</td><td>".$row["end_date"]."</td><td>".$row["mealplan"]."</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                    else{
                                        echo "0 results"; 
                                }
                                $conn-> close();
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">


                    
                </div>
        </div>
    </section>
    <!-- Services Table End -->


    <!--? video_start -->
    <div class="bottom-padding">
        <div class="container">
            <div class="video-area section-img-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.jpg">
                <div class="video-wrap">
                    <div class="video-icon">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=up68UAfH0d0">
                            <img src="assets/img/icon/play-butto.svg" alt="">
                        </a>
                    </div>
                    <h3>Watch our last tour</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->    
    <!--? instagram-social start -->
    <div class="instagram-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="instagram-active owl-carousel">
                        <div class="single-instagram">
                            <img src="assets/img/gallery/instra1.jpg" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="assets/img/gallery/instra2.jpg" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="assets/img/gallery/instra3.jpg" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="assets/img/gallery/instra4.jpg" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="assets/img/gallery/instra5.jpg" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="assets/img/gallery/instra4.jpg" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-social End -->
</main>
<footer>
    <div class="footer-wrapper">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning laboris nisi ufsit aliquip.</p>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Navigation</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-8 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="#">Book Trip</a></li>
                                    <li><a href="#">Organize Event</a></li>
                                    <li><a href="#">Request for Tour Guide</a></li>
                                    <li><a href="#">Request for Transport</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle mb-20">
                                <h4>Contact Us</h4>
                                <p>Nextgen Mall, Mombasa Road</p>
                                <p>amornature.trail@gmail.com</p>
                            </div>
                            <ul class="mb-20">
                                <li class="number"><a href="#">+254 789 221 033</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://" target="_blank" rel="nofollow noopener">Amor Nature Trail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<!-- wow, Mobile Menu -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- counter , waypoint ,Nice-select -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Plugins, main-Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>