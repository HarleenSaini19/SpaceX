<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
    <style>
        .error {color:#FF0000;}
    </style>
</head>
<body>

<h2>Register Here</h2>

<?php
    // Database connection info
    $db_host = "localhost";
    $db_username = "testuser";
    $db_passwd = "password";
    
    // Define variables and set to empty values
    $fnameErr = $lnameErr = $usernameErr = $emailErr = $genderErr = $passwordErr = "";
    $fname = $lname = $username = $email = $gender = $password = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // First Name validation
        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

        // Last Name validation
        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
                $lnameErr = "Only letters and white space allowed";
            }
        }

        // Username validation
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                $usernameErr = "Only letters and numbers are allowed";
            }
        }

        // Email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Password validation
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
                $passwordErr = "Password must be at least 8 characters long and contain at least one letter and one number";
            }
        }

        // Gender validation
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        // If no errors, proceed with database entry
        if (empty($fnameErr) && empty($lnameErr) && empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($genderErr)) {
            $dbc = mysqli_connect($db_host, $db_username, $db_passwd, 'addressbook') or die("Could not connect to the database!");

            $sql = "SELECT * FROM login WHERE username = '$username';";
            $result = mysqli_query($dbc, $sql);
            if (mysqli_num_rows($result) > 0) {
                $usernameErr = "Username already exists";
            } else {
                $salt = getRandString(18);
                $modPassword = $password . $salt;
                $hashpass = hash('sha256', $modPassword);

                $sql = "INSERT INTO login (uid, username, password, salt, access_level) VALUES (NULL, '$username', '$hashpass', '$salt', 1);";
                mysqli_query($dbc, $sql);
                mysqli_close($dbc);  // Close the connection
                header('Location: login.php');  // Redirect to login
            }
        }
    }

    // Function to clean input data
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Function to generate random string for password salt
    function getRandString($length = 20) {
        $charlist = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $randstr = '';
        $s = strlen($charlist);
        for ($count = 0; $count < $length; $count++) {
            $randstr .= $charlist[mt_rand(0, $s - 1)];
        }
        return $randstr;
    }
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    First Name: <input type="text" name="fname" value="<?php echo $fname;?>"/>
    <span class="error"><?php echo $fnameErr;?></span>
    <br/><br/>

    Last Name: <input type="text" name="lname" value="<?php echo $lname;?>"/>
    <span class="error"><?php echo $lnameErr;?></span>
    <br/><br/>

    Username: <input type="text" name="username" value="<?php echo $username;?>"/>
    <span class="error"><?php echo $usernameErr;?></span>
    <br/><br/>

    Password: <input type="password" name="password" value="<?php echo $password;?>"/>
    <span class="error"><?php echo $passwordErr;?></span>
    <br/><br/>

    E-mail: <input type="text" name="email" value="<?php echo $email;?>"/>
    <span class="error"><?php echo $emailErr;?></span>
    <br/><br/>

    Gender:
    <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>/>Female
    <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>/>Male
    <span class="error"><?php echo $genderErr;?></span>
    <br/><br/>

    <input type="submit" name="submit" value="Submit"/>
    <br/>  
    Already Registered? <a href="login.php">Login Here</a>
</form>

</body>
</html>
