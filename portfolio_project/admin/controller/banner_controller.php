<?php
 session_start();
	require 'dbconfig.php';

    //This for insert
	
	if(isset($_POST['banner_submit'])){
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
                    $move_file = move_uploaded_file($file_tmp_name,'../uploads/banner_image/'.$random_file_name);
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

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $details = $_POST['details'];
        
        if(empty($title) && empty($sub_title) && empty($details) && empty($image_details) && $img_upl_status == false){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $insert = "INSERT INTO banners (title,sub_title,details,image) VALUES ('{$title}','{$sub_title}', '{$details}','{$random_file_name}' )";
            $insert_result = mysqli_query($db_connect, $insert); 
            $_SESSION['msg']  = "Data Insert Successfully";
        }
        header('location: ../bannerlist.php');
	}
   

  
    
    //This for update

    if(isset($_POST['update_banner_submit'])){
		
        $banner_id = $_POST['id'];
        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $details = $_POST['details'];
        $image = $_POST['image'];
        echo $id .$title.$sub_title.$details;
       
        
        
        if(empty($title) && empty($sub_title) && empty($details)){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $update = "UPDATE banners SET title = '{$title}',sub_title = '{$sub_title}', details = '{$details}'  WHERE id = '$banner_id'";
            $update_result = mysqli_query($db_connect, $update); 
            // $_SESSION['msg']  = "Data Update Successfully";
        }
        header('location: ../bannerlist.php');
        // header('location: ../bannerupdate.php?banner_id=$banner_id');
	}

	
?>