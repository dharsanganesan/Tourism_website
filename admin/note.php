<?php include ('dash_board.php');?>
<body>
    <center>
        <div>
            <h2 class="high">Notifications</h2>
</div>
        <div style="margin-left:52vh;" >
<div class="container" style="margin-top:-30vh;">
  <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
  <div class="alert alert-info">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
</div>
</div>
</center>
</body>
<style>
    .alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
   margin-top:35vh
}
.container {
    display: flex;
    /* height: 100vh; */
    width: 100% !important;
    flex-wrap: wrap;
    overflow: hidden;
}
.high {
    margin-top: 25px;
    font-size: 75px;
    font-family: cursive;
    font-family: cursive;
    color: black;
    text-align: left;
    font-weight: 700;
    padding-left: 40px;
}
    </style>