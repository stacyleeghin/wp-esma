<!-- <section id="footer2">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Stacyleeghin</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
		</section> -->

		<!-- Scripts -->
			<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/browser.min.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/util.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/mdb.min.js"></script>
		
			<!-- Swiper JS -->
  			<script src="√/assets/swiper/swiper-bundle.min.js"></script>
			<script>
				var swiper = new Swiper('.swiper-container', {
				  speed: 600,
				  parallax: true,
				  pagination: {
					el: '.swiper-pagination',
					clickable: true,
				  },
				  navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				  },
				});
			  </script>
            <?php wp_footer()?>
		

	</body>