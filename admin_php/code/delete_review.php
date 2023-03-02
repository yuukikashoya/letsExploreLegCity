<?php

include"../../database/connection_to_DB.php";

if(isset($_GET['review_id'])){
	
	$review_id = $_GET['review_id'];

	$query = "DELETE FROM review WHERE review_id = '$review_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../others/display.php?msg=Successfully Deleted!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}



?>