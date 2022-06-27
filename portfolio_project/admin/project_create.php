
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
							<li><a href="project.php"><i class="icon-menu2 position-left"></i> Project</a></li>
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
							<h5 class="panel-title">Project Create</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="controller/project_controller.php" method="POST" enctype="multipart/form-data">
								<fieldset class="content-group">

								<?php								
									
									$get_data = "SELECT * FROM categories WHERE status = 1";
									$get_data_result = mysqli_query($db_connect, $get_data);								
									
									?>

									<div class="form-group">
										<label class="control-label col-lg-2">Category Id</label>
										<div class="col-lg-10">
										<select name="category_id" class="form-control">
				                                <option value="">Select Categary</option>
												<?php								
													foreach($get_data_result as $data){
												?>
				                                <option value="<?= $data['id']?>"><?= $data['category_name']?></option>
				                                <?php								
													}
												?>
				                            </select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">project_name</label>
										<div class="col-lg-10">
										<input type="text" class="form-control" name="project_name">
										</div>
									</div>

                                    <div class="form-group">
										<label class="control-label col-lg-2">project_link</label>
										<div class="col-lg-10">
										<input type="url" class="form-control" name="project_link">
										</div>
									</div>
                                                                     


									<div class="form-group">
										<label class="control-label col-lg-2">project_thumb</label>
										<div class="col-lg-10">										
										<input type="file" class="form-control" name="image">
										</div>
									</div>
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary" name="project_submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
									<a href="project_list.php"class="btn btn-warning">Back To Project List</i></a>
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
<?php include 'includes/script.php'?>
<!-- /heading -->
