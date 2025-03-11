<?php

    error_reporting(0);
    include "admin/conn.php";

  
    
    //fetch services
    $services = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC");
    
     //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Services - <?php echo $setting['site_name']; ?></title>
    <meta name="description"
        content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/logo/yebenlogo.png" type="image/x-icon">
    <link rel="icon" href="assets/images/logo/yebenlogo.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <!-- <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons'
        async='async'></script> -->

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- End Main Header -->
        <?php include "header.php"; ?>
        <!-- Hidden Sidebar -->

        <section class="hidden-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="content-wrapper">
                    <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                    <div class="text-widget sidebar-widget">
                        <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                        <div class="text">DON'T BE AFRAID<br>
                            TO START AND<br>
                            TAKE ACTION</div>
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

                    <!-- Link Btn -->
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span>
                        <i class="flaticon-up-arrow"></i>Book Our Class </span></a>
                    </div>
                </div>
            </div>
        </section>

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="http://st.ourhtmldemo.com/new/Yeben2/index.php">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/images/servicee.jpg);">
            <!--<div class="background-text">
                <div data-parallax='{"x": 100}'>
                    <div class="text-1">Yeben</div>
                    <div class="text-2">Yeben</div>
                </div>                
            </div> -->
            <div class="auto-container">
                <div class="content-box">
                    <div class="content-wrapper">
                        <div class="title">
                            <h1><br><br><font color = orange>Professional Services</font></h1>
                        </div>
                        <ul class="bread-crumb clearfix">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li>Services</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- serivice from here -->
        <section class="services-section style-two ">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Services - 1</div>
                    <h2>Financial Support for Students</h2>
                </div>       
            </div>
        </section>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    We are committed to ensuring that financially disadvantaged students, particularly young women, have access to quality education. 
                    Through our monthly financial support program, we help students cover their educational expenses and essential needs,
                    allowing them to focus on their studies and future aspirations. Each year, we welcome new students into the program, 
                    expanding our impact and creating more opportunities for success.

                        <!-- <p><b>we are one stop company to fulfill your sourcing of all your required products from China USA
                                India Canada & UAE.</b></p>
                        <p>We give complete A to Z solution starting from product sourcing shipping delivery at your
                            doorstep. We specialize in all kinds of export import items from USA CHINA INDIA CANADA UAE &
                            WORLDWIDE.</p> -->
                </div>
            </div>
        </div>       

        <!-- services php -->
        <section class="services-section style-two" style="background-color: #f9f9f9; padding: 40px;">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Services - 2</div>
                    <h2>Life Transformation Training</h2>
                </div>

                <div class="container pb-5">
                <div class="row">
                    <div class="col-md-12 text-center">

                    Education goes beyond academics. Our Life Transformation Training equips students with essential soft skills 
                    to navigate personal and professional life. This four-week program covers:
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-12.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Self-Discovery</h4>
                                    </div>            
                                </div>
                            </div>
                            <div class="lower-content">
                                    <br><br>                                       
                                    <div class="text">Understanding personal strengths, vision, and dreams.</div>
                                    <br><br>                                     
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-12-2.jpg);">
                                <div>
                                    <div class="content">
                                        <br><br>
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Self-Discovery</h4>
                                    </div>
                                    <br><br>
                                    <!-- <div class="text">Understanding personal strengths, vision, and dreams.</div>
                                    <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-13.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Motivation & Inspiration</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                    <br><br>                                        
                                    <div class="text">Developing a strong mindset, habit-building techniques, and goal-setting strategies.</div>
                                    <br><br>                                      
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-13-2.jpg);">
                                <div>
                                    <div class="content">
                                        <br><br> 
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Motivation & Inspiration</h4>
                                    </div>
                                    <br><br>                                       
                                                                            
                                    <!-- <div class="text">Developing a strong mindset, habit-building techniques, and goal-setting strategies.</div> -->
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-13.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Soft Skills Development</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                    <br><br>                                       
                                    <div class="text">Time management, financial literacy, and communication skills.</div>
                                    <br><br>                                        
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-13-2.jpg);">
                                <div>
                                    <div class="content">
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Soft Skills Development</h4>
                                    </div>
                                    <br>                                        
                                    <!-- <div class="text">Time management, financial literacy, and communication skills.</div> -->
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-13.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Health & Well-being</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                    <br><br>                                        
                                    <div class="text">Reproductive health, mental health, and self-care strategies.</div>
                                    <br><br>                                        
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-13-2.jpg);">
                                <div>
                                    <div class="content">
                                        <br><br>                                                                                                                           
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Health & Well-being</h4>
                                    </div>
                                    <br><br>                                                                                                                            
                                    <!-- <div class="text">Reproductive health, mental health, and self-care strategies.</div> -->
                                    <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>

           
        </section>

        <!-- services php -->
        <section class=" style-two">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Services - 3</div>
                    <h2>Supporting Innovation</h2>
                </div>

                <div class="container pb-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                    We celebrate and nurture creativity in science and technology by recognizing outstanding students
                    through awards, grants, and growth opportunities. Our innovation support includes:
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                        <div class="col-lg-12 service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <!-- <img src="assets/images/resource/image-12.jpg" alt=""> -->
                                    <div class="content">
                                        <div>
                                            <div class="icon"><span class="flaticon-airplane"></span></div>
                                            <h4>Cash prizes</h4>
                                        </div>            
                                    </div>
                                </div>
                                <div class="lower-content">
                                        <br><br>                                       
                                            <h4>Cash prizes</h4>
                                            <div class="text">for top-performing students.</div>
                                        <br><br>                                     
                                        <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                                <div class="overlay" style="background-image: url(assets/images/resource/image-12-2.jpg);">
                                    <div>
                                        <div class="content">
                                            <br><br>
                                            <div class="icon"><span class="flaticon-airplane"></span></div>
                                            <h4>Cash prizes</h4>
                                        </div>
                                        <br><br>
                                        <!-- <div class="text">for top-performing students.</div>
                                        <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>                    
                        <div class="col-lg-12 service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <!-- <img src="assets/images/resource/image-13.jpg" alt=""> -->
                                    <div class="content">
                                        <div>
                                            <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                            <h4>Networking and mentorship</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                        <br><br>                                       
                                        <div class="text">opportunities with industry professionals.</div>
                                        <br><br>                                        
                                        <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                                <div class="overlay" style="background-image: url(assets/images/resource/image-13-2.jpg);">
                                    <div>
                                        <div class="content">
                                            <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                            <h4>Networking and mentorship</h4>
                                        </div>
                                        <br>                                        
                                        <!-- <div class="text">Time management, financial literacy, and communication skills.</div> -->
                                        <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <!-- <img src="assets/images/resource/image-13.jpg" alt=""> -->
                                    <div class="content">
                                        <div>
                                            <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                            <h4>Resources and guidance</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                        <br><br>                                        
                                        <div class="text">for young innovators to turn their ideas into reality.</div>
                                        <br><br>                                        
                                        <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                </div>
                                <div class="overlay" style="background-image: url(assets/images/resource/image-13-2.jpg);">
                                    <div>
                                        <div class="content">
                                            <br><br>                                                                                                                           
                                            <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                            <h4>Resources and guidance</h4>
                                        </div>
                                        <br><br>                                                                                                                            
                                        <!-- <div class="text">Reproductive health, mental health, and self-care strategies.</div> -->
                                        <!-- <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
            <!-- services php ends -->

            <!-- serivice from here -->
        <section class="services-section style-two ">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Services - 4</div>
                    <h2>Yeben Talk</h2>
                </div>       
            </div>
        </section>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                More than just a lecture series, Ben Talks is a movement that fosters a culture of learning, curiosity, and inspiration. 
                Our expert speakers share insights, strategies, and personal experiences to help students and young professionals 
                grow academically and professionally. At Ben Talks, we create a space where knowledge meets opportunity—empowering 
                attendees to take charge of their future.
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <section class="services-section style-two">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Services - 5</div>
                    <h2>Zarie – Empowering the Youth</h2>
                </div>
                
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        Zarie is our latest initiative, designed to uplift and inspire the next generation. 
                        Through dynamic programs, events, and unique opportunities, Zarie provides young people with the 
                        tools and motivation to drive change. Join us in shaping a future full of possibilities—where innovation, 
                        inspiration, and community come together to make a lasting impact.
                        </div>
                    </div>
                </div>                
        </section>

        <section class="services-section style-two" style="background: linear-gradient(to right, #f9f9f9, #e0e0e0); padding: 40px;">

            <div class="cta-section-two sec-title text-center">
                <div class="wrapper-box" style="border: 1px solid #ddd; border-radius: 12px; padding: 30px; box-shadow: 0 6px 12px rgba(0,0,0,0.2); max-width: 800px; margin: 0 auto; transition: transform 0.3s; display: flex; flex-direction: column; align-items: center;">
                    <div class="icon" style="margin-bottom: 20px;">
                        <img src="assets/images/resource/image-29.jpg" alt="" style="max-width: 100%; height: auto; border-radius: 8px;">
                    </div>
                    <div class="text" style="margin: 20px 0; text-align: center;">
                        <h4 style="color: #333; font-weight: bold; font-size: 1.5em;">This interactive training fosters confidence, leadership, and resilience, preparing students for lifelong success.</h4>
                        <!-- <p>we assure you a super affordable price with world-class services.</p> -->
                    </div>
                    <div class="link" style="margin-top: 20px;">
                        <a href="contact.php" class="theme-btn btn-style-one" style="background-color: #007bff; color: white; padding: 12px 24px; border-radius: 5px; text-decoration: none; font-size: 1.1em; transition: background-color 0.3s, transform 0.3s;">
                            <span><i class="flaticon-up-arrow"></i> Enroll Now</span>
                        </a>
                    </div>
                </div>
            </div> 
        </section>

        


        <!--Main Footer-->
        <?php include "footer.php"; ?>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span>
        </div>

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

        <script>
            // Add hover effect to the wrapper box
            document.querySelector('.wrapper-box').addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });
            document.querySelector('.wrapper-box').addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        </script>

</body>


</html>