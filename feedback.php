<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <title>Feedback Page</title>
</head>
<body>
    <div class="links">
        <a style="color:white;" href="login.php"><b>Login page</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:white;" href="homePage.html"><b>Home page</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:white;" href="info.html"><b>Information page</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:white;" href="aboutUs.html"><b>About Us</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:white;" href="userproduct.php"><b>BOOKING</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:white;" href="logout.php"><b>Logout</b></a>
    </div>

    <h1 align="center" style="color:#FFFFFF;">FEEDBACK PAGE</h1>
    <br/>
    <h2 align="center" style="color:#FFFFFF;">WE VALUE YOUR REVIEWS.</h2>
    <h2 align="center" style="color:#FFFFFF;">WE LOVE IMPROVEMENTS.</h2>
    <br/>
    
    <div class="container">
        <h2 align="center" style="color:#FFFFFF;">Let's Launch</h2>
        <form action="submit.html" method="post" name="feedback">
            <label for="firstname">&nbsp First Name: &nbsp;</label>
            <input type="text" name="firstname" id="firstname" placeholder="Your first name" required />
            <br><br>

            <label for="lastname">&nbsp Last Name: &nbsp;</label>
            <input type="text" name="lastname" id="lastname" placeholder="Your last name" required />
            <br><br>

            <label for="email">&nbsp E-mail: &nbsp;</label>
            <input type="email" name="email" id="email" placeholder="Your email" required />
            <br><br>

            <label for="rocket">&nbsp Which rocket do you want to review?</label><br>
            <label><input type="radio" name="rocket" value="Eagle"> Eagle</label>&nbsp;
            <label><input type="radio" name="rocket" value="Phoenix"> Phoenix</label>&nbsp;
            <label><input type="radio" name="rocket" value="Dragon"> Dragon</label>
            <br><br>

            <label for="planet">&nbsp Which planet was it?</label><br>
            <label><input type="radio" name="planet" value="Moon"> Moon</label>&nbsp;
            <label><input type="radio" name="planet" value="Mars"> Mars</label>
            <br><br>

            <label for="experience">&nbsp How was the journey/experience?</label><br>
            <textarea name="experience" id="experience" placeholder="Share your experience" required></textarea>
            <br><br>

            <button class="button" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
