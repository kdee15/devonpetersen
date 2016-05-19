<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage bighousevoices
 */

get_header(); ?>

<p>the single custom</p>




<!-- C.2. MAST -->
<section>

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" class="one-quarter artist__item">
                        <section class="card__header">
                            <figure class="figure">
                                <img class="image" src="<?php the_field('photo') ?>" />
                                <h3><?php the_title(); ?></h3>
                            </figure>
                        </section>
                        <section class="card__body">
                            <h3 class="title"><?php the_field('name') ?> <?php the_field('surname') ?></h3>
                            <?php the_content(); ?>

                        </section>
                </article>

            <?php endwhile; // end of the loop. ?>

</section>

<!-- C.2. END -->


<?php get_footer(); ?>