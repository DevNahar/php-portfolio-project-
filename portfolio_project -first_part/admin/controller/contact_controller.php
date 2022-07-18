<?php 
session_start();
require 'dbconfig.php';

  //This for insert
  if (isset($_POST['contact_submit'])) {
  
      $contact_topic   = $_POST['contact_topic'];
      $contact_details = $_POST['contact_details'];
      $icon_name       = $_POST['icon_name'];


 if ( empty($contact_topic) ||  empty($contact_details) || empty($icon_name)  ) {
  $_SESSION['msg']  = "All fields are required";
 } else {
   $contact_insert = "INSERT INTO contact_us (contact_topic,contact_details,icon_name) VALUES ('{$contact_topic}', '{$contact_details}', '{$icon_name}' ) ";
   $contact_insert_result = mysqli_query($db_connect, $contact_insert)  ;

   if ($contact_insert_result) {
    $_SESSION['msg']  = "Data Insert Successfully";
   } else {
    $_SESSION['msg']  = "Data Insert Failed";
   }
   
 }


header ("location: ../contact_create.php");

}



if (isset($_POST['Update_contact'])) {
     
        $contactUs_id    = $_POST['contactUs_id'];
        $contact_topic   = $_POST['contact_topic'];
        $contact_details = $_POST['contact_details'];
        $icon_name       = $_POST['icon_name'];

 if ( empty($contact_topic ||  $contact_details )   ) {
  $_SESSION['msg'] = "All Field is Required";

 } else {
    $contact_u_q = "UPDATE contact_us SET contact_topic='{$contact_topic}',contact_details='{$contact_details}',icon_name='{$icon_name}' WHERE id = '{$contactUs_id}' ";

    $contact_u_q_r = mysqli_query($db_connect, $contact_u_q)  ;

   if ($contact_u_q_r) {
    $_SESSION['msg']  = "Data Insert Successfully";
   } else {
    $_SESSION['msg']  = "Data Insert Failed";
   }
   
 }
 

header ("location: ../contact_list.php ");

}


