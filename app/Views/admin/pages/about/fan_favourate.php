<section class="content-header">
  	<h1>
	    Home
	    <small>Website Settings</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	    </div>
	    <div class="box-body">
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/4f5bb8cbed771152c942af2ea4a42bf6" id="fanfavourateform">
		    	<div class="form-group row">
		    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Name: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<input type="text" name="fan_fav_name" value="<?=$data['fan_fav_name'];?>" id="fan_fav_name" class="form-control" />
							</div>
						</div>
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Details: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="fan_fav_details" id="fan_fav_details" class="form-control summernote"><?=$data['fan_fav_details'];?></textarea>
							</div>
						</div>	
		    		</div>
		    	</div> 
				
				<div class="form-group">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Image: <span class="text-danger">*</span></label>
						<?php if($data['image']!=""){;?>
							<br>
							<img  src="<?php echo base_url();?>images/about/<?=$data['fan_fav_image'];?>" width="150" class="img-text">
						<?php }?>
						<input class="pad" name="fan_fav_image" id="fan_fav_image" type="file" onchange="remove_error('fan_fav_image')"/>
						<span class="text-danger" id="fan_fav_image_err"></span>
					</div>
				</div>
	          	<div class="row pull-right form-control-static">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<input type="hidden" name="imageid" value="<?=$data['fan_fav_image'];?>">
		              	<button class="btn btn-primary" id="submit" type="submit">Update</button>
					  	<a href="/dashboard"><button class="btn btn-warning" type="button">Cancel</button></a>
		            </div>
	          	</div>
	    	</form>
		</div>
	</div>
</section>
  	
