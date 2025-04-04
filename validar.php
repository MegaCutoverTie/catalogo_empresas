<?php
session_start();
$user = isset($_POST["usuario"])?$_POST["usuario"]:"";
$pass = isset($_POST["pass"])?$_POST["pass"]:"";

if($user == "luis" && $pass = "201936754")
{
    $_SESSION["nom"] = "luis";
    header("Location: index.php");

}
else
{
    header("Location: login.php");
}
?>