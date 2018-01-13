<?php session_start(); ?>   

<html>
<head>
<title></title>
</head>
<body>
<?php

$dir="uploads/";

$filename=$dir.basename($_FILES["pic"]["name"]);
echo $filename;

$tmpfile=$_FILES["pic"]["tmp_name"];
$type=$_FILES["pic"]["type"];
//echo $type."<br>";
//echo $filename;
//echo $tmpfile;
$arr=explode('.',$filename); 
$extention=strtolower(end($arr));

$error=$_FILES["pic"]["error"];
$picturetypes=array("png","jpg","jpeg");
//echo "<br>".$error;

//echo $extention;  
if($error==0)
{

 if(in_array($extention, $picturetypes))
 { 

	   if($_FILES["pic"]["size"]<500000)
	   {
            
          	 
include 'dbconnect.php';

          
             $namename=$_SESSION['name'];
               echo $name."<br>";

               $sql = "UPDATE signup SET image='$filename'  WHERE name='$namename' ;";
               $query=mysqli_query($conn,$sql);
               if($query==0)
  {  echo "error in query".mysqli_error($conn);  }
else
  {      

if(move_uploaded_file($tmpfile, $filename))
  {   echo "Added Successfully";  header("location: ./myprofile.php"); }

   }

                
                    
	   }
         else
	       echo "Size too large";
  }
   else
	echo "Selected file is not an image";

}
else
echo "Error in uploading";



?>
</body>
</html>