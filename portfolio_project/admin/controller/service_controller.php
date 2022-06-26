<?php
 session_start();
	require 'dbconfig.php';

    //This for insert
	
	if(isset($_POST['service_submit'])){
		
        $service_name = $_POST['service_name'];
        $service_details = $_POST['service_details'];
        $icon_name = $_POST['icon_name'];
        
        if(empty($service_name) && empty($service_details) && empty($icon_name)){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $service_insert = "INSERT INTO services (service_name,service_details,icon_name) VALUES ('{$service_name}','{$service_details}', '{$icon_name}') ";
            $service_inser_result = mysqli_query($db_connect, $service_insert); 
            // $_SESSION['msg']  = "Data Insert Successfully";
        }
        header('location: ../service_list.php');
	}


     //This for update

     if(isset($_POST['service_update_submit'])){
		
        $service_id = $_POST['service_id'];
        $service_name = $_POST['service_name'];
        $service_details = $_POST['service_details'];
        $icon_name = $_POST['icon_name'];
        
        
       
      
       if(empty($service_name) && empty($service_details) && empty($icon_name)){
        $_SESSION['msg']  = "All fields are required";

        }else{
            $update = "UPDATE services SET service_name = '{$service_name}', service_details = '{$service_details}',  icon_name = '{$icon_name}'  WHERE id = '$service_id'";
            $update_result = mysqli_query($db_connect, $update); 
            // $_SESSION['msg']  = "Data Update Successfully";
        }
        header('location: ../service_list.php');
        // header('location: ../bannerupdate.php?banner_id=$banner_id');
	}

