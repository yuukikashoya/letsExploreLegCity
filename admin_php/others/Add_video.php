<?php include"../../database/connection_to_DB.php";
session_start();
if(!isset($_SESSION['login'])){ //if login in session is not set
  header('Location: ../login.html?message=Log in');
}
?>

<html>
    <head>
    <title>Add Video</title>
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


      <div class="sidebar">
    <div class="logo-details">
      <i class='fas fa-user-circle'></i>
      <span class="logo_name">Admin: <span class="dot"></span> <?php echo $_SESSION["name"];?> </span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="display.php" >
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
          <a href="check.php" >
            <i class='	fas fa-check-circle' ></i>
            <span class="links_name">Check Request</span>
          </a>
        </li>
        <li>
          <a href="Add_video.php"class="active">
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
      
      
      
      </ul>
  </div>

 





<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Add Video</span>
   
    </nav>
<div class="container  center  home-content">
     




                <div class="jumbotron jumbotron-fluid bg-dark ">
                    
                        <h3> <span class="label label-default">Add Video</span>  </h3>
                        <form enctype="multipart/form-data" method="POST" class="left" action="../code/upload.php" >

                        <label class="text-white">Video Name</label><br>
                        <input Name ='video_name' type="text" class="name" placeholder="Name"><br>
                        <label class="text-white">Video Photo:</label><br>
                      <input type="file" name="file" >



            
                                
                         
                                
                          
                              
                                  
                                    
                                    <input type="submit" class="btn btn-primary" name="submit">
                        </form>
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