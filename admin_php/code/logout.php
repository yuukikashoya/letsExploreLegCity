<?php
include"../../database/connection_to_DB.php";
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header('Location: ../login.html?message=Inserterd Successfully');
?>