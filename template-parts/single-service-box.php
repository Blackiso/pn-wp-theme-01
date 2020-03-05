<?php if ($VARS['data']['title'] !== "" && $VARS['data']['des'] !== ""): ?>
<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services d-block text-center">
        <div class="d-flex justify-content-center">
            <div class="icon color-<?php echo($VARS['index']+1) ?> d-flex justify-content-center mb-3"><span class="align-self-center icon-lightbulb-o"></span></div>
        </div>
        <div class="media-body p-2 mt-3">
            <h3 class="heading"><?php echo $VARS['data']['title']; ?></h3>
            <p><?php echo $VARS['data']['des']; ?></p>
        </div>
    </div>
</div>
<?php endif; ?>