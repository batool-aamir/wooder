<?php get_header(); ?>

<div id="main-content">
	<div class="container"> 
	<!-- hide line using css in before element. -->
		<div id="content-area" class="clearfix">
			<div class="row">
				<article id="post-0" <?php post_class( 'et_pb_post not_found abc' ); ?>>
					<?php get_template_part( 'includes/no-results', '404' ); ?>
				</article> <!-- .et_pb_post -->
				<div class="sitemap">
					<?php wp_list_pages(); ?>
				</div>
			</div> <!-- row end -->
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php
get_footer();
?>