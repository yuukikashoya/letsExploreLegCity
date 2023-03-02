<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "lel";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn -> connect_error){
        die ("connection Problem detected!!".$conn -> connect_error );
}
else {
  //      echo "connected successfully"  ; 
  
}

         ?>