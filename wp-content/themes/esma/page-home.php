<?php get_header()?>
    <!-- list of services -->
    <section id="two" class="main style1 special">
			<div class="container">
				<header class="major">
                    <h2><?php the_title()?></h2>
				</header>
				<p><?php the_content()?></p>
                
				<div class="row gtr-150">

                <?php

                    $args = array('post_type' => 'service');
                    // The Query
                    $the_query = new WP_Query( $args );

                    // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('partials/content', 'grid-single-service');
                }

                /* Restore original Post Data */
                wp_reset_postdata();

                ?>

					<!-- <div class="col-3 col-12-medium">
						<span class="image fit"><img src="images/services/animalshelter.jpg" alt="" /></span>
						<h3>Animal shelter for cats and dogs: </h3>
						<p> ESMA currently runs two facilities, a dog shelter  in Sakkara, Giza and a cat shelter in Shabramont, Giza  that together house  over 700 rescued cats and dogs. </p>
						<ul class="actions special">
							<li><a href="animalshelter.html" class="button">More</a></li>
						</ul>
					</div>
					<div class="col-3 col-12-medium">
						<span class="image fit"><img src="images/services/catpolicy.jpg" alt="" /></span>
						<h3>Support for the  animals of Giza: </h3>
						<p>The Egyptian revolution began in February 2011,  ESMA has been treating starving and sick horses in Nezlet Al-Samman, near the Giza pyramids.</p>
						<ul class="actions special">
							<li><a href="supportgiza.html" class="button">More</a></li>
						</ul>
					</div>
					<div class="col-3 col-12-medium">
						<span class="image fit"><img src="images/services/adoption.jpg" alt="" /></span>
						<h3>Adoption and Fostering campaigns: </h3>
						<p> ESMA actively works to find adoptive homes for our animals. The ESMA page on Facebook posts pictures of each rescued animal looking for a loving home.</p>
						<ul class="actions special">
							<li><a href="adoption.html" class="button">More</a></li>
						</ul>
					</div>
					<div class="col-3 col-12-medium">
						<span class="image fit"><img src="images/services/esma2.jpg" alt="" /></span>
						<h3>Policy, advocacy and awareness:</h3>
						<p> ESMA takes every opportunity to advocate for animals, whether through supporting the enforcement of animal welfare legislation in Egypt, .</p>
						<ul class="actions special">
							<li><a href="policy.html" class="button">More</a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</section>


<?php get_footer()?>