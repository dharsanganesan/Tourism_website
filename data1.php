<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('main.php');
$first=$_POST['first'];
$emailid=$_POST['emailid'];
$user=$_POST['user'];
$password=$_POST['password'];
$repass=$_POST['repass'];
$qry ="INSERT signup (`first`,`emailid`,`user`, `password`,`repass`) VALUES ('$first','$emailid','$user','$password','$repass')";
echo $qry;

$result=mysqli_query($conn,$qry);
if($result){
   echo "<script type='text/javascript'> document.location ='log.php'; </script>";
   exit ();
}
else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>