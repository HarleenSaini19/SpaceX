<html>
<head>
<title>feedback</title>
</head>	 
<?php

 $firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$email = ($_POST['email']);
	$rocket = ($_POST['rocket']);
	$planet = ($_POST['planet']);
	$experience = ($_POST['experience']);
         

       $db_host="localhost";
       $db_username="testuser";
          $db_passwd="password";
              
          $dbc=mysqli_connect('localhost','testuser','password','addressbook')
          or die ("Could not Connect! \n");

        
$sql = "INSERT INTO feedback (cid,firstname, lastname, email, rocket, planet, experience)
	VALUES (NULL,'$firstname','$lastname','$email','$rocket','$planet','$experience')";

          
         echo "Connection established. \n";
          
	$result= mysqli_query($dbc,$sql) or die ("Error querying");

          mysqli_close();
          header('Location: /submit.php');

	?>
</body>
</html>
