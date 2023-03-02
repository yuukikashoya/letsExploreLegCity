<?php

include"../../database/connection_to_DB.php";

if(isset($_GET['req_id'])){
	
	$req_id = $_GET['req_id'];

	$query = "DELETE FROM req WHERE req_id = '$req_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../others/check.php?msg=Successfully Deleted!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}



?>