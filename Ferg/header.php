<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Template Site">
    <meta http-equiv="Cache-control" content="no-cache">    
    <link rel="shortcut icon" href="/wp-content/themes/templatesite/assets/images/logo.png"> 
     
      <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
   
   <?php 
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header text-center">	


            <!-- Pulling site name -->
        <!-- <?php echo get_bloginfo('name'); ?> -->
       
        
	    <nav class="navbar navbar-expand-lg navbar-light container" >

            <div class="mobLogo w-25 d-lg-none">
                <?php
                if(function_exists('the_custom_logo')) {
                    
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ?>
                <a class="mx-auto logo w-100" href="<?php echo home_url(); ?>"><img class="mx-auto logo w-100" src="<?php echo $logo[0] ?>" alt="logo" ></a>
            </div>
			<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<div id="hamburger" class="hamburglar is-closed">

                <div class="burger-icon">
                <div class="burger-container">
                    <span class="burger-bun-top"></span>
                    <span class="burger-filling"></span>
                    <span class="burger-bun-bot"></span>
                </div>
                </div>
                
                <!-- svg ring containter -->
                <div class="burger-ring">
                <svg class="svg-ring">
                    <path class="path" fill="none" stroke="white;" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                </svg>
                </div>
                <!-- the masked path that animates the fill to the ring -->
                
                <svg width="0" height="0">
                <mask id="mask">
                <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                </mask>
                </svg>
                <div class="path-burger">
                <div class="animate-path">
                    <div class="path-rotation"></div>
                </div>
                </div>
                
            </div>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-row py-1 justify-content-between">
                <!-- Pulling site logo -->
                <?php
                if(function_exists('the_custom_logo')) {
                    
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ?>
                <a href="<?php echo home_url(); ?>" class="col-3 d-none d-lg-flex  justify-content-start pl-0">
                    <img class="logo" src="<?php echo $logo[0] ?>" alt="logo" >	
                </a>
						
				
               <!-- Desktop -->

                <div class="deskmenu d-none d-lg-flex flex-column">
                    <div class="upper">
                        <h2 class="headertitle"><strong>s</strong>ocial<strong>m</strong>edia<strong>m</strong>ar<em>kate</em>ing</h2>
                        </div>
                    <div class="lower d-flex justify-content-between align-items-center mt-1">
                        <div class="d-flex">
                            <a target="_blank" class="socialmedialinks" href="<?php the_field('instagram'); ?>"><i class="fa-fw fa-brands fa-instagram"></i></a>
                            <a target="_blank" class="socialmedialinks" href="<?php the_field('facebook'); ?>"><i class="fa-fw fa-brands fa-facebook"></i></a>
                            <a target="_blank" class="socialmedialinks" href="<?php the_field('linkedin'); ?>"><i class="fa-fw fa-brands fa-linkedin"></i></a>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#deskaboutme">About</a>
                            <p class="mx-2">|</p>
                            <a href="#servicesdiv">Services</a>
                            <p class="mx-2">|</p>
                            <a href="#contactdiv">Contact</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile -->

                <div class="d-flex flex-column d-lg-none mobilemenu">
                    <div class="d-flex justify-content-end align-items-center flex-column mainmenu">
                        <a href="#mobaboutme">About</a>
                        <a href="#servicesdiv">Services</a>
                        <a href="#contactdiv">Contact</a>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a target="_blank" class="socialmedialinks" href="<?php the_field('instagram'); ?>"><i class="fa-fw fa-brands fa-instagram"></i></a>
                        <a target="_blank" class="socialmedialinks" href="<?php the_field('facebook'); ?>"><i class="fa-fw fa-brands fa-facebook"></i></a>
                        <a target="_blank" class="socialmedialinks" href="<?php the_field('linkedin'); ?>"><i class="fa-fw fa-brands fa-linkedin"></i></a>
                        
                    </div>
                </div>

				
				<!-- <ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul> -->

			</div>
		</nav>
        <!-- <div class="topheaderbar">
            <div class="container">
                <div class="row d-flex justify-content-start align-items-center ml-2">
                    <p class="ml-4 my-0">Get in touch: </p>
                    <a class="ml-1" href="tel:07777777777"><i class="fa-solid fa-phone ml-1"></i> 07985 787878</a>
                
                </div>
            </div>
        </div>     -->
    </header>
    <div class="main-wrapper">
	    <header>
            <!-- Pulling in page title -->
			<!-- <h1 class="heading"><?php the_title(); ?>test</h1> -->
		</header>