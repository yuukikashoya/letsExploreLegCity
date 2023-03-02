<?php
include"../database/connection_to_DB.php";


?>
<html><head>
    <title>video</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../CSS/style.css">
   
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
    <nav>
            <div class="logo">
            Lets Explore the Legazpi City
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
            </label>
            
      
        
            <ul class="nav nav-pills center-pills">
           
            <li class="active"> <a href="#" onclick="myFunction()">Share</a></li>
              <li ><a href="../Home_page.html"><i class='fas fa-home'></i> Home</a></li>
              <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Media</a>
                <ul class="dropdown-menu">
                  <li ><a  href="image.php"><i class='fas fa-images'></i> Images</a></li> 
                  <li class="active"><a  href="video.php"><i class='	fas fa-video'></i> Video</a></li> 
      
                </ul>
                </li>   
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Social</a>
                <ul class="dropdown-menu">
                <li><a  href="https://web.facebook.com/yukimiranda26"><i class='fab fa-facebook'></i> Facebook</a></li> 
            <li><a  href="https://www.youtube.com/channel/UCTeRKafdZnck_4FHr5gwrRQ"><i class='	fab fa-youtube'></i> Youtube</a></li>    
                </ul>
                </li>   
              <li><a href="map.html"><i class='fas fa-map'></i> Map</a></li> 
              <li ><a  href="about.html"><i class='fas fa-user-circle'></i> About</a></li>
              <li><a  href="review.php"><i class='	fas fa-comment-alt'></i> Reviews</a></li>
            </ul>
      
          </nav>








      <?php
				$sql_query1 = "SELECT * FROM video";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$video_id = $row1['video_id'];
          
			?>
 
            
      



<div class="container  center">
            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="container">
                <h3> <span class="label label-default"> <?php echo $row1['video_name'];?></span> </h3> 
<br/> 
<video class="lan"
        controls="controls"> 
          
        <source src="../vid/<?php echo $row1['video_file'];?>" 
            type="video/mp4"> 
    </video> 
        </div>
            </div>
                </div>


                <?php		
				}
			?>   



             
                <div id="onclick1" class="overlay">
                    <br><br><br>
                        <div class="container kek">
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" aria-label="close">&times;</a>
                               <h2> <strong> Not Avalable yet....</strong> </h2>
                            </div></div>
     
      
                    </div>




                      
      <button onclick="topFunction()" id="myBtn" class=" button btn btn-primary 	glyphicon glyphicon-eject" title="Go to top">Top</button>
      <script>
         //Get the button
         var mybutton = document.getElementById("myBtn");
         
         // When the user scrolls down 20px from the top of the document, show the button
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             mybutton.style.display = "block";
           } else {
             mybutton.style.display = "none";
           }
         }
         
         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
         }
         </script>

   
   
    </body>
    </html>