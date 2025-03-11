<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us - <?php echo $setting['site_name']; ?></title>
    <meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/logo/yebenlogo.png" type="image/x-icon">
    <link rel="icon" href="assets/images/logo/yebenlogo.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <!-- <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script> -->

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
    
        <!-- Main Header -->
        <?php  include "header.php"; ?>

        <!-- End Main Header -->

        <!-- Hidden Sidebar -->
        <section class="hidden-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="content-wrapper">
                    <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                    <div class="text-widget sidebar-widget">
                        <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                        <div class="text">YeBen is a fund for the helpless</div>
                    </div>
                    <!-- PDF Widget -->
                    <div class="pdf-widget sidebar-widget">
                        <div class="row">
                            <div class="col-sm-6 column">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                    <h4>Sender <br> Instructions</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 column">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                    <h4>Sender <br> Instructions</h4>
                                </div>
                            </div>
                        </div>                            
                    </div>
                    
                    <!-- Contact Widget -->
                    <div class="contact-widget">
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-cursor"></span></div>
                            <div class="text"><?php echo $setting['address']; ?></div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-calling"></span></div>
                            <div class="text"><strong>Phone</strong><a href="mail:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-mail"></span></div>
                            <div class="text"><strong>Email</strong><a style="" href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                        </div>
                    </div>
                    <!-- Link Btn -->
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Class</span></a></div>
                </div>
            </div>
        </section>
        
        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="http://yebenfund.org">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <section class="map-section">
            <div class="contact-map">
                <?php echo $setting['map'];  ?>
            </div>
        </section> 
        

        <!-- Contact Info section two -->
    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="nav-tabs-wrapper">
                <div class="nav nav-tabs tab-btn-style-two">
                    <!-- <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                        <ul class="item">
                            <li><a class="active" data-toggle="tab" href="#tab-one">
                                <h4>Hoxton - HO</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-two">
                                <h4>Melbourne</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-three">
                                <h4>Houston</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a class="active" data-toggle="tab" href="#tab-four">
                                <h4>Hoxton - HO</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-five">
                                <h4>Melbourne</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-six">
                                <h4>Houston</h4>
                            </a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane fadeInUp animated" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Ethiopia, Addis Ababa, 4Kilo</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>                                        
                                                    <!-- <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">+251987654321</a></div> -->
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <!-- <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@Yeben.com</a></div> -->
                                                    <div class="text"><strong>Email</strong><a style="" href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your New life</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated active" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6 outer-box">
                            <div class="">
                                <h4><span class="flaticon-cursor"></span>Ethiopia, Addis Ababa, 4Kilo</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">+251987654321</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@Yeben.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08:00 am to 9:00pm</div>
                                                <div class="text"><strong>Saturday & Sunday</strong>Closed</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                            <div class="sub-title">YeBen</div>
                                    <h2>Join Us in Making a Difference</h2>
                                </div>
                                <div class="text">By contributing to the Yeben Endowment Fund, you become a part of the movement to uplift and empower the next generation of leaders. Your donations support critical programs such as financial aid, leadership training, and innovation recognition for students in need.
                                </div>
                            <div class="link">
                                <!-- <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a> -->
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>

        <!-- Contact form section -->
        <section class="contact-form-section" id="cform">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Drop a line</div>
                    <h2>We’re Always Here for You</h2>
                    <div class="text">Please do not hesitate to contact us if you require further information about our logisitc service.</div>
                </div>
                <!--Contact Form-->
                <div class="contact-form">
                    <form method="post" action="send-mail.php" id="contact-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" value="" placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="phone" value="" placeholder="Phone Number" required>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="text" name="email" value="" placeholder="Your Email" required>
                            </div>                        
                                                
                                                
                            <div class="form-group col-md-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>                        
                            <div class="form-group text-center col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..." name="submit"><span><i class="flaticon-up-arrow"></i>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Contact Form-->
            </div>
        </section>

    
        <!--Main Footer-->
    <?php include "footer.php"; ?>

    
        
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/lazyload.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <script src="assets/js/script.js"></script>


    </body>

</html>
