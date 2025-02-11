<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="margin-left:0px!important;margin-right:0px!important;">
<link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container1">
  <div class="header">
    <div class="header-logo">
      <span class="site-title">Tourism in India</span>
    </div>
    <div class="header-search">
      <button class="button-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 385">
          <path d="M12 120.3h361a12 12 0 000-24H12a12 12 0 000 24zM373 180.5H12a12 12 0 000 24h361a12 12 0 000-24zM373 264.7H132.2a12 12 0 000 24H373a12 12 0 000-24z" />
        </svg></button>
      <div style="float:right; margin-right:50px;">
      <div class="header-icon">
      <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-user"></i><span style="padding-left:10px;font-family:cursive;font-size:20px;font-weight:600;">Admin</span></button>
  <div class="dropdown-content">
  <a href="#" class="link"><i class="fa fa-address-book-o" aria-hidden="true"></i><span style="padding-left:10px;font-family:cursive;">Profile</span></a>
  <a href="ad_log.php" class="link"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px; font-family:cursive;">Log out</span></a>
  </div>
</div>
      </div>
</div>
    </div>
  </div>
  <div class="main">
    <div class="sidebar">
      <ul>
        <li><a href="dashboard.php" class="active"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a></li>
        <li><a href="create.php"><i class="fa fa-plus" aria-hidden="true"></i><span>Create Package</span></a></li>
        <li><a href="package.php"><i class="fa fa-list" aria-hidden="true"></i><span>Manage Package</span></a></li>
        <li><a href="user.php"><i class="fa fa-users" aria-hidden="true"></i><span>Manage User</span></a></li>
        <li><a href="book.php"><i class="fa fa-list" aria-hidden="true"></i><span>Manage Booking</span></a></li>
        <li><a href="issues.php"><i class="fa fa-folder-open" aria-hidden="true"></i><span>Manage Issues</span></a></li>
        <li><a href="feedback.php"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Enquiries/Feedback</span></a></li>
        <li><a href="note.php"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Notifications</span></a></li>
      </ul>
    </div>
    <style>
  .link {
    color:black !important;
    text-decoration: none !important;
}
.link:hover {
    color:#ff3f00 !important;
    text-decoration: none !important;
}
  </style>