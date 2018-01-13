<?php
session_start();
include 'dbconnect.php';
$j=$_POST['id'];
$friendnamee=$_POST['name_friend'];
$name=$_SESSION['name'];
echo $j;
     
  if($_POST['id']==$j )
 {     
                              echo "Hello";
                    
                              $sql2="INSERT into friends(name1,name2) values ('$friendnamee','$name');";
                                 $sql3="DELETE from friendrequest where name='$name' and friendname='$friendnamee';";
                                 $addfriendquery=mysqli_query($conn,$sql2);
                                 $addfriendquery2=mysqli_query($conn,$sql3);
                                 echo "Hello";
                                   if($addfriendquery==0)
                                     {   echo 'error in adding friend';  echo "Hello";  }
                                   else
                                     {   
                                        if($addfriendquery2==0)
                                           {
                                               echo "error in deleting from friendrequest";
                                            }
                                            else
                                              header("location: ./timeline.php");
                                           
                                      } 
                                 
                            
                            }
                         

?>