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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/a59c25a3dd9f67b21411ccc573be788c" id="fanfavourateform">
		    	<div class="form-group row">
		    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Name: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<input type="text" name="name" value="<?=$data['name'];?>" id="name" class="form-control" />
							</div>
						</div>
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Details: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="description" id="description" class="form-control summernote"><?=$data['description'];?></textarea>
							</div>
						</div>	
		    		</div>
		    	</div> 
				
				<div class="form-group">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Shor Video Clip: <span class="text-danger">*</span></label>
						<?php if($data['image']!=""){;?>
							<br>
							<!-- <img  src="<?php echo base_url();?>images/about/<?=$data['image'];?>" width="150" class="img-text"> -->
							<video autoplay muted loop playsinline style="width:80%">
							<source src="<?php echo base_url();?>images/about/<?=$data['image'];?>" type="video/mp4">
						</video>
						<?php }?>
						<input class="pad" name="image" id="image" type="file" onchange="remove_error('image')"/>
						<span class="text-danger" id="image_err"></span>
					</div>
				</div>
				<hr>
				<div class="form-group row">
		    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Catering Name: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<input type="text" name="catering_name" value="<?=$data['catering_name'];?>" id="catering_name" class="form-control" />
							</div>
						</div>
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Catering Details: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="catering_description" id="catering_description" class="form-control summernote"><?=$data['catering_description'];?></textarea>
							</div>
						</div>	
		    		</div>
		    	</div> 
				<div class="form-group">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Image: <span class="text-danger">*</span></label>
						<?php if($data['catering_image']!=""){;?>
							<br>
							<img  src="<?php echo base_url();?>images/about/<?=$data['catering_image'];?>" width="150" class="img-text">
						<?php }?>
						<input class="pad" name="catering_image" id="catering_image" type="file" onchange="remove_error('catering_image')"/>
						<span class="text-danger" id="catering_image_err"></span>
					</div>
				</div>

	          	<div class="row pull-right form-control-static">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<input type="hidden" name="imageid" value="<?=$data['image'];?>">
		              	<input type="hidden" name="catimageid" value="<?=$data['catering_image'];?>">
		              	<button class="btn btn-primary" id="submit" type="submit">Update</button>
					  	<a href="/dashboard"><button class="btn btn-warning" type="button">Cancel</button></a>
		            </div>
	          	</div>
	    	</form>
		</div>
	</div>
</section>
  	
