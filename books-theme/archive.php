<?php
get_header();
?>
<article class="container my-5 d-flex flex-column ">
    <?php
        if(have_posts()){
            while( have_posts()){
                the_post();
                get_template_part("template-parts/content","archive");
            }
        }
    ?>
</article>
<?php
get_footer();
?>