
<section class="about-section section-padding" id="section_whyus">
    <div class="container pt-5 mt-5">
        <div class="row d-flex">
            <div class="col-lg-6 col-12 d-flex">
                <section class="pt-0 mt-2 bg-white mediumradius d-flex align-items-center" id="section_2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <h2 style="font-family: Montserrat ExtraBold; font-size:20px; color:black" class="mb-0">
                                           <?=$abouts['org_name'];?>
                                        </h2>
                                        <span style="font-family: Montserrat Regular; font-size:15px; color:black">
                                          <?=$abouts['about'];?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-lg-12 col-12">
                                        <h2 style="font-family: Montserrat ExtraBold; font-size:20px; color:black" class="mb-0">
                                           Mission
                                        </h2>
                                        <span style="font-family: Montserrat Regular; font-size:15px; color:black">
                                          <?=$abouts['mission'];?>
                                        </span>
                                    </div>
                                </div>
                                 <div class="row pt-4">
                                    <div class="col-lg-12 col-12">
                                        <h2 style="font-family: Montserrat ExtraBold; font-size:20px; color:black" class="mb-0">
                                           Vision
                                        </h2>
                                        <span style="font-family: Montserrat Regular; font-size:15px; color:black">
                                          <?=$abouts['vision'];?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                <img src="<?php echo base_url();?>images/about/<?=$abouts['image'];?>" class="mediumradius img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-section section-padding" id="section_whyus">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                <img src="<?php echo base_url();?>images/about/<?=$abouts['image2'];?>" class="mediumradius img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-12 d-flex">
                <section class="pt-0 mt-2 bg-danger mediumradius d-flex align-items-center" id="section_2">
                    <div class="container">
                        <div class="booking-form-image-wrap mt-5 pt-4">
                                <em class="text-white d-block mb-4"><h5 class="text-white">Contact Details</h5>
                                </em>
                                <div class="info-box">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="text-white">
                                        <b>Phone</b> <br>
                                        <span><a href="tel: 305-240-9671" class="text-white">
                                        <?=$abouts['contact'];?>
                                    </a></span>
                                    </div>
                                </div>
                               
                                <div class="info-box">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text-white">
                                        <b>Email</b> <br>
                                        <span><a class="text-white" href="mailto:<?=$abouts['email'];?>"><?=$abouts['email'];?>
                                    </a></span>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="text-white">
                                        <b>Opening Hours</b> <br>
                                        <span><?=nl2br($abouts['operation_hours'])?></span>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="icon">
                                        <i class="fas fa-location-dot"></i>
                                    </div>
                                    <div class="text-white">
                                        <b>Our Location</b> <br>
                                        <span><?=$abouts['address'];?></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
           
        </div>
    </div>
</section>