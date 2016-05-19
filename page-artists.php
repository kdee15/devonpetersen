<?php 

/*
Template Name: artists template
*/

get_header(); ?>


<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->

    <section class="mast">

            <div class="container">

                <section class="artist section grid">

                    <?php
                        $args = array(
                            'post_type' => 'artists',
                        );
                        $artists = new WP_Query( $args );
                        if( $artists->have_posts() ) {
                          while( $artists->have_posts() ) {
                            $artists->the_post();
                            ?>

                            <article id="post-<?php the_ID(); ?>" class="one-quarter artist__item">
                                <div class="big card toggle-div" name="toggle-<?php the_ID(); ?>">
                                    <section class="card__header">
                                        <figure class="figure">
                                            <img class="image" src="<?php the_field('photo') ?>" />
                                        </figure>
                                    </section>
                                    <section class="card__body">
                                        <h3 class="title"><?php the_field('name') ?> <?php the_field('surname') ?></h3>
                                    </section>
                                    <section class="card__flyout toggle-content" id="toggle-<?php the_ID(); ?>">
                                        <p class="media-title">CORPORATE</p>
                                        <?php the_field('audio_1') ?>
                                        <p class="media-title">GREETING</p>
                                        <?php the_field('audio_2') ?>
                                        <p class="media-title">HAPPY</p>
                                        <?php the_field('audio_3') ?>
                                        <p class="media-title">SAD</p>
                                        <?php the_field('audio_4') ?>
                                        <a href="<?php the_permalink(); ?>">more</a>
                                    </section>
                                </div>
                            </article>

                            <?php
                          }
                        }
                    ?>

                </section>
                
            </div>
        
    </section>

    <!-- C.2. END ------------------------------------------------------------------------------------------------- -->

<?php get_footer(); ?>