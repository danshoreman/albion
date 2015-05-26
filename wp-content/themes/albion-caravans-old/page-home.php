<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="home-carousel">
		<div class="row">
			<div class="small-12 columns">
				<!--
<?php // if( have_rows('hompage_carousel') ): ?>
				
				<ul class="bxslider">
		
				<?php // while( have_rows('hompage_carousel') ): the_row();
				
					// $image = wp_get_attachment_image_src(get_sub_field('carousel_image'), 'carouselImage'); 
					// $carouselText = get_sub_field('carousel_text');
					
				?>
				
				<li class="slide">
					<div class="row">
						<div class="small-12 large-6 columns">
							<?php //echo $carouselText; ?>
						</div>
						<div class="small-12 large-6 columns" style="background: url(<?php echo $image[0]; ?>) center right no-repeat">
							<!-- <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('sidebar_image')) ?>" class="" /> -->
				<!--</div>
					</div>
				</li>
				
				<?php // endwhile; ?>
				
				</ul>
				
				<?php // endif; ?>
-->
				
				<ul class="bxslider">
				
					<?php if( have_rows('homepage_carousel_layout_01') ): ?>
					
					<?php while( have_rows('homepage_carousel_layout_01') ): the_row();
				
					$image = wp_get_attachment_image_src(get_sub_field('carousel_image_01'), 'carouselImageOne'); 
					$carouselText = get_sub_field('carousel_text_01');
					
					?>
				
					<li>
						<div class="carouselCopy">
							<!--
<h1>Welcome to<br>
							Albion Caravans</h1>
							
							<p>See our latest caravans <a href="#latest">below</a> or
							view the full range</p>
						
							<a href="/shop/" class="arrow-btn">View all caravans</a>
-->
							<?php echo $carouselText; ?>
						</div>
						<div class="carouselImage">
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/library/images/home/caravan.png" alt="" class="image" /> -->
							<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('carousel_image_01')) ?>" class="" />
						</div>
					</li>
					
					<?php endwhile; ?>
					
					<?php endif; ?>
					<!--
<li>
						<div class="carouselCopy">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/home/calor.png" alt="" class="calor-logo" />
							<h2>We stock Calor Gas</h2>
							
							<p>Lorem ipsum dolor sit 
							amet, consectetur.</p>
						
							<a href="/calor-gas/" class="arrow-btn">View full range</a>
						</div>
						<div class="carouselImage">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/home/gas.png" alt="" class="image" />
						</div>
					</li>
-->
					
					<?php if( have_rows('homepage_carousel_layout_02') ): ?>
					
					<?php while( have_rows('homepage_carousel_layout_02') ): the_row();
				
					$image = wp_get_attachment_image_src(get_sub_field('carousel_image_02'), 'carouselImageTwo'); 
					$carouselText2 = get_sub_field('carousel_text_02');
					
					?>
					<li>
						<div class="fullImage" style="background: url(<?php echo $image[0]; ?>);">
							<div class="textBlock">
							<!--
<h3>All caravans at rear of building</h3>
								<p>Every caravan you see for sale 
								on this website is available to 
								view in our display area behind the 
								Reception and Accessory Shop.</p>
								<a href="/shop/" class="arrow-btn">View full range</a>
-->
							<?php echo $carouselText2; ?>
							</div>
						</div>
					</li>
					<?php endwhile; ?>
					
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="home-intro">
		<div class="row" data-equalizer>
			<div class="small-12 large-7 columns">
				<div class="home-content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="small-12 large-5 columns">
				<div class="home-callout">
					<?php the_field('homepage_callout'); ?>
				</div>
			</div>
		</div>
	</div>
		
	<div class="home-buy">		
		<div class="row" data-equalizer>
			<div class="small-12 medium-6 columns">
				<div class="we-buy" data-equalizer-watch>
					<?php the_field('homepage_we_buy'); ?>
				</div>
			</div>
			<div class="small-12 medium-6 columns">
				<div class="coming-soon" data-equalizer-watch>
					<?php the_field('homepage_coming_soon'); ?>
				</div>
			</div>
		</div>
	</div>
				
				
		<div id="latest" class="row">
				<div class="small-12 columns">
				<section class="entry-content">
					
					<h3 class="latestHeader">Latest Caravans</h3>
					
					  <div class="row" data-equalizer>
				
			        <?php
			            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
			            $loop = new WP_Query( $args );
			            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			
                  <div class="small-12 medium-6 large-3 columns">
                  	<div class="product-list" data-equalizer-watch>
                  		<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  />'; ?>
												<div class="product-copy">
													<h4><?php the_title(); ?></h4>
													<span class="price"><?php echo $product->get_price_html(); ?></span>
                      	  <span class="view">View</span>
												</div>
											</a>
                    </div>
                    <?php /* woocommerce_template_loop_add_to_cart( $loop->post, $product ); */ ?>
                  </div>
			        <?php endwhile; ?>
			        <?php wp_reset_query(); ?>
				
				    </div>
				
				</section>
				
			
			<?php endwhile; ?>
			
			<?php else : ?>
			
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
	</div>
	
	<div class="lower-panels">
		<div class="row" data-equalizer>
			<div class="small-12 large-6 columns">
				<div class="accessories" data-equalizer-watch style="background-image: url(<?php the_field('homepage_accessories_image'); ?>);">
					<?php the_field('homepage_accessories'); ?>
				</div>
			</div>
			<div class="small-12 large-6 columns">
				<div class="help" data-equalizer-watch style="background-image: url(<?php the_field('homepage_help_image'); ?>);">
					<?php the_field('homepage_help'); ?>
				</div>
			</div>
		</div>
	</div>
			
		

<?php get_footer();