<!DOCTYPE html>
<html lang="en">

    
    <head>
 <title>Booking Page</title>
 <link rel="stylesheet" href="recoversty.css">
</head>
 <?php include ('header.php');?>

<body>
<h2 class="head">**Booking**</h2>
    <div class="container-fluid">

  <div class="row">
    
    <div class="col-sm-6">
      <br>
      <br>
      <br>
    <img src="../image/pak1.png" height="800px" width="700px" style="margin-top:32vh;">
</div>

    <div class="col-sm-6" style="background-color:white;">
      
      
      
      <br>
      <br>
        <div class="form" style="margin-left: 26%;">
        <form action ="register.php" method="post">
      <div class="form-item">
       <input class="input" type="text" id="Name" name="name_1" autocomplete="off" required />
        <label for="Name">Name</label>
      </div>

      <div class="form-item">
        <input class="input" type="number" id="Age" name="age" autocomplete="off" maxlength="2" required />
        <labeL for="password">No.of person</label>
      </div>

      <div class="form-item">
        <input  class ="input" type="text" id="Phone-no" name="phone" autocomplete="off"  maxlength="10" required />
        <label for="Phone no">Phone-no</label>
      </div>

      <div class="form-item">
        <input  class ="input" type="date" id="Phone-no" name="brith" autocomplete="off" maxlength="12" required />
        <label for="Phone no">Date of Brith</label>
      </div>

      <div class="form-item">
      <textarea  class="input" name="address" id="Address" rows="5" cols="7" required style="padding-top:15px;"></textarea>
      <label for="Address">Address</label>
      </div>

      <div class="form-item">
        <input  class ="input" name="aadhar" type="text" id="Aadhar-no" autocomplete="off" maxlength="12" required />
        <label for="Aadhar-no">Aadhar-no</label>
      </div>
      <div class="form-item">
  <select name="package" id="cars" class="input">
    <option value="--">---</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Kerala">Kerala</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="New Delhi">New Delhi</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Jharkhand ">Jharkhand </option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
    <option value="Andaman and Nicobar">Andaman and Nicobar</option>
    <option value="Chandigarh ">Chandigarh </option>
    <option value=" Dadra and Nagar"> Dadra and Nagar</option>
    <option value="Ladakh">Ladakh</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value=" Puducherry"> Puducherry</option>
  </select>
  <label for="cars">Choose a Package:</label>
      </div>
         <div class="form-item" style="margin-top:20px;">
        <input  class ="input" name="f_date" type="date" id="From Date" autocomplete="off"style="width:27vh;" required />
        <label for="From Date">From Date</label>
      </div>

      <div class="form-item" style="margin-left:35vh;margin-top:-11vh;">
        <input  class ="input" name="t_date" type="date" id="To Date" autocomplete="off" style="width:27vh;" required />
        <label for="To Date">To Date</label>
      </div>
     <div class="form-item" style="margin-top:20px;">
    <select name="vehicle" id="cars" class="input">
  <option value="--">---</option>
    <option value="Car">Car</option>
    <option value="Bike">Bike</option>
    <option value="Train">Train</option>
    <option value="Boat">Boat</option>
    <option value="Aeroplane">Aeroplane</option>
  </select>
  <label for="cars">Choose your vehicle:</label>
</div> 
<div class="form-item">
       <input class="input" type="text" id="number" name="name_1" autocomplete="off" required />
        <label for="Name">Per-Head Amount</label>
      </div>
<div class="form-item">
        <input class="input" type="number"  id="Number" autocomplete="off" maxlength="2" required />
        <labeL for="password">No.of person</label>
      </div>
<div class="form-item">
		<input type="button" onClick="multiplyBy()" Value="How Much" class="multi" /><br>
</div>
	<p><span style="color:#ff3f00;font-family:cursive;">The Amount to be Paypaid: </span><br>
	<h4 class="result"><span id="result" ></span></h4><br>
	</p>


      <div>
      <h2 class="pay qrcode">You can scan this code for online payment</h2>
        <img src="../image/QR.png" class="qr">
</div>
      <div class="form-item">
        <h2 class="pay">Upload Payment Screenshot</h2>
        <input type="file" name="upload" id="Upload Payment Proof" style="margin-left:35px;" autocomplete="off" required />
      </div>
      <br>
      <input class="input" type="checkbox" id="checkbox" required > <b> I here by accept the terms and conditions of Tourism in India</b></input>
      
      <br>
      <br>
        <input type="submit" class="submit" value="submit">
      

    </form>
    </div>
  
</div>
    
  </div>

</div>
    
</body>
<style>
    .submit,.multi{
    width: 70%;
    margin-left: 27px;
    margin-top: 38px;
    height: 48px;
    box-shadow: 0 0 20px -8px black !important;
    border-color:#ff3f00;
    background-color: #ff3f00;
    border-radius: 23px;
    color: white;
    font-family: cursive;
    font-weight: 700;
}
.pay{
    font-size: 22px;
    font-family: cursive;
    font-weight: 700;
    color: #7e7e7e;
    margin-bottom: 20px;
    padding-left: 20px;
}
.head{
    color: red;
    text-align: center;
    font-size: 50px;
    font-family: cursive;
    font-weight: 700;
}
.qr{
    width: 50%;
    border-radius: 25px;
    margin-left: 73px;
    margin-bottom: 25px;
}
.qrcode{
    padding-left: 0px;
    padding-right: 75px;
    text-align: center;
}
.multi{
    width: 25%;
    margin-top: 10px;
}
.result{
    color: #ff3f00;
    font-family: cursive;
    text-align: center;
    font-weight: bold;
}
    </style>
    <?php include ('footer.php');?>
    <script>
		function multiplyBy() {
			num1 = document.getElementById(
				"number").value;
			num2 = document.getElementById(
				"Number").value;
			document.getElementById(
				"result").innerHTML = num1 * num2;
		}
	</script>
</html>

