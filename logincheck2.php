
<?php
session_start();
$name = $_POST["name"];
$pass = $_POST["pass"];
setcookie("password",$pass,time()+(60*60*24*30),"/");
$hashpass=sha1($pass);
include 'dbconnect.php';
  
if(empty($name)||empty($pass))
{ 
  $_SESSION['loginerr']="Please Enter Both fields";
 header("location: ./layout.php#login");
}    

else
{
    $sql="SELECT name,password FROM signup ;";
   $result = mysqli_query($conn,$sql);
  $resultcheck = mysqli_num_rows($result);
 $a=0;
  
  if($resultcheck > 0)
  {   
        
   while($row = mysqli_fetch_assoc($result))
    {  $pass1=$row['password'];
      $name1=$row['name'];

      if($name==$name1)
      {
      	if($hashpass==$pass1)
      {  	$a=1;
          echo "<a href='imageupload.php' >Click to upload image </a><br>";         
           
           $_SESSION['name']=$name; 
           if(isset($_POST['name1']))
           {
            setcookie("username",$_POST['name'], time() + (60*60*24*30),"/" ); 
           }
           header("location: ./timeline.php"); 
        }
      }
     
    }

      if($a==0)
  	  echo "Username or Password is incorrect";
      //else
      //include 'imageupload.php';  
   }    
else
  {
  	echo "Error in Retreiving the data";
  }
  
 }
   
 ?>