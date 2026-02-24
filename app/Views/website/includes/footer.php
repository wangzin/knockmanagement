 <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 me-auto">
                    <em class="text-white d-block mb-4">Where to find us?</em>

                    <strong class="text-white">
                        <i class="bi-geo-alt me-2"></i>
                        <?=$abouts['address'];?>
                    </strong>

                    
                </div>

                <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                    <em class="text-white d-block mb-4">Contact</em>

                    <p class="d-flex mb-1">
                        <strong class="me-2">Phone:</strong>
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            <?=$abouts['contact'];?>
                        </a>
                    </p>

                    <p class="d-flex">
                        <strong class="me-2">Email:</strong>

                        <a> <?=$abouts['email'];?>
                        </a>
                    </p>
                </div>


                <div class="col-lg-5 col-12">
                    <em class="text-white d-block mb-4">Opening Hours.</em>
                    <?=nl2br($abouts['operation_hours'])?>
                </div>

                <div class="col-lg-8 col-12 mt-4">
                    <p class="copyright-text mb-0">Copyright 2026s</p>
                </div>
        </div>
    </footer>