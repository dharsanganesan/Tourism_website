<?php include ('dash_board.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <h3 class="label_32" style="margin-top:25px;">Create Package</h3><br>
    <section style="margin-top:17vh;margin-left:-48vh;">
    <div class="form">
            <form action="create_package.php" method="POST" enctype="multipart/form-data">
              <div class="form-item">
                <input class="input"type="text"  name="name"id="Package Name"autocomplete="off"required/>
                <label for="Package Name">Package Name</label>
              </div>

              <div class="form-item">
                <input class="input"type="text"  name="type"id="Package Type"autocomplete="off"required/>
                <label for="Package Type">Package Type</label>
              </div>

              <div class="form-item">
                <input  class="input"type="text" name="location"id="Package Location"autocomplete="off"required/>
                <label for="Package Location">Package Location</label>
              </div>

              <div class="form-item">
                <input  class="input"type="text" name="free"id="Package Feature"autocomplete="off"required/>
                <label for="Package Feature" style="font-size:17px">eg:free pickup/drop/discount</label
                >
              </div>

              <div class="form-item">
                <textarea
                  class="input"
                  id="Package Details"
                  rows="5"
                  name="detail"
                  cols="7"
                  required
                  style="padding-top:20px;"
                ></textarea>
                <label for="Package Details">Package Details</label>
              </div>

              <div class="form-item">
                <h3 class="namely">Package Image:</h3>
                <br />
                <input type="file"id="Package Image"name="image"required style="margin-left:25px;"/>
              </div>
              <br />
              <div style="display:flex; margin-bottom:25px;">
              <input type="submit"class="btn btn-primary submit" value="submit">
              <button type="reset"class="btn btn-secondary reset">Reset</button>
             </div>
            </form>
          </div>
</section>
</body>
</html>