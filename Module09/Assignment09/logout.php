<?php
session_start();

//logout and return to login page.
if(session_destroy())
{
    header("location: login.php");
}

// session_start();
// session_unset();
// session_destroy();
// $message = '';

?>

<html> -->
    <head>
        <title> Logout Page </title>
        <link rel="stylesheet" href = "style.css">
    </head>
<body>

<form name = 'login_form' method = "post" action = 'login.php'>
    <div class = 'message'><?php if(!empty(message)) {echo $message;} ?></div>
    <h3> Hello! Login Here </h3>
    <label for = 'username'> name = Username:</label>
    <input type = 'text' name = 'username'>
    <br><br>
    <label for = 'password'>Password:</label>
    <input type = 'password' name='password'>
    <br><br>
    <input type = 'submit' name = 'submit' value = 'Submit'>
</form>
</body>
</html> -->
