<!DOCTYPE html>
<link rel="stylesheet" href="insert.css">
<div class="links">
<a style="color:white;" href="add.php"> <b>ADD</b> </a>&nbsp &nbsp &nbsp &nbsp 
<a style="color:white;" href="update.php"><b> UPDATE </b> </a>	&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="delete.php"> <b> DELETE</b> </a> &nbsp &nbsp &nbsp &nbsp
  <a style="color:white;" href="viewtransaction.php"> <b> VIEW TRANSACTION</b> </a>
  </div>
<html>
<head>
<title>viewfeedback</title> 

</head>
<body>
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
                        


                        $sql="SELECT * from feedback ;";


                       // echo "Connection established. \n";
                        
                      $result=mysqli_query($dbc,$sql) or die ("Error Querying Database");
                        echo "<th>" .'customerID &nbsp &nbsp '."</th>"; 
			echo "<th>" .'Firstname &nbsp &nbsp '."</th>";
			echo "<th>" .'Lastname &nbsp &nbsp'."</th>";
			echo "<th>" .'E-mail &nbsp &nbsp'."</th>";
			echo "<th>" .'Rocket &nbsp &nbsp '."</th>"; 
			echo "<th>" .'Planet &nbsp &nbsp '."</th>";
			echo "<th>" .'Experience &nbsp &nbsp'."</th>";
                      while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                               echo "<td>" . $row['cid'] . "</td>";
                               echo "<td>" . $row['firstname'] . "</td>";
		                echo "<td>" . $row['lastname'] . "</td>";            
		                echo "<td>" . $row['email'] . "</td>";          
		              echo "<td>" . $row['rocket'] . "</td>";
				echo "<td>" . $row['planet'] . "</td>";
				echo "<td>" . $row['experience'] . "</td>";
                                echo "</tr>";
                        }
                                   
                                 mysqli_close();
                          ?>
        </tr>
      </tbody>
    </table>
               
</body>
</html>

