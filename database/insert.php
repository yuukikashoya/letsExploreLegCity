<?php
include"../database/connection_to_DB.php";


if(isset($_POST['submit']))   {
 
 
  $name = $_POST['named'];
 $comments = $_POST['comments'];
 $today = date("Y/m/d"); 



$query_customer = " INSERT INTO review VALUES ('','$name','$comments','$today')";

if ($conn->query($query_customer) === TRUE){




header('Location: ../others/review.php?message=Inserterd Successfully');

}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}
?>