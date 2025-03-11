<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!-- Main Header -->
<header class="main-header header-style-one">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <ul class="social-icon">
                        <li><a target="blank" href="<?php echo $setting['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="blank" href="<?php echo $setting['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="blank" href="<?php echo $setting['linkedin']; ?>"><i class="fab fa-linkedin"></i></a></li>
                        <li><a target="blank" href="<?php echo $setting['youtube']; ?>"><i class="fab fa-telegram"></i></a></li>
                    </ul>                        
                </div>
                <div class="right-column">
                    <div class="auto-container">
                        <font color="white">Location : <?php echo $setting['address']; ?></font>
                    </div>
                    <div class="phone-number"><i class="flaticon-calling"></i><a href="tel:<?php echo $setting['phone']; ?>"></a><?php echo $setting['phone']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper with Transparent Background -->
    <div class="header-upper" style="background: rgba(0, 0, 0, 0.3);">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Logo -->
                <div class="logo-box">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logo/yebenlogo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="right-column">
                    <div class="nav-outer">
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                    <li class="dropdown"><a href="index.php">Home</a></li>
                                    <li class="dropdown"><a href="service.php">Services</a></li>
                                    <li class="dropdown"><a href="blog.php">News</a></li>
                                    <li class="dropdown"><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li class="dropdown"><a href="faq.php">FAQ</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>                
                </div>                        
            </div>
        </div>
    </div><!-- End Header Upper -->

    <!-- Sticky Header with Transparent Background -->
    <div class="sticky-header" style="background: rgba(0, 0, 0, 0.3);">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/yebenlogo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div><!-- End Sticky Header -->

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-remove"></span></div>
        
        <nav class="menu-box">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo/yebenlogo.png" alt="Logo">
                </a>
            </div>
            <div class="menu-outer"></div>
        </nav>
    </div><!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>

</header><!-- End Main Header -->

<!-- Add CSS for the Transparent Navigation Bar -->
<style>
    .main-header {
        position: relative;
    }

    .header-top {
        background: #000;
        color: white;
    }

    .header-upper, .sticky-header {
        background: rgba(0, 0, 0, 0.3) !important; /* Transparent black background */
        box-shadow: none; /* Removes any shadow effect */
    }

    .header-upper .logo, .sticky-header .logo {
        max-width: 200px;
        height: auto;
    }

    .main-menu {
        padding: 0;
        margin: 0;
    }

    .navigation li a {
        color: #fff; /* White text color for the navigation links */
    }

    .navigation li a:hover {
        color: #ccc; /* Change color on hover */
    }

    /* For mobile nav toggler */
    .mobile-nav-toggler img {
        width: 30px;
    }
</style>
