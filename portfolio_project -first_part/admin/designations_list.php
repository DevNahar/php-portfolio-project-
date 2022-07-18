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
							<li><a href="designations.php"><i class="icon-menu2 position-left"></i> Designations</a></li>
							<li class="active">List</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Designations List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="designations_create.php" class="btn btn-primary add_new">Add New</a></li>
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
						<div class="panel-body ">

						<table class="table table-bordered table-striped datatable-basic ">
							<thead>
								<tr>
									<th >SL.</th>
									<th >Designations Name</th>
									
									<th  class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>

							<?php 
							$Select = "SELECT * FROM designations " ;
							$designations_result = mysqli_query($db_connect, $Select);
							foreach ($designations_result as $key => $designation) {
								
						 
						     	?>
								<tr>
									<td> <?php echo ++$key; ?> </td>
									<td> <?php echo $designation['designation_name']; ?> </td>
									
									<td class="text-center">
							  <a href="designations_update.php?id=<?= $designation['id']; ?>" class="ml-2 mr-2"><i class="icon-pencil5"></i></a>
							  <a href="designations_delete.php?id=<?= $designation['id']; ?>" class="ml-2 mr-2"><i class=" icon-trash"></i></a>
									</td>
								</tr>
							<?php	} ?>
							</tbody>
						</table>
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
