<!DOCTYPE html>
<html>
<head>
   <title>Welcome</title>
</head>
<style>
   button {
  margin: 20px 0;
  line-height: 2000px;
  position: relative;
  cursor: pointer;
  user-select: none;
  outline:none !important;
  width:100%;
}

button:active {

  outline:none;
}

button.ribbon {
  
  outline:none;
  outline-color: transparent;
}
button.ribbon:before, button.ribbon:after {
  top: 5px;
  z-index: -10;
}
button.ribbon:before {
  border-color: #53dab6 #53dab6 #53dab6 transparent;
  left: -25px;
  border-width: 17px;
}
button.ribbon:after {
  border-color: #53dab6 transparent #53dab6 #53dab6;
  right: -25px;
  border-width: 17px;
}

button:before, button:after {
  content: '';
  position: absolute;
  height: 0;
  width: 0;
  border-style: solid;
  border-width: 0;
  outline:none;
}

button.btn-default:before {
  border-color: #757575 #757575 #757575 transparent;
    }
    button.btn-default:after {
  border-color: #757575 transparent #757575 #757575;
    }
    
    
    
    button.btn-primary:before {
  border-color: #2e6da4 #2e6da4 #2e6da4 transparent;
    }
    button.btn-primary:after {
  border-color: #2e6da4 transparent #2e6da4 #2e6da4;
    }
    
    
    button.btn-success:before {
  border-color: #398439 #398439 #398439 transparent;
    }
    button.btn-success:after {
  border-color: #398439 transparent #398439 #398439;
    }
    .navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
</style>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<nav class="navbar navbar-center">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-center">
      <li class="active"><a><img src="img1.jpg" class="img-thumbnail" alt="WEBSTACKS#" width="300" height="30"></a></li>
    </ul>
  </div>
</nav> 
<div class="container" align="center">
   <br></br>
   <a><img src="img2.jpg" class="img-thumbnail" alt="WEBSTACKS#" width="150" height="10"></a>
   <br></br>
   <br></br>
   </div>
<div class="container">
    <div class="row">
    <div class="col-md-12">       
<a href="admin.php"><button type="button" class="btn btn-default ribbon">Login as Admin</button></a>
<br></br>
<a href="Register.php"><button type="button" class="btn btn-primary ribbon">Register(User)</button></a> 
<br></br>
<a href="Login.php"><button type="button" class="btn btn-success ribbon">Login as User</button></a>
<br></br>
    </div>
    
    
</div>
</body>
</html>