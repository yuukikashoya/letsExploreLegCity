<?php
include"../../database/connection_to_DB.php";


if(isset($_POST['approve']))   {
 
 
  $image_name = $_POST['image_name'];
 $image_file = $_POST['image_file'];
 $image_details = $_POST['image_details'];
 $user = $_POST['user'];
 $req_id = $_POST['req_id'];



$query = " INSERT INTO display_image VALUES ('','$image_name','$image_file','$image_details','$user')";

if ($conn->query($query) === TRUE){

    $query = "DELETE FROM req WHERE req_id = '$req_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../others/check.php?message=Inserterd Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}




}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}
?>