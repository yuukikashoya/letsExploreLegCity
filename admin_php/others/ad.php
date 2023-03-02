<?php include"../../database/connection_to_DB.php";
session_start();
if(!isset($_SESSION['login'])){ //if login in session is not set
    header('Location: ../login.html?message=Log in');
  }
?>

<html>
    <head>
    <title>view</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="../css/pog.css">
   
    </head>
    <div id="background-wrap">
      <div class="x5">
          <div class="cloud"></div>
      </div>
  
      <div class="x2">
          <div class="cloud"></div>
      </div>
  
      <div class="x3">
          <div class="cloud"></div>
      </div>
  
      <div class="x4">
          <div class="cloud"></div>
      </div>
  
      <div class="x1">
          <div class="cloud"></div>
      </div>
  </div>
    <body>



<?php
		$req_id = $_GET['req_id'];
		$sql_query = "SELECT * FROM req WHERE req_id='$req_id' ";
		
		$result = $conn -> query($sql_query);
		
		while($row = $result -> fetch_assoc()){
			$req_id = $row['req_id'];
	?>
	 <div class="container  center" id="change" >
                <div class="jumbotron jumbotron-fluid bg-dark ">
                <button  onclick="history.back()">Go Back</button>

                <img  class="lan" src="../../images/<?php echo $row['image_file'];?>">
                    </div>        
            </div>
    <div class="container  center" id="change" >
                <div class="jumbotron jumbotron-fluid bg-dark ">
                    
                        <h3> <span class="label label-default">Check</span>  </h3>
                        <form enctype="multipart/form-data" method="POST" class="left" action="../code/insert_display.php" >

                        <label class="text-white">image Name</label><br>
                        <input Name ='image_name' type="text" class="name" value="<?php echo $row['image_name'];?>"><br>


                        <label class="text-white">Details</label><br>
                        <input Name ='image_details' type="text" class="name" value="<?php echo $row['image_details'];?>"><br>

                                    <label class="text-white">Person Name</label><br>
                    <input Name ='user' type="text" class="name" value="<?php echo $row['user'];?>"><br>
                                
                            
                    <input Name ='image_file' type="text" class="name" hidden value="<?php echo $row['image_file'];?>"><br>        
                                  
                    <input Name ='req_id' type="text" class="name" hidden value="<?php echo $row['req_id'];?>"><br>         
                                    <input type="submit" class=" btn btn-primary center" name="approve" value="Approve">
                        </form>
                        <a class="btn btn-danger" href="../code/delete_req.php?req_id=<?php echo $req_id; ?>"> <i class='fas fa-trash-alt' style='font-size:25px;color:black'></i> Delete</a>
                    </div>        
            </div>
	<?php
		}
		
		$conn->close();
	?>
	
