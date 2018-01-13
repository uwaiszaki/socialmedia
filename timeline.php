<?php
  session_start();
$nameee=$_SESSION['name'];
         
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style >
*{  background:url("website1.png") fixed no-repeat; background-size: cover;
font-size: 20px;  
}
	
.a{

width:350px;  height: 300px;   
  
}
.b {
  font-size: 25px;
	width:300px;
  float:left;
  top: 400px;
}  */
.c{
width:200px;

  float:right;
  top: 400px;
}
::placeholder{
color: black;
};


.div{
  display: inline-block;
  border:solid 2px;
  width: 400px;
}
.abc{
  background:grey ; opacity: .8; width:100%; 
}

a{

}

</style>


</head>
<body>



<div id="movenavi">

<div style="position: fixed;  top:0; width:300px;" id="movenav">

<a class="ab" style="text-decoration: none; color:red; font-size: 30px; width: 90px;  padding-left: 10px; float: left; border:5px black solid; background-color:red;" href="myprofile.php" title="Go To Profile"><b style="text-align: center; font-size: 30px;"> Profile</b></a>
 <a class="ab" style="text-decoration: none; color:red ; float: right;  border:5px black solid;" href="logout.php" title="Log Out"><b style="font-size: 30px;">Log Out</b></a>  
 
 
</div>
<br><br><br>
<div class="container" style="">
<div class="row" style=" position:relative; height: 600px; border-top: 3px solid black; border-left: 3px solid black; border-right: 3px solid black; outline: 10px solid black;">

   <div  class=' col-sm-3' style="float: left; height: 600px; width: 20%; position: fixed; top: 80px;">
     <br>
     <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method='POST'  >
     <h4 >Search Friend</h4>
     <input type="text" name="friendsearch"  placeholder="name" style="border:2px solid black;">
     <input type="submit"  name="submitsearch" value="Search" style="border:2px solid black;">
     </form>
     <br>
     <?php
        include 'dbconnect.php';         
         

        if(isset($_POST['submitsearch']))
          {
	      
              $friendsearch=$_POST['friendsearch'];
	      $mysqladd="SELECT * FROM signup WHERE name='$friendsearch';";
$query=mysqli_query($conn,$mysqladd);
$resultadd=mysqli_num_rows($query);
if($resultadd==0)
{
  echo "Search Not Found";
}
else
{  
  
$row=mysqli_fetch_assoc($query);
echo "<a href='friendsprofile.php'> ".$row['name']."</a>";  
echo "<form action='sendfriendrequest.php'  method='POST' > " ;
echo  "<input type='submit' name='submitrequest' value='Send Request'> ";
echo  "<input type='hidden' name='requestfriend' value=$friendsearch ></form>";
      echo "<br>";
/*
if(isset($_POST['submitrequest']))
{  echo "hello1";
  $sqlrequest='INSERT INTO friendrequest (friendname,name) VALUES ("$friendsearch","$nameee]" );';
  $friendrequestquery=mysqli_query($conn,$sqlrequest);
echo "hello2";
if($friendrequestquery==0)
{ die("friend not added"); }
else
echo "friend added";

}
echo "hello5";
*/
}

          }

      ?>
      
   </div>


   

           <div    class=" col-sm-6" style="position: fixed; top:11%; left: 22%; width: 60%; float: left; height: 700px; overflow:scroll; border-left: 3px solid black; border: 3px solid black;">      
         <div style="padding-left: 0px; ">
         <form action=" <?php echo $_SERVER['PHP_SELF']; ?> "  method="POST"  enctype="multipart/form-data" style=" width: 100%; margin-top: 3%; margin-left: 30%;" >
         
          	
         <input type="text" name="comments"   placeholder="write" style="border:2px black solid; ">  <br>
         <input type="file" name="file" value="Upload Picture"  style="padding-left: 40px; "> <br>
         <input type="submit" name="submit2"   style="border:2px black solid; ">
         </form>
         </div>
           <br>
           <div style="margin-left: 30%;">
         <?php
            if(isset($_POST['submit2']))
            {  include 'timelineupload.php';  }

            
  
              $sqlll= "SELECT * from timeline where nameuser='$nameee';";
              $resulttimeline=mysqli_query($conn,$sqlll);
                 $result2=mysqli_num_rows($resulttimeline);
                 if($result2==0)
                       {
                        echo "Nothing to show";
                        }
                      else
                     {
                        
                        
                          while($row=mysqli_fetch_assoc($resulttimeline))
                              {    
                                   echo "<br><br><span><b>".$row['comment']."</b><br><br>";
                                   if($row['image']!='uploads/')
                                  {  echo " <img src='".$row['image']."'  class='a'>"; }
                              }


                      } ?>

                    
</div>
     </div>


              <div class="col-sm-3" style=" float:left; width: 10%; height: 85%; position: fixed ; top:12%; left: 85%; "><br> <h4>Friend Requests</h4><br>
                  <?php
                  
                  $request="SELECT * from friendrequest where name='$nameee'";
              	  $requestquery= mysqli_query($conn,$request);
                  $numrows=mysqli_num_rows($requestquery);
                  if($numrows==0) echo "No Pending Friend Request ";
                     $i=$numrows; 
                     $j=$i;
                      while($requestrow=mysqli_fetch_assoc( $requestquery))
                           {      
                          echo "<form action='addfriend.php'  method='POST' style=''> ";
                            $addfriend=$requestrow['friendname'];
                            echo   $addfriend;
                             
                             echo "<input type='submit'  value='Add Friend' name='submit' style='border:2px solid'><br>";
                             echo "<input type='hidden' name='id' value=$i >";
                             echo "<input type='hidden' name='name_friend' value=$addfriend >";
                             echo "</form>";
                             $i--;
                            }

                            
                            ?>
                        
                       
                 </div>
                </div>
                
                </div>
                </div> 

                </body>
                </html> 


	

