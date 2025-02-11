<!DOCTYPE html>
<html lang="en">
 <title>Enquiry/Feedback</title>
   <link rel="stylesheet" href="recoversty.css">
   <?php include ('header.php');?>
<body>
    <div class="container-fluid">
        <center>
  <h2 class="text">Enquiry/Feedback</h2>
 </center>
<section>
  <div class="row">
    <div class="col-sm-6">
    <img src="../image/reg.png" height="70%" width="70%" class="img">
</div>
    <div class="col-sm-6" style="background-color:white; margin-top:15vh;">
        <div class="form">
        <form action ="process.php" method="post">
      <div class="form-item">
       <input class="input" type="text" name="name"id="username" autocomplete="off" required />
        <label for="username">Username</label>
      </div>

      <div class="form-item">
        <input class="input" type="email" name="mail" id="email" autocomplete="off" required />
        <label for="password">E-mail</label>
      </div>

      <div class="form-item">
        <input class="input" type="text" name="phone" id="phone-no" autocomplete="off"maxlength="10" required />
        <label for="password">Phone-no</label>
      </div>

      <div class="form-item">
        <input  class ="input" type="text" name="subject" id="Subject" autocomplete="off" required />
        <label for="password">Subject</label>
      </div>
      <div class="form-item">
        <input  class ="input" type="text" name="description" id="Subject" autocomplete="off" required/>
        <label for="password">Description</label>
      </div>
      <div class="form-item">
        <input  class ="input" type="text" name="feedback" id="Subject" autocomplete="off" required/>
        <label for="password">Feedback</label>
      </div>
<div>
    <input type="submit" value="submit" class="submit">
</div>
    </form>
</div>
</div>
</div>
</body>
<?php include ('footer.php');?>
</html>

