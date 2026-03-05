<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mx-auto">
                <h1 class="text-white" style="font-size: 50px;"><?=$abouts['slider_title']?> </h1>

                <p class="text-white mb-4 pb-lg-2 team-block-wrap pt-3">
                    <b><?=$abouts['slider_details']?></b>
                </p>
            </div>
        </div>
    </div>
    <?php if($abouts['slider_type']=="video"){?>
        <div class="carousel-item swiper-slide">
            <video autoplay loop muted playsinline>
                <source src="<?php echo base_url();?>images/sliders/<?=$abouts['video_slider']?>" type="video/mp4">
            </video>
        </div>
    <?php } ?>
        <input type="hidden" name="slider_1" id="slider_1" value="<?=$slider_data_1?>">
        <div class="hero-slides"></div>
</section>

<section class="about-section section-padding" id="section_2">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="ratio ratio-1x1">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="<?php echo base_url();?>images/about/<?=$abouts['about_video'];?>" type="video/mp4">
                    </video> 

                    <div class="about-video-info d-flex flex-column">
                        <h4 class="mt-auto"><?=$abouts['welcome_note'];?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 mx-auto">
                <h2 class="text-white mb-3"><?=$abouts['org_name'];?></h2>
                <p class="text-white"><?=$abouts['about'];?></p>
                <a href="<?=base_url()?>2dcf222ffff3bbd2823d0226ef789985cf237c96/593007a44c17141aef5bc2665c4a7497ecee5243" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Read More</a>
                <a href="<?=base_url()?>2dcf222ffff3bbd2823d0226ef789985cf237c96/593007a44c17141aef5bc2585c4a7497ecee5243" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Quote with us</a>
                <a href="<?=base_url()?>2dcf222ffff3bbd2823d0226ef789985cf237c96/593007a44c17141aef5bc2335c4a7497ecee5243" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4 bg-danger">Register for Job seeker</a>
            </div>
        </div>
    </div>
</section>
<section class="section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Our Cleaning Services</h2>
            </div>
            <?php if($cleaningservices!=null && sizeof($cleaningservices)>0){ 
                foreach($cleaningservices as $i=> $dat): ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="<?php echo base_url();?>images/services/<?=$dat['image'];?>" class="custom-block img-fluid" alt="Retail and Office">
                        <div class="custom-block">
                            <h4 class="mt-3"><?=$dat['name'];?></h4>
                            <p class="mb-0"><?=$dat['description'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; }?>
        </div>
    </div>
</section>

<section class="section-padding bg-light" id="section_why_choose_us">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Why Choose Knock Management?</h2>
            </div>
            <?php if($excellence!=null && sizeof($excellence)>0){ 
                foreach($excellence as $i=> $dat): ?>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <div class="why-choose-item text-center">
                        <img decoding="async" width="105" height="105" src="<?php echo base_url();?>images/excellancy/<?=$dat['image'];?>" data-src="<?php echo base_url();?>images/excellancy/<?=$dat['image'];?>" alt="Proven Experience" class="lazy et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-3539 entered loaded et-animated" data-ll-status="loaded">
                        <h5><?=$dat['name'];?></h5>
                        <p><?=$dat['description'];?></p>
                    </div>
                </div>
            <?php endforeach; }?>
            
            <div class="container text-center mt-4">
                <p class="lead">Ready to stabilize your business operations?</p>
                <a href="<?=base_url()?>2dcf222ffff3bbd2823d0226ef789985cf237c96/593007a44c17141aef5bc2585c4a7497ecee5243" class="btn custom-btn">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding mca-cleaning-process" id="section_process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5 text-white">Our Cleaning Process</h2>
                <p class="mb-5 text-white">Our systematic approach ensures that every facility we manage meets the highest standards of cleanliness and hygiene.</p>
            </div>
             <?php if($processdata!=null && sizeof($processdata)>0){ 
                foreach($processdata as $i=> $dat): ?>
                <?php if(sizeof($processdata)==1){?>
                    <div class="col-lg-12 col-md-12 col-12 mb-4">
                <?php } if(sizeof($processdata)==2){?>
                    <div class="col-lg-6 col-md-6 col-12 mb-4">
                <?php } if(sizeof($processdata)==3){?>
                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                <?php } if(sizeof($processdata)>=4){?>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                <?php }?>
                    <div class="process-card">
                        <div class="process-icon">
                        <img decoding="async" width="100" height="100" src="<?php echo base_url();?>images/cleaningprocess/<?=$dat['image'];?>" data-src="<?php echo base_url();?>images/cleaningprocess/<?=$dat['image'];?>" alt="Site Assessment &amp; Planning" >
                        </div>
                        <div class="process-number"><?=$dat['sequence']<10? '0'.$dat['sequence']:$dat['sequence'];?></div>
                        <h4><?=$dat['name'];?></h4>
                        <p><?=$dat['description'];?></p>
                    </div>
                </div>
            <?php endforeach; }?>

        </div>
    </div>
</section>

<section class="section-padding" id="section_futureservice">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Our Future Services</h2>
            </div>
            <?php if($services!=null && sizeof($services)>0){ 
                foreach($services as $i=> $dat): ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="<?php echo base_url();?>images/services/<?=$dat['image'];?>" class="custom-block-image img-fluid" alt="Retail and Office">
                        <div class="custom-block">
                            <h4 class="mt-3"><?=$dat['name'];?></h4>
                            <p class="mb-0"><?=$dat['description'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; }?>
        </div>
    </div>
</section>
<section class="testimonial-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Happy Clients Say</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- Google Summary Box -->
                <div class="testimonial-item google-box p-4 text-center">
                    <h5>Knock Managemement Services</h5>
                    <div class="rating my-2">
                        <span class="score">4.9</span>
                        <span class="stars text-warning">★★★★★</span>
                    </div>
                    <p class="small">Based on 27 reviews</p>
                    <button class="btn btn-success btn-sm">Review on Google</button>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-item p-4">
                        <div class="client-img mb-2">
                            <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewI8xd3bzp1zbbgEiZH32MzYV8vyYvKZVvw&s" alt="Stephanie A" class="rounded-circle" width="80">
                        </div>
                        <h6 class="client-name">Stephanie A</h6>
                        <div class="stars text-warning mb-2">★★★★★</div>
                        <p>
                            We've been through several cleaning companies and Pro-Clean by far is the best! Excellent services!
                        </p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-item p-4">
                        <div class="client-img mb-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewI8xd3bzp1zbbgEiZH32MzYV8vyYvKZVvw&s" alt="Sangeetha" class="rounded-circle" width="80">
                        </div>
                        <h6 class="client-name">Sangeetha Suwarnan</h6>
                        <div class="stars text-warning mb-2">★★★★★</div>
                        <p>
                            Great office cleaning company with good prices and service!
                        </p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-item p-4">
                        <div class="client-img mb-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewI8xd3bzp1zbbgEiZH32MzYV8vyYvKZVvw&s" alt="Marc" class="rounded-circle" width="80">
                        </div>
                        <h6 class="client-name">Marc Robitaille</h6>
                        <div class="stars text-warning mb-2">★★★★★</div>
                        <p>
                            Excellent work. Punctual & friendly staff. Would highly recommend!
                        </p>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="testimonial-item p-4">
                        <div class="client-img mb-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewI8xd3bzp1zbbgEiZH32MzYV8vyYvKZVvw&s" alt="Rachel Levman" class="rounded-circle" width="80">
                        </div>
                        <h6 class="client-name">Rachel Levman</h6>
                        <div class="stars text-warning mb-2">★★★★★</div>
                        <p>
                            Best cleaning company to work with!
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
