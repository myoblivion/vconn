<?php /* Template Name: Template Pricing 

             
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
                                    <a href="#" class="nav-link active">
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
                                            <a href="pricing.html" class="nav-link active">
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
                                    <a href="#" class="nav-link">
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
                                            <a href="service-2.html" class="nav-link">
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
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Pricing Plan</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Pricing Plan</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Pricing Area End -->
        <div class="pricing-area pricing-bg2 pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title2">Pricing Plan</span>
                    <h2>Select  Pricing Plan To Get More</h2>
                </div>

                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-card">
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape1.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape2.png"); ?>" alt="Images">
                            </div>
                            <div class="price-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/price-icon1.png"); ?>" alt="Images">
                            </div>
                            <h3>Entrepreneur Plan</h3>
                            <h4>$399 <span>/Weekly</span></h4>
                            <ul>
                                <li><i class="bx bx-check-circle"></i> 12 Hours Per Month</li>
                                <li><i class="bx bx-check-circle"></i> Dedicated Assistant</li>
                                <li><i class="bx bx-check-circle"></i> 1 User Included</li>
                            </ul>

                            <div class="price-btn-area text-center">
                                <a href="pricing.html" class="price-btn">Subscribe Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-card">
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape1.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape2.png"); ?>" alt="Images">
                            </div>
                            <div class="price-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/price-icon2.png"); ?>" alt="Images">
                            </div>
                            <h3>Small Business Plan</h3>
                            <h4>$999 <span>/Monthly</span></h4>
                            <ul>
                                <li><i class="bx bx-check-circle"></i> 18 Hours Per Month</li>
                                <li><i class="bx bx-check-circle"></i> Dedicated Assistant</li>
                                <li><i class="bx bx-check-circle"></i> 2 User Included</li>
                            </ul>

                            <div class="price-btn-area text-center">
                                <a href="pricing.html" class="price-btn">Subscribe Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-card">
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape1.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape2.png"); ?>" alt="Images">
                            </div>
                            <div class="price-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/price-icon3.png"); ?>" alt="Images">
                            </div>
                            <h3>Team Plan</h3>
                            <h4>$1090 <span>/Yearly </span></h4>
                            <ul>
                                <li><i class="bx bx-check-circle"></i> 24 Hours Per Month</li>
                                <li><i class="bx bx-check-circle"></i> Dedicated Assistant</li>
                                <li><i class="bx bx-check-circle"></i> 4 User Included</li>
                            </ul>

                            <div class="price-btn-area text-center">
                                <a href="pricing.html" class="price-btn">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Area End -->

        <!-- Services Area -->
        <div class="services-area services-area-bg pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <span class="sp-title">Services</span>
                            <h2>We Provide Best virtual Assistant Service</h2>
                        </div>
                    </div>

                    <div class="col-lg-4">
                         <div class="service-btn">
                            <a href="service-details.html" class="default-btn border-radius-5">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="services-slider owl-carousel owl-theme align-items-center">
                    <div class="services-item services-bg1">
                        <div class="content">
                            <div class="service-icon">
                                <i class="flaticon-project-management"></i>
                            </div>
                            <h3>
                                <a href="service-details.html">Project Management</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit 
                                abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus 
                            </p>
                            <a href="service-details.html" class="read-btn">Read More</a>
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/services-top.png"); ?>" alt="Images">
                            </div>
                        </div>

                       
                    </div>

                    <div class="services-item services-bg2">
                        <div class="content">
                            <div class="service-icon">
                                <i class="flaticon-vector"></i>
                            </div>
                            <h3>
                                <a href="service-details.html">Data Entry</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit 
                                abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus 
                            </p>
                            <a href="service-details.html" class="read-btn">Read More</a>
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/services-top.png"); ?>" alt="Images">
                            </div>
                        </div>

                        
                    </div>

                    <div class="services-item services-bg3">
                        <div class="content">
                            <div class="service-icon">
                                <i class="flaticon-digital-marketing"></i>
                            </div>
                            <h3>
                                <a href="service-details.html">Social Media Marketing</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit 
                                abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus 
                            </p>
                            <a href="service-details.html" class="read-btn">Read More</a>
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/services-top.png"); ?>" alt="Images">
                            </div>
                        </div>

                        
                    </div>

                    <div class="services-item services-bg4">
                        <div class="content">
                            <div class="service-icon">
                                <i class="flaticon-content"></i>
                            </div>
                            <h3>
                                <a href="service-details.html">Content Writing</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit 
                                abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus 
                            </p>
                            <a href="service-details.html" class="read-btn">Read More</a>
                            <div class="top">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/services-top.png"); ?>" alt="Images">
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!-- Project Area -->
        <div class="project-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title">Project</span>
                    <h2>Our Recent Project Case</h2>
                </div>

                <div class="project-slider owl-carousel owl-theme pt-45">
                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-img1.jpg"); ?>" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Project Management</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-img2.jpg"); ?>" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Media Marketing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-img3.jpg"); ?>" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Book Keeping</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-img4.jpg"); ?>" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Technology Service</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-img5.jpg"); ?>" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Data Entry </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Area End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               