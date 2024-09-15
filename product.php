<html>
<head>
<title>Add Page</title>
</head>
<body>
<h2>Add here</h2>
<?php
         
          $Station = $_POST['Station'];
          $Planet = $_POST['Planet'];
          $Rocket = $_POST['Rocket'];
          $Cost = $_POST['Cost'];

       $db_host="localhost";
       $db_username="testuser";
          $db_passwd="password";
              
          $dbc=mysqli_connect('localhost','testuser','password','addressbook')
          or die ("Could not Connect! \n");

         //$sql="describe products;";
$sql="INSERT INTO products VALUES (NULL,'$Station','$Planet','$Rocket','$Cost');";
//$sql="INSERT INTO products VALUES (NULL,'k','k','k','8');";
          
         echo "Connection established. \n";
          
	$result= mysqli_query($dbc,$sql) or die ("Error querying");

          mysqli_close();
          //header('Location: /add.html');
?>
</body>
</html>

