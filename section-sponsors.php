<!-- C.2.1. HOME CAROUSEL ----------------- -->

<section class="section__carousel">

    <div class="carousel-wrapper">

        <div class="owl-carousel">

        <?php
            $args = array(
                'post_type' => 'sponsors',
            );
            $fixtures = new WP_Query( $args );
            if( $fixtures->have_posts() ) {
              while( $fixtures->have_posts() ) {
                $fixtures->the_post();
                ?>

                <article class="item">
                    <a class="item-link" href="<?php the_field('url') ?>" target="_blank">
                        <img class="img" src="<?php the_field('logo') ?>" alt="<?php the_field('title') ?>"/>
                    </a>
                </article>

                <?php
              }
            }
        ?>
            


        </div>

    </div>

</section>

<!-- C.2.1. END --------------------------- -->