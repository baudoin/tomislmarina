					<ul class="slip">
				    <?php 
				    	global $wp_query;
				    	$args = array( 'post_type' => 'slips', 'cat' => 1, 'posts_per_page' => 99 );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						
						<li>
							<div class="thumb">
							<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else {
									echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/library/img/placeholder.jpg" />';
								}
							?>
							</div>
							<div class="length">
								<span><?php the_title(); ?></span>
							</div>
							<span class="info">
								<?php the_excerpt(); ?>

								<a href="#">Contact us about this slip</a>
							</span>
						</li>
					
					<?php endwhile; ?>

					</ul>