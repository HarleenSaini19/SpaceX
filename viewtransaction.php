<!DOCTYPE html>
<html>
<link rel="stylesheet" href="insert.css">
<div class="links">
<a style="color:white;" href="add.php"> <b>ADD</b> </a>&nbsp &nbsp &nbsp &nbsp 
<a style="color:white;" href="update.php"><b> UPDATE </b> </a>	&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="delete.php"> <b> DELETE</b> </a> &nbsp &nbsp &nbsp &nbsp
  <a style="color:white;" href="viewfeedback.php"> <b> VIEW FEEDBACK</b> </a>
  </div>
<head>
<title>transaction</title> 

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
                        


                        $sql="SELECT * from transaction ;";


                         //echo "Connection established. \n";
                        
                        $result=mysqli_query($dbc,$sql) or die ("Error Querying Database");
                       echo "<th>" .'customerID &nbsp &nbsp '."</th>"; 
			echo "<th>" .'Cardholder_Name &nbsp &nbsp '."</th>";
			echo "<th>" .'Card_Number &nbsp &nbsp'."</th>";
			echo "<th>" .'Expiry_Date &nbsp &nbsp'."</th>";
			echo "<th>" .'Card_Security_code &nbsp &nbsp'."</th>";
                        while($row=mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>" . $row['cid'] . "</td>";
                            echo "<td>" . $row['Cardholder_Name'] . "</td>";
                            echo "<td>" . $row['Card_Number'] . "</td>";
                            echo "<td>" . $row['Expiry_Date'] . "</td>";              
                            echo "<td>" . $row['Card_Security_code'] . "</td>";
			
                                echo "</tr>";
                        }
                                   
                                 mysqli_close();
                          ?>
        </tr>
      </tbody>
    </table>
    </div>          
</body>
</html>

