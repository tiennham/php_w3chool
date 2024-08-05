<?php
session_start();
$logged_user = $_SESSION["logged_user"];
if(!$logged_user){
    header("Location: /test.php");
}
?>
<h1 class="welcome">Welcome <?php echo ($logged_user); ?></h1>

