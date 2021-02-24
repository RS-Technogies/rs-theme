<?php 
    extract($args); 
    $cta=isset($cta)&&is_array($cta)?$cta:[
        'title'=>"",
        "description"=>"",
        "background_color"=>"",
        "link"=>[]
    ]; 
?>
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta" style="background-color:<?php echo $cta["background_color"] ?>">
    <div class="container" data-aos="zoom-in">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3><?php echo $cta["title"]; ?></h3>
                <p><?php echo $cta["description"]; ?></p>
            </div>
            <?php if(!empty($cta['link'])): ?>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section><!-- End Cta Section -->