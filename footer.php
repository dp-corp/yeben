<?php
    include "admin/conn.php";

    // Fetch settings
    $settings = mysqli_query($con, "SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!-- Newsletter -->
<section class="newsletter-section style-two" style="background-color: #4C4B55;">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
            </div>
            <div class="col-lg-7">
                <div class="newsletter-form">
                    <form action="subscribe.php" method="post">
                        <div class="form-group">
                            <i class="far fa-envelope-open"></i>
                            <input type="email" placeholder="Enter Your Email Address..." name="email">
                            <button type="submit" class="theme-btn btn-style-one">
                                <span><i class="flaticon-up-arrow" name="submit"></i>Subscribe</span>
                            </button>
                            <label class="subscription-label" for="subscription-email"></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>        
</section>

<!-- Main Footer -->
<footer class="main-footer footer-color" style="background-color: #4C4B55;">
    <div class="upper-box">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget contact-widget style-two">
                        <h4>Do You Have Any Question? Please <br> Contact Our Team</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wrapper-box">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-calling"></span></div>
                                        <div class="text">
                                            <strong>Phone</strong>
                                            <a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a>
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-mail"></span></div>
                                        <div class="text">
                                            <strong>Email</strong>
                                            <a href="mailto:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a>
                                        </div>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a target="blank" href="<?php echo $setting['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="blank" href="<?php echo $setting['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a target="blank" href="<?php echo $setting['linkedin']; ?>"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a target="blank" href="<?php echo $setting['youtube']; ?>"><i class="fab fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                                <hr style="border: none; height: 100px; background-color: transparent;">
                                <!-- <hr style="border: none; height: 1px; background-color: transparent;"> -->
                                <!-- <hr style="border: none; height: 1px; background-color: transparent;"> -->
                            </div>
                            <div class="col-md-6">  
                                <div class="icon-box">
                                    <!-- <div class="icon"><span class="flaticon-mail">Working days</span></div> -->
                                    <div class="text"><span>Working days</span></div>
                                    <div>
                                        <div class="text"><strong>Monday - Friday</strong>08.00 am to 9.00pm</div>
                                        <!-- <div class="text"><strong></strong>10.00 am to 4.00pm</div> -->
                                        <div class="text"><strong>Saturday & Sunday - Closed</strong></div>
                                        <div class="text"><span>Location: <?php echo $setting['address']; ?></strong></div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget links-widget">
                                <h4 class="widget_title">Useful Links</h4>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="about.php">About Company</a></li>
                                        <li><a href="contact.php">Get In Touch</a></li>
                                        <li><a href="service.php">Our Services</a></li>
                                        <li><a href="blog.php">Blogs & News</a></li>
                                        <li><a href="privacy.php">Privacy Policies</a></li>
                                        <li><a href="terms.php">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>               
</footer>
<!-- End Main Footer -->
 
 <style>
        hr {
            border: none;
            height: 2px;
            background-color: #ccc;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
    </style>

<hr>
<div class="footer-bottom footer-color" style="background-color: #4C4B55;">
    <div class="auto-container">
        <div class="row m-0 align-items-center justify-content-between">
            <div class="copyright-text">&copy; <script>document.write(new Date().getFullYear());</script> <a target="blank" href=""> YeBen</a></div>
            <ul class="menu">
                <a href="privacy.php"> Privacy Policies </a>
                <a href="terms.php">|  Terms & Conditions </a>
                <a href="contact.php">|  Contact Us </a>
            </ul>                
        </div>            
    </div>
</div>
<!-- End pagewrapper -->