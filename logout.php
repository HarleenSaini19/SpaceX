<!DOCTYPE html>

<html>

<head>

     

  <link rel="stylesheet" href="insert.css">

</head>

<body>

<?
session_start();
session_unset();
session_destroy();
ob_start();
header("location:home.html");
ob_end_flush(); 
include 'homePage.html';
//include 'home.php';
exit();
?>

                
                 <h1>Click here to logout</h1>

                <br/>

                <div class="container">
                     

                 <form action="logout.php" method="post">

               

                 

               
		  <button class="button" type="Click Logout">logout</button>

               
                  </form>

                </div>

 

               

               

</body>

</html>
