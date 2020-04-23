<?php
   $msg="";
  if(isset($_GET['btn_lgn']))
  {
      $email=$_GET['email'];
      $password=$_GET['password'];
      $con= mysqli_connect('localhost','root','','hstoursandtravels');
      $q="select * from userinfo where email='$email' and password='$password'";
      $res= mysqli_query($con, $q);
      $num= mysqli_num_rows($res);
      if($num==1){
      session_start();
      $row= mysqli_fetch_array($res);
      $_SESSION['email']=$row['email'];
      $_SESSION['name']=$row['name'];
      mysqli_close($con);
      header('location:index.php');
      }
      else
      {
          $msg="<font color='red'>password or email is invalid</font>";
          
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
<link href="css files/logincss.css" rel="stylesheet" type="text/css"/>
<script src="js files/loginjs.js" type="text/javascript"></script>
</head>
<body>
    <div class="container-fluid" style="background-color:#B4A1BD">
     <?php include("header.php"); ?>
      
       <div class="row" style="margin-top: 150px;margin-bottom: 150px;">
               <div class="col-sm-12">
                  <div class="login-reg-panel">
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			
			<a href="register.php" id="label-login">Register</a>
		
		</div>
							
		<div class="white-panel">
			<div class="login-show">
                            <h2><font face="pacifico">LOGIN</font><?php echo $msg; ?></h2>
                               <form name="f1" method="GET">
                                   <input type="text" placeholder="ENTER YOUR EMAIL" name="email">
                                   <input type="password" placeholder="ENTER YOUR PASSWORD" name="password">
                                <input type="submit" value="Login" style="border-radius: 4px" name="btn_lgn">
                                </form>
				<a href="">Forgot password?</a>
			</div>
			
		</div>
	</div>
               </div>
           </div>
     
     <?php include("footer.php"); ?>
   </div>
</body>
</html>
