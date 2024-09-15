<!DOCTYPE html>

<html>

<head>

     <link rel="stylesheet" href="insert.css">
	<div class="links">
	<a style="color:white;" href="viewtransaction.php"> <b>VIEW TRANSACTION</b> </a>&nbsp &nbsp &nbsp &nbsp 
	<a style="color:white;" href="update.php"><b> UPDATE </b> </a>	&nbsp &nbsp &nbsp &nbsp
	<a style="color:white;" href="delete.php"> <b> DELETE</b> </a> &nbsp &nbsp &nbsp &nbsp
  	<a style="color:white;" href="viewfeedback.php"> <b> VIEW FEEDBACK</b> </a>
  </div>
 

</head>

<body>

                 <h1>ADD PRODUCTS TO DATABASE</h1>

                <br/>

                <div class="container">
                     

                 <form action="product.php" method="post">

               

                 

               
                <br>

                <label for="Station">&nbsp Station*:&nbsp &nbsp &nbsp &nbsp </label>

                <input type="text" name="Station" id="Station" placeholder=" " required/>

               

                <br>

                <br>

                <label for="Planet">&nbsp Planet*: &nbsp &nbsp &nbsp &nbsp </label>

                <input type="text" name="Planet" id="Planet" placeholder=" " required/>

               

                 <br>

                <br>

                <label for="Rocket">&nbsp Rocket*: &nbsp &nbsp &nbsp &nbsp </label>

                <input type="text" name="Rocket" id="Rocket" placeholder=" " required/>

               

                 <br/>

                <br/>

                <label for="Cost">&nbsp Cost $: &nbsp &nbsp &nbsp &nbsp &nbsp </label>

                <input type="text" name="Cost" id="Cost" placeholder=" " required/>

     <br>

                <br>
				</div>

                <div class="cont">
                     
                <button class="button" type="submit">Add</button>
		
                  </form>
           </div>

                </div>

 

               

               

</body>

</html>
