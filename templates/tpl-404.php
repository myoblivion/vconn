<?php /* Template Name: Template 404 

             
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
                                            <a href="404.html" class="nav-link active">
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
        <div class="inner-banner inner-bg10">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>404 Error Page</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>404 Error Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

         <!-- Start 404 Error -->
		<div class="error-area pb-100">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="error-content">
						<img src="<?php echo esc_url(get_template_directory_uri()."/images/404-error.jpg"); ?>" alt="Image">
						<h3>Oops! Page Not Found</h3>
						<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
						<a href="index.html" class="default-btn btn-bg-two">
							Return To Home Page
						</a>
					</div>
				</div>
			</div>
		</div>
        <!-- End 404 Error -->

        <!-- Footer Area -->
        

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               