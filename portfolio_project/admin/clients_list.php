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
					<li><a href="Clients.php"><i class="icon-menu2 position-left"></i> Clients</a></li>
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
					<h5 class="panel-title">Clients List</h5>
					<div class="heading-elements">
						<ul class="icons-list">
							<li><a href="clients_create.php" class="btn btn-primary add_new">Add New</a></li>
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
								<th>SL.</th>
								<th>Clients Name</th>
								<th>Designation</th>
								<th>Clients images</th>
								<th>Clients Reviews</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$Select_query = "SELECT our_clients.*, designations.designation_name FROM our_clients INNER JOIN  designations ON our_clients.designation_id =designations.id WHERE our_clients.active_status = 1";
							$clientsList = mysqli_query($db_connect, $Select_query);
							foreach ($clientsList as $key => $client) {


							?>
								<tr>
									<td> <?= ++$key; ?> </td>
									<td> <?= $client['clients_name']; ?> </td>
									<td> <?= $client['designation_name']; ?> </td>
									<td><?= $client['client_image'] ?> <img width="80" height="80" src="<?= 'uploads/clients_image/' . $client['client_image']; ?>" /> </td>
									<td> <?= $client['client_review']; ?> </td>
									<td class="text-center">
										<a href="clients_update.php?id=<?= $client['id']; ?>" class="ml-2 mr-2"><i class="icon-pencil5"></i></a>
										<a href="clients_delete.php?id=<?= $client['id']; ?>" class="ml-2 mr-2"><i class=" icon-trash"></i></a>
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
	<?php include '../includes/script.php' ?>
	<!-- footer -->