<?php
/*
 * Template Name: Giovanni Panté HP
 */

get_header('giovannipante'); // This fxn gets the header.php file and renders it ?>
	<section>
		<div id="content" role="main">
            <div>
                <?php
                    $args = array( 'post_type'=>'sezione');
                    $loop = new WP_Query( $args );

                    // Start the loop for your custom query
                    if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                    the_title();
                    the_content();

                    endwhile;
                    endif;
                ?>
            </div>

            <div class="flex-grid">
                <?php
                    $args = array( 'post_type'=>'progetto');
                    $loop = new WP_Query( $args );

                    // Start the loop for your custom query
                    if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col">
                    <?php
                        the_title();
                        the_content();
                    ?>
                    </div>
                    <?php

                    endwhile;
                    endif;
                ?>
            </div>
		</div><!-- #content .site-content -->
	</section><!-- #primary .content-area -->
<?php get_footer('giovannipante'); // This fxn gets the footer.php file and renders it ?>
