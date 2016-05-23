<?php

/*
Template Name: Archive page
*/

get_header(); ?>


			<!-- C.2. MAST -->
			<section id="mast">
				
				<!-- C.2.1 Our Work -->

				<section id="our-blog" class="section-banner">

					<section class="image-banner">

						<div class="scaler">
							
							<div class="container">

								<div class="wrapper">

									<h1>Insights and inspiration</h1>

									<a href="<?php bloginfo('url'); ?>/contact">get in touch</a>

								</div>

							</div>	
						</div>

					</section>

				</section>

				<!-- C.2.1 End -->
				
				
				<!-- C.2.2 Page Introduction -->

				<section class="section intro-text">
					<div class="container panel">
						<div class="wrapper">
							<p>The Colourworks blog, home of all the freshest of everything.</p>
						</div>
					</div>
				</section>

				<!-- C.2.2 End -->
				
				
				<!-- C.2.3 Page Content -->
				
				<section class="section-content">
				
					<div class="container">
						
						<div class="grid">
						
							<div class="square sidebar">
								
								<?php get_sidebar(blog); ?>

							</div>

							<div class="rectangle content">
				
								<!-- C.2.4.1.1. Dynanic Content area -->

								<section class="section-listing">
									
									<?php
										$args=array(
										  'post_type' => 'post',
										  'post_status' => 'publish',
										  'posts_per_page' => -1,
										  'caller_get_posts'=> 1
										);
										$my_query = null;
										$my_query = new WP_Query($args);

										if( $my_query->have_posts() ) {
										  while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                            <article class="article-teaser blog">
                                                <div class="grid">
                                                    <a href="<?php the_permalink() ?>">

                                                        <aside class="inner-square aside-details">

                                                            <figure class="figure-thumb">
                                                                <?php echo the_post_thumbnail() ?> 
                                                            </figure>

                                                            <div class="info">
                                                                <h4><?php the_date('d M') ?></h4>
                                                                <p><?php the_title() ?></p>
                                                                <div class="our-blog-category">
                                                                    <span class="label"><b>Category</b></span><span class="text"><?php the_category() ?></span>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                        <aside class="inner-square aside-intro">

                                                            <p><?php echo substr(get_the_excerpt(), 0,150); ?> ...</p>

                                                        </aside> 
                                                    </a>
                                                </div>
                                            </article>
									
									
											<?php
										  //the_excerpt();
										  endwhile;
										}
										wp_reset_query();  // Restore global post data stomped by the_post().
									?>
									
								</section>

								<!-- C.1.1 End -->

							</div>
						
						</div>

					</div>
					
				</section>
				
				<!-- C.2.3 End -->
				
				
				<!-- C.2.4 Media -->

				<?php get_template_part( 'connect' ); ?>

				<!-- C.2.4 End -->
				
			</section>
		
			<!-- C.2. END -->

<?php get_footer(); ?>