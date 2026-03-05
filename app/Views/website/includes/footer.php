 <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 me-auto">
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <img src="<?php echo base_url();?>images/<?=$abouts['logo'];?>" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                    </a>
                    <p class="text-white pt-3"><?=$abouts['vision'];?></p>
                </div>

                <div class="col-lg-4 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                    <em class="text-white d-block mb-4">Contact</em>
                    <p class="d-flex mb-1">
                        <i class="bi-geo-alt me-2"></i>
                        <strong class="me-2">Address:</strong>
                        <?=$abouts['address'];?>
                    </p>
                    <p class="d-flex mb-1">
                        <i class="bi-phone-vibrate me-2"></i>
                        <strong class="me-2">Phone:</strong>
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            <?=$abouts['contact'];?>
                        </a>
                    </p>

                    <p class="d-flex">
                        <i class="bi-envelope-exclamation me-2"></i>
                        <strong class="me-2">Email:</strong>
                        <a> <?=$abouts['email'];?>
                        </a>
                    </p>
                </div>


                <div class="col-lg-5 col-12 map-wrapper">
                    <?=$abouts['location_map'];?>
                </div>

                <div class="col-lg-8 col-12 mt-4">
                    <p class="copyright-text mb-0">Copyright 2026</p>
                </div>
        </div>
    </footer>