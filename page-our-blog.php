<?php
/*
   Template Name: Our Blog Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <!-- C.2. MAST -->
    <section id="mast"> 

        <!-- C.2.1 Our Work -->

        <section class="section section-banner">

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
                    <p>The Colourworks blog feed, home to the freshest of everything.</p>
                </div>
            </div>
        </section>

        <!-- C.2.2 End -->


        <!-- C.2.3 Page Content -->

        <section class="section-content">

            <div class="container">

                <div class="grid">

                    <div class="square sidebar no-mobile">

                        <?php get_sidebar(blog); ?>

                    </div>

                    <div class="rectangle content">

                        <!-- C.2.4.1.1. Dynanic Content area -->

                        <section class="section our-blog">

                            <?php
                                $args=array(
                                  'post_type' => 'post',
                                  'post_status' => 'publish',
                                  'posts_per_page' => -3,
                                  'caller_get_posts'=> 1
                                );
                                $my_query = null;
                                $my_query = new WP_Query($args);

                                if( $my_query->have_posts() ) {
                                  while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    <article class="article-blog item-<?php echo ($xyz++%2); ?>">
                                        <div class="grid">
                                            <a class="link-hover" href="<?php the_permalink() ?>">

                                                <aside class="inner-square blog-intro">
                                                    
                                                    <div class="sizer">
                                                        
                                                        <figure class="figure-background">

                                                            <?php echo the_post_thumbnail() ?>

                                                        </figure>

                                                        <div class="text">
                                                            <h4><?php the_date('d M') ?></h4>
                                                            <h3 class="light"><?php the_title() ?></h3>
                                                            <div class="our-blog-category">
                                                                <span class="label"><b>Category</b></span>
                                                                <span class="category-text"><?php the_category() ?></span>
                                                            </div>
                                                            <span class="blog-author"> <?php the_author() ?></span>
                                                        </div>
                                                        
                                                    </div>

                                                </aside>
                                                <aside class="inner-square aside-intro no-mobile">
                                                    
                                                    <p class="scaler"><?php echo substr(get_the_excerpt(), 0,150); ?> ...</p>

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
                        
                        
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'matty' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'matty' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>                 
                        

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