<?php 
session_start();
session_regenerate_id();

require_once "prosecc/authCookieSessionValidate.php";

if(!$isLoggedIn) {
    header("Location: login.php ");
}
?>

<div class="member-dashboard">
    You have Successfully logged in! 2018.<?php
    
    
   $f = $_SESSION['user'];
   echo $f;
   ?>
    
    <a href="logout.php">Logout</a>
</div>