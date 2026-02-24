<section class="content-header">
  	<h1>
	    Home
	    <small>Website Settings >> Manage Events </small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
        	<button type="button" class="btn btn-primary pull-right" onclick="showaddDesignation()"> <i class="fa fa-plus"></i> Add new</button>
	    </div>
	    <div class="box-body">
	    	<div class="row form-group">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="data_table" class="table table-bordered table-striped" width="100%">
			            <thead>
			              <tr>
			                <th></th>
			                <th>Title</th>
							<th>Descrition</th>
							<th>Seq</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($data!=null && sizeof($data)>0){ 
								foreach($data as $i=> $dat): ?>
								<tr>
									<td> 
										<img onerror="this.src='https://www.merchantsmarket.com/wp-content/uploads/2018/01/menu.png'" src="<?php echo base_url();?>images/services/<?=$dat['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
									</td>
									<td> <?php echo $dat['name'];?> </td>
									<td> <?php echo $dat['description'];?> </td>
									<td> <?php echo $dat['sequence'];?> </td>
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
<div class="modal modal-default" id="adddesignationid">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/f82f14bcb55ca6da880d182cee0c951f" id="servicesform">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Details</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
					   	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						   	<label>Image:<span class="text-danger">*</span> </label>
							<span id="current_image"></span>	
							<input class="pad" name="image" id="image" onchange="remove_error('image')" type="file"/>
							<span class="text-danger" id="image_err"></span>
						</div>
			            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<label>Name:<span class="text-danger">*</span> </label>
							<input type="text" name="name" id="name" class="form-control" onchange="remove_error('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<label>Sequence No: <span class="text-danger">*</span></label>
							<input type="number" name="sequence" id="sequence" class="form-control" onchange="remove_error('sequence')">
							<span class="text-danger" id="sequence_err"></span>
						</div>
			        </div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Short Description: <span class="text-danger">*</span> </label>
							<textarea name="description" id="description" rows="5" class="form-control"></textarea>
							<span class="text-danger" id="description_err"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Details: </label>
							<textarea name="details" id="details" rows="5" class="form-control summernote"></textarea>
							<span class="text-danger" id="details_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="action_type" id="action_type">
							<input type="hidden" name="record_id" id="record_id">
							<input type="hidden" name="imageid" id="imageid">
							<button class="btn btn-success" type="button" onclick="save_slider()"> <i class="fa fa-edit"></i> Save</button>
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
        <form class="bootbox-form form-horizontal" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2346265cc0cdd0977eeacc481987ed1c" id="deleteserviceform">
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
	function showaddDesignation(){
		clear_form();
		$('#sequence').val('<?=$max_seq?>');
		$('#action_type').val('add');
		$('#adddesignationid').modal('show');
	}
	function clear_form(){
		$('#name').val('');
		$('#description').val('');
		$('#sequence').val('');
		$('#record_id').val('');
		$('#details').summernote('code','');
	}
 	function showedit(id){
		let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/998dcb8c3a48509268b92532f247b244/'+id;
        $.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(data){  
                $('#name').val(data.name);
				$('#description').val(data.description);
				$('#imageid').val(data.image);
				$('#record_id').val(data.id);
				$('#sequence').val(data.sequence);
				$('#details').summernote('code', data.details);
                let current_image='<br><img  src="<?php echo base_url();?>images/services/'+data.image+'" width="150" class="img-text"> ';
				$('#current_image').html(current_image);
				$('#action_type').val('edit');
				$('#adddesignationid').modal('show');
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
	function validatedform(){
		let ret_type=true;
		if($('#image').val()=="" && $('#imageid').val()==""){
			$('#image_err').html("Please select image");
			ret_type=false;
		}
		if($('#name').val()==""){
			$('#name_err').html("Please provide name for this service");
			ret_type=false;
		}
		if($('#sequence').val()==""){
			$('#sequence_err').html("Sequence number is required");
			ret_type=false;
		}
		if($('#description').val()==""){
			$('#description_err').html("Description is required");
			ret_type=false;
		}
		return ret_type;
	}
	function save_slider(){
		if(validatedform()){
			$('#servicesform').submit();
		}
	}
</script>
  	
