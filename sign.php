<html>
    <head>
    <title>Sign Up</title>
    <link rel="shortcut icon" type="image/png" href="../image/logo1.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="log.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body style="background-color:#1beab6;">
    <center>
    <div class="card">
  <div class="container">
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 main">
<img src="../image/sign.png" alt="sign up" style="width:67vh;"> 
</div>
    <div class="col-sm-9" style="padding-left:52vh; padding-top:15px;">
        <h3 class="lab"><b>Sign Up</b></h3>
        <h5 class="main1">For Best Tour</h5>
        <form action="data1.php" method="post">
                    <div class="com">
                    <div class="control">
                        <input type="text" maxlength="10" name="first" required>
                        <label><b>First name</b></label>
                      </div> 
                    <div class="control">
                        <input type="email" name="emailid" required>
                        <label><b>Email ID</b></label>
                      </div>  
                      <div class="control">
                        <input type="text" maxlength="10" name="user" required>
                        <label><b>Username</b></label>
                      </div> 
                      <div class="control">
                        <input type="text" maxlength="10" name="password" required>
                        <label><b>Phone number</b></label>
                      </div> 
                      <div class="control">
                        <input type="password" maxlength="10" name="repass" required>
                        <label><b>Password</b></label>
                      </div> 
                      </div> 
                      <button type="submit"  class="btn btn-primary">Sign Up</button>
                      <h6 class="paragr">If you have account click <a href="log.php">Log In</a></h6>
                </form>
             </section>
            </div>
        </div>
    </section>
</div>
    </section>
    </section>
    </body>
<script>
    const labels = document.querySelectorAll('.control label');
labels.forEach(label => {
  label.innerHTML = label.innerText.split("").map((letter, idx) =>`<span style="transition-delay:${idx * 50}ms">${letter}</span>`).join('');
})    
    
</script>
    </div>
  </div>
</div>
  </div>
</div>
</center>
</body>
    </html>