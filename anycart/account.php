<?php
session_start();
include_once("db.php");
$query ="SELECT * FROM country_table";
$results1 = $conn->query($query);
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

	
//	exit;
 include_once("header.php") 
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-offset-1">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li><a href="account.php">Account</a></li>
			</ol>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="col-md-3">
	<?php include_once("sidebar.php")?>
	</div>
<div class="col-md-7">
<h1>My Account Details</h1><hr>
<!-- <p>If you already have an account with us, please login at the login page.</p> -->
<h4>Your Personal Details</h4>
  <form data-toggle="validator" role="form" class="form-horizontal" method="post" name="register" action="<?php  ?>">
  <div class="form-group">
      <label class="col-sm-2 control-label " for="FirstName" >FirstName:</label>
	  <div class="col-sm-10">
		<td><?php echo "$fname" ?></td>
	  </div>
  </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">LastName:</label>
	  <div class="col-sm-10">
		<td><?php echo "$lname" ?></td>
	  </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="email">Email:</label>
	  <div class="col-sm-10">
		<td><?php echo "$email" ?></td>
		<div class="help-block with-errors"></div>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="phone">Telephone:</label>
	  <div class="col-sm-10">
		<td><?php echo "$telephone" ?></td>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Fax:</label>
	  <div class="col-sm-10">
		<td><?php echo "$fax" ?></td>
	  </div>
	  </div>
    <h2>Your Address</h2>   
  <div class="form-group">
      <label class="col-sm-2 control-label" for="Company">company:</label>
	  <div class="col-sm-10">
		<td><?php echo "$company" ?></td>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="LastName">Address1</label>
	  <div class="col-sm-10">
		<td><?php echo "$address1" ?></td>
	  </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="email">Address2</label>
	  <div class="col-sm-10">
		<td><?php echo "$address2" ?></td>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="phone">City:</label>
	  <div class="col-sm-10">
		<td><?php echo "$city" ?></td>
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Post Code</label>
      <div class="col-sm-10">
	  <td><?php echo "$post_code" ?></td>
	  </div>
    </div>
	
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Country</label>
	  <div class="col-sm-10">
		
<td><?php echo "$country" ?></td>
</select>

		
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">State</label>
	  <div class="col-sm-10">
		<!-- <input type="text" name="state" class="form-control" id="email" placeholder="Enter State"> -->
		
			<td><?php echo "$state" ?></td>	
		</select>
	  </div>
    </div>  
	
	<!--
		<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">Country</label>
	  <div class="col-sm-10">
		
		
	  </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="Fax">State</label>
	  <div class="col-sm-10">
		
	  </div>
    </div>  </form>
</div>
</div>

-->


<?php
 include_once("footer.php")
 ?>
 
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

