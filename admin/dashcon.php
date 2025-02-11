
<?php 
  
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $databasename = "project"; 
  
  // CREATE CONNECTION 
  $db = new mysqli($servername, 
    $username, $password, $databasename); 
  
  // GET CONNECTION ERRORS 
  if ($db->connect_error) { 
      die("Connection failed: " . $db->connect_error); 
  } 
  ?>