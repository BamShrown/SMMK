<?php
/*
Template Name: Contact Page
*/
?>

<?php

get_header();

$image_id1 = get_field('bannerimage');
$image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


?>

    <div class="w-100 herocontainer mt-5 pt-5 fadeup" style="background-image: url('<?php echo esc_url($image_url1); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-5" >
                        <h1 class="text-center text-md-left fadeup">Contact Us</h1>
                    </div>
                </div>
            </div>
    </div>
    <article class="content px-3 py-5 p-md-5">
    
    <?php

    // if(have_posts()) {

    //     while(have_posts()) {

    //         the_post();
    //         // First parameter is file path, second parameter is the type
    //         get_template_part('template-parts/content', 'page');
    //         // For example, if in template-parts I had a file called content-gallery.php, then the last parameter would be 'gallery' instead of article


    //     }

    // }

    ?>

    <div class="container mt-3 fadeup">
        <div class="row contactusicons">


            <div class="col-12 col-md-6 fadeup">
                <h3 class="mb-4 text-center text-md-left">Contact Details</h3>
                <a href="tel: 0333 7723605" class="d-flex justify-content-start align-items-center">
                    <div class="iconcircle">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <p class="m-0 pl-3"><?php the_field('contact_number'); ?></p>
                </a>
                <a href="mailto: accounts@seenandheard.co.uk" class="d-flex justify-content-start align-items-center mt-4">
                    <div class="iconcircle">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <p class="m-0 pl-3"><?php the_field('contact_email'); ?></p>
                </a>
                <?php if (the_field('facebook') != '') { ?>
                <a target="_BLANK" href="<?php the_field('facebook'); ?>" class="d-flex justify-content-start align-items-center mt-4">
                    <div class="iconcircle">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                    <p class="m-0 pl-3"><?php the_field('facebook'); ?></p>
                </a>
                <?php } ?>
                <div class="d-flex justify-content-start align-items-center mt-4">
                    <div class="iconcircle">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <p class="m-0 pl-3"><?php the_field('address'); ?><br>
                                        <?php the_field('address_line_2'); ?></p>
                </div>
                <!-- <h3 class="mb-4 mt-5 text-center text-md-left">Licenses</h3>
                <p class="text-center text-md-left">Click on each to view our licenses</p>
                <a href="=" class="d-flex justify-content-start align-items-center">
                    <div class="iconcircle">
                        <i class="fa-solid fa-file"></i>
                    </div>
                    <p class="m-0 pl-3">License One</p>
                </a>
                <a href="=" class="d-flex justify-content-start align-items-center mt-4">
                    <div class="iconcircle">
                        <i class="fa-solid fa-file"></i>
                    </div>
                    <p class="m-0 pl-3">License Two</p>
                </a> -->
            </div>

            <div class="col-12 col-md-6 mt-5 mt-md-0 contactformdiv fadeup">
                <h3 class="mb-4 text-center text-md-left">Get In Touch</h3>
                <?php
                if(have_posts()) {

                    while(have_posts()) {

                        the_post();
                        the_content();

                    
                    }

                }
                ?>
                </div>
            
        </div>
    </div>

    </article>

    <?php

    get_footer();

    ?>