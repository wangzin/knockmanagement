 <section class="booking-section section-padding" style="background-image: url('<?php echo base_url();?>images/about/<?=$abouts["image3"];?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mx-auto">
                <div class="booking-form-wrap">
                    <div class="row">
                        <div class="col-lg-7 col-12 p-0">
                            <form class="custom-form booking-form" enctype="multipart/form-data" method="POST" action="/2dcf222ffff3bbd2823d0226ef789985cf237c96/b4f4e15482b71648b505ba1e55ee43cbbe6473b0" id="registrationform">
                                <div class="mb-4 pb-lg-2">
                                    <h2 class="text-white">Request a Quote</h2>
                                    <p class="text-white">Ready to experience the cleanest space ever? Fill out the form and we'll get back to you within 24 hours with a customized quote.</p>  
                                </div>
                                <div class="booking-form-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 margin-bottom-30">
                                            <label class="text-white">Full Name</label>
                                            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" onchange="remove_error('full_name')">
                                            <span class="text-danger" id="full_name_err"></span>
                                        </div>

                                        <div class="col-lg-6 col-12 margin-bottom-30">
                                            <label class="text-white">Phone Number</label>
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone: 085 456 7890" onchange="remove_error('phone')">
                                            <span class="text-danger" id="phone_err"></span>
                                        </div>

                                        <div class="col-lg-6 col-12 margin-bottom-30">
                                            <label class="text-white">Email Address</label> 
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" onchange="remove_error('email')">
                                            <span class="text-danger" id="email_err"></span>
                                        </div>
                                        <div class="col-lg-12 col-12 margin-bottom-30">
                                            <label class="text-white">Tell Us about your needs</label>
                                            <textarea name="message" rows="3" class="form-control" onchange="remove_error('message')" id="message" placeholder="Message"></textarea>
                                            <span class="text-danger" id="message_err"></span>
                                        </div>
                                       
                                        <div class="col-lg-12 col-12 pb-4 margin-bottom-30">
                                            <div onclick="remove_reperr('captchaText')">
                                                <div class="g-recaptcha"  data-sitekey="6LfD3HgsAAAAAPPJTG-ZERh4lD9oXNapUDkGAaM2"></div>
                                                <span style="color: red;" id="captchaText_err"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-8">
                                            <input type="hidden" name="form_type" id="form_type" value="quote">
                                            <button type="button" onclick="submitForm()" class="p-2 form-control bg-danger border">
                                                <span class="fa fa-save"></span> Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-5 col-12 p-1">
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
                    </div>
                </div>

            </div>
        </div>
    </section>
