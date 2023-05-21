<?php
include 'dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger Menu</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>    
    <header>
        <h1>Halifax Canoe and Kayak</h1>
        <div class="top">
            <a href="#" class="menu_icon"><img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" width="80" height="80"></a>
        </div>
        <div class="imgheader"> 
      <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" width="80" height="100">           
        </div> 
    </header>
    <nav class="menu">
        <a href="index.php" class="item_menu">Home</a>
        <a href="admin-add.php" class="item_menu">Add Adventure</a>
        <a href="login.html" class="item_menu">Admin Login</a>
        
    </nav>  

    <form action="admin-confirm.php" method="post">
    <div class="formcolumn"> 
  Heading       : &nbsp  <input type="text" name="heading"><br>
  Trip Date     : &nbsp<input type="date" name="tripDate"><br>
  Duration      : &nbsp <input type="number" name="duration"><br>
  Summary       :  <textarea name="summary"></textarea><br>
  <input type="submit" value="Submit" class="sbutton">
</div>
</form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="script.js"></script> <!--add the link to the jquery file here -->

       
</body>
</html>
