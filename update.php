<!DOCTYPE html>

<html>

<head>

     
   <link rel="stylesheet" href="insert.css">
	<div class="links">
	<a style="color:white;" href="add.php"> <b>ADD</b> </a>&nbsp &nbsp &nbsp &nbsp 
	<a style="color:white;" href="viewtransaction.php"><b> VIEW TRANSACTION</b> </a>&nbsp &nbsp &nbsp &nbsp
	<a style="color:white;" href="delete.php"> <b> DELETE</b> </a> &nbsp &nbsp &nbsp &nbsp
 	 <a style="color:white;" href="viewfeedback.php"> <b> VIEW FEEDBACK</b> </a>
  </div>
 

</head>

<body>

                 <h1>UPDATING/CHANGING THE FIELDS</h1>

                <br/>

                <div class="container">
                     

                 <form action="updateproduct.php" method="post">

                <label for="pid">Existing PID*: &nbsp &nbsp </label>

                <input type="text" name="pid" id="pid" placeholder=" " required/>
                 

                <br>
                <br>

                <label for="New_Station">New Station*: &nbsp &nbsp &nbsp </label>

                <input type="text" name="New_Station" id="New_Station" placeholder=" " required/>

               

                <br>

                <br>

                <label for="New_Planet"> New Planet: &nbsp &nbsp  &nbsp &nbsp </label>

                <input type="text" name="New_Planet" id="New_Planet" placeholder=" " required/>

               

                 <br>

                <br>

                <label for="New_Rocket">New Rocket *: &nbsp &nbsp &nbsp  </label>

                <input type="text" name="New_Rocket" id="New_Rocket" placeholder=" " required/>

               

                 <br/>

                <br/>

                <label for="New_Cost">New Cost $: &nbsp &nbsp &nbsp &nbsp &nbsp </label>

                <input type="text" name="New_Cost" id="New_Cost" placeholder=" " required/>

     <br>

                <br>

              
                <button class="button" type="submit">Update</button>

                  </form>

                </div>

 

               

               

</body>

</html>
