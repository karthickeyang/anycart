<!DOCTYPE html>
<html lang="en">
<head>
<title>Anycart</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.js"></script>
<style>
.navbar-default
{
	background-color:rgb(63, 177, 5);
}
.form-group.required .control-label:after {
  content:"*";
  color:red;
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Anycart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Men <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Shoes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bags <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">College Bags</a></li>
            <li><a href="#">School Bags</a></li>
            
          </ul>
        </li>
      </ul><?php
	  if(isset($_SESSION['email']))
{
	echo ' <div class="pull-right">' ;
	    echo '   <a href="logout.php">Logout</a> ';
	 echo ' </div> ';

}
?>
	  
	 
      
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
