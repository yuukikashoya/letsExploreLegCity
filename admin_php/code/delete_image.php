<?php

include"../../database/connection_to_DB.php";

if(isset($_GET['display_id'])){
	
	$display_id = $_GET['display_id'];

	$query = "DELETE FROM display_image WHERE display_id = '$display_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../others/display.php?msg=Successfully Deleted!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}



?>