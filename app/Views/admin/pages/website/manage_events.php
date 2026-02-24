<section class="content-header">
  	<h1>
	    Home
	    <small>Website Settings >> Manage Events</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
        	<button type="button" class="btn btn-primary pull-right" onclick="showaddDesignation()"> <i class="fa fa-plus"></i> Add New</button>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="data_table" class="table table-bordered table-striped" width="100%">
			            <thead>
			              <tr>
			                <th></th>
			                <th>Name</th>
							<th>Place</th>
							<th>Price</th>
							<th>Season</th>
							<th>Capacity</th>
							<th>Status</th>
							<th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php if($event_data!=null && sizeof($event_data)>0){ 
								foreach($event_data as $i=> $dat): ?>
								<tr>
									<td> 
										<img onerror="this.src='<?php echo base_url();?>images/logo.jpg'" src="<?php echo base_url();?>images/events/<?=$dat['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
									</td>
									<td> <?php echo $dat['name'];?> </td>
									<td> <?php echo $dat['event_address'];?> </td>
									<td> $ <?php echo $dat['price'];?> </td>
									<td> 
										<?php echo $dat['current_season'];?> 
										<?php if(sizeof($dat['previous_season'])>0){?>
											<select class="form-control" name="pre_event" id="pre_event" onchange="loadeventpage(this.value,'<?php echo $dat['id']?>')">
												<option value="">Select to load</option>
												<?php foreach($dat['previous_season'] as $k=> $sea):?>
													<option value="<?=$sea['id']?>"><?=$sea['season']?></option>
												<?php endforeach; ?>
											</select>
										<?php }?>
									</td>
									<td> <?= $dat['total_registration']?> / <?= $dat['capacity']?> </td>
									<td> <?= $dat['status']?> </td>
									<td>
										<button type="button" class="btn btn-info btn-block" onclick="showedit('<?php echo $dat['id']?>')"><i class="fa fa-edit"></i> Edit</button>
										<?php if($dat['price']>0){ ?>
                                       	 	<button type="button" class="btn btn-primary btn-block" onclick="show_coupon_manage('<?php echo $dat['id']?>')"><i class="fa fa-plus"></i> Coupon</button>
										<?php  }?>
										<button type="button" class="btn btn-success btn-block" onclick="show_attendees('<?php echo $dat['id']?>')"><i class="fa fa-users"></i> Attendees</button>
										<button type="button" class="btn btn-github btn-block" onclick="show_notification('<?php echo $dat['id']?>')"><i class="fa fa-envelope-o"></i> Notification</button>
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
					<h4 class="modal-title">Event Details</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Image: </label>
							<span id="current_image"></span>		
							<img id="imagetoedit" class="img-text"> 
							<input class="pad" name="image" id="image" type="file"/>
						</div>
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Event Name:<span class="text-danger">*</span> </label>
							<input type="text" name="name" id="name" class="form-control" onchange="remove_error('name')">
							<span class="text-danger" id="name_err"></span>
						</div>
			        </div>
					<div class="form-group">
					   	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Price: </label>
							<input type="number" name="price" id="price" class="form-control" onchange="remove_error('price')" onfocus="if(this.value == '0') this.value = '';" onblur="if(this.value == '') this.value = '0';" value="0">
							<span class="text-danger" id="price_err"></span>
						</div>
                       
			            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Event Address:<span class="text-danger">*</span> </label>
							<textarea name="event_address" id="event_address" class="form-control" onchange="remove_error('event_address')"></textarea>
							<span class="text-danger" id="event_address_err"></span>
						</div>
			        </div>
					
					<div class="form-group">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<label>Sequence Number:<span class="text-danger">*</span> </label>
							<input type="number" name="sequence" id="sequence" class="form-control">
							<span class="text-danger" id="sequence_err"></span>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<label>Status:<span class="text-danger">*</span> </label>
							<div class="form-check-inline">
								<input type="radio" name="status" id="status1" value="Open" checked>  Open
								<input type="radio" name="status" id="status0" value="Closed">   Closed <br>
								<input type="radio" name="status" id="status2" value="Comming Soon">   Comming Soon
								<input type="radio" name="status" id="status3" value="Inactive">   Inactive
								<span id="status_err" class="text-danger"></span>
							</div>
							<span class="text-danger" id="status_err"></span>
						</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   	<label>Capacity:<span class="text-danger">*</span> </label>
							<input type="number" name="capacity" id="capacity" class="form-control" onchange="remove_error('capacity')" onfocus="if(this.value == '0') this.value = '';" onblur="if(this.value == '') this.value = '0';" value="0">
							<span class="text-danger" id="capacity_err"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	<label><u><i>Event Schedules</i><span class="text-danger">*</span> </u></label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Previous Seasons</label><br>
							<span class="text-danger" id="previous_seasons"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Season:<span class="text-danger">*</span> (Attendees will be based on this field) </label>
							<input type="text" name="event_season" placeholder="Winder Coaching. Nov, 2024 - March, 2025" id="event_season" class="form-control" onchange="remove_error('event_season')">
							<span class="text-danger" id="event_season_err"></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>(click on this button when you change the season)</label><br>
							<button type="button" class="btn btn-xs btn-primary" onclick="add_more_schedule()"><i class="fa fa-plus"></i> Add New Season</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<label>Start Time:<span class="text-danger">*</span> </label>
							<input type="time" name="event_from_time" id="event_from_time" class="form-control" onchange="remove_error('event_from_time')">
							<span class="text-danger" id="event_from_time_err"></span>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<label>End Time:<span class="text-danger">*</span> </label>
							<input type="time" name="event_to_time" id="event_to_time" class="form-control" onchange="remove_error('event_to_time')">
							<span class="text-danger" id="event_to_time_err"></span>
						</div>
					</div>
                    <div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<table id="datetime_table" class="table table-bordered table-striped" width="100%">
								<thead>
									<tr>
										<th>Date (Month/Day/Year)</th>
										<th></th>
										<!-- <th>From Time</th>
										<th>To Time</th> -->
									</tr>
								</thead>
								<tbody>
										<tr id="row_1">
											<td>
												<input type="date" name="event_date_1" id="event_date_1" class="form-control" onchange="remove_error('event_date_1')">
												<span class="text-danger" id="event_date_1_err"></span>
											</td>
											<td>
												<button type="button" id="remove_btn" style="display: none;" class="btn btn-xs btn-danger" onclick="remove_date(1)"><i class="fa fa-trash"></i> Remove</button>
											</td>
											<!-- <td>
												<input type="time" name="event_from_time_1" id="event_from_time_1" class="form-control" onchange="remove_error('event_from_time_1')">
												<span class="text-danger" id="event_from_time_1_err"></span>
											</td>
											<td>
												<input type="time" name="event_to_time_1" id="event_to_time_1" class="form-control" onchange="remove_error('event_to_time_1')">
												<span class="text-danger" id="event_to_time_1_err"></span>
											</td> -->
										</tr>
								</tbody>
							</table>
							<div class="form-group">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<button type="button" class="btn btn-xs btn-primary" onclick="add_more_date()"><i class="fa fa-plus"></i> Add More</button>
									
								</div>
							</div>
						</div>
					</div>
                    <div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Short desciption:<span class="text-danger">*</span> </label>
							<textarea name="short_desc" id="short_desc" rows="3" onchange="remove_error('short_desc')" class="form-control"></textarea>
							<span class="text-danger" id="short_desc_err"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Details:<span class="text-danger">*</span> </label>
							<textarea name="description" id="description" rows="5" onchange="remove_error('description')" class="form-control"></textarea>
							<span class="text-danger" id="description_err"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row pull-right">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input type="hidden" name="datetimerowcount" id="datetimerowcount">
							<input type="hidden" name="season_added" id="season_added" value="0">
							<input type="hidden" name="action_type" id="action_type">
							<input type="hidden" name="record_id" id="record_id">
							<input type="hidden" name="imageid" id="imageid">
							<button class="btn btn-success" onclick="save_events()" type="button"> <i class="fa fa-edit"></i> Save</button>
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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/b72ce125c96cc8800a4c2610c2d08866" id="communityaliesform">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
  				 	<div class="form-group">
					   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						   	<label>Are you sure you wish to delete permanently record for <span id="person_name"></span> </label>
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

    let rowCount = 1;
    function add_more_date(){
        rowCount++;
        const tableBody = document.querySelector('#datetime_table tbody');
        const newRow = document.createElement('tr');
		newRow.id = `row_${rowCount}`; 
        // newRow.innerHTML = `
        //     <td>
        //         <input type="date" name="event_date_${rowCount}" id="event_date_${rowCount}" class="form-control" onchange="remove_error('event_date_${rowCount}')">
        //         <span class="text-danger" id="event_date_${rowCount}_err"></span>
        //     </td>
        //     <td>
        //         <input type="time" name="event_from_time_${rowCount}" id="event_from_time_${rowCount}" class="form-control" onchange="remove_error('event_from_time_${rowCount}')">
        //         <span class="text-danger" id="event_from_time_${rowCount}_err"></span>
        //     </td>
        //     <td>
        //         <input type="time" name="event_to_time_${rowCount}" id="event_to_time_${rowCount}" class="form-control" onchange="remove_error('event_to_time_${rowCount}')">
        //         <span class="text-danger" id="event_to_time_${rowCount}_err"></span>
        //     </td>
        // `;
		newRow.innerHTML = `
            <td>
                <input type="date" name="event_date_${rowCount}" id="event_date_${rowCount}" class="form-control" onchange="remove_error('event_date_${rowCount}')">
                <span class="text-danger" id="event_date_${rowCount}_err"></span>
            </td>
			<td>
				<button type="button" id="remove_btn" class="btn btn-xs btn-danger" onclick="remove_date(${rowCount})"><i class="fa fa-trash"></i> Remove</button>
			</td>
        `;
        tableBody.appendChild(newRow);
        document.getElementById('remove_btn').style.display = 'inline-block';
    }
    function remove_date(rowId) {
        // const tableBody = document.querySelector('#datetime_table tbody');
        // if (tableBody.rows.length > 1) {
        //     tableBody.deleteRow(-1); 
        //     rowCount--;
        //     if (tableBody.rows.length === 1) {
        //         document.getElementById('remove_btn').style.display = 'none';
        //     }
        // }
		const row = document.getElementById('row_'+rowId); // Get the row by its id
		if (row) {
			row.remove(); // Remove the row from the table
		}
    }

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
        if($('#event_address').val()==""){
            $('#event_address_err').html('Please provide event address');
			$('#event_address').focus();
            retur_ty=false;
        }
        if($('#sequence').val()==""){
            $('#sequence_err').html('Please mention sequence number');
			$('#sequence').focus();
            retur_ty=false;
        }
        if($('#capacity').val()==""){
            $('#capacity_err').html('Please mention capacity of this events');
			$('#capacity').focus();
            retur_ty=false;
        }
		if($('#event_season').val()==""){
            $('#event_season_err').html('Please mention season of this events');
			$('#event_season').focus();
            retur_ty=false;
        }
        if($('#short_desc').val()==""){
            $('#short_desc_err').html('Please mention short description of the event');
			$('#short_desc').focus();
            retur_ty=false;
        }
        if($('#description').val()==""){
            $('#description_err').html('Please mention the detials of the event');
			$('#description').focus();
            retur_ty=false;
        }
        if($('#event_from_time').val()==""){
			$('#event_from_time_err').html('Please mention this time');
			$('#event_from_time').focus();
			retur_ty=false;
		}
		if($('#event_to_time').val()==""){
			$('#event_to_time_err').html('Please mention this time');
			$('#event_to_time').focus();
			retur_ty=false;
		}

        for(i=1;i<=rowCount;i++){
            if($('#event_date_'+i).val()==""){
                $('#event_date_'+i+'_err').html('Please mention this date');
				$('#event_date_'+i).focus();
                retur_ty=false;
            }
            // if($('#event_from_time_'+i).val()==""){
            //     $('#event_from_time_'+i+'_err').html('Please mention this time');
            //     retur_ty=false;
            // }
            // if($('#event_to_time_'+i).val()==""){
            //     $('#event_to_time_'+i+'_err').html('Please mention this time');
            //     retur_ty=false;
            // }
        }
        return retur_ty;
    }

	function showaddDesignation(){
		$('#name').val("");
		$('#event_address').val("");
		$('#description').val("");
		$('#short_desc').val("");
		$('#imageid').val("");
		$('#capacity').val("");
		$('#price').val("");
		$('#record_id').val("");
		$('#status1').prop('checked',true);
		if(rowCount>1){
			for(let i=2;i<=rowCount;i++){
				remove_date(i);
			}
			$('#event_date_1').val("");
			$('#event_from_time_1').val("");
			$('#event_to_time_1').val("");
			rowCount=1;
		}
		$('#previous_seasons').html('');
		$('#event_season').val('');
		$('#action_type').val('add');
		$('#current_image').html('');
        $('#sequence').val('<?=$max_seq?>');
		$('#adddesignationid').modal('show');
	}
	let current_event='NA';
 	function showedit(id){
		let url='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e3c9b6af1b18ef41ffb8251fc198c92f/'+id;
		$.ajax({
			'url': url,
			'type': 'GET',
			'dataType': 'json',
			'success': function(responsedata){  
				$('#name').val(responsedata.name);
				$('#event_address').val(responsedata.event_address);
				$('#description').val(responsedata.description);
				$('#short_desc').val(responsedata.short_desc);
				$('#imageid').val(responsedata.image);
				let current_image='<br><img src="<?php echo base_url();?>images/events/'+responsedata.image+'" width="150" class="img-text"> ';
				$('#current_image').html(current_image);
				$('#sequence').val(responsedata.sequence);
				$('#capacity').val(responsedata.capacity);
				$('#price').val(responsedata.price);
				$('#event_from_time').val(responsedata.event_from_time);
				$('#event_to_time').val(responsedata.event_to_time);
				$('#record_id').val(responsedata.id);
				$('#status1').prop('checked',true);
				if(responsedata.status=='Closed'){
					$('#status0').prop('checked',true);
				}
				if(responsedata.status=='Comming Soon'){
					$('#status2').prop('checked',true);
				}
				if(responsedata.status=='Inactive'){
					$('#status3').prop('checked',true);
				}
                responsedata.date_time_data.forEach((datetime, index, array) => {
                    if(index>0){
                        add_more_date();
                    }
                    let currcount=index+1;
                    $('#event_date_'+currcount).val(datetime.date);
                });
				$('#event_season').val(responsedata.season_data);
				current_event=responsedata.season_data;
				let oldseason='';
				responsedata.old_season.forEach((season, index, array) => {
                    oldseason=oldseason+season.season+', <br>';
                });
				$('#previous_seasons').html(oldseason);
				$('#action_type').val('edit');
				$('#adddesignationid').modal('show');
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert("Error : "+thrownError);
			} 
		});
 	}

	function add_more_schedule(){
		if(current_event=="NA"){
			$('#event_season_err').html('Sorry! You cannot add new event now');
		}else{
			$('#previous_seasons').append($('#event_season').val());
			$('#event_season').val('');
			$('#season_added').val('1');
			
		}
	}
	
	function show_coupon_manage(id){
		window.location='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/686bcccc3ffc147ab9e8bed4724a7ce6/'+id;
	}
	function show_attendees(id){
		window.location='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/66b3db959374e949f43a90abc4e4d0bb/'+id;
	}
	
	function show_notification(id){
		window.location='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/d807d5d284eb91ac2e5ff84b1abbc15f/'+id;
	}

	function loadeventpage(season_id,event_id){
		window.location='/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/6b8804f69bb8e6d7f8be25cae9668735/'+season_id+'/'+event_id;
	}
	

</script>
  	
