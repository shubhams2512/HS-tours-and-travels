<?php
$msg="";
if(isset($_GET['btn_reg']))
{
    $name=$_GET['fname'];
    $dob=$_GET['dob'];
    $gender=$_GET['genderboxes'];
    $email=$_GET['email'];
    
    $address=$_GET['paddress'];
    $mobile=$_GET['phone'];
    $password=$_GET['password'];
   $link= mysqli_connect('localhost','root','','hstoursandtravels');
   $qry1="select * from userinfo where email='$email'" ;
   mysqli_query($link, $qry1);
   if(mysqli_affected_rows($link)>0)
   {
       $msg="<font color='red'>Email already exists</font>";
   }
   else{
   $qry="insert into userinfo(name,dob,gender,email,address,phone,password)values('$name','$dob','$gender','$email','$address',$mobile,'$password')";
   mysqli_query($link,$qry);
   if(mysqli_affected_rows($link)>0)
   {
     $msg="<font color='green'>RECORD INSERTED</FONT>";  
       
   }
   else
       {
        $msg="<font color='RED'>ERROR IN INSERTING RECORD</FONT>"; 
        
       
       }
       mysqli_close($link);
    
}
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<script src="js files/registerjs.js" type="text/javascript"></script>
<link href="css files/registercss.css" rel="stylesheet" type="text/css"/>
</head>
<body>
   <div class="container-fluid" style="background-color:#B4A1BD">
     <?php include("header.php"); ?>
  <div class="container" style="background-color:white; margin-top: 100px;margin-bottom: 100px; width: 70%">
    <div class="text-center">
        <h1 class="nice">Registration Form  <?php echo $msg ;?></h1>
    </div>
    <form class="form-horizontal" method="get"
          action="#">
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>

            <div class="col-md-4">
                <input id="name" name="fname" type="text" placeholder="Name" class="form-control input-md" required="">
                <span class="help-block">Please type in your full name</span>
            </div>
        </div>

        <!-- Select Date Of Birth-->
      
        <div class="row">
            
            <div class="form-group">
               
                <label class="col-md-4 control-label" for="selectbasic">Date of Birth</label>
                <div class="col-md-3">
                <input type="date" name="dob" class="form-control input-md" style="margin-left:5px"/>
                </div>
                

                

                

               
            </div>
         

        </div>
        <!-- Gender Input -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Gender</label>

            <div class="col-md-4">
                <div class="checkbox">
                    <label>
                        <input name="genderboxes" id="genderboxes-0" value="male" type="radio">
                        Male
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input name="genderboxes" id="genderboxes-1" value="female" type="radio">
                        Female
                    </label>
                </div>
                <span class="help-block">Please select your Gender</span>

            </div>
        </div>
        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Email</label>

            <div class="col-md-4">
                <input id="email" name="email" type="email" placeholder="Email"
                       class="form-control input-md" required="">
                <span class="help-block">Please type in your email</span>
            </div>
        </div>
      
        <!-- Paddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Permanent Address</label>

            <div class="col-md-4">
                <input id="paddress" name="paddress" type="text" placeholder="Address" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Permanent Address</span>
            </div>
        </div>
       
        <!-- Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Phone</label>

            <div class="col-md-4">
                <input id="phone" name="phone" type="number" placeholder="Phone number"
                       class="form-control input-md" required="">
                <span class="help-block">Please provide your Mobile Number</span>
            </div>
        </div>
        <!-- Password-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>

            <div class="col-md-4">
                <input id="phone" name="password" type="password" placeholder="Enter password"
                       class="form-control input-md" required>
                <span class="help-block">Please enter a password</span>
            </div>
        </div>
        <!-- confrom password-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Conform Password</label>

            <div class="col-md-4">
                <input id="phone" name="cpassword" type="password" placeholder="Confrom your password"
                       class="form-control input-md" required>
                <span class="help-block">Please confrom your password</span>
            </div>
        </div>
       
        
        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>

            <div class="col-md-8">
                <input type="submit" class="btn btn-success" name="btn_reg" value="REGISTER"/>
                <input type="reset" class="btn btn-danger"/>
            </div>
        </div>
    </form>
</div>
     <?php include("footer.php"); ?>
   </div>
</body>
</html>
