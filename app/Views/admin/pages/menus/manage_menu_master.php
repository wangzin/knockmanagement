<section class="content-header">
  	<h1>
	    Home
	    <small>Administration >> Manage Category</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border pull-right">
			<button type="button" class="btn btn-success" onclick="showcateringnote()"> <i class="fa fa-edit"></i> Catering Note</button>
        	<button type="button" class="btn btn-primary" onclick="showaddDesignation()"> <i class="fa fa-plus"></i> Add new</button>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="data_table" class="table table-bordered table-striped" width="100%">
			            <thead>
			              <tr>
			                <th>Type</th>
			                <th>Name</th>
			                <th>Description</th>
			                <th>Status</th>
							<th>Created At</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($category_list!=null && sizeof($category_list)>0){ 
								foreach($category_list as $i=> $dat): ?>
								<tr>
									<td><?php echo $dat['type'];?></td>
									<td> <?php echo $dat['name'];?> </td>
									<td> <?php echo $dat['description'];?> </td>
									<td> <?= $dat['status']==1? 'Active':'Inactive'?> </td>
									<td> <?php echo $dat['created_at'];?> </td>
									<td>
										<button type="button" class="btn btn-info btn-block" onclick='showedit(<?=$dat["id"]?>)'><i class="fa fa-edit"></i>Edit</button>
										<button type="button" class="btn btn-danger btn-block" onclick="delete_records('<?php echo $dat['id']?>','<?php echo $dat['name']?>')"><i class="fa fa-times"></i>Delete</button>
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
        <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/f4db323b4864a7888c80f3c6a5b9ba05" id="menucategorydetailsformid">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Details</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Type: </label>
							<div class="form-check-inline">
								<input type="radio" name="type" id="type0" value="Regular" checked>  Regular
								<input type="radio" name="type" id="type1" value="After Dark">   After Dark
								<input type="radio" name="type" id="type2" value="Catering">   Catering
							</div>
							<span class="text-danger" id="type_err"></span>
						</div>
			        </div>
					<div class="form-group">
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Name: </label>
							<input type="text" name="name" id="name" class="form-control" onchange="remove_error('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Status: </label>
							<div class="form-check-inline">
								<input type="radio" name="status" id="status1" value="1" checked>  Active
								<input type="radio" name="status" id="status0" value="0">   In Active
							</div>
							<span class="text-danger" id="status_err"></span>
						</div>
			        </div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Description: </label>
								<textarea name="description" id="description" class="form-control"></textarea>
							<span class="text-danger" id="description_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="action_type" id="action_type">
							<input type="hidden" name="record_id" id="record_id">
							<button class="btn btn-success" type="button" onclick="submitedata()"> <i class="fa fa-edit"></i> Save</button>
						</div>
					</div>
				</div>
			</form>
      	</div>
  	</div>
</div>

<div class="modal modal-default" id="deleterecordid">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
        <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/133e5dc2b437d2e93d5386b1417da13f" id="deletemenudetialformid">
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
							<input type="hidden" name="record_type" value="cat" id="delete_record_type">
							<button class="btn btn-success pull-right" type="submit"> <i class="fa fa-check"></i> Yes</button>
							<button type="button" class="btn btn-warning pull-right" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
						</div>
					</div>
				</div>
			</form>
      	</div>
  	</div>
</div>
<div class="modal modal-default" id="categirngnote">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
        <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2a309cda46e95b00d2a5a8afb3cc0047" id="menucategorydetailsformid">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Catering Note</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Name: </label>
							<input type="text" name="catering_note_name" id="catering_note_name" class="form-control" value="<?=$abouts['catering_note_name'];?>" onchange="remove_error('catering_note_name')">
							<span class="text-danger" id="catering_note_name_err"></span>
						</div>
			        </div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Note: </label>
							<textarea name="catering_note" id="catering_note" class="form-control"><?=$abouts['catering_note'];?></textarea>
							<span class="text-danger" id="catering_note_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<button class="btn btn-success" type="submit"> <i class="fa fa-edit"></i> Save</button>
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
		$('#name').val('');
		$('#record_id').val('');
		$('#action_type').val('add');
		$('#adddesignationid').modal('show');
	}

	function showcateringnote(){
		$('#categirngnote').modal('show');
	}

 	function showedit(id){
		$('#status1').prop('checked',true);
		$.ajax
        ({
            type : "GET",
            url : "/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/b9b71f9d1094903f4ddf7b61549ddd6a/"+id,
            dataType : "json",
            success : function(data){
                if(data){
                    $('#name').val(data.name);
                    $('#description').val(data.description);
					$('#record_id').val(data.id);
					if(data.status=="0"){
						$('#status0').prop('checked',true);
					}
					let radios = document.getElementsByName("type");
					radios.forEach(radio => {
						if (radio.value === data.type) {
							radio.checked = true; 
						}
					});
					$('#action_type').val('edit');
					$('#adddesignationid').modal('show');
                }
            }
        });
 	}
	function delete_records(id,image,name){
		$('#delete_record_id').val(id);
        $.ajax
        ({
            type : "GET",
            url : "/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/7e7aa08a22762ed43cb476a5a0aece65/"+id,
            dataType : "json",
            success : function(data){
                if(data=='false'){
                    Swal.fire({
                        icon: "error",
                        title: "Sorry",
                        text: "Some of the menu are mapped to this category. Please update them before taking this action!",
                    });
                }else{
                    $('#person_name').html(name);
                    $('#deleterecordid').modal('show');
                }
            }
        });
	}
	function validated_form(){
		let ret_type=true;
		if($('#name').val()==""){
			$('#name_err').html("Please provide menu name");
			ret_type=false;
		}
		return ret_type;
	}
	function submitedata(){
		if(validated_form()){
			$('#menucategorydetailsformid').submit();
		}
	}
  
</script>
  	
