
<?php include ('header.php');?>
    <section>
        <div class="slideshow-container">

            <div class="mySlides fade">
              
              <img src="../image/img1.png" style="width:100%; max-height:90%;">
            
            </div>
            
            <div class="mySlides fade">
            
              <img src="../image/img2.jpg" style="width:100%;  max-height:90%;">
            
            </div>
            
            <div class="mySlides fade">
            
              <img src="../image/img3.jpg" style="width:100%;  max-height:90%;">
            
            </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
    </section>
    <section style="margin-bottom: 100px;">
     <div>
        <h2 class="head">Package</h2>
        <marquee style="background-color:white;color:#ff3f00"> WELCOME TO TOUR TRAVELS  PICK YOUR FAVORITE PACKAGE FOR YOUR BEST LIFE  <span style="padding-left:55px;">WELCOME TO TOUR TRAVELS  PICK YOUR FAVORITE PACKAGE FOR YOUR BEST LIFE</span></marquee>
     </div>
     <div>
        <center>
        <div class="card">
            <div class="container-1"> 
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-3"><img src="../image/kerala_logo.png" class="img-card"></div>
                      <div class="col-sm-9" style="padding-top: 15px;"> 
                        <h2 class="card-para" >Package Name: Kerala - A Lovers Paradise - Value Added</h2>
                        <div class="card-feature">
                            <p class="card-type">Package Type: Family</p>
                        <p class="card-type-1">Package Location: Kerala</p>
                    <p class="card-type-1">Features : Free Wi-fi, Free pick up and drop facility</p>
                        </div>
                        <div class="button-1">
                           <button class="button" onclick="kerala()"><span>Details</span></button>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="container-1">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-3"><img src="../image/tamil_logo.jpeg" class="img-card"></div>
                      <div class="col-sm-9" style="padding-top: 15px;"> 
                        <h2 class="card-para card-let" >Package Name: Tamil Nadu - Value Added</h2>
                        <div class="card-feature">
                            <p class="card-type">Package Type: Family</p>
                        <p class="card-type-1">Package Location: Tamil Nadu</p>
                    <p class="card-type-1">Features : Free Guide,Free Visting Agriculture</p>
                        </div>
                        <div class="button-1">
                           <button class="button" onclick="tamil()"><span>Details</span></button>
                        </div>
                    </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="card">
            <div class="container-1">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-3"><img src="../image/delhi_logo.jpeg" class="img-card"></div>
                  <div class="col-sm-9" style="padding-top: 15px;"> 
                    <h2 class="card-para card-let">Package Name: New Delhi - Value Added</h2>
                    <div class="card-feature">
                        <p class="card-type">Package Type: Family</p>
                    <p class="card-type-1">Package Location: New Delhi</p>
                <p class="card-type-1">Features : Free Guide, Free visting Industry</p>
                    </div>
                    <div class="button-1">
                       <button class="button" onclick="delhi()"><span>Details</span></button>
                    </div>
                </div>
                </div>
              </div>
        </div>
      </div>
      <div class="card">
        <div class="container-1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-3"><img src="../image/jammu_logo.jpeg" class="img-card"></div>
              <div class="col-sm-9" style="padding-top: 15px;"> 
                <h2 class="card-para" >Package Name:Jammu and Kashmir- A Lovers Paradise </h2>
                <div class="card-feature">
                    <p class="card-type">Package Type: Friend</p>
                <p class="card-type-1">Package Location:Jammu and kashmir</p>
            <p class="card-type-1">Features : Snow Race,visting Mountain</p>
                </div>
                <div class="button-1">
                   <button class="button" onclick="jammu()"><span>Details</span></button>
                </div>
            </div>
            </div>
          </div>
    </div>
  </div>
  <div class="card">
    <div class="container-1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3"><img src="../image/goa_logo.jpg" class="img-card"></div>
          <div class="col-sm-9" style="padding-top: 15px;"> 
            <h2 class="card-para" >Package Name:Goa - A Lovers Paradise - Value Added </h2>
            <div class="card-feature">
                <p class="card-type">Package Type: Friend</p>
            <p class="card-type-1">Package Location: Goa</p>
        <p class="card-type-1">Features : Beach, Body Massage</p>
            </div>
            <div class="button-1">
               <button class="button" onclick="goa()"><span>Details</span></button>
            </div>
        </div>
        </div>
      </div>
</div>
</div>
<center style=" margin-bottom:10px;margin-top:80px;">
  <h5><b>For more Package<span style="padding-left:15px;"><a href="package_list.php">Tour Package</a></span><span style="color:#ff3f00;">**</span></b></h5>
</center>

          </center>
    </section>
    
  <?php include ('footer.php');?>
</body>
<script>
    // slideshow start
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides,1500); // Change image every 2 seconds
    }
    // silde show end
    function kerala() {
  location.replace("package_detail.php")
}
function tamil(){
  location.replace("tamil.php")
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
    </script>
</html>