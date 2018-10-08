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
      <li class="active"><a href="#">LOGIN</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Login as Admin</a></li>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$sql="SELECT * FROM leaderboard ORDER BY Score DESC";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    $i=0;
            while ($row = $result->fetch_assoc()) {
                 if($row['Name']==$_POST["Name"] && $row['password']==$_POST["password"])
                 {
                  echo  "<script type='text/javascript'>console.log('logged in as ".$row['Name']."');</script>";
                  session_start();
                  $_SESSION['user'] = $row['Name'];
                   header("Location:page.php");
                  $i=1; 
                 }
              }
              if($i==0)
              {
                  echo  "<script type='text/javascript'>alert('Inappropriate Credintials');</script>";
              }
            }
            else{
               echo  "<script type='text/javascript'>alert('Inappropriate Credintials');</script>";
            }
}
$conn->close();
?> 
</body>
</html>