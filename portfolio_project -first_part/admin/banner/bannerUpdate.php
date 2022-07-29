
<?php 
	
include '../controller/dbconfig.php'; ?>
<!-- /heading -->


<!--head & Main navbar -->
<?php include_once '../includes/mainNav.php' ?>
<!--head & Main navbar -->



			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="banner.php"><i class="icon-menu2 position-left"></i> Banner</a></li>
							<li class="">Update</li>
							
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Banner Update</h5>
							<div class="heading-elements">
								
		                	</div>
						</div>

						<div class="panel-body form_list_panel">
						<?php
									$banner_id = $_GET['banner_id'];
									
									$get_data = "SELECT * FROM banners WHERE id = $banner_id";
									$get_data_result = mysqli_query($db_connect, $get_data);
									
									// $get_data_assoc =  mysqli_fetch_assoc($get_data_result);
									
									?>

						<form class="form-horizontal" action="../controller/banner_controller.php" method="POST" enctype="multipart/form-data">
								<fieldset class="content-group">

								<?php
								
									foreach($get_data_result as $data){
									?>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-10">
											<input type="hidden" class="form-control" name="id" value="<?= $data['id']?>">
										</div>
									</div>

								<div class="form-group">
										<label class="control-label col-lg-2">Title</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="title" value="<?= $data['title']?>">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Sub_title</label>
										<div class="col-lg-10">
										<input type="text" class="form-control" name="sub_title" value="<?= $data['sub_title']?>">
										</div>
									</div>

			                        <div class="form-group">
			                        	<label class="control-label 
										col-lg-2">Details</label>
										 <div class="col-lg-10">
										 <textarea name="details" id="details" class="form-control" cols="5" rows="5"><?= $data['details']?></textarea>
										
									</div>	
			                    </div>


									<div class="form-group">
										<label class="control-label col-lg-2">Image</label>
										<div class="col-lg-10">
										<input type="file" class="form-control" name="image" value="<?= $data['image']?>">
										
										</div>
									</div>
									<?php }?>
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary" name="update_banner_submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
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

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->






<!-- heading -->
<?php include '../includes/script.php'?>
<!-- /heading -->
</body>
</html>