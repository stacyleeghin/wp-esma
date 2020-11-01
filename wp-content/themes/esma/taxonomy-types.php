<?php get_header()?>
    <section id="two" class="main style2 service">
    <?php
       $term = get_queried_object();
       echo '<h1>'.$term->name.'</h1>';
  
   ?>
         <!-- content-index.php -->
         <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'project');
            } // end while
        ?>
        
    </section>
<?php get_footer()?>