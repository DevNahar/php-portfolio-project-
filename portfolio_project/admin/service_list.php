
<?php
session_start();

include_once 'controller/dbconfig.php';
?>




<!--head & Main navbar -->
<?php include_once 'includes/mainNav.php' ?>
<!--head & Main navbar -->






<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header">

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class=" icon-images3 position-left"></i> Service</a></li>
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
				<h5 class="panel-title">Service List</h5>
				<div class="heading-elements">

					<ul class="icons-list">
						<li style="margin-right: 10px; color: #fff;"><a href="service_create.php" class="btn btn-primary add-new">Add New</a></li>
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">

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



			<!-- Data select -->

			<?php
			$select = "SELECT * FROM services ";
			$select_result = mysqli_query($db_connect, $select);
			?>

			<table class="table datatable-basic">
				<thead>

					<tr>
						<th>Sr.No</th>
						<th>service_name</th>
						<th>service_details</th>
						<th>icon_name</th>
						
						<th class="text-center">Actions</th>
					</tr>

				</thead>
				<tbody>

					<?php
					foreach ($select_result as $key => $data) {


					?>
						<tr>
							<td><?= ++$key ?></td>
							<td><?= $data['service_name'] ?></td>
							<td><?= $data['service_details'] ?></td>
							<td><?= $data['icon_name'] ?></td>
							
							<td class="text-center">

								<a href="service_update.php?service_id=<?= $data['id'] ?>"><i class=" icon-pencil7 "></i></a>
								<a href="service_delete.php?service_id=<?= $data['id'] ?>"><i style="margin-left: 10px;" class="  icon-trash "></i></a>

							</td>
						</tr>

					<?php } ?>

				</tbody>
			</table>
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




<!-- Core JS files & footer -->
<?php include_once 'includes/script.php' ?>
<!-- Core JS files & footer -->