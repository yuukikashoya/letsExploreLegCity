<?php
include"../../database/connection_to_DB.php";
session_start();
if(isset($_POST["submit"])){
    $username = $_POST["username"];

    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM admin_table WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row['password']){
        $_SESSION["login"] = true;
        $_SESSION["name"] = $row["name"];
        $_SESSION["admin_id"] = $row["admin_id"];
        header('Location: ../others/display.php?message=Inserterd Successfully');
  
      }
      else{
        echo
        "<script> alert('Wrong Password');history.go(-1); </script>";
      }
    }
    else{
      echo
      "<script> alert('Wrong username');history.go(-1); </script>";
    }
  }

?>