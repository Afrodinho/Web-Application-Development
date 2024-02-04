<?php
    session_start();
    $message= '';

    if($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $con = mysqli_connect("172.22.0.2","dbuser","dbpass","db");
        $result = mysqli_query($con, 
        "SELECT * FROM user WHERE username=' " . $_POST["username"] . " ' and password = '". $_POST["password"]."'");
        $row = mysqli_fetch_array($result);

        if(is_array($row))
        {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        else
        {
            $message = 'Bad username or password';
        }
    }
    if(isset($_SESSION['user_id']))
    {
        header('Location:index.php');
    }
?>

<html>
<head>
    <title>User Login</title>
</head>
<body>
    <form name='login_form' method= 'post' action='login.php'>
        <div class='message'><?php if(!empty($message)) { echo $message; } ?></div>
        <h3>Welcome, please log in</h3>
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