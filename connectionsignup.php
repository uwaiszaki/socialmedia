<?php
session_start();
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass1=$_POST['pass1'];
$email = $_POST["email"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$dob=$_POST["dob"];

if(empty($name)||empty($pass)||empty($pass1)||empty($email)||empty($gender)||empty($age)||empty($dob))
{
if(empty($name))
	{   $_SESSION['nameerr']="Please Enter The Name";    }

	
if(empty($pass))
	{  $_SESSION['passerr']="Please Enter The Password";  }


if(empty($pass1))
	{  $_SESSION['pass1err']="Please confirm the Password";  }

if(empty($email))
	{  $_SESSION['emailerr']="Please Enter The Email";  }

if(empty($gender))
	{  $_SESSION['gendererr']="Please Enter The Gender";  }

if(empty($age))
	{  $_SESSION['ageerr']="Please Enter The Age";  }

if(empty($dob))
	{  $_SESSION['doberr']="Please Enter The Date Of Birth";  }

header("location: ./layout.php#signup");

}
else
{
if($pass!=$pass1)
{
	echo "Password do not match";
	include 'signup2.php';
}
else
{

$hashpass=sha1($pass);
 $conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn)
{
  die("Unable to open");
}
else
{ 
  echo "connection established<br>";
}

/*
echo  "$name<br>";
echo  "$pass<br>";
echo  "$email<br>";
echo   "$gender<br>";
echo   "$age<br>";
echo   "$dob<br>";
*/

  $sql= " INSERT INTO signup (name,password,emailid,gender,dob,age) VALUES ('$name', '$hashpass', '$email','$gender','$dob','$age' ); ";
  $result= mysqli_query($conn,$sql);
  echo "$result <br>";
 if($result==0)
{  die("sign up unsuccessful " . mysqli_error());
}
else
 {
 	echo "Sign up successful"; 
  include 'imageupload.php';
}
// create table signup( userid INTEGER(20) AUTO_INCREMENT primary key NOT NULL, name VARCHAR(20) , password VARCHAR(20) , emailid VARCHAR(20) , gender VARCHAR(5) , dob DATE ,age INTEGER(5) );
} 
}
 ?>

 
