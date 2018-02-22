<?php 
	// Get Custom Field Info
	
	
?>
<!-- HEADER-SLIDER
================================================================================= -->
<header>
	<div id="header-slider" class=" carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
			<?php 
				$count = 0;
				if ( have_rows('slider_images') ){
					while ( have_rows('slider_images') ): the_row();
						//Slider Variables
						$slider_image = get_sub_field('slider_image');
						$slider_image_title = get_sub_field('slider_image_title');
						$slider_image_caption = get_sub_field('slider_image_caption');
						$slider_image_link = get_sub_field('slide_link');
						$slide_link = get_term_link($slider_image_link);
			?>
						<!-- Slide  - Set the background image for this slide in the line below -->
						<div class="header-slider carousel-item <?php if (0 == $count){echo 'active';} ?> " style="background-image: url('<?php echo $slider_image['url']; ?>')">
							<div class="carousel-caption d-md-block text-left">
								<h3 class="display-4 header-title"><strong><a href="<?php echo $slide_link; ?>" class="text-primary bg-white featured-carousel"><?php echo $slider_image_title; ?></a></strong></h3>
								<p class="lead header-subtitle" ><a href="<?php echo $slide_link; ?>" class="text-primary bg-white featured-carousel"><?php echo $slider_image_caption; ?></a></p>
							</div>
						</div>  
			<?php 
						$count++;
					endwhile;
				}
			?>
			
		</div>
	</div>
</header>
<!-- end HERO SLIDER -->