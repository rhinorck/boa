<?php
/**
 * Template Name: Itinerary Page Template
 *
 * Template for displaying trip itinerary details
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
                        <!-- Slider and Trip Search -->
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h2>Slider Here</h2> </div>
                            <div class="col-sm-12 col-md-4">
                                <h2>BOOK NOW!</h2>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                                  </div>
                                
                        </div>
                        <!-- Trip Info -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <h2>Trip Summary</h2>
                                <p>Bangladesh is a country I'vre never been to but it sounds interesting to visit. </p>
                                <h3>Overview</h3>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                                <h3>Trip Itinerary</h3>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                                <h3>Trip Notes</h3>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                                <h3>Visas</h3>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                                <h3>Before You Go</h3>
                                <p>There really aren’t many ‘overlanding firsts’ left in our well-trodden globe, but this is one! Come and join one of the privileged few and become part of overland history! </p>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="trip-info">
                                    
                                    
                                </div>
                                <main class="site-main" id="main">
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
                                </main>
                                <!-- #main -->
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