<?php  //Start the Session
session_start();
if(isset($_SESSION['email']))
{
	echo $_SESSION['email'];
	header('Location: account.php');
}
 require('db.php');
 if(isset($_POST['submit']))
{
	
	if (isset($_POST['email']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query1 = "SELECT * FROM `register` WHERE email='$email' and password='$password'";
$count = mysqli_num_rows($conn->query($query1));
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['email'] = $email;
echo $_SESSION['email'];

}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
}
	}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['email'])){
$username = $_SESSION['email'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
header('Location: account.php');
 
}else{
	
//3.2 When the user visits the page first time, simple login form will be displayed.
}
}

?>

 <?php
include_once("header.php");
?>

<div class="container">
<div class="row">
<div class="col-md-offset-1">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
</ol>
</div>
</div>
</div>

<div class="container-fluid">
<div class="col-md-3">
<ul class="list-group">
 <a href="Register.php"><li class="list-group-item">Register</li></a>
 <a href="login.php"><li class="list-group-item">Login</li></a>
</ul>

</div>
<div class="col-md-7">
<h2>Account Login</h2>
<div class="row">
<div class="col-sm-6" style ='background-color: #f5f5f5;'>
<p>Register Account</p>
<p>
By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
<br>
<a href="register.php" class="btn btn-primary">Register</a>
</p>
<br>
<br>
<br>
<br>
</div>
<div class="col-sm-6" style ='background-color: #f5f5f5; padding-left:10px;'>
<p>Returning customer</p>
<form role="form" class="form-horizontal" method="post" name="register" action="">
  <div class="form-group">
      <label class="col-sm-3 control-label " for="FirstName" >Email Address</label>
	  <div class="col-sm-10">
		<input type="text" name="email" class="form-control col-md-10" placeholder="Enter Email">
	  </div>
  </div>
	<div class="form-group">
      <label class="col-sm-3 control-label" for="LastName">Password</label>
	  <div class="col-sm-10">
		<input type="password" name="password" class="form-control" placeholder="Enter Password">
	  </div>
    </div>
	<a href="#">forget Password</a>
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>	 
<br>


</div>


</div>
<div>
</div>