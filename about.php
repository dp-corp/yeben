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
<title>About Us - <?php echo $setting['site_name']; ?></title>
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

<!-- Add a viewport meta tag for responsive design -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Update CSS links to include a mobile-friendly stylesheet if necessary -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet"> <!-- Ensure this file contains mobile styles -->

<!-- Ensure images are responsive -->
<div class="image mb-30"><img src="assets/images/resource/image-34.jpg" alt="" class="img-fluid"></div>
<!-- Add class "img-fluid" to images to make them responsive -->

<!-- Ensure buttons and links are easily clickable on mobile -->
<!-- <a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Book Our Class </span></a> -->
<!-- Ensure buttons have sufficient padding and size for touch targets -->

<!-- Ensure text is legible on smaller screens -->
<style>
    body {
        font-size: 16px; /* Adjust base font size for better readability */
    }
    @media (max-width: 768px) {
        .sec-title h2 {
            font-size: 24px; /* Adjust heading sizes for smaller screens */
        }
    }
</style>

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
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Book Our Class </span></a></div>
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
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/images/about.jpg);">
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
                        <h1>About Company</h1>
                    </div>
                   <!--<ul class="bread-crumb style-two">
                        <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="history.php">Our History <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.php">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="global-networks.php">Global Network <i class="flaticon-up-arrow"></i></a></li>
                    </ul> -->
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">       
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            <div class="sub-title">About the Company</div>
                            <h2>YeBen Endowment Fund has been operating in Addis Ababa for<br> over 20 years.</h2>
                        </div>
                        <div class="experience-year">
                            <div class="icon"><i class="flaticon-package-1"></i></div>
                            <div class="content">
                                <h3>20 <span>+ Years</span></h3>
                                <h5>Experience In Logistics</h5>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30"><img src="assets/images/resource/image-34.jpg" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>YeBen Endowment Fund aims at supporting students at university level, who are talented. We offer supports in many ways but mainly in three catagories.</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                <p>We provide financial aid to students who have economically unstable backgrounds. We wish to empower the students to achieve academically without experiencing financial constraints. YeBen Endowment Fund has been providing annual life changing trainings to 2nd year AAU students with the objective of equipping them to see beyond the acadmics and into the proffessionel and personal life. The second service is the merit award we provide for students who compete and emerge victorious in innvotions that entail problem solving.</p>
                                <!-- <p>Statstics <br>
Life Transforming Trainings<br>
        1. 8 total trainings, 540 stydents enrolled, 
        Financial support<br>
        2. 2/3 women.<br>
        3. 20 students per year intake,<br>
        4. 10 of the students are sponsored by YeBen the rest are by donors.<br>
        5. In the last 7 year, woth one year interruption due to covid-19.<br>
        6. YeBen students are totally 128, 85 female and 43 male.<br>
        7. At the end of 2022/23 school year, 49 students have graduated<br>
        8. Currently there are YeBen supported students
     YeBen Excellence Award.<br>
        9. graduating awardees<br> -->


<!-- We are home grown Endowment Fund, established in the memory of Dr. Benyam Assefa. <br>

