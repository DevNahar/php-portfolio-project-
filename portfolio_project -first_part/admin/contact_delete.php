<?php

session_start();
 include 'controller/dbconfig.php';

 
 
// this is for data update
      
$baner_id = $_GET['id'];

$banerDeletedQry = "UPDATE contact_us SET active_status='{$activeStatus}' WHERE id = '{$baner_id}' ";

$contact_insert = mysqli_query($db_connect, $banerDeletedQry)  ;

if ($bannerInsert) {
    $_SESSION['msg']  = "Data Insert Successfully";

} else {
    $_SESSION['msg']  = "Data Insert Failed";
}




header ("location: contact_list.php");



?>