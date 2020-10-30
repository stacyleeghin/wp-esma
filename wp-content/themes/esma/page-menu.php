<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Photon by HTML5 UP</title>
		
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/noscript.css" /></noscript>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custom-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <?php wp_head()?>
</head>
<body>



    <section id="two" class="main style2 service">
         <!-- content-index.php -->
         <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'menu');
            } // end while
        ?>
    </section>
<?php get_footer()?>