<div class="rows" style="">
    	<div class="col-sm-12">
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    				<div class="navbar-header">
      					<a class="navbar-brand" href="#">
                                         <font face="Pacifico">HS Tours & Travels
                                         </font>
                                        </a>
    				</div>
    				<ul class="nav navbar-nav">
      					<li class="active"><a href="index.php"><font face="Bowlby One SC">Home</font></a></li>
                                        <li class="dropdown">
                                           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><font face="Bowlby One SC">PACKAGES</font>
                                            <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="internationalpackage.php"><font face="Bowlby One SC">INTERNATIONAL</font></a></li>
                                                <li><a href="nationalpackage.php"><font face="Bowlby One SC">NATIONAL</font></a></li>
     
                                           </ul>
                                        </li>
      					<li><a href="mybookings.php"><font face="Bowlby One SC">MY BOOKINGS</font></a></li>
                                        <li><a href="contact.php"><font face="Bowlby One SC">CONTACT US</font></a></li>
                                </ul>
                           
<?php
$str=<<<ABCD
      <ul class="nav navbar-nav navbar-right" >
      					<li><a href="register.php"><font face="Bowlby One SC">REGISTER</font></a></li>
                                        <li><a href="login.php""><font face="Bowlby One SC">LOGIN</font></a></li>
      </ul>
ABCD;

$str1=<<<ABCD
      <ul class="nav navbar-nav navbar-right" >
      					<li><a href="cart.php"><font face="Bowlby One SC">CART</font></a></li>
                                        <li><a href="logout.php""><font face="Bowlby One SC">LOGOUT</font></a></li>
      </ul>
ABCD;
if(isset($_SESSION['email']))
{
    echo $str1;
}
 else {
    
 
     echo $str;
 }

?>
    				
  			</div>
		</nav>
	</div>
</div>
