
<?php
session_start();
 $_SESSION['user'];
 if(!isset($_SESSION['user']))
 {
  header("Location:login.php");
 }
?>
<html>
<head>
<title>leader Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.flip {
    font-size: 16px;
    padding: 10px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
    border: solid 1px #a6d8a8;
    margin: auto;
}

#panel {
    display: none;
}
form.search input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.search button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 24px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.search button:hover {
    background: #0b7dda;
}

form.search::after {
    content: "";
    clear: both;
    display: table;
}
 
</style>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a><img src="img1.jpg" class="img-thumbnail" alt="WEBSTACKS#" width="150" height="10"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
       <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
        <li><a href="profile.php"><span><img src="img10.svg" class="img-thumbnail" alt="WEBSTACKS#" width="50" height="5"></span></a></li>
        <li>
  	<?php
       	 echo "<a>"."<span>"."Hey ".$_SESSION['user']."</span>"."<a>";
 ?>
  </div>
</nav> 
<div class="container">
<br></br>
  <div>
<div class="topnav">
<div class="container">
<div class="search">
    <form class="search" action="">
  <input type="text" placeholder="Search" name="search">
  <button type="submit"><i vclass="fa fa-search"><span class="glyphicon glyphicon-search"></span></i></button>
</form>

  </div>
</div>
    </div>
    <div class="container">
<br></br>
  <div>
<div class="container">
<table class="table">
    <thead>
    <tr>
        <td>S.NO</td>
        <td></td>
        <td>Rank</td>
        <td>Name</td>
        <td>Score</td>
    </tr>
</thead>
<tbody>
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
$sql="SELECT * FROM leaderboard ORDER BY Score DESC";
$result=$conn->query($sql);
 if ($result->num_rows > 0) {
    $i=1;
    $x=1;
            while ($row = $result->fetch_assoc()) {
              $x=$x%10;
                echo "<tr>". 
                      "<td>".$i."</td>".
                      "<td>"."<img src='img1".$x.".svg' class='img-thumbnail' alt='WEBSTACKS' width='50' height='5'>"."</td>".
                      "<td>".$i."</td>".
                      "<td>".$row['Name']."</td>".
                      "<td>".$row['Score']."</td>".
                      "<td>"."<button class='flip' onclick='toggle_visibility(".$i.")'>view</button>"."</td>".
                      "</tr>";
                echo "<div id=".$i." style=\"display:none; background-color:#C0C0C0;\"class=\"jumbotron\">".$row['Rank']."<br>".$row['Name']."<br>".$row['Comments']."</div>";
            $i++;
            $x=$x+1;
            }
 }      
$conn->close(); 
   ?>
</tbody>
</table>
</div>
</body>
<script>
function toggle_visibility(id){
  var e=document.getElementById(id);
  if(e.style.display=="block")
    e.style.display="none";
  else
    e.style.display="block";
}
</script>
</html>