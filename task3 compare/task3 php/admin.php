<!DOCTYPE HTML>
 <html>
  <head> 
    <title>Sign-Up</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </head>
     <style>
                 #button{ border-radius:10px; 
                width:100px; 
                height:40px;
                 background:#FF00FF; 
                 font-weight:bold;
                  font-size:20px;
                  float:right;
                   }
 </style>
  <body background-color:d3d3d3>
      
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img1.jpg" class="img-thumbnail" alt="WEBSTACKS#" width="100" height="10"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">ADMIN LOGIN</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
       <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> User Register</a></li>
       <li><a href="index.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Main Menu</a></li>


    </ul>
  </div>
</nav>
<div class="container">
<br></br>
<br></br>
<br></br>
  <div>
      <div class="container">
                <form method="POST">
                <div class="form-group"> 
                    <label for="name">Name</label>
                     <input type="text" class="form-control" name="Name">
                        </div>
                     <div class="form-group">
                     
                       <label for="password">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                        <div class="form-group"> 
                        <input id="button" type="submit" name="submit" value="Login">
                          
                    </form> 
                  
                
               </div> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if($_POST["Name"]=='admin' && $_POST["password"]=='admin')
  header("Location:adminform.php");
  else
  echo  "<script type='text/javascript'>alert('Inappropriate Credintials');</script>";
}
else
?> 
</body>
</html>