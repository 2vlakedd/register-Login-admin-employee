<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h4 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b>&nbsp<b><?php echo htmlspecialchars($_SESSION["lastname"]); ?></b>&nbsp<b><?php echo htmlspecialchars($_SESSION["middlename"]); ?><br></b>this account created at</h1><b><?php echo htmlspecialchars($_SESSION["created_at"]); ?></b>
	  <h4 class="my-5">Your employee number is, <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b>. and you are belong to <b><?php echo htmlspecialchars($_SESSION["role"]); ?></b> .</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>
