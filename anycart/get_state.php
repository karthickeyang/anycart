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