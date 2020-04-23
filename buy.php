<?php session_start()?>
<?php

if(isset($_GET['book']))
{
            $email=$_SESSION['email'];
            $packname=$_GET['packname'];
            $traveler=$_GET['traveler'];
            $destination=$_GET['destination'];
            $cost=$_GET['cost'];
            $mop=$_GET['mop'];
            $con= mysqli_connect('localhost','root','','hstoursandtravels');
            $q="insert into bookings (packname,email,traveler,destination,cost,mop) values ('$packname','$email','$traveler','$destination',$cost,'$mop')";
            $res= mysqli_query($con, $q);
            header('location:success.php');
             
}

?>
<?php
  $category=$_GET['category'];
  $packid=$_GET['packid'];
  $con=mysqli_connect('localhost','root','','hstoursandtravels');
  $con1=mysqli_connect('localhost','root','','hstoursandtravels');
  $q="select * from $category where packid='$packid'";
  $q1="select * from userinfo where email='$_SESSION[email]'";
  $res=mysqli_query($con, $q);
  $res1=mysqli_query($con1, $q1);
  $rowarr= mysqli_fetch_array($res);
  $rowarr1= mysqli_fetch_array($res1);
  
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
              <form method="get">
              <table border="1" class="table text-center" >
                  <tr>
                      <td>
                        <font size="5px"> PACKAGE NAME:</font>
                      </td>
                      <td>
                          <input type="text" name="packname" value="<?php echo $rowarr['packname'];?> " readonly class="form-control">
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <font size="5px"> NAME OF TRAVELER:</font>
                      </td>
                      <td>
                          <input type="text" name="traveler" value="<?php echo $rowarr1['name'];?>" class="form-control"> 
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <font size="5px"> DESTINATION:</font>
                      </td>
                      <td>
                          <input type="text" name="destination" value="<?php echo $rowarr['packdestination'];?>" readonly="" class="form-control"> 
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <font size="5px"> TOTAL BILLING COST:</font>
                      </td>
                      <td>
                          <input type="text" name="cost" value="<?php echo $rowarr['packcost'];?>" readonly="" class="form-control"> 
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <font size="5px"> METHOD OF PAYMENT:</font>
                      </td>
                      <td>
                          <SELECT name="mop" class="form-control">
                              <OPTION>
                               CASH ON ARRIVAL
                              </option>
                          </SELECT> 
                      </td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <input type="Submit" name="book" value="BOOK" class="btn btn-success form-control" style="width: 20%">
                      </td>
                      
                  </tr>
              </table>
              </form>
          </div>
      </div>
     <?php include("footer.php"); ?>
   </div>
</body>
</html>
