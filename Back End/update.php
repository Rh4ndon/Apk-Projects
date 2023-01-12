<?php

$dbc = mysqli_connect("localhost", "id18495861_admin", "JH_9I-G{Z\<h9^To", "id18495861_hospitalrooms");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "id18495861_hospitalrooms";
$dbs = mysqli_select_db($dbc,$db );
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
$ID = mysqli_real_escape_string($dbc, $_GET['ID']);
$Name = mysqli_real_escape_string($dbc, $_GET['Name']);
$Vacant = mysqli_real_escape_string($dbc, $_GET['Vacant']);
$Total = mysqli_real_escape_string($dbc, $_GET['Total']);
$query = "Update hospitals SET Name='$Name',Vacant='$Vacant',Total='$Total' where ID='$ID'";
if(mysqli_query($dbc, $query)){
echo "Records Updated successfully";
} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>