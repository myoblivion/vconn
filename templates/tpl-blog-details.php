<?php /* Template Name: Template Blog details 

             
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
                                            <a href="blog-details.html" class="nav-link active">
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
        <div class="inner-banner inner-bg3">
            <div class="container">
                <div class="inner-title text-center">
                    <h3> Blog Details </h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li> Blog Details </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Details Area -->
        <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-article">
                            <div class="blog-article-content">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-details-img1.jpg"); ?>" alt="Blog Images">
                                <div class="content">
                                    <ul>
                                        <li><a href="author.html"> <i class="bx bx-user"></i>By John </a></li>
                                        <li><i class="bx bx-calendar"></i> 16 April </li>
                                        <li><i class="bx bx-comment-dots"></i> 3 Comments </li>
                                    </ul>
                                    <h3>7 workflow Automation Tips For your Team?</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>

                            <div class="article-content-area">
                                <blockquote class="blockquote"> 
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                    </p>
                                    <i class="bx bxs-quote-right"></i>
                                </blockquote>
                            </div>

                            <div class="blog-benefit-content">
                                <h3>Beneficial Strategies</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <ul>
                                    <li>At vero eos et accusam et justo duo dolores et ea rebum. </li>
                                    <li>Eirmod tempor invidunt ut labore et dolore magna</li>
                                    <li>Stet clita kasd gubergren, no sea takimata sanctus.</li>
                                </ul>
                            </div>

                            <div class="article-share">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="article-tag">
                                            <ul>
                                                <li class="title">Tags :</li>
                                                <li><a href="blog-details.html" target="_blank">Workflow,</a></li>
                                                <li><a href="blog-details.html" target="_blank">Media,</a></li>
                                                <li><a href="blog-details.html" target="_blank">Tips</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7">
                                        <div class="article-social-icon">
                                            <ul class="social-icon">
                                                <li class="title">Share :</li>
                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="bx bxl-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <i class="bx bxl-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="bx bxl-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="bx bxl-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comments-wrap">
                                <div class="comment-title">
                                    <h3 class="title">3 Comments :</h3>
                                </div>
    
                                <ul class="comment-form">
                                    <li>
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-user1.jpg"); ?>" alt="Image">
                                        <h3>John Smith</h3>
                                        <span>17 April , 2021  AT 06:30 PM</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu astana glory makes one of
                                            duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus est.
                                        </p>
                                        <a href="blog-details.html"> Reply</a>
                                    </li>

                                    <li class="pl-80">
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-user2.jpg"); ?>" alt="Image">
                                        <h3>Sharly</h3>
                                        <span>17 April , 2021  AT 06:30 PM</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas 
                                            accumsan lacus vel facilisis. 
                                        </p>
                                        <a href="blog-details.html"> Reply</a>
                                    </li>

                                    <li>
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/images/blog-user3.jpg"); ?>" alt="Image">
                                        <h3>Mack John</h3>
                                        <span>17 April , 2021  AT 06:30 PM</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu astana glory makes one of
                                            duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus est.
                                        </p>
                                        <a href="blog-details.html"> Reply</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="comments-form">
                                <h3 class="title">Post Comment</h3>
                                <div class="contact-form">
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Name*</label>
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Email Address*</label>
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Your Website Link*</label>
                                                    <input type="text" name="website" class="form-control" required data-error="Your website" placeholder="Your Website">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Comment*</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message.."></textarea>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group checkbox-option">
                                                    <input type="checkbox" id="chb2">
                                                    <p>
                                                        Save my name, email, and website in this browser for the next time I comment.
                                                    </p>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn gradient-btn">
                                                    Post A Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="side-bar-area pl-20">
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
                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               