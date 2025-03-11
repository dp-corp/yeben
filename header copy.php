<?php
    include "admin/conn.php";

    // Fetch settings
    $settings = mysqli_query($con, "SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!-- Main Header -->
<header class="main-header header-style-one">

    <!-- Header Upper -->
    <div class="header-upper">
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
    </div>

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="header-upper">
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
                            <nav class="main-menu navbar-expand-md navbar-light"></nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        </nav>
    </div>

</header>

<style>
    /* Global Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body, html {
        height: 100%;
        background: #fff; /* Set a default background color to eliminate the white line */
    }

    /* Main Header Reset */
    .main-header {
        margin: 0;
        padding: 0;
        background: none; /* Ensures no background is causing a white line */
    }

    .header-upper {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    /* Specific Elements */
    .logo img {
        max-width: 100%;      /* Makes the image scale to fit within the container */
        height: auto;         /* Maintains the aspect ratio */
        display: block;       /* Removes any space below the image */
        object-fit: contain;  /* Ensures the image is scaled and maintains aspect ratio */
    }

    .logo {
        width: 200px;        /* Set the width of the logo container */
        height: auto;        /* Adjust height based on image aspect ratio */
        overflow: hidden;    /* In case the image overflows */
    }

    /* Ensuring the mobile menu doesn't add space */
    .mobile-menu {
        margin-top: 0 !important;
    }

    /* Prevents any unwanted white line or padding from elements */
    .sticky-header, .header-upper, .auto-container, .inner-container, .logo-box {
        margin: 0;
        padding: 0;
        border: none;
    }

    /* Removes potential border around the page */
    header {
        border: none !important;
    }

    /* To fix any overflow or extra padding */
    .header-upper, .sticky-header {
        box-sizing: border-box;
    }
</style>