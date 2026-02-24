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
        <script>
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
        </script>
    </body>
</html>