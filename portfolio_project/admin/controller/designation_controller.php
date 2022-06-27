<?php 
 session_start();
 require 'dbconfig.php';

  //This for insert
 
if (isset($_POST['designation_submit'])) {

    $designation_name  = $_POST['designation_name'];

 if ( empty($designation_name)   ) {
   $_SESSION['msg']  = "All fields are required";
 } else {
   $isertQry = "INSERT INTO designations (designation_name) VALUES ('{$designation_name}' ) ";
   $designationInsert = mysqli_query($db_connect, $isertQry)  ;

   $_SESSION['msg']  = "Data Insert Successfully";
   
 }

header ("location: ../designations_list.php ");

}


// this  for update
if (isset($_POST['designations_update'])) {
      
        $designation_id   = $_POST['designation_id'];
        $designation_name = $_POST['designation_name'];

 if ( empty( $designation_name )   ) {
    $massage = "All Field is Required";
    $_SESSION['msg']  = "All fields are required";
 } else {
    $dg_update = "UPDATE designations SET designation_name='{$designation_name}' WHERE id ='{$designation_id}' ";

   $designation_update = mysqli_query($db_connect,  $dg_update)  ;

   if ($designation_update) {
      $_SESSION['msg']  = "Data Insert Successfully";
   } else {
      $_SESSION['msg']  = "Data Insert Failed";
   }
   
 }
 

header ("location: ../designations_list.php");

}


