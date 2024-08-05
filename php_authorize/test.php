<?php
error_reporting(E_ALL);
session_start();
include('db_connect.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = (string)md5($_POST['password']);
    $user_query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
    $user_rows = mysqli_query($conn, $user_query);
    $user_count = mysqli_num_rows($user_rows);
    if($user_count) {
        $_SESSION["logged_user"] = $_POST['email'];
        header("Location: /welcome.php");
    } else {
        unset($_SESSION["logged_user"]);
        header("Location: /login_fail.php");
    }
}

?>
<div class="login">
    <form action="test.php" method="POST" class="login">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="admin@admin.com">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" value="123456789">
        <input type="submit" name="login" value="login">
    </form>
</div>
