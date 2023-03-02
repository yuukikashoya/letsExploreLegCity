<?php

include"../../database/connection_to_DB.php";

if(isset($_GET['video_id'])){
	
	$video_id = $_GET['video_id'];

	$query = "DELETE FROM video WHERE video_id = '$video_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../others/display.php?msg=Successfully Deleted!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}



?>