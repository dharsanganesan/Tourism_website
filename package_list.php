
<?php include ('header.php');?>
<head>
<link rel="stylesheet" href="abcss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<style>
 .container-tet {
    position: relative;
    text-align: center;
    color: black;
    width: 100% !important;
  }
  
  .centered {
    position: absolute;
    top: 53%;
    left: 32%;
    transform: translate(-50%, -50%);
    text-decoration: underline;
  }
  .text{
    font-family: "Audiowide", sans-serif;
        font-size: 30px;
        text-shadow: 3px 3px 3px #ababab;
     
  }
  .card-let1{margin-left:-21vh;}
  .img-package{
    width: 100%;
    padding-top: 15px;
    height: 100%;
    padding-bottom: 15px;
    border-radius: 20px;
}
  </style>
<body>
<section>
    <div class="container-tet">
    <div style="width:100% !important">
    <img src="../image/pack.png" alt="Package_list" width="100%  !important" height="50%">
</div>
  <div class="centered text" style="font-size:76px;">Package List</div>
</div>
</section>
<?php
require_once('main.php');
if (!$conn || $conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM create_package";
$result = $conn->query($query);
?>
<section>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
    <div>
    <center>
        <div class="card">
            <div class="container-1"> 
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-3"> <img src="<?php echo $row['image']; ?>" alt="Package Image" class="img-package"></div>
                      <div class="col-sm-9" style="padding-top: 15px;"> 
                        <h2 class="card-para" >Package Name: <?php echo htmlspecialchars($row['name']); ?> - Value Added</h2>
                        <div class="card-feature">
                            <p class="card-type">Package Type: <?php echo htmlspecialchars($row['type']); ?></p>
                        <p class="card-type-1">Package Location:  <?php echo htmlspecialchars($row['location']); ?></p>
                    <p class="card-type-1">Features :<?php echo htmlspecialchars($row['free']); ?></p>
                        </div>
                        <div class="button-1">
                           <button class="button"><span>Details</span></button>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </center>
    </div>
<?php
    }
} else {
    echo "<p>No packages found.</p>";
}
?>
</section>

</body>
<script>
  function kerala() {
  location.replace("package_detail.php")
}
function tamil(){
  location.replace("tamil.php")
}
function Arunachalpradesh(){
  location.replace("Arunachal_pradesh.php")
}
function Andhra(){
  location.replace("Andhra.php")
}
function assam(){
  location.replace("assam.php")
}
function bihar(){
  location.replace("bihar.php")
}
function chhattisgarh(){
  location.replace("chhattisgarh.php")
}
function delhi(){
  location.replace("delhi.php")
}
function jammu(){
  location.replace("jammu.php")
}
function goa(){
  location.replace("goa.php")
}
function gujarat(){
  location.replace("Gujarat.php")
}
  </script>
<?php include ('footer.php');?>