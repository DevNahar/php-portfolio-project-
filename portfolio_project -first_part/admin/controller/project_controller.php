<?php
 session_start();
	require 'dbconfig.php';

    //This for insert
	
	if(isset($_POST['project_submit'])){
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

        $category_id = $_POST['category_id'];
        $p_name = $_POST['project_name'];
        $p_link = $_POST['project_link'];
        echo $catergary_id;
        
        if(empty($category_id)  && empty($p_name) && empty($p_link)  && $img_upl_status == false){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $insert = "INSERT INTO our_projects (category_id,project_name,project_link,project_thumb) VALUES ('{$category_id}','{$p_name}','{$p_link}','{$random_file_name}' )";
            $insert_result = mysqli_query($db_connect, $insert); 
            $_SESSION['msg']  = "Data Insert Successfully";
        }
        header('location: ../project_create.php');
	}
   

 
    
    //This for update

    if(isset($_POST['update_project_submit'])){

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
                    $move_file = move_uploaded_file($file_tmp_name,'../uploads/project_image/'.$up_random_file_name);
                    $img_upd_status = true;
                }else{
                    echo "file size too large";
                }
            }else{
                echo $file_extention . "file is not supported";
            }
            
            
        }else{
            echo "File not found";
        }
		
        $project_id = $_POST['id'];
        $category_id = $_POST['category_id'];
        $project_name = $_POST['project_name'];
        $project_link = $_POST['project_link'];       
       
        
        
        if(empty($category_id) && empty($project_name) && empty($project_link) && $img_upd_status == false){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $update = "UPDATE our_projects SET category_id = '{$category_id}',project_name = '{$project_name}', project_link = '{$project_link}', project_thumb = '{$up_random_file_name}' WHERE id = '$project_id'";
            $update_result = mysqli_query($db_connect, $update); 
            $_SESSION['msg']  = "Data Update Successfully";
        }
        header('location: ../project_list.php');
      
	}

	
?>