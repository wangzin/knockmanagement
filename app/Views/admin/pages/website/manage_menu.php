<section class="content-header">
  	<h1>
	    Home
	    <small>Website Settings >> Manage Menu</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
        <button type="button" class="btn btn-primary pull-right" onclick="showaddDesignation()"> <i class="fa fa-plus"></i> Add new</button>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="data_table" class="table table-bordered table-striped" width="100%">
			            <thead>
			              <tr>
			                <th>Sequence no</th>
			                <th></th>
			                <th>Title</th>
			                <th>Has Submenu</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($data!=null && sizeof($data)>0){ 
								foreach($data as $i=> $dat): ?>
								<tr>
									<td><?php echo $dat['sequence'];?></td>
									<td> 
										<img onerror="this.src='https://www.merchantsmarket.com/wp-content/uploads/2018/01/menu.png'" src="<?php echo base_url();?>images/menu/<?=$dat['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
									</td>
									<td> <?php echo $dat['name'];?> </td>
									<td> <?php echo $dat['has_submenu'];?> </td>
									<td>
										<button type="button" class="btn btn-info btn-block" onclick="showedit('<?php echo $dat['id']?>')"><i class="fa fa-edit"></i>Edit / View</button>
										<?php if($dat['has_submenu']=="Yes"){ ?>
											<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/089e4751c022eb462686ac9f4f296305/<?php echo $dat['id']?>" class="btn btn-primary btn-block" ><i class="fa fa-list"></i>Manage Submenu</a>
										<?php } ?>
										<button type="button" class="btn btn-danger btn-block" onclick="delete_records('<?php echo $dat['id']?>','<?php echo $dat['image']?>','<?php echo $dat['name']?>','<?php echo $dat['has_submenu']?>')"><i class="fa fa-times"></i>Delete</button>
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
<div class="modal modal-default" id="addmenudetailsmodel">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/65fbc67824848cbc8f176518d6521b65" id="menudetialformid">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Details</h4>
				</div>
				<div class="modal-body">
                    <div class="form-group">
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Has Submenu?: </label>
                            <select name="has_submenu" onchange="showdetails()" id="has_submenu" class="form-control">
                                <option value="No"> No </option>
                                <option value="Yes"> Yes </option>
                            </select>
							<span class="text-danger" id="has_submenu_err"></span>
						</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Title: </label>
							<input type="text" name="name" id="name" class="form-control" onclick="remove_err('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
			        </div>
  				 	<div class="form-group" id="menu_image">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Image: </label>
                            <span id="current_image"></span>	
							<input class="pad" name="image" id="image" type="file"/>
						</div>
			        </div>
                    
					<div class="form-group" id="menu_details">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Description: </label>
							<textarea name="description" id="description" rows="5" class="form-control summernote"></textarea>
							<span class="text-danger" id="description_err"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Sequence Number: </label>
							<input type="number" name="sequence" id="sequence" class="form-control" onchange="remove_err('sequence')">
							<span class="text-danger" id="sequence_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="action_type" id="action_type">
							<input type="hidden" name="record_id" id="record_id">
							<input type="hidden" name="imageid" id="imageid">
							<button class="btn btn-success" onclick="savemenudetails()" type="button"> <i class="fa fa-edit"></i> Save</button>
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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/653243d62dffbc325812106c46ca7b7f" id="deletemenudetialformid">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
					   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						   	<label>Are you sure you wish to delete record for <span id="person_name"></span> <span id="warning" class="text-danger"></span> </label>
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
    function showdetails(){
        $('#menu_image').hide();
        $('#menu_details').hide();
        if($('#has_submenu').val()=="No"){
            $('#menu_image').show();
            $('#menu_details').show();
        }
    }
	function showaddDesignation(){
		clear_form();
		$('#sequence').val('<?=$max_seq?>');
		$('#action_type').val('add');
		$('#addmenudetailsmodel').modal('show');
	}
	function clear_form(){
		$('#name').val('');
		$('#record_id').val('');
		$('#current_image').html('');
		$('#description').summernote('code','');
	}
 	function showedit(data){
        let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/1cf47161551a4036fd5ac4e7f64b15fd/'+data;
        $.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(data){  
                $('#name').val(data.name);
                $('#record_id').val(data.id);
                $('#sequence').val(data.sequence);
                $('#description').summernote('code', data.description);
                let current_image='<br><img  src="<?php echo base_url();?>images/menu/'+data.image+'" width="150" class="img-text"> ';
				$('#current_image').html(current_image);
				if(data.type=="Fixed"){
					$('#has_submenu').prop('disabled',true);
				}
				$('#imageid').val(data.image);
				$('#has_submenu').val(data.has_submenu);
				showdetails();
                $('#action_type').val('edit');
                $('#addmenudetailsmodel').modal('show');
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert("Error : "+thrownError);
			} 
		});
 	}
	function validatedform(){
		let ret_type=true;
		if($('#name').val()==""){
			$('#name_err').html("Please provide menu name");
			ret_type=false;
		}
		if($('#has_submenu').val()=="No" && $('#description').val()==""){
			$('#description_err').html("Please provide menu name");
			ret_type=false;
		}
		return ret_type;
	}
	function savemenudetails(){
		if(validatedform()){
			$('#menudetialformid').submit();
		}
	}
	function delete_records(id,image,name,submenu){
		$('#delete_record_id').val(id);
		$('#person_name').html(name);
        if(submenu=="Yes"){
            $('#warning').html('(NOTE: All the Submenu under this menu will be deleted together)');
        }
		$('#delete_imageid').val(image);
		$('#deleterecordid').modal('show');
	}
  
</script>
  	