Our objective <br>
# Equipping students with essential skills that they can not get in their classroom <br>
# Ensuring that students from underprivileged backgrounds have access to higher education by providing financial assistance <br>
# Assist college students through providing training and financial aid.<br> -->
</p>
                            </div>
                            <div class="author-info wow fadeInUp" data-wow-duration="1500ms">
                                <!--<div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox"><i class="flaticon-play-arrow"></i></a>
                                </div>-->
                                <div class="signature"><img src="assets/images/sign.PNG" alt=""></div>
                                <div>
                                    <div class="author-title">Ms. Misrak Elias</div>
                                    <div class="designation">CEO & Founder of YeBen Endowment</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">
                                <!--Column-->
                                <div class="column counter-column col-md-4">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <h5>Financial Support Beneficiaries<br>(2008 - 2016 E.C)</h5>
                                                <h5>Total Students Supported: 161 <br>(53 Female, 108 Male)</h5>
                                                <h5>Average Students per Year: <span class="count-text" data-speed="3000" data-stop="22">0</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-4">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <h4>Graduates <br>(2010 - 2016 E.C)</h4>
                                                <h5>Total Graduates: <span class="count-text" data-speed="3000" data-stop="66">0</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-4">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <h4>Life Skills Training<br> (2008 - 2016 E.C)</h4>
                                                <h5>Total Trainees: <span class="count-text" data-speed="3000" data-stop="477">0</span></h5>
                                            </div>
                                            <div class="count-outer count-box">
                                                <h5><span class="count-text" data-speed="3000" data-stop="285">0</span> Female</h5>
                                            </div>
                                            <div class="count-outer count-box">
                                                <h5><span class="count-text" data-speed="3000" data-stop="192">0</span> Male</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <!-- <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="1.4">0</span><span>k</span>
                                            </div>
                                            <h5>Road</h5>
                                            <div class="icon"><span class="flaticon-box-1"></span></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Whychooseus section four -->
   <!-- <section class="whychooseus-section-four" style="background-image: url(assets/images/background/bg-23.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2> Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
                <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Trasparent Pricing</h4>
                     
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>On - Time Delivery</h4>
                        
                        <div class="count">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Real Time Tracking</h4>
                     
                        <div class="count">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>24/7 Online Support</h4>
                       
                        <div class="count">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- serivice from here -->
    <section class="services-section style-two ">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">YeBen</div>
                    <h2>Who We Are</h2>
                </div>       
            </div>
        

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    The Yeben Endowment Fund is a homegrown initiative based in Addis Ababa, established in memory of Dr. Benyam Assefa.
                    We are dedicated to enhancing the educational and life opportunities of university students, particularly focusing on economically 
                    disadvantaged female students. The fund was created with a vision to empower young people with the tools and resources they need to succeed 
                    academically and in their personal and professional lives.                
                </div>
            </div>
        </div> 
    </section>

    <!-- serivice from here -->
    <section class="services-section style-two ">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">YeBen</div>
                    <h2>What We Do</h2>
                </div>       
            </div>
        

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 ">                                    
                    <b>Financial Support for Female Students:</b> We provide scholarships and financial assistance to economically disadvantaged female students at Addis Ababa University to ensure they can continue their education without financial constraints.<br>
                    <b>Leadership and Life Skills Training:</b> Every year, we organize leadership and life skills training sessions at Addis Ababa University, equipping students with the essential skills needed to excel in their personal and professional lives.<br>
                    <b>Recognizing Innovation:</b> We encourage students to develop and present innovative solutions that can address societal challenges. Through our recognition programs, we honor students who demonstrate creativity, initiative, and the potential to create positive change.<br>
                    <b>Yeben Talk:</b> Ben Talks isn't just a lecture series—it's a movement promoting learning, curiosity, and inspiration. Expert speakers provide insights to help students and young professionals thrive academically and professionally, empowering attendees to shape their futures.<br>
                    <b>Zarie:</b> Empowering the Youth Zarie is our new initiative aimed at uplifting the next generation. Through programs, events, and opportunities, it equips young people with tools to inspire change and drive innovation, creating a lasting impact.<br>
                </div>
            </div>
        </div> 
    </section>

    <!-- serivice from here -->
    <!-- <section class="services-section style-two ">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">YeBen</div>
                    <h2>What We Do</h2>
                </div>       
            </div>
        

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 ">
                    <b>Financial Support for Female Students:</b> We provide scholarships and financial assistance to economically disadvantaged female students at Addis Ababa University to ensure they can continue their education without financial constraints.<br>
                    <b>Leadership and Life Skills Training:</b> Every year, we organize leadership and life skills training sessions at Addis Ababa University, equipping students with the essential skills needed to excel in their personal and professional lives.<br>
                    <b>Recognizing Innovation:</b> We encourage students to develop and present innovative solutions that can address societal challenges. Through our recognition programs, we honor students who demonstrate creativity, initiative, and the potential to create positive change.<br>
                    <b>Yeben Talk:</b> Ben Talks isn't just a lecture series—it's a movement promoting learning, curiosity, and inspiration. Expert speakers provide insights to help students and young professionals thrive academically and professionally, empowering attendees to shape their futures.<br>
                    <b>Zarie:</b> Empowering the Youth Zarie is our new initiative aimed at uplifting the next generation. Through programs, events, and opportunities, it equips young people with tools to inspire change and drive innovation, creating a lasting impact.<br>
                </div>
            </div>
        </div> 
    </section> -->

        <!-- Statement 1 -->
        <section class="statement-section pt-0">
        <div class="auto-container ">
            <div class="">
                <!-- <div class="col-lg-6">
                    <div class="image"><img src="assets/images/resource/image-35.jpg" alt=""></div>
                </div> -->
                <div class="col-lg-6 ">
                    <div class="content ">  
                        <div class="badge "><img src="assets/images/resource/badge-3.png" alt=""></div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp " data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one-statement1" role="tabpanel" aria-labelledby="tab-one-area-statement1">
                                <div class="text-block ">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">YeBen</div>
                                        <h2 class="">Statstics</h2>
                                    </div>
                                    <div class="text"><ul>
                                        <!-- <li>Life Transforming Trainings</li> -->
                                        <li>
                                            Life Transforming Trainings<br><br>
                                            1. 8 total trainings, 540 stydents enrolled, Financial support<br>
                                            2. 2/3 women.<br>
                                            3. 20 students per year intake,<br>
                                            4. 10 of the students are sponsored by YeBen the rest are by donors.<br>
                                            5. In the last 7 year, woth one year interruption due to covid-19.<br>
                                            6. YeBen students are totally 128, 85 female and 43 male.<br>
                                            7. At the end of 2022/23 school year, 49 students have graduated<br>
                                            8. Currently there are YeBen supported students YeBen Excellence Award.<br>
                                            9. graduating awardees<br>
                                        </li>
                                        <!-- <li>To contribute to the growth of society as we grow the company's business.</li> -->
                                    </ul></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two-statement1" role="tabpanel" aria-labelledby="tab-two-area-statement1">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">YeBen</div>
                                        <h2>Our Objective</h2>
                                    </div>
                                    <div class="text">
                                        <ul>
                                            <li>We are home grown Endowment Fund, established in the memory of Dr. Benyam Assefa. </li>
                                            <li>
                                                # Equipping students with essential skills that they can not get in their classroom.<br>
                                                # Ensuring that students from underprivileged backgrounds have access to higher education by providing financial assistance.<br>
                                                # Assist college students through providing training and financial aid.<br>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three-statement1" role="tabpanel" aria-labelledby="tab-three-area-statement1">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">YeBen</div>
                                        <h2>Our values</h2>
                                    </div>
                                    <div class="text">
                                        Equity <br>
                                        Innovation <br>
                                        Collaboration <br>
                                        Empowerment <br> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area-statement1" data-toggle="tab" href="#tab-one-statement1" role="tab" aria-controls="tab-one-statement1" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Statstics</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area-statement1" data-toggle="tab" href="#tab-two-statement1" role="tab" aria-controls="tab-two-statement1" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Our Objective</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area-statement1" data-toggle="tab" href="#tab-three-statement1" role="tab" aria-controls="tab-three-statement1" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Our values</h4>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Value</h4>
                                </a>
                            </li> -->
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Statement 2-->
    <section class="statement-section pt-0">
        <div class="auto-container">
            <div class="">
                <!-- <div class="col-lg-6">
                    <div class="image"><img src="assets/images/resource/image-35.jpg" alt=""></div>
                </div> -->
                <div class="col-lg-6">
                    <div class="content">  
                        <div class="badge"><img src="assets/images/resource/badge-3.png" alt=""></div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one-statement2" role="tabpanel" aria-labelledby="tab-one-area-statement2">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">YeBen</div>
                                        <h2>Vision</h2>
                                    </div>
                                    <div class="text"><ul>
                                        <!-- <li>Life Transforming Trainings</li> -->
                                        <li>
                                        To empower every student by eliminating financial barriers, unlocking their full and limitless potential through transformative, world-class education, and driving innovative solutions that not only shape a more inclusive, equitable future but also inspire a generation of leaders who will redefine the possibilities for generations to come.
                                        </li>
                                        <!-- <li>To contribute to the growth of society as we grow the company's business.</li> -->
                                    </ul></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two-statement2" role="tabpanel" aria-labelledby="tab-two-area-statement2">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">YeBen</div>
                                        <h2>Mission</h2>
                                    </div>
                                    <div class="text">
                                        <ul>
                                            <li>Our mission is to support students at Addis Ababa University by offering financial aid, providing leadership training, and recognizing innovation. We aim to bridge the gap for students who face financial barriers to higher education while fostering the development of life skills and leadership abilities that are essential for shaping future leaders. Our goal is to empower students not only to succeed academically but also to make a lasting impact in their communities.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three-statement2" role="tabpanel" aria-labelledby="tab-three-area-statement2">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">YeBen</div>
                                        <h2>Goals</h2>
                                    </div>
                                    <div class="text">
                                    Financial Support <br>                          
                                    Transformative Training <br>                          
                                    Innovation Recognition <br>
                                    Partnership Growth <br>                                   
                                    Sustainable Impact <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area-statement2" data-toggle="tab" href="#tab-one-statement2" role="tab" aria-controls="tab-one-statement2" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area-statement2" data-toggle="tab" href="#tab-two-statement2" role="tab" aria-controls="tab-two-statement2" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area-statement2" data-toggle="tab" href="#tab-three-statement2" role="tab" aria-controls="tab-three-statement2" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Goals</h4>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Value</h4>
                                </a>
                            </li> -->
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   
   


    <!--Main Footer-->
   <?php include "footer.php"; ?>
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













