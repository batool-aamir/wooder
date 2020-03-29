<?php
get_header();
?>

<div id="main-content" class="section-wooder-list">
	<div class="container">
		<div id="content-area" class="clearfix">
		<?php
		while ( have_posts() ): the_post(); 
		$sku = get_field("sku");
		$price = get_field("price");
		$brand = get_field("brand");
		$size = get_field("size");
		$weight = get_field("weight");
		$color = get_field("color");
		/*var_dump($sku);die;*/
		?>

		<article id="post-<?php the_ID(); ?>">
		<h2 class="title">
                        <?php the_title(); ?>
                       </h2>
			<div class="entry-content">
			<?php
				the_content();
			?>
			</div> <!-- .entry-content -->

			<div class="product-details">
				<table>
				<caption>PRODUCT DETAILS</caption>
					<thead>
					</thead>
					<tbody>
						<tr class ="pr-details">
							<td>SKU</td>
							<td><?php echo $sku; ?></td>
						</tr>
						<tr class ="pr-details">
							<td>Price</td>
							<td><?php echo $price; ?></td>
						</tr>
						<tr class ="pr-details">
							<td>Brand</td>
							<td><?php echo $brand; ?></td>
						</tr>
						<tr class ="pr-details">
							<td>Color</td>
							<td><?php echo $color; ?></td>
						</tr>
						<tr class ="pr-details">
							<td>Size</td>
							<td><?php echo $size; ?></td>
						</tr>
						<tr class ="pr-details">
							<td>Weight</td>
							<td><?php echo $weight; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</article> <!-- .et_pb_post -->

		<?php endwhile; ?>
		</div>
	</div>
</div>

<div class="single-page-forn">
        <?php echo do_shortcode('[contact-form-7 id="223" title="single page form"]'); ?>
    </div>

<?php
get_footer();
?>
