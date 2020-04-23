<?php  session_start(); ?>
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
     <?php 
         $con= mysqli_connect('localhost','root','','hstoursandtravels');
         $q="select * from nationalpackage";
         $res= mysqli_query($con, $q);
         $num= mysqli_num_rows($res);
         for($i=0;$i<$num;$i++)
         {
             $rowarr= mysqli_fetch_array($res);
             ?>
       <a href=packbuy2.php?packid=<?php echo"$rowarr[packid]"; ?> >
           <div class="row">
           <div class="col-sm-4">
               <img src="./IMAGES/NATIONAL/<?php echo "$rowarr[packid]"; ?>.jpg" alt='image' class="img-responsive img-thumbnail"/>
               <br>
               <br>
           </div>
           <div class="col-sm-8 border-2 text-center">
               <?php
                    echo "<font size=6px color=black>PACKAGE NAME : $rowarr[packname]</font><br>";
                    echo "<div style=font-size:23px;color:black>PACKAGE DESTINATION: $rowarr[packdestination]</div><br>";
                    echo "<div style=font-size:23px;color:black>PACKAGE PRICE Rs. : <font size=10px color=green>Rs. $rowarr[packcost]</font></div><br>";
               ?>
           
               
           </div>
       </div>
          </a>
          <?php
         }
     ?>
  
     <?php include("footer.php"); ?>
   </div>
</body>
</html>


