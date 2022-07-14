
<div class="container">
    <div class="mb-5">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" >
        <div class="intro">
            <h3 class="mb-1"><?php the_title();?></h3>
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">Read more&rarr;</a>
    </div>
</div>