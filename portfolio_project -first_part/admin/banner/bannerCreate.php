
	<!-- Main navbar -->
	<?php include '../includes/mainNav.php' ?>
	<!-- /main navbar -->



			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="banner.php"><i class="icon-menu2 position-left"></i> Banner</a></li>
							<li class="active">Create</li>
							
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Banner Create</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="../controller/banner_controller.php" method="POST" enctype="multipart/form-data">
								<fieldset class="content-group">

								

									<div class="form-group">
										<label class="control-label col-lg-2">Title</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="title">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Sub_title</label>
										<div class="col-lg-10">
										<input type="text" class="form-control" name="sub_title">
										</div>
									</div>

			                        <div class="form-group">
			                        	<label class="control-label 
										col-lg-2">Details</label>
										 <div class="col-lg-10">
										 <textarea name="details" id="details" class="form-control"  cols="5" rows="5"></textarea>
										
									</div>	
			                    </div>


									<div class="form-group">
										<label class="control-label col-lg-2">Image</label>
										<div class="col-lg-10">										
										<input type="file" class="form-control" name="image">
										</div>
									</div>
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary" name="banner_submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
									<a href="bannerlist.php"class="btn btn-warning">Back To Banner List</i></a>
								</div>
							</form>


						</div>

					</div>
					<!-- /basic datatable -->




					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

	




<!-- heading -->
<?php include '../includes/script.php'?>
<!-- /heading -->
