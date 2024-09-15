<!DOCTYPE HTML>
<link rel="stylesheet" href="login.css">
<html>
<a style="color:white;" href="homePage.html"><b> Home page </b> </a>	&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="info.html"> <b> Information page</b> </a> &nbsp &nbsp &nbsp &nbsp
  <a style="color:white;" href="aboutUs.html"> <b> About Us</b> </a>&nbsp &nbsp &nbsp &nbsp 
<a style="color:white;" href="feedback.php"> <b>Feedback</b> </a>

<head>

<title>Login</title>

<style>

.error {color:#FF0000;}

</style>


</head>

<body>

<h2>Login Here</h2>

<?php
		

			

          //define variables and set to empty values

            $fnameErr = $lnameErr =  $usernameErr = $emailErr = $genderErr =  "";

    	 $fname = $lname =  $username = $email = $gender = $passwordErr= "";

 

          if ($_SERVER["REQUEST_METHOD"] == "POST") {

 

 

                     if (empty($_POST["username"])) {

                               $usernameErr = "Name is required";

                       } else {

                               $username = test_input($_POST["username"]); 

                       }

 

                       if (empty($_POST["password"])) {

                               $passwordErr = "Password is required";

                       } else {

                               $password = test_input($_POST["password"]);

                       }
 

 

 

                     //continues to target page if all validation is passed

                     if ( $usernameErr ==""&& $passwordErr ==""){
			$hashpass;

                               // check if exists in database

                               $dbc=mysqli_connect('localhost','testuser','password','addressbook')

                               or die("Could not Connect!\n");

				$sql="SELECT salt from login WHERE username ='$username'";
				$result =mysqli_Query($dbc,$sql) or die("Could not Connect!\n");
				if($row=mysqli_fetch_array($result)){
					$salt =$row['salt'];
					$modPassword=$password.$salt;
       					$hashpass=hash('sha256',$modPassword);
                              	}
                               $sql="SELECT * from login WHERE username ='$username' AND 				       password='$hashpass';";
				
                               $result =mysqli_Query($dbc,$sql) or die("Could not Connect!\n");
                               $a=mysqli_num_rows($result);
				
				$sql="SELECT access_level from login WHERE username ='$username'";
				$result =mysqli_Query($dbc,$sql) or die("Could not Connect!\n");
				if($row=mysqli_fetch_array($result)){
					$access_level=$row['access_level'];
				  }
	
                              if ($a===0){

                                         $loginErr="Invalid username or password";

                               }else{

                               	
                                          if( $access_level == 0){

                                                      header('Location: adminchange.html');

                                                    }

                                                    else{

                                                       header('Location: userproduct.php');

                                                    }

                             		  }                     

				}
          	}
	
 

       // clears spaces etc to prep data for testing

          function test_input($data){

                     $data=trim ($data); // gets rid of extra spaces befor and after

                     $data=stripslashes($data); //gets rid of any slashes

                     $data=htmlspecialchars($data); //converts any symbols usch as < and > to special characters

                     return $data;

          }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

   

          User Name: <input type="text" name="username" value="<?php echo $username;?>"/>

          <span class="error"> <?php echo $usernameErr;?></span>

          <br/><br/>

          Password:

          <input type="password" name="password" value=""/>

          <span class="error"> <?php echo $passwordErr;?></span>

          <br/><br/>

          <span class="error"> <?php echo $loginErr;?></span>

 

          <input type="submit" name="submit" value="Login"/> 
		
		Not a member.<a href="registration.php">Register here</a>

</form>
 







 

</html>
