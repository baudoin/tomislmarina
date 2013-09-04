<?php get_header(); ?>
			
			<div id="content" class="row clearfix">
			
				<div id="main" role="main">
			
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										
					    <section class="entry-content clearfix">
						    <?php the_content(); ?>
					    </section>

					    <h2>Available Slips:</h2>
					    										
				    <?php endwhile; ?>	
				
				    <?php else : ?>
				    
			            <section class="entry-content">
			        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
			        	</section>
				
				    <?php endif; ?>
				    
				</div> <!-- end #main -->

				<?php get_sidebar(); ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
