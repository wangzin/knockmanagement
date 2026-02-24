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
            <form class="bootbox-form form-horizontal" enctype="multipart/form-data" method="POST" action="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/7116d78358b04f1a6b81f66d608b9016" id="contactdetailsform">
		    	<div class="form-group row">
		    		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
		    			<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Logo: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bg-gray">
				        		<img src="<?php echo base_url();?>images/<?=$data['logo'];?>" width="150" id="page_image1" class="img-text"> 
		    					<input class="pad" name="logo" id="logo" type="file"/>
				            </div>
		    			</div>
		    		</div>
		    		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
		    			<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> Contact: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="contact" name="contact" value="<?=$data['contact'];?>" class="form-control">
				            </div>
		    			</div>
		    			<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Email Id: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="email" name="email" value="<?=$data['email'];?>" class="form-control">
				            </div>
		    			</div>
						<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Our Address: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <textarea id="address" name="address" class="form-control"><?=$data['address'];?></textarea>
				            </div>
		    			</div>
                        <div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Facebook Link: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="facebook" name="facebook" value="<?=$data['facebook'];?>" class="form-control">
				            </div>
		    			</div>
		    			<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Twitter Link: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="twitter" name="twitter" value="<?=$data['twitter'];?>" class="form-control">
				            </div>
		    			</div>	
                        <div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Instegram Link: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="instegram" name="instegram" value="<?=$data['instegram'];?>" class="form-control">
				            </div>
		    			</div>	
                        <div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Linkedin Link: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="linkin" name="linkin" value="<?=$data['linkin'];?>" class="form-control">
				            </div>
		    			</div>
						<div class="row form-control-static">
		    				<label class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Youtube Link: </label>
				        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				              <input type="text" id="youtube" name="youtube" value="<?=$data['youtube'];?>" class="form-control">
				            </div>
		    			</div>	
		    		</div>
		    	</div> 
	          	<div class="row pull-right">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<input type="hidden" name="imageid" value="<?=$data['logo'];?>">
		              	<button class="btn btn-primary" id="submit" type="submit">Update</button>
					  	<a href="/dashboard"><button class="btn btn-warning" type="button">Cancel</button></a>
		            </div>
	          	</div>
	    	</form>
		</div>
	</div>
</section>
  	
