<!DOCTYPE html>
<link rel="stylesheet" href="insert.css">
<html>
<head>
<title>viewfeedback</title> 

</head>
<div class="links">
<a style="color:white;" href="login.php"> <b>Login page</b> </a>&nbsp &nbsp &nbsp &nbsp 
<a style="color:white;" href="homePage.html"><b> Home page </b> </a>	&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="info.html"> <b> Information page</b> </a> &nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="aboutUs.html"> <b> About Us</b> </a>&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="feedback.php"> <b>Feedback Page</b> </a>&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="logout.php"> <b>Logout</b> </a>
  </div>
<body>
<h1> OUR PRODUCTS</h1>
<br>
<br>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
                 <?php

			
                        $db_host="localhost";
                        $db_username="testuser";
                        $db_passwd="password";
                            
                         $dbc=mysqli_connect('localhost','testuser','password','addressbook')
                         or die ("Could not Connect! \n");
                      
                        $sql="SELECT * from products ;";


                      //  echo "Connection established. \n";
                        
                      $result=mysqli_query($dbc,$sql) or die ("Error Querying Database");
                       echo "<th>" .'PRODUCT NUMBER &nbsp &nbsp '."</th>"; 
			echo "<th>" .'Station &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp '."</th>";
			echo "<th>" .'Planet &nbsp &nbsp'."</th>";
			echo "<th>" .'Rocket &nbsp &nbsp'."</th>";
			echo "<th>" .'Cost($) &nbsp &nbsp'."</th>"; 
                      while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>" . $row['pid'] . "</td>";
                                echo "<td>" . $row['Station'] . "</td>";
		                echo "<td>" . $row['Planet'] . "</td>";                           
		                echo "<td>" . $row['Rocket'] . "</td>";
				echo "<td>" . $row['Cost'] . "</td>";
				echo "</tr>";
                        }
                                   
                                 mysqli_close();
                          ?>

        </tr>
      </tbody>
    </table>
</div>

  		<form action="transaction.php" method="post">                       
                <br>

                <label for="pid">&nbsp CHOOSE YOUR PRODUCT NUMBER*: &nbsp &nbsp &nbsp &nbsp &nbsp </label>

                <input type="text" name="pid" id="pid" placeholder=" " required/>
		 <button class="button" type="submit">Buy Now</button>

               
                  </form>
       
        
</body>
</html>

