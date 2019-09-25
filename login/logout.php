<?php

session_start();
session_regenerate_id();

require "prosecc/Util.php";
$util = new Util();

//Clear Session
$_SESSION["member_id"] = "";
session_destroy();

// clear cookies
$util->clearAuthCookie();

header("Location: login.php");
//include '../prosecc/Util.php'
?>