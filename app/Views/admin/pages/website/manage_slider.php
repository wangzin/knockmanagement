<section class="content-header">
  	<h1>
	    Home
	    <small>Website Settings >> Manage Slider </small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	   
	    <div class="box-body">
			<form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/41d41a70ee159c753825d644a0705712" id="slidertextfom">
				<div class="row form-group">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label>Slider Text Title: </label>
						<input type="text" name="slider_title" id="slider_title" class="form-control" value="<?=$abouts['slider_title']?>" onclick="remove_err('slider_title')">
						<span class="text-danger" id="slider_title_err"></span>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label>Slider Text Details: </label>
						<textarea name="slider_details" id="slider_details" rows="5" class="form-control"><?=$abouts['slider_details']?></textarea>
						<span class="text-danger" id="slider_de_err"></span>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button type="button" class="btn btn-info" onclick="update_slider_type()"><i class="fa fa-check"></i>Save</button>
					</div>
				</div>
			</form>
			<!-- <div class="row form-group">
				<label class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Slider Type: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<select name="slider_type" id="slider_type" class="form-control" onchange="update_slider_type()">
						<option value=""> NA </option>
						<option value="image"> Image/Pictures </option>
						<option value="video"> Video </option>
					</select>
				</div>
			</div> -->
		<div class="box-header with-border">
        	<button type="button" id="addnewsliderbtn" class="btn btn-primary pull-right" onclick="showaddDesignation()"> <i class="fa fa-plus"></i> Add new</button>
	    </div>
			<div class="row form-group" id="video_sliders" style="display:none">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/102561b2d487f9dbaa62a55c8bbc9130" id="updatevideosform">
						<label>Video:<span class="text-danger">*</span> </label>
						<input class="pad" name="slidervideo" id="slidervideo" onchange="remove_error('slidervideo')" type="file"/>
						<span class="text-danger" id="slidervideo_err"></span>
						<input type="hidden" name="slidervideoid" id="slidervideoid" value="<?=$abouts['video_slider']?>">
						<button type="button" class="btn btn-primary" onclick="updatevideos()"> <i class="fa fa-save"></i> Update</button>
					</form>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<label>Current Video: </label><br>
					<video autoplay muted loop playsinline style="width:80%">
                        <source src="<?php echo base_url();?>images/sliders/<?=$abouts['video_slider']?>" type="video/mp4">
                    </video>
				</div>
			</div>
	    	<div class="row form-group" id="picture_sliders">
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
		            	 	<?php if($slider_data!=null && sizeof($slider_data)>0){ 
								foreach($slider_data as $i=> $dat): ?>
								<tr>
									<td> 
										<img src="<?php echo base_url();?>images/sliders/<?=$dat['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
									</td>
									<td> <?php echo $dat['name'];?> </td>
									<td> <?php echo $dat['description'];?> </td>
									<td> <?php echo $dat['seq'];?> </td>
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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/ecf5a92227ff1f85daa1beaa9f8a3373" id="sliderform">
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
							<label>Title:<span class="text-danger">*</span> </label>
							<input type="text" name="name" id="name" class="form-control" onchange="remove_error('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<label>Sequence No: <span class="text-danger">*</span></label>
							<input type="number" name="seq" id="seq" class="form-control" onchange="remove_error('seq')">
							<span class="text-danger" id="seq_err"></span>
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
        <form class="bootbox-form form-horizontal" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2bcacebf827b3134e0507192378273bc" id="sliderdeleteform">
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
		$('#seq').val('<?=$max_seq?>');
		$('#action_type').val('add');
		$('#adddesignationid').modal('show');
	}
	function clear_form(){
		$('#name').val('');
		$('#description').val('');
		$('#seq').val('');
		$('#seq').val('');
		$('#record_id').val('');
		$('#details').summernote('code','');
	}
 	function showedit(id){
		let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/b1ac6ca4b1dba1e73eb8f0bf4e458f4c/'+id;
        $.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(data){  
                $('#name').val(data.name);
				$('#description').val(data.description);
				$('#imageid').val(data.image);
				$('#record_id').val(data.id);
				$('#seq').val(data.seq);
				$('#details').summernote('code', data.details);
                let current_image='<br><img  src="<?php echo base_url();?>images/sliders/'+data.image+'" width="150" class="img-text"> ';
				$('#current_image').html(current_image);
				if(data.type=="Fixed"){
					$('#has_submenu').prop('disabled',true);
				}
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
			$('#image_err').html("Please select image for this slider");
			ret_type=false;
		}
		if($('#name').val()==""){
			$('#name_err').html("Please provide sliders name");
			ret_type=false;
		}
		if($('#seq').val()==""){
			$('#seq_err').html("Sequence number is required");
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
			$('#sliderform').submit();
		}
	}
	function updatevideos(){
		if($('#slidervideo').val()!=""){
			$('#updatevideosform').submit();
		}
	}
	function validatedslidettextform(){
		let ret=true;
		if($('#slider_title').val()==""){
			$('#slider_title_err').html("Please enter slider title");
			ret=false;
		}
		if($('#slider_details').val()==""){
			$('#slider_de_err').html("Please enter slider details");
			ret=false;
		}
		return ret;
	}
	function update_slider_type(){
		if(validatedslidettextform()){
			$('#slidertextfom').submit();
		}
		// window.location='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/41d41a70ee159c753825d644a0705712/'+$('#slider_type').val();
	}
	$('#slider_type').val('<?=$abouts['slider_type']?>');
	if('<?=$abouts['slider_type']?>'=='image'){
		$('#picture_sliders').show();
		$('#addnewsliderbtn').show();
	}
	
	if('<?=$abouts['slider_type']?>'=='video'){
		$('#video_sliders').show();
	}
</script>
  	
