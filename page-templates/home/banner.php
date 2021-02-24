 <?php extract($args); ?>
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

     <div class="container">
         <div class="row">
             <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                 <h1><?php echo $title; ?></h1>
                 <h2><?php echo $sub_title; ?></h2>
                 <div class="d-lg-flex">
                     <?php if (!empty($btn_text)) : ?>
                         <a href="<?php echo $btn_url; ?>" class="btn-get-started scrollto"><?php echo $btn_text ?></a>
                     <?php endif; ?>
                     <?php if (!empty($video_url)) : ?>
                         <a href="<?php echo $video_url ?>" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true">
                             Watch Video <i class="icofont-play-alt-2"></i>
                         </a>
                     <?php endif; ?>
                 </div>
             </div>
             <?php if(!empty($featured_image)): ?>
             <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                 <img src="<?php echo $featured_image; ?>" class="img-fluid animated" alt="">
             </div>
             <?php endif; ?>
         </div>
     </div>

 </section><!-- End Hero -->