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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/b8f1869927c16228a1e1968d177df348" id="fanfavourateform">
		    	<div class="form-group row">
		    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Name: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<input type="text" name="after_dark_name" value="<?=$data['after_dark_name'];?>" id="after_dark_name" class="form-control" />
							</div>
						</div>
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Details: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="after_dark_details" id="after_dark_details" class="form-control summernote"><?=$data['after_dark_details'];?></textarea>
							</div>
						</div>	
		    		</div>
		    	</div> 
				
				<div class="form-group">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Image: <span class="text-danger">*</span></label>
						<?php if($data['image']!=""){;?>
							<br>
							<img  src="<?php echo base_url();?>images/about/<?=$data['after_dark_image'];?>" width="150" class="img-text">
						<?php }?>
						<input class="pad" name="after_dark_image" id="after_dark_image" type="file" onchange="remove_error('after_dark_image')"/>
						<span class="text-danger" id="after_dark_image_err"></span>
					</div>
				</div>
	          	<div class="row pull-right form-control-static">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<input type="hidden" name="imageid" value="<?=$data['after_dark_image'];?>">
		              	<button class="btn btn-primary" id="submit" type="submit">Update</button>
					  	<a href="/dashboard"><button class="btn btn-warning" type="button">Cancel</button></a>
		            </div>
	          	</div>
	    	</form>
		</div>
	</div>
</section>
  	
