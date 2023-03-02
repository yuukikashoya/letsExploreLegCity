<?php

include"../../database/connection_to_DB.php";

if(isset($_GET['admin_id'])){
	
	$admin_id = $_GET['admin_id'];

	$query = "DELETE FROM admin_table WHERE admin_id = '$admin_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../others/admin.php?msg=Successfully Deleted!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}



?>