<!-- C.3. ARTISTS MODAL WINDOWS -->

<section class="toggle-content modal" id="<?php the_title(); ?>">

    <div class="container">
        
        <div class="modalClose toggle-div" name="<?php the_title(); ?>">
            <span class="og-close">X</span>
        </div>
        
        <section class="modal__body v-align">
            
            <!-- C.3.1. The Content ------------------------ -->
            
            <img src="<?php the_field('photo') ?>" alt="<?php the_title(); ?>" class="modal_img" />
            <h2><?php the_field('name') ?> <?php the_field('surname') ?></h2>
            
            <ul class="modal__grid">
                <li class="one-half grid-item"><span class="inner"><h5>Corporate</h5><?php the_field('audio1') ?></span></li>
                <li class="one-half grid-item"><span class="inner"><h5>Greeting</h5><?php the_field('audio2') ?></span></li>
                <li class="one-half grid-item"><span class="inner"><h5>Happy</h5><?php the_field('audio3') ?></span></li>
                <li class="one-half grid-item"><span class="inner"><h5>Sad</h5><?php the_field('audio4') ?></span></li>
            </ul>

            <!-- C.3.1. END -------------------------------- --> 
            
        </section>
        
    </div>

</section>

<!-- C.3. END -->