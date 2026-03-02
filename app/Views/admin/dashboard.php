<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Commercial Cleaning Services in Toronto |  <?=$abouts['org_name']?></title>
        <meta name="description" content="Knock Management is a professional cleaning company in Toronto offering commercial, office and janitorial cleaning services. Get a free quote today.">
        <link rel="shortcut icon" href="<?php echo base_url();?>images/<?=$abouts['logo'];?>" type="image/png">
        <!-- <link rel="icon" href="<?php echo base_url();?>images/<?=$abouts['logo']?>" type="image/x-icon" /> -->
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/Ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/jvectormap/jquery-jvectormap.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/dist/css/AdminLTE.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/dist/css/skins/_all-skins.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin/summernote/summernote-lite.css"/>
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <script src="<?php echo base_url();?>admin/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        <?=  $this->include('admin/includes/header.php');?>
        <?=  $this->include('admin/includes/sidebar.php');?>
            <div class="content-wrapper">
                <?php if(session()->getFlashdata('page')):?>
                    <?= $this->include(session()->getFlashdata('page')); ?>
                <?php endif;?>
            </div>
        </div>
    </body>
    <script src="<?php echo base_url();?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admin/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url();?>admin/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url();?>admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>admin/bower_components/chart.js/Chart.js"></script>
    <script src="<?php echo base_url();?>admin/dist/js/pages/dashboard2.js"></script>
    <script src="<?php echo base_url();?>admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>admin/bower_components/datatables.net/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admin/dist/js/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>admin/summernote/summernote-lite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <script>
       
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
            $('.summernote').summernote({
                height:300,
                fontNames: ['Arial', 'Courier New', 'Helvetica', 'Times New Roman', 'Montserrat', 'Poppins','Amelia', 'Roboto',], // Custom fonts
                toolbar: [
                    // Define the custom toolbar with required options
                    ['style', ['bold', 'italic', 'underline', 'clear']], // Text styles
                    ['font', ['strikethrough', 'superscript', 'subscript','fontsize']], // Strikethrough and superscript/subscript
                    ['fontname', ['fontname']], // Font name
                    ['color', ['forecolor', 'backcolor']], // Text and background color
                    ['para', ['ul', 'ol', 'paragraph']], // Lists and alignment
                    ['table', ['table']], // Table option
                    ['insert', ['link', 'picture', 'video']], // Insert media options
                    ['view', ['fullscreen', 'codeview', 'help']] // View options
                ]
            });
        });
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        <?php if(session()->getFlashdata('message')):?>
            Toast.fire({
                icon: "success",
                title: "<?=session()->getFlashdata('message')?>"
            });
        <?php endif;?>
        <?php if(session()->getFlashdata('messagedanger')):?>
            Toast.fire({
                icon: "error",
                title: "<?=session()->getFlashdata('messagedanger')?>"
            });
        <?php endif;?>
        setTimeout(function() {
            $('.responseMessage').fadeOut('slow');
        }, 10000);
        setTimeout(function() {
            $('.acknowledgementmessage').fadeOut('slow');
        }, 8000);

        function remove_error(id){
            if($('#'+id).val().trim()!=""){
                $('#'+id+'_err').html('');
                $('#'+id+'_error').html('');
            }
        }
      </script>
</html>
