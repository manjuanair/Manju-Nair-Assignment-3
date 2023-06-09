<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger Menu</title>
  <link rel="stylesheet" type="text/css" href="style.css"><!--add the link to the css  file here -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
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
        <main>
            <div class="imgcontainer">
                <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg"  style="width:100%;">      
                <div class="imgtext">Come Experience<br> Canada</div>                  
              </div>
            <h1>Upcoming adventures!!</h1>
            <p>
          <?php // adding the adventures that are created using admin-add.php and admin-confirm.php 
        include("all-adventures.php");
          ?>
        </p> 
            <h2 style="color:green; ">Halifax</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </p>
            <h2 style="color:green; ">Sydney</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </p>

       
        </main>
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="script.js"></script> <!--add the link to the jquery file here -->
    </body>

</html>