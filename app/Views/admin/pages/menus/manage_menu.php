<section class="content-header">
  	<h1>
	    Home
	    <small>Administration >> Manage Menu</small>
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
			                <th>Status</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($data!=null && sizeof($data)>0){ 
								foreach($data as $i=> $dat): ?>
								<tr>
									<td><?php echo $dat['sequence'];?></td>
									<td> 
										<img onerror="this.src='https://www.merchantsmarket.com/wp-content/uploads/2018/01/menu.png'" src="<?php echo base_url();?>images/restaurantmenus/<?=$dat['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
									</td>
									<td> <?php echo $dat['name'];?> </td>
                                    <td> <?= $dat['status']=='1'? 'Active': 'Inactive'?> </td>
									<td>
										<button type="button" class="btn btn-info btn-block" onclick="showedit('<?php echo $dat['id']?>')"><i class="fa fa-edit"></i>Edit / View</button>
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
<div class="modal modal-default" id="addmenudetailsmodel">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2bbf3a4eb9a6af9bea130026260d6821" id="menudetialformid">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Details</h4>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Menu Category: </label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value=""> Select </option>
                                <?php if($category_data!=null && sizeof($category_data)>0){ 
								foreach($category_data as $i=> $dat): ?>
                                    <option value="<?=$dat['id']?>"> <?=$dat['name']?> ( <?=$dat['type']?>) </option>
                                <?php endforeach; }?>
                            </select>
							<span class="text-danger" id="category_id_err"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Menu Name: <span class="text-danger">*</span> </label>
							<input type="text" name="name" id="name" class="form-control" onchange="remove_error('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Image 1: <span class="text-danger">*</span></label>
                            <span id="current_image"></span>	
							<input class="pad" name="image" id="image" type="file" onchange="remove_error('image')"/>
                            <span class="text-danger" id="image_err"></span>
						</div>
			        </div>
  				 	<div class="form-group">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Image 2: </label>
                            <span id="current_image2"></span>	
							<input class="pad" name="image2" id="image2" type="file"/>
						</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Image 3: </label>
                            <span id="current_image3"></span>	
							<input class="pad" name="image3" id="image3" type="file"/>
						</div>
			        </div>
                    <div class="form-group">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Unit: </label>
                            <input type="text" name="unit" id="unit" class="form-control" onchange="remove_error('unit')">
                            <span class="text-danger" id="unit_err"></span>
						</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Price ($):<span class="text-danger">*</span> </label>
                            <input type="number" name="price" id="price" class="form-control" onchange="remove_error('price')">
                            <span class="text-danger" id="price_err"></span>
						</div>
			        </div>
                    <div class="form-group" id="menu_details">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Short Description:<span class="text-danger">*</span> </label>
							<textarea name="short_description" id="short_description" onchange="remove_error('short_description')" rows="5" class="form-control"></textarea>
							<span class="text-danger" id="short_description_err"></span>
						</div>
					</div>
					<div class="form-group" id="menu_details">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Details:<span class="text-danger">*</span> </label>
							<textarea name="description" id="description" onchange="remove_error('description')" rows="5" class="form-control summernote"></textarea>
							<span class="text-danger" id="description_err"></span>
						</div>
					</div>
					<div class="form-group">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Sequence Number: </label>
							<input type="number" name="sequence" id="sequence" class="form-control" onchange="remove_error('sequence')">
							<span class="text-danger" id="sequence_err"></span>
						</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Status:<span class="text-danger">*</span> </label>
							<div class="form-check-inline">
								<input type="radio" name="status" id="status1" value="1" checked>  Active
								<input type="radio" name="status" id="status0" value="0">   Inactive
								<span id="status_err" class="text-danger"></span>
							</div>
							<span class="text-danger" id="status_err"></span>
						</div>
						<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>After Dark:<span class="text-danger">*</span> </label>
							<div class="form-check-inline">
								<input type="radio" name="after_dark" id="after_dark_no" value="No" checked>  No
								<input type="radio" name="after_dark" id="after_dark_yes" value="Yes">   Yes
								<span id="status_err" class="text-danger"></span>
							</div>
							<span class="text-danger" id="status_err"></span>
						</div> -->
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="action_type" id="action_type">
							<input type="hidden" name="record_id" id="record_id">
							<input type="hidden" name="imageid" id="imageid">
							<input type="hidden" name="imageid2" id="imageid2">
                            <input type="hidden" name="imageid3" id="imageid3">
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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/91a8c1786a4fcce595e4f35d1137f2fb" id="deletemenudetialformid">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
					   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						   	<label>Are you sure you wish to completely delete menu details for <span id="person_name"></span> <span id="warning" class="text-danger"></span> </label>
						</div>
			        </div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="hidden" name="delete_record_id" id="delete_record_id">
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
		$('#addmenudetailsmodel').modal('show');
	}
	function clear_form(){
		$('#name').val('');
		$('#short_description').val('');
		$('#description').val('');
		$('#price').val('');
		$('#unit').val('');
		$('#category_id').val('');
		$('#record_id').val('');
		$('#imageid').html('');
		$('#imageid2').html('');
		$('#imageid3').html('');
		$('#current_image').html('');
		$('#current_image2').html('');
		$('#current_image3').html('');
		$('#description').summernote('code','');
	}
 	function showedit(data){
        clear_form();
        $('#status1').prop('checked',true);
		$('#after_dark_no').prop('checked',true);
        let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/553bcb875a462476cb2475c77cccb776/'+data;
        $.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(data){  
                $('#category_id').val(data.category_id);
                $('#name').val(data.name);
                $('#record_id').val(data.id);
                $('#sequence').val(data.sequence);
                $('#short_description').val( data.short_description);
                $('#price').val( data.price);
                $('#unit').val( data.unit);
                if(data.status=='0'){
					$('#status0').prop('checked',true);
				}
				if(data.after_dark=='Yes'){
					$('#after_dark_yes').prop('checked',true);
				}
				
                $('#description').summernote('code', data.description);
                let current_image='<br><img  src="<?php echo base_url();?>images/restaurantmenus/'+data.image+'" width="150" class="img-text"> ';
				$('#current_image').html(current_image);
                $('#imageid').val(data.image);

                let current_image2='<br><img  src="<?php echo base_url();?>images/restaurantmenus/'+data.image1+'" width="150" class="img-text"> ';
				$('#current_image2').html(current_image2);
				$('#imageid2').val(data.image1);

                let current_image3='<br><img  src="<?php echo base_url();?>images/restaurantmenus/'+data.image2+'" width="150" class="img-text"> ';
				$('#current_image3').html(current_image3);
				$('#imageid3').val(data.image2);
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
		
		if($('#category_id').val()==""){
			$('#category_id_err').html("Please select category");
			ret_type=false;
		}
		if($('#name').val()==""){
			$('#name_err').html("Please provide menu name");
			ret_type=false;
		}
        if($('#image').val()=="" && $('#imageid').val()==""){
			$('#image_err').html("Please provide menu name");
			ret_type=false;
		}
        if($('#price').val()==""){
			$('#price_err').html("Please mention the price for this menu");
			ret_type=false;
		}
        
        if($('#short_description').val()==""){
			$('#short_description_err').html("Please provide menu short description");
			ret_type=false;
		}
		if($('#description').val()==""){
			$('#description_err').html("Please mention the details of the menu");
			ret_type=false;
		}
		return ret_type;
	}
	function savemenudetails(){
		if(validatedform()){
			$('#menudetialformid').submit();
		}
	}
	function delete_records(id,name){
		$('#delete_record_id').val(id);
		$('#person_name').html(name);
		$('#deleterecordid').modal('show');
	}
  
</script>
  	
