<!DOCTYPE HTML>
 <html>
  <head> 
    <title>Admin Update Page</title>
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
      <li class="active"><a href="#">ADMIN UPDATES</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
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
                    <label for="Name">Name</label>
                     <input type="text" class="form-control" name="Name">
                        </div>
                        <div class="form-group">
                         
                          <label for="Rank">Rank</label>
                           <input type="text" class="form-control" name="Rank">
                             </div>  
                        <div class="form-group">

                            <label for="Score"> Score</label>
                          <input type="text" class="form-control" name="Score">
                              </div>
                        
                          
                        <input id="button" type="submit" name="submit" value="Update">
                          
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
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["Name"])||empty($_POST["Score"])||empty($_POST["Rank"]))
  {
    echo "<script type='text/javascript'>alert('Enter valid input');</script>";
  }
  else
  {
$sql = "UPDATE leaderboard"." SET Score=Score+'".$_POST["Score"]."',Rank='".$_POST["Rank"]."'"."WHERE Name='".$_POST['Name']."'";
if ($conn->query($sql) === TRUE) 
{
echo "<script type='text/javascript'>alert('Update Successfull');</script>";
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
                    
 
</body>
</html>

