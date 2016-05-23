<?php
/* template name: Posts by Category! */
get_header(); ?>

	<!-- C.2. MAST -->
	<section id="mast">
        
        <h1>ARCHIVE STANDARD</h1>

        <?php

            // get all the categories from the database
            $cats = get_categories(); 

            // loop through the categries
            foreach ($cats as $cat) {

                // setup the cateogory ID
                $cat_id= $cat->term_id;

                // Make a header for the cateogry
                echo "<h3 class='category-title'>".$cat->name."</h3>";

                // create a custom wordpress query
                query_posts("cat=$cat_id&posts_per_page=100");

                // start the wordpress loop!
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php // create our link now that the post is setup ?>

                    <div>

                        <p><?php the_title() ?></p>

                    </div>

                <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>

            <?php } // done the foreach statement 

        ?>

	</section>

	<!-- C.2. END -->

<?php get_footer(); ?>