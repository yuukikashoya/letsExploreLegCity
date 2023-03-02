<?php include"../../database/connection_to_DB.php";
session_start();
if(!isset($_SESSION['login'])){ //if login in session is not set
  header('Location: ../login.html?message=Log in');
}
?>

<html>
    <head>
    <title>Admin</title>
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
          <a href="admin.php" class="active">
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
          <a href="#add">
            <i class='		fas fa-user-plus' ></i>
            <span class="links_name">Add Admin</span>
          </a>
        </li>
        <li>
          <a href="#table">
            <i class='	fas fa-table' ></i>
            <span class="links_name">Admin Table</span>
          </a>
        </li>
        <li>
          <a onclick="myFunction()">
            <i class='		fas fa-user-cog' ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
        <li>
        
      
      
      </ul>
  </div>

 





<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin</span>
   
    </nav>
<div class="container    home-content">
     


<div id="change" class="jumbotron jumbotron-fluid bg-dark " style="display:none ;">
                    
                    <h3> <span class="label label-default">Change Passsword</span>  </h3>
                    <form method="POST" class="left" action="../code/change_password.php">
                    <label class="text-white">Old Password</label><br>
                          <input Name ='old_password' type="text" class="name" placeholder="Old"><br>
                          <label class="text-white">New Password</label><br>
                          <input Name ='new_password' type="password" class="name" placeholder="New"><br>
                          <label class="text-white">Retype New Password</label><br>
                          <input Name ='retype' type="password" class="name" placeholder="Retype" ><br>
                            
                         
                            
                          <input type="submit" class="btn btn-primary" name="change">
                    </form>
                        </div>
                        











<script>
function myFunction() {
  var x = document.getElementById("change");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>



                <div  id="add" class="jumbotron jumbotron-fluid bg-dark ">
                    
                        <h3> <span class="label label-default">Add Admin</span>  </h3>
                        <form method="POST" class="left" action="../code/insert_admin.php">
                         <label class="text-white">User Name</label><br>
                              <input Name ='username' type="text" class="name" placeholder="Name"><br>
                              <label class="text-white">Name</label><br>
                              <input Name ='name' type="text" class="name" placeholder="Name"><br>
                              <label class="text-white">Password</label><br>
                              <input Name ='password' type="password" class="name" readonly value="1"><br>
                                
                              <div class="alert alert-danger alert-dismissible">
                                
                               <p> <strong> Note!! password is always set to 1 </strong> </p>
                            </div>
                                    
                              
                                  
                                    
                                    <input type="submit" class="btn btn-primary" name="submit">
                        </form>
                    </div>        
           












<div   class="jumbotron jumbotron-fluid">
  <table id="table" class="table table-bordered table-dark ">
  <thead>
    <tr>
<th>Admin ID</th>
<th>Name</th>
<th>Username</th>
<th>Delete</th>
    </tr>
  </thead>
  <?php
				$sql_query = "SELECT * FROM admin_table";
				
				$result = $conn -> query($sql_query);
				
				while($row = $result -> fetch_assoc()){
					$admin_id = $row['admin_id'];
			?>
  <tr >
<td ><?php echo $row['admin_id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['username'];?></td>
<td class="center"> 	<a href="../code/delete_admin.php?admin_id=<?php echo $admin_id; ?>"><i class='fas fa-user-alt-slash' style='font-size:25px;color:red'></i></a></td>



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
   
      $('#table').DataTable(); 

   
 });  
 </script>  
