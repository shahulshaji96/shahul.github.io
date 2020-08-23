<?php 
$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname = "accounts";
$tablename = "userdata";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$db=mysqli_select_db($conn,$dbname);

?>