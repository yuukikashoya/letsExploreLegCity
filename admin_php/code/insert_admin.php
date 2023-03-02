<?php
include"../../database/connection_to_DB.php";


if(isset($_POST['submit']))   {
 
 
  $username = $_POST['username'];
 $name = $_POST['name'];
 $password = $_POST['password'];

 $sql_query = "SELECT * FROM admin_table WHERE username='$username' ";
 $result = $conn -> query($sql_query);
		
 while($row = $result -> fetch_assoc()){
   $a = $row['username'];

 }if($a == $username){
  echo '<script>window.alert("the username is already exist")</script>';
 echo '<script>window.history.go(-1);</script>';
 }else{

$query_customer = " INSERT INTO admin_table VALUES ('','$name','$username','$password')";

if ($conn->query($query_customer) === TRUE){




header('Location: ../others/admin.php?message=Inserterd Successfully');

}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}}
?>