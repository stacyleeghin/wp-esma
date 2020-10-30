<?php get_header()?>


    <section id="two" class="main style2 service">
         <!-- content-index.php -->
         <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'gallery');
            } // end while
        ?>
    </section>
<?php get_footer()?>