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
    </body>
</html>