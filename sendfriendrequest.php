<?php
session_start();
$friendname=$_POST['requestfriend'];
$name=$_SESSION['name'];
include 'dbconnect.php';
$sql="INSERT INTO friendrequest (friendname,name) VALUES ('$name','$friendname' );";
  $query=mysqli_query($conn,$sql);
if($query==0)
{ die("friend not added"); }
else
echo "friend added";
header("location: ./timeline.php");

?>