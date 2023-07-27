<?php /* Template Name: Template Service 2 

             
               */ 
               get_header(); ?> 
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-two">
            <div class="mobile-responsive-nav">
                <div class="container-fluid">
                    <div class="mobile-responsive-menu">
                       <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/logo-1.png"); ?>" class="logo-one" alt="Logo">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/logo-3.png"); ?>" class="logo-two" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light ">
                       <a class="navbar-brand" href="index.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/logo-1.png"); ?>" class="logo-one" alt="Logo">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/logo-3.png"); ?>" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Home 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">
                                                Home One  
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">
                                                Home Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">
                                                About Us
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">
                                                Team
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">
                                                Testimonials
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="how-works.html" class="nav-link">
                                                How It Works
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">
                                                Pricing Plan
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">
                                                Gallery
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                User
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="login.html" class="nav-link">
                                                        Log In 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="register.html" class="nav-link">
                                                        Register
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="forgot-password.html" class="nav-link">
                                                        Forgot Password
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="terms-condition.html" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">
                                                404 Page
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">
                                                Coming Soon
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Project 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="project.html" class="nav-link">
                                                Project
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="project-details.html" class="nav-link">
                                                Project Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Services
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service-1.html" class="nav-link">
                                                Services Style One
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-2.html" class="nav-link active">
                                                Services Style Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link">
                                                Service Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                               <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">
                                                Blog Grid
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">
                                                Blog Left Sidebar 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-3.html" class="nav-link">
                                                Blog Right Sidebar 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="author.html" class="nav-link">
                                                Author
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="categories.html" class="nav-link">
                                                Categories
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tags.html" class="nav-link">
                                                Tags
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>

                            <div class="nav-sidebar">
                                <div class="navbar-language dropdown language-option"> 
                                    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-world"></i>
                                        <span class="lang-name"></span>  
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1"> 
                                        <a class="dropdown-item" href="#">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/uk.png"); ?>" alt="flag">
                                            English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/china.png"); ?>" alt="flag">
                                            &#31616;&#20307;&#20013;&#25991;
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/uae.png"); ?>" alt="flag">
                                            &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1617;&#1577;
                                        </a>
                                    </div>
                                </div>

                                <div class="nav-btn">
                                    <a href="contact.html" class="default-btn border-radius-5">Free Consultation</a>
                                </div>
                            </div>

                            <div class="mobile-nav-area">
                                <div class="mobile-btn">
                                    <a href="contact.html" class="default-btn border-radius-5">Free Consultation</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Inner Banner -->
        <div class="inner-banner inner-before2 inner-bg9">
            <div class="container">
                <div class="inner-title inner-title2 text-center">
                    <h3> Services Style Two </h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li> Services Style Two </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

         <!-- Services Area -->
         <div class="services-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title">Services</span>
                    <h2>We Provide Best virtual Assistant Service</h2>
                </div>
                <div class="tab services-tab pt-45">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="tabs">
                                <li>
                                    <a href="#">
                                        Content Writing
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Project Management
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Bookkeeping
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Social Media Marketing 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Data Entry 
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_content current active pt-45">
                                <div class="tabs_item current">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a href="service-details.html"><img src="<?php echo esc_url(get_template_directory_uri()."/images/services/services-large1.jpg"); ?>" alt="Images"></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="services-tab-content pl-20">
                                                <h2>Project Management Consulting</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                                    incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices 
                                                    gravida. Risus commodo maecenas accumsan lacus vel facilisis. 
                                                </p>
                    
                                                <ul class="services-tab-list">
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working Activities</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued for Client</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Turnaround Situation</li>
                                                </ul>
                    
                                                <a href="service-details.html" class="default-btn border-radius-5">More About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs_item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-content pr-20">
                                                <h2>Project Management Consulting</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                                    incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices 
                                                    gravida. Risus commodo maecenas accumsan lacus vel facilisis. 
                                                </p>
                    
                                                <ul class="services-tab-list">
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working Activities</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued for Client</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Turnaround Situation</li>
                                                </ul>
                    
                                                <a href="service-details.html" class="default-btn border-radius-5">More About Us</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a href="service-details.html"><img src="<?php echo esc_url(get_template_directory_uri()."/images/services/services-large2.jpg"); ?>" alt="Images"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs_item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a href="service-details.html"><img src="<?php echo esc_url(get_template_directory_uri()."/images/services/services-large3.jpg"); ?>" alt="Images"></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="services-tab-content pl-20">
                                                <h2>Project Management Consulting</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                                    incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices 
                                                    gravida. Risus commodo maecenas accumsan lacus vel facilisis. 
                                                </p>
                    
                                                <ul class="services-tab-list">
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working Activities</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued for Client</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Turnaround Situation</li>
                                                </ul>
                    
                                                <a href="service-details.html" class="default-btn border-radius-5">More About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs_item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-content pr-20">
                                                <h2>Project Management Consulting</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                                    incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices 
                                                    gravida. Risus commodo maecenas accumsan lacus vel facilisis. 
                                                </p>
                    
                                                <ul class="services-tab-list">
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working Activities</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued for Client</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Turnaround Situation</li>
                                                </ul>
                    
                                                <a href="service-details.html" class="default-btn border-radius-5">More About Us</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a href="service-details.html"><img src="<?php echo esc_url(get_template_directory_uri()."/images/services/services-large2.jpg"); ?>" alt="Images"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs_item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a href="service-details.html"><img src="<?php echo esc_url(get_template_directory_uri()."/images/services/services-large1.jpg"); ?>" alt="Images"></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="services-tab-content pl-20">
                                                <h2>Project Management Consulting</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                                    incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices 
                                                    gravida. Risus commodo maecenas accumsan lacus vel facilisis. 
                                                </p>
                    
                                                <ul class="services-tab-list">
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working Activities</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued for Client</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Turnaround Situation</li>
                                                </ul>
                    
                                                <a href="service-details.html" class="default-btn border-radius-5">More About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!-- Choose Area Two -->
        <div class="choose-area-two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="choose-content-left">
                            <div class="section-title">
                                <span class="sp-title">Why Choose Us</span>
                                <h2>How Vconn Can Help You to Grow Your Business  </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-item">
                                        <div class="choose-circle">
                                            <h3>50%</h3>
                                        </div>
                                        <h4>Traditional Employee</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore 
                                            et dolore magna aliqua
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-item">
                                        <div class="choose-circle2">
                                            <h3>100%</h3>
                                        </div>
                                        <h4>Virtual Employee</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore 
                                            et dolore magna aliqua
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-img-three">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/choose-img2.jpg"); ?>" alt="Images">
                            <div class="line">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/choose-line.png"); ?>" alt="Choose Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Area End -->

        <!-- Project Area Two -->
        <div class="project-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title2">Project</span>
                    <h2>Our Recent Project Case</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-7">
                        <div class="project-slider-two owl-carousel owl-theme" data-slider-id="1">
                            <div class="project-slider-img">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-style1.jpg"); ?>" alt="Images">
                            </div>

                            <div class="project-slider-img">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-style2.jpg"); ?>" alt="Images">
                            </div>

                            <div class="project-slider-img">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-style3.jpg"); ?>" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="thumbs-wrap">
                            <div class="owl-thumbs project-area-thumb" data-slider-id="1">
                                <div class="owl-thumb-item">
                                    <div class="content">
                                        <h3>Customer Service</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna  </p>
                                    </div>
                                </div>
                
                                <div class="owl-thumb-item">
                                    <div class="content">
                                        <h3>Design Service</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna  </p>
                                    </div>
                                </div>
                
                                <div class="owl-thumb-item">
                                    <div class="content">
                                        <h3>Executive Admin</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Area Two End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               