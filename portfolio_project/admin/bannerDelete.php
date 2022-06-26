<?php
 session_start();
include 'controller/dbconfig.php';

$banner_id = $_GET['banner_id'];
$bner_data_dlt = "DELETE FROM banners WHERE id = $banner_id ";
$data_dlt_result = mysqli_query($db_connect, $bner_data_dlt);
$_SESSION['msg']  = "Data Delete Successfully";
header('location: bannerlist.php')

?>