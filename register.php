<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('main.php');
$name_1=$_POST['name_1'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$brith=$_POST['brith'];
$address=$_POST['address'];
$aadhar=$_POST['aadhar'];
$package=$_POST['package'];
$f_date=$_POST['f_date'];
$t_date=$_POST['t_date'];
// $days=$_POST['days'];
$upload=$_POST['upload'];
$vehicle=$_POST['vehicle'];
$qry ="INSERT INTO `register_user`(`name_1`, `age`, `phone`, `brith`, `address`, `aadhar`, `package`, `f_date`, `t_date`, `upload`, `vehicle`) VALUES ('$name_1','$age','$phone','$brith','$address','$aadhar','$package','$f_date','$t_date','$upload','$vehicle')";
echo $qry;
$result=mysqli_query($conn,$qry);
if($result){
   echo "<script type='text/javascript'> document.location ='thank.php'; </script>";
    exit ();
}
else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>