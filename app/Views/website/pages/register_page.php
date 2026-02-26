 <section class="booking-section section-padding" style="background-image: url('<?php echo base_url();?>images/about/<?=$abouts["image3"];?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mx-auto">
                <div class="booking-form-wrap">
                    <div class="row">
                        <div class="col-lg-7 col-12 p-0">
                            <form class="custom-form booking-form" enctype="multipart/form-data" method="POST" action="/2dcf222ffff3bbd2823d0226ef789985cf237c96/b4f4e15482b71648b505ba1e55ee43cbbe6473b0" id="registrationform">
                                <div class="mb-4 pb-lg-2">
                                    <h2 class="text-white">Register with Us</h2>
                                    <p class="text-white">Start your career journey with us. Share your details and our recruitment team will respond within 24 hours.</p>  
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

                                        <div class="col-lg-6 col-12 margin-bottom-30">
                                            <label class="text-white">Date Available to Start</label> 
                                            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Date Available to Start" onchange="remove_error('start_date')">
                                            <span class="text-danger" id="start_date_err"></span>
                                        </div>
                                        
                                         <div class="col-lg-6 col-12 margin-bottom-30">
                                            <label class="text-white">Have you worked with us before?</label>
                                            <select name="worked_before" id="worked_before" class="form-control" onchange="remove_error('worked_before')">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <span class="text-danger" id="worked_before_err"></span>
                                        </div>
                                        <div class="col-lg-12 col-12 pb-4 margin-bottom-30">
                                            <label class="text-white">Immigration Status</label><br>
                                            <input type="checkbox" name="immigration_status[]" id="immigration-status-student" value="Student" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white checkbox-padding-right">Student.</label>
                                            <input type="checkbox" name="immigration_status[]" id="immigration-status-work-permit" value="Work Permit" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white checkbox-padding-right">Work Permit.</label>
                                            <input type="checkbox" name="immigration_status[]" id="immigration-status-pr" value="PR" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white checkbox-padding-right">PR/Citizen.</label>
                                            <input type="checkbox" name="immigration_status[]" id="immigration-status-other" value="Other" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white">Other.</label><br>
                                            <span class="text-danger" id="immigration_status_err"></span>
                                        </div>

                                        <div class="col-lg-12 col-12 margin-bottom-30">
                                            <label class="text-white">Where you live (Address)?</label>
                                            <textarea name="address" rows="3" class="form-control" onchange="remove_error('address')" id="address" placeholder="Address"></textarea>
                                            <span class="text-danger" id="address_err"></span>
                                        </div>
                                        <div class="col-lg-12 col-12 pb-4 margin-bottom-30">
                                            <label class="text-white">Which Shift are you looking for Work?</label><br>
                                            <input type="checkbox" name="shift[]" id="shift-morning" value="Morning" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Morning.</label>
                                            <input type="checkbox" name="shift[]" id="shift-afternoon" value="Afternoon" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Afternoon.</label>
                                            <input type="checkbox" name="shift[]" id="shift-night" value="Night" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Night.</label>
                                            <input type="checkbox" name="shift[]" id="shift-weekend" value="Weekend" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Weekend.</label>
                                            <input type="checkbox" name="shift[]" id="shift-any" value="Any" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Any.</label>
                                            <br><span class="text-danger" id="shift_err"></span>
                                        </div>
                                        <div class="col-lg-12 col-12 pb-4 margin-bottom-30">
                                            <label class="text-white">Current Employment Status</label><br>
                                            <input type="radio" name="employment_status" id="employment-status-employed-full" value="Employed-Full" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Employed Full-Time.</label>
                                            <input type="radio" name="employment_status" id="employment-status-employed-part" value="Employed-Part" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Employed Part-Time.</label>
                                            <input type="radio" name="employment_status" id="employment-status-unemployed" value="Unemployed" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Unemployed.</label>
                                            <input type="radio" name="employment_status" id="employment-status-student" value="Student" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Student.</label>
                                            <input type="radio" name="employment_status" id="employment-status-retired" value="Retired" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Retired.</label>
                                            <br><span class="text-danger" id="employment_status_err"></span>
                                        </div>
                                        <div class="col-lg-12 col-12 pb-4 margin-bottom-30">
                                            <label class="text-white"> Upload your Resume/CV</label>
                                            <input type="file" name="resume" id="resume" onchange="remove_error('resume')" class="form-control">
                                            <span class="text-danger" id="resume_err"></span>
                                        </div>
                                        <div class="col-lg-12 col-12 pb-4 margin-bottom-30">
                                            <div onclick="remove_reperr('captchaText')">
                                                <div class="g-recaptcha"  data-sitekey="6LfD3HgsAAAAAPPJTG-ZERh4lD9oXNapUDkGAaM2"></div>
                                                <span style="color: red;" id="captchaText_err"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-10 col-8">
                                            <input type="hidden" name="form_type" id="form_type" value="registration">
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
