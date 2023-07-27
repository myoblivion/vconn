<?php /* Template Name: Template Index 

             
               */ 
               get_header(); ?> 
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
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
                                    <a href="#" class="nav-link active">
                                        Home 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">
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

        <!-- Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-align-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Best Virtual Assistant for Your Business</h1>
                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum. </p>
                            <div class="banner-btn wow animate__animated animate__fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <a href="about.html" class="default-btn border-radius-5">Get Started</a>
                                <a href="about.html" class="default-btn two border-radius-5">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img wow animate__animated animate__fadeInDown" data-wow-delay="1200ms" data-wow-duration="1200ms" data-speed="0.08">
                            <div class="banner-img-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()."//images/home-one-img.jpg"); ?>" alt="Banner Images">
                            </div>
                            
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="banner-img-shape">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape2.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape3.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape4.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape5.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape6.png"); ?>" alt="Images">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape7.png"); ?>" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape">
                <img src="<?php echo esc_url(get_template_directory_uri()."/images/shape1.png"); ?>" alt="Banner Shape">
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- About Area -->
        <div class="about-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/about-img1.jpg"); ?>" alt="About Images">
                            <div class="line">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/about-line.png"); ?>" alt="About Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content pl-20">
                            <div class="section-title">
                                <span class="sp-title">About Us</span>
                                <h2>Our Business is Your life Making Easier & Comfortable</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                    incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices 
                                    gravida. Risus commodo maecenas accumsan lacus vel facilisis. 
                                </p>
                            </div>

                            <ul class="about-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working Activities</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued for Client</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Dedicated Team Member</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Safe & Secure Environment</li>
                            </ul>

                            <a href="about.html" class="default-btn border-radius-5">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

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

        <!-- Choose Area End -->
        <div class="choose-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <span class="sp-title">Why Choose Us</span>
                    <h2>Why You will Give Us Priority</h2>
                </div>

                <div class="row pt-45 align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="choose-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/choose-img1.png"); ?>" alt="Choose Images">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="choose-leftside">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-card">
                                        <h3>Top Customer Service</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                        <i class="flaticon-customer-service"></i>
                                        <div class="circle"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-card">
                                        <h3>Highly  Personalized</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                        <i class="flaticon-document"></i>
                                        <div class="circle"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-card">
                                        <h3>Passionate Talent</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                        <i class="flaticon-user"></i>
                                        <div class="circle"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-card">
                                        <h3>Quick Response Team</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                        <i class="flaticon-wall-clock"></i>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="choose-bg">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/choose-bg.png"); ?>" alt="Choose Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Area End -->

        <!-- Work Area -->
        <div class="work-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="work-content">
                            <div class="section-title">
                                <span class="sp-title">How It Works</span>
                                <h2>How Vconn Personalized Approach </h2>
                            </div>
    
                            <div class="content">
                                <h3><a href="how-works.html"> Tell us About Your Ideal Assistant</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum </p>
                                <div class="number">1</div>
                            </div>
    
                            <div class="content">
                                <h3><a href="how-works.html"> Meet & Approval Your Assistant</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum </p>
                                <div class="number">2</div>
                            </div>
    
                            <div class="content">
                                <h3><a href="how-works.html"> Launch And Track</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum </p>
                                <div class="number">3</div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6">
                        <div class="work-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/work-img.png"); ?>" alt="Work Images">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/work-img1.jpg"); ?>" alt="Work Images">
                            <div class="line">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/work-line.png"); ?>" alt="Work Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Work Area End -->

        <!-- Testimonial Area -->
        <div class="testimonial-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sp-title">Testimonial</span>
                    <h2>What Client&rsquo;s Say About of Us</h2>
                </div>

                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="content">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/testimonial-profile1.jpg"); ?>" alt="Testimonials Images">
                            <h3>Moris Jacker</h3>
                            <span>Developer</span>
                        </div>
                       
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                        </p>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="quote">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="content">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/testimonial-profile2.jpg"); ?>" alt="Testimonials Images">
                            <h3>Orbindu Jeason</h3>
                            <span>Manager</span>
                        </div>
                       
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                        </p>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="quote">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="content">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/testimonial-profile3.jpg"); ?>" alt="Testimonials Images">
                            <h3>Lithiya Gera</h3>
                            <span>Designer</span>
                        </div>
                       
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                        </p>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="quote">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="content">
                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/testimonial-profile1.jpg"); ?>" alt="Testimonials Images">
                            <h3>Moris Jacker</h3>
                            <span>Developer</span>
                        </div>
                       
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                        </p>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="quote">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title">News Update</span>
                    <h2>Blog News & Update</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img1.jpg"); ?>" alt="Blog Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><a href="author.html"> <i class="bx bx-user"></i>By John </a></li>
                                    <li><i class="bx bx-calendar"></i> 16 April </li>
                                    <li><i class="bx bx-comment-dots"></i> 3 Comments </li>
                                </ul>
                                <h3><a href="blog-details.html">Why You Need Virtual Assistant for Your Company</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-left-content">
                                    <div class="blog-left-img">
                                        <a href="blog-details.html">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-sub1.jpg"); ?>" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Willam </a></li>
                                            <li><i class="bx bx-calendar"></i> 17 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 5 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">10 Things to Outsource To a  Virtual Assistant</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="blog-left-content">
                                    <div class="blog-left-img">
                                        <a href="blog-details.html">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-sub2.jpg"); ?>" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Jeason </a></li>
                                            <li><i class="bx bx-calendar"></i> 18 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 7 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">5 work flow Automation Tips for Your Team</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="blog-left-content">
                                    <div class="blog-left-img">
                                        <a href="blog-details.html">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-sub3.jpg"); ?>" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Smith </a></li>
                                            <li><i class="bx bx-calendar"></i> 19 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 1 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">How To use Virtually Assistant Effectively</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               