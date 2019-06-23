<?php
//to require password
require 'connection.php';
    session_start();
 ?>

<?php	
$link = mysqli_connect("localhost", "root", "", "books");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
include_once("connection.php");
if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM request WHERE id='$id'";
        $res= mysqli_query($link, $sql) or die("ERROR: Could not connect. " . mysqli_connect_error());
        echo "REqEST has been sucessfully seen by admin";
		echo "<meta http-equiv='refresh' content='0;url=product.php'>";
	}
?>
<meta http-equiv="refresh" content="3;url=product.php" />
