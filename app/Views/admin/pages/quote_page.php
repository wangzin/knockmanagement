<section class="content-header">
  	<h1>
	    Home
	    <small> Quote List</small>
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
					<h4 class="modal-title">Message</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Full Name:</label>
							<input type="text" name="full_name" readonly id="full_name" class="form-control" onchange="remove_error('full_name')">
							<span class="text-danger" id="full_name_err"></span>
						</div>
			        </div>
					<div class="form-group">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Contact No: </label>
							<input type="number" name="phone" id="phone" readonly class="form-control" onchange="remove_error('phone')">
							<span class="text-danger" id="phone_err"></span>
						</div>
                       
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Email: </label>
							<input type="email" name="email" id="email" readonly class="form-control" onchange="remove_error('email')">
							<span class="text-danger" id="email_err"></span>
						</div>
			        </div>
					
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Message: </label>
							<textarea name="message" readonly id="message" rows="5" onchange="remove_error('message')" class="form-control"></textarea>
							<span class="text-danger" id="message_err"></span>
						</div>
					</div>
                    <hr>
                    <h4 class="modal-title"><u>Response Section</u></h4>
                    <div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Response Message: </label>
							<textarea name="response" id="response" rows="5" onchange="remove_error('response')" class="form-control"></textarea>
							<span class="text-danger" id="response_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="record_id" id="record_id">
							<button class="btn btn-success" onclick="save_events()" type="button"> <i class="fa fa-edit"></i> Send </button>
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
		let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e3c9b6af1b18ef41ffb8251fc19ddrr92f/'+id;
		$.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(responsedata){  
				$('#record_id').val(responsedata.id);
				$('#full_name').val(responsedata.full_name);
				$('#phone').val(responsedata.phone);
				$('#email').val(responsedata.email);
				$('#message').val(responsedata.message);
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
  	
