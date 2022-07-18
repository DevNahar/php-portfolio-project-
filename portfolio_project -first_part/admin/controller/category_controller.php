<?php
 session_start();
	require 'dbconfig.php';

    //This for insert
	
	if(isset($_POST['category_submit'])){
		
                  
       
        $category_name = $_POST['category_name'];
        
        
        if(empty($category_name)) {
        $_SESSION['msg']  = "All fields are required";

        }else{
            $insert = "INSERT INTO categories (category_name) VALUES ('{$category_name}' )";
            $insert_result = mysqli_query($db_connect, $insert); 
            $_SESSION['msg']  = "Data Insert Successfully";
        }
        header('location: ../category_list.php');
	}
   

  
    
    //This for update

    if(isset($_POST['update_category_submit'])){
		
        $category_id = $_POST['id'];
        $category_name = $_POST['category_name'];
        
       
        
        
        if(empty($category_name) ){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $update = "UPDATE categories SET category_name = '{$category_name}'  WHERE id = '$category_id'";
            $update_result = mysqli_query($db_connect, $update); 
            // $_SESSION['msg']  = "Data Update Successfully";
        }
        header('location: ../category_list.php');
        // header('location: ../categoryupdate.php?category_id=$category_id');
	}

	
?>