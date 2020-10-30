<?php get_header()?>


<?php
    $link = get_field('link');

?>
<section id="two" class="main style2 service">
        <div class="container">
            <div class="row gtr-150">
                <div class="col-6 col-12-medium">
                   <img class="leftphoto" src="<?php the_field('photo')?>" alt="">
                </div>
                <div class="col-6 col-12-medium">
                    <header class="major">
                        <h2><?php the_title()?></h2>
                        <h2><?php the_field('subtitle')?></h2>
                    </header>
                    
                    <p><?php the_field('summary')?></p>
                    <p><?php the_field('extra')?></p>

                    <?php if ($link): ?>
                    <p><a href="<?php echo $link['url']?>"><?php echo $link['title']?></a></p>
                    <?php endif; ?>
           

                   
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>

<!-- <div class="container">
            <div class="row gtr-150">
                <div class="col-6 col-12-medium">
                   <img class="leftphoto" src="<?php echo get_template_directory_uri()?>/images/support2.jpeg" alt="">
                </div>
                <div class="col-6 col-12-medium">
                    <header class="major">
                        <h2><?php the_title()?></h2>
                    </header>
                    <div>
                        <?php the_content()?>
                    </div>
                    
                </div>
            </div>
        </div> -->
