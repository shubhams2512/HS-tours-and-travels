<?php session_start()?>
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
           <div class="col-sm-12" style="padding-left: 50px">
               <p style="font-size: 5vh; color: safron">Your booking is successfull please pay the amount on arrival.</p>
                  <p style="font-size: 5vh ;color:safron"> Later details are send to your linked mobile number</p>
                  <a href="index.php"class="btn btn-danger">HOME</a>
                  <a href="mybookings.php" class="btn btn-primary">YOUR BOOKINGS</a>
           </div>
       </div>
       
     <?php include("footer.php"); ?>
   </div>
</body>
</html>
