<?php
include"../../database/connection_to_DB.php";


$uploadOk = 1;


$imagename =$_FILES['file']['name'];
$imageext = explode('.', $imagename);
$imagetmpname =$_FILES['file']['tmp_name'];
$imageactualext = strtolower(end($imageext));
$imagenamenew = uniqid('', true).".".$imageactualext;
$imagedestination = '../../vid/'.$imagenamenew;
$video_name = $_POST['video_name'];



if (isset($_POST['submit'])){



$video_name = $_POST['video_name'];

  
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

    // everthing ok

}else{
  
   

    if (move_uploaded_file($imagetmpname, $imagedestination)) {

        // move_uploaded_file($imagetmpname, $imagedestination);



            $query = "INSERT INTO video VALUES(' ','$video_name','$imagenamenew')";

            if($conn->query($query) === TRUE) {

                header('Location: ../others/Add_video.php?message=Inserterd Successfully');
    }else{

        // echo"Error!!!";
        echo '<script>window.alert("ERROR!")</script>';
    }


    } else {
        echo "Sorry, there was an error uploading your file.";

    }
    }

    ?>