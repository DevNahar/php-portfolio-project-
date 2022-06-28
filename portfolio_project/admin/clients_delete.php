<?php

session_start();
 include 'controller/dbconfig.php';
      
$clients_id = $_GET['id'];

$clients_query = "DELETE FROM our_clients  WHERE id = '{$clients_id}' ";

$clients_query_result = mysqli_query($db_connect, $clients_query)  ;

if ($clients_query_result) {
    $_SESSION['msg']  = "Data Delete Successfully";

} 



//  Redirection
header ("location: clients_list.php ");



?>