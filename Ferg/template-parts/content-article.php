<div class="container">
    <header class="content-header">
        <!-- To get the date -->
            <div class="meta mb-3"><span class="date"><?php the_date(); ?></span>
        <!-- To pull tags in -->
        <!-- First parameter is before tags, second is in between, third is last -->
        <?php
            the_tags('<span class="tag"><i class="fa fa-tag mr-1"></i> ', '</span><span class="tag"><i class="fa fa-tag mr-1"></i> ', '</span>');
        ?>
        <!-- To find comments -->
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a></span>
        </div>
    </header>
<?php
the_content();
?>
</div>

<?php
comments_template();
?>