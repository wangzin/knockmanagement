<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mx-auto">
                <h2 class="text-white"><?=$abouts['slider_title']?> </h2>

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
            <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                <h2 class="text-white mb-3"><?=$abouts['org_name'];?></h2>
                <p class="text-white"><?=$abouts['about'];?></p>
                <a href="#" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Read More</a>
                <a href="reservation.html" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Free consultation</a>
            </div>
        </div>
    </div>
</section>
<section class="section-padding" id="section_3">
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
                <a href="#section_5" class="btn custom-btn">Request a Free Quote</a>
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

<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">   

            <div class="col-lg-12 col-12">
                <em class="text-white">Say Hello</em>
                <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
            </div>

            <div class="col-lg-6 col-12">
                <form action="#" method="post" class="custom-form contact-form" role="form">

                <div class="row">
                    
                    <div class="col-lg-6 col-12">
                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                        <input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <label for="email" class="form-label">Email Address</label>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
                    </div>

                    <div class="col-12">
                        <label for="message" class="form-label">How can we help?</label>

                        <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>
                        
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto mt-3">
                    <button type="submit" class="form-control">Send Message</button>
                </div>
            </form>
            </div>

            <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5039.668141741662!2d72.81814769288509!3d19.043340656729775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c994f34a7355%3A0x2680d63a6f7e33c2!2sLover%20Point!5e1!3m2!1sen!2sth!4v1692722771770!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>

        </div>
    </div>
</section>