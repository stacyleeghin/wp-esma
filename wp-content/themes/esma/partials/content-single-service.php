<?php get_header()?>

    <div class="col-3 col-12-medium">
        <span class="image fit"><img src="<?php the_field('photo')?>" alt="" /></span>
        <h3><?php the_field('title')?></h3>   
        <p> <?php the_field('summary')?></p>

       
		 <ul class="actions special">
			<li><a href="animalshelter.html" class="button">More</a></li>
		</ul>

    </div>
    
<?php get_footer()?>

						