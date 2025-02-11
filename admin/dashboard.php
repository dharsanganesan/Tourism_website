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
<style>
  .label_32 {
    font-family: cursive;
    color: black;
    text-align: left;
    font-weight: 700;
    padding-left: 40px;
}
  </style>
<body>
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
      <button class="button-menu slider-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 385">
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
    <section style="margin-left:11vh;">
    <div class="page-content">
      <h3>Dashboard</h3>
<div class="container-fluid">
  <div class="row" style="padding-top:35px;">
    <div class="col">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <i class="fa fa-plus" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
    </div>
    <div class="flip-card-back">
      <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white; text-decoration: none;">Create Package</a>
     <h4>37</h4>
    </div>
</div> 
  </div>
</div></div>
    <div class="col">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front2">
    <i class="fa fa-list" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
    </div>
    <div class="flip-card-back">
    <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">Manage Package</a>
     <h4>37</h4>
    </div>
    </div>
  </div>
</div></div>
    <div class="col">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front3">
    <i class="fa fa-users" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
    </div>
    <div class="flip-card-back">
    <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">User</a>
     <h4>10</h4>
    </div>
    </div>
  </div>
</div>
  </div>
  </div>
</div>
<div class="page-content">
      
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front4">
          <i class="fa fa-list" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
          </div>
          <div class="flip-card-back">
          <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white; text-decoration: none;">Booking</a>
     <h4>20</h4>
    </div>
          </div>
        </div>
      </div></div>
          <div class="col">
          <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front5">
          <i class="fa fa-file-text-o" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
          </div>
          <div class="flip-card-back">
          <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">Enquiries/Feedback</a>
     <h4>12</h4>
    </div>
          </div>
        </div>
      </div></div>
          <div class="col">
          <div class="flip-card" style="margin-left:15px;">
        <div class="flip-card-inner">
          <div class="flip-card-front6">
          <i class="lni lni-bullhorn" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
          </div>
          <div class="flip-card-back">
          <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">Notifications</a>
     <h4>5</h4>
    </div>
          </div>
        </div>
      </div>
        </div>
        </div>
        <div class="page-content">
      
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          <div class="flip-card" style="margin-left:-9px;">
        <div class="flip-card-inner">
          <div class="flip-card-front7">
          <i class="fa fa-folder-open" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
          </div>
          <div class="flip-card-back">
          <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">Issues</a>
     <h4>5</h4>
    </div>
          </div>
        </div>
      </div></div>
          <div class="col">
          <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front8">
          <i class="fa fa-times" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
          </div>
          <div class="flip-card-back">
          <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">Cancelled Booking</a>
     <h4>5</h4>
    </div>
          </div>
        </div>
      </div></div>
          <div class="col">
          <div class="flip-card" style="margin-left:22px;">
        <div class="flip-card-inner">
          <div class="flip-card-front9">
          <i class="lni fa fa-check" aria-hidden="true" style="width:300px;height:200px;font-size:100px;margin-top:10vh;"></i>
          </div>
          <div class="flip-card-back">
          <div style="font-size: 30px;font-family: cursive;margin-top: 73px;">
     <a href="#" style="color:white;text-decoration: none;">Confirmed Booking</a>
     <h4>5</h4>
    </div>
          </div>
        </div>
      </div>
        </div>
        </div>
</div>
    </div>
  </div>
</div>
</section>
</body>
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
<script>
  let menuButton = document.querySelector(".slider-menu");
let container = document.querySelector(".container");
let pageContent = document.querySelector(".page-content");
let responsiveBreakpoint = 991;

// if (window.innerWidth <= responsiveBreakpoint) {

//   container.classList.add("nav-closed");
// }

// menuButton.addEventListener("click", function () {
//   container.classList.toggle("nav-closed");
// });

// pageContent.addEventListener("click", function () {
//   if (window.innerWidth <= responsiveBreakpoint) {
//     container.classList.add("nav-closed");
//   }
// });


// window.addEventListener("resize", function () {
//   if (window.innerWidth > responsiveBreakpoint) {
//     container.classList.remove("nav-closed");
//   }
// });


let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});
  </script>
</html> 
