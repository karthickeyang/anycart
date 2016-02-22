// added class to construct
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karthi";
 class any_mysqli extends mysqli{
 	public function __construct($servername,$username,$password,$dbname)
 	{
 		parent::__construct($servername,$username,$password,$dbname);
 	echo "hi";
 	if(mysqli_connect_error())
 	{
 		die('connect error');
 	}
 }
}
// Create connection
$conn = new any_mysqli($servername, $username, $password, $dbname);	
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


