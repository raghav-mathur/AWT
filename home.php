<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports">
        <p>Favourite Players</p>
      </div>
      <div class="images">
        <a href="https://en.wikipedia.org/wiki/Rohit_Sharma"></a>
          <div class="image im1">
          </div>
        </a> 
        <a href="https://en.wikipedia.org/wiki/Cristiano_Ronaldo"></a>
          <div class="image im2">
          </div>
        </a> 
        <a href="https://en.wikipedia.org/wiki/Lionel_Messi"></a>
          <div class="image im3">
          </div>
        </a> 
        <a href="https://en.wikipedia.org/wiki/Rohit_Sharma"></a>
          <div class="image im4">
          </div>
        </a> 
        <a href="https://en.wikipedia.org/wiki/Rohit_Sharma"></a>
          <div class="image im5">
          </div>
        </a> 
        
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
