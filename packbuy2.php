<?php session_start();
if(!isset($_GET['packid']))
{
    header("location:index.php");
}


if(isset($_GET['bookbtn']) and isset($_SESSION['email']))
{
    $packid=$_GET['packid'];
    header("location:buy.php?packid=$packid&category=nationalpackage");
}
 else if (!isset($_SESSION['email']) and isset ($_GET['bookbtn'])){
    $packid=$_GET['packid'];
    header("location:packbuy2.php?packid=$packid&msg=please login first to buy");    
}


$packid=$_GET['packid'];
$con= mysqli_connect('localhost','root','','hstoursandtravels');
         $q="select * from nationalpackage where packid='$packid'";
         $res= mysqli_query($con, $q);
         $rowarr= mysqli_fetch_array($res);
          
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HS Tours & Travels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--footer icons-->
</head>
<body>
   <div class="container-fluid" style="background-color:#B4A1BD">
     <?php include("header.php"); ?>
       <div class="row" style="margin-bottom: 30px">
           <div class="col-sm-6" >
               <?php
               if(isset($_GET['msg'])){
                   echo "$_GET[msg]";
               }
               ?>
               <img src='./IMAGES/NATIONAL/<?php echo "$packid"; ?>.jpg' class='img-responsive img-thumbnail'>
               
           </div>
           <div class="col-sm-6 text-center">
               <?php
               echo "<font size=10px color=red>$rowarr[packname]</font><br>";
               echo "<font size=6px>$rowarr[packdestination]</font><br>";
               echo "<font size=6px>$rowarr[packhotel]</font><br>";
               echo "<font size=6px>$rowarr[packdays] Days</font><br>";
               echo "<font size=6px color=green>Rs. $rowarr[packcost]</font><br>";
               
               
               ?>
           </div>
       </div>
       <div class="row">
           <div class="col-sm-4" style="padding-left: 70px">
               <form>
                   <input type="submit" value="BOOK" name="bookbtn" class="btn btn-success">
                   <input type="hidden" name="packid" value="<?php echo $packid; ?>">
               </form>
           </div>
           <div class="col-sm-8" style="padding-left: 50px">
               <a href="favourite.php?packid=<?php echo "$packid";?>&category=nationalpackage" class=" btn btn-primary">
                   <?php 
                     if(isset($_GET['msg3']))
                     {
                        echo "$_GET[msg3]";                         
                     }
                     else
                     {
                         echo "FAVOURITE";
                     }
                   ?>
                   
               </a>
           </div>
       </div>
       
      
     <?php include("footer.php"); ?>
   </div>
</body>
</html>
