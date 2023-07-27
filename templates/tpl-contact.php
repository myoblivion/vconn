<?php /* Template Name: Template Contact 

             
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
                                    <a href="contact.html" class="nav-link active">
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
        <div class="inner-banner inner-bg2">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Contact Card Area -->
        <div class="contact-card-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-phone-call-1"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel: 8256-569-887"> 8256-569-887</a></p>
                            <p><a href="tel: 8256-567-787"> 8256-567-787</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-email"></i>
                            <h3>Email Address</h3>
                            <p><a href="mailto:info@vconn.com">info@vconn.com</a></p>
                            <p><a href="mailto:hello@vconn.com">hello@vconn.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-pin"></i>
                            <h3>Email Address</h3>
                            <p>950 St Johns Pl Brooklyn, NY, United States</p>
                            <p>123,westeen Road, Melbourne Australia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Card Area End -->

        <!-- Contact widget Area -->
        <div class="contact-widget-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.487003839113!2d-71.563290484581!3d41.16754397928502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e58cd7f7544849:0x315442931df884db!2s58 Sunset Hill Rd, New Shoreham, RI 02807, USA!5e0!3m2!1sen!2sbd!4v1622999962876!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-widget-form pl-20">
                            <div class="contact-form">
                                <h3>Contact With Us!</h3>
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message*"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-12 col-md-12">
                                            <div class="agree-label">
                                                <input type="checkbox" id="chb1">
                                                <label for="chb1">
                                                    Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                                </label>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">
                                                Send Message
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
        <!-- Contact widget Area End -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               