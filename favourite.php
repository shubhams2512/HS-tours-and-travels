
<?php
session_start();
$packid=$_GET['packid'];
$category=$_GET['category'];
if(isset($_SESSION['email']))
{
    
    
    $email=$_SESSION['email'];
   $con= mysqli_connect('localhost','root','','hstoursandtravels');
    $q="insert into favourite values('$email','$packid','$category')";
    mysqli_query($con, $q);
    if($category=="internationalpackage")
    {
    if(mysqli_affected_rows($con)>0)
    {
        header("location:packbuy.php?packid=$packid&msg3=ADDED TO FAVOURITE");
        
    }
    else{
        header("location:packbuy.php?packid=$packid&msg2=some technical issue");
    }
    }
 else {
       if(mysqli_affected_rows($con)>0)
    {
        header("location:packbuy2.php?packid=$packid&msg3=ADDED TO FAVOURITE");
        
    }
    else{
        header("location:packbuy2.php?packid=$packid&msg2=some technical issue");
    } 
    }
    mysqli_close($con);
}


else{
   if($category=="internationalpackage")
   {
    header("location:packbuy.php?packid=$packid&msg=Please login first to add to favourite");
   }
   else if($category=="nationalpackage")
   {
       header("location:packbuy2.php?packid=$packid&msg=Please login first to add to favourite");
   }
   
}






?>
