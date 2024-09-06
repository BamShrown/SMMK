<div class="container">


    <div class="post mb-5">
        <div class="media">
            
        <!-- Pulling in blog imgs, the parameter for the function is the size of img, set in wordpress -->
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">

            <!-- Pulling in rest of content, title, date, amount of comments, the excerpt and the link -->
            <div class="media-body">
                <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="meta mb-1"><span class="date"><?php the_date(); ?></span>
                <span class="comment"><a href="#"><?php comments_number(); ?></a></span></div>
                <div class="intro"><?php the_excerpt(); ?></div>
                <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
            </div>
        </div>
    </div>


</div>
