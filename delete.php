<!DOCTYPE html>

<html>

<head>

     

  <link rel="stylesheet" href="insert.css">
<div class="links">
<a style="color:white;" href="add.php"> <b>ADD</b> </a>&nbsp &nbsp &nbsp &nbsp 
<a style="color:white;" href="update.php"><b> UPDATE </b> </a>	&nbsp &nbsp &nbsp &nbsp
<a style="color:white;" href="viewtransaction.php"> <b> VIEW TRANSACTION</b> </a> &nbsp &nbsp &nbsp &nbsp
  <a style="color:white;" href="viewfeedback.php"> <b> VIEW FEEDBACK</b> </a>
  </div>

</head>

<body>

                 <h1>Delete the items</h1>

                <br/>

                <div class="container">
                     

                 <form action="deleteproduct.php" method="post">

               

                 

               
                <br>

                <label for="pid">&nbsp PRODUCT ID*: &nbsp &nbsp &nbsp &nbsp &nbsp </label>

           
                <input type="text" name="pid" id="pid" placeholder=" " required/>
				<br>
				<br>
				<br>
		  <button class="button" type="submit">Delete</button>

               
                  </form>

                </div>

 

               

               

</body>

</html>
