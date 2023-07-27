<?php /* Template Name: Template Coming soon 

             
               */ 
               get_header(); ?> <!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap RTL CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/bootstrap.rtl.min.css"); ?>">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/fonts/flaticon.css"); ?>">
        <!-- BoxIcons Min CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/boxicons.min.css"); ?>">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/animate.min.css"); ?>">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/owl.carousel.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/owl.theme.default.min.css"); ?>">
        <!-- Magnific Popup CSS --> 
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/magnific-popup.min.css"); ?>">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/odometer.min.css"); ?>">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/meanmenu.min.css"); ?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/style.css"); ?>">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/theme-dark.css"); ?>">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/rtl.css"); ?>">
       
        <!-- Title -->
        <title>Vconn - Virtual Assistant Services HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()."/images/favicon.png"); ?>">
    <?php wp_head(); ?> </head>

    <body>
        <!-- Preloader Start -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Start Coming Soon Area -->
        <div class="coming-soon-area">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="coming-soon-content">
							<h1>Coming Soon</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>

							<div id="timer">
								<div id="days"></div>
								<div id="hours"></div>
								<div id="minutes"></div>
								<div id="seconds"></div>
							</div>
							
							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="input-newsletter" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
			
								<button type="submit" class="default-btn two">
									Subscribe now
								</button>
								<div id="validator-newsletter" class="form-result"></div>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Coming Soon Area End -->

       <!-- Jquery Min JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/jquery.min.js"); ?>"></script>
       <!-- Bootstrap Bundle Min JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/bootstrap.bundle.min.js"); ?>"></script>
       <!-- Magnific Popup JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/magnific-popup.min.js"); ?>"></script>
       <!-- Odometer JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/odometer.min.js"); ?>"></script>
       <!-- Appear Min JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/appear.min.js"); ?>"></script>
       <!-- Meanmenu JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/meanmenu.min.js"); ?>"></script>
       <!-- Owl Carousel JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/owl.carousel.min.js"); ?>"></script>
       <!-- Owl Carousel Thumbs JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/carousel-thumbs.js"); ?>"></script>
       <!-- Wow Min JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/wow.min.js"); ?>"></script>
       <!-- Ajaxchimp Min JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/ajaxchimp.min.js"); ?>"></script>
       <!-- Form Validator Min JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/form-validator.min.js"); ?>"></script>
       <!-- Contact Form JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/contact-form-script.js"); ?>"></script>
       <!-- Custom  JS -->
       <script src="<?php echo esc_url(get_template_directory_uri()."/js/custom.js"); ?>"></script>

    <?php wp_footer(); ?> </body>
</html>

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               