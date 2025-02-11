<html>
    <head>
          <title> Log</title>
          <link rel="shortcut icon" type="image/png" href="../image/logo1.jpg">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
          <link href="https://fonts.googleapis.com/css2?family=Cambria:wght@300;400;500&display=swap" rel="stylesheet" />
          <link rel="stylesheet" href="logcss.css">
          <link rel="stylesheet" href="styles.css" />
    </head>
    <body style="background-color: #222831;">
        <section style="margin-left: 175px;">
        <section style="display: flex;">
        <div class="color">
             <section>
                <div class="card">
                    <div class="container">
                        <div style="position: relative; top: 14vh;">
                            <center>
                            <img src="../image/lo_log.png" width="85%" height="50%" style="margin-right:22px;"><br>
                                <h6 style="font: bold small-caps 15px Verdana;margin-top:-10px;">Tourist in India</h6>
                            </center>
                        </div>
                        </div>
                  </div>
            </section> 
        </div>
<div class="flex"> 
    <section>
        <div class="card1">
            <div class="container">
             <section>
                <h2 class="let">Log in</h2>
                <form action="data.php" method="post">
                    <div class="com">
                    <div class="control">
                        <input type="email" name="emailid" required>
                        <label>Email ID</label>
                      </div>  
                      <div class="control">
                        <input type="password" maxlength="10" name="password" required>
                        <label>Password</label>
                      </div> 
                      </div> 
                      <a href="forgot.php" id="sign" class="shimmer">Forgot password ?</a>
                      <button type="submit"  class="btn btn-primary">Log in </button>
                      <h6 class="paragr">If you do not have account click <a href="sign.php">Sign Up</a></h6>
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
<style>
    .paragr{
    margin-top: 25px;
    margin-left: 72px;
    font-size: 11px !important;
    font: bold small-caps 21px Verdana;
}
.let {
    text-align: center;
    margin-top: 7vh;
    font-family: Georgia;
    font-weight: bold;
    font-size: 40px;
    color: #00eebc;
}
    </style>
</html>