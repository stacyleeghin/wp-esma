<div class="container menu">
	<div class="top-menu-nav">
					<a href="home.html"><i class="fas fa-times"></i></a>
	</div>
	<!-- <ul class= "menupage">

					<li><h3><?php the_field('title1')?></h3></li>
					<li><h3><?php the_field('title2')?></h3></li>
					<li><h3><?php the_field('title3')?></h3></li>

                  
	</ul>	 -->


    <?php wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'container' => 'ul',
        'menu_class' => 'menupage'
        ) ); ?>	
</div>
          