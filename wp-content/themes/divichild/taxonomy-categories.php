<?php get_header();?>
<div id="main-content" class="section-wooder-list">
	<div class="container">
		<div id="content-area" class="clearfix">
        <?php
            if(have_posts()) :?>
            <div class="row">
                <?php while(have_posts()) : the_post(); ?> 
                    <div class="two-col">
                       <h2 class="title">
                        <?php the_title(); ?>
                       </h2>
                        <div class="content">
                        <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink()?>" class="read-more">Read More</a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>