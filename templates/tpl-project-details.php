<?php /* Template Name: Template Project details 

             
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
                                    <a href="#" class="nav-link active">
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
                                            <a href="project-details.html" class="nav-link active">
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
        <div class="inner-banner inner-bg10">
            <div class="container">
                <div class="inner-title text-center">
                    <h3> Project Details  </h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li> Project Details  </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Project Details Area -->
        <div class="project-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="project-article">
                            <div class="project-article-content">
                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-details-img1.jpg"); ?>" alt="Blog Images">
                                <div class="content">
                                    <h3>Project Management Consulting</h3>
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

                            <div class="project-article-bottom">
                                <h3>Why Choose Us</h3>
                                <ul class="project-article-list">
                                    <li><i class="bx bx-check-square"></i> Innovative Working Activities</li>
                                    <li><i class="bx bx-check-square"></i> 100% Guarantee Issued for Client</li>
                                    <li><i class="bx bx-check-square"></i> Dedicated Team Member</li>
                                    <li><i class="bx bx-check-square"></i> Safe & Secure Environment</li>
                                </ul>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="project-article-img">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-style1.jpg"); ?>" alt="Projects Images">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="project-article-img">
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/project-style2.jpg"); ?>" alt="Projects Images">
                                        </div>
                                    </div>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="project-sidebar pl-20">
                            <div class="project-categories">
                                <ul>
                                    <li>Date: <span>March 30, 2021</span></li>
                                    <li>Client: <span>Andres Manila</span></li>
                                    <li>Duration: <span>3 Months</span></li>
                                    <li>Category: <span>Floor</span></li>
                                    <li>Tag: <span>Floor</span></li>
                                    <li>Completed: <span>May 10, 2021</span></li>
                                </ul>
                            </div>

                            <div class="project-contact">
                                <div class="side-bar-from">
                                    <h3>Schedule an Appointment</h3>
                                    <div class="appointment-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-12 col-md-12">
                                                    <button type="submit" class="default-btn">
                                                        Send Message
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="subscribe-area">
                                <span>Subscribe</span>
                                <h2>Subscribe for Newsletter</h2>
                                <form class="subscribe-form" data-toggle="validator" method="POST">
                                    <input type="email" class="form-control" placeholder="Email*" name="EMAIL" required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        Subscribe 
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Details Area End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               