<?php
 session_start();
include 'controller/dbconfig.php';

$service_id = $_GET['service_id'];
$bner_data_dlt = "DELETE FROM services WHERE id = $service_id ";
$data_dlt_result = mysqli_query($db_connect, $bner_data_dlt);
$_SESSION['msg']  = "Data Delete Successfully";
header('location: service_list.php')

?>