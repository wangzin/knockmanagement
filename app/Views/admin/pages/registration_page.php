<section class="content-header">
  	<h1>
	    Home
	    <small> Registration List</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="data_table" class="table table-bordered table-striped" width="100%">
			            <thead>
			              <tr>
			                <th>Name</th>
							<th>Contact No.</th>
							<th>Email</th>
							<th>Created On</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($data!=null && sizeof($data)>0){ 
								foreach($data as $i=> $dat): ?>
								<tr>
									<td> <?php echo $dat['full_name'];?> </td>
									<td> <?php echo $dat['phone'];?> </td>
									<td> <?php echo $dat['email'];?> </td>
									<td> <?= $dat['created_at']?> </td>
									<td>
										<button type="button" class="btn btn-info btn-block" onclick="showedit('<?php echo $dat['id']?>')"><i class="fa fa-edit"></i> Open</button>
									</td>
								</tr>
			               	<?php endforeach; }?>
			            </tbody>
			        </table>
			    </div>
			</div>
		</div>
	</div>
</section>
<div class="modal modal-default" id="adddesignationid">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/88da9e0af950a8a566f4a67d9415ba32" id="eventdetialsform">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Registration Details</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Full Name:</label>
							<input type="text" name="full_name" id="full_name" class="form-control" onchange="remove_error('full_name')">
						</div>
			        </div>
					<div class="form-group">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Contact No: </label>
							<input type="number" name="phone" id="phone" class="form-control" onchange="remove_error('phone')">
							<span class="text-danger" id="phone_err"></span>
						</div>
                       
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Email: </label>
							<input type="email" name="email" id="email" class="form-control" onchange="remove_error('email')">
							<span class="text-danger" id="email_err"></span>
						</div>
			        </div>
					
					<div class="form-group">
						 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Date Available to Start:</label>
							<input type="date" name="start_date" id="start_date" class="form-control">
							<span class="text-danger" id="start_date_err"></span>
						</div>
						 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Have you worked with us before? </label>
							<div class="form-check-inline">
								<input type="radio" name="worked_before" id="worked_before1" value="Yes">  Yes
								<input type="radio" name="worked_before" id="worked_before0" value="No">   No <br>
							</div>
							<span class="text-danger" id="worked_before_err"></span>
						</div>
					</div>
                    <div class="form-group">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Immigration Status: </label><br>
                                        <input type="checkbox" name="immigration_status[]" id="immigration-status-student" value="Student" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white checkbox-padding-right">Student.</label>
                                        <input type="checkbox" name="immigration_status[]" id="immigration-status-work-permit" value="Work Permit" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white checkbox-padding-right">Work Permit.</label>
                                        <input type="checkbox" name="immigration_status[]" id="immigration-status-pr" value="PR" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white checkbox-padding-right">PR/Citizen.</label>
                                        <input type="checkbox" name="immigration_status[]" id="immigration-status-other" value="Other" onchange="remove_checkbox_error('immigration_status')"> <label class="text-white">Other.</label><br>
                                        <span class="text-danger" id="immigration_status_err"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Shift looking for:  </label><br>
                                        <input type="checkbox" name="shift[]" id="shift-morning" value="Morning" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Morning.</label>
                                        <input type="checkbox" name="shift[]" id="shift-afternoon" value="Afternoon" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Afternoon.</label>
                                        <input type="checkbox" name="shift[]" id="shift-night" value="Night" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Night.</label>
                                        <input type="checkbox" name="shift[]" id="shift-weekend" value="Weekend" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Weekend.</label>
                                        <input type="checkbox" name="shift[]" id="shift-any" value="Any" onchange="remove_checkbox_error('shift')"> <label class="text-white checkbox-padding-right">Any.</label>
                                        <br><span class="text-danger" id="shift_err"></span>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="hidden" id="file_path"/>
                            <button class="btn btn-success" onclick="openresume()" type="button"> <i class="fa fa-envelope-open-o"></i> Resume</button>
                        </div>
                    </div>
					
                    <div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Current Employment Status:  </label><br>
							<input type="radio" name="employment_status" id="employment-status-employed-full" value="Employed-Full" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Employed Full-Time.</label>
                            <input type="radio" name="employment_status" id="employment-status-employed-part" value="Employed-Part" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Employed Part-Time.</label>
                            <input type="radio" name="employment_status" id="employment-status-unemployed" value="Unemployed" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Unemployed.</label>
                            <input type="radio" name="employment_status" id="employment-status-student" value="Student" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Student.</label>
                            <input type="radio" name="employment_status" id="employment-status-retired" value="Retired" onchange="remove_radio_error('employment_status')"> <label class="text-white checkbox-padding-right">Retired.</label>
                            <br><span class="text-danger" id="employment_status_err"></span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Address: </label>
							<textarea name="address" id="address" rows="5" onchange="remove_error('address')" class="form-control"></textarea>
							<span class="text-danger" id="address_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="action_type" id="action_type">
							<input type="hidden" name="record_id" id="record_id">
							<!-- <button class="btn btn-success" onclick="save_events()" type="button"> <i class="fa fa-edit"></i> Save</button> -->
						</div>
					</div>
				</div>
			</form>
      	</div>
  	</div>
</div>

<script type="text/javascript">
	$(function () {
		$('#data_table').DataTable({
			'paging'      : true,
			'lengthChange': true,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : true,
			'scrollX'   :true
		});
	});

    function save_events(){
        if(validated_form()){
            $('#datetimerowcount').val(rowCount);
            $('#eventdetialsform').submit();
        }
    }
    function validated_form(){
        let retur_ty=true;
        if($('#name').val()==""){
            $('#name_err').html('Please provide event name');
			$('#name').focus();
            retur_ty=false;
        }
       
        return retur_ty;
    }

 	function showedit(id){
		let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e3c9b6af1b18ef41ffb8251fc19dd8c92f/'+id;
		$.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(responsedata){  
				$('#full_name').val(responsedata.full_name);
				$('#phone').val(responsedata.phone);
				$('#email').val(responsedata.email);
				$('#start_date').val(responsedata.start_date);
				$('#address').val(responsedata.address);

				$('#file_path').val('<?= base_url() ?>attachment/' + responsedata.resume);
                $('#worked_before1').prop('checked',true);
				if(responsedata.worked_before=='No'){
					$('#worked_before0').prop('checked',true);
				}
				// First uncheck all
                $('input[name="immigration_status[]"]').prop('checked', false);
                $('input[name="shift[]"]').prop('checked', false);

                // Convert string to array
                var statuses = responsedata.immigration_status.split(',');
                var shifts = responsedata.shift.split(',');

                // Loop and check matching ones
                $.each(statuses, function(index, value) {
                    $('input[name="immigration_status[]"][value="' + value.trim() + '"]').prop('checked', true);
                });
                $.each(shifts, function(index, value) {
                    $('input[name="shift[]"][value="' + value.trim() + '"]').prop('checked', true);
                });
                $('input[name="employment_status"][value="' + responsedata.employment_status + '"]').prop('checked', true);
				$('#action_type').val('edit');
				$('#adddesignationid').modal('show');
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert("Error : "+thrownError);
			} 
		});
 	}

    function openresume(fileUrl){
        var fileUrl = $('#file_path').val();

        if(fileUrl){
            window.open(fileUrl, '_blank');
        } else {
            alert('Resume not found');
        }
    }

</script>
  	
