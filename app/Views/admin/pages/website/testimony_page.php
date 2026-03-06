<section class="content-header">
  	<h1>
	    Home
	    <small>Website Settings >> Manage Testimony</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
        	<button type="button" class="btn btn-primary pull-right" onclick="showemployee()"> <i class="fa fa-plus"></i> Add New</button>
	    </div>
	    <div class="box-body">
            <div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="data_table" class="table table-bordered table-striped" width="100%">
			            <thead>
			              <tr>
			                <th></th>
			                <th>Name</th>
                            <th>description</th>
							<th>Sequence No</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($testimony_data!=null && sizeof($testimony_data)>0){ 
								foreach($testimony_data as $i=> $dat): ?>
								<tr>
                                    <td> 
										<img onerror="this.src='<?php echo base_url();?>images/logo.jpg'" src="<?php echo base_url();?>images/testimony/<?=$dat['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
									</td>
                                    <td> <?= $dat['name']?> </td>
                                    <td> <?= $dat['description']?> </td>
									<td> <?= $dat['sequence'];?> </td>
									<td>
										<button type="button" class="btn btn-info btn-block" onclick="showedit('<?php echo $dat['id']?>')"><i class="fa fa-edit"></i>Edit</button>
										<button type="button" class="btn btn-danger btn-block" onclick="delete_records('<?php echo $dat['id']?>','<?php echo $dat['image']?>','<?php echo $dat['name']?>')"><i class="fa fa-times"></i>Delete</button>
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
<div class="modal modal-default" id="employeemodel">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/0f412931d0b29feb424115e01160976d" id="employeeform">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Testimony Details</h4>
				</div>
				<div class="modal-body">
                    <div class="form-group">
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Image:<span class="text-danger">*</span> </label>
                            <span id="current_image"></span>	
							<input class="pad" name="image" onchange="remove_error('image')" id="image" type="file"/>
                            <span class="text-danger" id="image_err"></span>
						</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Sequence Number: <span class="text-danger">*</span></label>
							<input type="number" name="sequence" value="0" id="sequence" class="form-control" onchange="remove_error('sequence')">
							<span class="text-danger" id="sequence_err"></span>
						</div>
			        </div>
					<div class="form-group">
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Full Name: <span class="text-danger">*</span></label>
							<input type="text" name="name" id="name" class="form-control" onchange="remove_error('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
			        </div>
                    <div class="form-group">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Deatils: <span class="text-danger">*</span></label>
							<textarea name="description" rows="5" id="description" onchange="remove_error('description')" class="form-control"></textarea>
							<span class="text-danger" id="description_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input type="hidden" name="action_type" id="action_type"/>
                            <input type="hidden" name="record_id" id="record_id"/>
                            <input type="hidden" name="imageid" id="imageid"/>
							<button class="btn btn-success" onclick="saveemployee()" type="button"> <i class="fa fa-edit"></i> Save</button>
						</div>
					</div>
				</div>
			</form>
      	</div>
  	</div>
</div>
<div class="modal modal-default" id="deleterecordid" >
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
        <form class="bootbox-form form-horizontal" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/29e9b464daf4fc9119eee667bbe8179a" id="deleteserviceform">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
					   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						   	<label>Are you sure you wish to delete record for <span id="person_name"></span> </label>
						</div>
			        </div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="hidden" name="record_id" id="delete_record_id">
							<input type="hidden" name="imageid" id="delete_imageid">
							<button class="btn btn-success pull-right" type="submit"> <i class="fa fa-check"></i> Yes</button>
							<button type="button" class="btn btn-warning pull-right" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
						</div>
					</div>
				</div>
			</form>
      	</div>
  	</div>
</div>
<script>
    function showemployee(){
        $('#name').val('');
        $('#title').val('');
        $('#position').val('');
        $('#sequence').val('<?=$max_seq?>');
        $('#description').val('');
		$('#current_image').html('');
        $('#action_type').val('add');
        $('#employeemodel').modal('show');
    }
    function validatedform(){
        let retur=true;
        if($('#name').val()==""){
            $('#name_err').html("Please mention the name");
            $('#name').focus();
            retur=false;
        }
        if($('#position').val()==""){
            $('#position_err').html("Please mention the position");
            $('#position').focus();
            retur=false;
        }
       
        if($('#description').val()==""){
            $('#description_err').html("Please mention the description");
            $('#description').focus();
            retur=false;
        }
        return retur;
    }
    function saveemployee(){
        if(validatedform()){
            $('#employeeform').submit();
        }
    }
    function showedit(id){
        let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2d46ce35ca107546bcfarrr995da6099/'+id;
		$.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(responsedata){  
                $('#name').val(responsedata.name);
                $('#description').val(responsedata.description);
                $('#sequence').val(responsedata.sequence);
                $('#record_id').val(responsedata.id);
                let current_image='<br><img src="<?php echo base_url();?>images/testimony/'+responsedata.image+'" width="150" class="img-text"> ';
				$('#current_image').html(current_image);
				$('#imageid').val(responsedata.image);
                $('#action_type').val('edit');
                $('#employeemodel').modal('show');
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert("Error : "+thrownError);
			} 
		});
    }
	function delete_records(id,image,name){
		$('#delete_record_id').val(id);
		$('#person_name').html(name);
		$('#delete_imageid').val(image);
		$('#deleterecordid').modal('show');
	}
</script>
