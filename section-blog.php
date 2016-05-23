
<!-- C.2.6. ARTISTS -->

<section class="section section-blog">

    <div class="container">

        <!-- C.2.6.1. Page Title -->

        <section class="section-header">
            <figure class="figure-header icon">
<!--                <?php include ( 'assets/includes/icons/icon--microphone.html' ); ?>-->
            </figure>
            <h2>blog</h2>
            <span></span>
        </section>

        <!-- C.2.6.2. Case Study List -->
        
        <div >
        
                    <?php
                        $args = array(
                            'post_type' => 'artists',
                        );
                        $artists = new WP_Query( $args );
                        if( $artists->have_posts() ) {
                          while( $artists->have_posts() ) {
                            $artists->the_post();
                            ?>

                            <article>
                                <?php the_content(); ?>
                            </article>

                            <?php
                          }
                        }
                    ?>
        
        </div>
  

    </div>                 

</section>

<!-- C.2.6. END -->