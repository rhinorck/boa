<?php
	/**
		* Template Name: Homepage
		*
		* Template for displaying the homepage
		*
		* @package understrap-custom
	*/
	
	// Get Custom Field Info
	
	get_header( 'homepage' );
while ( have_posts() ) : the_post();  ?>
<div class="">
    <!-- Slider and Trip Search -->
	<section class="main-section">
		<div class="row">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
			<div class="col-sm-12 trip-search text-center">
				<h2 class="title">Find Your Trip </h2>
				<div><?php echo do_shortcode( '[searchandfilter taxonomies="category,post_tag"]' ); ?></div>	
			</div>
			
		</div>
	</div>
</section>
<section class="other-section">
	<!-- Featured Trips -->
	<div class="row">
		
		<?php 
			$count = 0;
			if ( have_rows('featured_trips') ){
				while ( have_rows('featured_trips') ): the_row();
				$featured_trip = get_sub_field('featured_trip');
			?>
			<div class="col-sm-6">
				<div class="card">
					<img class="card-img-top img-fluid" src="<?php echo the_field('trip_image_1',$featured_trip->ID); ?>" alt="<?php echo $featured_trip->post_title;   ?>">
					<div class="trip-info">
						<ul>
							<li>Code:</li>
							<li>Departs On:</li>
							<li>Destinations:</li>
							<li>Group Size:</li>
							<li>Price:</li>
							<li>Kitty:</li>
						</ul>
					</div>
					<div class="card-body">
						<h4 class="card-title"><?php echo $featured_trip->post_title; ?></h4>
						<div class="card-text">
							<?php the_field('trip_description',$featured_trip->ID); ?>
						</div>
						<p class="card-text">
							<?php var_dump($featured_trip); ?>
						</p>
						<div>
						<a href="<?php the_permalink($featured_trip->ID) ; ?>" class="btn btn-primary">VIEW & BOOK TRIP </a></div>
					</div>
				</div>
			</div>
			<?php 
				endwhile;
			}
		?>
		
	</div>
	
	<?php 
		$featured_trips = new WP_Query( array( 'post_type' => 'trips_itineraries', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => 3));
		//$column_count = 0;
		while ($featured_trips->have_posts() ) : $featured_trips->the_post(); 
		if ($column_count % 3 == 0) { ?>
		<div class="row">
		<?php } ?>
		<div class="col-sm-12 col-md-4">
			<div class="card">
				<img class="card-img-top img-fluid" src="<?php the_field('trip_image_1'); ?>" alt="<?php   ?>">
				<div class="trip-info">
					<ul>
						<li>Code:</li>
						<li>Departs On:</li>
						<li>Destinations:</li>
						<li>Group Size:</li>
						<li>Price:</li>
						<li>Kitty:</li>
					</ul>
				</div>
				<div class="card-body">
					<h4 class="card-title"><?php the_title(); ?></h4>
					<p class="card-text">
						<?php the_field('trip_overview'); ?>
					</p>
					<div>
					<a href="<?php the_permalink() ; ?>" class="btn btn-primary">VIEW & BOOK TRIP </a></div>
				</div>
			</div>
			
		</div>
		<?php 
			$column_count++;
			if ($column_count % 3 == 0) { ?>
		</div>
		<?php }
		
	endwhile; wp_reset_query(); ?>
	
</div>
</section>
<!-- end Featured Trips -->
<section class="other-other-section">
	<!-- Feedback -->
	<?php 
		$feedback = new WP_Query( array( 'post_type' => 'reviews', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => 3));
		$column_count = 0;
		while ($feedback->have_posts() ) : $feedback->the_post(); 
		if ($column_count % 3 == 0) { ?>
		<div class="row">
		<?php } ?>
		<div class="col-sm-12 col-md-4">
			<div class="card card-nav-tabs">
				<div class="card-header <?php if ($column_count == 1){ echo 'card-header-rose'; } else { echo 'card-header-success';}  ?>">
					<h4 class="title"><?php the_title(); ?></h4>
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<p><?php the_field('review'); ?></p>
						<footer class="blockquote-footer"><?php the_field('review_from'); ?><a class="text-primary" href="<?php the_field('reviewer_link'); ?>" target="_blank"> <cite title="Source Title"><i class="material-icon">location_on</i></cite></a></footer>
					</blockquote>
				</div>
			</div>
			
		</div>
		<?php 
			$column_count++;
			if ($column_count % 3 == 0) { ?>
		</div>
		<?php }
		
	endwhile; wp_reset_query(); ?>
	<!-- end Feedback -->
</section>
<section class="other-section">
	<!-- Blog -->
	<div class="row">
		<div class="col-sm">
			<h2>Trip Tales</h2>
			<div class="row">
				<div class="col">
				<h3>Getting Ready For Your Trip</h3></div>
				<div class="col">
				<h3>Do This, Try Not To Do That</h3></div>
				<div class="col">
				<h3>Places Not To Miss</h3></div>
			</div>
		</div>
	</div>
</section>
</div><!-- container end -->
<?php
	endwhile; // End of the loop.
	get_footer();									