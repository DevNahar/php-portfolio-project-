<?php
 session_start();
include '../controller/dbconfig.php';

$project_id = $_GET['project_id'];
$bner_data_dlt = "DELETE FROM our_projects WHERE id = $project_id ";
$data_dlt_result = mysqli_query($db_connect, $bner_data_dlt);
$_SESSION['msg']  = "Data Delete Successfully";
header('location: project_list.php')

?>