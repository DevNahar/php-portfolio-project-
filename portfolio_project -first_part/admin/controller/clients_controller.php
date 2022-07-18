<?php 
 session_start();
 require 'dbconfig.php';

   //This for insert
if (isset($_POST['clients_submit'])) {


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
                    $move_file = move_uploaded_file($file_tmp_name,'../uploads/clients_image/'.$random_file_name);
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

        $clients_name   = $_POST['clients_name'];
        $designation_id = $_POST['designation_id'];
        $client_image   = $_POST['image'];
        $client_review  = $_POST['client_review'];

 if ( empty($clients_name) ||  empty($designation_id)  || empty($client_review) ||   $img_upl_status== false   ) {
  $_SESSION['msg']  = "All fields are required";
 } else {
   $insert_query = "INSERT INTO our_clients (clients_name,designation_id,client_image,client_review) VALUES ('{$clients_name}', '{$designation_id}', '{$random_file_name}', '{$client_review}' ) ";
   $insert_query_result = mysqli_query($db_connect, $insert_query)  ;

   if ($insert_query_result) {
    $_SESSION['msg']  = "Data Insert Successfully";
   } else {
    $_SESSION['msg']  = "Data Insert Failed";
   }
   
 }

header ("location: ../clients_create.php ");

}

// this for client update
if (isset($_POST['clients_update'])) {

    $img_upd_status = false;
       
    if(isset($_FILES['image'])){
        $image_details =$_FILES['image'];

        $file_name = $image_details['name'];
        $file_tmp_name = $image_details['tmp_name'];
        $file_size = $image_details['size'];

        $name_xp_array = explode('.',$file_name);
        $file_extention = strtolower(end($name_xp_array));
        $valid_extention = array('jpg','png','jpeg');
        $up_random_file_name = time(). '.' . $file_extention;
        if(in_array($file_extention,$valid_extention)){
            if($file_size < 3000000){
                $move_file = move_uploaded_file($file_tmp_name,'../uploads/clients_image/'.$up_random_file_name);
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
        
        $client_id      = $_POST['client_id'];
        $clients_name   = $_POST['clients_name'];
        $designation_id = $_POST['designation_id'];
        
        $client_review  = $_POST['client_review'];

 if ( empty($clients_name) || empty($designation_id) || empty($client_review)   ) {
  $_SESSION['msg']  = "All fields are required";
 } else {
    $clients_q = "UPDATE our_clients SET clients_name='{$clients_name}',designation_id='{$designation_id}',client_image='{$up_random_file_name}',client_review='{$client_review}' WHERE id = '{$client_id}' ";

   $clientInsert = mysqli_query($db_connect, $clients_q)  ;


   if ($clientInsert) {
    $_SESSION['msg']  = "Data update Successfully";
   } else {
    $_SESSION['msg']  = "Data update Failed";
   }
   
 
   
 }

//  Redirection
header ("location: ../clients_list.php ");

}


