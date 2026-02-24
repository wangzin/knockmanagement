<section class="content-header">
	<h1>
		Dashboard
		<small>Home Page</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<section class="content">
	<?php if(session()->get('role_id') ==1): ?>	
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-aqua">
				<div class="inner">
                <h3>23</h3>
					<p>Total Customer</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/b7bf905211ea1e4a63f85a2af1c62fd6" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
				<h3>23</h3>
					<p>Total Participant</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-stalker"></i>
				</div>
				<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/fbf07aaa1e5dd8afa4c62dcf40ba18ae" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>23</h3>
					<p>Coaches</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/61c974371ec2020f843242c7f7688885" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-red">
				<div class="inner">
					<h3>2</h3>
					<p>Total Events</p>
				</div>
				<div class="icon">
					<i class="fa fa-calendar"></i>
				</div>
				<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/fbf07aaa1e5dd8afa4c62dcf40ba18ae" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
    </div>

</section>


  	
