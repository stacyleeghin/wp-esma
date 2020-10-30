<?php get_header()?>

    <div class="col-3 col-12-medium">
        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'standard');
            } // end while
            //need to add 'get_except'php and button for more php usually for blogs
        ?>

    </div>
<?php get_footer()?>