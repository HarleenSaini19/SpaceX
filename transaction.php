<!DOCTYPE html>
<link rel="stylesheet" href="insert.css">
<html>

<head>
<title>transaction</title> 

</head>

<body> 
<?php

if(isset($_POST['insert'])) {
$servername="localhost";
$username="testuser";
$password="password";
$dbname = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = ($_POST['name']);
$number = ($_POST['number']);
$date = ($_POST['date']);
$cv = ($_POST['CV']);

$sql = "INSERT INTO transaction (Cardholder_Name, Card_Number, Expiry_Date, Card_Security_code)
VALUES ('$name','$number','$date','$cv')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
	
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>

<form method="POST" action="">
                 <h1>Check out your items</h1>
                <br/>
                <div class="container">

                <p> Mandatory fields marked by *</p>

                
                 <br>
                <h3>Payment Details</h3>
                <br>
                <label for="name">&nbsp Cardholder Name*: &nbsp &nbsp &nbsp &nbsp &nbsp </label>
                <input type="text" name="name" id="name" placeholder=" " required/>
                
                <br>
                <br>
                <label for="number">&nbsp Card Number*:: &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                <input type="text" name="number" id="number" placeholder=" "required/>
                
                 <br>
                <br>
                <label for="date">&nbsp Expiry Date (MMYY)*: &nbsp</label>
                <input type="text" name="date" id="date" placeholder=" "required/>
                
                 <br/>
                <br/>
                <label for="CV">&nbsp Card Security Code*: &nbsp</label>
                <input type="text" name="CV" id="CV" placeholder=" "required/>
     <br>
                <br>
                <p>Click 'Process Transaction' to charge your card. Only click the               button once. 
                 <p>Using the back 'Refresh or Cancel' button after you press the                  'Process Transaction' button 
                 <p>will not stopthe transaction from being processed and may result in                  double charge. 
                 <br>
                <br>
                <button class="button" type="submit" name="insert" id="insert">Process Trannsaction</button>
                 <button class="button" type="submit">Cancel Trannsaction</button>
		

  </form>
                </div>

              
                
</body>
</html>