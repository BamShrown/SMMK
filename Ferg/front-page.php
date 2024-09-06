
    <?php

    get_header();

    ?>
   

		<article class="content py-0 pb-lg-3">



        <!-- Desktop View -->
            <div class="herodiv d-md-block" >
                <div class="container h-100 herodivinner">
                    <div class="row h-100">
                        <div class="herotext text-center col-12 px-4 px-lg-2 pl-2 h-100 d-flex flex-column justify-content-center align-items-center mt-3 mt-md-0">
                           <h1><?php the_field('header'); ?></h1>
                           <span class="lineborder"></span>
                           <h4 class="w-100 w-md-75 mt-4 text-center"><?php the_field('sub-header'); ?></h4>
                            <a class="btn-primary mt-3" href="#contactdiv">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
       


        <?php

            $image_id1 = get_field('serviceimg1');
            $image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id2 = get_field('serviceimg2');
            $image_url2 = wp_get_attachment_image_url( $image_id2, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id3 = get_field('serviceimg3');
            $image_url3 = wp_get_attachment_image_url( $image_id3, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id4 = get_field('serviceimg4');
            $image_url4 = wp_get_attachment_image_url( $image_id4, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id5 = get_field('serviceimg5');
            $image_url5 = wp_get_attachment_image_url( $image_id5, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id6 = get_field('serviceimg6');
            $image_url6 = wp_get_attachment_image_url( $image_id6, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id7 = get_field('serviceimg7');
            $image_url7 = wp_get_attachment_image_url( $image_id7, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            $image_id8 = get_field('serviceimg8');
            $image_url8 = wp_get_attachment_image_url( $image_id8, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


            $aboutimg = get_field('aboutimg');
            $aboutimg_url = wp_get_attachment_image_url( $aboutimg, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
            

        ?>

        <!-- About Section -->

        <!-- Desktop -->

        <div class="container d-none d-md-block wearediv mt-1 mt-md-5 pt-5">
            <div class="row d-flex justify-content-center justify-content-xl-between aboutdiv">
                <div class="col-12 col-md-4 aboutimg" style="">
                    <img class="w-100" src="<?php echo esc_url($aboutimg_url); ?>" alt="">

                </div>
                <div class="col-12 col-md-8" id="deskaboutme">
                    <div class="text-left fadeup abouttext pl-5 py-4 px-3 pl-lg-4 pt-lg-0" >
                        <h2 class="mb-0">About Me</h2>
                        <span class="lineborder d-flex"></span>
                        <p class="mt-3"><?php the_field('aboutmesection'); ?></p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mobile -->

        <div class="container-fluid px-0 d-md-none aboutmob mt-5">
            <div class="row">
                <div class="col-12 text-center px-3" id="mobaboutme">
                    <h2 class="mb-0">About Me</h2>
                    <span class="lineborder d-flex mx-auto mt-2 mb-0"></span>
                    <p class="mt-3 p-3"><?php the_field('aboutmesection'); ?></p>
                </div>
                <div class="col-12">
                    <img class="w-100" src="<?php echo esc_url($aboutimg_url); ?>" alt="">

                </div>

            </div>
        </div>


    <!-- Services Section -->

    <!-- Desktop -->

    <div class="container-fluid d-flex mt-5 pt-5 d-md-flex justify-content-center flex-column align-items-center" id="servicesdiv">
        <h2 style="color: white;">Our Services</h2>
        <span class="lineborder mb-3 "></span>
        <h6 class="mobileinfo d-md-none"><i class="fa-solid mr-1 fa-circle-info"></i> Click each tile for more info</h6>
        <div class="row mt-2 mt-md-4 serviceouter">
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url1); ?>');">
                
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain1"><i class="fas mr-4 mr-md-0 fa-cogs"></i><?php the_field('service1'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced1"><h5 class="mt-4"><?php the_field('service1'); ?></h5><p><?php the_field('servicedescription1'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url2); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain2"><i class="fas mr-4 mr-md-0 fa-chart-line"></i><?php the_field('service2'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced2"><h5 class="mt-4"><?php the_field('service2'); ?></h5><p><?php the_field('servicedescription2'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url3); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain3"><i class="fas mr-4 mr-md-0 fa-pencil-alt"></i><?php the_field('service3'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced3"><h5 class="mt-4"><?php the_field('service3'); ?></h5><p><?php the_field('servicedescription3'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url4); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain4"><i class="fas mr-4 mr-md-0 fa-search"></i><?php the_field('service4'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced4"><h5 class="mt-4"><?php the_field('service4'); ?></h5><p><?php the_field('servicedescription4'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url5); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain5"><i class="fas mr-4 mr-md-0 fa-paint-brush"></i><?php the_field('service5'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced5"><h5 class="mt-4"><?php the_field('service5'); ?></h5><p><?php the_field('servicedescription5'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url6); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain6"><i class="fas mr-4 mr-md-0 fa-bullhorn"></i><?php the_field('service6'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced6"><h5 class="mt-4"><?php the_field('service6'); ?></h5><p><?php the_field('servicedescription6'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url7); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain7"><i class="fas mr-4 mr-md-0 fa-users"></i><?php the_field('service7'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced7"><h5 class="mt-4"><?php the_field('service7'); ?></h5><p><?php the_field('servicedescription7'); ?></p></div>
            </div>
            <div class="servicesboxes text-center col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($image_url8); ?>');">
                <h4 class="servicemain flex-row flex-md-column justify-content-start justify-content-md-center text-left text-md-center servicemain8"><i class="fas mr-4 mr-md-0 fa-calendar-alt"></i><?php the_field('service8'); ?></h4>
                <div class="hidden servicediv flex-column justify-content-center justify-content-md-start align-items-center px-3 px-md-1 serviced8"><h5 class="mt-4"><?php the_field('service8'); ?></h5><p><?php the_field('servicedescription8'); ?></p></div>
            </div>
        </div>
    </div>

    <!-- Mobile -->

    <!-- <div class="container-fluid d-md-none servicesmobile">
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <h2 style="color: white;">Our Services</h2>
            <span class="lineborder mb-4 "></span>
        </div>
        <div class="row mt-2">
            
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-cogs p-3"></i>
                <h4 class="servicemain flex-column servicemain1 m-0 p-2"><?php the_field('service1'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-chart-line p-3"></i>
                <h4 class="servicemain flex-column servicemain2 m-0 p-2"><?php the_field('service2'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-pencil-alt p-3"></i>
                <h4 class="servicemain flex-column servicemain3 m-0 p-2"><?php the_field('service3'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-search p-3"></i>
                <h4 class="servicemain flex-column servicemain4 m-0 p-2"><?php the_field('service4'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-paint-brush p-3"></i>
                <h4 class="servicemain flex-column servicemain5 m-0 p-2"><?php the_field('service5'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-bullhorn p-3"></i>
                <h4 class="servicemain flex-column servicemain6 m-0 p-2"><?php the_field('service6'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-users p-3"></i>
                <h4 class="servicemain flex-column servicemain7 m-0 p-2"><?php the_field('service7'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
            <div class="col-12 d-flex servsection justify-content-between align-items-center p-0">
                <i class="mobileservicon fas fa-calendar-alt p-3"></i>
                <h4 class="servicemain flex-column servicemain8 m-0 p-2"><?php the_field('service8'); ?></h4>
                <a class="p-1" href=""><i class="fa-solid fa-fw fa-chevron-down"></i></a>
            </div>
        </div>
    </div> -->


    <!-- Contact Form -->

    <div class="container mt-5">
            <div class="row">
                <div class="herotext col-12 d-flex justify-content-center flex-column align-items-center text-center my-4" id="contactdiv">
                <h2 style="color: white;">Get In Touch</h2>
                <span class="lineborder mb-4"></span>
                <div class="contactdeets d-flex flex-column w-50 justify-content-start align-items-center">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <a class="d-flex align-items-center" href="tel: <?php the_field('number'); ?>"><i class="fa-solid fa-phone mr-2"></i> <?php the_field('number'); ?></a>
                        <a class="d-flex align-items-center mt-3" href="mailto: <?php the_field('email'); ?>"><i class="fa-solid fa-envelope mr-2 mb-1"></i> <?php the_field('email'); ?></a>
                    </div>

                </div>

                 <?php

                if(have_posts()) {

                    while(have_posts()) {

                        the_post();
                        the_content();

                    
                    }

                }

                ?> 
                <h2 class="mt-5" style="color: white;">Reviews</h2>
                <span class="lineborder mb-2"></span>
                </div>

            </div>
        </div>

    <!-- Carousel Section -->

    <div id="carouselExampleIndicators" class="carousel slide w-100 mt-1 mb-0 fadeup" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner h-100">
                <div class="carousel-item  active">
                    <div class="w-100 h-100  d-flex justify-content-center align-items-center flex-column">
                        <div class="carouselinnerdiv p-3 p-md-5">
                            <h5 class="bigtext">“</h5>
                            <div class="carouselpara text-center text-md-left py-3">
                                <h4><?php the_field('review1'); ?></h4>
                                <p class="mt-1 pt-1 mt-md-3 pt-md-3"><?php the_field('reviewer1'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="w-100 h-100   d-flex justify-content-center align-items-center flex-column">
                        <div class="carouselinnerdiv p-3 p-md-5">
                            <h5 class="bigtext">“</h5>
                            <div class="carouselpara text-center text-md-left py-3">
                                <h4><?php the_field('review2'); ?></h4>
                                <p class="mt-1 pt-1 mt-md-3 pt-md-3"><?php the_field('reviewer2'); ?></p>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="carousel-item ">
                    <div class="w-100 h-100   d-flex justify-content-center align-items-center flex-column">
                        <div class="carouselinnerdiv p-3 p-md-5">
                            <h5 class="bigtext">“</h5>
                            <div class="carouselpara text-center text-md-left py-3">
                                <h4><?php the_field('review3'); ?></h4>
                                <p class="mt-1 pt-1 mt-md-3 pt-md-3"><?php the_field('reviewer3'); ?></p>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <a class="carousel-control-prev d-none" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon mr-3" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon ml-3" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



    <!-- Services -->


    



	    </article>

        <?php

        get_footer();

        ?>