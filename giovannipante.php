<?php
/*
 * Template Name: Giovanni Panté HP
 */

get_header('giovannipante'); // This fxn gets the header.php file and renders it ?>
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
                                <? if( has_post_thumbnail( $post_id ) ): ?>
                                    <img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                <? endif; ?>
                            </div>
                            <div class="text">
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
		</div><!-- #content .site-content -->
	</section><!-- #primary .content-area -->
<?php get_footer('giovannipante'); // This fxn gets the footer.php file and renders it ?>
