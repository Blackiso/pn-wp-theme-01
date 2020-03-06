<?php 

	$meta_data = get_section_meta_box('about', 'about'); 
	$description = str_replace(['<', '>'], ['<strong class="px-3">', '</strong>'], $meta_data['des']);

?>

<div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="h1"><?php echo $description; ?></h2>

        <p><a href="<?php echo($meta_data['btn']['link']) ?>" class="btn btn-primary mt-3 py-3 px-5"><?php echo $meta_data['btn']['name']; ?></a></p>

    </div>
</div>