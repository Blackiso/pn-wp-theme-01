<div class="col-md-4 ftco-animate">
    <div class="blog-entry">
        <a href="blog-single.html" class="block-20" style="background-image: url(
                  <?php
                    if (has_post_thumbnail()) echo get_the_post_thumbnail_url();
                    ?>);">
        </a>
        <div class="text p-4 d-block">
            <div class="meta mb-3">
                <div><a href="#"><?php the_time('M d, Y'); ?></a></div>
                <!-- <div><a href="#">July 12, 2018</a></div> -->
                <div><a href="#"><?php the_author_nickname(); ?></a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> <?php comments_number(0); ?></a></div>
            </div>
            <h3 class="heading"><a href="#"><?php the_title(); ?></a></h3>
        </div>
    </div>
</div>