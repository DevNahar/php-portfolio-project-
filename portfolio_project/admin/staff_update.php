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
							<li><a href="Staff.php"><i class="icon-menu2 position-left"></i> Staff</a></li>
							<li class="">List</li>
							<li class="active">Staff Update</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">
				 <!-- this code for fethc data -->
				 <?php
				 
				 $staff_id = $_GET['id'];
				 $staff_select = "SELECT * FROM our_staff WHERE id = {$staff_id} ";
				 $staff_select_result = mysqli_query($db_connect, $staff_select);
				 
				 ?>
					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Staff List</h5>
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
						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="controller/staff_controller.php" method="post" enctype="multipart/form-data">
								<fieldset class="content-group">


								<?php 
								if(!empty($staff_select_result)){
								foreach ($staff_select_result as $key => $staff) {
            
								  ?>
                                     <div class="form-group">
										<input name="staff_id" type="hidden" value="<?= $staff['id'] ?>">
										<label class="control-label col-lg-2" for="staff_name"  >Staff Name</label>
										<div class="col-lg-10">
											<input id="staff_name" value="<?= $staff['staff_name'] ?>" name="staff_name" type="text" class="form-control">
										</div>
									</div>	
									
									
									<?php
									
									$designations_q = "SELECT * FROM designations WHERE active_status = 1";
									$designations_result = mysqli_query($db_connect, $designations_q) ;
					
									
									?>

									<div class="form-group">
			                        	<label for="designation_id" class="control-label col-lg-2"> select Designation</label>
			                        	<div class="col-lg-10">
				                            <select id="designation_id" name="designation_id" class="form-control">
				                                <option value=""> select Category</option>
									   <?php 
                                      foreach ($designations_result  as $designation){?>
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
										<input type="file" class="form-control" name="image" value="<?= $staff['staff_image']?>">
									</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="twitter"  >Twitter</label>
										<div class="col-lg-10">
											<input id="twitter" value="<?= $staff['twitter'] ?>" name="twitter" type="text" class="form-control">
										</div>
									</div> 
									<div class="form-group">
										<label class="control-label col-lg-2" for="facebook"  >Facebook</label>
										<div class="col-lg-10">
											<input id="facebook" value="<?= $staff['facebook'] ?>" name="facebook" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="linkedin"  >Linkdein</label>
										<div class="col-lg-10">
											<input id="linkedin" value="<?= $staff['linkedin'] ?>" name="linkedin" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="instagram"  >Instagram</label>
										<div class="col-lg-10">
											<input id="instagram" value="<?= $staff['instagram'] ?>" name="instagram" type="text" class="form-control">
										</div>
									</div>

									<?php }} ?>
								</fieldset>

								<div class="text-right">
									<button type="submit" name="staff_update" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
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
