<?php
session_start();
$bid=$_GET['bid'];
 $con= mysqli_connect('localhost','root','','hstoursandtravels');
 $q="delete from bookings where bid=$bid";
 $res= mysqli_query($con, $q);
 header('location:mybookings.php');
?>
