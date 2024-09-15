<html>
<head>
<title>Update  Page</title>
</head>
<body>
<h2>Add here</h2>
<?php
          $pid=$_POST['pid'];
          $New_Station = $_POST['New_Station'];
          $New_Planet = $_POST['New_Planet'];
          $New_Rocket = $_POST['New_Rocket'];
          $New_Cost = $_POST['New_Cost'];

       $db_host="localhost";
       $db_username="testuser";
          $db_passwd="password";
              
          $dbc=mysqli_connect('localhost','testuser','password','addressbook')
          or die ("Could not Connect! \n");

         
$sql="update products set Station = '$New_Station',
				Planet='$New_Planet',
				Rocket = '$New_Rocket',
				Cost='$New_Cost' where pid='$pid';";

          
         echo "Connection established. \n";
          
	$result= mysqli_query($dbc,$sql) or die ("Error querying");

          mysqli_close();
          //header('Location: /add.html');
?>
</body>
</html>

