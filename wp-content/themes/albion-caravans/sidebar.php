<div id="mainSidebar" class="sidebar" role="complementary">
	
	<?php if ( is_active_sidebar( 'Main Sidebar' ) ) : ?>
	
		<?php /* dynamic_sidebar( 'main-sidebar' ); */ ?>
		
	<?php else : ?>
	
	<div class="no-widgets">
		
		<!-- <p><?php _e( 'Sidebar Content' );  ?></p> -->
		
		
		<?php if( have_rows('sidebar_content') ): ?>
		
		<?php while( have_rows('sidebar_content') ): the_row();
		
			$image = wp_get_attachment_image_src(get_sub_field('sidebar_image'), 'sidebarImage'); 
			
			$sidebarLink = get_sub_field('sidebar_link');
			$sidebarText = get_sub_field('sidebar_text');
			
		?>
		
		<div class="sidebarBlock">
		
			<a href="<?php echo $sidebarLink; ?>" title="<?php // echo $title; ?>">
		
				<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('sidebar_image')) ?>" class="sidebarImg" />
				
				<span class="sidebarLink"><?php echo $sidebarText; ?></span>
		
			</a>
		
		</div>
		
		<?php endwhile; ?>
		
		<?php endif; 
			
			// wp_reset_postdata();
		?>
		
	</div>
	
	<?php endif; ?>

</div>

