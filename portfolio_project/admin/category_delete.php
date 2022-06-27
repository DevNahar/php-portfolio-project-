<?php
 session_start();
include 'controller/dbconfig.php';

$category_id = $_GET['category_id'];
$bner_data_dlt = "DELETE FROM categories WHERE id = $category_id ";
$data_dlt_result = mysqli_query($db_connect, $bner_data_dlt);
$_SESSION['msg']  = "Data Delete Successfully";
header('location: ../categary_list.php')

?>