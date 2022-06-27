<?php

session_start();
include 'controller/dbconfig.php';


// this  for Delete
      
$designations_id = $_GET['id'];

$dg_d_Qry = "DELETE FROM designations WHERE id = $designations_id  ";

$designationDelete = mysqli_query($db_connect, $dg_d_Qry)  ;

if ($designationDelete) {
    $_SESSION['msg']  = "Data Delete Successfully";

} else {
    $_SESSION['msg']  = "Data Delete Failed";
}


header ("location: designations_list.php");



?>