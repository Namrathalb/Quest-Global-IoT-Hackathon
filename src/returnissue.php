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
include("connection.php");
$sql = "DELETE FROM given";
$result=mysqli_query($link, $sql);
?>
<meta http-equiv="refresh" content="3;url=view.php" />
