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
							<li class="active">Contact  Update</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">
				
				 <?php
				 
				 $contact_id = $_GET['id'];
				 $contact_query = "SELECT * FROM contact_us WHERE id = {$contact_id} ";
				 $contact_query_result = mysqli_query($db_connect, $contact_query);
				 
				 ?>
					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Contact Us List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									
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
						<form class="form-horizontal" action="controller/contact_controller.php" method="post">
								<fieldset class="content-group">


								<?php 

								foreach ($contact_query_result as $key => $contactUsResult) {
								
								
            
								?>
	                                  <div class="form-group">\
										<input type="hidden" value="<?php echo $contactUsResult['id'] ?>" name="contactUs_id">
										<label class="control-label col-lg-2" for="contact_topic"  >Contact Topic</label>
										<div class="col-lg-10">
											<input id="contact_topic" value="<?php echo $contactUsResult['contact_topic']  ?>" name="contact_topic" type="text" class="form-control">
										</div>
									</div>		
									<div class="form-group">
										<label class="control-label col-lg-2" for="contact_details">Contact Details</label>
										<div class="col-lg-10">
											<textarea id="contact_details" name="contact_details" rows="5" cols="5" class="form-control" placeholder="Default textarea">"<?php echo $contactUsResult['contact_details']  ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="icon_name"  >Icon</label>
										<div class="col-lg-10">
											<input id="icon_name" value="<?php echo $contactUsResult['icon_name']  ?>" name="icon_name" type="text" class="form-control">
										</div>
									</div> 

									<?php } ?>
								</fieldset>

								<div class="text-right">
									<button type="submit" name="Update_contact" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
									<a href="contactUsList.php"class="btn btn-warning">Back To Contact Us List</i></a>
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
