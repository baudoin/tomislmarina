<?php get_header(); ?>
			
			<div id="content" class="row clearfix">
			
				<div id="main" role="main">
			
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										
					    <section class="entry-content clearfix">
						    
						    <?php the_content(); ?>

						    <?php include('available-slips.php'); ?>

						    <!-- <a href="/boat-moorage" class="button right">View All Slips</a> -->

					    </section>

				    <?php endwhile; ?>
				
				    <?php endif; ?>					
				    
				</div> <!-- end #main -->

				<?php get_sidebar(); ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
