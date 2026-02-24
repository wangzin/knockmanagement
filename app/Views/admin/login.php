<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title><?=$abouts['org_name']?></title>
        <!-- <link rel="shortcut icon" href="<?php echo base_url();?>fixed_images/icon1.jpg" type="image/png"> -->
        <link rel="shortcut icon" href="<?php echo base_url();?>images/<?=$abouts['logo']?>" type="image/png" />
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>admin/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page" style="background-image: url('https://images.ctfassets.net/hrltx12pl8hq/28ECAQiPJZ78hxatLTa7Ts/2f695d869736ae3b0de3e56ceaca3958/free-nature-images.jpg?fit=fill&w=1200&h=630');background-repeat:no-repeat;background-size: cover;">
        <div class="login-box">
            <div class="login-logo text-uppercase text-bold">
                <a style="color:#0a0a0a" href="/"><b><?=$abouts['org_name']?></b></a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg text-bold">Login to Start Your Session</p>
                <?php if(session()->getFlashdata('message')):?>
                    <div class="alert alert-danger">
                       <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif;?>
                <form method="post" action="/b6fcfce4e41ea7c76711a3e80acbf51adc09705a/99dea78007133396a7b8ed70578ac6ae" id="login_form">
                    <div class="form-group has-feedback">
                        <input type="email" id="email" onchange="remove_err('email')" name="email" class="form-control" placeholder="User Name">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span class="text-danger" id="email_err"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" onchange="remove_err('passwordid')" id="passwordid" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <span class="text-danger" id="passwordid_err"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <input type="checkbox" id="chk_box" onclick="showpassword('chk_box')"> Show password
                        </div>
                        <div class="col-xs-4">
                            <button type="button" onclick="submit_form()" class="btn btn-primary btn-block btn-flat">login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="<?php echo base_url();?>admin/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url();?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>admin/plugins/iCheck/icheck.min.js"></script>
        <script>
            function showpassword(id){
                if($('#'+id).prop('checked')){
                    $('#passwordid').attr('type', 'text');
                }else{
                    $('#passwordid').attr('type', 'password');
                }
            }
            function submit_form(){
                if(validated()){
                    $('#login_form').submit();
                }
            }
            function validated(){
                let ret=true;
                if($('#email').val()==""){
                    $('#email_err').html('Please enter user name');
                    ret=false;
                }
                if($('#passwordid').val()==""){
                    $('#passwordid_err').html('Please enter password');
                    ret=false;
                }
                return ret;
            }
            function remove_err(id){
                if($('#'+id).val()!=""){
                    $('#'+id+'_err').html('');
                }
            }
        </script>
    </body>
</html>
