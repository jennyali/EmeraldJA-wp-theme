<?php

/*
        HERO SLIDER SLIDE / CUSTOM POST TYPE
*/

//# CUSTOM FIELDS UI


//====================================================================================//
?>                 
                    
                    
<div class="masonry-layout__panel">
    <div class="portfolio-item masonry-layout__panel-content">

        <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">

        <div class="portfolio-item__overlay">
            <a href="single-portfolio-post.html">
                <h4><?php the_title(); ?><span class="icon-arrow-68 btn-custom-3" ></span></h4>
            </a>
        </div><!-- .portfolio-item__overlay -->

    </div><!-- .masonry-layout__panel-content -->
</div><!-- .masonry-layout__panel -->