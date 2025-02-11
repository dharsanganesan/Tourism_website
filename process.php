<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('main.php');
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$feedback=$_POST['feedback'];
$qry = "INSERT INTO `recover`( `name`, `mail`, `phone`, `subject`, `description`, `feedback`) VALUES ('$name','$mail','$phone','$subject','$description','$feedback')";
echo $qry;

$result=mysqli_query($conn,$qry);
if($result){
   echo "<script type='text/javascript'> document.location ='sample.php'; </script>";
   exit ();
}
else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>