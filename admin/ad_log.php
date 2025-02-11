<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}
body{
    background-color:#DDF7E3;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.logindiv {
    position: relative;
    margin: auto;
    margin-top: 18vh;
    width: clamp(350px, 30%, 420px);
    height: clamp(470px, 50%, 450px);
    background-color: #C7E8CA;
    border-radius: 35px;
    box-sizing: content-box;
    box-shadow: 0 0 20px -8px #4a7d47 !important;
}
*,
    *:focus {
      outline: none;
    }
.input{
    color:#1b3f26;
    font-size: 15px;
    font-family: cursive;
    font-weight: bold;
    border-color:#C7E8CA;
}
    .form {
      margin: 0 auto;
      font-family: sans-serif;
      background: #C7E8CA;
    }
    .form-item {
      position: relative;
      margin-bottom: 15px;
    margin-top: 40px;
    background-color: #C7E8CA;
    border: none;
    }
    .form-item .input {
        display: block;
        width: 280px;
        height: 55px;
        background: transparent;
        border:none;
        border-bottom: solid 1px #ccc;
        transition: all 0.3s ease;
        margin-left:20px;
        border-color:#1b3f26;
    }
    .form-item .input:focus {
      border-color: #1b3f26;
    }
    .form-item label {
      position: absolute;
      cursor: text;
      z-index: 2;
      top: 13px;
      left: 10px;
      font-family: cursive;
      font-size: 20px;
      font-weight: bold;
      background: #C7E8CA;
      padding: 0 10px;
      color: #1b3f26;
      transition: all 0.3s ease;
    }
    .form-item .input:focus + label,
    .form-item .input:valid + label {
      font-size: 11px;
      top: -5px;
    }
    .form-item .input:focus + label {
      color: #1b3f26;
    }
     h1{
        text-align: center;
    padding-top: 24px;
    font-family:cursive;
    padding-bottom: 15px;
    color: #253e24;
    background-color: #C7E8CA;
    }
    .submit{
    width: 70%;
    margin-left: 27px;
    margin-top: 38px;
    height: 48px;
    box-shadow: 0 0 20px -8px #4a7d47 !important;
    border-color: #1b3f26;
    background-color: #1b3f26;
    border-radius: 23px;
    color: white;
    font-family: cursive;
    font-weight: 700;
}
</style>
</head>
    <body>
    <div class="card logindiv">
  <div class="container">
  <div class="form">
    <h1>Admin</h1>
        <form action ="verification.php" method="post" style="margin-left:40px;">
      <div class="form-item">
       <input class="input" type="mail" name="mail"id="username" autocomplete="off" required />
        <label for="username">Email-Id/User name</label>
      </div>
      <div class="form-item">
       <input class="input" type="password" name="password"id="username" autocomplete="off" required />
        <label for="username">Password</label>
      </div>
      <div>
    <input type="submit" class="submit" value="submit">
</div>
</form>
</div>
  </div>
</div>
</body>
    </html>