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
                            <?php $galleryId = get_field('galleryId'); ?>
                            <?php echo do_shortcode('[sp_wpcarousel id="'.$galleryId.'"]'); ?>
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
                <div class="flex-grid">
                    <div class="col">
                        <ul class="socials">
                            <?php
                                $args = array( 'post_type'=>'social');
                                $loop = new WP_Query( $args );

                                // Start the loop for your custom query
                                if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                                ?>
                                <li>
                                    <a href="<?php echo wp_strip_all_tags( get_the_content() ); ?>" target="_blank">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php

                                endwhile;
                                endif;
                            ?>
                        </ul>
                    </div>

                    <div class="col">
                        <ul class="contacts">
                            <?php
                                $args = array( 'post_type'=>'contatti');
                                $loop = new WP_Query( $args );

                                // Start the loop for your custom query
                                if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                                ?>
                                <li>
                                    <p><?php the_field('title'); ?></p>
                                    <a href="<?php echo wp_strip_all_tags( get_the_content() ); ?>" target="_blank">
                                        <?php the_field('link_label'); ?>
                                    </a>
                                </li>
                                <?php

                                endwhile;
                                endif;
                            ?>
                        </ul>
                    </div>
                </div>
	        </div>
		</div><!-- #content .site-content -->
	</section><!-- #primary .content-area -->
    <div class="mouse"></div>
<?php get_footer('giovannipante'); // This fxn gets the footer.php file and renders it ?>

