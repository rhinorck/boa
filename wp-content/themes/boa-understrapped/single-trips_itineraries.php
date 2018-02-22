<?php
/**
 * Template Name: Single Trip Page
 *
 * Template for displaying trip details
 *
 * @package understrap-custom
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>
    <div class="wrapper" id="single-wrapper">
        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
            <div class="row">
                <!-- Do the left sidebar check -->
                <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
                    <div class="container">
                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                <div class="entry-meta">
                                    <?php understrap_posted_on(); ?>
                                </div>
                                <!-- .entry-meta -->
                        </header>
                        <!-- .entry-header -->
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h2>Slider Here</h2> </div>
                            <div class="col-sm-12 col-md-4">
                                <h2>BOOK NOW!</h2>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                                <form role="form" class="clearfix" enctype="multipart/form-data" action="<?php bloginfo('template_directory'); ?>/includes/submit_form.php" id="book-a-room" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="roomType" class="control-label">
                                                <h6>Select Room</h6></label>
												<?php $rooms_available =  new WP_Query( array( 'post_type' => 'room_type', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                                                <select class="form-control" id="room_type" name="room_type" required>
                                                    <option value="<?php the_title(); ?>" selected>
                                                        <?php the_title(); ?>
                                                    </option>
                                                    <?php while ($rooms_available->have_posts()) : $rooms_available->the_post(); ?>
                                                        <option value="<?php the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </option>
                                                        <?php endwhile; wp_reset_query(); ?>
                                                </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="num_of_guests" class="control-label">
                                                <h6>Guests</h6></label>
                                            <input type="number" class="form-control " id="num_of_guests" name="num_of_guests" value="<?php echo esc_attr($_POST['num_of_guests']); ?>" min="1" max="8" step="1" placeholder='2' onfocus="this.placeholder = ''" onblur="this.placeholder = '2'" required> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="check_in_date" class="control-label ">
                                                <h6 class="">Check In</h6></label>
                                            <div class="input-group date" id="">
                                                <input type="text" class="form-control" id="check_in_date" name="check_in_date" placeholder='Check In Date' onfocus="this.placeholder = ''" onblur="this.placeholder = 'dd-mm-yyyy'" value="<?php echo esc_attr($_POST['check_in_date']); ?>" required><span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span> </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="check_out_date" class="control-label">
                                                <h6>Check Out</h6></label>
                                            <div class="input-group date" id="">
                                                <input type="text" class="form-control " id="check_out_date" name="check_out_date" placeholder='Check Out Date' onfocus="this.placeholder = ''" onblur="this.placeholder = 'dd-mm-yyyy'" required value="<?php echo esc_attr($_POST['check_out_date']); ?>"><span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group  ">
                                            <label for="first_name" class="control-label ">
                                                <h6>First Name</h6></label>
                                            <input type="text" class="form-control " id="first_name" name="first_name" value="<?php echo esc_attr($_POST['first_name']); ?>" required> </div>
                                        <div class="col-sm-6 form-group ">
                                            <label for="last_name" class="control-label">
                                                <h6>Last Name</h6></label>
                                            <input type="text" class="form-control " id="last_name" name="last_name" value="<?php echo esc_attr($_POST['last_name']); ?>" required> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group ">
                                            <label for="email" class="control-label">
                                                <h6>Email</h6></label>
                                            <input type="email" class="form-control " id="email" name="email" value="<?php echo esc_attr($_POST['email']); ?>" required> </div>
                                        <div class="col-sm-6 form-group ">
                                            <label for="phone" class="control-label">
                                                <h6>Phone <span class="form-option">(Optional)</span></h6></label>
                                            <input type="tel" class="form-control " id="phone" name="phone" value="<?php echo esc_attr($_POST['phone']); ?>"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="control-label">
                                            <h6>Message <span class="form-option">(Optional)</span></h6></label>
                                        <textarea type="text" class="form-control" id="message" name="message" required>
                                            <?php echo esc_attr($_POST['message']); ?>
                                        </textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group g-recaptcha" data-sitekey="6Lcxfg4UAAAAACYlUQwlL70FIwQbN90lNqOKMe7E"></div>
                                        <div class="col-sm-6 form-group">
                                            <button type="submit" class="btn book-now book-now-form pull-right" id="book-now" name="book-now">BOOK</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Trip Info -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <h2>Trip Summary</h2>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="trip-info"> </div>
                                <main class="site-main" id="main">
                                    <ul class="book-itinerary-link">
                                        <a href="#" target="_self" class="book-now-text-link">
                                            <li>BOOK NOW!</li>
                                        </a>
                                        <a href="#" target="_self" class="book-now-text-link">
                                            <li>FULL ITINERARY</li>
                                        </a>
                                    </ul>
                                    <?php while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'loop-templates/content', 'trip' ); ?>
                                            <?php understrap_post_nav(); ?>
                                                <?php
                                                // If comments are open or we have at least one comment, load up the comment template.
                                                if ( comments_open() || get_comments_number() ) :
                                                    comments_template();
                                                endif;
                                                ?>
                                                    <?php endwhile; // end of the loop. ?>
                                                        <ul class="book-itinerary-link">
                                                            <a href="#" target="_self" class="book-now-text-link">
                                                                <li>BOOK NOW!</li>
                                                            </a>
                                                            <a href="#" target="_self" class="book-now-text-link">
                                                                <li>FULL ITINERARY</li>
                                                            </a>
                                                        </ul>
                                </main>
                                <!-- #main -->
								<div class="row">
                            <div class="col-sm-12 ">
                                <h2>FULL ITINERARY</h2>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                            </div>
                            </div>
                            </div>
                        </div>
						
                        </div>
                        
                        <!-- similar Trips -->
                        <div class="row">
                            <div class="col-sm">
                                <h2>Similar Trips</h2>
                                <div class="row">
                                    <div class="col">
                                        <h3>He Say/She Say</h3></div>
                                    <div class="col">
                                        <h3>He Say/She Say</h3></div>
                                    <div class="col">
                                        <h3>He Say/She Say</h3></div>
                                </div>
                            </div>
                        </div>
                        <!-- Tour Feedback -->
                        <div class="row">
                            <div class="col-sm">
                                <h2>What Others Say</h2>
                                <div class="row">
                                    <div class="col">
                                        <h3>OMG!</h3></div>
                                    <div class="col">
                                        <h3>I Would Do This Again</h3></div>
                                    <div class="col">
                                        <h3>Out Of This World!</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container end -->
            </div>
            <!-- #primary -->
            <!-- Do the right sidebar check -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
        </div>
        <!-- .row -->
    </div>
    <!-- Container end -->
    </div>
    <!-- Wrapper end -->
    <?php get_footer(); ?>