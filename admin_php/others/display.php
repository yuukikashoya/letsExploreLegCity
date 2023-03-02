<?php include"../../database/connection_to_DB.php";
session_start();
if(!isset($_SESSION['login'])){ //if login in session is not set
  header('Location: ../login.html?message=Log in');
}


?>

<html>
    <head>
    <title>Display</title>
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
    



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>









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
    <!-- <div class="container">
  
  <ul class="nav nav-pills center-pills">
    <li class="active"><a href="../Home_page.html">Display</a></li> 
    <li><a href="map.html">Admin</a></li> 
    <li  ><a  href="about.html">Request</a></li>
    <li  ><a  href="review.php">Log out</a></li>
  </ul>
 </div>
 -->

 <!-- <nav>
         <div class="logo">
         Lets Explore the Legazpi City
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         <li class="active"><a href="../Home_page.html">Display</a></li> 
         <li><a href="map.html">Admin</a></li> 
         <li  ><a  href="about.html">Request</a></li>
         <li  ><a  href="review.php">Log out</a></li>
         </ul>
      </nav> -->

      <div class="sidebar">
    <div class="logo-details">
      <i class='fas fa-user-circle'></i>
      <span class="logo_name">Admin: <span class="dot"></span> <?php echo $_SESSION["name"];?> </span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="display.php" class="active">
            <i class='	fas fa-th-list' ></i>
            <span class="links_name">Display</span>
          </a>
        </li>
        <li>
          <a href="admin.php">
            <i class='	fas fa-user-alt' ></i>
            <span class="links_name">Admin</span>
          </a>
        </li>
        <li>
          <a href="check.php">
            <i class='	fas fa-check-circle' ></i>
            <span class="links_name">Check Request</span>
          </a>
        </li>
        <li>
          <a href="Add_video.php">
            <i class='	fas fa-video' ></i>
            <span class="links_name">Add Video</span>
          </a>
        </li>
        <li>
          <a href="../code/logout.php">
            <i class='	fas fa-running' ></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
        <div class="logo-details">
        <i class='	fas fa-mouse-pointer' ></i>
    
      <span class="logo_name">Options</span>
    </div>
    <li>
          <a href="#review">
            <i class='	fas fa-table' ></i>
            <span class="links_name">Review</span>
          </a>
        </li>
        <li>
          <a href="#img">
            <i class='	fas fa-table' ></i>
            <span class="links_name">Image</span>
          </a>
        </li>
        <li>
          <a href="#vid">
            <i class='	fas fa-table' ></i>
            <span class="links_name">Video</span>
          </a>
        </li>
        <li>
        
      
      
      </ul>
  </div>

 





<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Display</span>
   
    </nav>
<div class="container  center  home-content">
     
<!-- review -->

<div  class="jumbotron jumbotron-fluid ">
  <table id="review" class="table table-bordered table-dark ">
  <thead>
  <tr>
<th>User name</th>
<th>Comment</th>
<th>Date</th>
<th>Delete</th>
  </tr>
  </thead>
  <?php
				$sql_query = "SELECT * FROM review";
				
				$result = $conn -> query($sql_query);
				
				while($row = $result -> fetch_assoc()){
					$review_id = $row['review_id'];
			?>

  <tr>
<td ><?php echo $row['user'];?></td>
<td><?php echo $row['comment'];?></td>
<td><?php echo $row['date'];?></td>
<td class="center"> 	<a href="../code/delete_review.php?review_id=<?php echo $review_id; ?>"> <i class='fas fa-trash-alt' style='font-size:25px;color:red'></i></a></td>
<?php		
				}
			?>
  </tr>


</table>

</div>
  

<!-- img -->

<div  class="jumbotron jumbotron-fluid ">
  <table id="img" class="table table-bordered table-dark ">
  <thead>
  <tr>
<th>Image Name</th>
<th>Image File</th>
<th>Image Details</th>
<th>sharer</th>
<th>view</th>
<th>Delete</th>
  </tr>
  </thead>
  <?php
				$sql_query1 = "SELECT * FROM display_image";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$display_id = $row1['display_id'];
			?>

    <tr>
<td ><?php echo $row1['image_name'];?></td>
<td><?php echo $row1['image_file'];?></td>
<td><?php echo $row1['image_details'];?></td>
<td><?php echo $row1['user'];?></td>
<td class="center"> 	<a href="view_image.php?display_id=<?php echo $display_id; ?>"> <i class='	far fa-eye' style='font-size:25px;color:orange'></i></a></td>
<td class="center"> 	<a href="../code/delete_image.php?display_id=<?php echo $display_id; ?>"> <i class='fas fa-trash-alt' style='font-size:25px;color:red'></i></a></td>
<?php		
				}
			?>
    </tr>


</table>







</div>
  
<!-- vid -->
<div  class="jumbotron jumbotron-fluid ">
  <table id="vid" class=" table table-bordered table-dark ">
  <thead>
  <tr>
<th>Video ID</th>
<th>Video Name</th>
<th>Video File</th>

<th>view</th>
<th>Delete</th>
  </tr>
  </thead>
  
  <?php
				$sql_query1 = "SELECT * FROM video";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$video_id = $row1['video_id'];
			?>

  <tr>
<td ><?php echo $row1['video_id'];?></td>
<td><?php echo $row1['video_name'];?></td>

<td><?php echo $row1['video_file'];?></td>

<td class="center"> 	<a href="view_video.php?video_id=<?php echo $video_id; ?>"> <i class='	far fa-eye' style='font-size:25px;color:orange'></i></a></td>
<td class="center"> 	<a href="../code/delete_vid.php?video_id=<?php echo $video_id; ?>"> <i class='fas fa-trash-alt' style='font-size:25px;color:red'></i></a></td>
<?php		
				}
			?>
  </tr>


</table>






</div>











  </div>
        </section>
        <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
    </body>
    </html>







    <script>  
 $(document).ready(function(){  
   
      $('#vid').DataTable(); 
      $('#img').DataTable(); 
      $('#review').DataTable(); 
 });  
 </script>  