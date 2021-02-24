<?php extract($args); ?>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><?php echo $title; ?></h3>
                    <p>
                        <?php echo $address; ?>
                        <strong>Phone:</strong> <?php echo $phone ?><br>
                        <strong>Email:</strong> <?php echo $email ?><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <?php 
                        wp_nav_menu( array(
                            'container' => "ul",
                            'location' => 'Primary'
                        ));
                    ?>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Portfolio</h4>
                    <ul>
                        <?php foreach($portfolio as $pt): ?>
                            <li><i class="bx bx-chevron-right"></i> 
                                <a href="<?php echo $pt->external_link ?>" target="_blank">
                                    <?php echo $pt->post_title ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <div class="social-links mt-3">
                        <?php foreach($social_medias as $md): ?>
                            <a href="<?php echo $md["url"] ?>" class="twitter">
                                <i class="<?php echo $md["icon"]; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span><?php echo $title ?></span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->
<?php wp_footer(); ?>
</body>

</html>