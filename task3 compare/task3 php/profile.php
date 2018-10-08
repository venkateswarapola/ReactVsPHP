<?php
session_start();
 $_SESSION['user'];
 ?>
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
      <body background-color:d3d3d3>
      
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img1.jpg" class="img-thumbnail" alt="WEBSTACKS#" width="100" height="10"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">PROFILE</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <li><a href="page.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<br></br>
<br></br>
  <div>
 <div class="card" align="center">
  <div class="card-deck">
    <a><img src="img10.svg" class="img-thumbnail" alt="WEBSTACKS#" width="100" height="10"></a>
     <br></br>          
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM leaderboard WHERE Name='$_SESSION[user]'";
$result=$conn->query($sql);
 if ($result->num_rows > 0)
 {
  while($row = $result->fetch_assoc()){
echo  "<div class='card bg-dark'>"."<div class='card-body text-center'>"."<p class='card-text'>"."NAME:".$row['Name']."</p>"."<div>"."<div>".
      "<div class='card bg-dark'>"."<div class='card-body text-center'>"."<p class='card-text'>"."SCORE:".$row['Score']."</p>"."<div>"."<div>".
      "<div class='card bg-dark'>"."<div class='card-body text-center'>"."<p class='card-text'>"."COMMENT:".$row['Comments']."</p>"."<div>"."<div>".
      "<div class='card bg-dark'>"."<div class='card-body text-center'>"."<p class='card-text'>"."PHONE:".$row['Phone']."</p>"."<div>"."<div>";
     
 }
 }
$conn->close();
?>
  </div>                  
 </div>
</body>
</html>

