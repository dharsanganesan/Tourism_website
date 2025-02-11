<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
    width: 85%;
    margin-top: 72px;
    border-radius:15px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.forgot{
    margin-top: 51px;
    text-align: left;
    font-family: cursive;
    color: #ff3f00;
}
.input{
    margin-right: 35vh;
    margin-top: 6vh;
    border: 1px solid #d6e2f3;
    background-color: #d6e2f3;
    width: 70%;
    height: 50px;
    border-radius: 19px;
    padding-left: 23px;
    color: #ff3f00;
}
.submit{
    margin-top: 42px;
    margin-right: 25vh;
    width: 40%;
    height: 41px;
    background-color: #ff3f00;
    border: 1px solid #ff3f00;
    border-radius: 10px;
    color: white;
    font-weight: bold;
    font: bold small-caps 15px Verdana;
}
    </style>
<body style="background-color:black;">
    <center>
<div class="card">
  <div class="container">
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6" >
        <center>
        <img src="../image/forgot.png" alt="forgot" width="100%">
</center>
    </div>
    <div class="col-sm-6">
        <div class="forgot">
            <h2><b>Forgot<br>Your Password ??<b></h2> 
</div>
<form>
<div>
    <div style="text-align:left; margin-top:35px;">
    <h5>Do not fear we'll email you instructions to reset your password <b>if you don't have access to your email anymore,you can try <a href="#"style="color
    :#ff3f00">account recovery</a></h5>
    </div>
    <input type="email" placeholder="Enter Your email" class="input" require>
    <input type="submit" value="Reset Password" class="submit">
</div>
</form>
    </div>
  </div>
</div>
</div>
</div>
</center>
</body>
</html>
