<?php
/*
 * Template Name: Giovanni Panté HP
 */

get_header('giovannipante'); // This fxn gets the header.php file and renders it ?>

	<section class='first'>
	    <div class='avatar'>
	        <p>
	            <?php echo html_entity_decode(get_bloginfo('description')); // Display the blog description, found in General Settings ?>
	        </p>
	    </div>
	</section>
	<section>
		<div id="content" role="main">
            <?php
                $args = array( 'post_type'=>'sezione');
                $loop = new WP_Query( $args );

                // Start the loop for your custom query
                if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                ?>
                <div class="section">
                    <h2 class="title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php

                endwhile;
                endif;
            ?>

	        <div class="section">
	            <div class="title">
                    <h2>Selected works</h2>
                </div>
                <div class="flex-grid">
                    <?php
                        $args = array( 'post_type'=>'progetto');
                        $loop = new WP_Query( $args );

                        // Start the loop for your custom query
                        if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();
                    ?>

                    <div class="col">
                        <div class="project">
                            <h3 class="title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="thumb">
                                <?php
                                $image = get_field('images');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="metadata">
                                <p class="tags"><?php the_field('tags'); ?></p>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </div>
	        </div>

	        <div class='section'>
	            <div class="title">
                    <h2>Contacts</h2>
                </div>
	            <?php
                    $args = array( 'post_type'=>'social');
                    $loop = new WP_Query( $args );

                    // Start the loop for your custom query
                    if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                    ?>
                    <div>
                        <a href="<?php echo wp_strip_all_tags( get_the_content() ); ?>" target="_blank">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <?php

                    endwhile;
                    endif;
                ?>

                <?php
                    $args = array( 'post_type'=>'contatti');
                    $loop = new WP_Query( $args );

                    // Start the loop for your custom query
                    if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                    ?>
                    <div>
                        <a href="<?php echo wp_strip_all_tags( get_the_content() ); ?>" target="_blank">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <?php

                    endwhile;
                    endif;
                ?>
	        </div>
		</div><!-- #content .site-content -->
	</section><!-- #primary .content-area -->
    <div class="mouse"></div>
<?php get_footer('giovannipante'); // This fxn gets the footer.php file and renders it ?>

