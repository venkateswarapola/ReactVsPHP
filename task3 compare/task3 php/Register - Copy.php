
<!DOCTYPE HTML>
 <html>
  <head> 
    <title>Register</title>
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
      <li class="active"><a href="#">REGISTRATION</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Login as Admin</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Main Menu</a></li>
    </ul>
  </div>
</nav>
<div class="container">
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
                         
                          <label for="Comments">Comments</label>
                           <input type="text" class="form-control" name="Comments">
                             </div>  
                        <div class="form-group">

                            <label for="Phone"> Phone</label>
                          <input type="text" class="form-control" name="Phone">
                              </div>
                        
                          
                        <input id="button" type="submit" name="submit" value="Sign-Up">
                          
                    </form> 
                   </table> 
                
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
$sql = "CREATE TABLE IF NOT EXISTS leaderboard (
Rank INT(6), 
Nmae VARCHAR(30) NOT NULL,
Score INT(10)
)";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["Name"])||empty($_POST["Comments"])||empty($_POST["password"])||empty($_POST["Phone"]))
  {
    echo "<script type='text/javascript'>alert('Enter valid input');</script>";
  }
  else
  {
$sql = "INSERT INTO leaderboard (Rank,Name,Score,Comments,password,Phone)
VALUES (0,'".$_POST["Name"]."',0,'".$_POST["Comments"]."','".$_POST["password"]."','".$_POST["Phone"]."')";
if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Registered Successfully and you can login now');</script>";
    header("Location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
                    
 
</body>
</html>

