<?php
 session_start();
 include '../controller/dbconfig.php';
      
$staff_id = $_GET['id'];

$staff_deleted = "DELETE FROM our_staff  WHERE id = '{$staff_id}' ";

$staff_deleted_result = mysqli_query($db_connect, $staff_deleted)  ;

if ($staff_deleted_result) {
    $_SESSION['msg']  = "Data Delete Successfully";
} 
header ("location: staff_list.php ");



?>