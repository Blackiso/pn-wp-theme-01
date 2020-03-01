<?php $position = isset($VARS['index']) && $VARS['index']%2 == 0 ? true : false; ?>

<div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
    <a href="portfolio.html" class="image <?php if ($position) echo('image-2 order-2'); ?>" style="background-image: url('<?php echo TEMPLATE_URI ?>/images/work-2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
    <div class="text order-1">
        <h4 class="subheading">Application</h4>
        <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
    </div>
</div>