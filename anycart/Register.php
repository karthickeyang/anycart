<?php
include_once("db.php");
$query ="SELECT * FROM country_table";
$results1 = $conn->query($query);
if(isset($_SESSION['email']))
{
	echo "hi";
	exit;
	header('Location: account.php');
}
include_once("db.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$company=$_POST['company'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	$city=$_POST['city'];
	$post_code=$_POST['postcode'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$password=$_POST['pass1'];
	
	
$sql = "INSERT INTO Register (`id`, `fname`, `lname`, `email`, `telephone`, `fax`, `company`, `address1`, `address2`, `city`, `postal_code`, `country`, `region/state`, `password`) 
VALUES ('','$fname', '$lname', '$email','$telephone','$fax','$company','$address1','$address2','$city','$post_code','$country','$state','$password')";
$conn->query($sql);

}
?>
<?php include_once("/header.php") ?>
<div class="container">
<div class="row">
<div class="col-md-offset-1">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="Register.php">Register</a></li>
</ol>
</div>
</div>
</div>

<div class="container-fluid">
<div class="col-md-3">
<ul class="list-group">
 <a href="register.php"><li class="list-group-item">Register</li></a>
 <a href="login.php"><li class="list-group-item">Login</li></a>
</ul>
</div>
<div class="col-md-7">
<h1>Register Account</h1><hr>
<!-- <p>If you already have an account with us, please login at the login page.</p> -->
<h4>Your Personal Details</h4>
  <form data-toggle="validator" role="form" class="form-horizontal" method="post" name="register" action="<?php  ?>">
  <div class="form-group">
      <label class="col-sm-2 control-label " for="FirstName" >FirstName:</label>
	  <div class="col-sm-10">
		<input type="text" name="fname" class="form-control col-md-10" placeholder="Enter FirstName" required>
	  </div>
  </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">LastName:</label>
	  <div class="col-sm-10">
		<input type="text" name="lname" class="form-control" placeholder="Enter LastName" required>
	  </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="email">Email:</label>
	  <div class="col-sm-10">
		<input type="email" name="email" class="form-control" id="email" data-error="Bruh, that email address is invalid" placeholder="Enter email" required>
		<div class="help-block with-errors"></div>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="phone">Telephone:</label>
	  <div class="col-sm-10">
		<input type="number" name="telephone" class="form-control" id="email" placeholder="Enter Telephone" required>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Fax:</label>
	  <div class="col-sm-10">
		<input type="number"  name="fax" class="form-control" id="email" placeholder="Enter Fax">
	  </div>
	  </div>
    <h2>Your Address</h2>   
  <div class="form-group">
      <label class="col-sm-2 control-label" for="Company">company:</label>
	  <div class="col-sm-10">
		<input type="text" name="company" class="form-control" placeholder="Enter Company Name">
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">Address1</label>
	  <div class="col-sm-10">
		<input type="text" name="address1" class="form-control" id="email" placeholder="Enter Your Address" required>
	  </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="email">Address2</label>
	  <div class="col-sm-10">
		<input type="text" name="address2" class="form-control" id="email" placeholder="Enter Your Address2">
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="phone">City:</label>
	  <div class="col-sm-10">
		<input type="text" name="city" class="form-control" id="email" placeholder="Enter City" required>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Post Code</label>
      <div class="col-sm-10">
	  <input type="number" name="postcode" class="form-control" id="email" placeholder="Enter Postal Code" required>
	  </div>
    </div>
	
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Country</label>
	  <div class="col-sm-10">
		
<select name="country" id="country-list" class="form-control" onChange="getState(this.value);">
<option value="">Select Country</option>
				<?php
					foreach($results1 as $country) {
				?>
				<option value="<?php echo $country["id"]; ?>"><?php echo $country["country"]; ?></option>
				<?php
				}
				?>
</select>

		
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">State</label>
	  <div class="col-sm-10">
		<!-- <input type="text" name="state" class="form-control" id="email" placeholder="Enter State"> -->
		<select id="state-list" class="form-control" value="<?php echo $state; ?>" name="state" required>
		   
				<option value="">select State</option>
				
		</select>
	  </div>
    </div>  
	
	<!--
		<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Country</label>
	  <div class="col-sm-10">
		<!-- <input type="text" name="country" class="form-control" id="email" placeholder="Enter Country Name"> 
		  <select class="form-control" id="sel1" name="country" required>
				<option value="india">india</option>
				<option value="pakistan">pakistan</option>
				<option value="america">america</option>
				<option value="sri lanka">sri lanka</option>
  </select>
		
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">State</label>
	  <div class="col-sm-10">
		<!-- <input type="text" name="state" class="form-control" id="email" placeholder="Enter State"> 
		<select class="form-control" name="state" required>
		   <option></option>
				<option value="tamilnadu">taminadu</option>
				<option value="delhi">delhi</option>
				<option value="karnataka">karnataka</option>
		</select>
	  </div>
    </div>
-->	
<h3>Your Password</h3>

  <div class="form-group">
      <label class="col-sm-2 control-label" for="Company">Password:</label>
	  <div class="col-sm-10">
		<input type="password" data-minlength="6" name="pass1" class="form-control" id="inputPassword" placeholder="Enter Password" required>
		<span class="help-block">Minimum of 6 characters</span>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">Password Confirm</label>
	  <div class="col-sm-10">
		<input type="password" data-match="#inputPassword" data-match-error="Whoops, these don't match"  name="pass2" class="form-control" id="email" placeholder="Confirm Password" required>
		<div class="help-block with-errors"></div>
	  </div>
    </div>
	
	
	<h3>Subscribe News Letter</h3>
  <div class="form-group block-center">
   <input type="radio" name="newsletter" value="1" />
            Yes            <input type="radio" name="newsletter" value="0" checked="checked" />
            No            
</div>
<input class="btn btn-block btn-primary" type="submit" value="Submit" name='submit'/>

`



</form>
</div>
</div>


<?php
 include_once("footer.php")?>
 <script type="text/javascript">

function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
