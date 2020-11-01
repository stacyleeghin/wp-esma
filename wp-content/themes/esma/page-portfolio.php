<?php get_header()?>
    <section id="two" class="main style2 service">
         <!-- content-index.php -->
         <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'project');
            } // end while
        ?>
        <div class="container">
			<div class="col-6 col-12-medium taxonomy">
				<header class="major">
                    <h2><?php the_title()?></h2>
				</header>
				<p><?php the_content()?></p>
				
                <!-- ----Portfolio Controller/buttons--------- --> -->

                <div class= "controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
                    <a class="filter active btn btn-common" data-filter="all">
                        all
                    </a>
                    <?php 
                        $terms = get_terms('type',array('hide_empty' => false));
                        foreach($terms as $term){
                            echo'<a class="filter btn btn-common" data-filter=".'.$term->slug.'">'.$term->name.'</a>';
                        }
                    ?>


                </div>
        
            <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay=".8s">
<!-- 
            --------------Projects go here------------------ -->
           
            <?php

                $args = array ('post_type' => 'project');
                //The Query
                $the_query = new WP_Query( $args);

                //The Loop
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('partials/content', 'project');

                }
                // -----Restore orginal Post Data-----------
                wp_reset_postdata();
            
            ?>
        </div>
    </section>
<?php get_footer()?>