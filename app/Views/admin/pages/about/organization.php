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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/a33ba8ad931de1ba754b4ac2494220a1" id="contactdetailsform">
		    	<div class="form-group row">
		    		
		    			<!-- 
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Image: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				        		<img onerror="this.src='<?php echo base_url();?>images/logo.jpg'" src="<?php echo base_url();?>images/<?=$data['image'];?>" width="150" id="page_image1" class="img-text" align="left"> 
								<input class="pad" name="image" id="image" type="file"/>
				            </div>
		    			</div></div> -->
		    		
		    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Company Name: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<input type="text" name="org_name" value="<?=$data['org_name'];?>" id="org_name" class="form-control" />
							</div>
						</div>
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Description: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="about" id="about" class="form-control"><?=$data['about'];?></textarea>
							</div>
						</div>	
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Mission: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="mission" id="mission" class="form-control"><?=$data['mission'];?></textarea>
							</div>
						</div>	
						<div class="row form-control-static">
							<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Vision: </label>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<textarea name="vision" id="vision" class="form-control"><?=$data['vision'];?></textarea>
							</div>
						</div>	
						<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Location map link : </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <textarea name="location_map" id="location_map" class="form-control"><?=$data['location_map'];?></textarea>
				            </div>
		    			</div>	
						<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Operation Hours : </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <textarea name="operation_hours" id="operation_hours" class="form-control summernote"><?=$data['operation_hours'];?></textarea>
				            </div>
		    			</div>	
		    		</div>
		    	</div> 
				
				<div class="row form-group">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<label>Slogan : </label>
						<textarea name="welcome_note" id="welcome_note" class="form-control"><?=$data['welcome_note'];?></textarea>
					</div>
				</div>
				<!-- <div class="row form-group">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<label>Welcome Note 2 : </label>
						<textarea name="welcome_note1" id="welcome_note1" class="form-control"><?=$data['welcome_note1'];?></textarea>
					</div>
				</div> -->
				<div class="form-group">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Image 1: <span class="text-danger">*</span></label>
						<?php if($data['image']!=""){;?>
							<br>
							<img  src="<?php echo base_url();?>images/about/<?=$data['image'];?>" width="150" class="img-text">
						<?php }?>
						<input class="pad" name="image" id="image" type="file" onchange="remove_error('image')"/>
						<span class="text-danger" id="image_err"></span>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Image 2: </label>
						<?php if($data['image2']!=""){;?>
							<br>
							<img  src="<?php echo base_url();?>images/about/<?=$data['image2'];?>" width="150" class="img-text">
						<?php }?>
						<input class="pad" name="image2" id="image2" type="file"/>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>Image 3: </label>
						<?php if($data['image3']!=""){;?>
							<br>
							<img  src="<?php echo base_url();?>images/about/<?=$data['image3'];?>" width="150" class="img-text">
						<?php }?>
						<input class="pad" name="image3" id="image3" type="file"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<label>About Video: </label>
						<?php if($data['about_video']!=""){;?>
							<video autoplay muted loop playsinline style="width:80%">
								<source src="<?php echo base_url();?>images/about/<?=$data['about_video'];?>" type="video/mp4">
							</video>
						<?php }?>
						<input class="pad" name="about_video" id="about_video" type="file" onchange="remove_error('about_video')"/>
						<span class="text-danger" id="about_video_err"></span>
					</div>
				</div>
	          	<div class="row pull-right form-control-static">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<input type="hidden" name="imageid" value="<?=$data['image'];?>">
						<input type="hidden" name="imageid2" id="imageid2" value="<?=$data['image2'];?>">
						<input type="hidden" name="imageid3" id="imageid3" value="<?=$data['image3'];?>">
						<input type="hidden" name="imageid4" id="imageid4" value="<?=$data['about_video'];?>">
		              	<button class="btn btn-primary" id="submit" type="submit">Update</button>
					  	<a href="/dashboard"><button class="btn btn-warning" type="button">Cancel</button></a>
		            </div>
	          	</div>
	    	</form>
		</div>
	</div>
</section>
  	
