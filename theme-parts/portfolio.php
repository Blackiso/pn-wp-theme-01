<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Works</span>
                <h2 class="mb-4">View our works below to see our design and way of development.</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            <?php
            $portfolio_count = $is_home ? 3 : 6;
            $portfolio_indice = 0;
            ?>
            <?php while ($portfolio_indice < $portfolio_count) : ?>
                <?php
                $is_right = $portfolio_indice % 2 === 1;
                set_query_var('is_right', $is_right);
                get_template_part("theme-parts/portfolio-single");
                $portfolio_indice++;
                ?>
            <?php endwhile; ?>
        </div>
        <div class="row<?php $is_home ? '' : ' mt-5' ?>">
            <?php if ($is_home) : ?>
                <div class="col-md-12 text-center">
                    <span><a href="<?php echo home_url("/portfolio"); ?>" class="btn btn-primary py-3 px-5">View All Projects</a></span>
                </div>
            <?php else : ?>
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>