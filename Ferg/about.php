
<?php
/*
Template Name: About Page
*/
?>


<?php

get_header();

$image_id1 = get_field('bannerimage');
$image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
$image_id2 = get_field('mainimage');
$image_url2 = wp_get_attachment_image_url( $image_id2, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
$image_id3 = get_field('secondimage');
$image_url3 = wp_get_attachment_image_url( $image_id3, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


?>

    <div class="w-100 herocontainer mt-5 pt-5 fadeup" style="background-image: url('<?php echo esc_url($image_url1); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-5" >
                        <h1 class="text-center text-md-left fadeup"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
    </div>


    <?php
    if( get_field('trustpoint1') ) { ?>

    <section class="pagetrustpoints ">
        <div class="container py-3">
            <div class="row">
                <?php
                    if( get_field('trustpoint1') ): ?>
                    <div class=" col-6 col-lg-3 text-left d-flex justify-content-center align-items-center my-3">
                        <i class="fa-solid fa-check mr-2"></i><p class="m-0"><?php the_field('trustpoint1'); ?>
                    </div>
                <?php endif; 
                    ?></p>
                <?php
                    if( get_field('trustpoint2') ): ?>
                    <div class=" col-6 col-lg-3 text-left d-flex justify-content-center align-items-center my-3">
                        <i class="fa-solid fa-check mr-2"></i><p class="m-0"><?php the_field('trustpoint2'); ?>
                    </div>
                <?php endif; 
                    ?></p>
                <?php
                    if( get_field('trustpoint3') ): ?>
                    <div class=" col-6 col-lg-3 text-left d-flex justify-content-center align-items-center my-3">
                        <i class="fa-solid fa-check mr-2"></i><p class="m-0"><?php the_field('trustpoint3'); ?>
                    </div>
                <?php endif; 
                    ?></p>
                <?php
                    if( get_field('trustpoint4') ): ?>
                    <div class=" col-6 col-lg-3 text-left d-flex justify-content-center align-items-center my-3">
                        <i class="fa-solid fa-check mr-2"></i><p class="m-0"><?php the_field('trustpoint4'); ?>
                    </div>
                <?php endif; 
                    ?></p>
                                    <?php
                    if( get_field('trustpoint5') ): ?>
                    <div class=" col-6 col-lg-3 text-left d-flex justify-content-center align-items-center my-3">
                        <i class="fa-solid fa-check mr-2"></i><p class="m-0"><?php the_field('trustpoint5'); ?>
                    </div>
                <?php endif; 
                    ?></p>
                <?php
                    if( get_field('trustpoint6') ): ?>
                    <div class=" col-6 col-lg-3 text-left d-flex justify-content-center align-items-center my-3">
                        <i class="fa-solid fa-check mr-2"></i><p class="m-0"><?php the_field('trustpoint6'); ?>
                    </div>
                <?php endif; 
                    ?></p>    
                    

            </div>
        </div>
    </section>

    
    <?php } ?>

    <article class="content fadeup">
    
    <!-- First Block -->


    <div class="w-100 d-flex fadeup flex-column flex-md-row">
        <div class="d-flex justify-content-end w-100 w-md-50 py-4 px-3">
            <div class="container-panel py-5 pr-md-4 text-center text-md-left pb-3 fadeup">
                <h3 class="w-100">What we do<h3>
                <p><?php the_field('aboutus'); ?></p>
            </div>
        </div>
        <div class="w-100 w-md-50">
            <img class="w-100 h-100 object-fit-cover fadeup bl-blue" src="<?php echo esc_url($image_url2); ?>" alt="">
        </div>
    </div>


    <!-- Banner Section -->
    

    <div class="w-100  unsurebanner" >
        <div class="container fadeup">
            <div class="row py-2">
                <div class="col-12 d-flex py-5 flex-column justify-content-center align-items-center text-center">
                    <h3>Want to find out more about us?</h3>
                    <p>Get in touch with one of our professionals now</p>
                    <a class="btn btn-primary d-flex justify-content-center w-75 w-md-25 align-items-center mt-2 mx-auto borderround" href="contact/">Get In Touch <i class="fa-solid fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>



    <!-- Second Block -->


        <div class="w-100 d-flex fadeup flex-column flex-md-row">
        <div class="w-100 w-md-50 order-2 order-md-1">
            <img class="w-100 h-100 object-fit-cover fadeup br-blue" src="<?php echo esc_url($image_url3); ?>" alt="">
        </div>
        <div class="d-flex justify-content-start align-items-center w-100 w-md-50 order-1 order-md-2 py-4 px-3">
            <div class="container-panel py-5 mt-2 pl-md-4 text-center fadeup text-md-left">
                <h3 class="w-100">Why choose us?</h3>
                <p>At BioHazard, we specialize in decontamination cleaning, biohazard cleaning, mould removal, commercial cleaning, and construction site cleanups. Our certified team uses state-of-the-art equipment to deliver safe, efficient, and thorough services.<br><br>We prioritize safety, customer satisfaction, and environmental responsibility. Available 24/7 for emergencies, we ensure peace of mind with our reliable and professional solutions. Choose us for expert care and quality results. Contact us today!</p>
                <a class="mt-4 btn btn-primary d-flex justify-content-center mx-auto mx-md-0 w-75 w-md-50 align-items-center mt-2 borderround" href="contact/">Get In Touch <i class="fa-solid fa-arrow-right ml-2"></i></a>        
            </div>
        </div>
    </div>



    </article>

    <?php

    get_footer();

    ?>