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
							<li><a href="designation_list.php"><i class="icon-menu2 position-left"></i> Designation</a></li>
							<li class="">List</li>
							<li class="active">Designation Update</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">
					
				
					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5">
							<h5 class="panel-title">Designation List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="" class="btn btn-primary add_new">Add New</a></li>
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<li><a data-action="close"></a></li>
								</ul>
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
						<?php
				
							$id = $_GET['id'];
							$get_data = "SELECT * FROM designations WHERE id = {$id} ";
							$get_data_result = mysqli_query($db_connect, $get_data);
							
						?>
						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="controller/designation_controller.php" method="post" enctype="multipart/form-data">
								<fieldset class="content-group">

								<?php 
								if(!empty($get_data_result)){
								foreach ($get_data_result as $designation ){ 


								?>

									<div class="form-group">
										
										<input type="hidden" name="designation_id" value="<?php echo $designation['id'] ?>" >

										<label class="control-label col-lg-2" for="designation_name">Designation Name</label>
										<div class="col-lg-10">
											<input id="designation_name" name="designation_name" type="text"
												class="form-control" value="<?php echo $designation['designation_name'] ?>">
										</div>
									</div>
                                     <?php  }}?>

								</fieldset>

								<div class="text-right">
									<button type="submit" name="designations_update" class="btn btn-primary">Update <i
											class="icon-arrow-right14 position-right"></i></button>
									<a href="designations_list.php" class="btn btn-warning">Back To Designation List</i></a>
								</div>
							</form>


						</div>

					</div>
					<!-- /basic datatable -->




					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a
							href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

<!-- footer -->
<?php include '../includes/script.php'?>
<!-- footer -->
