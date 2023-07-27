<?php /* Template Name: Template Blog 2 

             
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
                                    <a href="#" class="nav-link active">
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
                                            <a href="blog-2.html" class="nav-link active">
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
        <div class="inner-banner inner-bg5">
            <div class="container">
                <div class="inner-title text-center">
                    <h3> Blog Left Sidebar </h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li> Blog Left Sidebar  </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Widget Area -->
        <div class="blog-widget-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-bar-area pr-20">
                            <div class="search-widget">
                                <form class="search-form">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <button type="submit">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>

                             <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Data Entry
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Social Media Marketing
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Content Writing
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Designing
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Project Management
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Bookkeeping
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Recent Post</h3>
                                <div class="widget-popular-post">
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg1" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                    Reasons Why You Need Virtual Assistant
                                                </a>
                                            </h4>

                                            <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg2" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                     10 Things Workflow of Virtual Assistant
                                                </a>
                                            </h4>

                                            <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg3" role="img"></span>
                                        </a>
                                        <div class="info">
                                            
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                    5 Workflow Automatic Procedure
                                                </a> 
                                            </h4>

                                            <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="blog-details.html" class="thumb">
                                            <span class="full-image cover bg4" role="img"></span>
                                        </a>
                                        <div class="info">
                                           
                                            <h4 class="title-text">
                                                <a href="blog-details.html">
                                                    Most popular wheeel drive subs in here
                                                </a> 
                                            </h4>

                                            <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            </div>

                           <div class="side-bar-widget">
                                <h3 class="title">Tags</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="tags.html">Employee</a></li>
                                    <li><a href="tags.html">Media</a></li>
                                    <li><a href="tags.html">Skills</a></li>
                                    <li><a href="tags.html">Office</a></li>
                                    <li><a href="tags.html">Co working</a></li>
                                    <li><a href="tags.html">Tips</a></li>
                                    <li><a href="tags.html">Work</a></li>
                                    <li><a href="tags.html">Assistant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img2.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By John </a></li>
                                            <li><i class="bx bx-calendar"></i> 14 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 3 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">Why You Need Virtual Assistant for Your Company</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img3.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Willam </a></li>
                                            <li><i class="bx bx-calendar"></i> 15 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 3 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">5 Workflow Automation Tips for Your Company</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img4.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Roy </a></li>
                                            <li><i class="bx bx-calendar"></i> 16 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 4 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">10 Things to Outsource to a Virtual Assistant</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img5.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Jony </a></li>
                                            <li><i class="bx bx-calendar"></i> 17 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 2 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">Time Saving Tips for Virtual All Categories Assistant</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img6.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Wilson </a></li>
                                            <li><i class="bx bx-calendar"></i> 18 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 2 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">3 Basics to Hire and Train a Virtual Assistant</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img7.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Hanson </a></li>
                                            <li><i class="bx bx-calendar"></i> 19 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 6 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">Being the Virtual Assistant of Your Own Life</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img8.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Oliva </a></li>
                                            <li><i class="bx bx-calendar"></i> 20 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 3 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">Reasons Why You Need Virtual Assistant</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-card-two">
                                    <a href="blog-details.html">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-img9.jpg"); ?>" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <ul>
                                            <li><a href="author.html"> <i class="bx bx-user"></i>By Maicel </a></li>
                                            <li><i class="bx bx-calendar"></i> 22 April </li>
                                            <li><i class="bx bx-comment-dots"></i> 5 Comments </li>
                                        </ul>
                                        <h3><a href="blog-details.html">Most Popular Wheel Drive Subs in Here</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-12 col-md-12 text-center">
                                <div class="pagination-area">
                                    <a href="blog-2.html" class="prev page-numbers">
                                        <i class="bx bx-chevron-left"></i>
                                    </a>
        
                                    <span class="page-numbers current" aria-current="page">1</span>
                                    <a href="blog-2.html" class="page-numbers">2</a>
                                    <a href="blog-2.html" class="page-numbers">3</a>
                                    
                                    <a href="blog-2.html" class="next page-numbers">
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Widget Area End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               