<html>
<head>
<title>Add Page</title>
</head>
<body>
<h2>Add here</h2>
<?php
         
          $pid = $_POST['pid'];
         

       $db_host="localhost";
       $db_username="testuser";
          $db_passwd="password";
              
          $dbc=mysqli_connect('localhost','testuser','password','addressbook')
          or die ("Could not Connect! \n");

        
$sql="delete from  products where pid=$pid;";

          
         echo "Connection established. \n";
          
	$result= mysqli_query($dbc,$sql) or die ("Error querying");

          mysqli_close();
          //header('Location: /add.html');
?>
</body>
</html>

