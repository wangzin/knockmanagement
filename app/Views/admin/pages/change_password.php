<section class="content-header">
  	<h1>
	    Home
	    <small>Change Password</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
            <form class="bootbox-form form-horizontal" method="POST" action="/1622de66d3ea3e8fd5727ee63525a8f33f839055/f0f25f866f5ebef42fdd897cc22b0045" id="change_password">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                        <div class="form-group row">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                                <label>Current Password</label>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                                <input type="text" name="curr_password" onchange="remove_err('curr_password'), validate_password('curr_password')" id="curr_password" class="form-control">
                                <span class="text-danger" id="curr_password_err"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                                <label for="inputName">New Password</label>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                                <input type="text" onchange="remove_err('new_password')" name="new_password" id="new_password" class="form-control">
                                <span class="text-danger" id="new_password_err"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                                <label for="inputName">Confirm Password</label>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                                <input type="text" onchange="remove_err('confirm_password')" name="confirm_password" id="confirm_password" class="form-control">
                                <span class="text-danger" id="confirm_password_err"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                                <button type="button" id="update_btn" onclick="update_password()" class="btn btn-block btn-primary pull-right btn-flat"><span class="fa fa-edit"> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </section>
  <script>
    function update_password(){
        if(validate_form()){
            $('#change_password').submit();
        }
    }
    function validate_password(){
        $('#update_btn').show();
        $.ajax
        ({
            type : "GET",
            url : "/1622de66d3ea3e8fd5727ee63525a8f33f839055/8765c4c4fa2abbf1a11c01f99f8aff0c/"+$('#curr_password').val(),
            dataType : "json",
            success : function(responseText){
                if(!responseText){
                    $('#curr_password_err').html('Current password mismatch');
                    $('#update_btn').hide();
                }
            }
        });
    }
    function validate_form(){
        let return_type=true;
        if($('#curr_password').val()==""){
            $('#curr_password_err').html('Please provide current password');
            return_type=false;
        }
        if($('#new_password').val()==""){
            $('#new_password_err').html('Please provide new password');
            return_type=false;
        }
        if($('#confirm_password').val()==""){
            $('#confirm_password_err').html('Please do confirm your new password');
            return_type=false;
        }
        if($('#new_password').val()!=$('#confirm_password').val()){
            $('#confirm_password_err').html('Mismatch in new password and confirm password');
            return_type=false;
        }
        return return_type;
    }
    function remove_err(id){
        if($('#'+id).val()!=""){
            $('#'+id+'_err').html('');
        }
    }
  </script>
