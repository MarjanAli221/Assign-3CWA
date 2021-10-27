<?php
session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "Administrator" && $password == "Echo@SierraBravo88"){
        $_SESSION["username"] = "admin";
    } else {
        $error = "<p>Username or Password maybe incorrect!</p>";
    }
}
if(isset($_SESSION["username"])){
    header("Location: manage.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN || AL TECHNOLOGIES HR Manager</title>
        <link rel="stylesheet" href="./styles/style.css" />
    </head>
    <body>
        <?php include "header.inc"?>
        <div class="container">
            <div class="login-area">
                <p>Username:Administrator<br>Password: Echo@SierraBravo88</p>
                <form method="post">
                    <input type="text" name="username"/>
                    <input type="password" name="password">
                    <input type="submit" value="Log In">
                </form>
                <?php echo $error; ?>
            </div>
        </div>
    </body>
</html>
