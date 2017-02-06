<!-- C.2.6. ARTISTS -->

<section class="section section-blog" id="section-blog">

    <div class="container">

        <!-- C.2.6.2. Case Study List -->
        
        <section class="section__articles">
            <section class="grid">

                <?php

                    $args=array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);

                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <aside class="one-third mobi">
                            <article class="article">
                                <a class="article__figure" href="<?php the_permalink() ?>">
                                    <span class="image-wrapper">
                                        <img class="image" src="<?php the_field('image') ?>" alt="<?php the_title(); ?>" />
                                    </span>
                                    <div class="article__body">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </a>
                            </article>
                        </aside>

                        <?php

                        endwhile;
                    }
                    wp_reset_query();  // Restore global post data stomped by the_post().
                ?>

            </section>
            
            <a class="btn-default button btn-orange" href="?page_id=44">VIEW MORE ARTICLES</a>
            
        </section>

    </div>                 

</section>

<!-- C.2.6. END -->