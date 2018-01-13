     
<!DOCTYPE html>
<html>
<head>

<style >
	
*{

    background:url("website1.png") fixed no-repeat; background-size: cover;
}

.b{  
   border: solid   black;
   float: right;
}

a{
    text-decoration-line: none;
    color:black;
    font-size: 20px;
}
.c{
    
    width:500px;
    margin:auto;
    font-size: 30px;
}
img{

    border:5px solid;
    border-radius: 30px;
}

</style>

	<title>Your Profile</title>

</head>
<body>



<?php
echo "<h1 style=' text-align:center;'>Your Profile </h1>";
include 'dbconnect.php';
echo "<div>";
echo "<a href='logout.php'  style='float:right; '><b style='font-size:30px;'>Log out </b><a>";
echo "<a href='timeline.php' style='float:left; font-size:20px;' title='Click To See Your Timeline'><b style='font-size:30px;'>Move To Timeline </b></a><br><br> ";
echo "</div>";
session_start();
$name1=$_SESSION['name'];
$sql="SELECT  * FROM signup WHERE name='$name1';";
$result=mysqli_query($conn,$sql);
 
 if($result==0)
 {
 	die("error in result");
 }
else
{   $row=mysqli_fetch_assoc($result);
echo " <div > ";
     
     

echo "<div>  <a href='imageupload.php' style=' float:left;  clear:both;'  title='Click To Upload New Profile Picture'> <img src='".$row['image']."' style=' height:300px; width:300px; float:left'; ><br> Click Picture To Upload </a>  </div>  ";


echo "<div class='c'>";     

echo "<ul>";
     echo "<li>Name : ".$row['name']."</li>";
     echo "<li>Date Of Birth : ".$row['dob']."</li>";
     echo "<li>Age : ".$row['age']."</li>";
     echo "<li>Gender : ".$row['gender']."</li>";
     echo "</ul>";  

echo "</div> ";    
echo "</div>";

$page=$_SERVER["PHP_SELF"];


}
/*echo "<br> <form method='POST' action=' '> <br>";
echo " <input type='submit'  name='submit1'>";
echo "</form>";
if(isset($_POST['submit1']))
{  echo "hello";
session_unset();
session_destroy();
}
else echo "not set";
*/



?>

</body>
</html>
