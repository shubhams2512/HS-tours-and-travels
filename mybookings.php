<?php session_start()?>
<?php
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
 $con= mysqli_connect('localhost','root','','hstoursandtravels');
 $q="select * from bookings where email='$email'";
 $res= mysqli_query($con, $q);
 $num= mysqli_affected_rows($con);
}
else{
    $num=0;
}
 
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
       <div class="row">
           <div class="col-sm-12">
               <div class="text-center">
                   <h2>
                        <font face="gigi">YOUR BOOKINGS ARE HERE</font>
                   </h2>
               </div>
               <div class="border-1">
               <table border="1" class="table">
               <?php
            
                for($i=0;$i<$num;$i++)
                {
                     
                     $x=$i+1;
                     $rowarr= mysqli_fetch_array($res);
                     echo "<tr>";
                     echo "<td>$x. $rowarr[bid]</td>";
                     echo "<td>PACKAGE NAME: $rowarr[packname]</td>";
                     echo "<td>COST :Rs. $rowarr[cost]</td>" ;
                     echo "<td><a href=cancel.php?bid=$rowarr[bid]>CANCEL</A></td><br>";
                     echo "</tr>";
                }
       ?>
                   </table>
                   </div>
           </div>
       </div>
       
     <?php include("footer.php"); ?>
   </div>
</body>
</html>
