<?php
require_once('db.php');
if(!empty($_POST["country_id"])) {
	$sql ="SELECT * FROM states_table WHERE country_id = '" . $_POST["country_id"] . "'";
	$results2 = $conn->query($sql);
?>
	<option value="">Select State</option>
<?php
	foreach($results2 as $state) {
?>
	<option value="<?php echo $state["id"]; ?>"><?php echo $state["states"]; ?></option>
<?php
	}
}
?>
<?php
require_once('db.php');

$sql = "SELECT email FROM register WHERE email = " .$_POST['email'];
$row=$conn->query($sql);
if (mysqli_num_rows > 0) {
    echo "exist";

}else echo 'notexist';
?>
