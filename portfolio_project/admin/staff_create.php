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
							<li><a href="banner.php"><i class="icon-menu2 position-left"></i> Staff</a></li>
							<li class="">List</li>
							<li class="active">Staff Create</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Staff List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="ourStaffCreate.php" class="btn btn-primary add_new">Add New</a></li>
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
						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="controller/staf_controller.php" method="post" enctype="multipart/form-data"  >
								<fieldset class="content-group">

									<div class="form-group">
										<label class="control-label col-lg-2" for="staff_name"  >Staff Name</label>
										<div class="col-lg-10">
											<input id="staff_name" name="staff_name" type="text" class="form-control">
										</div>
									</div>		

									<?php
									
									$dg_query = "SELECT * FROM designations WHERE active_status = 1";
									$dg_query_result = mysqli_query($db_connect, $dg_query) ;
					
									
									?>
									<div class="form-group">
			                        	<label for="designation_id" class="control-label col-lg-2">Designation</label>
			                        	<div class="col-lg-10">
				                            <select id="designation_id" name="designation_id" class="form-control">
				                                <option value=""> select Designation</option>
									   <?php 

									  foreach ($dg_query_result as $designation){?>
										<option value="<?= $designation['id']?>"><?= $designation['designation_name']?></option>;

										<?php								
											}
										?>					  

					
				                            </select>
			                            </div>
			                        </div>	
									<div class="form-group">
										<label class="control-label col-lg-2" for="staff_image">Staff Image</label>
										<div class="col-lg-10">
										<input id="staff_image" name="staff_image" type="file" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="twitter"  >Twitter</label>
										<div class="col-lg-10">
											<input id="twitter" name="twitter" type="text" class="form-control">
										</div>
									</div> 
									<div class="form-group">
										<label class="control-label col-lg-2" for="facebook"  >Facebook</label>
										<div class="col-lg-10">
											<input id="facebook" name="facebook" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="linkedin"  >Linkdein</label>
										<div class="col-lg-10">
											<input id="linkedin" name="linkedin" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="instagram"  >Instagram</label>
										<div class="col-lg-10">
											<input id="instagram" name="instagram" type="text" class="form-control">
										</div>
									</div>
								</fieldset>

								<div class="text-right">
									<button type="submit" name="Staff_submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
									<a href="staff_list.php"class="btn btn-warning">Back To Staff List</i></a>
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
<?php include '../includes/script.php'?>
<!-- footer -->
