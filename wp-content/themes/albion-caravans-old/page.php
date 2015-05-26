<?php get_header(); ?>

	<div class="row">
	
		<div class="small-12 medium-8 columns" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
			
				<section class="entry-content">

					<header class="article-header">

						<h2><?php the_title(); ?></h2>
						
						<?php if ( has_post_thumbnail()) : ?>
								<div class="featuredImage">
								<?php the_post_thumbnail(); ?>
								</div>
						<?php endif; ?>
						
						<?php if( have_rows('carousel_image') ): ?>
					
						<ul class="bxslider featuredSlider">
				
							<?php while( have_rows('carousel_image') ): the_row();
							
								$image = wp_get_attachment_image_src(get_sub_field('image_item'), 'featuredImage'); 
								$carouselText = get_sub_field('image_text');
								
							?>
							
							<li class="slide">
								<div class="featuredSlide">
									<?php if( !empty($carouselText) ):	?>
									<p><?php echo $carouselText; ?></p>
									<? endif; ?>
									<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('sidebar_image')) ?>" class="imageCarousel" />
								
								</div>
							</li>
							
							<?php endwhile; ?>
						
						</ul>
						
						<?php endif; ?>
	
					</header>

					<?php the_content(); ?>

				</section>

			</article>

			<?php endwhile; else : ?>

			<article class="post-not-found">
			
				<header class="not-found-header">
					
					<h2><?php _e( 'Nothing Found!' ); ?></h2>
				
				</header>
				
				<section class="not-found-content">
					
					<p><?php _e( 'Please check what you are looking for.' ); ?></p>
				
				</section>
			
			</article>

			<?php endif; ?>

		</div>

		<div class="small-12 medium-4 columns">
		
			<?php get_sidebar(); ?>
			
			<!--
<div class="sidebarWidget">
				<h3>Title</h3>
				<p>Some Text</p>
			</div>
			<div class="sidebarWidget">
				<h3>Title</h3>
				<p>Some Text</p>
			</div>
			<div class="sidebarWidget">
				<h3>Title</h3>
				<p>Some Text</p>
			</div>
-->
			
		</div>
	</div>

<?php get_footer(); ?>
