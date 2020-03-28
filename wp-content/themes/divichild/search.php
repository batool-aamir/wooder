<?php get_header();
global $wp_query;
?>

<div id="main-content">
	<div class="container"> 
	<!-- hide line using css in before element. -->
		<div id="content-area" class="clearfix">
            <div class="searcharea">
                <?php get_search_form();
                $total_results = $wp_query->found_posts;
                echo "Result match count is ".$total_results;
                ?>
            <section id="primary" class="content-area">
                <?php
                    $s = get_search_query();
                    $args = array(
                                    's' =>$s
                                );
                        // The Query
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                            _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
                            while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                                    ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <p> <?php the_excerpt();?></p>
                                        </li>
                                    <?php
                            }
                        }else{
                            get_template_part('includes/no-results', 'Search' );
                            } ?>
            
        </section><!-- #primary .content-area -->
            </div>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->



<?php get_footer();
?>