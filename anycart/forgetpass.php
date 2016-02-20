<?php
include_once("header.php");
?>

<div class="container">
<div class="row">
<div class="col-md-offset-1">
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="forgetpass.php">Forget Password</a></li>
</ol>
</div>
</div>
</div>

<div class="container-fluid">
<div class="col-md-3">
<?php include_once("sidebar.php")?>
</div>
<div  class="col-md-7">
<h1>Forgot Your Password?</h1><hr>
<p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.</p>
<br>
<h3>Your Email Address</h3>
<div style="background-color:#rgba(21, 204, 52, 0.22)">
<div   class="form-group">
      <label class="col-sm-2 control-label" for="email">Email:</label>
	  <div class="col-sm-10">
		<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
	  </div>
    </div>
</div>
</div>
</div> 				
