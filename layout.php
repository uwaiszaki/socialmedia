<?php 
session_start();
echo "<div id='content0'> ";
echo '<div id="navbar" >
<ul>
<li class="li" ><a class="ab" style="text-decoration: none;color: white;float: left; font-size: 30px; " href="#login" title="Login If Already Registered"><b> Login</b></a></li> 
<li class="li" > <a class="ab" style="text-decoration: none;color: white;float: center; font-size: 30px;" href="#signup" title="Signup If New"><b >Signup</b></a>  </li> 
<li class="li"  style="margin-right:0px;"> <a class="ab" style="text-decoration: none; color: white; float: right; text-align: center; font-size: 30px; margin-right:80px;"  href="#content0" title=""><b>Home</b></a>  </li> 
</ul>
</div>';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
ul{
	list-style-type: none;
	font-size: 30px;
	background-color:#333;
	height: 50px;	
	margin:0px 15px 0px 0px;
	text-align: center;

}

#navbar{
    background-color: #333;

	position:fixed;
	top: 0;
    width: 1450px;
    margin-left:0;
    margin-right: 0;
}


li {    
   display: inline;
  
   
}

	




.content{
 	overflow: hidden;
}
</style>

</head>
<body>
<div style="background:url('login.jpg') fixed no-repeat ; background-size:cover; height: 800px; color:black; outline: 10px #333 solid;" > <div id="name" style="position: absolute; top:300px; left: 12cm; font-size: 50px; "> </div>  </div>
</div>


	
<script >
var name=['My Name Is Uwais Zaki'];
slider();


function slider()
{ var p=0;
	var name=["W", "e", "l","c","o","m","e ","T","o ","M","y ","W","e" ,"b","s","i","t","e"];
var a=setInterval(slidename,200);
function slidename()
{           name[p];

   document.getElementById("name").innerHTML+=name[p];
   p++;
   if(p==19)
   {  
      clearInterval(a);    
     document.getElementById("name").innerHTML="";
     slider();
   }
   
}
}






</script>

<div class="content" style="margin-top: 0; outline: 20px #333 solid;">

<div  style="background: url('login7.jpg') fixed no-repeat ; background-size: cover; height: 800px; border-right: solid 5px #333; border-left: solid 5px #333; border-top:solid 5px; outline: 10px #333 solid;">


   <br>

   <div id="login"  >
   <br><br>
   

   <form action="logincheck2.php" method="POST" style="background-color: rgba(180,180,180,.4); margin:auto;  width:400px; font-size: 30px; border:2px #333; box-shadow: 10px 10px;  margin-top: 200px; text-align: center; ">

<h1 style="text-align: center;"><i>LOGIN</i></h1>
<?php
$abc=$_COOKIE['username'];
$xyz=$_COOKIE['password'];
 $loginerr=$_SESSION['loginerr'];
echo "<p>".$loginerr."</p>";

 ?>  

Name<input type="text" name="name"  placeholder="Name" class="b" value="<?php echo $abc; ?>">  <br> <br>    
Password<input type="password" name="pass" placeholder="Password" class="b" value="<?php echo $xyz; ?>"> <br> <br>
   Remember Me <input type="checkbox" name="name1" >
  <h1 style="font-size: 20px; text-align: center; margin-bottom: 20px;"> <button  style="font-size: 30px;"> Login</button> </h1> 
</form>
 
</div>
</div>

<div style="background-color:#333; height: 20px;">
</div>


<div  style="background: url('login6.jpg') fixed no-repeat ; background-size: cover; height: 900px; border-right: solid 5px #333; border-left: solid 5px #333; border-top:solid 5px #333; ">

<div id="signup">
	<br><br>

	<form action="connectionsignup.php" method="POST"   style="background-color:rgba(180,180,180,.6); margin:auto; width: 500px; margin-top: 50px; border:solid 7px;  font-size: 20px; padding-bottom: 0; border-radius: 20px;">


<h1 style="text-align: center; background-color: red; padding: 0; margin-top: 0; border-top: 5px; border-radius: 10px;"><i>SIGN UP</i></h1>	
<div style="padding-left: 40px;">
<?php

 $nameerr=$_SESSION['nameerr'];
 $passerr=$_SESSION['passerr'];
$pass1err=$_SESSION['pass1err'];
$emailerr=$_SESSION['emailerr'];
$ageerr=$_SESSION['ageerr'];
$doberr=$_SESSION['doberr'];
$gendererr=$_SESSION['gendererr'];

echo '<p   >Name</p> <input  type="text"  name="name" placeholder="Name" > <span style="color: red;"> * '.$nameerr.'    </span> <br>
<p   >Password </p>   <input  type="Password"  name="pass"  placeholder="Password" > <span style="color: red;"> * '.$passerr.'</span><br>
<p   >Confirm Password </p> <input type="password" name="pass1"    placeholder="Password"  > <span style="color: red;"> * '.$pass1err.' </span><br>
<p>Email </p><input  type="email"  name="email" placeholder="abc@gmail.com"   > <span style="color: red;"> * '.$emailerr.' </span> <br> 
<p>Age </p><input  type="number"  name="age"  placeholder="1">   <span style="color: red;"> * '.$ageerr.' </span> 
<p>Date Of Birth </p><input  type="date"  name="dob" >    <span style="color: red;"> * '.$doberr.' </span>
<p>Gender <span style="color: red;"> * '.$gendererr.' </span>    </p>    
Male<input  type="radio"  name="gender" value="male"   > <br>     
Female <input  type="radio"  name="gender" value="female" > <br>
Other <input  type="radio"  name="gender" value="other" > <br> <br>

</div>
<h1 style="text-align: center; background-color: red; padding: 0; margin: 0; font-size: 25px; border-radius: 10px;"><i><button style="font-size: 25px;">Submit </button> </i></h1>
';
?>

</form>


</div>
</div>


<div id="repeat" style="border:5px solid #333; margin-bottom: 0; outline: 10px solid #333;">
	
</div>
<script type="text/javascript">
slide();
function slide()
{ 
	var i=0;
	var j=0;
function repeatall()
{ 
	

setInterval(repeat1,2000);
}

repeatall();

function repeat1()
{
  
document.getElementById("repeat").style.backgroundImage="url('websitea.jpg')";
   document.getElementById("repeat").style.height="800px";
    document.getElementById("repeat").style.backgroundRepeat="no-repeat";
     document.getElementById("repeat").style.backgroundSize="cover"; 
        
i++;
if( i == 1)
{   
    setInterval(repeat2,2000);

}

}
function repeat2()
{
  
  document.getElementById("repeat").style.backgroundImage="url('website2.jpg')";
   document.getElementById("repeat").style.height="800px";
    document.getElementById("repeat").style.backgroundRepeat="no-repeat";
     document.getElementById("repeat").style.backgroundSize="cover"; 
     
j++;
if( j == 1)
{     
    slide();

}

}

}

</script>
</div>







</body>
</html>