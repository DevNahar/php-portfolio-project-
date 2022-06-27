
<?php 
	
include 'controller/dbconfig.php'; ?>
<!-- /heading -->


<!--head & Main navbar -->
<?php include_once 'includes/mainNav.php' ?>
<!--head & Main navbar -->



			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="category.php"><i class="icon-menu2 position-left"></i> Category</a></li>
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
							<h5 class="panel-title">Category Update</h5>
							<div class="heading-elements">
								
		                	</div>
						</div>

						<div class="panel-body form_list_panel">
						<?php
									$category_id = $_GET['category_id'];
									
									$get_data = "SELECT * FROM categories WHERE id = $category_id";
									$get_data_result = mysqli_query($db_connect, $get_data);
									
									// $get_data_assoc =  mysqli_fetch_assoc($get_data_result);
									
									?>

						<form class="form-horizontal" action="controller/category_controller.php" method="POST">
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
										<label class="control-label col-lg-2">Category Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="category_name" value="<?= $data['category_name']?>">
										</div>
									</div>

									
									<?php }?>
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary" name="update_category_submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
									<a href="category_list.php"class="btn btn-warning">Back To Category List</i></a>
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
<?php include 'includes/script.php'?>
<!-- /heading -->
</body>
</html>