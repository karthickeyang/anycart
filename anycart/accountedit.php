<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<?php
include_once("db.php");
$query ="SELECT * FROM country_table";
$results1 = $conn->query($query);
session_start();
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
	
$sql="UPDATE `register` SET `fname`='$fname',`lname`='$lname',`email`='$email',`telephone`='$telephone',`fax`='$fax',`company`='$company',`address1`='$address1',`address2`='$address2',`city`='$city',`postal_code`='$post_code',`country`='$country',`region/state`='$state' WHERE email='$email'";
$conn->query($sql);
}
if(!isset($_SESSION['email']))
{
	echo $_SESSION['email'];
	header('Location: login.php');
}
$username1 = $_SESSION['email'];

$sql="SELECT * FROM `register` WHERE email='$username1'";
//echo $sql;
//exit;
$row1=$conn->query($sql);
if ($row1->num_rows > 0) {
     // output data of each row
     while($row = $row1->fetch_assoc()) {
         $fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$telephone=$row['telephone'];
	$fax=$row['fax'];
	$company=$row['company'];
	$address1=$row['address1'];
	$address2=$row['address2'];
	$city=$row['city'];
	$post_code=$row['postal_code'];
	$country=$row['country'];
	$state=$row['region/state'];
	$password=$row['password'];
     }
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
 <a href="account.php"><li class="list-group-item">my Account</li></a>
 <a href="accountedit.php"><li class="list-group-item">Edit My Account</li></a>
 <a href="logout.php"><li class="list-group-item">Logout</li></a>
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
		<input type="text" name="fname" class="form-control col-md-10" value="<?php echo $fname; ?>"  placeholder="Enter FirstName" required>
	  </div>
  </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">LastName:</label>
	  <div class="col-sm-10">
		<input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" placeholder="Enter LastName" required>
	  </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="email">Email:</label>
	  <div class="col-sm-10">
		<input type="email" name="email" class="form-control" value="<?php echo $email; ?>" id="email" data-error="Bruh, that email address is invalid" placeholder="Enter email" required>
		<div class="help-block with-errors"></div>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="phone">Telephone:</label>
	  <div class="col-sm-10">
		<input type="number" name="telephone" class="form-control" id="email" value="<?php echo $telephone; ?>" placeholder="Enter Telephone" required>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Fax:</label>
	  <div class="col-sm-10">
		<input type="number"  name="fax" class="form-control" id="email" value="<?php echo $fax; ?>" placeholder="Enter Fax">
	  </div>
	  </div>
    <h2>Your Address</h2>   
  <div class="form-group">
      <label class="col-sm-2 control-label" for="Company">company:</label>
	  <div class="col-sm-10">
		<input type="text" name="company" class="form-control" value="<?php echo $company; ?>" placeholder="Enter Company Name">
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">Address1</label>
	  <div class="col-sm-10">
		<input type="text" name="address1" class="form-control" value="<?php echo $address1; ?>" id="email" placeholder="Enter Your Address" required>
	  </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="email">Address2</label>
	  <div class="col-sm-10">
		<input type="text" name="address2" class="form-control" value="<?php echo $address2; ?>" id="email" placeholder="Enter Your Address2">
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="phone">City:</label>
	  <div class="col-sm-10">
		<input type="text" name="city" class="form-control" id="email" value="<?php echo $city; ?>" placeholder="Enter City" required>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Post Code</label>
      <div class="col-sm-10">
	  <input type="number" name="postcode" class="form-control" id="email" value="<?php echo $post_code; ?>" placeholder="Enter Postal Code" required>
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
