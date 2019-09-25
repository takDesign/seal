<?php
include("datbase.php");
include("Users.php");
include("createUser.php");

$oUsers = new Users();
//before we create a new users, make sure that we have none
if(!$oUsers->checkUsers())
{
    $oUser = new User();
    $oUser->createUser($_POST["username"], $_POST["password"]);
}

?>