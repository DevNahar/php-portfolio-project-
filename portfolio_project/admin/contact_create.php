	<!-- Main navbar -->
	<?php 
	session_start();
	include_once 'controller/dbconfig.php';
	include 'includes/mainNav.php' ?>
	<!-- /main navbar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="banner.php"><i class="icon-menu2 position-left"></i> Contact Us</a></li>
							<li class="">List</li>
							<li class="active">Contact Us Create</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Contact Us List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="" class="btn btn-primary add_new">Add New</a></li>
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						</div>
				<!-- alert massege -->

				<?php if (isset($_SESSION['msg'])) {
				?>
					<div class="alert alert-success no-border">
						<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
						<span class="text-semibold">Well done!</span>
						<?= $_SESSION['msg'] ?>
					</div>

				<?php unset($_SESSION['msg']);
				} ?>

				<!-- alert massege -->
						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="controller/contact_controller.php" method="post" enctype="multipart/form-data"  >
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2" for="contact_topic"  >Contact Topic</label>
										<div class="col-lg-10">
											<input id="contact_topic" name="contact_topic" type="text" class="form-control">
										</div>
									</div>		
									<div class="form-group">
										<label class="control-label col-lg-2" for="contact_details">Contact Details</label>
										<div class="col-lg-10">
											<textarea id="contact_details" name="contact_details" rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="icon_name"  >Icon-Name</label>
										<div class="col-lg-10">
											<input id="icon_name" name="icon_name" type="text" class="form-control">
										</div>
									</div> 
								</fieldset>

								<div class="text-right">
									<button type="submit" name="contact_submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
									<a href="contact_list.php"class="btn btn-warning">Back To Contact List</i></a>
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

	




<!-- footer -->
<?php include 'includes/script.php'?>
<!-- footer -->
