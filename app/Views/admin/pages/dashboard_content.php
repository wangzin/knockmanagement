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
                <h3><?= sizeof($regiatration) ?></h3>
					<p>Total Applications</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-stalker"></i>
				</div>
				<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/b7bf905211ea1e4a63f85a2af1c62fd6" class="small-box-footer">Open <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
				 <h3><?= sizeof($quote) ?></h3>
					<p>Total Contact / Quote</p>
				</div>
				<div class="icon">
					<i class="ion ion-email"></i>
				</div>
				<a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/fbf07aaa1e5dd8afa4c62dcf40ba18ae" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- <div class="col-lg-3 col-xs-6">
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
		</div> -->
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-question-circle"></i>
              <h3 class="box-title">Notes for text</h3>
            </div>
            <div class="box-body">
              <blockquote>
                <p>To make text bold, use &lt;b&gt;&lt;/b&gt; tag. Eg, &lt;b&gt;This is bold text&lt;/b&gt; The result would be -> <b>This is bold text</b></p>
              </blockquote>
			  <blockquote>
                <p>New line / line break &lt;br/&gt; tag. Eg, This is regular text&lt;br/&gt; And continue at new line. The result would be <br>This is regular text <br>And continue at new line</p>
              </blockquote>

			  <blockquote>
                <p>Text Italic tag. Eg, This is regular text &lt;i&gt; and italic section &lt;/i&gt; and back to normal. The result would be <br>This is regular text  <i>and italic section</i> and back to normal.</p>
              </blockquote>

			  <blockquote>
                <p>Text Italic tag. Eg, This is regular text &lt;i&gt; and italic section &lt;/i&gt; and back to normal. The result would be <br>This is regular text  <i>and italic section</i> and back to normal.</p>
              </blockquote>
            </div>
          </div>
        </div>
    </div>
</section>


  	
