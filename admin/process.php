<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('data.php');
$mail=$_POST['mail'];
$password=$_POST['password'];
$qry = "INSERT INTO `adminlog`( `mail`, `password`) VALUES ('$mail','$password')";
echo $qry;

$result=mysqli_query($conn,$qry);
if($result){
   echo "<script type='text/javascript'> document.location ='verification.php'; </script>";
   exit ();
}
else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>