<!doctype html>
<html lang="en">
    <?= $this->include('website/includes/header.php');?>
    <body>
        <main>
			<div class="sticky-social-sidebar">
                <a href="#" class="social-icon facebook"><i class="bi-facebook"></i></a>
                <a href="#" class="social-icon twitter"><i class="bi-twitter"></i></a>
                <a href="#" class="social-icon linkedin"><i class="bi-linkedin"></i></a>
                <a href="mailto:knockagency@gmail.com" class="social-icon email"><i class="bi-envelope"></i></a>
            </div>
            <?= $this->include('website/includes/nav.php');?>
            <?= $this->include('website/pages/'.$page_name.'.php');?>
            <?= $this->include('website/includes/footer.php');?>
        </main>
        <!-- JAVASCRIPT FILES -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
        <script src="<?php echo base_url();?>assets/js/click-scroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/vegas.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
        <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            <?php if(session()->getFlashdata('messagedanger')):?>
                Swal.fire({
                    icon: "error",
                    title: "Registration Fail",
                    text: "<?=session()->getFlashdata('messagedanger')?>",
                });
            <?php endif;?>
            <?php if(session()->getFlashdata('message')):?>
                Swal.fire({
                    icon: "info",
                    title: "Thank You",
                    text: "<?=session()->getFlashdata('message')?>",
                });
            <?php endif;?>
            $(function() {
                // $('.hero-slides').vegas({
                //     slides: [
                //         { src: 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d' },
                //         { src: 'https://images.unsplash.com/photo-1497366216548-37526070297c' },
                //         { src: 'images/young-female-barista-wear-face-mask-serving-take-away-hot-coffee-paper-cup-consumer-cafe.jpg' }
                //     ],
                //     timer: false,
                //     animation: 'kenburns',
                // });
                
                let originalstr=$('#slider_1').val();
                let afterrep=originalstr.replace(/"/g, "")
                let sliderarr=afterrep.split(",");
                let formattedData = sliderarr.map(item => {
                    // Step 1: Add double quotes around the key and replace single quotes with double quotes for the value
                    let validJson = item.replace(/(\w+):\s*'/, '"$1": "').replace(/'/g, '"');
                    // Step 2: Parse the modified string as JSON
                    return JSON.parse(validJson);
                });
                
                $('.hero-slides').vegas({
                    slides: formattedData,
                    timer: false,
                    animation: 'kenburns',
                });
            });

            function submitForm(){
                if(validate_form()){
                    $('#registrationform').submit();
                }
            }
            function validate_form(){
                let return_type=true;
                if($('#full_name').val().trim()==''){
                    $('#full_name_err').text('Full name is required');
                    $('#full_name').focus();
                    return_type= false;
                }
                if($('#phone').val().trim()==''){
                    $('#phone_err').text('Phone is required');
                    $('#phone').focus();
                    return_type= false;
                }
                if($('#email').val().trim()==''){
                    $('#email_err').text('Email is required');
                    $('#email').focus();
                    return_type= false;
                }
                if($('input[name="form_type"]').val()=='quote'){
                    if($('#message').val().trim()==''){
                        $('#message_err').text('Message is required');
                        $('#message').focus();
                        return_type= false;
                    }

                }else{
                    if($('#start_date').val().trim()==''){
                        $('#start_date_err').text('Start date is required');
                        $('#start_date').focus();
                        return_type= false;
                    }
                    if($('#worked_before').val().trim()==''){

                        $('#worked_before_err').text('Worked before is required');
                        $('#worked_before').focus();
                        return_type= false;
                    }
                    if ($('input[name="immigration_status[]"]:checked').length === 0) {
                        $('#immigration_status_err').text('Immigration status is required');
                        $('input[name="immigration_status"]').first().focus();
                        return_type = false;
                    }
                    if($('#address').val().trim()==''){
                        $('#address_err').text('Address is required');
                        $('#address').focus();
                        return_type= false;
                    }
                    if ($('input[name="shift[]"]:checked').length === 0) {
                        $('#shift_err').text('Shift is required');
                        $('input[name="shift[]"]').first().focus();
                        return_type = false;
                    }
                    if ($('input[name="employment_status"]:checked').length === 0) {
                        $('#employment_status_err').text('Employment status is required');
                        $('input[name="employment_status"]').first().focus();
                        return_type = false;
                    }
                    if ($('#resume').get(0).files.length === 0) {
                        $('#resume_err').text('Resume file is required');
                        $('#resume').focus();
                        return_type = false;
                    } else{
                        let fileInput = $('#resume').get(0);
                        let file = fileInput.files[0];
                        if (file) {
                            let allowedTypes = ['application/pdf', 
                                                'application/msword', 
                                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                            if ($.inArray(file.type, allowedTypes) === -1) {
                                $('#resume_err').text('Only PDF, DOC, and DOCX files are allowed');
                                $('#resume').val('');
                                return_type = false;
                            }
                        }
                    }  
                }
                
                const recaptchaResponse = document.querySelector('.g-recaptcha-response').value;
                if (!recaptchaResponse) {
                    $('#captchaText_err').html('Please check the recaptcha');
                    retr=false;
                }
                else{
                    $('#captchaText_err').html('');
                }
                return return_type;
                
            }
            function remove_error(id){
                if($('#'+id).val().trim()!=''){
                    $('#'+id+'_err').text('');
                }
            }
            function remove_reperr(id){
                const recaptchaResponse = document.querySelector('.g-recaptcha-response').value;
                if (recaptchaResponse) {
                    $('#captchaText_err').html('');
                }
            }
             function remove_checkbox_error(id){
                if ($('input[name="'+id+'[]"]:checked').length !== 0) {
                    $('#'+id+'_err').text('');
                }else{
                    $('#'+id+'_err').text('Immigration status is required');
                    $('input[name="'+id+'[]"]').first().focus();
                }
            }
            function remove_radio_error(id){
                if ($('input[name="'+id+'"]:checked').length !== 0) {
                    $('#'+id+'_err').text('');
                }else{
                    $('#'+id+'_err').text('Immigration status is required');
                    $('input[name="'+id+'"]').first().focus();
                }
            }
            
        </script>
    </body>
</html>