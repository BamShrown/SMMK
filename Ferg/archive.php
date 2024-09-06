
<?php

get_header();

?>


    <article class="content px-3 py-5 p-md-5">
    
    <?php

    if(have_posts()) {

        while(have_posts()) {

            the_post();
            // First parameter is file path, second parameter is the type
            get_template_part('template-parts/content', 'archive');
            // For example, if in template-parts I had a file called content-gallery.php, then the last parameter would be 'gallery' instead of article


        }

    }

    ?>
    

    </article>

    <?php

    get_footer();

    ?>