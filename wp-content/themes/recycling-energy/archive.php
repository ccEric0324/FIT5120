<?php
/**
 * The template for displaying archive pages
 *
 * @subpackage Recycling Energy
 * @since 1.0
 */

get_header(); ?>

<?php
	$recycling_energy_post_sidebar = get_theme_mod( 'recycling_energy_post_sidebar' );
	if ( 'false' == $recycling_energy_post_sidebar ) {
	$recycling_energy_column = 'col-lg-12 col-md-12';
	} else { 
	$recycling_energy_column = 'col-lg-8 col-md-8';
	}
?>

<main id="content" class="mt-5">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title"><span>', '</span></h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
		<?php endif; ?>

		<div class="content-area">
			<div id="main" class="site-main" role="main">
		    	<div class="row m-0">	    		
			        <div class="content_area <?php echo esc_html( $recycling_energy_column ); ?>">
				    	<section id="post_section">
				    		<div class="row">
								<?php
									if ( have_posts() ) : ?>
									<?php
									while ( have_posts() ) : the_post();
										
										$recycling_energy_post_option = get_theme_mod( 'recycling_energy_post_option','simple_post');
										if($recycling_energy_post_option == 'simple_post'){ 

											get_template_part( 'template-parts/post/content' );

										}else if($recycling_energy_post_option == 'grid_post'){

											get_template_part( 'template-parts/post/grid-content' );
										}

									endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif; 
								?>
							</div>
							<div class="navigation">
				                <?php
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'recycling-energy' ),
				                        'next_text'          => __( 'Next page', 'recycling-energy' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'recycling-energy' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<?php if ( 'false' != $recycling_energy_post_sidebar ) {?>
						<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
					<?php } ?>
				</div>		
			</div>
		</div>
	</div>
</main>

<?php get_footer();