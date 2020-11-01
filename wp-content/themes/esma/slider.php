<section id="header"> 
    <div class="inner">
        <div class="swiper-container">
			<div class="swiper-wrapper">
                <!-- ------------list of slides goes here--------------			 -->
                <?php

                    $args = array('post_type' => 'slide');
                    // The Query
                    $the_query = new WP_Query( $args );

                    global $active_class;  
                    $active_class = 'active';

                    // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('partials/content', 'slide');

                        $active_class = '';
                    }

                    /* Restore original Post Data */
                    wp_reset_postdata();

                ?>

			</div>
        </div>	
							<!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>
				
			 
</section>
			