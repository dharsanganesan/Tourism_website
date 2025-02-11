<html>
    <body>
        <section style=" margin-top:25vh;">
                <center>
                    <img src="../image/front.png" alt="front" width="45%">
                    <h3>Choose who you are ??</h3><br>
                    <button class="button" onclick="User()" > User</button>
                    <button class="button1" onclick="Admin()"> Admin</button><br>
                </center>
                            </section>
    </body>
    <style>
        .button ,.button1 {
  background-color:#ff3f00;
  border: 2px solid #ff3f00;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:15px;
  font-weight:bold;
  font-family:cursive;
}
.button:hover{
    border:none;
    border-left:2px solid #ff3f00;
    border-right:2px solid #ff3f00;
    background-color:white !important;
    color:#ff3f00 !important;
}
.button1:hover{
    border:none;
    border-left:2px solid red;
    border-right:2px solid red;
    background-color:white !important;
    color:black !important;
}
.button1{
    background-color:black !important;
    color:red;
    border-color:black;
    margin-left:50px;
}
h3{
    margin-top: 20px;
    font-weight:blod;
    font-size 25px;
    font: bold small-caps 25px Verdana;
}
        </style><script>

       // this funcation is for profile
function User() {
  location.replace("sign.php")
}
function Admin() {
  location.replace("/DBMS_project/admin/ad_log.php")
}
</script>
    </html>