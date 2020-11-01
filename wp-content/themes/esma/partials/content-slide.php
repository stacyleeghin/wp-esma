
  <?php
        global $active_class;
        $link = get_field('url');
    ?> 
<div class="swiper-slide <?php echo $active_class?>">
    <div class="parallax-bg"  style="<?php the_field('photo')?>"data-swiper-parallax="-23%"></div>
    <div class="title" data-swiper-parallax="-300"><?php the_field('title')?></div>
    <div class="subtitle" data-swiper-parallax="-200"><?php the_field('subtitle')?></div>
    <div class="text" data-swiper-parallax="-100">
    <p> <?php the_field('summary')?></p>
</div>