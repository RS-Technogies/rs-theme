<?php extract($args); ?>
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Services</h2>
            <?php echo $content; ?>
        </div>
        <div class="row">
            <?php foreach ($services as $service) :?>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <?php if($service["image_type"]==="icon"): ?>
                            <div class="icon">
                                <i class="<?php echo $service["choose_icon"] ?>"></i>
                            </div>
                        <?php else: ?>
                            <div class="icon">
                                <img src="<?php echo $service["service_image"]; ?>" 
                                        alt="<?php echo $service["service_name"] ?>" />
                            </div>
                        <?php endif; ?>
                        <h4><a href=""><?php echo $service["service_name"] ?></a></h4>
                        <p><?php echo $service["service_description"] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- End Services Section -->