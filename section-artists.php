
<!-- C.2.6. ARTISTS -->

<section class="section section-bobCasestudies" id="section-casestudies">

    <div class="container">

        <!-- C.2.6.1. Page Title -->

        <section class="section-header">
            <figure class="figure-header icon">
                <?php include ( 'assets/includes/icons/icon--microphone.html' ); ?>
            </figure>
            <h2>our artists</h2>
            <span></span>
        </section>

        <!-- C.2.6.2. Case Study List -->
        
        <ul class="grid-group casestudies-group">
            

        <?php
            $args = array(
                'post_type' => 'artists',
            );
            $artists = new WP_Query( $args );
            if( $artists->have_posts() ) {
              while( $artists->have_posts() ) {
                $artists->the_post();
                ?>
            
                <li class="grid-item casestudies-item view view-tenth">
                    
                    <img src="<?php the_field('photo') ?>" alt="client logo" class="mainImg" />
                    <h3 class="card-title"><?php the_field('name') ?></h3>
                    
                    <div class="mask">
                        <div class="foil">
                            
                            <p class="media-title bob-caseHover">CORPORATE</p>
                            <?php the_field('audio1') ?>
                            <div class="toggle-div button" name="<?php the_title(); ?>">
                                <span>SEE MORE</span> 
                            </div>
                        </div>
                    </div>
                    
                    <?php get_template_part( 'modal-artist' ); ?>
                    
                </li>
            
                <?php
              }
            }
        ?>

        </ul>

    </div>                 

</section>

<!-- C.2.6. END -->