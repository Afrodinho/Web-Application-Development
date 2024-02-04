<?php
    session_start();
    $message= '';

    if($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $con = mysqli_connect("172.22.0.2", "dbuser", "dbpass","db");
        // if (mysqli_connect_errno())
        // {
            // echo "failed to connect: " . mysqli_connect_error();
            // exit();
        // }


        $result = mysqli_query($con,
        "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' and password = '" . $_POST["password"]."'");
        $row = mysqli_fetch_array($result);

        //print_r($row);
        if(is_array($row))
        {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        else
        {
            $message = 'ERROR invalid Username or Password';
        }
    }

    if(isset($_SESSION['user_id']))
    {
        //moves to logged in page 
        header('Location:index.php');
    }
?>

<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name='login_form' method= 'post' action='login.php'>
        <div class='message'><?php if(!empty($message)) { echo $message; } ?></div>
        <h3>Hello! Login Here!</h3>
        <label for='username'>Username:</label>
        <input type='text' name='username'>
        <br><br>
        <label for='password'>Password:</label>
        <input type='password' name='password'>
        <br><br>
        <input type='submit' name='submit' value='Submit'>
    </form>
</body>
</html>