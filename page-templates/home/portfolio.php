<?php extract($args)?>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <?php foreach($terms as $term): ?>
                <li data-filter=".filter-<?php echo $term->slug ?>"><?php echo $term->name ?></li>
            <?php endforeach ?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($portfolio as $pt) : ?>
                <?php $terms=get_the_terms($pt,"portfolio_areas");  ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?php echo !empty($terms)?"filter-".current($terms)->slug:"" ?>">
                    <div class="portfolio-img">
                        <img src="<?php echo get_the_post_thumbnail_url($pt); ?>" class="img-fluid" alt="<?php echo $pt->post_title ?>">
                    </div>
                    <div class="portfolio-info">
                        <h4><?php echo $pt->post_title ?></h4>
                        <p>App</p>
                        <a href="<?php echo get_the_post_thumbnail_url($pt) ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a href="<?php echo $pt->permalink; ?>" class="details-link" title="More Details">
                            <i class="bx bx-link"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- End Portfolio Section -->