<?php 
 session_start();
 require 'dbconfig.php';

   //This for insert
if (isset($_POST['Staff_submit'])) {

  
  $img_upl_status = false;
       
        if(isset($_FILES['image'])){
            $image_details =$_FILES['image'];

            $file_name = $image_details['name'];
            $file_tmp_name = $image_details['tmp_name'];
            $file_size = $image_details['size'];

            $name_xp_array = explode('.',$file_name);
            $file_extention = strtolower(end($name_xp_array));
            $valid_extention = array('jpg','png','jpeg');
            $random_file_name = time(). '.' . $file_extention;
            if(in_array($file_extention,$valid_extention)){
                if($file_size < 3000000){
                    $move_file = move_uploaded_file($file_tmp_name,'../uploads/project_image/'.$random_file_name);
                    $img_upl_status = true;
                }else{
                    echo "file size too large";
                }
            }else{
                echo $file_extention . "file is not supported";
            }
            
            
        }else{
            echo "File not found";
        }

    $staff_id    = $_POST['staff_id'];
    $staff_name     = $_POST['staff_name'];
    $designation_id = $_POST['designation_id'];
    $staff_image    = $_POST['staff_image'];
    $twitter        = $_POST['twitter'];
    $facebook       = $_POST['facebook'];
    $linkedin       = $_POST['linkedin'];
    $instagram      = $_POST['instagram'];

 if ( empty($staff_name) || empty($designation_id) || empty($fileRandomName) || empty($twitter) || empty($facebook) || empty($linkedin) || empty($instagram) || $uploadStatus==false  ) {
  $_SESSION['msg']  = "All fields are required";
 } else {
   $staff_q = "INSERT INTO our_staff (staff_name,designation_id,staff_image,twitter,facebook,linkedin,instagram) VALUES ('{$staff_name}', '{$designation_id}', '{$staff_image}', '{$twitter}', '{$facebook}', '{$linkedin}' , '{$instagram}'  ) ";
   $staff_result = mysqli_query($db_connect, $staff_q)  ;

   if ($staff_result) {
    $_SESSION['msg']  = "Data Insert Successfully";
   } else {
    $_SESSION['msg']  = "Data Insert Failed";
   }
   
 }
//  Redirection
header ("location: ../staff_create.php");

}


// this  for update
if (isset($_POST['UpdateData'])) {

      
        $ourStaff_id    = $_POST['staff_id'];
        $staff_name     = $_POST['staff_name'];
        $designation_id = $_POST['designation_id'];
        $staff_image    = $_POST['staff_image'];
        $twitter        = $_POST['twitter'];
        $facebook       = $_POST['facebook'];
        $linkedin       = $_POST['linkedin'];
        $instagram      = $_POST['instagram'];

 if ( empty($staff_name) || empty($designation_id) || empty($staff_image) || empty($twitter) || empty($facebook) || empty($linkedin) || empty($instagram)  ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $ourStaffUpdateQry = "UPDATE our_staff SET staff_name='{$staff_name}',designation_id='{$designation_id}',staff_image='{$staff_image}',twitter='{$twitter}',facebook='{$facebook}',linkedin='{$linkedin}',instagram='{$instagram}' WHERE id = '{$ourStaff_id}' ";

   $staffInsert = mysqli_query($conn, $ourStaffUpdateQry)  ;

   if ($staffInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../our_staff/ourStaffUpdate.php?msg={$massage}&acls={$alertCls}&id={$ourStaff_id } ");

}

