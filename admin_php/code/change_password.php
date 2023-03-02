<?php

include"../../database/connection_to_DB.php";
session_start();
if(isset($_POST['change'])){
	
	$old_password = $_POST['old_password'];
	$New_password = $_POST['new_password'];
	$retype = $_POST['retype'];
    $admin_id = $_SESSION["admin_id"];



    $result = mysqli_query($conn, "SELECT * FROM admin_table WHERE admin_id = '$admin_id'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($old_password == $row['password']){




if($New_password == $retype){
    




	$query = "UPDATE admin_table SET password='$New_password' WHERE admin_id='$admin_id'";

	if($conn->query($query) === TRUE){
		
		header('Location:../others/admin.php?msg=Successfully EDITED!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}else{

    echo '<script>window.alert(" both new password and retype password did not match!");history.go(-1);</script>';



}


}
else{
    echo '<script>window.alert("old password did not match!");history.go(-1);</script>';
   
}

}
}
?>
